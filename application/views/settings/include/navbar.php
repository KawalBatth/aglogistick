<style>
        #nav {
            list-style: none inside;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #nav li {
            display: block;
            position: relative;
            float: left;
            background: #3c8dbc;
        }

        .fa-fw 
        {
         width: 1.28571429em;
         margin-left: 10px;
        }

        #nav li a {
            display: block;
            padding: 0;
            text-decoration: none;
            width: 200px;
            /* this is the width of the menu items */
            line-height: 35px;
            /* this is the hieght of the menu items */
            color: #ffffff;
            /* list item font color */
        }

        #nav li li a {
            font-size: 95%;
        }

        .nav li a{
            font-size: 16px;
        }

        /* smaller font size for sub menu items */

        #nav li:hover {
            background: #3c8dbc;
        }

        /* highlights current hovered list item and the parent list items when hovering over sub menues */

        #nav ul {
            position: absolute;
            padding: 0;
            left: 0;
            display: none;
            /* hides sublists */
        }

        ul.sub-menu li a {
    color: #3c8dbc !important;
    background: #ffffff;
}

        #nav li:hover ul ul {
            display: none;
            margin-top: 20px;
        }

        /* hides sub-sublists */

        #nav li:hover ul {
            display: block;
        }

        /* shows sublist on hover */

        #nav li li:hover ul {
            display: block;
            /* shows sub-sublist on hover */
            margin-left: 200px;
            /* this should be the same width as the parent list item */
            margin-top: -35px;
            /* aligns top of sub menu with top of list item */
        }
        input.reset {
    background: #3c8dbc;
    color: #fff;
    font-size: 14px;
    border-radius: 3px;
}

p.surcharge-info {
    margin-top: 17px;
    margin-bottom: 18px;
    padding: 4px 5px;
}

input.save {
    background: #3c8dbc;
    color: #fff;
    font-size: 14px;
    border-radius: 3px;
}

table.s36.b25b {
    margin-top: 2px;
    width: 113%;
    margin-left: 46px;
}

.col-xs-3 {
    width: 19%;
    margin-top: 5px;
    padding: 9px 32px;
}

div#summary_report_length {
    margin-top: 17px;
}

.user-content {
    float: right;
    margin-top: -40px;
    margin-bottom: 50px;
}

input#chkShowDetail {
    margin-top: 8px;
    margin-left: 2px;
}

table.summary_rep {
    margin-bottom: 12px;
    margin-left: 10px;
    padding: 14px -7px;
}

div#customer-search_length {
    margin-top: 25px;
}

.row.carrier_name {
    margin-bottom: 31px;
}
        body {font-family: Arial;
        font-size: 15px;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

p.text_instruct {
    float: right;
    margin-top: -24px;
}

div#user_list_length {
    margin-top: 24px;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.tab_title{
    margin-top: 62px;
    margin-bottom: 22px;
    margin-left: 10px;
}
/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {
    color: red;
}

.bottom_button {
    float: right;
    margin-top: 10px;
    padding: 6px 12px;
}

.search_customer {
  float: right;
    margin-right: 4px;
}

label.search_tab {
    margin-right: 10px;
}

div#customer_list_length {
    margin-top: 24px;
}
.portlet-content {
    margin-top: 38px;
    /* padding: 7px 10px 13px 0px; */
}

select#customers {
    width: 236px;
    height: 26px;
}

label.radio-inline.parcel {
    margin-left: 32px;
    margin-top: -1px;
}

label.radio-inline.document {
    margin-left: 20px;
    margin-top: 0px;
}

input[type=search] {
    -webkit-appearance: auto;
    height: 26px;
}

input.form-control.old_pass {
    width: 372px;
}

p.note {
    color: red;
    font-size: 14px;
    border-left:none;
}

button.btn.s33.s44.save {
    float: left;
    margin-top: 26px;
    margin-left: -5px;
}

