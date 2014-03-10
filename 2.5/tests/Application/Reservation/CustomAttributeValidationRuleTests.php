<?php
/**
Copyright 2011-2014 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'Domain/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Validation/namespace.php');

class CustomAttributeValidationRuleTests extends TestBase
{
	public function setup()
	{
		parent::setup();
	}

	public function teardown()
	{
		parent::teardown();
	}

	public function testChecksEachAttributeInCategory()
	{
		$val1 = 'val1';
		$val2 = 'val2';
		$val3 = 'val2';

		$reservation = new TestReservationSeries();
		$reservation->WithAttributeValue(new AttributeValue(1, $val1));
		$reservation->WithAttributeValue(new AttributeValue(2, $val2));
		$reservation->WithAttributeValue(new AttributeValue(3, $val3));

		$attributeService = $this->getMock('IAttributeService');

		$errors = array('error1', 'error2');

		$validationResult = new AttributeServiceValidationResult(false, $errors);
		$attributeService->expects($this->once())
				->method('Validate')
				->with($this->equalTo(CustomAttributeCategory::RESERVATION), $this->equalTo($reservation->AttributeValues()))
				->will($this->returnValue($validationResult));

		$rule = new CustomAttributeValidationRule($attributeService);
		$result = $rule->Validate($reservation);

		$this->assertEquals(false, $result->IsValid());
		$this->assertContains($errors[0], $result->ErrorMessage());
		$this->assertContains($errors[1], $result->ErrorMessage());
	}

	public function testWhenAllAttributesAreValid()
	{
		$reservation = new TestReservationSeries();
		$reservation->WithAttributeValue(new AttributeValue(1, null));
		$reservation->WithAttributeValue(new AttributeValue(2, null));
		$reservation->WithAttributeValue(new AttributeValue(3, null));

		$attributeService = $this->getMock('IAttributeService');

		$validationResult = new AttributeServiceValidationResult(true, array());

		$attributeService->expects($this->once())
				->method('Validate')
				->with($this->equalTo(CustomAttributeCategory::RESERVATION), $this->equalTo($reservation->AttributeValues()))
				->will($this->returnValue($validationResult));

		$rule = new CustomAttributeValidationRule($attributeService);

		$result = $rule->Validate($reservation);

		$this->assertEquals(true, $result->IsValid());
	}
}