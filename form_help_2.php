<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" --> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- InstanceBeginEditable name="EditRegion1title" -->       <title>Huntington County Help - Help Scholarship Application</title>
       <!-- <script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
        </script>-->
        <!-- InstanceEndEditable -->
        <meta name="description" content="Scholarship applications our now being accepted through March 9, 2018.">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--<link rel="stylesheet" href="../css/style_progress.css">-->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>

    <a class="navbar-brand" href="home.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
     <li><a href="scholarship-all.html">Scholarship Applications</a></li>
               
   <li class="dropdown">
    <a href="scholarship.html" class="dropdown-toggle" data-toggle="dropdown">Request for Services<b class="caret"></b></a>
    <ul class = "dropdown-menu">
    <li><a href="form_individual.php">Individual Request</a></li>
    <li><a href="form_organization.php">Organization Request</a></li>
    </ul>
   </li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="board.html">Board</a></li>
      <li><a href="links.html">Links</a></li>

<!-- <li><a href="phUploader.php">Upload Required Documents</a></li>-->

   </ul>
    </div><!--end container -->

</div><!-- /.navbar-collapse -->
</nav>
        <!-- InstanceBeginEditable name="EditRegion2_Content" -->
        

<div class="container page-content">
            
<div class="form">
    
<h1>Help Scholarship Application</h1>

<form action="/php_advanced_form/process_help.php" method="post" id="registration" runat="vdaemon">

<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="applicants_2016" />
<input type="hidden" name="redirect_to" value="../1thanks_help.html" />

<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="first_name" cerrclass="controlerror"></vllabel> 
<input name="first_name" type="text" placeholder="First Name" class="form-control" id="first_name" />
<vlvalidator name="InputNameReq" type="required" control="first_name" errmsg="Your first name is required.">
 </div>
 
  
<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="last_name" cerrclass="controlerror"> </vllabel> 
<input name="last_name" type="text" placeholder="Last Name" class="form-control" id="last_name" />
<vlvalidator name="InputNameReq" type="required" control="last_name" errmsg="Your last name is required.">
 </div>
 
 
 
 <div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address" cerrclass="controlerror"> </vllabel> 
<input name="street_address" type="text" placeholder="Home Street Address" class="form-control" id="street_address" />
<vlvalidator name="Input2NameReq" type="required" control="street_address" errmsg="Your main street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address2" cerrclass="controlerror"></vllabel> 
<input type="text" placeholder="Home Street Address (line2)" name="street_address2" class="form-control" />
<vlvalidator name="Input2NameReq" type="required" control="street_address2" errmsg="Your street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="city" cerrclass="controlerror"> </vllabel> 
<input name="city" type="text" placeholder="Home City" class="form-control" id="city" />
<vlvalidator name="Input2NameReq" type="required" control="city" errmsg="Your city is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="state" cerrclass="controlerror"> </vllabel> 
<input name="state" type="text" placeholder="Home State" class="form-control" id="state" />
<vlvalidator name="Input2NameReq" type="required" control="state" errmsg="Your state is required.">
</div>


<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="zip" cerrclass="controlerror"> </vllabel> 
<input name="zip" type="text" placeholder="Home Zip Code" class="form-control" id="zip" />
<vlvalidator name="Input2NameReq" type="required" control="zip" errmsg="Your zip code is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="home_phone" cerrclass="controlerror"> </vllabel> 
<input name="home_phone" type="text" placeholder="Home Phone (xxx-xxx-xxxx)" class="form-control" id="home_phone" />
<vlvalidator name="Input2NameReq" type="required" control="home_phone" errmsg="Your Home Phone is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="email" cerrclass="controlerror"></vllabel> 
<input name="email" type="text" placeholder="Email" class="form-control" id="email" />
<vlvalidator name="Input2NameReq" type="required" control="email" errmsg="Your email is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="parent_spouse" cerrclass="controlerror"></vllabel> 
<input name="parent_spouse" type="text" placeholder="Name of Parent or Spouse" class="form-control" id="parent_spouse" />
<vlvalidator name="Input2NameReq" type="required" control="parent_spouse" errmsg="Your Name of Parents or Spouse is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="placeofemployment" cerrclass="controlerror"></vllabel> 
<input name="placeofemployment" type="text" placeholder=" Place of Employment" class="form-control" id="placeofemployment" />
<vlvalidator name="Input2NameReq" type="required" control="placeofemployment" errmsg="Your Place of Employment is required.">
</div>

 <div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="learnofscholarship" cerrclass="controlerror"></vllabel> 
