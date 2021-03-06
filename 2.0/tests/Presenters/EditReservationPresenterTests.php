<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

class EditReservationPresenterTests extends TestBase
{
	/**
	 * @var UserSession
	 */
	private $user;
	
	private $userId;
	
	/**
	 * @var IExistingReservationPage
	 */
	private $page;
	
	/**
	 * @var IReservationViewRepository
	 */
	private $reservationViewRepository;
	
	/**
	 * @var IReservationPreconditionService
	 */
	private $preconditionService;
	
	/**
	 * @var IReservationInitializerFactory
	 */
	private $initializerFactory;
	
	/**
	 * @var IReservationInitializer
	 */
	private $initializer;
	
	public function setup()
	{
		parent::setup();

		$this->user = $this->fakeServer->UserSession;
		$this->userId = $this->user->UserId;

		$this->page = $this->getMock('IExistingReservationPage');
		$this->scheduleRepository = $this->getMock('IScheduleRepository');
		$this->scheduleUserRepository = $this->getMock('IScheduleUserRepository');
		$this->userRepository = $this->getMock('IUserRepository');
		
		$this->initializerFactory = $this->getMock('IReservationInitializerFactory');
		$this->initializer = $this->getMock('IReservationInitializer');
		
		$this->preconditionService = $this->getMock('EditReservationPreconditionService');
		$this->reservationViewRepository = $this->getMock('IReservationViewRepository');
	}

	public function teardown()
	{
		parent::teardown();
	}
	
	public function testPullsReservationViewFromRepository()
	{
		$referenceNumber = '1234';
		$timezone = $this->user->Timezone;

		$resourceId = 10;
		$scheduleId = 100;
		$reservationId = 298;
		$startDateUtc = '2010-01-01 10:11:12';
		$endDateUtc = '2010-01-02 10:11:12';
		$ownerId = 987;
		$additionalResourceIds = array (10, 20, 30);	
		$participantIds = array (11, 22, 33);
		$title = 'title';
		$description = 'description';

		$firstName = 'fname';
		$lastName = 'lastName';

		$expectedStartDate = Date::Parse($startDateUtc, 'UTC');
		$expectedEndDate = Date::Parse($endDateUtc, 'UTC');	
				
		$reservationView = new ReservationView();
		
		$this->page->expects($this->once())
			->method('GetReferenceNumber')
			->will($this->returnValue($referenceNumber));
			
		$this->reservationViewRepository->expects($this->once())
			->method('GetReservationForEditing')
			->with($referenceNumber)
			->will($this->returnValue($reservationView));
			
		$this->preconditionService->expects($this->once())
			->method('CheckAll')
			->with($this->page, $this->user, $reservationView);
			
		$this->initializerFactory->expects($this->once())
			->method('GetExisitingInitializer')
			->with($this->equalTo($this->page), $this->equalTo($reservationView))
			->will($this->returnValue($this->initializer));
			
		$this->initializer->expects($this->once())
			->method('Initialize');
			
		$presenter = new EditReservationPresenter($this->page, $this->initializerFactory, $this->preconditionService, $this->reservationViewRepository);
		
		$presenter->PageLoad();
	}
}
?>