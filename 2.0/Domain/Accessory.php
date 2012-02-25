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


class Accessory
{
	/**
	 * @var int
	 */
	private $id;


	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int
	 */
	private $quantityAvailable;

	/**
	 * @param int $id
	 * @param string $name
	 * @param int $quantityAvailable
	 */
	public function __construct($id, $name, $quantityAvailable)
	{
		$this->id = $id;
		$this->SetName($name);
		$this->SetQuantityAvailable($quantityAvailable);
	}

	/**
	 * @return int
	 */
	public function GetId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function GetName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function SetName($name)
	{
		$this->name = $name;
	}

	/**
	 * @param int $quantity
	 */
	public function SetQuantityAvailable($quantity)
	{
		$q = intval($quantity);
		$this->quantityAvailable = empty($q) ? null : $q;
	}

	/**
	 * @return int
	 */
	public function GetQuantityAvailable()
	{
		return $this->quantityAvailable;
	}

	/**
	 * @static
	 * @param string $name
	 * @param int $quantity
	 * @return Accessory
	 */
	public static function Create($name, $quantity)
	{
		return new Accessory(null, $name, $quantity);
	}
}

?>