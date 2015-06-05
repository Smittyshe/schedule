<?php
include ("../../db_connect.php");

//project name
$name = trim($_POST['project-name']);


//main options
$brief = 0;
if (isset ($_POST['brief'])) {$brief = "1";}
$styleguide = 0;
if (isset ($_POST['styleguide'])) {$styleguide = "1";}
$psd = 0;
if (isset ($_POST['psd'])) {$psd = "1";}
$ia = 0;
if (isset ($_POST['ia'])) {$ia ="1";}
$content = 0;
if (isset ($_POST['content'])) {$content = "1";}
$them = 0;
if (isset ($_POST['them'])) {$them = "1";}
$status = 0;
$status = $_POST['status'];


//dates
$design_dates = ["from"=>$_POST['design_from_date_submit'], "to"=>$_POST['design_to_date_submit']];
$main_dev_dates = ["from"=>$_POST['dev_from_date_submit'], "to"=>$_POST['dev_to_date_submit']];
$qa1_dates = ["from"=>$_POST['qa1_from_date_submit'], "to"=>$_POST['qa1_to_date_submit']];
$beta_date = $_POST['beta_from_date_submit'];
$feedback = ["from"=>$_POST['feedback_from_date_submit'], "to"=>$_POST['feedback_to_date_submit']];
$launch = ["from"=>$_POST['launch_from_date_submit'], "to"=>$_POST['launch_to_date_submit']];


//developers
$BE_dev = trim($_POST['be_developer-name']);
$FE_dev = trim($_POST['fe_project-name']);
$QA_dev = trim($_POST['qa-name']);
$AD = trim($_POST['ad-name']);
$description = trim($_POST['description']);


//write to the database
//making the list of fields in the Project table
$query1 = "INSERT INTO Project(
Name,
brief_doc,
styleguide,
psd_design,
spec_doc,
content,
theme_files,
status,
be_developer,
fe_developer,
qa,
description,
design_from_date,
design_to_date,
main_dev_from_date,
main_dev_to_date,
qa1_from_date,
qa1_to_date,
beta_date,
feedback_from_date,
feedback_to_date,
launch_from_date,
launch_to_date)
VALUES (
'$name',
'$brief',
'$styleguide',
'$psd',
'$ia',
'$them',
'$status',
'$BE_dev',
'$FE_dev',
'$QA_dev',
'$AD',
'$description',
'$design_dates[from]', '$design_dates[to]',
'$main_dev_dates[from]', '$main_dev_dates[to]',
'$qa1_dates[from]', '$qa1_dates[to]',
'$beta_date',
'$feedback[from]', '$feedback[to]',
'$launch[from]', '$launch[to]')";
mysql_query("$query1") or die (mysql_error());

//writing to the design_dates table



//redirecting back to the schedule page
header('Location: http://localhost:8888/schedule/index.php');

?>