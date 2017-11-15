<script>
$( document ).ready(function() {
    console.log( "ready!" );
    var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
	 return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
	 return this.href == url;
}).closest('.treeview').addClass('active');
});

</script>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/uploads/files/<?php echo $user->profile_pic;?>" class="user-image" alt="User Image">

        </div>
        <div class="pull-left info">
          <p><?php echo $user->first_name.' '.$user->last_name;?></p>

        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>BKD Jawa Barat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/dataKepegawaian"><i class="fa fa-circle-o"></i>Data Induk Kepegawaian</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Data Diskominfo</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Data Dishub</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Data RPKD</a></li>

            <!-- <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i>Message No DR 2</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i>Message Renewal</a></li> -->
          <!-- </ul>

        </li> -->
<?php
function menuBuilder($menu)
{
  $htmlString = "";
    foreach ($menu as $m){
        $htmlString .="<li class=\"treeview\">
        <a href=\"#\">
          <i class=\"fa fa-folder\"></i> <span>".$m["menu_name"]."</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
        </a>
        <ul class=\"treeview-menu\">


        ";
        if(array_key_exists("subMenu",$m)||!empty($m))
        {

        }else{

          $htmlString .="<li><a href=\"".base_url()."dashboard/".$m1["menu_link"]."\"><i class=\"fa fa-circle-o\"></i>".$m1["menu_name"]."</a></li>";
        }
          $htmlString .= "</ul></li>";
    }
    return $htmlString;
}


?>
<!----------------------------------------->



<!------------------------------------------->

<?php foreach ($menu as $m){?>
        <li class="treeview">
                  <a href="#">
                    <!-- <i class="fa fa-folder"></i> <span><?php echo $m['menu_name'].'|parent_id :'.$m['parent_id'];?></span> -->
                    <i class="fa fa-folder"></i> <span><?php echo $m['menu_name']?></span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <?php if(array_key_exists("subMenu",$m)||!empty($m))
                      {

                          foreach($m['subMenu'] as $m1)
                          {
                              if(array_key_exists('subMenu',$m1))
                              {
                              ?>
                              <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i><?php echo $m1['menu_name']?>
                                  <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                  </span>
                                </a>

                                <ul class="treeview-menu">
                                  <?php
                                    foreach($m1['subMenu'] as $m2){

                                      if(array_key_exists("subMenu",$m2))
                                      { ?>
                                          <li class="treeview">
                                            <a href="#"><i class="fa fa-circle-o"></i><?php echo $m2['menu_name']?>
                                              <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                              </span>
                                            </a>

                                          <ul class="treeview-menu">
                                            <?php
                                              foreach($m2['subMenu']as $m3)
                                              {?>
                                                  <li><a href="<?php echo base_url().'dashboard/'.$m3['menu_link'] ?>"><i class="fa fa-circle-o"></i><?php echo $m3['menu_name']?></a></li>
                                              <?php
                                              }
                                            ?>
                                          </ul>
                                        </li>
                                          <?php
                                      }
                                      else{
                                      ?>
                                        <li><a href="<?php echo base_url().'dashboard/'.$m2['menu_link'] ?>"><i class="fa fa-circle-o"></i><?php echo $m2['menu_name']?></a></li>
                                      <?php
                                      }
                                    }
                                  ?>
                                </ul>
                              </li>
                              <?php
                              }else {
                                ?>
                                <li><a href="<?php echo base_url().'dashboard/'.$m1['menu_link']?>"><i class="fa fa-circle-o"></i><?php  echo $m1['menu_name']?></a></li>
                                <?php
                              }
                          }

                      }
                      else {
                        ?>

                          <li><a href="<?php echo base_url().'dashboard/'.$m['menu_link']?>"><i class="fa fa-circle-o"></i><?php  echo $m['menu_name']?></a></li>

                    <?php
                      }
                    ?>
                  </ul>
        </li>
<?php }?>

       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>KoinXL (96768)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupKoinXL"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordKoinXL"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2KoinXL"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerKoinXL"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleKoinXL"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryKoinXL"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeKoinXL"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyKoinXL"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>KOIN ISAT (96768)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupKoinISAT"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordKoinISAT"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2KoinISAT"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerKoinISAT"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleKoinISAT"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryKoinISAT"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeKoinISAT"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyKoinISAT"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>KOIN TELKOMSEL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupKoinTSEL"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordKoinTSEL"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2KoinTSEL"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerKoinTSEL"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleKoinTSEL"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryKoinTSEL"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeKoinTSEL"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyKoinTSEL"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>ARKADIA XL (99155)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupArkaXL"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordArkaXL"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2ArkaXL"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerArkaXL"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleArkaXL"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryArkaXL"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeArkaXL"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyArkaXL"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Arkadia ISAT (99155)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupArkaISAT"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordArkaISAT"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2ArkaISAT"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerArkaISAT"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleArkaISAT"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryArkaISAT"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeArkaISAT"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyArkaISAT"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Mobilink XL (99818)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupMobilinkXL"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordMobilinkXL"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2MobilinkXL"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerMobilinkXL"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleMobilinkXL"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryMobilinkXL"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeMobilinkXL"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyMobilinkXL"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>MOBILINK ISAT </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>dashboard/groupMobilinkISAT"><i class="fa fa-circle-o"></i>Group</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keywordMobilinkISAT"><i class="fa fa-circle-o"></i>Keyword</a></li>
            <li><a href="<?php echo base_url()?>dashboard/keyword2MobilinkISAT"><i class="fa fa-circle-o"></i>Keyword 2</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_registerMobilinkISAT"><i class="fa fa-circle-o"></i>Message Register</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_scheduleMobilinkISAT"><i class="fa fa-circle-o"></i>Message Schedule</a></li>
            <li><a href="<?php echo base_url()?>dashboard/taskScheduleMsgStoryMobilinkISAT"><i class="fa fa-circle-o"></i>Task Message Schedule Story</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_welcomeMobilinkISAT"><i class="fa fa-circle-o"></i>Message Welcome</a></li>
            <li><a href="<?php echo base_url()?>dashboard/message_storyMobilinkISAT"><i class="fa fa-circle-o"></i>Message Story</a></li>

          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
