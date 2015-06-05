<?php

if (isset($_GET['id'])) $ID = $_GET['id'];
for ($y=0; $y<sizeof($project);$y++)
{
    if ($project[$y]['projectID'] == $ID) $res=$y;
}

echo

"
<div class='add-section opened'>
<div class='add-project'>
<span class='button close-project redirect_back'>Close</span>
<h2>Project form</h2>
<form action='actions/edit.php' method='POST'>

<div class='project-options'>
    <h3>Project options</h3>
    <p>Project name</p>
    <fieldset>
        <input type='text' name='project-name' id='project-name' tabindex='0' value='".$project[$res]['Name']."'>
    </fieldset>

    <div class='names'>
        <div class='p_name'>
            <a>Brief doc</a>
            <div class='file_drop'>
                <span class='button close'>Close</span>
                <p>Brief Document</p>
                <p>Upload a file or link</p>


            </div>
        </div>
        <div class='p_name'>
            <a>Styleguide</a>
            <div class='file_drop'>
                <span class='button close'>Close</span>
                <p>Styleguide</p>
                <p>Upload a file or link</p>
            </div>
        </div>
        <div class='p_name'>
            <a>PSD designes</a>
            <div class='file_drop'>
                <span class='button close'>Close</span>
                <p>PSD designes</p>
                <p>Upload the file or link</p>
            </div>
        </div>
    </div>
    <div class='checks left'>
        <div class='squaredThree'>
            <input type='checkbox' id='squared1' name='brief' tabindex='1'>
            <label for='squared1'></label>
        </div>
        <div class='squaredThree'>
            <input type='checkbox' id='squared2' name='styleguide' tabindex='2'>
            <label for='squared2'></label>
        </div>
        <div class='squaredThree'>
            <input type='checkbox' id='squared3' name='psd' tabindex='3'>
            <label for='squared3'></label>
        </div>
    </div>
    <div class='checks-wrapper'>
        <div class='names'>
            <div class='p_name'>
                <a>IA document</a>
                <div class='file_drop'>
                    <span class='button close'>Close</span>
                    <p>IA document</p>
                    <p>Upload the file or link</p>
                </div>
            </div>
            <div class='p_name'>
                <a>Content</a>
                <div class='file_drop'>
                    <span class='button close'>Close</span>
                    <p>Content</p>
                    <p>Upload a file or link</p>
                </div>
            </div>
            <div class='p_name'>
                <a>Theme files</a>
                <div class='file_drop'>
                    <span class='button close'>Close</span>
                    <p>Theme files</p>
                    <p>Upload a file or link</p>

                </div>
            </div>
        </div>
        <div class='checks'>
            <div class='squaredThree'>
                <input type='checkbox' id='squared4' name='ia' tabindex='4'>
                <label for='squared4'></label>
            </div>
            <div class='squaredThree'>
                <input type='checkbox' id='squared5' name='content' tabindex='5'>
                <label for='squared5'></label>
            </div>
            <div class='squaredThree'>
                <input type='checkbox' id='squared6' name='them' tabindex='6'>
                <label for='squared6'></label>
            </div>
        </div>
    </div>

    <div class='status'>
        <h3>Project status</h3>
        <fieldset>
            <textarea rows='3' cols='27' name='status' tabindex='7'></textarea>
        </fieldset>

    </div>

</div>
<div class='date_wrapper'>
    <h3>Dates</h3>

    <div class='datepickers'>
        <p>Design and planning phase</p>

        <fieldset>
            <input type='text' class='datepicker' id='input_main_from' name='design_from_date' placeholder='From'>
        </fieldset>

        <fieldset>
            <input type='text' class='datepicker' id='input_main_to' name='design_to_date' placeholder='To'>
        </fieldset>


    </div>

    <div class='datepickers'>
        <p>Main development dates</p>
        <fieldset>
            <input type='text' class='datepicker' id='input_main_from' name='dev_from_date' placeholder='From'>
        </fieldset>

        <fieldset>
            <input type='text' class='datepicker' id='input_main_to' name='dev_to_date' placeholder='To'>
        </fieldset>


    </div>
    <div class='datepickers'>
        <p>1st round QA</p>

        <fieldset>
            <input type='text' class='datepicker' id='input_qa_from' name='qa1_from_date' placeholder='From'>
        </fieldset>


        <fieldset>
            <input type='text' class='datepicker' id='input_qa_to' name='qa1_to_date' placeholder='To'>
        </fieldset>


    </div>

    <div class='datepickers'>
        <p>Beta version and CMS training</p>

        <fieldset class='beta'>
            <input type='text' class='datepicker beta' id='input_main_from' name='beta_from_date' placeholder='Beta version date'>
        </fieldset>


    </div>

    <div class='datepickers'>

        <p>Client's feedback and content adding</p>

        <fieldset>
            <input type='text' class='datepicker' id='input_feedback_from' name='feedback_from_date' placeholder='From'>
        </fieldset>


        <fieldset>
            <input type='text' class='datepicker' id='input_feedback_to' name='feedback_to_date' placeholder='To'>
        </fieldset>


    </div>
    <div class='datepickers'>

        <p>Launch</p>

        <fieldset>
            <input type='text' class='datepicker' id='input_launch_from' name='launch_from_date' placeholder='From'>
        </fieldset>


        <fieldset>
            <input type='text' class='datepicker' id='input_launch_to' name='launch_to_date' placeholder='To'>
        </fieldset>


    </div>
</div>

<div class='developers'>
    <h3>Developers and AD</h3>
    <div class='dev_wrapper'>

        <p>BE developer</p>
        <fieldset>
            <input type='text' name='be_developer-name' placeholder='Developer name(s)'>
        </fieldset>

        <p>FE developer</p>
        <fieldset>
            <input type='text' name='fe_project-name' placeholder='Developer name(s)'>
        </fieldset>

        <p>QA</p>
        <fieldset>
            <input type='text' name='qa-name'placeholder='QA name(s)'>
        </fieldset>

        <p>Account Director</p>
        <fieldset>
            <input type='text' name='ad-name' placeholder='AD name(s)'>
        </fieldset>

    </div>
</div>

<div class='buttons'>
    <div class='buttons_wrapper'>
        <a class='button button_box reset'>Clear all the fields</a>
        <input type='submit' class='submit button' name='submit'  value='Save changes'>


    </div>
</div>

<div class='deskr_dates'>
    <div class='projDescr'>
        <h3>Description</h3>
        <textarea id='elm1' cols='45' rows='10' name='description'></textarea>

    </div>

</div>
</form>
</div>
</div>


";



?>