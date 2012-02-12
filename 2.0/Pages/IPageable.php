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

require_once(ROOT_DIR . 'Pages/Page.php');

interface IPageable
{
	/**
	 * @abstract
	 * @return int
	 */
	function GetPageNumber();

	/**
	 * @abstract
	 * @return int
	 */
	function GetPageSize();

	/**
	 * @abstract
	 * @param PageInfo $pageInfo
	 * @return void
	 */
	function BindPageInfo(PageInfo $pageInfo);
}

class PageablePage extends Page implements IPageable
{
	/**
	 * @var \Page
	 */
	private $page;
	
	public function __construct(Page $wrappedPage)
	{
		$this->page = $wrappedPage;
	}
	/**
	 * @return int
	 */
	function GetPageNumber()
	{
		return $this->page->GetQuerystring(QueryStringKeys::PAGE);
	}

	/**
	 * @return int
	 */
	function GetPageSize()
	{
		$size = $this->page->GetQuerystring(QueryStringKeys::PAGE_SIZE);
		if (empty($size))
		{
			return Configuration::Instance()->GetKey(ConfigKeys::DEFAULT_PAGE_SIZE);
		}
		return $size;
	}

	/**
	 * @param PageInfo $pageInfo
	 * @return void
	 */
	function BindPageInfo(PageInfo $pageInfo)
	{
		$this->page->Set('PageInfo', $pageInfo);
	}
}
?>