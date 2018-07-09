<?php
$userGrp = $this->ion_auth->get_users_groups($this->ion_auth->get_user_id())->result();
$stsNotif =FALSE;
log_message('debug','Groupnya : '.print_r($userGrp,TRUE));
if (strpos($userGrp[0]->name, 'admin') !== false||strpos($userGrp[0]->name, 'opd') !== false) {
    $stsNotif = TRUE;
}
?>
<?php
  if($stsNotif)
  {
?>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#notification').load('<?php echo base_url()?>dashboard/getTotalNotificationUpdatePNS').fadeIn("slow");
}, 5000); // refresh every 10000 milliseconds

</script>
<?php
}
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIAp</b> Jabar</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          <?php
          if($stsNotif)
          {?>

          <li class="dropdown notifications-menu">
                      <a href="<?php echo base_url().'dashboard/dataconfirmation' ?>">
                        <i class="fa fa-bell-o"></i>
                        <span id="notification" class="label label-danger">0</span>
                      </a>

        </li>
        <?php
        }
        ?>
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/foto/<?php echo $user->profile_pic;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user->first_name.' '.$user->last_name;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/uploads/files/<?php echo $user->profile_pic;?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user->company;?>

                </p>
              </li>
              <!-- Menu Body -->

                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <?php echo anchor('user/logout', 'Logout');?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>

    </nav>
  </header>
