<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment 2</title>
<style type="text/css">
/*this is css code */
body
{
    background-color:#FFB6C1;
}
.dashed
{
    border:dotted;
}
</style>
</head>

<body>
<div align="center">
<h2>Assignment 2</h2>
<h2>Exam Registration Form</h2>
<h4>Maram Badad</h4>
<h4>All field are required to submit the form.</h4>
</div>
<!--The <div> tag defines a division or a section in an HTML document.-->
<table width="500" border="0" align="center">
    <tr>
        <td>
<form action="assignment2redo.php" method="post">


<?php
//define php variables
//these are the text box's
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$student_year = isset($_POST['student_year']) ? $_POST['student_year'] : ''; //radio
$exam = isset($_POST['exam']) ? $_POST['exam'] : ''; //checkbox
$time = isset($_POST['time']) ? $_POST['time'] : ''; //checkbox
$instructer = isset($_POST['instructer']) ? $_POST['instructer'] : ''; //checkbox
$accommodate = isset($_POST['accommodate']) ? $_POST['accommodate'] : ''; //textarea
//the isset() function checks whether a variable is set and is not NULL.

//these are the dropdown menus
$month = isset($_POST['month']) ? $_POST['month'] : '';
$day = isset($_POST['day']) ? $_POST['day'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';


//checks if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //checks if name was submitted. if not it displays an error
    if ($name == "") {
        echo "<br /><strong>Please enter your name.</strong><br />";
    }
    //checks email
    if ($email == "") {
        echo "<br /><strong>Please enter your email.</strong><br />";
    }
    //checks id
    if ($id == "") {
        echo "<br /><strong>Please enter your id.</strong><br />";
    }
    //student year
    if ($student_year == "") {
        echo "<br /><strong>Please select student year. </strong><br />";
    }
    //checks accomodate
    if ($accommodate == "") {
        echo "<br /><strong>Please enter your accommodations or type 'n/a'.</strong><br />";
    }
    //checks if date was clicked
    if ($day == "Day") {
        echo "<br /><strong>Please select day.</strong><br />";
    }
    if ($year == "Year") {
        echo "<br /><strong>Please select year.</strong><br />";
    }
    if ($month == "Month") {
        echo "<br /><strong>Please select month.</strong><br />";
    }
    }
?>
<br>

<!--The <fieldset> tag is used to group related elements in a form. The <fieldset> tag draws a box around the related elements.-->
<!--The <legend> HTML element represents a caption for the content of its parent <fieldset>-->
<fieldset><legend>Enter your information in the form below to complete registration.</legend>
Name:
<input type="text" name="name" value="<?php if (isset($name)) {echo $name;}?>" />
<br /><br />

Email:
<input type="text" name="email" value="<?php if (isset($email)) {echo $email;}?>" />
<br /><br />

Student ID Number:
<br />
<input type="text" name="id" value="<?php if (isset($id)) {echo $id;}?>"/>
<br /><br />

