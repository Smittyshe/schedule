<?php
include ("get_project.php");

echo "<div class='name-list'>";

for ($y=0; $y<$i; $y++) {

    echo "<div id=".$project[$y]['projectID']." class='name'>";
                echo "<span class='project-name' >".$project[$y]['Name']."</span>";
                echo "<div class='edit_panel'>";
                        echo "<span class='button view'>View</span>";
                        echo "<span class='button edit'>Edit</span>";
                        echo "<span class='button remove'>Remove</span>";
                echo "</div>";
                    echo "<span class='task'>Design</span>";
                    echo "<span class='task'>Main development</span>";
                    echo "<span class='task'>1st round QA</span>";
                    echo "<span class='task'>Beta ready</span>";
                    echo "<span class='task'>Client's feedback</span>";
                    echo "<span class='task'>Launch</span>";
    echo "</div>";

}
echo "</div>";
?>
