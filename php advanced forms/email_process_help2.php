<?php
$emailSubject = 'Help Application';

/* Set e-mail recipient */
$myemail  = "paul_breininger@hotmail.com, p_garrett@comcast.net";

/* Check all form inputs using check_input function */
$first_name = check_input($_POST['first_name'], "Enter your First Name");
$contact_last_name = check_input($_POST['last_name'], "Enter your Last Name");
$street_address = check_input($_POST['street_address'], "Enter Your Home Street");
$city = check_input($_POST['city'], "Enter Your Home City");
$state = check_input($_POST['state'], "Enter Your Home State");
$zip = check_input($_POST['zip'], "Enter Your Home Zip");
$home_phone = check_input($_POST['home_phone'], "Enter Your Home Phone");
$email  = check_input($_POST['email'], "Enter Your Email");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
   show_error("E-mail address not valid");
}

$parent_spouse = check_input($_POST['parent_spouse'], "Enter Your Parents or Spouse");
$placeofemployment = check_input($_POST['placeofemployment'], "Enter Your Place of Employment");

$enrolled_school = check_input($_POST['enrolled_school'], "Enter the School You are Enrolled");
$school_address = check_input($_POST['school_address'], "Enter Your School Address");
$school_phone = check_input($_POST['school_phone'], "Enter Your School Phone");



$currentgradelevel = check_input($_POST['currentgradelevel'], "Enter Your Current Grade Level");
$AnticipatedGradeLevel = check_input($_POST['AnticipatedGradeLevel'], "Enter Your Anticipated Grade Level");
$AnticipatedDateDegree = check_input($_POST['AnticipatedDateDegree'], "Enter Your Anticipated Date of Degree");
$hours_completed = check_input($_POST['hours_completed'], "Enter Your Hours Completed");

$currentgpa = check_input($_POST['currentgpa'], "Enter Your Current Grade Point Average");
$major = check_input($_POST['major'], "Enter Your Major");
$minor = check_input($_POST['minor'], "Enter Your Minor, if None Enter NA");
$financial_assistance  = check_input($_POST['financial_assistance'], "Enter Financial Assistance receiving for 2015 - 2016");



$extra_involvement  = check_input($_POST['extra_involvement'], "Enter Extra-curricular Involvement ");
$goals  = check_input($_POST['goals'], "Enter Briefly Explain Your Plans and Goals for the Future ");

$additional_info  = check_input($_POST['additional_info'], "Enter additional_info");

$learnofscholarship  = check_input($_POST['learnofscholarship'], "Enter How You Heard of Scholarship");
//$phone    = check_input($_POST['phone']);
//$address  = check_input($_POST['address']);
//$location   = check_input($_POST['location']);


/* Let's prepare the message for the e-mail */
$message = "Help Application has been submitted by:

Applicant Info:

First Name:          $first_name
Last Name:           $last_name
Home Street:         $street_address
Home Street2:        $street_address2
Home City:           $city
Home State:          $state
Home Zip:            $zip
phone:               $home_phone
E-mail:              $email
Parents or Spouse:   $parent_spouse
Place of Employment: $placeofemployment
Extra-Curricular Involvement: $extra_involvement

Briefly explain your plans and goals for the future:  $goals

How did you learn of scholarship:  $learnofscholarship

School Information:

Enrolled School: $enrolled_school
School Address: $school_address
School Phone: $school_phone
CurrentGradeLevel: $currentgradelevel
Anticipated Grade Level: $AnticipatedGradeLevel
Anticipated Date of Completion of Degree: $AnticipatedDateDegree
Hours Completed: $hours_completed
Current GPA: $currentgpa
Major Area(s) of Study: $major
Minor Area(s) of Study: $minor

Financial Assistance receiving for 2015 - 2016 :   $financial_assistance

Additional Information:  $additional_info

";

/* Send the message using mail() function */
mail($myemail, $emailSubject, $location, $message);

/* Redirect visitor to the thank you page */
//header('Location: ../contact/thanks.html');
//exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>
    
    <br>
    <b>Select back arrow to make correction</b>

    </body>
    </html>
<?php
exit();
}


?>