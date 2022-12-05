<!DOCTYPE html>
<html>
<!--Header-->
<head>
	<!--joel's header content-->
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <title>Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	


  <link rel="stylesheet" type="text/css"  href="/css/registerStyles.css">
    <title>MicroEye Educational Institute</title>
    	<!--joel's header content end-->



</head>


<body>

    <!-- Header Starts -->
    
    <!-- Header Ends -->

 <!--content-->
<div class="content">
<br>
<br>

 <div class="container">
 
  <form method="post" action="/saveFeedback">
 {{csrf_field()}}
    <h1 align="center">Feedback</h1>
    <p align="center">Please fill in this form to send your feedback/ suggestions.</p>
    <hr>
    <center>
	<table>
	  <tr>
	      <td width="30%" align="center" >
     
		     <b>Student Name</b>
</div>
		  </td>
		  <td width="30%" align="left">
		     <input type="text" size ="100" placeholder="Enter Full Name" name="Sname" required> 
		  </td>
	  </tr>

	 
	  <tr>
	      <td style="margin-left: 80px" width="30%" align="center">
		     <div><b>Student E-mail</b>
		  </td>
		  <td width=> 
		     <input type="email" size="100" name="email" placeholder="xyz@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> 
		  </td>
	  </tr>

	  <tr>
	      <td width="12%" align="center">
		     <b>Feedback Message</b>
		  </td>
		  <td width="30%" align="left">
     
    <textarea id="subject" name="message" placeholder="Write something.." style="height:80px"></textarea>
		  </td>
	  </tr>
	  
	</table>  
	
	<hr>
	<br>
    


    <button type="submit" id="submitBtn" size="100" class="registerbtn">Send</button>
  </div>

</form>
  
<br>

 <!-- Footer Starts -->


    <!-- Footer end -->

 


</div>
<script type="text/javascript" src="../js/headerScript.js"></script>

</body>
</html>
