<?php
define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'Pages/Admin/ManageAccessoriesPage.php');

$page = new ManageAccessoriesPage();
if ($page->TakingAction())
{
	$page->ProcessAction();
}
else
{
	$page->PageLoad();
}
?>