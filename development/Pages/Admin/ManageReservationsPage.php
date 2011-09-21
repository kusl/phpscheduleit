<?php
require_once(ROOT_DIR . 'Pages/Admin/AdminPage.php');
require_once(ROOT_DIR . 'Pages/Ajax/AutoCompletePage.php');
require_once(ROOT_DIR . 'Presenters/Admin/ManageReservationsPresenter.php');

interface IManageReservationsPage
{
	/**
	 * @abstract
	 * @param array|ReservationItemView[] $reservations
	 * @return void
	 */
	public function BindReservations($reservations);

	/**
	 * @abstract
	 * @param PageInfo $pageInfo
	 * @return void
	 */
	public function SetPageInfo($pageInfo);

	/**
	 * @abstract
	 * @return string
	 */
	public function GetStartDate();

	/**
	 * @abstract
	 * @return string
	 */
	public function GetEndDate();

	/**
	 * @abstract
	 * @return int
	 */
	public function GetUserId();

	/**
	 * @abstract
	 * @return string
	 */
	public function GetUserName();

	/**
	 * @abstract
	 * @return int
	 */
	public function GetScheduleId();

	/**
	 * @abstract
	 * @return int
	 */
	public function GetResourceId();

	/**
	 * @abstract
	 * @return string
	 */
	public function GetReferenceNumber();

	/**
	 * @abstract
	 * @param Date $date|null
	 * @return void
	 */
	public function SetStartDate($date);

	/**
	 * @abstract
	 * @param Date $date|null
	 * @return void
	 */
	public function SetEndDate($date);

	/**
	 * @abstract
	 * @param int $userId
	 * @return void
	 */
	public function SetUserId($userId);

	/**
	 * @abstract
	 * @param string $userName
	 * @return void
	 */
	public function SetUserName($userName);

	/**
	 * @abstract
	 * @param int $scheduleId
	 * @return void
	 */
	public function SetScheduleId($scheduleId);

	/**
	 * @abstract
	 * @param int $resourceId
	 * @return void
	 */
	public function SetResourceId($resourceId);


	/**
	 * @abstract
	 * @param string $referenceNumber
	 * @return void
	 */
	public function SetReferenceNumber($referenceNumber);

	/**
	 * @abstract
	 * @param array|Schedule[] $schedules
	 * @return void
	 */
	public function BindSchedules($schedules);

	/**
	 * @abstract
	 * @param array|BookableResource[] $resources
	 * @return void
	 */
	public function BindResources($resources);
}

class ManageReservationsPage extends AdminPage implements IManageReservationsPage 
{
	/**
	 * @var \ManageReservationsPresenter
	 */
	private $presenter;

	public function __construct()
	{
	    parent::__construct('ManageReservations');

		$this->presenter = new ManageReservationsPresenter($this,
			new ReservationViewRepository(),
			new ScheduleRepository(),
			new ResourceRepository());
	}
	
	public function ProcessAction()
	{
		// TODO: Implement ProcessAction() method.
	}

	public function PageLoad()
	{
		$userTimezone = $this->server->GetUserSession()->Timezone;
		$this->presenter->PageLoad($userTimezone);

		$this->Display('manage_reservations.tpl');
	}

	public function BindReservations($reservations)
	{
		$this->Set('reservations', $reservations);
	}

	/**
	 * @param PageInfo $pageInfo
	 * @return void
	 */
	public function SetPageInfo($pageInfo)
	{
		$this->Set('PageInfo', $pageInfo);
	}

	/**
	 * @return string
	 */
	public function GetStartDate()
	{
		return $this->server->GetQuerystring(QueryStringKeys::START_DATE);
	}

	/**
	 * @return string
	 */
	public function GetEndDate()
	{
		return $this->server->GetQuerystring(QueryStringKeys::END_DATE);
	}

	/**
	 * @param Date $date
	 * @return void
	 */
	public function SetStartDate($date)
	{
		$this->Set('StartDate', $date);
	}

	/**
	 * @param Date $date
	 * @return void
	 */
	public function SetEndDate($date)
	{
		$this->Set('EndDate', $date);
	}

	/**
	 * @return int
	 */
	public function GetUserId()
	{
		return $this->GetQuerystring(QueryStringKeys::USER_ID);
	}

	/**
	 * @return string
	 */
	public function GetUserName()
	{
		return $this->GetQuerystring(QueryStringKeys::USER_NAME);
	}

	/**
	 * @return int
	 */
	public function GetScheduleId()
	{
		return $this->GetQuerystring(QueryStringKeys::SCHEDULE_ID);
	}

	/**
	 * @return int
	 */
	public function GetResourceId()
	{
		return $this->GetQuerystring(QueryStringKeys::RESOURCE_ID);
	}

	/**
	 * @param int $userId
	 * @return void
	 */
	public function SetUserId($userId)
	{
		$this->Set('UserId', $userId);
	}

	/**
	 * @param string $userName
	 * @return void
	 */
	public function SetUserName($userName)
	{
		$this->Set('UserName', $userName);
	}

	/**
	 * @param int $scheduleId
	 * @return void
	 */
	public function SetScheduleId($scheduleId)
	{
		$this->Set('ScheduleId', $scheduleId);
	}

	/**
	 * @param int $resourceId
	 * @return void
	 */
	public function SetResourceId($resourceId)
	{
		$this->Set('ResourceId', $resourceId);
	}

	public function BindSchedules($schedules)
	{
		$this->Set('Schedules', $schedules);
	}

	public function BindResources($resources)
	{
		$this->Set('Resources', $resources);
	}

	/**
	 * @return string
	 */
	public function GetReferenceNumber()
	{
		return $this->GetQuerystring(QueryStringKeys::REFERENCE_NUMBER);
	}

	/**
	 * @param string $referenceNumber
	 * @return void
	 */
	public function SetReferenceNumber($referenceNumber)
	{
		$this->Set('ReferenceNumber', $referenceNumber);
	}
}
?>
