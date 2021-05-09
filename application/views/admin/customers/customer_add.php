<div id="loading-dialog" title="Loading...">
    <div class="cs22">
        
        <div class="cssload-container">
            <div class="cssload-loading">
                <i></i><i></i><i></i><i></i>
            </div>
        </div>
        <span><strong>Please wait ...</strong></span>
       
    </div>
</div>
<div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption" id="manage-customer-title">Add New Customer</div>
                                  <!-- Button trigger modal -->
                        

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
        <table class="table table-bordered mg0 table-hover">
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


<!-- fixed price Modal -->
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
                            <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                               
                                              
                                            <td>    
                                            <select name="customerCode" id="customerCode" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                    <option value="-1">Select a Customer</option>
                                    <option value="http://localhost:8011/webfreight/admin/add">Add a Customer</option>
                                    <?php for($i=0;$i<count($customers);$i++)
                                    {
                                    echo  '<option value="customer_manage?id='.$customers[$i]['customer_id'].'">'.$customers[$i]['customer_id'].' '.$customers[$i]['customerName'].'</option>';  
                        
                                    //'<option value="customers/customer_manage?id='.$customers[$i]['customer_id'].' '.$customers[$i]['customerName'].'</option>';                                      
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
    <li class="active" style="margin-left: 10px;"><a href="#account-setup-tab" data-toggle="tab">Account Setup</a></li>
    <li class=""><a href="#address-tab" data-toggle="tab">Address</a></li>
    <li class=""><a href="#base-rates-tab" data-toggle="tab">Base Rates</a></li>
    <li class=""><a href="#customer-profile-tab" data-toggle="tab">Customer Profile</a></li>
    <li class=""><a href="#notes-tab" data-toggle="tab">Notes</a></li>
</ul>
  <?php //echo form_open(base_url('admin/add_customer'), 'class="add_customer_form" id="add_customer_form"'); ?>
  <form id="add_customer_form">
    <div id="manage_customer_tab_content" class="tab-content responsive">
        <!-- Account setup tab -->
        <div id="account-setup-tab" class="tab-pane fade active in">
            <div class="row">
                <div class="portlet-body b12 b11">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="hidden" name="franchiseCode" value="100" id="customer_franchiseCode">
                            <input type="hidden" name="srno" value="197" id="customer_srno">
                            <input type="hidden" name="dhlDomesticAccount" value="" id="customer_dhlDomesticAccount">
                            <input type="hidden" name="dhlInternationalAccount" value="" id="customer_dhlInternationalAccount">
                            <input type="hidden" name="dhlInboundAccount" value="" id="customer_dhlInboundAccount">
                            <input type="hidden" name="aaeAccount" value="" id="customer_aaeAccount">
                            <input type="hidden" name="fedexAccount" value="" id="customer_fedexAccount">
                            <input type="hidden" name="ukMailAccount" value="" id="customer_ukMailAccount">
                            <input type="hidden" name="upsAccount" value="" id="customer_upsAccount">
                            <input type="hidden" name="tollIpecAccount" value="" id="customer_tollIpecAccount">
                            <input type="hidden" name="profileId" value="1" id="profileId">
                            <table class="table" style="font-size: 11px;">
                                <tbody><tr>
                                    <td colspan="3">
                                        <div class="caption b17">
                                            Account Setup
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">Customer #:</td>
                                    <?php if(!isset($customer_id))
                                    {
                                        $cid= '10000001';
                                    }
                                    else {$cid = $customer_id;}?>
                                    <td class="td2" colspan="2"><input type="text" name="customerCode" value="<?php echo $cid;?>" readonly="readonly" id="customer_customerCode" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="td1">Inactive?:</td>
                                    <td class="td2" colspan="2"><input type="checkbox" name="inActive" value="true" id="customer_inActive"><input type="hidden" id="__checkbox_customer_inActive" name="__checkbox_inActive" value="true"></td>
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
                                    <td class="td2" colspan="2"><select name="previousCarrier" id="customer_previousCarrier" class="form-control">
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
                                    <td class="td2" colspan="2"><select name="groupId" id="customer_groupId" class="form-control">
    <option value="0" selected="selected"></option>
    <option value="2">Gold</option>
    <option value="4">Lead</option>
    <option value="1">Platinum</option>
    <option value="3">Silver</option>


</select>

</td>
                                </tr>
                                <tr>
                                    <td class="td1">Web Freight Group:</td>
                                    <td class="td2"><select name="webshipGroupId" id="customer_webshipGroupId" class="form-control">
    <option value="0" selected="selected"></option>
    <option value="0" selected="selected">Default</option>


</select>

</td>
                                </tr>
                                <tr>
                                    <td class="td1">Industry:</td>
                                    <td class="td2" colspan="2"><select name="industryId" id="customer_industryId" class="form-control">
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
                                    <td class="td2" colspan="2"><select name="areaId" id="customer_areaId" class="form-control">
    <option value="0" selected="selected"></option>
    <option value="2">Area 1</option>
    <option value="1">Default Area</option>


</select>

</td>
                                </tr>
                                <tr>
                                    <td class="td1">Sales Rep:</td>
                                    <td class="td2" colspan="2"><select name="salesRepId" id="customer_salesRepId" class="form-control">
    <option value="0" selected="selected"></option>
    <option value="1">AGL</option>
    <option value="388">AGL</option>
</select>

</td>
                                </tr>
                                <tr>
                                    <td class="td1">Collector:</td>
                                    <td class="td2" colspan="2"><select name="collectorId" id="customer_collectorId" class="form-control">
    <option value="0" selected="selected"></option>


</select>

</td>
                                </tr>
                                <tr>
                                    <td class="td1">Business Registration #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="registrationId" value="0" id="customer_registrationId" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="td1">GST #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="gstId" value="0" id="customer_gstId" class="form-control" onkeypress="return formartNumber(event,this,false);"></td>
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
                                    <td class="td2" colspan="2"><input type="text" name="dhlAccount" value="3p" id="customer_dhlAccount" class="form-control"></td>
                                </tr>
                               
                                <tr>
                                    <td class="td1">Toll Priority Account #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="tollPriorityAccount" value="3p" id="customer_tollPriorityAccount" class=" form-control"></td>
                                </tr>
                                <tr>
                                    <td class="td1">Startrack Account #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="startrackAccount" value="" id="customer_startrackAccount" class=" form-control"></td>
                                </tr>
                                <tr>
                                    <td class="td1">Startrack Dispatch ID #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="dispatchId" value="" id="customer_dispatchId" class=" form-control"></td>
                                </tr>
                               <tr>
                                    <td class="td1">Other Account #:</td>
                                    <td class="td2" colspan="2"><input type="text" name="otherAccount" value="" id="customer_otherAccount" class=" form-control"></td>
                                </tr>
                                <tr>
                                    <td class="td1">Booking Email Notification:</td>
                                    <td class="td2" colspan="2"><input type="checkbox" name="bookingEmailNotification" value="true" id="customer_bookingEmailNotification"><input type="hidden" id="__checkbox_customer_bookingEmailNotification" name="__checkbox_bookingEmailNotification" value="true"></td>
                                </tr>
                                <tr>
                                    <td class="td1">Rejection Notes:</td>
                                    <td class="td2" colspan="2"><textarea name="rejectionNote" cols="" rows="" id="customer_rejectionNote" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="td1">Enable AGL Warranty:</td>
                                    <td class="td2" colspan="2"><input type="checkbox" name="enableSi" value="true" id="customer_enableSi"><input type="hidden" id="__checkbox_customer_enableSi" name="__checkbox_enableSi" value="true"></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!---Customer profile tab--->
		<div id="customer-profile-tab" class="tab-pane fade">
			<div class="row">
				<div class="portlet-body b12 b11">
					<div class="form-group">

						<input type="hidden" name="image_b64" value="" id="image_b64"> 
						<input type="file" name="userImage" id="profile_image_upload" class="w10">     
					</div>
				</div>
			</div>
		</div>

        <!---Notes tab--->
        <div id="notes-tab" class="tab-pane fade">
           <p><b>Note:</b><br>
                Type text in the box below for the initial note on this account.
            </p>
            <textarea name="note" cols="100" rows="5" id="note"></textarea>
        </div>


        <!-- Address tab -->
        <div id="address-tab" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-4">
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
                            <td class="td2" colspan="2"><input type="text" name="customerName" required="required" value="" id="address_address_customerName" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Contact Name">Contact Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="contactName" required="required" value="" id="address_address_contactName" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Contact Title:</td>
                            <td class="td2" colspan="2"><input type="text" name="contactTitle" value="" id="address_address_contactTitle" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Address">Address:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="address1" required="required" value="" id="address_address_address1" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">&nbsp;</td>
                            <td class="td2" colspan="2"><input type="text" name="address2" value="" id="address_address_address2" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="City">City:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="city" value="" required="required" id="address_address_city" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Country">Country:<span class="s30">*</span></td>
                            <td class="td2" colspan="2">
                            <select name="country" id="address_address_country" required="required" class="form-control uppercase" data-group="address">
                            <option value="0">Select a Country</option>
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
                            <td class="td2" colspan="2"><input type="text" name="postalCode" value="" id="address_address_postalCode" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">State Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="stateCode" value="" id="address_address_stateCode" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Phone">Phone:<span class="s30">*</span></td>
                            <!--td class="td2" colspan="2"><input type="text" name="phone" value="" id="address_address_phone" class="form-control uppercase" data-group="address"></td-->
                         <td> <input type="tel" name="phone" value="" pattern="08\d{8}" id="address_address_phone" required="required" class="form-control uppercase" data-group="address" maxlength="12"> </td>
                    
                        
                        </tr>
                        <tr>
                            <td class="td1">Fax:</td>
                            <td class="td2" colspan="2"><input type="text" name="fax" value="" id="address_address_fax" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td2" colspan="2"><span> Eg: first@email.com; second@email.com
							</span></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Email">Email:</td>
                            <td class="td2" colspan="2"><input type="email" name="email" value="" id="address_address_email" class="form-control" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Mobile:</td>
                            <td class="td2" colspan="2"><input type="text" name="mobile" value="" id="address_address_mobile" class="form-control uppercase" data-group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Alt Contact Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="alternatePhone" value="" id="address_address_alternatePhone" class="form-control uppercase" data-group="address"></td>
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
                            <td class="td1 bill" data-label="Billing Customer Name">Customer Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="billingCustomerName" value="" required="required" id="address_billingAddress_billingCustomerName" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Contact Name">Contact Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingContactName" value="" id="address_billingAddress_billingContactName" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Contact Title:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingContactTitle" value="" id="address_billingAddress_billingContactTitle" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Address">Address:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingAddress1" value="" id="address_billingAddress_billingAddress1" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">&nbsp;</td>
                            <td class="td2" colspan="2"><input type="text" name="billingAddress2" value="" id="address_billingAddress_billingAddress2" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing City">City:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" required="required" name="billingCity" value="" id="address_billingAddress_billingCity" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Country">Country:<span class="s30">*</span></td>
                            <td class="td2" colspan="2">
                            <select name="billingCountry" required="required" id="address_billingAddress_billingCountry" class="form-control uppercase" data-group="billing-address" readonly="readonly">
                           <option value="0">Select a Country</option>
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
                            <td class="td2" colspan="2"><input type="text" name="billingPostalCode" value="" id="address_billingAddress_billingPostalCode" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">State Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingStateCode" value="" id="address_billingAddress_billingStateCode" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Phone">Phone:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="billingPhone" required="required" pattern="08\d{8}" value="" id="address_billingAddress_billingPhone" class="form-control uppercase" data-group="billing-address" readonly="readonly" maxlength="12"></td>
                        </tr>
                        <tr>
                            <td class="td1">Fax:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingFax" value="" id="address_billingAddress_billingFax" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td2" colspan="2"><span> Eg: first@email.com; second@email.com
							</span></td>
                        </tr>
                        <tr>
                            <td class="td1" data-label="Billing Email">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingEmail" value="" id="address_billingAddress_billingEmail" class="form-control" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Mobile:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingMobile" value="" id="address_billingAddress_billingMobile" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td class="td1">Alt Contact Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="billingAlternatePhone" value="" id="address_billingAddress_billingAlternatePhone" class="form-control uppercase" data-group="billing-address" readonly="readonly"></td>
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
                            <td class="td2" colspan="2"><input type="text" name="owner" value="" id="address_address_owner" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="ownerPhone" value="" id="address_address_ownerPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="ownerEmail" value="" id="address_address_ownerEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">AP Contact:</td>
                            <td class="td2" colspan="2"><input type="text" name="apContact" value="" id="address_address_apContact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="apPhone" value="" id="address_address_apPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="apEmail" value="" id="address_address_apEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other Contact:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherContact" value="" id="address_address_otherContact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherPhone" value="" id="address_address_otherPhone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="otherEmail" value="" id="address_address_otherEmail" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other 2 Contact :</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Contact" value="" id="address_address_other2Contact" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Other 2 Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Phone" value="" id="address_address_other2Phone" class="form-control uppercase"></td>
                        </tr>
                        <tr>
                            <td class="td1">Email:</td>
                            <td class="td2" colspan="2"><input type="text" name="other2Email" value="" id="address_address_other2Email" class="form-control"></td>
                        </tr>
                    </tbody></table>
                    

                </div>
            </div>
                                </form>
        </div>

        <!-- Base rates tab -->
        <div id="base-rates-tab" class="tab-pane fade">
            <div class="row">
                <div class="portlet-body b12 b11">
                    <div class="portlet-body b22" style="padding: 0px;">
                        <ul id="cust_base_rate_tabs_nav" class="nav nav-tabs responsive">
                            <li><a href="#cust_base_rates_star_track_tab" data-toggle="tab" class="tb3">Star Track</a></li>
                        </ul>
                        <div id="cust_base_rates_tab_content" class="tab-content responsive">
                            <div id="cust_base_rates_general_tab" class="tab-pane fade in tb2 active">
                                <div class="row">
                                    <div class="portlet-body b12 b11">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                                <td>* = May override other settings</td>
                                                <td class="caption b17" colspan="2">Base Rates</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" height="5"></td>
                                            </tr>
                                            <tr>
                                                <td>* Minimum Customer Base Charge Margin</td>
                                                <td width="60"><input type="text" name="minimunBaseCharge" value="0.00" id="minimum_base_charge" class="form-control"></td>
                                                <td>%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        
                            
                       

                            <!-- Star Track -->
                            <div id="cust_base_rates_star_track_tab" class="tab-pane fade in">
                                <div class="row">
                                    <div data-type="print-rate-sheet" class="portlet-body b12 b11">
                                        <!-- Orgin -->
                                        <?php echo form_open(base_url('admin/add_margin'), 'class="add_margin_form" id="add_margin_form"'); ?>
                                        <input type="hidden" name="customerCode" value="<?php echo $cid;?>">
                                        <div class="form-group">
                                            <table class="s36">
                                                <tbody><tr>
                                                    <td>Origin</td>
                                                    <td><select name="" id="starTrackColumnName" class="form-control">
                                                    <option value="0">Select an origin</option>
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
                                            <table class="s36">
                                                <tbody><tr>
                                                 
                                                    <td><input type="radio" class="TLO" name="radio1" id="all" />Check All</td>
                                                   <td> <input type="radio" class="TLO" name="radio1" id="none" />Uncheck All</td>
                                                  
                                                    <td><input type="checkbox" data-type="pdf-format" onchange="rateSheetFormatChange($(this))"></td>
                                                    <td>Pdf</td>
                                                    <td><input type="checkbox" data-type="excel-format" onchange="rateSheetFormatChange($(this))"></td>
                                                    <td>Excel</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                           <!-- Service Type List -->
                           <?php 

foreach($services as $key => $value)
                         {

                         

                           ?>

                           
                        
                    
   <div id="shipment_type_<?php echo $value['id'];?>_-1_0">
       
          
           <!-- Customer base rate -->
           <div class="form-group base-rate-row" data-baserate="228_0_0" data-weight="0.00">
               <div class="base-rate">
                   <div class="well well-sm pull-left c33" style="width: 100%">
                     
                      
                       <div class="pull-left c32" style="padding: 5px; width: 250px;">
                           
                               <span class="br-display-name"><?php echo $value['service_name'];?></span>
                               <input type="hidden" name="service_name" value="<?php echo $value['service_name'];?>">
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
                       <div class="pull-left c32">
                           <i onclick="addWeightBreak($(this))" id="dwed-link" class="fa fa-chevron-circle-right s10 b3" style="font-size: 18px; padding-top: 3px;" data-index="75"></i>
                       </div>
                       <div class="pull-left c32" data-group="sel-rate-type">
                           <select name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].rateType" id="saveManageCustomer_saveCustBaseRate_customerBaseRates_75__rateType" class="form-control" data-index="75">
<option value="0">Star Track</option>
<option value="1" selected="selected">% Margin</option>


</select>


                       </div>
                       <div class="pull-left c32" data-group="base-rate">
                           
                               <input type="text" name="rate_margin" value="00.00" lass="form-control alloptions" style="width: 50px;" data-group="br-rate" data-index="75">
                           
                           
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
               <div class="form-group pull-left base-rate" style="width: 100%; overflow: auto; display: none;">
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
                           <!--li>
                               <div class="pull-left c34" data-group="zone">
                                   <input data-index="75" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].customerBaseRateDetails[0].zone" class="form-control alloptions text-center" maxlength="25" value="<?php echo $value['origin']?>" disabled="disabled" type="text" data-group="zone-name"> <input data-index="75" name="saveManageCustomer.saveCustBaseRate.customerBaseRates[75].customerBaseRateDetails[0].rate" disabled="disabled" class="form-control alloptions text-center" type="text" maxlength="25" value="<?php echo $value['minimum']?>" data-group="zone-rate">
                               </div>
                           </li-->
                       <?php                                                            
                        }                                                              
                       ?>
                           
                       
                   </ul>
              
               </div>
            
           </div>
       
   </div>

  
   <?php
   }
 ?>
