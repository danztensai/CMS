<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<link href="<?php echo base_url()?>/assets/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/signin.css" rel="stylesheet">
<body>
<div class="container">
	
       
    <?php
    echo form_open('user/login',array('class'=>'form-signin'));
?>
<h2 class="form-signin-heading">Login Dashboard</h2>
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
    echo form_label('Username:','username',array('class'=>'sr-only')).'<br />';
    echo form_error('username');
    echo form_input('username','',array('class'=>'form-control','placeholder'=>'Username')).'<br />';
    echo form_label('Password:','password',array('class'=>'sr-only')).'<br />';
    echo form_error('password');
    echo form_password('password','password',array('class'=>'form-control','placeholder'=>'Password')).'<br />';
   ?>
   <div class="checkbox">
   <label>
   <?php
    echo form_checkbox('remember','1',FALSE).' Remember me<br />';
    ?>
    </label>
    </div>
    <?php
    echo form_submit('submit','Log In',array('class'=>'btn btn-lg btn-primary btn-block'));
    echo form_close();
    ?>
</div>
</body>