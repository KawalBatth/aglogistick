<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"-->
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('name')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li id="account" class="treeview">
          <a href="#"><i class="fa fa-key fa-fw"></i> <span>Account</span>
               <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Customers <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span></a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('customer/add'); ?>">Add Customer<i class="fa fa-external-link fa-fw sws pst"></i></a>
                    <li><a href="<?= base_url('customer/manage'); ?>">Manage Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                    <li><a href="<?= base_url('customer/search'); ?>">Search Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                    <li><a href="<?= base_url('customer/list'); ?>">Customer List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                </ul>
            </li>
			<?php if($this->session->userdata('user_id')=='')
			{
				?>
				<ul class="treeview-menu">
                      <li><a href="<?= base_url('admin/user'); ?>">Manage Users <i class="fa fa-external-link fa-fw sws pst"></i></a>
                      <li><a href="<?= base_url('admin/users/add'); ?>"><i class="fa fa-external-link fa-fw sws pst"></i> Add User</a></li>
                </ul>
			<?php 
			}?>
                
            </li>
          </ul>
        </li>
      </ul>

      <!--ul class="sidebar-menu">
        <li id="reports" class="treeview">
          <a href="#"><i class="fa fa-file-text-o fa-fw"></i><span>Reports</span>
               <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Customer <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span></a>
                <ul class="treeview-menu">
                   <li><a href="<?= base_url('admin/status'); ?>">Status Report<i class="fa fa-external-link fa-fw sws pst"></i></a>
                   <li><a href="<?= base_url('admin/summary'); ?>">Summary Report <i class="fa fa-external-link fa-fw sws pst"></i></a>
                </ul>
            </li>
          </ul>
        </li>
      </ul-->


      <ul class="sidebar-menu">
        <li id="admin" class="treeview">
           <a href="#"><i class="fa fa-user fa-fw"></i>Admin
               <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span>
           </a>
          <ul class="treeview-menu">
            <li><a href="#">Rates and Fees <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span></a>
                <ul class="treeview-menu">
                      <li><a href="<?= base_url('admin/surcharge_list'); ?>">Surcharge List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                      <li><a href="<?= base_url('admin/import'); ?>">Import rates & costs <i class="fa fa-external-link fa-fw sws pst"></i></a>
                      <li><a href="<?= base_url('admin/rate'); ?>">Rate sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                      <!--li><a href="<?= base_url('admin/manage_sheet'); ?>">Manage Cover sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                      <li><a href="<?= base_url('admin/set_cost'); ?>">Set List Rates <i class="fa fa-external-link fa-fw sws pst"></i></a-->
                </ul>
            </li>
            <!--li><a href="#">Carriers <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('admin/carrier_list'); ?>">Carrier List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                    <li><a href="<?= base_url('admin/country_list'); ?>">Country List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                </ul>
            </li-->
          </ul>
        </li>
      </ul>

         <!--li id="widgets">
          <a href="<?= base_url('adminlte/widgets'); ?>">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li id="charts" class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="chartjs"><a href="<?= base_url('adminlte/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li id="morris"><a href="<?= base_url('adminlte/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li id="flot"><a href="<?= base_url('adminlte/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li id="inline"><a href="<?= base_url('adminlte/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
         <li id="ui" class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="general"><a href="<?= base_url('adminlte/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
            <li id="icons"><a href="<?= base_url('adminlte/icons'); ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li id="buttons"><a href="<?= base_url('adminlte/buttons'); ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li id="sliders"><a href="<?= base_url('adminlte/sliders'); ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li id="timeline"><a href="<?= base_url('adminlte/timeline'); ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li id="modals"><a href="<?= base_url('adminlte/modals'); ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
         <li id="forms" class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="general"><a href="<?= base_url('adminlte/general_form'); ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li id="advanced"><a href="<?= base_url('adminlte/advanced_form'); ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li id="editors"><a href="<?= base_url('adminlte/editors_form'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li id="tables" class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="simple-tables"><a href="<?= base_url('adminlte/simple_table'); ?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li id="data-tables"><a href="<?= base_url('adminlte/data_table'); ?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li id="calender">
          <a href="<?= base_url('adminlte/calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li id="mailbox" class="treeview">
          <a href="">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li id="inbox" class="">
              <a href="<?= base_url('adminlte/inbox'); ?>">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li id="compose"><a href="<?= base_url('adminlte/compose'); ?>">Compose</a></li>
            <li id="read"><a href="<?= base_url('adminlte/read_mail'); ?>">Read</a></li>
          </ul>
        </li>

        <li id="examples" class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="invoice"><a href="<?= base_url('adminlte/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li id="profile"><a href="<?= base_url('adminlte/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li id="login"><a target="_blank" href="<?= base_url('adminlte/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
            <li id="register"><a target="_blank" href="<?= base_url('adminlte/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
            <li id="lockscreen"><a target="_blank" href="<?= base_url('adminlte/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li id="404-error"><a href="<?= base_url('adminlte/error404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li id="500-error"><a href="<?= base_url('adminlte/errro500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li id="blank-page"><a href="<?= base_url('adminlte/blank'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li id="pace"><a href="<?= base_url('adminlte/pace'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
              <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
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

        <li><a target="_blank" href="../documentation_adminlte/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

      </ul>


    </section-->
    <!-- /.sidebar -->
  </aside>

  
<script>
  $("#<?= $cur_tab; ?>").addClass('active');
</script>
