<?php $submit_id = @$_GET['id'];
if(isset($submit_id))
{
  @$customer_data= get_customer($submit_id);
  
   foreach($customer_data as $key=>$value)
        { 
          if (!$value) 
            $customer_data->$key = '';
        }
        
}
//echo $submit_id; 

?>
<html>
<body>
<!-- Add notes for customer modal -->
<div class="modal fade" id="notesModal" tabindex="-1" role="dialog" aria-labelledby="notesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body">
    
      <?php echo form_open(base_url('admin/add_notes'), 'class="notes-form" id="notes-form"'); ?>
    <input type="hidden" name="customerCode" value="<?php echo $submit_id;?>" id="customerCode">
    <table>
        <tbody><tr>
            <td colspan="3">  </td>
        </tr>
        <tr>
            <td>Customer #:</td>
            <td><?php echo @$customer_data->customer_id; ?></td>
        </tr>
        <tr>
            <td colspan="3">Note: <span style="color: red">*</span><br> <textarea name="note" cols="60" required rows="10" id="note_note" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 5px;"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="note.check" value="true" id="note_check"><input type="hidden" id="__checkbox_note_check" name="__checkbox_note.check" value="true"> Follow Up Date: <span style="color: red">*</span></td>
            <td>
                <div class="form-group input-group" style="width: 150px; margin-bottom: 0px;">
			
                <input type="date" id="start" required name="followUpDate" data-date-format="dd MM yyyy">
                <input type="hidden" name="file_path" value="" id="file_path"> 
				<input type="file" name="userfile" value="" id="profile_image_upload" class="w10">
                </div>
            </td>
        </tr>
    </tbody></table>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
      </div>
    </div>
  </div>
</div>


<!-- Edit notes for customer modal -->
<div class="modal fade" id="editNotesModal" tabindex="-1" role="dialog" aria-labelledby="editNotesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="note-form">
      <div class="modal-body">
    

    <table>
        <tbody><tr>
            <td colspan="3">  </td>

        </tr>
        <tr>
            <td>Customer #:</td>
            <td><?php echo @$customer_data->customer_id; ?></td>
        </tr>
        <tr>
            <td colspan="3">Note: <span style="color: red">*</span><br> <textarea name="note" cols="60" required rows="10" id="note_note" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="height: 5px;"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="check" value="true" id="note_check"><input type="hidden" id="__checkbox_note_check" name="__checkbox_note.check" value="true"> Follow Up Date: <span style="color: red">*</span></td>
            <td>
                <div class="form-group input-group" style="width: 150px; margin-bottom: 0px;">
			
                <input type="date" id="start" required name="followUpDate" data-date-format="dd MM yyyy">
                </div>
            </td>
        </tr>
    </tbody></table>
      </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- Road Express Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Rate Sheet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="caption b17 text-center">
        Rate sheet for: Road Express
       
    </div>
    
    <div class="form-group">
        <table class="table table-striped table-bordered mg0 table-hover">
            <thead>
            <tr>
                <th class="text-middle">Destination</th>
                <th class="text-middle">Min</th>
                <th class="text-middle">Base</th>
                <th class="text-middle">Per Kg</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
         </tbody>
         </table>
      </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>              


<!-- fixed price kg Modal -->
<div class="modal fade" id="fixed3Modal" tabindex="-1" role="dialog" aria-labelledby="fixed3ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Rate Sheet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="caption b17 text-center">
        Rate sheet for: Fixed Price Premium 3kg
    </div>
    
    <div class="form-group">
        <table class="table table-bordered mg0 table-hover">
            <thead>
            <tr>
                <th class="text-middle">Weight</th>
                <th class="text-middle">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>3.0</td>
            <td></td>
           
            </tr>
         </tbody>
         </table>
</div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>              


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption" id="manage-customer-title">Edit Customer</div>
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
    <?php echo form_open(base_url('admin/add_user'), 'class="webship-form" id="webship-form"'); ?>
    <input type="hidden" name="customerCode" value="<?php echo $submit_id;?>" id="customerCode">
    <div class="form-group">
        
        
        
    </div>
    <div class="form-group">
      
    <label>Alternate User :<span class="s30">*</span></label>
        <input type="text" name="username" maxlength="25" value="" required id="webship_name" required class="form-control alloptions">
       <!--p class="username">Note: Username should contains only 6 characters with 3 alphabets and 3 numbers.</p-->
    </div>
    <div class="form-group">
        <label>Password:<span class="s30">*</span></label> 
        <input name="userpassword" type="password" required pattern="^(?=(.*[a-z]){0,})(?=(.*[A-Z]){0,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){0,}).{8,}$" value="" class="form-control alloptions" maxlength="25">
        <p class="password">Note: Password should contains minimum 8 characters with at least 1 alphabet and 1 number.</p>
    </div>
    <div class="form-group">
        <label>Language:</label> <select name="language" class="form-control alloptions">
        <option value="english">English</option>
    </select>
    </div>
    <div class="form-group">
        <table class="s36">
            <tbody><tr>
                <td width="25"><input type="checkbox" name="allowExportAddressBook" value="false" id="webship_allowExportAddressBook"><!--input type="hidden" id="__checkbox_webship_allowExportAddressBook" name="allowExportAddressBook" value="true"--></td>
                <td>Allow Address Book Export</td>
            </tr>
            <tr>
                <td width="25"><input type="checkbox" name="isRequireChangePassword" value="false" id="webship_isRequireChangePassword"><!--input type="hidden" id="__checkbox_webship_isRequireChangePassword" name="isRequireChangePassword" value="true"--></td>
                <td>Force Password Change</td>
            </tr>
        </tbody></table>
    </div>

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

<!-- edit user Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <?php echo form_open(base_url('admin/update_user'), 'id="update_user_form" '); ?>
      <input type="hidden" name="customerId" value="<?php echo $submit_id;?>" id="customerId">
      <input type="hidden" name="webshipId" value="" id="webshipId">      
      <input type="hidden" name="user_id" value="" id="user_id">     
      
    
    <div class="form-group">
        
    <label>Alternate User :<span class="s30">*</span></label>
        <input type="text" name="username" required maxlength="25" value="" id="username"  class="form-control alloptions">
        <!--p class="username">Note: Username should contains only 6 characters with 3 alphabets and 3 numbers.</p-->
    </div>
    <div class="form-group">
      
        <label>Password:<span class="s30">*</span></label> <input name="userpassword"  required type="text" pattern="^(?=(.*[a-z]){0,})(?=(.*[A-Z]){0,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){0,}).{8,}$" value="" id="userpassword" class="form-control alloptions" maxlength="25">
    <p class="password">Note: Password should contains minimum 8 characters with at least 1 alphabet and 1 number.</p>
    </div>
    <div class="form-group">
        <label>Language:</label> <select name="language" id="language" class="form-control alloptions">
        <option value="english">English</option>
    </select>
    </div>
    <div class="form-group">
        <table class="s36">
            <tbody><tr>
                <td width="25"><input type="checkbox" value="0" name="allowExportAddressBook"  id="allowExportAddressBook"  checked=""></td>
                <td>Allow Address Book Export</td>
            </tr>
            <tr>
                <td width="25"><input type="checkbox" name="isRequireChangePassword" id="isRequireChangePassword" value="0"  checked=""></td>
                <td>Force Password Change</td>
            </tr>
        </tbody></table>
    </div>
      
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                        
                                              <td>  
                                            <select name="customerCode" id="customerCode" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                    <option value="-1">Select a Customer</option>
                                    <option value="http://localhost/agllogistic/admin/add">Add a Customer</option>
               <?php for($i=0;$i<count($data);$i++)
                        {
                        if ($submit_id == $data[$i]['customer_id']) 
                        {
                              $selected ="selected";
                         } 
                              else 
                         {
                                $selected = '';
                         }
    echo '<option value="customer_manage?id='.$data[$i]['customer_id'].'" ' .$selected.'>'.$data[$i]['customer_id'].' '.$data[$i]['customerName'].'</option>';
}?>
</select>

</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;" id="manage-customer-content-body">




        <ul id="manage_customer_tab_nav" class="nav nav-tabs responsive">
                <li style="margin-left: 10px;" class="active"><a href="#account-setup-tab" data-toggle="tab">Account Setup</a></li>
                <li class=""><a href="#address-tab" data-toggle="tab">Address</a></li>
                <li class=""><a href="#base-rates-tab" data-toggle="tab">Base Rates</a></li>
                <!--li class=""><a href="#markups-tab" data-toggle="tab">Markups</a></li-->
                <li class=""><a href="#webship-tab" data-toggle="tab">Web Freight</a></li>
                <li><a href="#notes-tab" data-toggle="tab">Notes</a></li>
                 <li><a href="#webship-history-tab" data-toggle="tab">Web Freight History</a></li>
           </ul>
<form id="update_customer_form">
<div id="manage_customer_tab_content" class="tab-content responsive">
    <div id="account-setup-tab" class="tab-pane fade active in">


 
    <div class="row">
        <div class="portlet-body b12 b11">
            <div class="row">
                <div class="col-lg-4">
                    <table class="table" style="font-size: 11px;">
                    <tbody><tr>
                            <td colspan="3" class="b16 uppercase"><p>
                           <?php echo @$customer_data->customerName;?>
                                <input type="hidden" name="customerName" value="<?php echo @$customer_data->customerName;?>" id="saveManageCustomer_accountSetup_address_customerName">
                                <br>
                                <?php echo @$customer_data->address; ?>
                                <input type="hidden" name="address1" value="<?php echo @$customer_data->address; ?>" id="saveManageCustomer_accountSetup_address_address1">
                                <br>
                                <?php echo @$customer_data->city; ?>
                                <input type="hidden" name="city" value="<?php echo @$customer_data->city; ?>" id="saveManageCustomer_accountSetup_address_city">
                                <br>
                                <?php echo @$customer_data->postal_code; ?>
                                <input type="hidden" name="postalCode" value="<?php echo @$customer_data->postal_code; ?>" id="saveManageCustomer_accountSetup_address_postalCode">
                                <br>
                                <?php echo @$customer_data->country; ?>
                                <input type="hidden" name="countryName" value="<?php echo @$customer_data->country; ?>" id="saveManageCustomer_accountSetup_countryName">
                                <br>
                                <?php echo @$customer_data->phone; ?>
                                <input type="hidden" name="phone" value="<?php echo @$customer_data->phone; ?>" id="saveManageCustomer_accountSetup_address_phone">
                                <br>
                                <?php echo @$customer_data->email; ?>
                                <input type="hidden" name="email" value="<?php echo @$customer_data->email; ?>" id="saveManageCustomer_accountSetup_address_email">
                            </p></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="caption b17">
                                    Account Setup
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Customer #:</td>
                            <td class="td2" colspan="2"><input type="text" name="customerCode" value="<?php echo @$customer_data->customer_id; ?>" readonly="readonly" id="saveManageCustomer_accountSetup_customerCode" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Submit Date:</td>
                            <td class="td2" colspan="2"><input type="text" name="createDate" value="<?php echo @$customer_data->created_date; ?>" readonly="readonly" id="saveManageCustomer_accountSetup_createDate" class="form-control"></td>
                        </tr>
                        
                        <tr>
                            <td class="td1">Activation Date:</td>
                            <td class="td2" colspan="2"><input type="text" name="activateDate" value="" readonly="readonly" id="saveManageCustomer_accountSetup_activateDate" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Inactive?:</td>
                            <td class="td2" colspan="2"><input type="checkbox" name="inActive" value="true" id="saveManageCustomer_accountSetup_inActive"><input type="hidden" id="__checkbox_saveManageCustomer_accountSetup_inActive" name="__checkbox_inActive" value="true"></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="col-lg-4">
                    <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="3" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Reporting Setup
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Previous Carrier:</td>
                            <td class="td2" colspan="2"><select name="previousCarrier" id="saveManageCustomer_accountSetup_previousCarrier" class="form-control">
                                 <option value="0" selected="selected"></option>
                                 <option value="1">DHL</option>
                                 <option value="52">Toll Priority</option>
                                 <option value="59">Toll Ipec</option>
                                <option value="72">Startrack</option>
                                <option value="400">UPS Express</option>
                          </select>

                          </td>
                        </tr>
                        <tr>
                            <td class="td1">Customer Group:</td>
                            <td class="td2" colspan="2"><select name="groupId" id="saveManageCustomer_accountSetup_groupId" class="form-control">
                                  <option value="0"></option>
                                <option value="2">Gold</option>
                             <option value="4">Lead</option>
                             <option value="1">Platinum</option>
                           <option value="3">Silver</option>
                        </select>

                         </td>
                        </tr>
                        <tr>
                            <td class="td1">Web Freight Group:</td>
                            <td class="td2"><select name="webshipGroupId" id="saveManageCustomer_accountSetup_webshipGroupId" class="form-control">
                             <option value="0" selected="selected"></option>
                            <option value="0" selected="selected">Default</option>
                               </select>

                              </td>
                        </tr>
                        <tr>
                            <td class="td1">Industry:</td>
                            <td class="td2" colspan="2"><select name="industryId" id="saveManageCustomer_accountSetup_industryId" class="form-control">
                       <option value="0" selected="selected"></option>
                          <option value="6">Accounting</option>
                          <option value="8">Advertising</option>
                          <option value="7">Finance</option>
                            <option value="1">Recruitment</option>
                      <option value="9">Training</option>


                            </select>

                                </td>
                        </tr>
                        <tr>
                            <td class="td1">Area:</td>
                            <td class="td2" colspan="2"><select name="areaId" id="saveManageCustomer_accountSetup_areaId" class="form-control">
                     <option value="0" selected="selected"></option>
                        <option value="2">Area 1</option>
                     <option value="1">Default Area</option>


                            </select>

                           </td>
                        </tr>
                        <tr>
                            <td class="td1">Sales Rep:</td>
                            <td class="td2" colspan="2"><select name="salesRepId" id="saveManageCustomer_accountSetup_salesRepId" class="form-control">
                    <option value="0" selected="selected"></option>
                   <option value="1">AGL</option>
                  </select>

                  </td>
                        </tr>
                        <tr>
                            <td class="td1">Collector:</td>
                            <td class="td2" colspan="2"><select name="collectorId" id="saveManageCustomer_accountSetup_collectorId" class="form-control">
                            <option value="0" selected="selected"></option>
                                   </select>

                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Business Registration #:</td>
                            <td class="td2" colspan="2"><input type="text" name="registrationId" value="0" id="saveManageCustomer_accountSetup_registrationId" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">GST #:</td>
                            <td class="td2" colspan="2"><input type="text" name="gstId" value="0" id="saveManageCustomer_accountSetup_gstId" class="form-control" onkeypress="return formartNumber(event,this,false);"></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="col-lg-4">
                    <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="3" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Carrier Setup
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">DHL Account #:</td>
                            <td class="td2" colspan="2"><input type="text" name="dhlAccount" value="3p" id="saveManageCustomer_accountSetup_dhlAccount" class="form-control"></td>
                        </tr>
                       
                        
                        <tr>
                            <td class="td1">Toll Priority Account #:</td>
                            <td class="td2" colspan="2"><input type="text" name="tollPriorityAccount" value="3p" id="saveManageCustomer_accountSetup_tollPriorityAccount" class=" form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Startrack Account #:</td>
                            <td class="td2" colspan="2"><input type="text" name="startrackAccount" value="" id="saveManageCustomer_accountSetup_startrackAccount" class=" form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Startrack Dispatch ID #:</td>
                            <td class="td2" colspan="2"><input type="text" name="dispatchId" value="" id="saveManageCustomer_accountSetup_dispatchId" class=" form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other Account #:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherAccount" value="" id="saveManageCustomer_accountSetup_otherAccount" class=" form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Booking Email Notification:</td>
                            <td class="td2" colspan="2"><input type="checkbox" name="bookingEmailNotification" value="true" id="saveManageCustomer_accountSetup_bookingEmailNotification"><input type="hidden" id="__checkbox_saveManageCustomer_accountSetup_bookingEmailNotification" name="__checkbox_bookingEmailNotification" value="true"></td>
                        </tr>
                        <tr>
                            <td class="td1">Rejection Notes:</td>
                            <td class="td2" colspan="2"><textarea name="rejectionNote" cols="" rows="" id="saveManageCustomer_accountSetup_rejectionNote" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">Enable AGL Warranty:</td>
                            <td class="td2" colspan="2"><input type="checkbox" name="enableSi" value="true" id="saveManageCustomer_accountSetup_enableSi"><input type="hidden" id="__checkbox_saveManageCustomer_accountSetup_enableSi" name="__checkbox_enableSi" value="true"></td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
  