Student Year:
<br />
<input type="radio" name="student_year" value="Freshman" <?php if ($student_year == 'Freshman ') {echo "checked = 'checked'";}?>  /> Freshman 
<input type="radio" name="student_year" value="Sophomore" <?php if ($student_year == 'Sophomore') {echo "checked = 'checked'";}?> /> Sophomore
<input type="radio" name="student_year" value="Junior" <?php if ($student_year == 'Junior') {echo "checked = 'checked'";}?> /> Junior
<input type="radio" name="student_year" value="Senior" <?php if ($student_year == 'Senior') {echo "checked = 'checked'";}?> /> Senior
<br /><br />
Exam:
<br />
<input type="checkbox" name="exam" value="Physics 101" <?php if ($exam == 'Physics 101') {echo "checked = 'checked'";}?> /> Physics 101
<input type="checkbox" name="exam" value="Math 102" <?php if ($exam == 'Math 102') {echo "checked = 'checked'";}?> /> Math 102
<input type="checkbox" name="exam" value="Philosophy 302" <?php if ($exam == 'Philosophy 302') {echo "checked = 'checked'";}?> /> Philosophy 302
<input type="checkbox" name="exam" value="Biology 303" <?php if ($exam == 'Biology 303') {echo "checked = 'checked'";}?> /> Biology 303
<br /><br />
Exam Time:
<br />
<input type="checkbox" name="time" value="11" <?php if ($time == '11') {echo "checked = 'checked'";}?> /> 10/11 4:30 PM
<input type="checkbox" name="time" value="13" <?php if ($time == '13') {echo "checked = 'checked'";}?> /> 10/13 8:30 AM 
<input type="checkbox" name="time" value="14" <?php if ($time == '14') {echo "checked = 'checked'";}?> /> 10/14 4:00 PM
<input type="checkbox" name="time" value="16" <?php if ($time == '16') {echo "checked = 'checked'";}?> /> 10/16 10:00 AM 
<br /><br />
Instructer:
<br />
<input type="checkbox" name="instructer" value="Mary James" <?php if ($instructer == 'Mary James') {echo "checked = 'checked'";}?> /> Mary James
<input type="checkbox" name="instructer" value="Sandra OConner" <?php if ($instructer == 'Sandra OConner') {echo "checked = 'checked'";}?> /> Sandra O'Conner
<input type="checkbox" name="instructer" value="Louis Smith" <?php if ($instructer == 'Louis Smith') {echo "checked = 'checked'";}?> /> Louis Smith
<input type="checkbox" name="instructer" value="Karen Shaw" <?php if ($instructer == 'Karen Shaw') {echo "checked = 'checked'";}?> /> Karen Shaw
<br /><br />
Are there any accommodations you'll need? Type N/A if not applicable.
<br />
<textarea name="accommodate" rows="5" cols="40"><?php if(isset($accommodate)) {echo $accommodate;}?></textarea>
<br /><br />

Today's Date:
<form action="assignment2redo.php" method="POST">
<?php
//make day drop-down menu sticky

//This assumes your posted value is 'Day' and your created array is $daysarray
$days = range(1, 31); //this takes the variable we already created before and setting its range
$daysdefault = array ('Day'); //this just creates the default 'day' on the menu
$daysarray = array_merge($daysdefault, $days); //this creates the array which holds both the default and the range 1-31 in the menu

//outputs the opening HTML tag for a drop-down menu
echo '<select name="day">';

foreach ($daysarray as $value) {
    if ($_POST['day'] == $value) {
        //current option in dropdown menu was the POST value
        //then make a variable $isselected set to the HTML value of selected
        $isselected = "selected";
    }
    else {
        //current option in dropdown menu was NOT the POST value
        //make a variable $isselected set to nothing
        $isselected = "";
    }
    //output the HTML option tag, with $isselected in it
    //this will put the tag 'selected' in the sticky value
    //and none of the others
    //whatever is "issselected", whether its a value or the default 'day' it makes it sticky 
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}

echo "</select>";

//months pulldown menu

$months = array ( 1 => 'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'); 
$monthsdefault = array ('Month');
$monthsarray = array_merge($monthsdefault, $months);
echo '<select name="month">';

foreach ($monthsarray as $month) {
    if ($_POST['month'] == $month) {
        $isselected = "selected";
    }
    else {
        $isselected = "";
    }
    echo "<option value=\"$month\" $isselected>$month"."</option>\n";
}
echo "</select>";

//array sticky codes
//an array stores multiple values in one single variable:

//year dropdown menu
$year = range(1910, 2022);
$yeardefault = array ('Year');
$yeararray = array_merge($yeardefault, $year);
//outputs the opening html tag for a dropdown menu
echo '<select name="year">';

//loops through array and checks to see if the POST value for "year"
//is equal to the current value in the dropdown menu
foreach ($yeararray as $value) {
    if ($_POST['year'] == $value) {
        
        $isselected = "selected";
    }
    else {
        $isselected = "";
    }
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo "</select>";


?>
<input type="submit" name="submit" value="Submit" /><br/>
</form>
<?php
//if everything is filled out, display the messgae
if (($name != "") && ($email != "") && ($id != "") && ($accommodate !="") && ($exam != "") && ($instructer != "")) {
    echo "Form was filled out correctly!";
    echo "<br> Your name is " . $name;
    echo "<br> Your email is " . $email;
    echo "<br> Your id is " . $id;
    echo "<br> Your accommodations are " . $accommodate;
    echo "<br> Your exam is " . $exam;
    echo "<br> Your exam is " . $instructer;
}
?>
</body>
</html>
