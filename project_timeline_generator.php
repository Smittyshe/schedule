<?php
echo "<div class='project-list'>";
for ($y=0; $y<sizeof($project); $y++) {
    $timeline=array(
        'desing_length'=>(floor((strtotime($project[$y]['design_to_date']) - strtotime($project[$y]['design_from_date']))/(60*60*24))+1)*30,
        'desing_starts_at'=>((floor((strtotime($project[$y]['design_from_date']) - $start_date)/(60*60*24)))+1)*30,
        'main_dev_length'=>(floor((strtotime($project[$y]['main_dev_to_date']) - strtotime($project[$y]['main_dev_from_date']))/(60*60*24))+1)*30,
        'main_dev_starts_at'=>((floor((strtotime($project[$y]['main_dev_from_date']) - $start_date)/(60*60*24)))+1)*30,
        'qa_length'=>(floor((strtotime($project[$y]['qa1_to_date']) - strtotime($project[$y]['qa1_from_date']))/(60*60*24))+1)*30,
        'qa_starts_at'=>((floor((strtotime($project[$y]['qa1_from_date']) - $start_date)/(60*60*24)))+1)*30,
        'beta_starts_at'=>((floor((strtotime($project[$y]['beta_date']) - $start_date)/(60*60*24)))+1)*30,
        'feedback_length'=>(floor((strtotime($project[$y]['feedback_to_date']) - strtotime($project[$y]['feedback_from_date']))/(60*60*24))+1)*30,
        'feedback_starts_at'=>((floor((strtotime($project[$y]['feedback_from_date']) - $start_date)/(60*60*24)))+1)*30,
        'launch_length'=>(floor((strtotime($project[$y]['launch_to_date']) - strtotime($project[$y]['launch_from_date']))/(60*60*24))+1)*30,
        'launch_starts_at'=>((floor((strtotime($project[$y]['launch_from_date']) - $start_date)/(60*60*24)))+1)*30,
    );

    echo "<div class='project'>";
        echo "<div class='project-schedule'>";
            echo "<span style='width:".$timeline['desing_length']."px; left:".$timeline['desing_starts_at']."px'>Design phase</span>";
            echo "<span style='width:".$timeline['main_dev_length']."px; left:".$timeline['main_dev_starts_at']."px'>Main development</span>";
            echo "<span style='width:".$timeline['qa_length']."px; left:".$timeline['qa_starts_at']."px'>QA 1st round</span>";
            echo "<span style='width:30px; left:".$timeline['beta_starts_at']."px'>Beta</span>";
            echo "<span style='width:".$timeline['feedback_length']."px; left:".$timeline['feedback_starts_at']."px'>Client's feedback</span>";
            echo "<span style='width:".$timeline['launch_length']."px; left:".$timeline['launch_starts_at']."px'>Launch</span>";
        echo"</div>";
    echo"</div>";

}
echo "</div>";
?>
