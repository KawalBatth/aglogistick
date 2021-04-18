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
		
		.pdt10 {
        padding-top: 10px !important;
        margin-top: 40px;
        }
		
		.col-lg-12.text-right {
            margin-top: 15px;
            margin-bottom: -33px;
}

button.btn.ref {
    margin-right: 1337px;
    margin-left: -772px;
}

button.btn.btn-primary.add_car {
    margin-right: 775px;
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

p {
     color: #333; 
    font-size: 16px; 
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
    width: 40%;
}

.form-group.text-bottom.s99 {
    float: left;
    margin-left: 40px;
    padding: -1px 7px;
}

input#email {
    margin-bottom: 10px !important;
}

button.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-icon-only.ui-dialog-titlebar-close {
    float: right;
}

input#addRowBtn {
    float: right;
    margin-right: 58px;
    margin-top: 19px;
}

.surcharge-form{
    display: none;
    position: fixed;
    bottom: 278px;
    width: 27%;
    right: 700px;
    z-index: 101;
    background: #ffffff;
    border: 4px solid #e5e5e5;
    padding: 13px;
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
    margin-right: -145px;
    background: aliceblue;
}

.box-header{
    background: #3c8dbc;
}

.btn-info {
    background-color: #3c8dbc;
    border-color: #3c8dbc;
}

h3.title {
    margin-left: -22px;
    margin-top: 10px;
}

h5#exampleModalLabel {
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    font-family: emoji;
    margin-bottom: -11px;
}

select#editcarriers {
    margin-top: 13px;
    margin-left: 48px;
    width: 34%;
}

h5#editModalLabel {
    font-size: 18px;
    color: #fff;
    font-weight: 600;
    font-family: auto;
    margin-bottom: -10px;
    background: #3c8dbc;
}

.modal-header{
    background: #3c8dbc;
}

label {
    font-weight: 600;
    font-size: 12px;
}


input.form-control.car_name {
    width: 45%;
}

.selected-row {
  color: #3c8dbc;
  transition: 0.3s all ease-out;
}
td:last-child{
    color:#333;
}

.modal-header .close{
    opacity: 1;
    color: #fff;
    margin-top: -12px;
}
.on-click, .btn {
  cursor: pointer;
}

.btn:focus {
  outline: none;
}

.btn {
  padding: 5px 20px;
  background: #3c8dbc;
  color: #fff;
  text-shadow: none;
}

.btn:hover {
  background: #3c8dbc;
  color: #fff;
  transition: 0.3s all ease-out;
}

img.del {
    width: 11%;
}

input#surcharge_name {
    margin-top: -24px;
    margin-left: 132px;
    width: 60%;
}
input#surcharge_price {
    margin-top: -21px;
    margin-left: 133px;
}

select#carriers {
    margin-left: 52px;
    width: 34%;
}

select#types {
    margin-left: 101px;
    width: 59%;
}

input#surcharge_price {
    margin-top: -21px;
    margin-left: 130px;
    width: 60%;
}

label.add_carrier {
    margin-top: 25px;
}

input#carrier_name {
    margin-left: 112px;
    width: 40%;
    margin-top: -19px;
}
.buttons-row {
  margin: 20px 10px;
}

button.btn.btn-primary.add_sur {
    margin-right: 194px;
    margin-top: -56px;
}

button#EditButton {
    margin-top: -55px;
    margin-right: 268px;
    margin-left: -194px;
}

button#create_excel {
    margin-top: -95px;
    margin-right: 13px;
}

input#btnExport {
    margin-top: -95px;
    margin-right: 9px;
    margin-left: -14px;
}


select#customerCode {
    width: 104%;
    margin-right: 154px;
}

p.username {
    color: red;
    font-size: 12px;
}

p.password {
    color: red;
    font-size: 12px;
}

input {
    text-transform: uppercase;
}
input:-ms-input-placeholder {
    text-transform: none;
}
input::placeholder {
    text-transform: none;
}

input#saveManageCustomer_customerAddress_address_email {
    text-transform: lowercase;
}

input#address_billingAddress_billingEmail {
    text-transform: lowercase;
}

input#address_address_email {
    text-transform: lowercase;
}

td.b16.uppercase {
    text-transform: uppercase;
}

p.customer_info {
    font-size: 13px;
    font-weight: 500;
    color: #333;
}

    </style>
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('admin');?>" class="logo">
      <mini logo for sidebar mini 50x50 pixels -->
      <!--img src="<?= base_url() ?>public/dist/img/AGL.png" class="logo_img" alt="User Image"-->
      <span><b> AGL <b></span>
      <span><b> Specialised <b></span>
      <!-- logo for regular state and mobile devices -->
     
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="pull-right info">
          <p class="user_name"><?= ucwords($this->session->userdata('name')); ?>
         <i class="fa fa-circle text-success"></i> </p>
        </div>
        <div style="text-align: center;">
                <a href="<?php echo base_url('admin/logout'); ?>"><img src="<?= base_url() ?>public/dist/img/logout.png" class="logo_img" alt="User Image"></a>
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
                <li><a href="#">Customers »</a>
                    <ul>
                        <li><a href="<?= base_url('admin/manage'); ?>">Manage Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/search'); ?>">Search Customers <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/list'); ?>">Customer List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                     </ul>
                </li>
                    <li><a href="#">Users »</a>
                       <ul>
                            <li><a href="<?= base_url('admin/user'); ?>">Manage Users <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/users/add'); ?>"><i class="fa fa-external-link fa-fw sws pst"></i> Add User</a></li>
                        </ul>
                    </li>
            </ul>
        </li>

        <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Reports</a>
            <ul class="sub-menu">
            <li><a href="#">Customer »</a>
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
                <li><a href="#">Rates and Fees »</a>
                    <ul>
                        <li><a href="<?= base_url('admin/surcharge'); ?>">Surcharge List <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/import'); ?>">Import rates & costs <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/rate'); ?>">Rate sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/manage_sheet'); ?>">Manage Cover sheets <i class="fa fa-external-link fa-fw sws pst"></i></a>
                            <li><a href="<?= base_url('admin/set_cost'); ?>">Set List Rates <i class="fa fa-external-link fa-fw sws pst"></i></a>
                     </ul>
                </li>
                    <li><a href="#">Carriers »</a>
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
 