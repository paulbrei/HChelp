<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" --> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- InstanceBeginEditable name="EditRegion1title" -->       <title>Huntington County Help</title>
        <!--<script type="text/javascript">
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
     <!--<li><a>Scholarships Are Now Closed</a></li>-->
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
    
<?php
$msg = $_GET['msg'];

if ( $msg == '1' ) {
	echo '<p>Your information was submitted successfully.</p>';
}
?>
<h1>Organization Request</h1>

<form action="/php_advanced_form/process_organization.php" method="post" id="registration" runat="vdaemon">

<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="organization" />
<input type="hidden" name="redirect_to" value="../1thanks.html" />

<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="Organization" cerrclass="controlerror"></vllabel> 
<input name="organization" type="text" placeholder="Organization" class="form-control" id="organization" />
<vlvalidator name="InputNameReq" type="required" control="organization" errmsg="Your Organization name is required.">
 </div>
 
 <div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="contact_first_name" cerrclass="controlerror">Contact First Name </vllabel> 
<input name="contact_first_name" type="text" class="form-control" id="contact_first_name" />
<vlvalidator name="InputNameReq" type="required" control="contact_first_name" errmsg="Your Contact first name is required.">
 </div>
 
 
<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="contact_last_name" cerrclass="controlerror">Contact Last Name </vllabel> 
<input name="contact_last_name" type="text" class="form-control" id="contact_last_name" />
<vlvalidator name="InputNameReq" type="required" control="contact_last_name" errmsg="Your Contact last name is required.">
 </div>
 
 
 
 <div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="email" cerrclass="controlerror">Email </vllabel> 
<input name="email" type="text"  class="form-control" id="email" />
<vlvalidator name="Input2NameReq" type="required" control="email" errmsg="Your email is required.">
</div>

   
<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="phone" cerrclass="controlerror">Phone </vllabel>
<input name="phone" type="text" class="form-control" id="phone" />
<vlvalidator name="InputNameReq" type="required" control="phone" errmsg="Your phone number is required.">
 </div>
 
<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address" cerrclass="controlerror">Street Address </vllabel> 
<input name="street_address" type="text" class="form-control" id="street_address" />
<vlvalidator name="Input2NameReq" type="required" control="street_address" errmsg="Your street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address2" cerrclass="controlerror">Street Address(line2) </vllabel> 
<input type="text" name="street_address2" class="form-control" />
<vlvalidator name="Input2NameReq" type="required" control="street_address2" errmsg="Your street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="city" cerrclass="controlerror">City </vllabel> 
<input name="city" type="text" class="form-control" id="city" />
<vlvalidator name="Input2NameReq" type="required" control="city" errmsg="Your city is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="state" cerrclass="controlerror">State </vllabel> 
<input name="state" type="text" class="form-control" id="state" />
<vlvalidator name="Input2NameReq" type="required" control="state" errmsg="Your state is required.">
</div>


<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="Zip" cerrclass="controlerror">Zip Code </vllabel> 
<input name="zip" type="text" class="form-control" id="zip" />
<vlvalidator name="Input2NameReq" type="required" control="zip" errmsg="Your zip code is required.">
</div>
	
<!--<p>Proof:<input type="text" name="proof" class="input" /></p>-->

<div class="form-group">
State how your organization serves disabled residents of Huntington County
<vllabel errclass="error" validators="InputNameReq" for="serves_by" </vllabel> 
<textarea name="serves_by" rows="3" class="form-control" id="serves_by"> </textarea>
<vlvalidator name="Input2NameReq" type="required" control="serves_by" errmsg="Your serves_by is required.">
</div>

<div class="form-group">Briefly describe Your need 
<textarea name="disability_need" rows="3" class="form-control" id="disability_need"> </textarea></div>

<input type="text" id="need5" name="need5" placeholder="need5" autocomplete="off">


<?php /*?><
?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<?php */?>
<br />

<!--<input type="submit" onClick="MM_validateForm('Organization','','R','contact_first_name','','R','contact_last_name','','R','email','','RisEmail','phone','','R','street_address','','R','city','','R','State','','R','Zip','','R','serves_by','','R','disability_need','','R');return document.MM_returnValue" value="Submit" />-->
<input type="submit"  value="Submit" />

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
            <p class="col-md-10"><span style="font-weight: bold; color: #F8F8F8;">&copy; Huntington County Help. All Rights Reserved 2016</span></p>
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