</div>

    <div id="address-tab" class="tab-pane fade">

    <div class="row">
        <div class="portlet-body b12 b11">
            <div class="row">
                <div class="col-lg-4">
                    <input type="hidden" name="saveManageCustomer.customerAddress.customerCode" value="10000018" id="saveManageCustomer_customerAddress_customerCode">
                    
                    <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="3" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Address
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Customer Name">Customer Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="customerName" value="<?php echo @$customer_data->customerName;?>" id="saveManageCustomer_customerAddress_address_customerName" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Contact Name">Contact Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="contactName" required="required" value="<?php echo @$customer_data->contact_name;?>" id="saveManageCustomer_customerAddress_address_contactName" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Contact Title:</td>
                            <td class="td2" colspan="2"><input type="text" name="contactTitle" value="<?php echo @$customer_data->contact_title;?>" id="saveManageCustomer_customerAddress_address_contactTitle" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Address">Address:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="address1" required="required" value="<?php echo @$customer_data->address;?>" id="saveManageCustomer_customerAddress_address_address1" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">&nbsp;</td>
                            <td class="td2" colspan="2"><input type="text" name="address2" value="<?php //echo @$customer_data->address;?>" id="saveManageCustomer_customerAddress_address_address2" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="City">City:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="city" required="required" value="<?php echo @$customer_data->city;?>" id="saveManageCustomer_customerAddress_address_city" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Country">Country:<span class="s30">*</span></td>
                            <td class="td2" colspan="2">
                            <select name="country" required="required" id="saveManageCustomer_customerAddress_address_country" class="form-control uppercase" group="address">
                            <option value="<?php echo $customer_data->country;?>" <?php echo "selected" ?>><?php echo $customer_data->country;?></option>
                            
                            <?php  for($c=0;$c<count($country);$c++) 
                                                            { 
                                                                                      
                                                                ?>  
                                                                <option value="<?php echo $country[$c]['id'];?>" ><?php echo $country[$c]['country_name'];?></option>
                                                               
                                                            <?php
                                                           }   ?> 

                            </select>

                        </td>
                        </tr>
                        <tr>
                            <td class="td1">Postal Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="postalCode" value="<?php echo @$customer_data->postal_code;?>" id="saveManageCustomer_customerAddress_address_postalCode" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">State Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="stateCode" value="<?php echo @$customer_data->state_code;?>" id="saveManageCustomer_customerAddress_address_stateCode" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Phone">Phone:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" pattern="08\d{8}" name="phone" value="<?php echo @$customer_data->phone;?>" id="saveManageCustomer_customerAddress_address_phone" class="form-control uppercase" group="address" maxlength="10" ></td>
                        </tr>
                        <tr>
                            <td class="td1">Fax:</td>
                            <td class="td2" colspan="2"><input type="text" name="fax" value="<?php echo @$customer_data->fax;?>" id="saveManageCustomer_customerAddress_address_fax" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td2" colspan="2"><span> Eg: first@email.com; second@email.com
							</span></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Email">Email:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="email" value="<?php echo @$customer_data->email;?>" id="saveManageCustomer_customerAddress_address_email" class="form-control" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Mobile:</td>
                            <td class="td2" colspan="2"><input type="text" name="mobile" value="<?php echo @$customer_data->mobile;?>" id="saveManageCustomer_customerAddress_address_mobile" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Alt Contact Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="alternatePhone" value="<?php echo @$customer_data->alt_contact;?>" id="saveManageCustomer_customerAddress_address_alternatePhone" class="form-control uppercase" group="address"></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="col-lg-4">
                    <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Billing Address
                                </div>
                            </td>
                            <td colspan="" style="border-top: 0px !important">
                                <div class="b21">
                                    <span class="b20">Same As Customer Address </span>
                                    <input type="checkbox" name="billingSameWithCustomer" value="true" checked="checked" id="billing-same-with-customer-checkbox" onchange="sameWithCustomerCheckBoxChange()"><input type="hidden" id="__checkbox_billing-same-with-customer-checkbox" name="__checkbox_billingSameWithCustomer" value="true">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Customer Name">Customer Name:<span class="s30">*</span></td>
                         <td class="td2" colspan="2"><input type="text" required="required" name="billingCustomerName" value="<?php echo @$customer_data->billing_customer_name;?>" id="saveManageCustomer_customerAddress_billingAddress_billingCustomerName" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Contact Name">Contact Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingContactName" value="<?php echo @$customer_data->billing_contact_name;?>" id="saveManageCustomer_customerAddress_billingAddress_billingContactName" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Contact Title:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingContactTitle" value="<?php echo @$customer_data->billing_contact_title;?>" id="saveManageCustomer_customerAddress_billingAddress_billingContactTitle" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Address">Address:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingAddress1" value="<?php echo @$customer_data->billing_address;?>" id="saveManageCustomer_customerAddress_billingAddress_billingAddress1" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">&nbsp;</td>
                            <td class="td2" colspan="2"><input type="text" name="billingAddress2" value="<?php echo @$customer_data->billing_address2;?>" id="saveManageCustomer_customerAddress_billingAddress_billingAddress2" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing City">City:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingCity" value="<?php echo @$customer_data->billing_city;?>" id="saveManageCustomer_customerAddress_billingAddress_billingCity" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Country">Country:<span class="s30">*</span></td>
                            <td class="td2" colspan="2">
                            <select name="billingCountry" required="required" id="saveManageCustomer_customerAddress_billingAddress_billingCountry" class="form-control uppercase" group="billing-address" readonly="readonly">
                            <option value="<?php echo $customer_data->billing_country;?>" <?php echo "selected" ?>><?php echo $customer_data->billing_country;?></option>
                            <?php  for($c=0;$c<count($country);$c++) 
                                                            {                                                                
                                                                ?>  
                                                                <option value="<?php echo $country[$c]['id'];?>" ><?php echo $country[$c]['country_name'];?></option>
                                                               
                                                            <?php
                                                           }   ?> 
                                </select>

                        </td>
                        </tr>
                        <tr>
                            <td class="td1">Postal Code:</td>
                        <td class="td2" colspan="2"><input type="text" name="billingPostalCode" value="<?php echo @$customer_data->billing_postal_code;?>" id="saveManageCustomer_customerAddress_billingAddress_billingPostalCode" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">State Code:</td>
                        <td class="td2" colspan="2"><input type="text" name="billingStateCode" value="<?php echo @$customer_data->billing_state_code;?>" id="saveManageCustomer_customerAddress_billingAddress_billingStateCode" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Phone">Phone:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="billingPhone" value="<?php echo @$customer_data->billing_phone;?>" id="saveManageCustomer_customerAddress_billingAddress_billingPhone" class="form-control uppercase" pattern="08\d{8}" group="billing-address" readonly="readonly" maxlength="10"></td>
                        </tr>
                        <tr>
                            <td class="td1">Fax:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingFax" value="<?php echo @$customer_data->billing_fax;?>" id="saveManageCustomer_customerAddress_billingAddress_billingFax" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td2" colspan="2"><span> Eg: first@email.com; second@email.com
							</span></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Email">Email:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingEmail" value="<?php echo @$customer_data->billing_email;?>" id="saveManageCustomer_customerAddress_billingAddress_billingEmail" class="form-control" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Mobile:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingMobile" value="<?php echo @$customer_data->billing_mobile;?>" id="saveManageCustomer_customerAddress_billingAddress_billingMobile" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Alt Contact Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingAlternatePhone" value="<?php echo @$customer_data->billing_alt_contact;?>" id="saveManageCustomer_customerAddress_billingAddress_billingAlternatePhone" class="form-control uppercase" group="billing-address" readonly="readonly"></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="col-lg-4">
                    <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="3" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Other Contact
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">Owner:</td>
                            <td class="td2" colspan="2"><input type="text" name="owner" value="<?php echo @$customer_data->owner;?>" id="saveManageCustomer_customerAddress_address_owner" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="ownerPhone" value="<?php echo @$customer_data->other_phone;?>" id="saveManageCustomer_customerAddress_address_ownerPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="ownerEmail" value="<?php echo @$customer_data->other_email;?>" id="saveManageCustomer_customerAddress_address_ownerEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">AP Contact:</td>
                            <td class="td2" colspan="2"><input type="text" name="apContact" value="<?php echo @$customer_data->other_contact;?>" id="saveManageCustomer_customerAddress_address_apContact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="apPhone" value="<?php echo @$customer_data->other_phone1;?>" id="saveManageCustomer_customerAddress_address_apPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="apEmail" value="<?php echo @$customer_data->other_email1;?>" id="saveManageCustomer_customerAddress_address_apEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other Contact:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherContact" value="<?php echo @$customer_data->other_contact1;?>" id="saveManageCustomer_customerAddress_address_otherContact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherPhone" value="<?php echo @$customer_data->other_phone2;?>" id="saveManageCustomer_customerAddress_address_otherPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherEmail" value="<?php echo @$customer_data->other_email2;?>" id="saveManageCustomer_customerAddress_address_otherEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other 2 Contact :</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Contact" value="<?php echo @$customer_data->other_contact2;?>" id="saveManageCustomer_customerAddress_address_other2Contact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other 2 Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Phone" value="<?php echo @$customer_data->other_phone3;?>" id="saveManageCustomer_customerAddress_address_other2Phone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Email" value="<?php echo @$customer_data->other_email3;?>" id="saveManageCustomer_customerAddress_address_other2Email" class="form-control"></td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
    </form>
