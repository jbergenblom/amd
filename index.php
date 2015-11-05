<!DOCTYPE html>
<html>
<head>
	<Title>Registration Form</Title>
	<script src="js/angular.js"></script>
	<script src="js/app2.js"></script>
	<!-- <script src="js/global.js"></script> -->
<!--	<script src="js/jquery.min.js"></script>-->
<!--	<script src="http://www.nuget.org/packages/jQuery/1.8.2"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css"></link>
</head>
<body ng-app="MyApp">
	<!--<p><?php echo "http://" . $_SERVER['SERVER_NAME'] . "</p><p>". $_SERVER['REQUEST_URI'] . "<p></p>" . $_SERVER['PHP_SELF']; ?></p>-->
    <h1>Register here!</h1>
	<label for="checkbox">
        <input id="checkbox" type="checkbox" ng-model="visible">Toggle me
    </label>
	<div show="visible">
		<p>Hello world!</p>
	</div>
	<p>Fill in your name and email address, then click <strong>Submit</strong> to register.</p>
    
    
    // This form will be put in another page. Will be used for empl. questionnaire.
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data" >
      Name  <input type="text" name="name" id="name"/></br>
      Email <input type="text" name="email" id="email"/></br>
      <input type="submit" name="UserSubmit" value="Submit" />
	</form>
    
    //
	<form method="post" id="add" action="<?php echo $_SERVER['REQUEST_URI']; ?>"> 
		First: <input type="text" name="first" value=1></br>
        Second: <input type="text" name="second" value=2></br> 
        Third: <input type="text" name="third" value=3></br>
        Fourth: <input type="text" name="fourth" value=4></br>
        Fifth: <input type="text" name="fifth" value=5></br>
        <input type="submit" name="PredSubmit" value="Do calc">
	</form>
	<p name="out_prob" id="out_prob">
        <?php include('php/mlexec.php'); ?>    
    </p>
    <div id="regdiv">
	   <?php include('php/dbexec.php');?>
    </div>
</body>
</html>

