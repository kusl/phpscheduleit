<?php 

interface IResourcePermissionStore
{
	/**
	 * @param $userId int
	 * @return array[]int
	 */
	function GetPermittedResources($userId);
}

class ResourcePermissionStore implements IResourcePermissionStore
{
	/**
	 * @var IScheduleUserRepository
	 */
	private $_scheduleUserRepoistory;
	
	/**
	 * @param IScheduleUserRepository $scheduleUserRepository
	 */
	public function __construct(IScheduleUserRepository $scheduleUserRepository)
	{
		$this->_scheduleUserRepoistory = $scheduleUserRepository;	
	}
	
	public function GetPermittedResources($userId)
	{
		$permittedResourceIds = array();
		
		$user = $this->_scheduleUserRepoistory->GetUser($userId);
		
		$resources = $user->GetAllResources();
		foreach ($resources as $resource)
		{
			$permittedResourceIds[] = $resource->Id();
		}
		
		return $permittedResourceIds;
	}
}

?>