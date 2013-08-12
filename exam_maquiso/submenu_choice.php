<?php
$submenu_choice="true";
	if(isset($_GET['new']))
	{  $submenu_choice = $_GET['new']; }
elseif (isset($_GET['list']))
	{  $submenu_choice = $_GET['list']; };
switch ($submenu_choice)
{
case "NEW":
  header('Location: ./db_new.php');
  break;
case "LIST":
  header('Location: ./list_view.php');
  break;
default:
    header('Location: ./index.php');
};
?>