<input name="learnofscholarship" type="text" placeholder="How did you learn of this Scholarship?" class="form-control" id="learnofscholarship" />
<vlvalidator name="Input2NameReq" type="required" control="learnofscholarship" errmsg="Your How you learned of scholarship is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="extra_involvement" cerrclass="controlerror">Extra-curricular involvement</vllabel> 
<textarea name="extra_involvement" rows="3" type="text" placeholder="Extra-curricular involvement" class="form-control" id="extra_involvement"> </textarea>
<vlvalidator name="Input2NameReq" type="required" control="extra_involvement" errmsg="Your Extra-curricular involvement is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="goals" cerrclass="controlerror">Briefly explain your plans and goals for the future</vllabel> 
<textarea name="goals" rows="3" type="text" placeholder="Briefly explain your plans and goals for the future"  class="form-control" id="goals"> </textarea>
<vlvalidator name="Input2NameReq" type="required" control="goals" errmsg="Your your plans and goals for the future is required.">
</div>

<h3>School Information</h3>
<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="enrolled_school" cerrclass="controlerror"></vllabel> 
<input name="enrolled_school" type="text" placeholder="School of Present Enrollment" class="form-control" id="enrolled_school" />
<vlvalidator name="Input2NameReq" type="required" control="enrolled_school" errmsg="Your School of Present Enrollment is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="school" cerrclass="controlerror"></vllabel> 
<input name="school_address" type="text" placeholder="School Address" class="form-control" id="school_address" />
<vlvalidator name="InputNameReq" type="required" control="school" errmsg="Your School Address name is required.">
 </div>
 
 <div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="school_phone" cerrclass="controlerror"></vllabel> 
<input name="school_phone" type="text" placeholder="School Phone (xxx-xxx-xxxx)" class="form-control" id="school_phone" />
<vlvalidator name="InputNameReq" type="required" control="school_phone" errmsg="Your School Phone  is required.">
 </div>





<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="currentgradelevel" cerrclass="controlerror"></vllabel>
   
              <select id = "currentgradelevel"  name="currentgradelevel" type="text" placeholder="Current Grade Level" class="form-control" id="currentgradelevel">
               <option value = "">Current Grade Level</option>
               <option value = "Freshman ">Freshman </option>
               <option value = "Sophomore ">Sophomore </option>
               <option value = "1st Semester Junior">1st Semester Junior</option>
               <option value = "2nd Semester Junior">2nd Semester Junior</option>
               <option value = "1st Semester Senior">1st Semester Senior</option>
               <option value = "2nd Semester Senior">2nd Semester Senior</option>
               <option value = "Other">Other</option>		
              </select>
    <vlvalidator name="Input2NameReq" type="required" control="currentgradelevel" errmsg="Your current grade level is required.">
  </div>
  
  <div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="AnticipatedGradeLevel" cerrclass="controlerror"></vllabel>
              <select id = "AnticipatedGradeLevel"  name="AnticipatedGradeLevel" type="text" placeholder="Anticipated Grade Level Fall 2018" class="form-control" id="AnticipatedGradeLevel">
               <option value = "">Anticipated Grade Level Fall 2018</option>
               <option value = "Sophomore ">Sophomore </option>
               <option value = "1st Semester Junior">1st Semester Junior</option>
               <option value = "2nd Semester Junior">2nd Semester Junior</option>
               <option value = "1st Semester Senior">1st Semester Senior</option>
               <option value = "2nd Semester Senior">2nd Semester Senior</option>
               <option value = "Other">Other</option>			
              </select>
    <vlvalidator name="Input2NameReq" type="required" control="AnticipatedGradeLevel" errmsg="Your Anticipated Grade Level is required.">
  </div>


<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="AnticipatedDateDegree" cerrclass="controlerror"></vllabel> 
<input name="AnticipatedDateDegree" type="text" placeholder="Anticipated Date of Completion of Degree" class="form-control" id="AnticipatedDateDegree" />
<vlvalidator name="Input2NameReq" type="required" control="AnticipatedDateDegree" errmsg="Your Anticipated Date of Completion of Degree is required.">
</div>


<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="hours_completed" cerrclass="controlerror"></vllabel> 
<input name="hours_completed" type="text" placeholder="Hours Completed" class="form-control" id="hours_completed" />
<vlvalidator name="Input2NameReq" type="required" control="hours_completed" errmsg="Your hours_completed is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="AnticipatedDateDegree" cerrclass="controlerror"></vllabel> 
<input name="currentgpa" type="text" placeholder=" Current Grade Point Average" class="form-control" id="currentgpa" />
<vlvalidator name="Input2NameReq" type="required" control="currentgpa" errmsg="Your Anticipated Date of Completion of Degree is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="major" cerrclass="controlerror"></vllabel> 
<input name="major" type="text" placeholder=" Major Area(s) of Study" class="form-control" id="major" />
<vlvalidator name="Input2NameReq" type="required" control="major" errmsg="Your Major Area(s) of Study< is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="minor" cerrclass="controlerror"></vllabel> 
<input name="minor" type="text" placeholder=" Minor Area(s) of Study" class="form-control" id="minor" />
<vlvalidator name="Input2NameReq" type="required" control="minor" errmsg="Your Minor Area(s) of Study< is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="financial_assistance" cerrclass="controlerror">Financial Assistance Received for 2017/2018</vllabel> 
<textarea name="financial_assistance" rows="3" type="text" placeholder="Financial Assistance receiving for 2017 - 2018" class="form-control" id="financial_assistance"> </textarea>
<vlvalidator name="Input2NameReq" type="required" control="financial_assistance" errmsg="Your Financial Assistance receiving for 2017 -2018 is required.">
<h5>(List all financial assistance including grants, loans, scholarships, specifying amounts currently receiving. Failure to provide complete and accurate information will disqualify your application from eligibility)</h5>
</div>


 




	
<!--<p>Proof:<input type="text" name="proof" class="input" /></p>-->

