<?php
/**
Copyright 2013 Nick Korbel

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

class ResourceGroupTests extends TestBase
{
	public function setup()
	{
		parent::setup();
	}
	
	public function testGetsAllResourceIdsForGroup()
	{
		$group1 = new ResourceGroup(1, 'group1');
		$group1a = new ResourceGroup(2, 'group1a', 1);
		$group1a1 = new ResourceGroup(3, 'group1a1', 2);

		$resourceGroupTree = new ResourceGroupTree();
		$resourceGroupTree->AddGroup($group1);
		$resourceGroupTree->AddGroup($group1a);
		$resourceGroupTree->AddGroup($group1a1);

		$resourceGroupTree->AddAssignment(new ResourceGroupAssignment($group1a1->id, 'resource1', 1, null, 1, ResourceStatus::AVAILABLE, null));
		$resourceGroupTree->AddAssignment(new ResourceGroupAssignment($group1a1->id, 'resource2', 2, null, 1, ResourceStatus::AVAILABLE, null));
		$resourceGroupTree->AddAssignment(new ResourceGroupAssignment($group1a->id, 'resource3', 3, null, 1, ResourceStatus::AVAILABLE, null));
		$resourceGroupTree->AddAssignment(new ResourceGroupAssignment($group1->id, 'resource4', 4, null, 1, ResourceStatus::AVAILABLE, null));

		$group1a1ResourceIds = $resourceGroupTree->GetResourceIds($group1a1->id);
		$group1aResourceIds = $resourceGroupTree->GetResourceIds($group1a->id);
		$group1ResourceIds = $resourceGroupTree->GetResourceIds($group1->id);

		$this->assertEquals(2, count($group1a1ResourceIds));
		$this->assertEquals(3, count($group1aResourceIds));
		$this->assertEquals(4, count($group1ResourceIds));

		$this->assertEquals(array(1,2), $group1a1ResourceIds);
		$this->assertEquals(array(1,2,3), $group1aResourceIds);
		$this->assertEquals(array(1,2,3,4), $group1ResourceIds);
	}
}
?>