p.help_info {
    font-size: 16px;
    color: #333;
}

label.control-label {
    color: #333;
    font-size: 13px;
}

.help_contact {
    font-size: 16px;
    color: #333;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.quote-button {
    float: right;
    margin-bottom: 15px;
    margin-right: 15px;
}

.clicks {
    color: #666 !important;
    text-decoration: underline;
}

u{
    color: #b5121b;
}

.div_more_detail{
    display:none;
}

h3.quote_title {
    color: #333;
    margin-left: 10px;
    margin-top: 7px;
}

span a {
    display: none;
}

span {
    margin-top: -155px !important;
}

.clock24{
    color:inherit;
    text-decoration:none;
    cursor:text;
}

.clock24 :hover{
    color:inherit;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
    position: fixed;
    bottom: 350px;
    width: 22%;
    right: 700px;
    z-index: 101;
    background: #ffffff;
    border: 4px solid #e5e5e5;
    padding: 0px;
}

.popup-form{
    display: none;
    position: fixed;
    bottom: 350px;
    width: 22%;
    right: 700px;
    z-index: 101;
    background: #ffffff;
    border: 4px solid #e5e5e5;
    padding: 0px;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

h3.new_surcharge {
    color: black;
    font-weight: 500;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

input#carrier_name {
    width: 20%;
}

.surcharge-form{
    display: none;
    position: fixed;
    bottom: 500px;
    width: 27%;
    right: 700px;
    z-index: 101;
    background: #ffffff;
    border: 4px solid #e5e5e5;
    padding: 13px;
}

h3.title {
    margin-top: 10px;
    margin-left: -11px;
}

p.user_name {
    color: #fff;
    font-size: 15px;
    margin-top: 18px;
}

.pull-right{
    margin-right:115px;
}

i.fa.fa-circle.text-success {
    margin-left: 12px;
    font-size: 10px;
}

img.logo_img {
    width: 0;
    float: right;
    width: 2%;
    height: -21%;
    margin-top: 11px;
    display:block;
    margin-right: -193px;
    background: aliceblue;
}

a.back {
    color: #fff;
}

input {
    text-transform: uppercase;
}

button.ui-dialog-titlebar-close {
    float: right;
}

.ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-front.ui-draggable.ui-resizable{
    margin-top:-90px !important;
    
}


.ui-widget-content {
    background: #ffffff;
    padding: 0px;
    position: relative;
    padding: 1.6em;
     border: 0;
    margin-top:-178px !important;
    /* background: none; */
    overflow: inherit;
    width: 323px !important;
}

.td2{
    font-size:11px !important;
}

label.control-label.ready {
    width: 96%;
    font-size: 11px;
}

.modal-content {
    width: 135%;
}

textarea { height: 15px; padding: 3px; resize: none; }

.errorField { border: 2px solid red; }
.successField { border: 2px solid green; }

span.length {
    margin-left: -15px;
    margin-right: -195px;
    margin-top: 17px;
}


span.width {
    margin-left: 281px;
    margin-right: 87px;
}

span {
    margin-top: -155px !important;
}

input#shipment-info-form_shipmentPage_senderAddress_email {
    text-transform: lowercase;
}

input#btnExport {
    text-transform: initial;
}

.selected-row {
    color: #3c8dbc;
    transition: 0.3s all ease-out;
}

/*img {
    width: 115%;
    height: 100%;
    margin-left: -15px;
    margin-top: -4px;
}*/

div .quote-form {
    width: 45%;
    top: 101px;
    float: right;
    right: 448px;
}

button.btn.s33.ok {
    float: right;
}

table.table.table-hover.mg0 {
    margin-bottom: 16px;
}

a.btn.s33.s44.import {
    margin-top: -48px;
    margin-left: 193px;
}

