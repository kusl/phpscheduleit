<?php

class UserRepositoryTests extends TestBase
{
	public function setup()
	{
		parent::setup();
	}
	
	public function teardown()
	{
		parent::teardown();
	}
	
	public function testGetAllUsersReturnsAllActiveUsers()
	{
		$timezone = 'UTC';
		$language = 'en_us';
		
		$userRows = array
		(
			array(ColumnNames::USER_ID => 1, ColumnNames::FIRST_NAME => "f1", ColumnNames::LAST_NAME => 'l1', ColumnNames::EMAIL => 'e1', ColumnNames::TIMEZONE_NAME => $timezone, ColumnNames::LANGUAGE_CODE => $language),
			array(ColumnNames::USER_ID => 2, ColumnNames::FIRST_NAME => "f2", ColumnNames::LAST_NAME => 'l2', ColumnNames::EMAIL => 'e2', ColumnNames::TIMEZONE_NAME => $timezone, ColumnNames::LANGUAGE_CODE => $language),
			array(ColumnNames::USER_ID => 3, ColumnNames::FIRST_NAME => "f3", ColumnNames::LAST_NAME => 'l3', ColumnNames::EMAIL => 'e3', ColumnNames::TIMEZONE_NAME => $timezone, ColumnNames::LANGUAGE_CODE => $language),
		);
		
		$this->db->SetRows($userRows);
		
		$userRepository = new UserRepository();
		$users = $userRepository->GetAll();
		
		$user1 = new UserDto(1, "f1", "l1", "e1", $timezone, $language);
		$user2 = new UserDto(2, "f2", "l2", "e2", $timezone, $language);
		$user3 = new UserDto(3, "f3", "l3", "e3", $timezone, $language);
		
		$getAllUsersCommand = new GetAllUsersByStatusCommand(AccountStatus::ACTIVE);
		
		$this->assertEquals($user1, $users[0]);
		$this->assertEquals($user2, $users[1]);
		$this->assertEquals($user3, $users[2]);
		
		$this->assertEquals(1, count($this->db->_Commands));
		$this->assertEquals($getAllUsersCommand, $this->db->_Commands[0]);
	}
	
	public function testLoadsUserFromDatabaseIfNotInCache()
	{
		$userId = 982;
		$loadByIdCommand = new GetUserByIdCommand($userId);
		$loadEmailPreferencesCommand = new GetUserEmailPreferencesCommand($userId);
		
		$userRows = $this->GetUserRow();
		$emailPrefRows = $this->GetEmailPrefRows();
		
		$this->db->SetRow(0, $emailPrefRows);
		$this->db->SetRow(1, $userRows);

		$row = $userRows[0];
		
		$userRepository = new UserRepository();
		$user = $userRepository->LoadById($userId);
		
		$this->assertEquals(2, count($this->db->_Commands));
		$this->assertEquals($loadEmailPreferencesCommand, $this->db->_Commands[0]);		
		$this->assertEquals($loadByIdCommand, $this->db->_Commands[1]);

		$this->assertEquals($row[ColumnNames::FIRST_NAME], $user->FirstName());
		$this->assertTrue($user->WantsEventEmail(new ReservationCreatedEvent()));
	}
	
	public function testLoadsUserFromCacheIfAlreadyLoadedFromDatabase()
	{
		$userId = 1;
		
		$row = $this->GetUserRow();		
		$emailPrefRows = $this->GetEmailPrefRows();
		
		$this->db->SetRow(0, $emailPrefRows);
		$this->db->SetRow(1, $row);
		
		$userRepository = new UserRepository();
		$user = $userRepository->LoadById($userId);
		
		$user = $userRepository->LoadById($userId); // 2nd call should load from cache
		
		$this->assertEquals(2, count($this->db->_Commands));
	}

	public function testCanGetPageableListOfUsers()
	{
		$count = 50;
		$countRow = array($count);
		$row1 = $this->GetRow(1, 'first', 'last', 'email', 'un1', '2011-0101');
		$row2 = $this->GetRow(2, 'first', 'last', 'email', null, '2010-01-01');
		$userRows = array($row1, $row2);

		$this->db->SetRow(0, $countRow);
		$this->db->SetRow(1, $userRows);
		
		$userRepo = new UserRepository();
		$pageable = $userRepo->GetList();
		
		$this->assertEquals($count, $pageable->PageInfo->Total);
		$this->assertEquals(new UserItemView($row1), $pageable->Results[0]);
		$this->assertEquals(new UserItemView($row2), $pageable->Results[1]);

	}
	
	private function GetUserRow()
	{
		$row = array
		(
			array(
				ColumnNames::FIRST_NAME => 'first', 
				ColumnNames::LAST_NAME => 'last',
				ColumnNames::EMAIL => 'email',
				ColumnNames::LANGUAGE_CODE => 'en_us',
				ColumnNames::TIMEZONE_NAME => 'UTC',
			)
		);
		
		return $row;
	}
	
	private function GetEmailPrefRows()
	{
		$row = array
		(
			array(ColumnNames::EVENT_CATEGORY => 'reservation', ColumnNames::EVENT_TYPE => ReservationEvent::Created),
			array(ColumnNames::EVENT_CATEGORY => 'reservation', ColumnNames::EVENT_TYPE => ReservationEvent::Updated),
		);
		
		return $row;
	}

	private function GetRow($userId, $first, $last, $email, $userName, $lastLogin)
	{
		return
			array(
				ColumnNames::USER_ID => $userId,
				ColumnNames::USERNAME => $userName,
				ColumnNames::FIRST_NAME => $first,
				ColumnNames::LAST_NAME => $last,
				ColumnNames::EMAIL => $email,
				ColumnNames::LAST_LOGIN => $lastLogin
			);
	}
}
?>