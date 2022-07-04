<?php
   include("connection.php");
 ?>
<?php 

if( isset( $_POST[ 'btnSign' ] ) ) { 
    // Get input 
    ///$message = trim( $_POST[ 'mtxMessage' ] ); 
    //$name    = trim( $_POST[ 'txtName' ] ); 
	  $message = $_POST[ 'mtxMessage' ] ; 
    $name    = $_POST[ 'txtName' ] ; 

    $query  = "INSERT INTO comments (message, name ) VALUES ('$message', '$name' );"; 
    $result = mysqli_query($connection,$query);
  //  mysqli_close(); 
} 

?> 
<!DOCTYPE html>

<head>
<!--added for modal-->   
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- End angular modal-->

  <style>footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}</style><style>

        	body {
  background-image: url("bg.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
			background-size: cover;}
			.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}
</style>
  <style>
div.click-to-top span {
  display: none;
  position: bottom;
  bottom: 0;
  left: 10;
  right: 0;
  background: #333;
  color: #fff;
}

div.click-to-top:hover span {
  display: block;
}
</style>
<style>.tooltip-class {
    left: 10px;
    top: 10px;
}</style>
<script>$("#sideModalTLInfo").on('shown.bs.modal', function(){
   alert("Hello World!");
});</script>
<style>
.alert {
  padding: 20px;
  background-color: green;
  color: white;
}
.alertdan {
  padding: 20px;
  background-color: red;
  color: white;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<style>.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}

</style>
<script type = "text/javascript">
var code = "C0ngrats!! The code is : IKNOWXSSREF"
</script>
</head>
<body oncontextmenu="return false;"> 
 
<div class="container">
  	 <div class="wrapper">
	   <div class="row">
		            <div class="col-lg-12" align="center">
					<br><br><br><br><br><br>
		            	  <div class="box box2">
						  <img src="logo3.png"><h1>XSS-Stored</h1>
						  </div>
			
		                
		            </div>
		        </div>
	    <div class="box box2">
	        <div class="container">
	    	  
	            <div class="row">
	        	   <div class="col-md-12" align="center">

                	
	<p>&nbsp;</p>
		 

			
	<div class="vulnerable_code_area">
	<img src="logo.png" width="250px" height="250px">
		<form method="post" name="guestform" onsubmit="return validate_form(this)">
			<table width="550" border="0" cellpadding="2" cellspacing="1">
				<tr>
					<td width="100">Name *</td>
					<td><input name="txtName" type="text" size="30" maxlength="10"></td>
				</tr>
				<tr>
					<td width="100">Message *</td>
					<td><input name="mtxMessage" type="text"  size="50" maxlength="50"></td>
				</tr>
				<tr>
					<td width="100">&nbsp;</td>
					<td><input name="btnSign" type="submit" value="Add Your Comment" onClick="return checkForm();"></td>
				</tr>
			</table>

		</form>
		
	</div>
<br />

							
	<div id="guestbook_comments">
	<table class="table" border="10" align="center"><tr><th><font color="red">User</font> </th><th><font color="Red">Comment</font></th></tr>
	<?php 
$sqlq = mysqli_query($connection, "SELECT * FROM comments");
if(mysqli_num_rows($sqlq) == 0){
					echo '<tr><td colspan="8">No data available.</td></tr>';
				}else{
					while($rowq = mysqli_fetch_assoc($sqlq)){ 
					
					//$no=$rowq['no'];
					?>
					<tr>
	
	<tr><td><font color="White"><?php echo $rowq['name'];?></font></td><td><font color="White"><?php echo $rowq['message'];?></font></td></tr>
	
	
	
	
	
				<?php } } //$no++; ?>
	</table></div>


                   
                    </div>
					 </div>
                        <!-- /.inner -->
                    </div>
				
			    </div>
				<div class="row">
		            <div class="col-lg-12" align="center">
					<br><br>
		            	  <div class="box box2">
						  <h2>Information about XSS!!</h2>
						  Stored XSS (also known as persistent or second-order XSS) arises when an application receives data from an untrusted source and includes that data within its later HTTP responses in an unsafe way.

The data in question might be submitted to the application via HTTP requests; for example, comments on a blog post, user nicknames in a chat room, or contact details on a customer order. In other cases, the data might arrive from other untrusted sources; for example, a webmail application displaying messages received over SMTP, a marketing application displaying social media posts, or a network monitoring application displaying packet data from network traffic. 

Source: https://portswigger.net/web-security/cross-site-scripting 
						  </div>
			
		                
		            </div>
		        </div>
				</div>
				
			</div>
			</div>

			
			
		

		
	   
	
	
		
<!-- Footer -->

  <!-- Footer Elements -->

</body>


</html>
