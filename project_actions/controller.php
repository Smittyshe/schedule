<?php

if (isset($_GET['action'])) $action = $_GET['action'];

if (isset($action))
{
    if ($action == 'edit') include_once "project_actions/project_edit.php";
    elseif ($action == 'delete') include_once "project_actions/project_del.php";

}
else include_once "project_actions/add_new_project.php";

?>