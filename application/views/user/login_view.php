<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Aparatur Jabar</title>

    <!-- Custom Theme Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/styles.css" />
	
  </head>

  <body>
  
          <section class="container">
			<section class="login-form">
			
						<?php
						$attributes = array('role' => 'login');
						    echo form_open('user/login',$attributes);
						?>
					
							<img src="<?php echo base_url()?>assets/login/images/logo.png" class="img-responsive" alt="" />
							
						<?php
						    //echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
						    if(isset($_SESSION['auth_message']))
						    {?>
						        <div class="alert alert-danger">
						            <?php echo $_SESSION['auth_message']?>!!!
						        </div>
						    <?php
						    }
						    ?>


							<?php
						    echo form_error('username');
						    echo form_input('username','',array('class'=>'form-control input-lg','placeholder'=>'Username')).'<br />';
						    echo form_error('password');
						    echo form_password('password','password',array('class'=>'form-control input-lg','placeholder'=>'Password')).'<br />';
						    echo form_submit('submit','Log In',array('class'=>'btn btn-lg btn-primary btn-block'));
						    echo form_close();
						    ?>
							<div class="form-links">
								<a href="#">Sistem Informasi Aparatur Jabar</a>
							</div>
          </section>
		  </section>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