<script type="text/javascript">


    $(document).ready(function () {
        enableDisableBillingAddress();
        // Bind on keyup event handler to the inputs that it's group is address
        $("input[group='address']").keyup(function () {
            copyValue($(this));
        });
        $("select[group='address']").change(function () {
            copyValue($(this));
        });
    });

    function saveCustomerAddress() {
        var data = $("#frmSaveCustomerAddress").serialize();
        loadingDialog.dialog("open");
        $.post("manage_customers_address_save.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            $("#address-tab").html(res.content);
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function enableDisableBillingAddress() {
        if ($("#billing-same-with-customer-checkbox").is(':checked')) {
            $("input[group='billing-address'], select[group='billing-address']").each(function () {
                $(this).attr("readonly", true);
            });
        } else {
            $("input[group='billing-address'], select[group='billing-address']").each(function () {
                $(this).attr("readonly", false);
            });
        }
    }

    function sameWithCustomerCheckBoxChange() {
        enableDisableBillingAddress();
        $("input[group='address'], select[group='address']").each(function () {
            copyValue($(this));
        });
    }

    function copyValue(obj) {
        if ($("#billing-same-with-customer-checkbox").is(':checked')) {
            var addressName = $(obj).attr("name");
            var lastName = addressName.substring(addressName.lastIndexOf(".") + 1);
            lastName = lastName.charAt(0).toUpperCase() + lastName.slice(1);
            var billingAddressName = "billing" + lastName;
            $("input[name='" + billingAddressName + "'], select[name='" + billingAddressName + "']").val($(obj).val());
        }
    }


</script></div>
    <div id="base-rates-tab" class="tab-pane fade">

    <div id="Base-tab" class="tab-pane fade in">
        <div class="row">
            <div class="portlet-body b12 b11">
                <div class="portlet-body b22" style="padding: 0px;">
                    <ul id="cust_base_rate_tabs_nav" class="nav nav-tabs responsive">
                        <!--li class="active" style="margin-left: 10px;"><a href="#cust_base_rates_general_tab" data-toggle="tab">General</a></li>
                        <li><a href="#cust_base_rates_dhl_tab" data-toggle="tab" class="tb3">DHL</a></li>
                       
                        <li><a href="#cust_base_rates_toll_priority_tab" data-toggle="tab" class="tb3">Toll Priority</a></li>
                        <li><a href="#cust_base_rates_toll_ipec_tab" data-toggle="tab" class="tb3">Toll Ipec</a></li-->
                        <li><a href="#cust_base_rates_star_track_tab" data-toggle="tab" class="tb3">Star Track</a></li>
                        <!--li><a href="#cust_base_rates_ups_tab" data-toggle="tab" class="tb3">UPS</a></li>
                        <li><a href="#cust_base_rates_others_tab" data-toggle="tab" class="tb3">Others</a></li-->
                    </ul>
                    <div id="cust_base_rates_tab_content" class="tab-content responsive">
                        
                        
                        <div id="cust_base_rates_dhl_tab" class="tab-pane fade in">
                            <div class="row">
                                <div data-type="print-rate-sheet" class="portlet-body b12 b11">
                                    <!-- Print Rate Sheet -->
                                    <div class="form-group">
                                        <table class="s36">
                                            <tbody><tr>
                                                <td>Print Rate Sheets</td>
                                                
                                                <td><input type="checkbox" data-type="pdf-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Pdf</td>
                                                <td><input type="checkbox" data-type="excel-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Excel</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!-- Service Type List -->
                                    
                                        <div id="shipment_type_1_0_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="1_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">DHL Worldwide Express - Documents</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="1" data-content="0" data-bound="0" data-serviceid="1" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <!--div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="0"></i>
                                                            </div-->
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_0__rateType" class="form-control" data-index="0">
																	<option value="0">DHL</option>
																	<option value="1" selected="selected">% Margin</option>
																</select>

                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].rate" maxlength="25" value="35.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_0__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="0">
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',1,0,0,1)" class="b19" data-sheet-id="533" data-perweight-sheet-id="0" data-nc-sheet-id="448" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_0__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="0"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_0__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[0].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[0].zone" class="form-control alloptions text-center" maxlength="25" value="1" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[0].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[1].zone" class="form-control alloptions text-center" maxlength="25" value="2" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[1].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[2].zone" class="form-control alloptions text-center" maxlength="25" value="3" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[2].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[3].zone" class="form-control alloptions text-center" maxlength="25" value="4" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[3].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[4].zone" class="form-control alloptions text-center" maxlength="25" value="5" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[4].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[5].zone" class="form-control alloptions text-center" maxlength="25" value="6" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[5].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[6].zone" class="form-control alloptions text-center" maxlength="25" value="7" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[6].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[7].zone" class="form-control alloptions text-center" maxlength="25" value="8" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[7].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[8].zone" class="form-control alloptions text-center" maxlength="25" value="9" disabled="disabled" type="text" data-group="zone-name"> <input data-index="0" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[0].customerBaseRateDetails[8].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="35.00" data-group="zone-rate">
                                                                    </div>
                                                                </li>
                                                            
                                                        </ul>
                                                    </div>
                                                   
                                                </div>
                                            
                                        </div>
                                    
                                        
                                    
                                     
                              
                                    
                                </div>
                            </div>
                        </div>
                     
                        <!-- TNT Dom -->
                        <div id="cust_base_rates_tnt_dom_tab" class="tab-pane fade in">
                            <div class="row">
                                <div data-type="print-rate-sheet" class="portlet-body b12 b11">
                                    <!-- Orgin -->
                                   
                                    <div class="form-group">
                                        <table class="s36">
                                            <tbody><tr>
                                                <td>Origin</td>
                                                <td><select name="" id="tntDomColumnName" class="form-control">
													<option value="ADL">ADELAIDE - ADL</option>
													<option value="ABY">ALBANY - ABY</option>
													<option value="ALB">ALBURY/WODONGA - ALB</option>
													<option value="ASP">ALICE SPRINGS - ASP</option>
													<option value="ALL">ALL TO ALL - ALL</option>
													<option value="ARM">ARMIDALE - ARM</option>
													<option value="BAL">BALLARAT - BAL</option>
													<option value="BEN">BENDIGO - BEN</option>
													<option value="BNE">BRISBANE - BNE</option>
													<option value="BKH">BROKEN HILL - BKH</option>
													<option value="BME">BROOME - BME</option>
													<option value="BUN">BUNBURY - BUN</option>
													<option value="BBG">BUNDABERG - BBG</option>
													<option value="BUS">BUSSELTON - BUS</option>
													<option value="CNS">CAIRNS - CNS</option>
													<option value="CBA">CANBERRA - CBA</option>
													<option value="CVQ">CARNARVON - CVQ</option>
													<option value="COF">COFFS HARBOUR - COF</option>
													<option value="DWN">DARWIN - DWN</option>
													<option value="DUB">DUBBO - DUB</option>
													<option value="EMD">EMERALD - EMD</option>
													<option value="ESP">ESPERENCE - ESP</option>
													<option value="EXM">EXMOUTH - EXM</option>
													<option value="GLG">GEELONG - GLG</option>
													<option value="GET">GERALDTON - GET</option>
													<option value="GLD">GLADSTONE - GLD</option>
													<option value="OOL">GOLD COAST - OOL</option>
													<option value="GOS">GOSFORD - GOS</option>
													<option value="GOV">GOVE - GOV</option>
													<option value="HOB">HOBART - HOB</option>
													<option value="KAL">KALGOORLIE - KAL</option>
													<option value="KTA">KARRATHA - KTA</option>
													<option value="KTH">KATHERINE - KTH</option>
													<option value="KNX">KUNUNURRA - KNX</option>
													<option value="LNC">LAUNCESTON - LNC</option>
													<option value="LST">LEINSTER - LST</option>
													<option value="LIS">LISMORE - LIS</option>
													<option value="MKY">MACKAY - MKY</option>
													<option value="MAN">MANDURAH - MAN</option>
													<option value="MEL">MELBOURNE - MEL</option>
													<option value="MWL">MORWELL - MWL</option>
													<option value="MTG">MT GAMBIER - MTG</option>
													<option value="ISA">MT ISA - ISA</option>
													<option value="MTM">MT MAGNET - MTM</option>
													<option value="NCL">NEWCASTLE - NCL</option>
													<option value="NMN">NEWNAM - NMN</option>
													<option value="NOW">NOWRA - NOW</option>
													<option value="NS1">NSW COUNTRY 1 - NS1</option>
													<option value="NS2">NSW COUNTRY 2 - NS2</option>
													<option value="NS3">NSW COUNTRY 3 - NS3</option>
													<option value="NS4">NSW COUNTRY 4 - NS4</option>
													<option value="NS5">NSW COUNTRY 5 - NS5</option>
													<option value="NS6">NSW COUNTRY 6 - NS6</option>
													<option value="NT1">NT COUNTRY 1 - NT1</option>
													<option value="NT2">NT COUNTRY 2 - NT2</option>
													<option value="ORA">ORANGE - ORA</option>
													<option value="PAN">PANNAWONICA - PAN</option>
													<option value="PBO">PARABURDOO - PBO</option>
													<option value="PTH">PERTH - PTH</option>
													<option value="PHE">PORT HEDLAND - PHE</option>
													<option value="PTM">PORT MACQUARIE - PTM</option>
													<option value="QL1">QLD COUNTRY 1 - QL1</option>
													<option value="QL2">QLD COUNTRY 2 - QL2</option>
													<option value="QL3">QLD COUNTRY 3 - QL3</option>
													<option value="QL4">QLD COUNTRY 4 - QL4</option>
													<option value="RAV">RAVENSTHORPI - RAV</option>
													<option value="RKN">ROCKHAMPTON - RKN</option>
													<option value="SA1">SA COUNTRY 1 - SA1</option>
													<option value="SA2">SA COUNTRY 2 - SA2</option>
													<option value="SA3">SA COUNTRY 3 - SA3</option>
													<option value="SHP">SHEPPARTON - SHP</option>
													<option value="SIN">SINGLETON - SIN</option>
													<option value="MCE">SUNSHINE COAST - MCE</option>
													<option value="SYD">SYDNEY - SYD</option>
													<option value="TAM">TAMWORTH - TAM</option>
													<option value="TAS">TASMANIA - TAS</option>
													<option value="TCK">TENNANT CREEK - TCK</option>
													<option value="TPR">TOM PRICE - TPR</option>
													<option value="TBA">TOOWOOMBA - TBA</option>
													<option value="TVE">TOWNSVILLE - TVE</option>
													<option value="VC1">VIC COUNTRY 1 - VC1</option>
													<option value="VC2">VIC COUNTRY 2 - VC2</option>
													<option value="VC3">VIC COUNTRY 3 - VC3</option>
													<option value="WA1">WA COUNTRY 1 - WA1</option>
													<option value="WA2">WA COUNTRY 2 - WA2</option>
													<option value="WA3">WA COUNTRY 3 - WA3</option>
													<option value="WA4">WA COUNTRY 4 - WA4</option>
													<option value="WGA">WAGGA - WGA</option>
													<option value="WGR">WANGARATTA - WGR</option>
													<option value="WMB">WARRNAMBOOL - WMB</option>
													<option value="WPI">WEIPA - WPI</option>
													<option value="WIC">WICKHAM - WIC</option>
													<option value="WNG">WOLLONGONG - WNG</option>


												</select>

												</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!-- Print Rate Sheet -->
                                    <div class="form-group">
                                        <table class="s36">
                                             <tbody><tr>
                                                <td>Print Rate Sheets</td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheetCheckAll($(this))">
                                                        Check All
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheetCheckNone($(this))">
                                                        Check None
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheet($(this))">
                                                        Print Checked Rate Sheets
                                                    </button>
                                                </td>
                                                <td><input type="checkbox" data-type="pdf-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Pdf</td>
                                                <td><input type="checkbox" data-type="excel-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Excel</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!-- Service Type List -->
                                    
                                        <div id="shipment_type_166_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="166_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="166" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="9"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__rateType" class="form-control" data-index="9">
																	<option value="1" selected="selected">% Margin</option>


																</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="9">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',166,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="9"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_9__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[9].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-166-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].baserateDescription" value="General Road" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__baserateDescription" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__weight" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].shipmentTypeId" value="166" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__shipmentTypeId" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__customerCode" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__content" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__bound" data-index="9">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[9].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_9__carrierId" data-index="9">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_91_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="91_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="91" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="10"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__rateType" class="form-control" data-index="10">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="10">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',91,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="10"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_10__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[10].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-91-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].baserateDescription" value="General Road" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__baserateDescription" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__weight" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].shipmentTypeId" value="91" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__shipmentTypeId" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__customerCode" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__content" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__bound" data-index="10">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[10].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_10__carrierId" data-index="10">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_85_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="85_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Prepaid Extra Charges</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="85" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="11"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__rateType" class="form-control" data-index="11">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="11">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',85,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="11"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_11__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[11].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-85-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].baserateDescription" value="Prepaid Extra Charges" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__baserateDescription" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__weight" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].shipmentTypeId" value="85" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__shipmentTypeId" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__customerCode" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__content" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__bound" data-index="11">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[11].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_11__carrierId" data-index="11">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_82_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="82_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Fashion Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="82" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="12"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__rateType" class="form-control" data-index="12">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="12">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',82,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="12"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_12__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[12].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-82-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].baserateDescription" value="Fashion Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__baserateDescription" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__weight" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].shipmentTypeId" value="82" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__shipmentTypeId" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__customerCode" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__content" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__bound" data-index="12">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[12].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_12__carrierId" data-index="12">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_56_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="56_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Export - Documents</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="56" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="13"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__rateType" class="form-control" data-index="13">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="13">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',56,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="13"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_13__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[13].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-56-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].baserateDescription" value="Export - Documents" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__baserateDescription" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__weight" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].shipmentTypeId" value="56" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__shipmentTypeId" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__customerCode" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__content" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__bound" data-index="13">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[13].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_13__carrierId" data-index="13">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_26_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="26_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">D 4TC</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="26" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="14"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__rateType" class="form-control" data-index="14">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="14">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',26,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="14"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_14__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[14].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-26-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].baserateDescription" value="D 4TC" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__baserateDescription" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__weight" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].shipmentTypeId" value="26" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__shipmentTypeId" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__customerCode" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__content" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__bound" data-index="14">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[14].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_14__carrierId" data-index="14">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_3_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="3_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Priority (TNT)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="3" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="15"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__rateType" class="form-control" data-index="15">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="15">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',3,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="15"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_15__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[15].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-3-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].baserateDescription" value="Priority (TNT)" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__baserateDescription" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__weight" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].shipmentTypeId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__shipmentTypeId" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__customerCode" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__content" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__bound" data-index="15">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[15].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_15__carrierId" data-index="15">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_224_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="224_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Courier Service</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="224" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="16"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__rateType" class="form-control" data-index="16">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="16">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',224,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="16"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_16__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[16].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-224-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].baserateDescription" value="Courier Service" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__baserateDescription" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__weight" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].shipmentTypeId" value="224" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__shipmentTypeId" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__customerCode" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__content" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__bound" data-index="16">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[16].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_16__carrierId" data-index="16">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_89_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="89_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Priority</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="89" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="17"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__rateType" class="form-control" data-index="17">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="17">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',89,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="17"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_17__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[17].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-89-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].baserateDescription" value="Priority" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__baserateDescription" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__weight" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].shipmentTypeId" value="89" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__shipmentTypeId" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__customerCode" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__content" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__bound" data-index="17">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[17].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_17__carrierId" data-index="17">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_84_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="84_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">PAYU Satchel</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="84" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="18"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__rateType" class="form-control" data-index="18">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="18">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',84,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="18"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_18__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[18].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-84-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].baserateDescription" value="PAYU Satchel" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__baserateDescription" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__weight" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].shipmentTypeId" value="84" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__shipmentTypeId" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__customerCode" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__content" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__bound" data-index="18">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[18].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_18__carrierId" data-index="18">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_70_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="70_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Same Day - Standard</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="70" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="19"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__rateType" class="form-control" data-index="19">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="19">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',70,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="19"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_19__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[19].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-70-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].baserateDescription" value="Same Day - Standard" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__baserateDescription" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__weight" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].shipmentTypeId" value="70" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__shipmentTypeId" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__customerCode" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__content" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__bound" data-index="19">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[19].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_19__carrierId" data-index="19">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_55_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="55_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Export - Parcel</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="55" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="20"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__rateType" class="form-control" data-index="20">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="20">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',55,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="20"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_20__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[20].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-55-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].baserateDescription" value="Export - Parcel" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__baserateDescription" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__weight" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].shipmentTypeId" value="55" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__shipmentTypeId" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__customerCode" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__content" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__bound" data-index="20">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[20].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_20__carrierId" data-index="20">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_25_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="25_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">D 04</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="25" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="21"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__rateType" class="form-control" data-index="21">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="21">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',25,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="21"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_21__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[21].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-25-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].baserateDescription" value="D 04" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__baserateDescription" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__weight" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].shipmentTypeId" value="25" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__shipmentTypeId" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__customerCode" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__content" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__bound" data-index="21">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[21].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_21__carrierId" data-index="21">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_2_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="2_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road (TNT)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="2" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="22"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__rateType" class="form-control" data-index="22">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="22">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',2,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="22"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_22__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[22].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-2-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].baserateDescription" value="General Road (TNT)" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__baserateDescription" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__weight" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].shipmentTypeId" value="2" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__shipmentTypeId" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__customerCode" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__content" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__bound" data-index="22">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[22].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_22__carrierId" data-index="22">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_168_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="168_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="168" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="23"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__rateType" class="form-control" data-index="23">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="23">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',168,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="23"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_23__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[23].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-168-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].baserateDescription" value="General Road" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__baserateDescription" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__weight" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].shipmentTypeId" value="168" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__shipmentTypeId" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__customerCode" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__content" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__bound" data-index="23">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[23].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_23__carrierId" data-index="23">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_120_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="120_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="120" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="24"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__rateType" class="form-control" data-index="24">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="24">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',120,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="24"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_24__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[24].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-120-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].baserateDescription" value="General Road" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__baserateDescription" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__weight" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].shipmentTypeId" value="120" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__shipmentTypeId" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__customerCode" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__content" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__bound" data-index="24">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[24].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_24__carrierId" data-index="24">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_88_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="88_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">General Road</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="88" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="25"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__rateType" class="form-control" data-index="25">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="25">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',88,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="25"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_25__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[25].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-88-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].baserateDescription" value="General Road" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__baserateDescription" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__weight" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].shipmentTypeId" value="88" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__shipmentTypeId" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__customerCode" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__content" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__bound" data-index="25">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[25].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_25__carrierId" data-index="25">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_83_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="83_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">718B</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="83" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="26"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__rateType" class="form-control" data-index="26">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="26">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',83,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="26"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_26__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[26].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-83-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].baserateDescription" value="718B" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__baserateDescription" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__weight" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].shipmentTypeId" value="83" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__shipmentTypeId" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__customerCode" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__content" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__bound" data-index="26">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[26].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_26__carrierId" data-index="26">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_61_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="61_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Same Day - Standard</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="61" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="27"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__rateType" class="form-control" data-index="27">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="27">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',61,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="27"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_27__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[27].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-61-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].baserateDescription" value="Same Day - Standard" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__baserateDescription" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__weight" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].shipmentTypeId" value="61" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__shipmentTypeId" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__customerCode" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__content" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__bound" data-index="27">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[27].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_27__carrierId" data-index="27">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_54_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="54_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Import - Parcel</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="54" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="28"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__rateType" class="form-control" data-index="28">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="28">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',54,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="28"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_28__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[28].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-54-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].baserateDescription" value="Import - Parcel" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__baserateDescription" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__weight" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].shipmentTypeId" value="54" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__shipmentTypeId" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__customerCode" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__content" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__bound" data-index="28">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[28].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_28__carrierId" data-index="28">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_24_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="24_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">D  DC</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="24" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="29"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__rateType" class="form-control" data-index="29">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="29">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',24,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="29"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_29__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[29].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-24-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].baserateDescription" value="D  DC" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__baserateDescription" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__weight" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].shipmentTypeId" value="24" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__shipmentTypeId" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__customerCode" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__content" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__bound" data-index="29">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[29].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_29__carrierId" data-index="29">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_18_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="18_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Road Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="18" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="30"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__rateType" class="form-control" data-index="30">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="30">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',18,-1,0,3)" class="b19" data-sheet-id="356" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="30"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_30__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[30].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-18-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].baserateDescription" value="Road Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__baserateDescription" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__weight" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].shipmentTypeId" value="18" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__shipmentTypeId" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__customerCode" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__content" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__bound" data-index="30">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[30].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_30__carrierId" data-index="30">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_20_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="20_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express (Non Document)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="20" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="31"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__rateType" class="form-control" data-index="31">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="31">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',20,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="31"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_31__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[31].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-20-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].baserateDescription" value="Express (Non Document)" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__baserateDescription" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__weight" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].shipmentTypeId" value="20" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__shipmentTypeId" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__customerCode" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__content" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__bound" data-index="31">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[31].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_31__carrierId" data-index="31">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_147_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="147_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express (Document)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="147" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="32"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__rateType" class="form-control" data-index="32">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="32">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',147,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="32"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_32__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[32].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-147-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].baserateDescription" value="Express (Document)" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__baserateDescription" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__weight" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].shipmentTypeId" value="147" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__shipmentTypeId" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__customerCode" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__content" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__bound" data-index="32">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[32].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_32__carrierId" data-index="32">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_19_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="19_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Economy Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="19" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="33"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__rateType" class="form-control" data-index="33">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="33">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',19,-1,0,3)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="33"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_33__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[33].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-19-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].baserateDescription" value="Economy Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__baserateDescription" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__weight" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].shipmentTypeId" value="19" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__shipmentTypeId" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__customerCode" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__content" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__bound" data-index="33">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[33].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_33__carrierId" data-index="33">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_21_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="21_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Overnight Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="21" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="34"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__rateType" class="form-control" data-index="34">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="34">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',21,-1,0,3)" class="b19" data-sheet-id="355" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="34"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_34__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[34].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-21-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].baserateDescription" value="Overnight Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__baserateDescription" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__weight" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].shipmentTypeId" value="21" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__shipmentTypeId" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__customerCode" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__content" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__bound" data-index="34">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[34].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_34__carrierId" data-index="34">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_52_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="52_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Technology Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="52" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="35"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__rateType" class="form-control" data-index="35">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="35">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',52,-1,0,3)" class="b19" data-sheet-id="153" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="35"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_35__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[35].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-52-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].baserateDescription" value="Technology Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__baserateDescription" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__weight" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].shipmentTypeId" value="52" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__shipmentTypeId" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__customerCode" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__content" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__bound" data-index="35">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[35].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_35__carrierId" data-index="35">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                        
                                        <div id="shipment_type_22_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="22_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">9:00 Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="22" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="36"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__rateType" class="form-control" data-index="36">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="36">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',22,-1,0,3)" class="b19" data-sheet-id="150" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="36"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_36__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[36].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-22-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].baserateDescription" value="9:00 Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__baserateDescription" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__weight" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].shipmentTypeId" value="22" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__shipmentTypeId" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__customerCode" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__content" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__bound" data-index="36">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[36].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_36__carrierId" data-index="36">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_50_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="50_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">10:00 Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="50" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="37"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__rateType" class="form-control" data-index="37">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="37">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',50,-1,0,3)" class="b19" data-sheet-id="151" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="37"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_37__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[37].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-50-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].baserateDescription" value="10:00 Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__baserateDescription" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__weight" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].shipmentTypeId" value="50" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__shipmentTypeId" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__customerCode" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__content" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__bound" data-index="37">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[37].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_37__carrierId" data-index="37">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_51_-1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="51_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">12:00 Express</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="51" data-content="-1" data-bound="0" data-serviceid="3" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="38"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__rateType" class="form-control" data-index="38">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="38">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',51,-1,0,3)" class="b19" data-sheet-id="152" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="38"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_38__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[38].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-51-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].baserateDescription" value="12:00 Express" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__baserateDescription" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__weight" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].shipmentTypeId" value="51" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__shipmentTypeId" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__customerCode" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__content" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__bound" data-index="38">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[38].carrierId" value="3" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_38__carrierId" data-index="38">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- TNT Intl -->
                        <div id="cust_base_rates_tnt_intl_tab" class="tab-pane fade in">
                            <div class="row">
                                <div data-type="print-rate-sheet" class="portlet-body b12 b11">
                                    <!-- Print Rate Sheet -->
                                    <div class="form-group">
                                        <table class="s36">
                                            <tbody><tr>
                                                <td>Print Rate Sheets</td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheetCheckAll($(this))">
                                                        Check All
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheetCheckNone($(this))">
                                                        Check None
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="printRateSheet($(this))">
                                                        Print Checked Rate Sheets
                                                    </button>
                                                </td>
                                                <td><input type="checkbox" data-type="pdf-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Pdf</td>
                                                <td><input type="checkbox" data-type="excel-format" onchange="rateSheetFormatChange($(this))"></td>
                                                <td>Excel</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!-- Service Type List -->
                                    
                                        <div id="shipment_type_213_0_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="213_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express - Documents</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="213" data-content="0" data-bound="0" data-serviceid="54" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="39"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__rateType" class="form-control" data-index="39">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="39">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',213,0,0,54)" class="b19" data-sheet-id="398" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="39"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_39__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[39].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-213-0-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].baserateDescription" value="Express - Documents" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__baserateDescription" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__weight" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].shipmentTypeId" value="213" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__shipmentTypeId" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__customerCode" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__content" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__bound" data-index="39">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[39].carrierId" value="54" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_39__carrierId" data-index="39">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_151_1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="151_1_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express Old - Package</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="151" data-content="1" data-bound="0" data-serviceid="54" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="40"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__rateType" class="form-control" data-index="40">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="40">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',151,1,0,54)" class="b19" data-sheet-id="0" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="40"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_40__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[40].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-151-1-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].baserateDescription" value="Express Old - Package" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__baserateDescription" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__weight" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].shipmentTypeId" value="151" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__shipmentTypeId" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__customerCode" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].content" value="1" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__content" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__bound" data-index="40">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[40].carrierId" value="54" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_40__carrierId" data-index="40">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_213_1_0">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="213_1_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express - Package</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="213" data-content="1" data-bound="0" data-serviceid="54" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="41"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__rateType" class="form-control" data-index="41">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="41">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',213,1,0,54)" class="b19" data-sheet-id="400" data-perweight-sheet-id="401" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="41"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_41__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[41].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-213-1-0">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].baserateDescription" value="Express - Package" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__baserateDescription" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__weight" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].shipmentTypeId" value="213" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__shipmentTypeId" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__customerCode" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].content" value="1" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__content" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].bound" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__bound" data-index="41">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[41].carrierId" value="54" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_41__carrierId" data-index="41">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_213_0_1">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="213_0_1" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express - Documents (Inbound)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="213" data-content="0" data-bound="1" data-serviceid="54" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="42"></i>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__rateType" class="form-control" data-index="42">
    <option value="1" selected="selected">% Margin</option>