<div class="form-group">Additional information that may be helpful to the scholarship committee when reviewing your application: 
<textarea rows="3" placeholder="Additional Info" name="additional_info"   class="form-control" id="additional_info"> </textarea></div>

<input type="text" id="need5" name="need5" placeholder="need5" autocomplete="off">
    
<p style="color: #493d25;">To be considered for the Help Scholarship<span style="font-weight: 800; "> all</span> of the following <span style="font-weight: 800;">must</span> be included: </p>
 
<ul>
<li style="color: #493d25;">Completed application </li>
<li style="color: #493d25;">An <span style="font-weight: 800">official</span> college transcript </li>
<li style="color: #493d25;">A current letter of recommendation from an college professor/ instructor 
or from an employer.</li> 
</ul>

<p style="color: #493d25;">Scholarship applications will be accepted  January 7, 2019 through March 4, 2019.</p>

<p style="color: #493d25;">Awards recipients will be notified on or around April 21, 2019. </p>
    
    
<!--<div class="form-group"><textarea rows="4"  placeholder="Describe yourself here..." name="describe" class="form-control" id="describe"></textarea></div>


<div class="form-group">
    <label for="official_college_transcript">Official college transcript</label>
    <input type="file" id="official_college_transcript">
    <p class="help-block">Official college transcript.</p>
  </div>
  
  <div class="form-group">
    <label for="recomendation"></label>
    <input type="file" id="recomendation">
    <p class="help-block">Current letter of recommendation from a college professor/ instructor or from an employer	</p>
  </div>-->
  
  
    
<?php /*?><
?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<?php */?>
<br />

<input type="submit" onClick="MM_validateForm
(
'first_name','','R',
'last_name','','R'
,'school','','R',
'school_address','','R'
,'school_phone','','R'
,'email','','RisEmail'
,'phone','','R'
,'street_address','','R'
,'city','','R'
,'state','','R'
,'Zip','','R'
,'home_phone','','R'
,'enrolled_school','','R'
,'parent_spouse','','R'
,'currentgradelevel','','R'
,'AnticipatedGradeLevel','','R'
,'AnticipatedDateDegree','','R'
,'currentgpa','','R'
,'major','','R'
,'minor','','R'
,'placeofemployment','','R'
,'learnofscholarship','','R'
,'extra_involvement','','R'
,'goals','','R'
);return document.MM_returnValue" value="Submit" />
</form>
</div>
            
        </div><!--end container -->
        
        <!-- InstanceEndEditable -->
        
<footer class="full-width foot">
 	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3 widget">
				<h3> <span style="font-weight: bold; color: #FFFFFF;">Contact Us</span></h3>
				<p>Email: info@huntingtoncountyhelp.com</p>
 				<p>Address: PO Box 1032 Huntington Indiana 46750</p>
			</div>
                
			<div class="col-sm-6 col-md-6 widget">
				<h3> <span style="font-weight: bold; color: #FFFFFF;">Our Mission</span></h3>
				<p>To serve residents of Huntington County by providing services, assistance, 
				equipment, and financial aid to disabled individuals, students pursuing careers 
				in helping fields and programs to detect and rehabilitate disabilities in 
				children.</p></div>

			<div class="col-sm-3 col-md-3 widget visible-lg visible-md visible-sm visible-md visible-xs">
				<a href="http://www.ipage.com/green-certified/huntingtoncountyhelp.com" onClick=		"MyWindow=window.open('http://www.ipage.com/green-certified/huntingtoncountyhelp.com','greenCertified','toolbar=no,
location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=550,height=200,left=50,top=50'); return false;">
				<img src="http://www.ipage.com/green-certified/hosting-badge-1.png" border="0" class="img-responsive" alt="Responsive image"></a>
			</div>
                
		</div><!--end row -->
  	</div><!--end container -->
  </footer><!--end footer -->
        
        <div class="credits">
        <div class="container">
            <div class="row">
            <p class="col-md-10"><span style="font-weight: bold; color: #F8F8F8;">&copy; Huntington County Help. All Rights Reserved 2019</span></p>
            <!--<aside class="social pull-right col-md-2">
                <a class="icon-facebook-sign" href="#" title="Follow Us On Facebook"></a>
                <a class="icon-twitter-sign" href="#" title="Follow Us On Twitter"></a>
            </aside>-->
                </div><!--end row -->
        </div><!--end container -->
    </div><!--end credits -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
<!-- InstanceEnd --></html>