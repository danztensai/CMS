<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div id="footer">
  <div class="container text-center">
    <p class="text-muted credit">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
  </div>
</div>
<?php echo $before_closing_body;?>
</body>
</HTML>