</select>


                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="42">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',213,0,1,54)" class="b19" data-sheet-id="399" data-perweight-sheet-id="0" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="42"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_42__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[42].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div id="hidden-input-213-0-1">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].baserateDescription" value="Express - Documents (Inbound)" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__baserateDescription" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].weight" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__weight" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].shipmentTypeId" value="213" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__shipmentTypeId" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].customerCode" value="10000018" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__customerCode" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].content" value="0" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__content" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].bound" value="1" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__bound" data-index="42">
                                                        <input type="hidden" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[42].carrierId" value="54" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_42__carrierId" data-index="42">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    
                                        <div id="shipment_type_213_1_1">
                                            
                                                
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="213_1_1" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
                                                                    <span class="br-display-name">Express - Package (Inbound)</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                    <input data-type="print-rate-sheet-checkbox" type="checkbox" data-customercode="10000018" data-shipmenttypeid="213" data-content="1" data-bound="1" data-serviceid="54" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32">
                                                                <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="43"></i>
                                                            </div>
                                                          
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                    <input type="text" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[43].rate" maxlength="25" value="0.00" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_43__rate" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="43">
                                                                
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
                                                                <a href="javascript:void(0)" onclick="viewRateSheet('10000018',213,1,1,54)" class="b19" data-sheet-id="403" data-perweight-sheet-id="402" data-nc-sheet-id="0" data-nc-perweight-sheet-id="0"><u><b>View</b></u></a>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
                                                                    <i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            
                                        </div>
                                    
                                      
                                    
                                    
                                </div>
                            </div>
                        </div>
                       
						<?php //echo '<pre>'; print_r(json_decode($margin->margin_rate)); echo '</pre>'; ?>
                        <!-- Star Track -->
                        <div id="cust_base_rates_star_track_tab" class="tab-pane fade active in">
                            <div class="row">
                                <div data-type="print-rate-sheet" class="portlet-body b12 b11">
                                    <!-- Orgin -->
									<form action="<?php echo base_url('admin/add_margin'); ?>" class="margin-form" id="margin-form" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <table class="s36">
                                            <tbody><tr>
                                                <td>Origin</td>
                                                <td>
													<select name="starTrackColumnName" id="starTrackColumnName" class="form-control">
													<option value="A10">A10</option>
													<option value="ABY">ALBANY - ABY</option>
													<option value="AC1">SA ZONE 1 - AC1</option>
													<option value="AC2">SA ZONE 2 - AC2</option>
													<option value="AC3">SA ZONE 3 - AC3</option>
													<option value="AC4">SA ZONE 4 - AC4</option>
													<option value="AC5">SA ZONE 5 - AC5</option>
													<option value="AC6">SA ZONE 6 - AC6</option>
													<option value="AC7">SA ZONE 7 - AC7</option>
													<option value="SC7">SA ZONE 7 - SC7</option>
													<option value="AC8">SA ZONE 8 - AC8</option>
													<option value="AC9">SA ZONE 9 - AC9</option>
													<option value="ADL">ADELAIDE - ADL</option>
													<option value="ALB">ALBURY - ALB</option>
													<option value="ASP">ALICE SPRINGS - ASP</option>
													<option value="BNA">BALLINA - BNA</option>
													<option value="BRO">BROOME - BRO</option>
													<option value="BRS">BRISBANE - BRS</option>
													<option value="BUN">BUNDABERG - BUN</option>
													<option value="CBR">CANBERRA - CBR</option>
													<option value="COF">COFFS HARBOUR - COF</option>
													<option value="CRN">CAIRNS - CRN</option>
													<option value="D10">DARWIN ZONE 10 - D10</option>
													<option value="DAR">DARWIN - DAR</option>
													<option value="DC4">DARWIN ZONE 4 - DC4</option>
													<option value="DC6">DARWIN ZONE 6 - DC6	</option>
													<option value="DC7">DARWIN ZONE 7 - DC7	</option>
													<option value="ESP">ESPERENCE - ESP	</option>
													<option value="GLA">GLADSTONE - GLA	</option>
													<option value="GLD">GOLD COAST - GLD</option>
													<option value="GYM">GYMPIE - GYM</option>
													<option value="HC1">HOBART ZONE 1 - HC1	</option>
													<option value="HC2">HOBART ZONE 2 - HC2	</option>
													<option value="HOB">HOBART - HOB</option>
													<option value="KAR">KARRATHA - KAR</option>
													<option value="L10">L10	</option>
													<option value="LC1">LAUNCESTON ZONE 1 - LC1	</option>
													<option value="LC2">LAUNCESTON ZONE 2 - LC2	</option>
													<option value="LC3">LAUNCESTON ZONE 3 - LC3	</option>
													<option value="LCN">LAUNCESTON - LCN</option>
													<option value="LIS">LISMORE - LIS</option>
													<option value="MAC">MACKAY - MAC</option>
													<option value="MAR">MARYBOROUGH - MAR</option>
													<option value="MEL">MELBOURNE - MEL</option>
													<option value="N10">N10	</option>
													<option value="NC1">NSW ZONE 1 - NC1</option>
													<option value="NC2">NSW ZONE 2 - NC2</option>
													<option value="NC3">NSW ZONE 3 - NC3</option>
													<option value="NC4">NSW ZONE 4 - NC4</option>
													<option value="NC5">NSW ZONE 5 - NC5</option>
													<option value="NC6">NSW ZONE 6 - NC6</option>
													<option value="NCL">NEWCASTLE - NCL	</option>
													<option value="PER">PERTH - PER	</option>
													<option value="PRO">GREGORY RIVER - PRO	</option>
													<option value="Q10">Q10	</option>
													<option value="QC1">QUEENSLAND ZONE 1 - QC1	</option>
													<option value="QC2">QUEENSLAND ZONE 2 - QC2	</option>
													<option value="QC3">QUEENSLAND ZONE 3 - QC3	</option>
													<option value="QC4">QUEENSLAND ZONE 4 - QC4	</option>
													<option value="QC5">QUEENSLAND ZONE 5 - QC5	</option>
													<option value="QC6">QUEENSLAND ZONE 6 - QC6	</option>
													<option value="QC7">QUEENSLAND ZONE 7 - QC7	</option>
													<option value="QC8">QUEENSLAND ZONE 8 - QC8	</option>
													<option value="QC9">QUEENSLAND ZONE 9 - QC9	</option>
													<option value="RHM">ROCKINGHAM - RHM</option>
													<option value="RKH">ROCKINGHAM - RKH</option>
													<option value="ROC">ROCKHAMPTON - ROC</option>
													<option value="SSC">SUNSHINE COAST - SSC</option>
													<option value="SYD">SYDNEY - SYD</option>
													<option value="TAM">TAMWORTH - TAM</option>
													<option value="TVL">TOWNSVILLE - TVL</option>
													<option value="TWB">TOOWOOMBA - TWB</option>
													<option value="VC1">VICTORIA ZONE 1 - VC1</option>
													<option value="VC2">VICTORIA ZONE 2 - VC2</option>
													<option value="VC3">VICTORIA ZONE 3 - VC3</option>
													<option value="WC1">WA ZONE 1 - WC1</option>
													<option value="WC2">WA ZONE 2 - WC2</option>
													<option value="WC3">WA ZONE 3 - WC3</option>
													<option value="WC4">WA ZONE 4 - WC4</option>
													<option value="WC5">WA ZONE 5 - WC5</option>
													<option value="WC6">WA ZONE 6 - WC6</option>
													<option value="WC7">WA ZONE 7 - WC7</option>
													<option value="WC8">WA ZONE 8 - WC8</option>
													<option value="WC9">WA ZONE 9 - WC9</option>
													<option value="WOL">WOLLONGONG - WOL</option>
													</select>
													</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!-- Print Rate Sheet -->
                                    <div class="form-group">
                                        <table class="s36 check-list">
                                            <tbody>
												<tr>
													<td><input type="radio" class="TLO" name="radio1" id="all" />Check All</td>
													<td><input type="radio" class="TLO" name="radio1" id="none" />Uncheck All</td>
													<td><input type="checkbox" data-type="pdf-format" onchange="rateSheetFormatChange($(this))"></td>
													<td>Pdf</td>
													<td><input type="checkbox" data-type="excel-format" onchange="rateSheetFormatChange($(this))"></td>
													<td>Excel</td>
												</tr>
											</tbody>
										</table>
                                    </div>
									<input type="hidden" value="<?php echo $submit_id;?>" name="customer_id" id="customer_id">
                                    <!-- Service Type List -->
                                    <?php 
										if(!empty($margin)){
											$margin_rates = json_decode($margin->margin_rate);
										}else{
											$margin_rates = '';
										}
										
										/* echo '<pre>';
										print_r($margin_rates);
										echo '</pre>'; */
										foreach($services as $key => $value)
                                        { 
									?>
											<div id="shipment_type_<?php echo $value['id'];?>_-1_0">
                                            
                                                <!-- Customer base rate -->
                                                <div class="form-group base-rate-row" data-baserate="228_0_0" data-weight="0.00">
                                                    <div class="base-rate">
                                                        <div class="well well-sm pull-left c33" style="width: 100%">
                                                          
                                                            <div class="pull-left c32" style="padding: 5px; width: 250px;">
                                                                
																<span class="br-display-name"><?php echo $value['service_name'];?>
																	<input type="hidden" name="service_name[]" value="<?php echo $value['service_name'];?>">
																	<input type="hidden" name="service_id[]" value="<?php echo $value['id'];?>">
																</span>
                                                                
                                                            </div>
                                                            <div class="pull-left c32">
                                                                
                                                                <input data-type="print-rate-sheet-checkbox" type="checkbox" class="country" data-customercode="10000018" data-shipmenttypeid="228" data-content="-1" data-bound="0" data-serviceid="72" style="margin-top: 6px;">
                                                                
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-remove" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-remove"><i onclick="removeWeightBreak($(this))" style="color: red; font-size: 18px; padding-top: 3px;" class="fa fa-times s10 b3"></i></span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="br-weight" style="display: none;">
                                                                <a class="b18"> <b><span data-group="br-weight">0.00+</span></b>
                                                                </a>
                                                            </div>
                                                            <div class="pull-left c32" data-group="sel-rate-type">
                                                                <select name="customer_service_type[<?php echo $key; ?>]" class="form-control" data-index="75">
																	<option value="0">Star Track</option>
																	<option value="1" selected="selected">% Margin</option>
																</select>
                                                            </div>
                                                            <div class="pull-left c32" data-group="base-rate">
                                                                
                                                                <input type="text" name="margin_rate[<?php echo $key; ?>]" maxlength="25" value="<?php if(!empty($margin_rates)){ echo $margin_rates[$key]->margin_rate;}else{ echo "00.00"; } ?>" class="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="75">
                                                                
                                                            </div>
                                                            <div class="pull-left c32a">%</div>
                                                            <div class="pull-left c32a">
																<?php  if($value['service_name'] == "Overnight" || $value['service_name'] == "Road Express") { ?>
																	<a href="#" class="road_exp" data-toggle="modal" data-target="#exampleModal" onclick="get_rates(<?php echo $value['id'];?>,'<?php echo $value['service_name'];?>')"> View</a>   

																<?php } else { ?>

																	<a href="#" class="road_exp" data-toggle="modal" data-target="#fixed3Modal" onclick="get_fix_rates(<?php echo $value['id'];?>,'<?php echo $value['service_name'];?>')">View</a>
																<?php } ?>
                                                            </div>
                                                            <div class="pull-left c32a">
                                                                
																<i id="show-zones" onclick="showZones($(this))" class="fa fa-plus-square s10 b3" data-show="close" style="font-size: 18px;"></i>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Customer base rate detail -->
                                                    <!--<div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
                                                        <ul class="c36" style="width: 14324px; overflow: hidden;">
                                                            <li class="pull-left c35" style="margin-left: 40px;">
                                                                <input type="checkbox" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].zoneCheck" value="true" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_75__zoneCheck" style="margin-top: 7px;" onclick="onCheckZoneCheck($(this),$(this).parents('ul'))" data-group="zone-check" data-index="75"><input type="hidden" id="__checkbox_saveManageCustomer_saveCustBaseRate_customerBaseRates_75__zoneCheck" name="__checkbox_saveManageCustomer.saveCustBaseRate.customerBaseRates[75].zoneCheck" value="true"></li>
                                                            <li class="pull-left c35" style="padding: 5px;">
                                                                By Zone:
                                                            </li>
                                                            <?php
                                                            $get_rates = get_ratess($value['id']);
                                                            foreach ($get_rates as $key => $value) 
                                                            {                                                              
                                                            ?>
                                                                <li>
                                                                    <div class="pull-left c34" data-group="zone">
                                                                        <input data-index="75" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].customerBaseRateDetails[0].zone" class="form-control alloptions text-center" maxlength="25" value="<?php echo $value['origin']?>" disabled="disabled" type="text" data-group="zone-name"> <input data-index="75" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].customerBaseRateDetails[0].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="<?php echo $value['minimum']?>" data-group="zone-rate">
                                                                    </div>
                                                                </l>
                                                            <?php                                                            
                                                            }                                                              
                                                            ?>
                                                        </ul>
                                                    </div>-->
                                                </div>
											</div>
                                        <?php } ?>
										<input type="submit" value="Update" class="btn s37">
											
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- Others -->
                        <div id="cust_base_rates_others_tab" class="tab-pane fade in">
                            <div class="row">
                                <div class="portlet-body b12 b11">
                                    <!-- Service Type List -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="add-weight-break-comp" style="display: none;"></div>
