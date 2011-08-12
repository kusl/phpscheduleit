<?php
require_once(ROOT_DIR . 'Domain/Access/namespace.php');

class PersonalCalendarPresenter
{

	/**
	 * @var \IPersonalCalendarPage
	 */
	private $page;

	/**
	 * @var \IReservationViewRepository
	 */
	private $repository;

	/**
	 * @var \ICalendarFactory
	 */
	private $calendarFactory;

	public function __construct(IPersonalCalendarPage $page, IReservationViewRepository $repository, ICalendarFactory $calendarFactory)
	{
		$this->page = $page;
		$this->repository = $repository;
		$this->calendarFactory = $calendarFactory;
	}
	
	public function PageLoad($userId, $timezone)
	{
		$month = $this->calendarFactory->GetMonth($this->page->GetYear(), $this->page->GetMonth(), $timezone);

		$this->repository->GetReservationList($month->FirstDay(), $month->LastDay(), $userId, ReservationUserLevel::ALL);

		$this->page->Bind($month);
	}
}

interface ICalendarFactory
{
	/**
	 * @abstract
	 * @param $year int
	 * @param $month int
	 * @param $timezone string timezone of dates in calendar
	 * @return CalendarMonth
	 */
	public function GetMonth($year, $month, $timezone);
}

/// TODO: Move to application
class CalendarMonth
{
	private $month;
	private $year;
	private $timezone;
	private $firstDay;
	private $lastDay;

	/**
	 * @var array|CalendarWeek[]
	 */
	private $weeks = array();

	public function __construct($month, $year, $timezone)
	{
		$now = Date::Now();
		$this->month = $month;
		$this->year = $year;
		$this->timezone = $timezone;

		$this->firstDay = Date::Create($this->year, $this->month, 1, 0, 0, 0, $this->timezone);
		$this->lastDay = Date::Create($this->year, $this->month + 1, 1, 0, 0, $this->timezone);

		$daysInMonth = $this->lastDay->AddDays(-1)->Day();
		$weeks = floor($daysInMonth/7);

		for ($week = 0; $week <= $weeks; $week++)
		{
			$this->weeks[$week] = new CalendarWeek();
		}

		for ($dayOffset = 0; $dayOffset < $daysInMonth; $dayOffset++)
		{
			$currentDay = $this->firstDay->AddDays($dayOffset);
			$currentWeek = $this->GetWeekNumber($currentDay);
			$calendarDay = new CalendarDay($currentDay);
			
			if ($currentDay->DateEquals($now))
			{
				$calendarDay->Highlight();
			}
			
			$this->weeks[$currentWeek]->AddDay($calendarDay);
		}
	}

	public function Weeks()
	{
		return $this->weeks;
	}

	public function FirstDay()
	{
		return $this->firstDay;
	}

	public function LastDay()
	{
		return $this->lastDay;
	}

	/**
	 * @param Date $day
	 * @return int
	 */
	private function GetWeekNumber(Date $day)
	{
		$firstWeekday = $this->firstDay->Weekday();

		$week = floor($day->Day()/7);

		if ($day->Day()%7==0)
		{
			$week = $day->Day()/7;
		}
		else
		{
			if ($day->Weekday() < $firstWeekday)
			{
				$week++;
			}
		}

		return intval($week);
	}

	public function AddReservations($reservations)
	{
	}
}

interface ICalendarDay
{
	public function DayOfMonth();
	public function Weekday();
	public function IsHighlighted();

	public function Reservations();
}

class CalendarDay implements ICalendarDay
{
	/**
	 * @var \Date
	 */
	private $date;

	/**
	 * @var bool
	 */
	private $isHighlighted = false;

	public function __construct(Date $date)
	{
		$this->date = $date;
	}

	/**
	 * @return int
	 */
	public function DayOfMonth()
	{
		return $this->date->Day();
	}
	
	/**
	 * @return int
	 */
	public function Weekday()
	{
		return $this->date->Weekday();
	}

	/**
	 * @return int
	 */
	public function IsHighlighted()
	{
		return $this->isHighlighted;
	}

	/**
	 * @return void
	 */
	public function Highlight()
	{
		$this->isHighlighted = true;
	}
	
	private static $nullInstance = null;

	/**
	 * @static
	 * @return CalendarDay
	 */
	public static function Null()
	{
		if (self::$nullInstance == null)
		{
			self::$nullInstance = new NullCalendarDay();
		}
		return self::$nullInstance;
	}

	public function Reservations()
	{
		return array();
	}
}

class NullCalendarDay implements ICalendarDay
{
	public function __construct()
	{
	}

	public function Weekday()
	{
		return null;
	}

	public function IsHighlighted()
	{
		return false;
	}

	public function DayOfMonth()
	{
		return null;
	}

	public function Reservations()
	{
		return array();
	}
}

class CalendarWeek
{
	/**
	 * @var array|CalendarDay[]
	 */
	private $days;

	public function __construct($days = array())
	{
		$this->days = $days;

		if (count($days) != 7)
		{
			for ($i = 0; $i < 7; $i++)
			{
				$this->days[$i] = CalendarDay::Null();
			}
		}
	}

	public function AddDay(CalendarDay $day)
	{
		$this->days[$day->Weekday()] = $day;
	}

	/**
	 * @return array|ICalendarDay[]
	 */
	public function Days()
	{
		return $this->days;
	}
}

?>