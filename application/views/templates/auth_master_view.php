<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/_parts/auth_master_header_view'); 
$this->load->view('templates/_parts/auth_master_topNavBar_view');
$this->load->view('templates/_parts/auth_master_sidebar_view.php');
?>
<?php echo $the_view_content;?>
<?php $this->load->view('templates/_parts/auth_master_footer_view');?>