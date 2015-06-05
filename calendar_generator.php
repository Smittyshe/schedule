
<?php
//Here the calendar is being generate

//define leap year
function leap_year($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}


//get the date array for the current date
$currentDay = time();
$date_time_array = getdate($currentDay);

//separate the array into vars
$hours = $date_time_array['hours'];
$minutes = $date_time_array['minutes'];
$seconds = $date_time_array['seconds'];
$month = $date_time_array['mon'];
$day = $date_time_array['mday'];
$year = $date_time_array['year'];


//time shift settings
$timeBackShift = 5;
$timeFutureShift = 12;

//get the start month
$start = $month-$timeBackShift;
$start_date = mktime($hours,$minutes,$seconds,$start,1,$year);

//define width of timeline
for ($i=$start, $width=0; $i<$start+$timeBackShift+$timeFutureShift+1; $i++)
{
    $localDate = mktime($hours,$minutes,$seconds,$i,1,$year);
    $monthName=date('F',$localDate);
    $localYear=date('Y',$localDate);
    $leapYear=leap_year($localYear);


    if ($monthName=='January') {$AmountOfDays=31;}
    else if ($monthName=='February' && !$leapYear) {$AmountOfDays=28;}
    else if ($monthName=='February' && $leapYear) {$AmountOfDays=29;}
    else if ($monthName=='March') {$AmountOfDays=31;}
    else if ($monthName=='April') {$AmountOfDays=30;}
    else if ($monthName=='May') {$AmountOfDays=31;}
    else if ($monthName=='June') {$AmountOfDays=30;}
    else if ($monthName=='July') {$AmountOfDays=31;}
    else if ($monthName=='August') {$AmountOfDays=31;}
    else if ($monthName=='September') {$AmountOfDays=30;}
    else if ($monthName=='October') {$AmountOfDays=31;}
    else if ($monthName=='November') {$AmountOfDays=30;}
    else if ($monthName=='December') {$AmountOfDays=31;}

    $width=$width+($AmountOfDays*30);


}


//control styles
$amount_of_projects=sizeof($project);
$styles="<style>";
$styles.=".day-line {height:".(($amount_of_projects*241)+41)."px;}";
$styles.=".first {height:".(($amount_of_projects*241)+45)."px;}";
$styles.=".timeline, .project-list {width:".$width."px;}";
$styles.="</style>";

echo $styles;

//generate months timeline
for ($i=$start, $width=0; $i<$start+$timeBackShift+$timeFutureShift+1; $i++)
{
    //get local date
    $localDate = mktime($hours,$minutes,$seconds,$i,1,$year);

    //month holder
    echo "<div class='month'>";
    echo '<span class="month-name">'.date('F',$localDate).' '.date('Y',$localDate   ).'</span>';

    //amount fo days in the month taking into account a leap year

    $localYear=date('Y',$localDate);
    $leapYear=leap_year($localYear);
    $monthName=date('F',$localDate);

    if ($monthName=='January') $AmountOfDays=31;
    else if ($monthName=='February' AND !$leapYear) $AmountOfDays=28;
    else if ($monthName=='February' AND $leapYear) $AmountOfDays=29;
    else if ($monthName=='March') $AmountOfDays=31;
    else if ($monthName=='April') $AmountOfDays=30;
    else if ($monthName=='May') $AmountOfDays=31;
    else if ($monthName=='June') $AmountOfDays=30;
    else if ($monthName=='July') $AmountOfDays=31;
    else if ($monthName=='August') $AmountOfDays=31;
    else if ($monthName=='September') $AmountOfDays=30;
    else if ($monthName=='October') $AmountOfDays=31;
    else if ($monthName=='November') $AmountOfDays=30;
    else if ($monthName=='December') $AmountOfDays=31;

    //generate days of the month
    for ($y=1; $y<$AmountOfDays+1; $y++)
    {
        $localDay=mktime($hours,$minutes,$seconds,$i,$y,$year);
        $localDayFormat=date('m-d-Y h:i',$localDay);
        $dayName=date('D',$localDay);
        $dayNum=date('j',$localDay);

        echo "<i ";
        if ($localDay==$currentDay) echo "id='current'";



        if ($dayNum==1 AND $dayName=='Sat')
        {
            echo " class='day-line weekend first'><span class='date'>".$dayNum."</span></i>";
        }
        else if ($dayNum==1 AND $dayName=='Sun')
        {
            echo " class='day-line weekend first'><span class='date'>".$dayNum."</span></i>";
        }
        else if ($dayNum==1 AND $dayName!=='Sat')
        {
            echo " class='day-line first'><span class='date'>".$dayNum."</span></i>";
        }
        else if ($dayNum==1 AND $dayName!=='Sun')
        {
            echo " class='day-line first'><span class='date'>".$dayNum."</span></i>";
        }
        else if ($dayName=='Sat' AND $dayNum!==1)
        {
            echo " class='day-line weekend'><span class='date'>".$dayName."<br>".$dayNum."</span></i>";
        }
        else if ($dayName=='Sun' AND $dayNum!==1)
        {
            echo " class='day-line weekend'><span class='date'>".$dayName."<br>".$dayNum."</span></i>";
        }
        else echo " class='day-line'><span class='date'>".$dayName."<br>".$dayNum."</span></i>";
    }

    echo "</div>";
}
// calendar is generated
?>