<?php  
if(isset($_POST['login'])){
	require '../includes/db.php';
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass = $pass;
	$query = mysqli_query($conn,"SELECT * FROM admin where email='".$email."' and password='".$pass."' ") or die(mysqli_connect_error());
		$row= mysqli_fetch_assoc($query);
		$dbname = $row['name'];
		$dbemail = $row['email'];
		$dbpass = $row['password'];
		if($dbemail==$email && $dbpass==$pass){
			session_start();
			$_SESSION['login']=true;
			$_SESSION['username'] = $dbname;
			$_SESSION['email'] = $dbemail;
			header('Location:dashboard');
	}
	else{
		?>
			<?php include 'includes/header.php'; ?>
			<div class="container">
			  <div class="scrollTxt">
			    <p>HTML & CSS</p>
			    <p>Development</p>
			    <p>PHP & MySQL</p>
			    <p>Web Design</p>
			    <p>JavaScript</p>
			    <p>Graphic Design</p>
			    <p>Search Engine Optimisation</p>
			    <p>Server Administration</p>
			    <p>Photoshop</p>
			    <p>Affinity Photo</p>
			    <p>Affinity Designer</p>
			    <p>HTML & CSS</p>
			    <p>Development</p>
			    <p>PHP & MySQL</p>
			    <p>Web Design</p>
			    <p>JavaScript</p>
			    <p>Graphic Design</p>
			    <p>Search Engine Optimisation</p>
			    <p>Server Administration</p>
			    <p>Photoshop</p>
			    <p>Affinity Photo</p>
			    <p>Affinity Designer</p>
			  </div>
			<div class="login-form-body">
				<div class="col-xs-12 col-sm-6 col-md-6 logo">
				<img src="assets/logoCMS.png">
				</div>
				<div class="login col-xs-12 col-sm-6 col-md-6">
			        <form action="" method="post">
			        	<div class="form-group has-feedback">
			            <input class="form-control" type="email" placeholder="Email" name="email" required>
			            <span class="glyphicon glyphicon-user form-control-feedback"></span>
				        </div>
				        <div class="form-group has-feedback">
				            <input class="form-control" type="password" placeholder="Password" name="pass" required>
				            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				        </div>
				        <div class="form-group has-feedback">
				            <a href="#">Forgot Password?</a>
				        </div>
				        <i class="errmsg">Invalid Login</i>
				        <div class="form-group has-feedback">
				            <input type="submit" value="Submit" class="btn btn-primary" name="login"><br><br>
				        </div>
			        </form>
				</div>
			</div>
</div>
		<?php
	}
}

?>
<?php
include 'includes/header.php';
?>
<div class="container">
  <div class="scrollTxt">
    <p>HTML & CSS</p>
    <p>Development</p>
    <p>PHP & MySQL</p>
    <p>Web Design</p>
    <p>JavaScript</p>
    <p>Graphic Design</p>
    <p>Search Engine Optimisation</p>
    <p>Server Administration</p>
    <p>Photoshop</p>
    <p>Affinity Photo</p>
    <p>Affinity Designer</p>
    <p>HTML & CSS</p>
    <p>Development</p>
    <p>PHP & MySQL</p>
    <p>Web Design</p>
    <p>JavaScript</p>
    <p>Graphic Design</p>
    <p>Search Engine Optimisation</p>
    <p>Server Administration</p>
    <p>Photoshop</p>
    <p>Affinity Photo</p>
    <p>Affinity Designer</p>
  </div>
<div class="login-form-body">
	<div class="col-xs-12 col-sm-6 col-md-6 logo">
	<img src="assets/logoCMS.png">
	</div>
	<div class="login col-xs-12 col-sm-6 col-md-6">
        <form action="" method="post">
        	<div class="form-group has-feedback">
            <input class="form-control" type="email" placeholder="Email" name="email" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
	        </div>
	        <div class="form-group has-feedback">
	            <input class="form-control" type="password" placeholder="Password" name="pass" required>
	            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	        </div>
	        <div class="form-group has-feedback">
	            <a href="#">Forgot Password?</a>
	        </div>
	        <div class="form-group has-feedback">
	            <input type="submit" value="Submit" class="btn btn-primary" name="login"><br><br>
	        </div>
        </form>
	</div>
</div>
</div>
<style type="text/css">
.login{
    padding: 5% 2% 0;
    border-left: 1px solid;
    margin-top: 20px;
}
body{
	background: #dedede;
}
	.login-form-body{
		margin: 15% auto;
	    height: 40%;
	    width: 50%;
	    border-radius: 5px;
	    background-color:rgb(150, 180, 142);
		}
	.logo{
		text-align: right;
    	padding: 12% 5%;
	}
	.container {
	  background: linear-gradient(to bottom, rgba(147, 210, 155, 0.6) 0%, rgba(38, 94, 15, 0.8) 100%);
	  height: 100vh;
	  width: 100vw;
	  position: absolute;
	  overflow: hidden;
	  perspective: 500px;
	}

	.scrollTxt {
	  position: absolute;
	  bottom: -12vw;
	  right: 0;
	  animation-name: scroll;
	  animation-duration: 50s;
	  animation-timing-function: linear;
	  animation-iteration-count: infinite;
	}

	.scrollTxt p {
	  color: rgba(255, 255, 255, 0.48);
	  opacity: 0.3;
	  font-family: 'Oswald', sans-serif;
	  font-size: 6em;
	  text-transform: uppercase;
	  line-height: 1;
	  text-align: center;
	}

	@keyframes scroll {
	  from {
	    transform: rotateX(20deg) rotateZ(30deg);
	  }
	  to {
	    transform: rotateX(20deg) rotateZ(30deg) translateY(66vw);
	  }
	}
	.user-icon{
		margin: 25px;
	}
</style>