</div>
<!--button type="submit" class="btn btn-primary">Save</button-->
</div>
</div>
       
            </div>
          
        </div>
     </form>
     
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


    $('.uppercase').keyup(function() {
        this.value = this.value.toUpperCase();
    });


   $('#all').on('change', function (){
        $('.country').prop('checked', $(this).is(':checked'));
    });
   $('#none').on('change', function () {
   $('.country').prop('checked', !$(this).is(':checked'));
    });


    $(document).ready(function () {
        enableDisableBillingAddress();
        // Bind on keyup event handler to the inputs that it's group is address
        $("input[data-group='address']").keyup(function () {
            copyValue($(this));
        });
        $("select[data-group='address']").change(function () {
            copyValue($(this));
        });
    });


    function get_fix_rates(id,name)
      {
          $('#fixed3Modal .table tbody').html('');
          var zone =  $('#starTrackColumnName option:selected').val();
          $('#fixed3Modal .caption').html('Rate Sheet For: Star Track '+ name + '<br> From ' + zone + ' to All');
          var rows ='';
          var x=0;
          var result='';
         
           $.ajax({
               //url: 'customers/get_fix_rates',
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

    function sameWithCustomerCheckBoxChange() {
        enableDisableBillingAddress();
        $("input[data-group='address'], select[data-group='address']").each(function () {
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

    var globalIndex = "127";
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
                alertDialog.html("System internal error, please contact administrator.");
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
            alertDialog.html("System internal error, please contact administrator.");
            alertDialog.dialog("open");
        });
        console.log("saveManagesaveCustBaseRate.customerBaseRates[" + index + "]");
        console.log("saveManagesaveCustBaseRate.customerBaseRates[" + (index + 1) + "]");
        console.log("shipmentId: " + shipmentId + "| content: " + content + "| bound: " + bound + "| current weight: " + currentWeight + "| next weight: " + nextWeight);
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

	function readFile() {

        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function(e) {
                document.getElementById("image_b64").value = e.target.result;
            });
            FR.readAsDataURL(this.files[0]);
        }
    }
	
    document.getElementById("profile_image_upload").addEventListener("change", readFile);

    function saveNewCustomer() {
      
      //loadingDialog.dialog("open");

      var formdata = $("#add_customer_form").serialize();
      var isfromsubmit = true;
      var isfromsubmitvalue = true;
      var html='';
      $('#add_customer_form input').each(function()
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
				window.location.href = "customer_manage?id=" + $("input[name='customerCode']").val();
             }
          });
      }
    
  }


    function get_rates(id,name)
      {
          $('#exampleModal .table tbody').html('');
          var zone =  $('#starTrackColumnName option:selected').val();
          $('#exampleModal .caption').html('Rate Sheet For: Star Track '+ name + '<br> From ' + zone + ' to All');
          var rows ='';
          var x=0;
          var result='';
         
           $.ajax({
              // url: 'customers/get_rates',
               url: 'get_rates',
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
                  rows +='<tr><td>'+val.destination+'</td><td>'+val.minimum+'</td><td>'+val.basic_charge+'</td><td class="price">'+val.per_kg+'</td></tr>';                  
                });
                $('#exampleModal .table tbody').html(rows);
                
                
               }

            });
            
           //$('#exampleModal').modal('show');
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


    $(document).ready(function () {
            $("#add_customer_form").submit(function () {
                window.localStorage['rate_margin_val'] = $("input[name = 'rate_margin']").val();
            });
            $(window).load(function () {
                $("input[name = 'rate_margin']").val(window.localStorage['rate_margin_val']);
                window.localStorage['rate_margin_val'] = '';
            });
        });

   /* function validate()
{
  var text = document.getElementById("address_address_phone").value;
  var regx = /^08\d{8}$/ ;
  if(regx.test(text))
   // alert("valid");
   document.getElementById("pho").innerHTML = "Valid Phone number";
  else
    //alert("invalid");
     document.getElementById("pho").innerHTML = "Invalid phone number!";
}*/
</script>
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
                    <button class="btn s37" type="button" onclick="saveNewCustomer()">
                        Save
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>