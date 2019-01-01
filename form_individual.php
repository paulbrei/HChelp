<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" --> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- InstanceBeginEditable name="EditRegion1title" -->       <title>Huntington County Help</title>
        <script type="text/javascript">
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
    } if (errors) alert('The following error(s) have occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
        </script>
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
     < <!--li><a>Scholarships Are Now Closed</a></li>-->
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
    
<h1>Individual Request:</h1>


<form method="post" action="/php_advanced_form/process.php" id="registration" runat="vdaemon">



<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="individual" />
<input type="hidden" name="redirect_to" value="../1thanks.html" />

<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="First name" cerrclass="controlerror"></vllabel> 
<input name="First name" type="text" placeholder="First Name" class="form-control" id="First name" />
<vlvalidator name="InputNameReq" type="required" control="First name" errmsg="Your first name is required.">
 </div>
 
 
<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="last_name" cerrclass="controlerror"></vllabel> 

<input name="last_name" type="text" placeholder="Last Name" class="form-control" id="last_name" />

<vlvalidator name="InputNameReq" type="required" control="last_name" errmsg="Your last name is required.">
 </div>
   
<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="email" cerrclass="controlerror"></vllabel> 

<input name="email" type="text"  placeholder="Email" class="form-control" id="email" />

<vlvalidator name="Input2NameReq" type="required" control="email" errmsg="Your email is required.">
</div>
    
<div class="form-group">
<vllabel errclass="error" validators="InputNameReq" for="phone" cerrclass="controlerror"> </vllabel>
<input name="phone" type="text" placeholder="Phone" class="form-control" id="phone" />
<vlvalidator name="InputNameReq" type="required" control="phone" errmsg="Your phone number is required.">
 </div>
 
<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address" cerrclass="controlerror"> </vllabel> 
<input name="street_address" type="text" placeholder="Street Address"  class="form-control" id="street_address" />
<vlvalidator name="Input2NameReq" type="required" control="street_address" errmsg="Your main street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="street_address2" cerrclass="controlerror"> </vllabel> 
<input type="text" name="street_address2" placeholder="Alternate Address"  class="form-control" />
<vlvalidator name="Input2NameReq" type="required" control="street_address2" errmsg="Your street address is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="city" cerrclass="controlerror"></vllabel> 
<input name="city" type="text" placeholder="City" class="form-control" id="city" />
<vlvalidator name="Input2NameReq" type="required" control="city" errmsg="Your city is required.">
</div>

<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="state" cerrclass="controlerror"> </vllabel> 
<input name="state" type="text" placeholder="State" class="form-control" id="state" />
<vlvalidator name="Input2NameReq" type="required" control="state" errmsg="Your state is required.">
</div>


<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="Zip" cerrclass="controlerror"> </vllabel> 
<input name="Zip" type="text" placeholder="Zip Code" class="form-control" id="Zip" />
<vlvalidator name="Input2NameReq" type="required" control="Zip" errmsg="Your zip code is required.">
</div>

<!--<div class="form-group">
<vllabel errclass="error" validators="Input2NameReq" for="disability_need" cerrclass="controlerror"> </vllabel> 
<input name="disability_need" type="text" placeholder="Briefly describe Your need" class="form-control" id="disability_need" />
<vlvalidator name="Input2NameReq" type="required" control="disability_need" errmsg="Your zip code is required.">
</div>-->
	
<!--<p>Proof:<input type="text" name="proof" class="input" /></p>-->


<div class="form-group">Briefly describe Your need:
<textarea name="need" rows="20" class="form-control" id="need"> </textarea></div>

<input type="text" id="need5" name="need5" placeholder="need5" autocomplete="off">


<!--<div class="form-group"> Briefly describe Your need
<textarea name="disability_need" rows="6" class="form-control" id="disability_need" > </textarea></div>-->

<!--<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>-->


<!--<p>Checkbox1 <input type="checkbox" name="checkbox" value="checkbox1" /> Checkbox2: <input type="checkbox" name="checkbox" value="checkbox2" /></p>-->

<?php /*?><
?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<?php */?>
<br />

<input type="submit" onClick="MM_validateForm('First name','','R','last_name','','R','email','','RisEmail','phone','','R','street_address','','R','city','','R','state','','R','Zip','','R','need','','R','need2','','R');return document.MM_returnValue" value="Submit" />
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