<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
	<title>Projects Schedule</title>
	<link rel="stylesheet" type="text/css" href="css/schedule.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/pickadate.js-3.5.3/lib/picker.js"></script>
    <script src="js/pickadate.js-3.5.3/lib/picker.date.js"></script>
    <script src="js/pickadate.js-3.5.3/lib/legacy.js"></script>
    <script src="js/pickadate.js-3.5.3/picker_script.js"></script>
    <link rel="stylesheet" type="text/css" href="js/pickadate.js-3.5.3/lib/themes/classic.css" id="theme_date">
    <link rel="stylesheet" type="text/css" href="js/pickadate.js-3.5.3/lib/themes/classic.date.css" id="theme_date">
    <link rel="stylesheet" type="text/css" href="js/pickadate.js-3.5.3/picker.css">


</head>
<body>

    <div class="wrapper">
        <div id="header">
        <?php include_once "project_name.php";?>
            <div class="timeline-box">
                <div class="timeline">
                    <?php include_once "calendar_generator.php";?>
                    <?php include_once "project_timeline_generator.php";?>
                </div>
            </div>
        </div>

        <!--Content section-->
        <div class="content">
            <button class="scroll-button button">Scroll to current date</button>
            <?php include_once "project_actions/controller.php";?>
        </div>
    </div>
    <div id="confirmOverlay">
        <div id="confirmBox">

            <h1>Remove field values</h1>
            <p>Do you really want to remove all the field values?</p>

            <div id="confirmButtons">
                <a class="button yes" href="#">Yes<span></span></a>
                <a class="button no" href="#">No<span></span></a>
            </div>
        </div>
    </div>
    <div id="confirmOverlay2">
        <div id="confirmBox">

            <h1>Remove the project</h1>
            <p>Do you really want to remove the project?</p>

            <div id="confirmButtons">
                <a class="button delete_yes" href="#">Yes<span></span></a>
                <a class="button no" href="#">No<span></span></a>
            </div>
        </div>
    </div>
</body>
</HTML>