img.image {
    width: 230px;
    height: 57px;
    margin-left: -16px;
}

    </style>
  <header class="main-header">
    <!-- Logo -->
    <?php //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?>
    <a id="foo" disabled="true" class="logo">
      <!--mini logo for sidebar mini 50x50 pixels -->
	  <?php
		$this->db->select('image');
		$this->db->from('customer');
		$this->db->where('customer_id',$_SESSION['customer_id']);
		$get_image = $this->db->get()->row();
		if(!empty($get_image->image)){
			$image_url = substr($get_image->image, 2); ?>
			<img  src="<?= base_url().$image_url;?>" alt="image" class="image">
		<?php }else{ ?>
			<span><b> AGL <b></span>
			<span><b> Specialised <b></span>
		<?php }
	  ?>
      <!--img  src="<?php //echo site_url('public/dist/img/'.$customers->profile_image); ?>" alt="image" /-->
      <!--img src="<?= base_url() ?>public/dist/img/AGL.png" class="logo_img" alt="User Image"-->
      
      <!-- logo for regular state and mobile devices -->
     
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="pull-right info">
      <p class="user_name"><?= ucwords($this->session->userdata('user_name')); ?>
         <i class="fa fa-circle text-success"></i></p>
        </div>
        <div class="logout">
                <a href="<?php echo base_url('customer/logout'); ?>"> <img src="<?= base_url() ?>public/dist/img/logout.png" class="logo_img" alt="User Image"></a>
            </div>
      </div>
     
      <div class="navbar-custom-manu">
        <ul class="nav navbar-nav">
             <!-- Messages: style can be found in dropdown.less-->
         
         
         
          <!-- User Account: style can be found in dropdown.less -->
          
          <!-- Control Sidebar Toggle Button -->
        
     
        <!--ul id="nav">
       <li><a href="#"><i class="fa fa-key fa-fw"></i><span> Account</span></a>
          <ul class="sub-menu">
                <li><a href="#">Customers ??</a>
                    <ul>
                        <li><a href="<?= base_url('admin/manage'); ?>">Manage Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/search'); ?>">Search Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/list'); ?>">Customer List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                     </ul>
                </li>
                    <li><a href="#">Users ??</a>
                       <ul>
                            <li><a href="<?= base_url('admin/user'); ?>">Manage Users <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/users/add'); ?>"><i class="fa fa-external-link fa-fw sws pst"></i> Add User</a></li>
                        </ul>
                    </li>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Reports</a>
            <ul class="sub-menu">
            <li><a href="#">Customer ??</a>
                    <ul>
                        <li><a href="<?= base_url('admin/status'); ?>">Customer Status Report<i class="fa fa-external-link fa-fw sws pst"></i></a>
                        <li><a href="<?= base_url('admin/summary'); ?>">Customer Summary Report <i class="fa fa-external-link fa-fw sws pst"></i></a-->
                        <!--li><a href="#">Activation Report <i class="fa fa-external-link fa-fw sws pst"></i></a-->
                     <!--/ul>
             </li>
                  
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-user fa-fw"></i>Admin</a>
          <ul class="sub-menu">
                <li><a href="#">Rates and Fees ??</a>
                    <ul>
                        <li><a href="<?= base_url('admin/surcharge'); ?>">Surcharge List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/import'); ?>">Import rates & costs <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/rate'); ?>">Rate sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/manage_sheet'); ?>">Manage Cover sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/set_cost'); ?>">Set List Rates <i class="fa fa-external-link fa-fw sws pst"></i></a>
                     </ul>
                </li>
                    <li><a href="#">Carriers ??</a>
                       <ul class="sub-menu">
                            <li><a href="<?= base_url('admin/carrier_list'); ?>">Carrier List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/country_list'); ?>">Country List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                        </ul>
                    </li>
            </ul>
        </li>
    </ul-->
  
    <!--label name="search" class="search_tab">Search</label><input type="search" name="search" class="search"-->

      </div>
    
    </nav>
  </header>
 