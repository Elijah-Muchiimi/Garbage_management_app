<?php include "include/db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="./css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#sectone" class="active">Home</a>
  <a href="#secttwo">About</a>
  <a href="#sectthree">Contact</a>
  <a href="#SignUp" data-toggle="modal" data-target="#SignUp">SignUp</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<section class="footer">
<style>
.footer h1{
	padding-top: 0px;
}
</style>
	<div class="contents-box">
<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}

.contents-box{
			background: #3c723c;
			height: 80vh;
		}
h1{
	text-align: center;
	padding-top: 0px;
}
h1::after{
	content:'';
	background: #5995Fd;
	display: block;
	height: 3px;
	margin: 20px auto 50px;
}
</style>
		<div class="containers">
			<h1>Get In Touch</h1>
			<div class="rowd">
				<div class="col-md-6">
					<form class="contact-form">
						<div class="form-group">
							<input type="text" class="form-cantrol" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="Number" class="form-cantrol" placeholder="Phone Number">
						</div>
						<div class="form-group">
							<input type="Email" class="form-cantrol" placeholder="Email ID">
						</div>
						<div class="form-group">
							<textarea class="form-cantrol" rows="5" placeholder="Your Message">
							</textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow">
						<i class="fa fa-map-marker"></i><span>Nyeri Town, Kenya-022055671</span>
					</div>
					<div class="follow">
						<i class="fa fa-phone"></i><span>+254 200-717-754</span>
					</div>
					<div class="follow">
						<i class="fa fa-envelope"></i><span>nyerimunicipal@gmail.com</span>
					</div>
					<div class="follow">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-youtube-play"></i>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
					</div>
				</div>
			</div>
			<hr>
			<p class="copyright">Youtube <i class="fa fa-heart-o"></i></p>
		</div>
	</div>
<style>
	.contact-form{
		padding: 20px;
	}
	.form-cantrol{
		border-radius: 0 !important;
		border: none !important;
		box-shadow: none !important;
	}
	::placeholder{
		font-size: 15px;
	}
	.contact-form button{
		width: 150px;
		background-color: #5995fd;
		border: none;
		outline: none;
		height: 49px;
		border-radius: 49px;
		color: #fff;
		text-decoration: uppercase;
		font-weight: 500;
		margin: 10px 0;
		cursor: pointer;
	}
	.contact-info .follow{
		background-color: #fff;
		padding: 8px;
		margin: 15px;
	}
	.contact-info .fa{
		margin: 10px;
		font-size: 20px !important;
		color: #5995fd !important;
		fonweight: bold;
		padding-right: 20px; 
	}
	.contact-info span{
		font-size: 14px;
	}
	.copyright{
		text-align: centre;
		font-size: 14px;
	}
	.fa-heart-o{
		color: red;
		font-size: 17px;
	}
	.footer hr{
		margin-top: 50px;
		background: #5995fd;
	}
</style>
</section>
<style>
.footer-bs {
    background-color: #3c3d41;
	padding: 60px 40px;
	color: rgba(255,255,255,1.00);
	margin-bottom: 20px;
	border-bottom-right-radius: 6px;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 6px;
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
.footer-bs .footer-brand h2 { margin:0px 0px 10px; }
.footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

.footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.pages li { padding:5px 0px;}
.footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
.footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
.footer-bs .footer-nav h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.list li { padding:5px 0px;}
.footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
.footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

.footer-bs .footer-social ul { list-style:none; padding:0px; }
.footer-bs .footer-social h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
.footer-bs .footer-social li { padding:5px 4px;}
.footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
.footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

.footer-bs .footer-ns h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}
.footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

@media (min-width: 768px) {
	.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
}
</style>
<div class="">
    <section style="height:80px;"></section>
	<div class="row" style="text-align:center;">
		<h2>NYERI</h2>
	</div>
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2014 BS3 UI Kit, All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
</div>



<div class="modal fade" id="SignUp" role="dialog">
<div class="modal-dialog">


  <!-- Modal content-->
  <div class="modal-content">
	<div class="modal-header">
	<h3>SignUp Form<h3>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist" style="position:static; height:auto;">
			<li class="nav-item active">
				<a href="#login" aria-controls="login" role="tab" data-toggle="tab"><b>Login</b></a>
			</li>
			<li class="nav-item">
				<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><b>Register</b></a>
			</li>
		</ul>
		   <!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="login">
					<form action="./include/login.php" method="POST">
						<div class="form-group">
							<label for="exampleFormControlInput1">Phone Number:</label>
							<input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your email address" required>
						 </div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password:" required>
						 </div>
						<button type="submit" name="submit" value="login" class="btn btn-primary">Login</button>
							  
					</form>						
				</div>
				
				<div role="tabpanel" class="tab-pane" id="profile">
					<form action="./customer/action.php" method="POST">
						<div class="form-group">
							<label for="exampleFormControlInput1">Your name:</label>
							<input type="text" class="form-control" id="fname" name="fname" placeholder="John White" required>
						 </div>
						 <div class="form-group">
							<label for="exampleFormControlInput1">Phone Number:</label>
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone Number" required>
						 </div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email address:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
						 </div>
						 <div class="form-group">
							<label for="exampleFormControlSelect2">Select Region:</label>
							<select class="form-control" id="region" name="region">
							  <option>Select Region</option>
							  <?php
								$stmt = $conn->query('SELECT * FROM region where status = "Active"');

								while($row = $stmt->fetch()){
								?>
							  <option><?php echo $row['regionname']; ?></option>
								<?php }?>
							</select>
						  </div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="8 characters:" required>
						 </div>
						 <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
							<label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions.</label>
						  </div>
						<button type="submit" name="submit" value="register" class="btn btn-primary">Register</button>	
						<?php
						if (!isset($_GET['signup'])){
							exit();
						}
						else {
							$signupCheck = $GET['signup'];

							if ($signupCheck == "empty"){
								echo "<p class='error'>User Name is required</p>";
								exit ();
							}
							elseif ($signupCheck == "char"){
								echo "<p class='error'>Incorect User name or password/p>";
								exit ();
							}
						}
						?>		  
					</form>
				</div>
				
			</div>

		</div>
	 </div>
</div>
<?php if (isset($_GET['error'])) { ?>
	<p color="red"><?php echo $_GET['error']; ?></p>
<?php } ?>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 