<div id="add-weight-dialog" title="Add Weight Break" style="display: none;"></div>
<div id="view_rate_sheet_dialog" title="View Rate Sheet" style="display: none;"></div>
<script type="text/javascript">
   var globalIndex = "85";
    function showZones($this) {
        if ($this.data("show") == "close") {
            $this.removeClass("fa-plus-square");
            $this.addClass("fa-minus-square");
            $this.parents("div.base-rate").next().show("slow");
            $this.data("show", "open");
        } else {
            $this.removeClass("fa-minus-square");
            $this.addClass("fa-plus-square");
            $this.parents("div.base-rate").next().hide("slow");
            $this.data("show", "close");
        }
    }
    function onCheckZoneCheck($this, $parent) {
        if ($this.is(":checked") == true) {
            $parent.find("[data-group='zone-name']").each(function (i) {
                $(this).attr("disabled", false);
                $(this).attr("readonly", true);
            });
            $parent.find("[data-group='zone-rate']").each(function (i) {
                $(this).attr("disabled", false);
            });
            $parent.parents("div.base-rate").prev().find("[data-group='br-rate']").attr("readonly", true);
        } else {
            $parent.find("[data-group='zone-name']").each(function (i) {
                $(this).attr("disabled", true);
                $(this).attr("readonly", false);
            });
            $parent.find("[data-group='zone-rate']").each(function (i) {
                $(this).attr("disabled", "disabled");
            });
            $parent.parents("div.base-rate").prev().find("[data-group='br-rate']").attr("readonly", false);
        }
    }
    function saveCustomerBaseRate() {
        var data = $("#frmSaveCustomerBaseRates").serialize();
        doPostDataByParameters("manage_cust_base_rate_save.ix?reqType=json", data, "Saved successful!", "", true, true);
    }
    function replaceAll(str, find, replace) {
        return str.replace(new RegExp(find, 'g'), replace);
    }
    function addWeightBreak($this) {
        loadingDialog.dialog("open");
        var $parent = $this.parents("div.base-rate-row");
        var baseRateData = $parent.data("baserate");
        var baseRateDataArr = baseRateData.split("_");
        var shipmentId = baseRateDataArr[0];
        var content = baseRateDataArr[1];
        var bound = baseRateDataArr[2];
        var currentWeight = $parent.data("weight");
        var nextWeight = $parent.next().data("weight");
        var index = $this.data("index");
        var displayName = $parent.find("span.br-display-name").html();
        var html = $parent.html();
        var data = {
            "weightBreakModel.htmlString": html,
            "weightBreakModel.globalIndex": globalIndex,
            "weightBreakModel.currentIndex": index,
            "weightBreakModel.displayName": displayName,
            "weightBreakModel.baseRateData": baseRateData,
            "weightBreakModel.currentWeight": currentWeight,
            "weightBreakModel.nextWeight": nextWeight
        };
        var buttons = {};
        buttons["Save"] = function () {
            loadingDialog.dialog("open");
            var dataForm = $('#form-add-weight-break').serialize();
            $.post("add_weight_break_do_add.ix?reqType=json", dataForm, function (res) {
                loadingDialog.dialog("close");
                if (res.errorCode == "SUCCESS") {
                    $parent.after(res.content);
                    $parent.parent("div").find("div[data-group='br-weight']").show();
                    $parent.parent("div").find("div[data-group='br-remove-break']").show();
                    dialog.dialog("close");
                    globalIndex++;
                } else if (res.errorCode == "FIELD_ERROR") {
                    dialog.html(res.content);
                } else if (res.errorCode == "ACTION_ERROR") {
                    alertDialog.html(res.errorMsg);
                    alertDialog.dialog("open");
                }
            }).fail(function () {
                loadingDialog.dialog("close");
                alertDialog.html('System internal error, please contact administrator.');
                alertDialog.dialog("open");
            });
        };
        buttons["Cancel"] = function () {
            $(this).dialog("close");
        }
        var height = $(window).height();
        var width = $(window).width();
        height = height * 0.70;
        width = width * 0.9;
        var dialog = $("#add-weight-dialog").dialog({
            modal: true,
            autoOpen: false,
            width: "auto",
            buttons: buttons,
            width: 'auto',
            height: 'auto',
            maxHeight: height,
            create: function (event, ui) {
                $(this).css("maxWidth", width);
            },
            show: {
                effect: "fade",
                duration: 300
            },
            close: function (e) {
                $("#add-weight-dialog").html("");
            }
        });
        $.post("add_weight_break.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                dialog.html(res.content);
                dialog.dialog("open");
            } else {
                alertDialog.html('Error: ' + res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }
    function removeWeightBreak($this) {
        $parent = $this.parents("div.base-rate-row");
        var count = $parent.parent("div").find("div.base-rate-row").length;
        count = count - 1;
        if (count == 1) {
            $parent.parent("div").find("div[data-group='br-weight']").hide();
        }
        $parent.remove();

    }
    function viewRateSheet(customerCode, shipmentTypeId, content, bound, serviceId) {
        loadingDialog.dialog("open");
        var request = getRateSheetRequest(customerCode, shipmentTypeId, content, bound, serviceId);
        $.post("view_rate_sheet.ix?reqType=json", "viewRequest=" + request, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                var dialog = $("#view_rate_sheet_dialog").dialog({
                    modal: true,
                    autoOpen: false,
                    width: "90%",
                    height: 'auto',
                    position: {my: "top", at: "top+50"},
                    show: {
                        effect: "fade",
                        duration: 300
                    }
                });
                dialog.html(res.content);
                dialog.dialog("open");
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function getRateSheetRequest(customerCode, shipmentTypeId, content, bound, serviceId) {
        var columnName = "";
        if (serviceId == 3) {
            columnName = $("#tntDomColumnName option:selected").val();
        } else if (serviceId == 72) {
            columnName = $("#starTrackColumnName option:selected").val();
        }
        var stId = "#shipment_type_" + shipmentTypeId + "_" + content + "_" + bound;
        var request = "{";
        // Type=0 for view customer base rate.
        request += "\"type\":0,";
        request += "\"customerCode\":\"" + customerCode + "\",";
        request += "\"shipmentTypeId\":" + shipmentTypeId + ",";
        request += "\"content\":" + content + ",";
        request += "\"bound\":" + bound + ",";
        request += "\"minimumBaseCharge\":" + $("#minimum_base_charge").val() + ",";
        if (columnName != "") {
            request += "\"columnName\":\"" + columnName + "\",";
        }
        request += "\"baseRates\":[";
        $(stId).find("div[data-baserate]").each(function () {
            request += "{";
            // Get weight.
            var weightText = $(this).find("span[data-group='br-weight']").html();
            var weight = 0;
            if (weightText == "") {
                weight = 0.0;
            } else {
                weight = parseFloat(weightText.substring(0, weightText.length - 1));
            }
            // Get rate type.
            var rateType = $(this).find("div[data-group='sel-rate-type']>select option:selected").val();
            // Get rate.
            var rate = $(this).find("div[data-group='base-rate']>input").val();
            request += "\"weight\":" + weight + ",";
            request += "\"rateType\":" + rateType + ",";
            request += "\"rate\":" + rate + ",";
            // Get zone check.
            var zoneCheck = $(this).find("input[data-group='zone-check']").is(":checked");
            if (zoneCheck) {
                var zones = "{";
                $(this).find("div[data-group='zone']").each(function () {
                    var zoneName = $(this).find("input[data-group='zone-name']").val();
                    var zoneRate = $(this).find("input[data-group='zone-rate']").val();
                    zones += "\"" + zoneName + "\":" + zoneRate + ",";
                });
                if (zones.charAt(zones.length - 1) == ',') {
                    zones = zones.substring(0, zones.length - 1);
                }
                zones += "}";
                request += "\"zoneRates\":" + zones;
            } else {
                request = request.substring(0, request.length - 1);
            }
            request += "},";
        });
        if (request.charAt(request.length - 1) == ',') {
            request = request.substring(0, request.length - 1);
        }
        request += "]}";
        return request;
    }



    function printRateSheet(obj) {
        var topDiv = $(obj).closest("div[data-type='print-rate-sheet']");
        var pdfCheck = $(topDiv).find("input[data-type='pdf-format']").is(":checked");
        var excelCheck = $(topDiv).find("input[data-type='excel-format']").is(":checked");
        var selected = false;
        $(topDiv).find("input[data-type='print-rate-sheet-checkbox']").each(function () {
            if ($(this).is(":checked")) {
                selected = true;
                return false;
            }
        });
        if (!selected) {
            alertDialog.html("Please select shipment type to print.");
            alertDialog.dialog("open");
        } else {
            // Prepare data for print rate sheet request.
            var index = 0;
            var result = "";
            $(topDiv).find("input[data-type='print-rate-sheet-checkbox']").each(function () {
                if ($(this).is(":checked")) {
                    var customerCode = $(this).attr("data-customercode");
                    var shipmentTypeId = $(this).attr("data-shipmenttypeid");
                    var content = $(this).attr("data-content");
                    var bound = $(this).attr("data-bound");
                    var serviceId = $(this).attr("data-serviceid");
                    var request = getRateSheetRequest(customerCode, shipmentTypeId, content, bound, serviceId);
                    result += "listViewRequest[" + index + "]=" + request + "&";
                    index++;
                }
            });
            result = result.substring(0, result.length - 1);
            // Get print option.
            var excelCheck = $(topDiv).find("input[data-type='excel-format']");
            var pdfCheck = $(topDiv).find("input[data-type='pdf-format']");
            var printType = 0;
            if (pdfCheck.is(":checked")) {
                printType = 1;
            }
            if (excelCheck.is(":checked")) {
                printType = 2;
            }
            switch (printType) {
                case 0:
                    exportRateSheet2Html(result);
                    break;
                case 1:
                    exportRateSheet2Pdf(result);
                    break;
                case 2:
                    exportRateSheet2Excel(result);
                    break;
            }
        }
    }

    function exportRateSheet2Pdf(listRequest) {
        loadingDialog.dialog("open");
        $.fileDownload("rate_sheet_export_to_pdf.ix", {
            failMessageHtml: "There was a problem generating your report, please try again.",
            httpMethod: "POST",
            data: listRequest,
            successCallback: function (url) {
                loadingDialog.dialog("close");
            },
            failCallback: function (url) {
                loadingDialog.dialog("close");
            }
        });
    }

    function exportRateSheet2Excel(listRequest) {
        loadingDialog.dialog("open");
        $.fileDownload("rate_sheet_export_to_excel.ix", {
            failMessageHtml: "There was a problem generating your report, please try again.",
            httpMethod: "POST",
            data: listRequest,
            successCallback: function (url) {
                loadingDialog.dialog("close");
            },
            failCallback: function (url) {
                loadingDialog.dialog("close");
            }
        });
    }

    function exportRateSheet2Html(listRequest) {
        loadingDialog.dialog("open");
        $.post("rate_sheet_export_to_html.ix?reqType=json", listRequest, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                loadingDialog.dialog("close");
                var win = window.open('', 'win2', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=1000,height=500');
                win.document.write(res.content);
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function rateSheetFormatChange(obj) {
        if ($(obj).is(":checked")) {
            var topDiv = $(obj).closest("div[data-type='print-rate-sheet']");
            if ($(obj).attr("data-type") == "pdf-format") {
                var excelCheck = $(topDiv).find("input[data-type='excel-format']");
                excelCheck.attr("checked", false);
            } else {
                var pdfCheck = $(topDiv).find("input[data-type='pdf-format']");
                pdfCheck.attr("checked", false);
            }
        }
    }
</script></div>
    <div id="invoice-options-tab" class="tab-pane fade"></div>
    <div id="markups-tab" class="tab-pane fade">



<div class="row">
    <div class="col-lg-12">
        <p>
            <b>Note :</b> <br>
            - Double-click a setting to modify its value.
          
        </p>
    </div>
    <div class="col-lg-12">
        
        <div id="markups-list-result">
            <table class="table table-bordered mg0" id="customer_markup_table">
                <thead>
                <tr>
                    <th>Description </th>
                    <th>Id </th>
                    <th>Markup Type </th>
                    <th>Amount </th>
                    <th>Carrier </th>
                    <th>Last Modified </th>
                </tr>
                </thead>
                <tbody>
            
                
                    
                        <tr style="cursor: pointer;" ondblclick="editMarkup($(this))" accessorial-id="597">
                            <td>111</td>
                            <td>Ad-hoc Discount by Sales</td>
                            <td>Fixed</td>
                            <td>0.0</td>
                            <td>Toll Ipec</td>
                            <td>14-11-2016</td>
                        </tr>
                    
                        <tr style="cursor: pointer;" ondblclick="editMarkup($(this))" accessorial-id="426">
                            <td>Account Opening Fee</td>
                            <td>Account Opening Fee DHL</td>
                            <td>Fixed</td>
                            <td>0.0</td>
                            <td>DHL</td>
                            <td>01-07-2014</td>
                        </tr>
                     </tbody>
            </table>
           
        </div>
    </div>
</div>

<!-- Edit Markup Dialog -->


<script type="text/javascript">
 $(document).on('click', '#customer_notes_list_table tbody tr', function(e) {
    $('#customer_notes_list_table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#editNote").prop('disabled', false);
});


    var editMarkupDialog = $("#edit-markup-dialog").dialog({
        autoOpen: false,
        width: 400,
        modal: true,
        buttons: [{
            text: "Change Markup",
            click: function () {
                var data = {
                    "markup.customerCode": $("#customerCode option:selected").val(),
                    "markup.accessorialid": $("#edit-markup-dialog #markup_accessorialId").val(),
                    "markup.amount": $("#markup_amount").val()
                };
                $.post("manage_customers_markups_edit.ix?reqType=json", data, function (res) {
                    if (res.errorCode == "SUCCESS") {
                        getMarkups(1);
                        editMarkupDialog.dialog("close");
                    } else {
                        alertDialog.html(res.errorMsg);
                        alertDialog.dialog("open");
                    }
                }).fail(function () {
                    loadingDialog.dialog("close");
                    alertDialog.html('System internal error, please contact administrator.');
                    alertDialog.dialog("open");
                });
            }
        }, {
            text: "Cancel",
            click: function () {
                $(this).dialog("close")
            }
        }]
    });

  

    function searchCustomerMarkup() {
        // Load Markups List
        var data = $("#customer_markup_form").serialize();
        data += "&" + $("#markup-filter input").serialize();
        data += "&customerCode=" + $("#customerCode option:selected").val();
        loadingDialog.dialog("open");
        $.post("manage_customers_markups_search.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                $("#markups-list-result").html(res.content);
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function getMarkups(page) {
        $("#customer_markup_page").val(page);
        searchCustomerMarkup();
    }

    function searchOnKeypress() {
        clearTimeout($.data(this, 'timer'));
        wait = setTimeout(function () {
            getMarkups(1);
        }, 500);
        $(this).data('timer', wait);
    }

    function editMarkup(obj) {
        var tdList = $(obj).find("td");
        var accessorialId = $(obj).attr("accessorial-id");
        var desc = tdList.eq(0).html();
        var code = tdList.eq(1).html();
        var type = tdList.eq(2).html();
        var amount = tdList.eq(3).html();
        $("#edit-markup-dialog #markup_accessorialId").val(accessorialId);
        $("#edit-markup-dialog #markup_code").val(code);
        $("#edit-markup-dialog #markup_desc").val(desc);
        $("#edit-markup-dialog #markup_type").val(type);
        $("#edit-markup-dialog #markup_amount").val(amount);
        editMarkupDialog.dialog("open");
    }


</script></div>
    <div id="payments-tab" class="tab-pane fade"></div>
    <div id="collections-tab" class="tab-pane fade"></div>
    <div id="webship-tab" class="tab-pane fade">




<div class="row">
    <div class="portlet-body b12 b11">
        <div class="portlet-body b22" style="padding: 0px;">
            <ul id="manage-customer-webship-tabs" class="nav nav-tabs responsive">
                <li style="margin-left: 10px;"><a href="#webship-users-tab" data-toggle="tab">Users</a>
                </li>
                <li><a href="#webship-carriers-tab" data-toggle="tab" class="tb3">Carriers</a></li>
                <li><a href="#webship-customer-profile-tab" data-toggle="tab" class="tb3">Customer Profile</a></li>        
            </ul>
            <div id="manage-customer-webship-tabs-content" class="tab-content responsive">
                <div id="webship-users-tab" class="tab-pane fade in tb2 active">
                    <div class="row">
                        <div class="portlet-body b12 b11">
                            <div class="row">
                             
                                <div class="col-lg-12">
                                    
                                    <div id="webship-list-result">
                                        <table class="table table-bordered table-hover mg0" id="webfreight_table">
                                            <thead>
                                            <tr>
                                               <th>CustomerID</th>
                                                <th>Alt User Name</th>
                                                <th>Password</th>
                                                <th>Created Date</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php for($i=0;$i<count($users);$i++)
                                            {
                                                $date = $users[$i]['created_date']; 
                                                $start= date('m-d-Y h:i:s', strtotime($date));

                                                if($users[$i]['customer_id'] == @$customer_data->customer_id){?>
                                              
                                              <tr class="on-click" data-accessorialid="<?php echo $users[$i]['id'];?>" id="<?php echo $users[$i]['id'];?>">
                                             <?php $userId = $users[$i]['id']; ?>
                                                        <td><?php echo @$customer_data->customer_id; ?></td>
                                                        <td><?php echo $users[$i]['user_name'];?></td>
                                                        <td><?php echo $users[$i]['plain_password'];?></td>
                                                        <td><?php echo $start; ?></td>
                                                     </tr>
                                                    <?php }
                                            }
                                                ?>
                                                
                                            
                                            
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                    <table style="margin-top:15px;">
                                        <tbody><tr>
                          <td> 
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add User</button>
                          </td>
                          <td><button type="button" class="btn" onclick="edituser()" id="edit" disabled>Edit User</button></td>  
                          <?php if(!empty($userId))  ?>
                          <td> <button type="button" class="btn remove" id="remove" disabled onclick="deleteUser()"> Delete</button> </td>
                          
                         </tr>
                                    </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="webship-carriers-tab" class="tab-pane fade in">
                    <div class="row">
                        <div class="portlet-body b12 b11">
                            <div class="form-group">
                                <form id="frmSaveWebshipSettings">
                                    
                                        
                                            
                                        
                                          
                                            <div id="sv-52" class="collapse">
                                                
                                                
                                            </div>
                                        
                                           
                                            <div id="sv-59" class="collapse">
                                                
                                                   
                                                
                                            </div>
                                        
                                            <table class="s36 b24">
                                                <tbody><tr>
                                                    <td>
                                                        <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv-72"></button>
                                                    </td>
                                                    <td><input type="checkbox" name="saveManageCustomer.webship.services[3].checked" value="true" checked="checked" id="sv-72-checkbox" onclick="onServiceCheck('#sv-72',this)"><input type="hidden" id="__checkbox_sv-72-checkbox" name="__checkbox_saveManageCustomer.webship.services[3].checked" value="true"></td>
                                                    <td>Startrack</td>
                                                </tr>
                                            </tbody></table>
                                            <div id="sv-72" class="collapse">
                                                
                                                    <table class="s36 b25">
                                                        
                                                            <tbody><tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[0].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_0__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_0__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[0].checked" value="true"></td>
                                                                <td>Road Express <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[0].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_0__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[0].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_0__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[0].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_0__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[0].shipmentTypeId" value="228" id="saveManageCustomer_webship_services_3__shipmentTypes_0__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[1].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_1__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_1__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[1].checked" value="true"></td>
                                                                <td>Premium Air Freight <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[1].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_1__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[1].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_1__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[1].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_1__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[1].shipmentTypeId" value="229" id="saveManageCustomer_webship_services_3__shipmentTypes_1__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[2].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_2__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_2__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[2].checked" value="true"></td>
                                                                <td>Fixed Price Premium 1kg <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[2].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_2__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[2].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_2__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[2].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_2__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[2].shipmentTypeId" value="230" id="saveManageCustomer_webship_services_3__shipmentTypes_2__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[3].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_3__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_3__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[3].checked" value="true"></td>
                                                                <td>Fixed Price Premium 3kg <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[3].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_3__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[3].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_3__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[3].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_3__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[3].shipmentTypeId" value="231" id="saveManageCustomer_webship_services_3__shipmentTypes_3__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[4].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_4__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_4__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[4].checked" value="true"></td>
                                                                <td>Fixed Price Premium 5kg <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[4].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_4__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[4].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_4__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[4].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_4__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[4].shipmentTypeId" value="232" id="saveManageCustomer_webship_services_3__shipmentTypes_4__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[5].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_5__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_5__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[5].checked" value="true"></td>
                                                                <td>Fixed Price Premium 10kg <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[5].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_5__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[5].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_5__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[5].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_5__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[5].shipmentTypeId" value="234" id="saveManageCustomer_webship_services_3__shipmentTypes_5__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td><input type="checkbox" name="saveManageCustomer.webship.services[3].shipmentTypes[6].checked" value="true" checked="checked" id="saveManageCustomer_webship_services_3__shipmentTypes_6__checked" onclick="onShipmentTypeCheck('#sv-72',this)"><input type="hidden" id="__checkbox_saveManageCustomer_webship_services_3__shipmentTypes_6__checked" name="__checkbox_saveManageCustomer.webship.services[3].shipmentTypes[6].checked" value="true"></td>
                                                                <td>Fixed Price Premium 20kg <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[6].customerCode" value="10000018" id="saveManageCustomer_webship_services_3__shipmentTypes_6__customerCode">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[6].userType" value="0" id="saveManageCustomer_webship_services_3__shipmentTypes_6__userType">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[6].serviceId" value="72" id="saveManageCustomer_webship_services_3__shipmentTypes_6__serviceId">
                                                                    <input type="hidden" name="saveManageCustomer.webship.services[3].shipmentTypes[6].shipmentTypeId" value="235" id="saveManageCustomer_webship_services_3__shipmentTypes_6__shipmentTypeId"></td>
                                                            </tr>
                                                        
                                                    </tbody></table>
                                                
                                            </div>
                                        
                                           
                                            <div id="sv-400" class="collapse">
                                                
                                                   
                                                
                                            </div>
                                        
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="webship-customer-profile-tab" class="tab-pane fade in">
                    <div class="row">
                        <div class="portlet-body b12 b11">
                            <div class="form-group">
								<input type="hidden" name="image_b64" value="" id="image_b64"> 
								<input type="file" name="userImage" value="" id="profile_image_update" class="w10">   
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

$(document).ready(function() {
      $('#webfreight_table').DataTable();
   });

  $(document).ready(function() {
      $('#customer_markup_table').DataTable();
   });

  $(document).ready(function() {
      $('#customer_notes_list_table').DataTable();
   });


   $(document).ready(function() 
   {
      $('#datatable1').DataTable();
   });

   $('#all').on('change', function (){
        $('.country').prop('checked', $(this).is(':checked'));
    });
  $('#none').on('change', function () {
  $('.country').prop('checked', !$(this).is(':checked'));
    });

    $(document).on('click', '#webfreight_table tbody tr', function(e) {
    $('#webfreight_table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#edit").prop('disabled', false);
    $("#remove").prop('disabled', false);
});


function deleteUser(){
		var id = $('tr.selected-row').attr('id');
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({

              //url: 'customers/delUser/'+id,
              url: 'delUser/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
                    window.location.reload();
                   
               }
            });
        }
    }


    $(".remove1").click(function(){
        var note_id = $(this).parents("tr").attr("data-accessorialid");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({

              url: 'delNote/'+note_id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+note_id).remove();
                    alert("Record removed successfully");  
                   window.location.reload();
               }
            });
        }
    });


    function edituser()
    {

		$('#editModal').modal('show');
		var user_id = $('.selected-row').attr('data-accessorialid');    
		$.ajax({
               url: "<?php echo base_url('admin/get_c_user_by_id')?>",
               type: 'POST',
               data:{user_id:user_id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(res) {
                console.log(res);          
                var data= JSON.parse(res);
                var username = data.user_name;
                var userid = data.id;
                var webshipId = data.webshipId;
                var userpassword = data.plain_password;
                var language = data.language;
                var allowExportAddressBook = data.allowExportAddressBook;
                var isRequireChangePassword = data.isRequireChangePassword;
                $('#editModal #language option').each(function()
                {
                    if($(this).html()==language)
                    {
                        $(this).prop('selected',true);
                    } 
                }); 
                
                 $('#editModal #username').val(username);
                 $('#editModal #webshipId').val(webshipId);
                 $('#editModal #userpassword').val(userpassword);
                 $('#editModal #allowExportAddressBook').val(allowExportAddressBook);
                 $('#editModal #isRequireChangePassword').val(isRequireChangePassword);
                 $('#editModal #user_id').val(userid);     
                 if(allowExportAddressBook==1)
                 {
                   $('#editModal #allowExportAddressBook').prop('checked',true);
                 }
                 else {
                    $('#editModal #allowExportAddressBook').prop('checked',false);
                 }
                 if(isRequireChangePassword==1)
                 {
                    $('#editModal #isRequireChangePassword').prop('checked',true);
                 }
                 else {$('#editModal #isRequireChangePassword').prop('checked',false);}
               }
            });
    
}




    var webshipId = "";

    $(document).ready(function () {
        $("#webship-list-result tr[webship-id]").click(function () {
            $(this).addClass('selected-row').siblings().removeClass('selected-row');
            webshipId = $(this).attr("webship-id");
        });
    });

    
    $(document).ready(function () {
    		
    	
        $('#profile_image_upload').fileupload({
        	   	        	
            url: "imageupload.ix?customerCode="+$("input[name='saveManageCustomer.webship.customer.customerCode']").val()+"&reqType=json",
            done: function (e, data) {
                $('.progress-bar').css('width', '0%');
                $('.progress').hide();
                var result = data.result;
                if (result.errorCode == "SUCCESS") {
                    $('#file_path').val(result.content);
                    messageDialog.html("Upload successfully.");
                    messageDialog.dialog("open");
                } else {
                    alertDialog.html(result.errorMsg);
                    alertDialog.dialog("open");
                }
            },
            submit: function (e, data) {
                $('.progress').show();
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('.progress-bar').css('width', progress + '%');
            }
        });
    });
    
    
    function getWebships(page) {
        // Load Webship List
        var pageSize = $("#webship_pageSize option:selected").val();
        console.log(pageSize);
        var customerCode = $("#customerCode option:selected").val();
        var data = {
            "page": page,
            "pageSize": pageSize,
            "customerCode": customerCode
        };
        loadingDialog.dialog("open");
        $.post("manage_customers_webship_search.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                $("#webship-list-result").html(res.content);
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function onServiceCheck(svId, obj) {
        if ($(obj).is(":checked")) {
            $(svId + " input[type='checkbox']").each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $(svId + " input[type='checkbox']").each(function () {
                $(this).prop("checked", false);
            });
        }
    }

    function onShipmentTypeCheck(svId, obj) {
        var checked = false;
        $(svId + " input[type='checkbox']").each(function () {
            if ($(this).is(":checked")) {
                checked = true;
                return false;
            }
        });
        $(svId + "-checkbox").prop("checked", checked);
    }

    function save() {
        var data = $("#frmSaveUserSetting").serialize();
        data = data + "&" + $("#frmSaveWebshipSettings").serialize();
        $.post("manage_customers_webship_save.ix?reqType=json", data, function (res) {
            if (res.errorCode == "SUCCESS") {
                messageDialog.html("Saved successfully");
                messageDialog.dialog("open");
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function loadWebshipDialog(webshipId) {
        var data = {
            "webshipId": webshipId,
            "customerCode": $("#customerCode option:selected").val()
        };
        loadingDialog.dialog("open");
        $.post("manage_customers_webship_load.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                // Define Save and Cancel buttons
                var buttons = {};
                buttons["Save"] = function () {
                    var formData = $("#webship-form").serialize();
                    loadingDialog.dialog("open");
                    $.post("manage_customers_webship_edit.ix?reqType=json", formData, function (res) {
                        loadingDialog.dialog("close");
                        if (res.errorCode == "SUCCESS") {
                            $("#webship-dialog").html("");
                            $("#webship-dialog").dialog("close");
                            getWebships(1);
                            messageDialog.html("Save successfully");
                            messageDialog.dialog("open");
                        } else if (res.errorCode == "FIELD_ERROR") {
                            $("#webship-dialog").html(res.content);
                        } else {
                            alertDialog.html(res.errorMsg);
                            alertDialog.dialog("open");
                        }
                    }).fail(function () {
                        loadingDialog.dialog("close");
                        alertDialog.html('System internal error, please contact administrator.');
                        alertDialog.dialog("open");
                    });
                };
                buttons["Cancel"] = function () {
                    $(this).dialog("close");
                }
                // Define dialog
                var dialog = $("#webship-dialog").dialog({
                    modal: true,
                    autoOpen: false,
                    width: "auto",
                    buttons: buttons,
                    show: {
                        effect: "fade",
                        duration: 300
                    }
                });
                // Dialog title
                if (webshipId == "") {
                    dialog.dialog("option", "title", "Add Web Freight User");
                } else {
                    dialog.dialog("option", "title", "Edit Web Freight User");
                }
                dialog.html(res.content);
                dialog.dialog("open");
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function onAddEditUser(isAdd) {
        if (!isAdd) {
            if (webshipId == "") {
                alertDialog.html("Please choose a Web Freight user for editing");
                alertDialog.dialog("open");
            } else {
                loadWebshipDialog(webshipId);
            }
        } else {
            loadWebshipDialog("");
        }
    }


</script></div>
<div id="notes-tab" class="tab-pane fade">
   
   <div class="portlet-body b12 b11">
       <div class="form-group flr ">
           <table class="s36 ">
               <tbody><tr>
                 
                   <td>
                   <button class="btn s37 edit" type="button" id="editNote" disabled  data-toggle="modal" data-target="#editNotesModal">Edit </button>
                   </td>
                 
                 <td>  <button type="button" class="btn s37 add" data-toggle="modal" data-target="#notesModal">
 Add
</button></td>
                
               </tr>
           </tbody></table>
       </div>
       <table class="" style="font-size: 11px;">
           <tbody>
           <tr>
               <td style="border-top: 0px !important" colspan="">
                   <div class="caption b17">
                       Notes
                   </div>
               </td>
           </tr>
           </tbody>
       </table>
      
       <div id="notes-list-result">
           <table class="table table-bordered mg0" id="customer_notes_list_table">
               <thead>
               <tr>
                   <th>Last Modified</th>
                   <th>User </th>
                   <th>Account</th>
                   <th>Note </th>
                   <th>Action </th>
               </tr>
               </thead>
               <tbody>
               
               
                   <tr>
                   <?php //for($i=0;$i<count($notes);$i++)
                                      //    {
                                              //  if($users[$i]['customer_id'] == @$customer_data->customer_id){?>
                                              
                                              <tr class="on-click" data-accessorialid="<?php echo $submit_id;?>">
                                                        <td><?php echo @$customer_data->created_date; ?></td>
                                                         <td><?php echo @$customer_data->customerName; ?></td>
                                                        <td><?php echo @$customer_data->customer_id;?></td>
                                                        <td><?php echo @$customer_data->notes; ?></td>
                                                     
                   <td><button type="button" class="btn remove1"> Delete</button> </td>
                 
                                                    </tr>
                                                 <?php //}
                                           //}
                                                ?>
                 
               
               </tbody>
           </table>
         
       </div>
   </div>
       </div>
    <div id="notes-tab" class="tab-pane fade"></div>
   
    <div id="webship-history-tab" class="tab-pane fade">
         <form>
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    History
                                </div>
                                <div class="tools">
                                    <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="col-lg-12 pd0">
                                                    <div class="form-group mgb">
                                                        <table class="s36 history_tabel">
                                                            <tbody><tr>
                                                                <td><select name="filterModel.totalDate" id="sel_total_date" class="form-control">
    <option value="1">Show Today Only</option>
    <option value="2" selected="selected">Show Last 30 Days</option>
    <option value="3">Show Last 60 Days</option>
    <option value="4">Show Last 90 Days</option>
    <option value="5">Show Range</option>
    <option value="6">Show All</option>


</select>

</td>
                                                                
                                                                <td>
                                                                   
                                                                    <button name="create_excel" id="create_excel" class="btn s33">  
                                                                        Export to Excel
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                   
                                                                    <input type="button" id="exportBtn" class="btn s33" value="Export to PDF" />
                                                                </td>

                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 pd0" style="margin-top: 5px; display: none;" id="div_range_date">
                                                    <div class="form-group mgb">
                                                        <table class="s36">
                                                            <tbody><tr>
                                                                <td><label> From :
                                                                </label></td>
                                                                <td>
                                                                    <div class="form-group input-group mg0">
																		<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
																		</span> <input class="form-control form_datetime" id="txtFromDate" type="text" name="filterModel.fromDate" data-date-format="dd MM yyyy">
                                                                    </div>
                                                                </td>
                                                                <td><label> To :
                                                                </label></td>
                                                                <td>
                                                                    <div class="form-group input-group mg0">
																		<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
																		</span> <input class="form-control form_datetime" id="txtToDate" name="filterModel.toDate" type="text" data-date-format="dd MM yyyy">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 pd0" style="margin-top: 5px;">
                                                    <div class="form-group mgb">
                                                        <table class="s36">
                                                            <tbody><tr>
                                                                <td><label> Search :
                                                                </label></td>
                                                                <td><select name="" id="sel_list_search">
    <option value="filterModel.connoteNumber">Connote Number</option>
    <option value="filterModel.reciverCity">Receiver City</option>
    <option value="filterModel.reciverName">Receiver Name</option>
    <option value="filterModel.senderName">Sender Name</option>
    <option value="filterModel.senderCity">Sender City</option>


</select>

</td>
                                                             
                                                               
                                                                 </tr>
                                                        </tbody></table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 " id="button_actions" style="margin-top: 10px">

                                                    <button class="btn s33 s44" type="button" onclick="javascript:reshipHistory();" disabled="disabled">
                                                        Re-Ship Same Package
                                                    </button>
                                                        
                                                    <button class="btn s33 s44" type="button" id="btnViewAirbill" onclick="javascript:viewAirbill();" disabled="disabled">
                                                        View Airbill
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnViewThermalLabel" onclick="javascript:viewThermalLabel()" disabled="disabled">
                                                        Thermal Label
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnviewmanifest" onclick="javascript:viewManifest()" disabled="disabled">
                                                        View Manifest
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btn_viewcommercial" onclick="javascript:viewCommercialInvoice()" disabled="disabled">
                                                        View Commercial Invoice
                                                    </button>
                                                    <button class="btn s33 s44" type="button" onclick="javascript:viewPackingList()" id="btn_packing_list" disabled="disabled">
                                                        View Packing List
                                                    </button>
                                                    <button class="btn s33 s44" type="button" onclick="viewTntConnote()" id="btn_tnt_connote" style="display: none" disabled="disabled">
                                                        Consignment Note
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnSendAirbill" onclick="javascript:sendAirbill();" disabled="disabled">
                                                        Send Airbill
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btn_schedule_collection" onclick="javascript:scheduleCollection();" disabled="disabled">
                                                        Schedule Collection
                                                    </button>
                                                    <button disabled="disabled" class="btn s33 s44" type="button" id="btn_mo_schedule_collection" onclick="javascript:moScheduleCollection();">
                                                        Modify Schedule Collection
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btn_ca_schedule_collection" onclick="javascript:caScheduleCollection();" disabled="disabled">
                                                        Cancel Collection
                                                    </button>

                                                        
                                                    <button class="btn s33 s44" type="button" onclick="javascript:trackAirbill();" disabled="disabled">
                                                        Track
                                                    </button>
                                                        
                                                    <button class="btn s33 s44" type="button" id="btn_void" onclick="javascript:voidAirbill();" disabled="disabled">
                                                        Void
                                                    </button>
                                                    <button class="btn s33 s44" type="button" onclick="javascript:showNote();" disabled="disabled">
                                                        View Note
                                                    </button>
                                                        

                                                    <!-- Note -->

                                                    <!-- End AddNote -->
                                                </div>
                                           
                                                <div id="div_history_data">
                                                    <input type="hidden" name="" value="" id="hid_shipment_id">
                                                    <input type="hidden" id="hid_history_records" value="25">

                                                    <div>
                                                        
                                                            <table class="table table-hover table-bordered mg0 datatable1" id="datatable1">
                                                                <thead>
                                                                <tr>
                                                                    
                                                                    <th>Carrier</th>
                                                                    <th>Voided</th>
                                                                    <th>Tracking#</th>
                                                                    <th>Date</th>
                                                                    <th>Time Stamp</th>
                                                                    <th>Ship Date</th>
                                                                    <th>Pieces</th>
                                                                    <th>Service</th>
                                                                    <th class="col_hidden th_package" style="display: none;">Package</th>
                                                                    <th>Weight</th>
                                                                    <th class="col_hidden th_dimensions" style="display: none;">
                                                                        Dimension</th>
                                                                    <th>Quoted</th>
                                                                    <th>Insured Amount</th>
                                                                    <th>Scheduled</th>
                                                                    <th>Scheduled collection timestamp</th>
                                                                    <th>Collection Information</th>
                                                                    <th class="col_hidden th_shipment_reference" style="display: none;">
                                                                        Reference</th>
                                                                    <th class="col_hidden th_billing_party" style="display: none;">
                                                                        Billing Party</th>
                                                                    <th class="col_hidden th_sender_company" style="display: none;">
                                                                        Sender Company</th>
                                                                    <th class="col_hidden th_sender_contact" style="display: none;">
                                                                        Sender Contact</th>
                                                                    <th class="col_hidden th_sender_location" style="display: none;">
                                                                        Sender Location</th>
                                                                    <th class="col_hidden th_receiver_company" style="display: none;">
                                                                        Receiver Company</th>
                                                                    <th class="col_hidden th_receiver_contact" style="display: none;">
                                                                        Receiver Contact</th>
                                                                    <th>Destination</th>
                                                                    <th>Dest. Country</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                    <tr class="tr_no_record">
                                                                        

                                                                        <td>Startrack <input type="hidden" name="" value="25722" id="shipmentId">
                                                                            <input type="hidden" name="" value="1" id="commercialInvoiceId">
                                                                            <input type="hidden" name="" value="13219" id="schedule_collection_id">
                                                                            <input type="hidden" name="" value="72" id="service_id"> <input type="hidden" name="" value="1" id="packingList"></td>
                                                                        <td class="td_void_status">NO</td>
                                                                        <td id="td_airbillNumber">95AZ00020470</td>
                                                                        <td>13-04-2021</td>
                                                                        <td>14:09:48</td>
                                                                        <td>13-04-2021</td>
                                                                        <td>1</td>
                                                                        <td>Premium Air Freight</td>
                                                                        <td class="col_hidden th_package" style="display: none;">Customer packaging</td>
                                                                        <td>6.00 kg(s)</td>
                                                                        <td class="col_hidden th_dimensions" style="display: none;">32 X 32 X 20 cm</td>
                                                                        <td>
                                                                            150.66
                                                                         </td>
                                                                        <td></td>
                                                                        <td class="td_schedule">YES</td>
                                                                        <td>13-04-2021 14:30:00</td>
                                                                        <td>9787511</td>
                                                                        <td class="col_hidden th_shipment_reference" style="display: none;">
                                                                            84005-MMN-044</td>
                                                                        <td class="col_hidden th_billing_party" style="display: none;">
                                                                            S</td>
                                                                        <td class="col_hidden th_sender_company" style="display: none;">
                                                                            CEVA LOGISTICS </td>
                                                                        <td class="col_hidden th_sender_contact" style="display: none;">
                                                                            DAVID ROBERTS</td>
                                                                        <td class="col_hidden th_sender_location" style="display: none;">
                                                                            HAZELMERE, 6055</td>
                                                                        <td class="col_hidden th_receiver_company" style="display: none;">
                                                                            BHP SOUTH FLANK PROJECT</td>
                                                                        <td class="col_hidden th_receiver_contact" style="display: none;">
                                                                            ZIGGY / MICHAEL</td>
                                                                        <td>NEWMAN, 6753</td>
                                                                        <td>Australia</td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <button class="btn s33 s44 multivoid" type="button" onclick="javascript:proceedToVoid();" style="display: none;">
                                                    Proceed to Void
                                                </button>
                                                <button class="btn s33 s44 multivoid" type="button" onclick="javascript:proceedToUpate();" style="display: none;">
                                                    Proceed to Update
                                                </button>
                                                <button class="btn s33 s44 multivoid" type="button" id="cancel_multivoid" style="display: none;">
                                                    Cancel
                                                </button>

                                                <div id="div_proceed_tovoid"></div>
                                                <div id="div_proceed_tovoid_result"></div>
                                                <div id="div_proceed_toupdate"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal pdt10">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group text-left s100">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label> <input type="checkbox" id="chk_show_option" onclick="javascript:showOption();"> &nbsp;
                                                                Show Report Options
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" id="div_list_chk_option" style="display: none;">
                                                <div class="form-group text-bottom s99 ">
                                                    <div class="form-group check_inline">
                                                    <input type="checkbox" class="cb1" id="chk_option_all" onclick="javascript:optionShowAll();">   
                                                    <label class="checkbox-inline"> All</label> 
                                                         
                                                    <input type="checkbox" name="th_package" class="cb1" onclick="javascript:optionShowCol();">      
                                                     <label class="checkbox-inline"> &nbsp; Package Type </label> 
                                                     
                                                    <input type="checkbox" name="th_dimensions" class="cb1" onclick="javascript:optionShowCol();"> 
                                                     <label class="checkbox-inline">  &nbsp; Dimensions </label> 

                                                  <input type="checkbox" name="th_shipment_reference" class="cb1" onclick="javascript:optionShowCol();">
                                                  <label class="checkbox-inline"> &nbsp; Shipment Reference</label>

                                                    <input type="checkbox" name="th_billing_party" class="cb1" onclick="javascript:optionShowCol();">
                                                    <label class="checkbox-inline">  &nbsp; Billing Party</label>

                                                   <input type="checkbox" name="th_sender_company" class="cb1" onclick="javascript:optionShowCol();">
                                                    <label class="checkbox-inline">    &nbsp; Sender Company</label>

                                                    <input type="checkbox" name="th_sender_contact" class="cb1" onclick="javascript:optionShowCol();">
                                                    <label class="checkbox-inline">  &nbsp; Sender Contact </label>

                                                    <input type="checkbox" name="th_sender_location" class="cb1" onclick="javascript:optionShowCol();">
                                                    <label class="checkbox-inline">  &nbsp; Sender Localtion </label> 

                                                    <input type="checkbox" name="th_receiver_company" class="cb1" onclick="javascript:optionShowCol();">        <label class="checkbox-inline"> &nbsp; Receiver Company </label>

                                                    <input type="checkbox" name="th_receiver_contact" class="cb1" onclick="javascript:optionShowCol();">  <label class="checkbox-inline"> 
                                                        &nbsp; Receiver Contact </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="pal form-actions">
    <table class="s36" align="right">
        <tbody>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
        <td>
            <button class="btn s37" type="reset">
                        Reset
                    </button>
            </td>
            <td>
              <?php if(isset($submit_id))
              {
                ?>
                <button class="btn s37" type="button" onclick="updateSaveCustomer('<?php echo $submit_id;?>')">
                    Update
                </button>
                <?php 
              } else {?>
                <button class="btn s37" type="button" onclick="doSaveCustomer()">
                    Save
                </button>
              <?php }?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="alert-dialog" title="Error"></div>
<div id="message-dialog" title="Message"></div>
<script type="text/javascript">
    // init common dialog
    var loadingDialog = $("#loading-dialog").dialog({
        modal: true,
        autoOpen: false,
        width: "500px",
        height: "auto",
        //dialogClass: "no-close",
        closeOnEscape: false,
        show: {
            effect: "fade",
            duration: 500
        }
    });
    var alertDialog = $("#alert-dialog").dialog({
        autoOpen: false,
        modal: true,
        close: function (e) {
            $("#message-dialog").html("");
        }
    });
    var messageDialog = $("#message-dialog").dialog({
        autoOpen: false,
        show: {
            effect: "fade",
            duration: 300
        },
        modal: true,
        close: function (e) {
            $("#message-dialog").html("");
        }
    });
</script>
<script type="text/javascript">
   function showOption() {
        if ($("#chk_show_option").is(":checked")) {
            $("#div_list_chk_option").slideDown();
        } else {
            $("#div_list_chk_option").slideUp();
        }
    }
	
	function readFile() {
        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function(e) {
                document.getElementById("image_b64").value = e.target.result;
            });
            FR.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("profile_image_update").addEventListener("change", readFile);

    function updateSaveCustomer()
    {
		var formdata = $("#update_customer_form").serialize();
		console.log(formdata);
		return false;
		var isfromsubmit = true;
		var isfromsubmitvalue = true;
		var html='';
		$('#update_customer_form input').each(function()
		{

		    if($(this).prop('required') && $(this).val()=='')
		    {
				alertDialog.dialog("open");  
				
				if(!$(this).parent().parent().find('.td1').attr('data-label'))
				{
					html +=$(this).parent().parent().find('.td1').html()+' cannot be empty <br/>';  
				}
				else {
				  html +=$(this).parent().parent().find('.td1').attr('data-label')+' cannot be empty <br/>';
				}
				isfromsubmit = false;
				alertDialog.html(html);               
		    }
		 
		});
		
		if(isfromsubmit==true)
		{
			alertDialog.dialog("close");  
			$.ajax({
				url: 'customers/add_customer',
				type: 'POST',
				data:formdata,
				error: function() {
					alert('Something is wrong');
				},
				success: function(res) {
					alert('Edit Successfully');  
					console.log(res);      
					window.location.reload();
				}
			});
		}
    }

    function optionShowAll() {
        if ($("#chk_option_all").is(":checked")) {
            $("#div_list_chk_option").find("input").attr('checked', true);
            $(".col_hidden").show("slow");
        } else {
            $("#div_list_chk_option").find("input").attr('checked', false);
            $(".col_hidden").hide("slow");
        }
        columnOption = '';
        $("#div_list_chk_option").find("input").each(function () {
            var nameColumn = $(this).attr("name");
            if (!$(this).is(":checked")) {
                columnOption += nameColumn+',';
            }
        });
    }

    function viewThermalLabel() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_thermal_label.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function updateCollectionNo() {
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');
    }

    function trackAirbill() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_tracking.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function optionShowCol() {
        columnOption = '';
        $("#div_list_chk_option").find("input").each(function () {
            var index = $("#div_list_chk_option").find("input").index(this) - 1;
            var nameColumn = $(this).attr("name");
            var colToHide = $(".datatable1").find("." + nameColumn);
            if ($(this).is(":checked")) {
                $(this).attr('checked', true);
                colToHide.show("slow");
            } else {
                $(this).attr('checked', false);
                colToHide.hide("slow");
                columnOption += nameColumn+',';
            }
        });
    }

    function proceedToVoid() {
        var a = document.getElementsByName('chk_multivoid[]');
        var len = a.length;
        var list_sm = "0";
        var totalSm = 0;
        for (i = 0; i < len; i++) {
            if (a[i].checked == true) {
                list_sm = list_sm + "|" + a[i].value;
                totalSm = totalSm + 1
            }
        }
        var data = {
            'listShipmentId': list_sm
        };
        if (totalSm > 0) {
            var messageVoid = "Are You Sure Want To Void Total " + totalSm;
            loadConfirmDialog("history_proceed_to_void.ix?reqType=json", data, messageVoid, "div_proceed_tovoid", updateCollectionNo(), "OK", "Cancel", "Proceed To Void");
        } else {
            alert("Please select shipment(s) to void.");
        }

    }


</script>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://rawgit.com/unconditional/jquery-table2excel/master/src/jquery.table2excel.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script>
  $("body").on("click", "#exportBtn", function () {
            html2canvas($('#datatable1')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("web_freight_history.pdf");
                }
            });
        });

        $(document).ready(function(){  
      $('#create_excel').click(function(){  
            //history_tabel
          $("#datatable1").table2excel({
              exclude: ".noExl",
              name: "Results"
        });
           // var excel_data = $('#datatable1').html();  
           // var page = "rates/import_rate?data=" + excel_data;  
           // window.location = page;  
      });  
 });  

	function get_rates(id,name)
    {
		$('#exampleModal .table tbody').html('');
		var zone =  $('#starTrackColumnName option:selected').val();
		$('#exampleModal .caption').html('Rate Sheet For: Star Track '+ name + '<br> From ' + zone + ' to All');
		var rows ='';
		var x=0;
		var result='';
		var customer_id = $('#customer_id').val();

		$.ajax({
			//url: 'customers/get_rates',
			url: 'get_rates',
			type: 'POST',
			data:{zone:zone,service_type:id,customer_id:customer_id},
			error: function() {
				alert('Something is wrong');
			},
			success: function(res) {
				console.log(res);
				var data = JSON.parse(res);              
				console.log(data.margin);    
				jQuery.each(data.data, function( i, val ) {
					result = val;
					var b_charges = parseFloat(val.basic_charge);
					var b_charge = b_charges + (val.basic_charge*data.margin)/100;
					rows +='<tr><td>'+val.destination+'</td><td>'+val.minimum+'</td><td>'+parseFloat(b_charge.toFixed(2))+'</td><td class="price">'+val.per_kg+'</td></tr>';                  
				});
				$('#exampleModal .table tbody').html(rows);
			}
		});
    }

	/*function get_fix_rates(id,name)
	{
		$('#fixed3Modal .table tbody').html('');
		var zone =  $('#starTrackColumnName option:selected').val();
		$('#fixed3Modal .caption').html('Rate Sheet For: Star Track '+ name + '<br> From ' + zone + ' to All');
		var rows = '';
		var x = 0;
		var result = '';
		var customer_id = $('#customer_id').val();
         
		$.ajax({
			url: 'get_fix_rates',
            //url: 'customers/get_fix_rates',
			type: 'POST',
			//data:{zone:zone,service_type:id,customer_id:customer_id},
            data:{service_type:id,customer_id:customer_id},
			error: function() {
				alert('Something is wrong');
			},
			success: function(res) {
				var data = JSON.parse(res);              
				console.log(data.margin);    
				jQuery.each(data.data, function( i, val ) {
					result = val;
                    var b_prices = parseFloat(val.price);
					var b_price = b_prices + (val.price*data.margin)/100;
					rows +='<tr><td>'+val.weight+'</td><td class="price">'+b_price+'</td></tr>';                  
				});
				$('#fixed3Modal .table tbody').html(rows);
			}

		});
    }*/

    function get_fix_rates(id,name)
      {
          $('#fixed3Modal .table tbody').html('');
          var zone =  $('#starTrackColumnName option:selected').val();
          $('#fixed3Modal .caption').html('Rate Sheet For: Star Track '+ name + '<br> From ' + zone + ' to All');
          var rows ='';
          var x=0;
          var result='';
         
           $.ajax({
              // url: 'customers/get_fix_rates',
               url: 'get_fix_rates',
               type: 'POST',
               data:{zone:zone,service_type:id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(res) {
                var data= JSON.parse(res);              
                console.log(data);    
                jQuery.each(data, function( i, val ) {
                  result = val;
                  rows +='<tr><td>'+val.weight+'</td><td class="price">'+val.price+'</td></tr>';                  
                });
                $('#fixed3Modal .table tbody').html(rows);
                
              }

            });
             //$('#fixed3Modal').modal('show');
      }

    function enableDisableBillingAddress() {
        if ($("#billing-same-with-customer-checkbox").is(':checked')) {
            $("input[data-group='billing-address'], select[data-group='billing-address']").each(function () {
                $(this).attr("readonly", true);
            });
        } else {
            $("input[data-group='billing-address'], select[data-group='billing-address']").each(function () {
                $(this).attr("readonly", false);
            });
        }
    }

    $(document).ready(function(){
		$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
			localStorage.setItem('activeTab', $(e.target).attr('href'));
		});
		var activeTab = localStorage.getItem('activeTab');
		if(activeTab){
			$('#manage_customer_tab_nav a[href="' + activeTab + '"]').tab('show');
		}
	});
</script>
<style>
.scroll_horizontal {
        overflow-x: auto;
        overflow-y: hidden;
        min-height: 55px;
        width: 100%;
    }

    .div_baseRate input {
        min-width: 50px;
    }
    </style>
</body>
</html>