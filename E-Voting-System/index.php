<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background-color:#d2f1ef "> 
<div class="login-box" style="background-color:#51909c ;color:white ; font-size: 22px; font-family:Times; box-shadow: 5px 5px 2px #888888; border-radius: 5px;">
  	<div class="login-logo" style="background-color:#51909c ;color:white ; font-size: 22px; font-family:Times  ">
  		<b> Online Voting System</b>
  	</div>
  
  	<div class="login-box-body" style="background-color:#51909c ;color:white ; font-size: 22px; font-family:Times; border-radius: 5px 5px" >
    	<p class="login-box-msg" style="color:black ; font-size: 16px; font-family:Times  " >Sign in to start your voting session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-curve" style="background-color: #4682B4 ;color:black ; font-size: 12px; font-family:Times" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>