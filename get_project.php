<?php
include ("db_connect.php");

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$query = ("SELECT * From Project");
$result = mysql_query($query);

$i=0;
while ($row = mysql_fetch_assoc($result)) {
   $project[$i]= array(
   'projectID' => $row['projectID'],
   'Name' => $row['Name'],
   'brief_doc' => $row['brief_doc'],
   'styleguide' => $row['styleguide'],
   'psd_design' => $row['psd_design'],
   'spec_doc' => $row['spec_doc'],
   'content' => $row['content'],
   'theme_files' => $row['theme_files'],
   'status' => $row['status'],
   'be_developer' => $row['be_developer'],
   'fe_developer' => $row['fe_developer'],
   'qa' => $row['qa'],
   'ad' => $row['ad'],
   'description' => $row['description'],
   'design_from_date' => $row['design_from_date'],
   'design_to_date' => $row['design_to_date'],
   'main_dev_from_date' => $row['main_dev_from_date'],
   'main_dev_to_date' => $row['main_dev_to_date'],
   'qa1_from_date' => $row['qa1_from_date'],
   'qa1_to_date' => $row['qa1_to_date'],
   'beta_date' => $row['beta_date'],
   'feedback_from_date' => $row['feedback_from_date'],
   'feedback_to_date' => $row['feedback_to_date'],
   'launch_from_date' => $row['launch_from_date'],
   'launch_to_date' => $row['launch_to_date']

   );
    $i++;
}


?>