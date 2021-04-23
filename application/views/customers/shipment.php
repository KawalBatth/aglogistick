<div class="bs-callout bs-callout-warning hidden">
  <p>This form seems to be invalid </p>
</div>

<div class="bs-callout bs-callout-info hidden">
  <p>Everything seems to be ok</p>
</div>
<div id="shipment-div">
    <div class="row mbl">
         <form id="shipment-info-form" name="shipment-info-form" data-parsley-validate="">
        <input type="hidden" name="customerCode" id="<?php echo $customers->customer_id;?>">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="radio-inline cl666"> <input id="chkReturnService" type="checkbox" onchange="onChangeServiceType(true)"> &nbsp;
                                Return Service
                            </label> <label class="radio-inline cl666"> <input id="chkThirdParty" type="checkbox" onchange="onChangeServiceType(false)">
                            &nbsp; Third Party
                        </label>
                        </div>
                    </div>
                    <div class="col-lg-6" id="return-service-box">
                        <div class="portlet box" id="sender-address-box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Sender Address
                                </div>
                                <div class="tools">
                                    <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                       
                                            <div class="col-md-6">
                                            <?php 
                                             // foreach($customer as $row){ 
                                            //echo form_open(base_url('customer/country_list'), 'class="get_shipment-form" '); ?>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company <span class="s30"> *</span>
                                                    </label>

                                                    <input type="text" name="companyName" data-parsley-type="alphanum" data-parsley-maxlength="10" value="<?php echo $customers->customerName;?>" id="shipment-info-form_shipmentPage_senderAddress_companyName" class="form-control alloptions" onkeyup="searchSenderAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" required="">
                                                    
                                                    <div id="sender-address-by-company-search-result"></div>
                                                </div>
                                              <?php  // }?>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="phone" data-parsley-max="10" data-parsley-type="number" pattern="08\d{8}" value="<?php echo $customers->phone;?>" id="shipment-info-form_shipmentPage_senderAddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="contactName" data-parsley-maxlength="35" data-parsley-type="alphanum" value="<?php echo $customers->contact_name;?>" id="shipment-info-form_shipmentPage_senderAddress_contactName" class="form-control alloptions" required onkeyup="searchSenderAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" required="">
                                                    <div id="sender-address-by-contact-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="email" name="email" data-parsley-trigger="change" value="<?php echo $customers->email;?>" id="shipment-info-form_shipmentPage_senderAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="country" id="shipmentPage_senderAddress_country" class="form-control" required="">
                                                          <option value="12" selected="selected">Select a country</option>
                                                          <option value="12" selected="selected">Australia</option>
                                                   </select>
                                           </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="address" data-parsley-maxlength="35" required value="<?php echo $customers->address;?>" id="shipment-info-form_shipmentPage_senderAddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="address2" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
                                                </div>
                                            </div>
												 <div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="address3" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3">
													</div>
												</div>
												
												<div class="col-md-6"></div>
												
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isSaveSenderAddressBook" value="0" tabindex="5" type="checkbox" onclick="checkSavaAddressBook('isSaveSenderAddressBook')">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="true" name="residentialPickup">
                                                        &nbsp; Residence
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="true" name="shipmentPage.residentialPickup">
                                                        &nbsp; Alternate User Name
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            	<input type="text" name="alternateUserName" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_alternateUserName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:ALTERNATE USERNAME">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> City <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="city" maxlength="35" value="<?php echo $customers->city;?>" id="senderAddress_city" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City" autocomplete="off">
                                                    <div id="suggesstion-box1" required=""></div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="postalCode" data-parsley-max="10" data-parsley-type="number" value="<?php echo $customers->postal_code;?>" id="shipment-info-form_shipmentPage_senderAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(true,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-sender-state">
<label class="control-label" for="inputName"> State/Province</label>

        <input type="text" name="state" value="<?php echo $customers->state_code;?>" id="shipmentPage_senderAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
    
                                       </div>
                                            </div>
                                            <div class="col-md-12" id="sender-city-search"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet box" id="receiver-address-box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Recipient Information
                                </div>
                                <div class="tools">
                                    <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="receivercompanyName" data-parsley-type="alphanum" data-parsley-maxlength="30" value="" id="shipment-info-form_shipmentPage_receiverAddress_companyName" class="form-control alloptions" ondblclick="searchReceiverAddress(true)" onkeyup="searchReceiverAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" required="">
                                                    <div id="receiver-address-by-company-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                         <input type="text" name="receiverphone" data-parsley-type="number" data-parsley-max="10" value="" pattern="08\d{8}" id="shipment-info-form_shipmentPage_receiverAddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="receivercontactName" data-parsley-type="alphanum" data-parsley-maxlength="30" value="" id="shipment-info-form_shipmentPage_receiverAddress_contactName" class="form-control alloptions" required ondblclick="searchReceiverAddress(false)" onkeyup="searchReceiverAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" required="">
                                                    <div id="receiver-address-by-contact-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="email" name="receiveremail" data-parsley-maxlength="30" value="" id="shipment-info-form_shipmentPage_receiverAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="receivercountry" data-parsley-type="alphanum" id="shipmentPage_receiverAddress_country" class="form-control" onchange="changeCountry('receiver')" required="">
    <option value="0">Please select a country.</option>
    <option value="12">Australia</option>
</select>
                                       </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="receiverAddress" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="receiverAddress2" data-parsley-maxlength="30" value="" id="shipment-info-form_shipmentPage_receiverAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
                                                </div>
                                            </div>
												 <div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="receiverAddress3" data-parsley-maxlength="30" value="" id="shipment-info-form_shipmentPage_receiverAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3">
													</div>
												</div>
												
												<div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isSaveRecipientAddressBook" value="0" tabindex="5" type="checkbox" onclick="checkSavaAddressBook('isSaveRecipientAddressBook')">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="true" name="residentialDelivery">
                                                        &nbsp; Residence
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> City <span class="s30"> *</span> </label>
                                                    <input type="text" name="receivercity" data-parsley-maxlength="30" data-parsley-type="alphanum" value="" id="receiverAddress_city" class="form-control alloptions" required  data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City"  autocomplete="off">
                                                        <div id="suggesstion-box" required=""></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code</label>
                                                      <input type="text" name="receiverpostalCode" data-parsley-max="12" value="" id="shipment-info-form_shipmentPage_receiverAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(false,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-receiver-state">
                                                   <label class="control-label" for="inputName"> State/Province</label>
                                                       <input type="text" name="receiverstate" value="" data-parsley-type="alphanum" id="shipmentPage_receiverAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
                                                   </div>
                                                </div>
                                            <div class="col-md-12" id="receiver-city-search"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Package and Shipment Details
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
                                                <div class="row">
                                                    <div class="form-group col-lg-6">
                                                        <label class="control-label" for="inputName"> Shipping Date </label>
                                                            <div class="form-group input-group">
															  <span class="input-group-addon s31"> <i class="fa fa-calendar"></i> </span>
                                                                 <input type='date' name="shipping_date" id='date' class="form-control date form_datetime" value='<?php echo date('Y-m-d');?>' readonly="readonly">
                                                             </div>
                                                          </div>
                                                      </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-6" id="change-country-div">
                                                        <label class="control-label" for="inputName"> Carrier <span class="s30"> *</span></label>
                                                           <select name="serviceId" id="shipmentPage_serviceId" class="form-control" required="">
                                                              <option value="11" selected="selected">Star Track</option>
                                                                  <?php /*for($c=0;$c<count($carriers);$c++) 
                                                                {                                                                
                                                                ?>  
                                                                <option value="<?php echo $carriers[$c]['id'];?>"><?php echo $carriers[$c]['carrier_name'];?></option>
                                                                 <?php
                                                                  }*/?>                                                            
                                                            </select>

                                                   </div>
                                                    <div class="form-group col-lg-6" id="change-service-div">
                                                        <label class="control-label" for="inputName"> Service Type <span class="s30"> *</span>
                                                        </label>
                                                        <select name="shipmentTypeId" id="shipmentPage_shipmentTypeId" class="form-control"  onchange="changeShipmentType($(this).val(), $('option:selected',this).text())" required="">
                                                            <?php for($c=0;$c<count($services);$c++) 
                                                            {                                                                
                                                                ?>  
                                                                <option value="<?php echo $services[$c]['id'];?>" ><?php echo $services[$c]['service_name'];?></option>
                                                            <?php
                                                            }?>  

                                                        </select>
                                                     </div>
                                                    <div class="form-group col-lg-12" id="change-shipmenttype-div">
                                                        <label class="control-label" for="inputName"> Package Type
                                                        </label>
                                                        <select name="packageId" id="shipmentPage_packageId" class="form-control" onchange="changePackage()">
                                                              <option value="3">Customer packaging</option>
                                                      </select>
                                                       <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row" id="change-package-div">
                                                    <div class="form-group col-lg-12 content_type">
                                                        <label class="control-label" for="inputName"> Contents <span class="s30"> *</span>
                                                        </label>
                                                         <br>
                                                            <label class="radio-inline document"> <input type="radio" value="DOX" name="contentType" disabled="disabled" onclick="resetAddPiece($(this).val())" required=""> &nbsp; Documents</label>
                                                            <label class="radio-inline parcel"> <input type="radio" value="WPX" name="contentType" checked="checked" onclick="resetAddPiece($(this).val())">&nbsp; Parcel </label>
                                                       </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Weight Unit
                                                            </label>
                                                            <select name="weightUnit" id="sel-weight-unit" class="form-control">
    <option value="KG">KG</option>

</select>
</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Dimension Unit
                                                            </label>
                                                            <select name="dimensionUnit" id="sel-dim-unit" class="form-control">
    <option value="CM">CM</option>


</select>
                                              </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Currency
                                                            </label>
                                                            <select name="currencyCode" id="shipment-info-form_shipmentPage_currencyCode" class="form-control">
   
    <option value="AUD" selected="selected">Australian Dollars</option>

</select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12" id="reset-add-piece-div">
                                                        <table class="s32 table table-striped table-bordered" border="" id="piece-table">
                                                            
                                                        <thead>
                                                            <tr>
                                                                <th>Row</th>
                                                                
                                                                    <th id="weight-unit">Weight(kgs)*</th>
                                                                 <th style="text-align: center">
                                                                    
                                                                   <div id="dimensions-unit">Dimensions(CM)</div>
                                                                             <div style="width: 100%;text-align: center;padding-left: 25px;padding-right: 25px">
                                                                            <span class="length">L*</span>
                                                                            <span class="width">W*</span>
                                                                            <span class="height">H*</span>
                                                                        </div>
                                                                </th>
                                                                    <th class="quantity">
                                                                        Quantity*
                                                                    </th>
                                                                
                                                                 <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr id="addr" class="calculation visible">
                                                            <td class="sno">1</td>
                                                                
                                                                <td width="10%"><input type="number" name="weight" maxlength="6" value="" id="shipment-info-form_shipmentPage_pieces_0__weight" class="form-control alloptions weight" onkeypress="return isNum(event)" oninput="maxLengthCheck(this)" min="1" required=""> 
                                                                <input type="hidden" name="total_weight" id="total_weight_input" value="">
                                                                <input type="hidden" name="service_kg" id="service_kg" value="">
                                                                </td>
                                                                <td width="40%">
                                                                    <div class="row mg0">
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="dimensionL1" value="" class="form-control alloptions dimL length" id="textInput" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''" required="">
                                                                           
                                                                 </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="dimensionW1" value="" id="textInput1" class="form-control alloptions dimW width" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''" required="">
                                                                        </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="dimensionH1" value="" id="textInput2" class="form-control alloptions dimH height" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''" required="">
                                                                            <input type="hidden" name="get_volume" id="get_volume_input" value="">    
	
                                                                        </div>
                                                                    </div>
                                                                  
	                                                              </td>

                                                                </td>
                                                               <td><input type="text" name="quantity1" value="1" id="shipment-info-form_shipmentPage_pieces_0__quantity" class="form-control quantity" required onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="10" min="1" onfocus="this.value=''" required="">
                                                               <input type="hidden" name="final_total" id="final_total_input" value=""></td>
                                                                 
                                                           <td><input type="button" value="&times;" class="del" /></td>
                                                                
                                                                <td width="3%" style="padding-top: 9px"><i id="remove" class="fa fa-times-circle-o s10" style="font-size: 18px; display: none;" onclick="removePiece($(this))"></i>
                                                                </td>
                                                            </tr>
                                                                   </tbody>
                                                                                
                                                        </table>
                                                          <button class="btn s33 add" type="button" onclick="addRow()">+ </button>
                                                     </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-12" id="additional-config-div">



<div class="form-group">
    
        <label class="fw0">
            <input data-group="dangerousgoods" tabindex="5" id="service_cons_0" type="checkbox" name="isdangerous" value="1" onclick="showServiceAddConDetails(0)"> &nbsp;
            Dangerous Goods
        </label>
    
    
    <input type="hidden" name="dangerName" value="Dangerous Goods">
    <input type="hidden" name="dangerCode" value="dangerousgoods">
    
        <div class="row" id="service_cons_0_add" style="display: none;">
            
                <div class="col-xs-6">
                    <div class="form-group">
                        
                        <input type="hidden" value="UN Number (4Digits)" name="dangerDetailName">
                        <input type="hidden" value="unnumber" name="dangerDetailCode">
                        
                        
                        
                            <label class="control-label">
                                UN Number (4Digits)
                            </label>
                            <input type="text" class="form-control" name="dangerNumber">
                        
                    </div>
                </div>
            
                <div class="col-xs-6">
                    <div class="form-group">
                        
                        <input type="hidden" value="Packing Group" name="packDetailName">
                        <input type="hidden" value="packinggroup" name="packDetailCode">
                        
                            <label class="control-label">
                                Packing Group
                            </label>
                            <select class="form-control" name="packValue">
                                
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                    </div>
                </div>
            
                <div class="col-xs-6">
                    <div class="form-group">
                        
                        <input type="hidden" value="I have a MSDS(Material Safety Data Sheet). Dangerous Goods attracts an additional surcharge." name="packName">
                        <input type="hidden" value="msda" name="packCode">
                        
                        
                            <label class="fw0">
                                <input type="checkbox" tabindex="5" name="packMsg">
                                &nbsp;
                                I have a MSDS(Material Safety Data Sheet). Dangerous Goods attracts an additional surcharge.
                            </label>
                        
                        
                    </div>
                </div>
            
        </div>
    
</div>


<div class="form-group">
    
        <label class="fw0">
            <input data-group="atl" tabindex="5" id="service_cons_1" type="checkbox" name="authorityValue" value="1" onclick="showServiceAddConDetails(1)"> &nbsp;
            Authorized to Leave (ATL)
        </label>
    
    
    <input type="hidden" name="authorityName" value="Authorized to Leave (ATL)">
    <input type="hidden" name="authorityCode" value="atl">
    
        <div class="row" id="service_cons_1_add" style="display: none;">
            
                <div class="col-xs-6">
                    <div class="form-group">
                        
                        <input type="hidden" value="Where to leave" name="authorityQuestion">
                        <input type="hidden" value="atltoleave" name="authorityCode">
                        
                        
                        
                            <label class="control-label">
                                Where to leave
                            </label>
                            <input type="text" class="form-control" name="authorityAnswer">
                        
                    </div>
                </div>
            
        </div>
</div>

<script type="text/javascript">

function showServiceAddConDetails(id) {
    
    
    var isChecked = $("#service_cons_" + id).is(':checked');
    if (isChecked) {
    var extraTask =	$("input[name='shipmentPage.addCons["+id+"].addConName']").val();
   // alert(""+extraTask);
        if( extraTask == 'Dangerous Goods'){
            var conformation = confirm(" Please call AGL customer service on 08 94793399 to check if this DG can be sent using this service. ");
            if(conformation == true){
                $("#service_cons_" + id + "_add").show();
           }else{
               $("#service_cons_" + id + "").attr('checked', false);
            $("#service_cons_" + id + "_add").hide();
           }
        }
        else if(extraTask == 'Time Critical Service Request'){
            var conformation = confirm(" Should your consignment be time critical please call our AGL customer service team on 08 94793399 so that we can assist you with this. ");
            if(conformation == true){
                $("#service_cons_" + id + "_add").show();
           }else{
               $("#service_cons_" + id + "").attr('checked', false);
            $("#service_cons_" + id + "_add").hide();
           }
        }else
        {
            $("#service_cons_" + id + "").attr('checked', true);
            $("#service_cons_" + id + "_add").show();
        }
    } else {
        $("#service_cons_" + id + "_add").hide();
    }
}

  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]/;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }

      
  function isNum (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script></div>
                                                    <div class="col-lg-12">
                                                        <div class="text-left pal pdt10" style="margin-bottom: 50px; margin-top: 102px; text-align: right;">
                                                            
                                                           <a href="<?= base_url('customer/shipment'); ?>" class="btn s33 s44"> New Shipment</a>
                                                             
                                                                <button class="btn s33" type="button" onclick="openForm()">
                                                                <!--button class="btn s33" type="button" onclick="save_ship()"-->
                                                                    Quote
                                                                </button>
                                                                <button class="btn s33 calculation" type="button">
                                                                    Calculate
                                                                </button>
                                                                  <button class="btn s33" type="button" onclick="continuewbooking()">
                                                                     Continue Booking
                                                                </button>
                                                                    <button class="btn s33" type="button" onclick="continuewbookingnew()">
                                                                     Continue Booking
                                                            </button>
                                                                 
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
        </form>
    </div>
</div>
<input type="hidden" name="defaultAddressJson" value="{&quot;companyName&quot;:&quot;<?php echo $customers->customerName;?>&quot;,&quot;phone&quot;:&quot;<?php echo $customers->phone;?>&quot;,&quot;contactName&quot;:&quot;<?php echo $customers->contact_name;?>&quot;,&quot;email&quot;:&quot;<?php echo $customers->email;?>&quot;,&quot;country&quot;:&quot;<?php echo $customers->country;?>&quot;,&quot;address&quot;:&quot;<?php echo $customers->address;?>&quot;,&quot;address2&quot;:&quot;&quot;,&quot;city&quot;:&quot;<?php echo $customers->city;?>&quot;,&quot;postalCode&quot;:&quot;<?php echo $customers->postal_code;?>&quot;,&quot;state&quot;:&quot;<?php echo $customers->state_code;?>&quot;,&quot;residential&quot;:&quot;0&quot;}" id="defaultAddressJson"/>
<div id="continue-booking-div"></div>
<div id="get-quote-dialog" title="Quote"></div>
<div id="session_time_out_dialog" title="Message"></div>
<script src="https://webfreight.agllogistics.com:443/crm-webship/script/webship/customer/pages/webship.js"></script>
<script src="https://webfreight.agllogistics.com:443/crm-webship/script/common/common.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.3.4/parsley.min.js"></script>
<script>

function save_ship() {
      
      //loadingDialog.dialog("open");

      var formdata = $("#shipment-info-form").serialize();
        $.ajax({
             url: 'customers/add_shipment',
             type: 'POST',
             data:formdata,
             error: function() {
                alert('Something is wrong');
             },
             success: function(res) {
                location.reload();
             }
          });
      }



function onChangeServiceType(isReturn) {
        var defaultAddressJs = JSON.parse($("#defaultAddressJson").val());
        if (isReturn) {
            $("#chkThirdParty").prop("checked", false);
            if ($("#chkReturnService").prop("checked")) {
                $("input[name='companyName']").val("");
                $("input[name='contactName']").val("");
                $("input[name='phone']").val("");
                $("input[name='email']").val("");
                $("select[name='country']").val("");
                $("input[name='address']").val("");
                $("input[name='address2']").val("");
                $("input[name='address3']").val("");
                $("input[name='city']").val("");
                $("input[name='postalCode']").val("");
                $("input[name='state']").val("");

                $("input[name='receiverCompanyName']").val(defaultAddressJs["companyName"]);
                $("input[name='receivercontactName']").val(defaultAddressJs["contactName"]);
                $("input[name='receiverphone']").val(defaultAddressJs["phone"]);
                $("input[name='receiveremail']").val(defaultAddressJs["email"]);
                $("select[name='receivercountry']").val(defaultAddressJs["country"]);
                $("input[name='receiverAddress']").val(defaultAddressJs["address"]);
                $("input[name='receiverAddress2']").val(defaultAddressJs["address2"]);
                $("input[name='receiverAddress3']").val(defaultAddressJs["address3"]);
                $("input[name='receivercity']").val(defaultAddressJs["city"]);
                $("input[name='receiverpostalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='receiverstate']").val(defaultAddressJs["state"]);
            } else {
                $("input[name='receiverCompanyName']").val("");
                $("input[name='receivercontactName']").val("");
                $("input[name='receiverphone']").val("");
                $("input[name='receiveremail']").val("");
                $("select[name='receivercountry']").val("");
                $("input[name='receiverAddress']").val("");
                $("input[name='receiverAddress2']").val("");
                $("input[name='receiverAddress3']").val("");
                $("input[name='receivercity']").val("");
                $("input[name='receiverpostalCode']").val("");
                $("input[name='receiverstate']").val("");

                $("input[name='companyName']").val(defaultAddressJs["companyName"]);
                $("input[name='contactName']").val(defaultAddressJs["contactName"]);
                $("input[name='phone']").val(defaultAddressJs["phone"]);
                $("input[name='email']").val(defaultAddressJs["email"]);
                $("select[name='country']").val(defaultAddressJs["country"]);
                $("input[name='address']").val(defaultAddressJs["address"]);
                $("input[name='address2']").val(defaultAddressJs["address2"]);
                $("input[name='address3']").val(defaultAddressJs["address3"]);
                $("input[name='city']").val(defaultAddressJs["city"]);
                $("input[name='postalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='state']").val(defaultAddressJs["state"]);
            }
        } else {
            if ($("#chkThirdParty").prop("checked")) {
                $("#chkReturnService").prop("checked", false);
                $("input[name='companyName']").val("");
                $("input[name='contactName']").val("");
                $("input[name='phone']").val("");
                $("input[name='email']").val("");
                $("select[name='country']").val("");
                $("input[name='address']").val("");
                $("input[name='address2']").val("");
                $("input[name='address3']").val("");
                $("input[name='city']").val("");
                $("input[name='postalCode']").val("");
                $("input[name='state']").val("");

                $("input[name='receiverCompanyName']").val("");
                $("input[name='receivercontactName']").val("");
                $("input[name='receiverphone']").val("");
                $("input[name='receiveremail']").val("");
                $("select[name='receivercountry']").val("");
                $("input[name='receiverAddress']").val("");
                $("input[name='receiverAddress2']").val("");
                $("input[name='receiverAddress3']").val("");
                $("input[name='receivercity']").val("");
                $("input[name='receiverpostalCode']").val("");
                $("input[name='receiverstate']").val("");
            } else {
                $("input[name='receiverCompanyName']").val("");
                $("input[name='receivercontactName']").val("");
                $("input[name='receiverphone']").val("");
                $("input[name='receiveremail']").val("");
                $("select[name='receivercountry']").val("");
                $("input[name='receiverAddress']").val("");
                $("input[name='receiverAddress2']").val("");
                $("input[name='receiverAddress3']").val("");
                $("input[name='receivercity']").val("");
                $("input[name='receiverpostalCode']").val("");
                $("input[name='receiverstate']").val("");

                $("input[name='companyName']").val(defaultAddressJs["companyName"]);
                $("input[name='contactName']").val(defaultAddressJs["contactName"]);
                $("input[name='phone']").val(defaultAddressJs["phone"]);
                $("input[name='email']").val(defaultAddressJs["email"]);
                $("select[name='country']").val(defaultAddressJs["country"]);
                $("input[name='address']").val(defaultAddressJs["address"]);
                $("input[name='address2']").val(defaultAddressJs["address2"]);
                $("input[name='address3']").val(defaultAddressJs["address3"]);
                $("input[name='city']").val(defaultAddressJs["city"]);
                $("input[name='postalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='state']").val(defaultAddressJs["state"]);
            }
        }
    }

    function setdefaulttime() {
        var nowdate = new Date();
        var nh = nowdate.getHours();
        var nm = nowdate.getMinutes();
        $('#sel-pickup-nolater').val("17:30:00");
        if (nh < 6) {
            $('#sel-pickup-time').val("09:00:00");
        } else if (nh < 18) {
            var nhstr = nh;
            if (nh < 10)
                nhstr = "0" + nh;
            if (nm == 0) {
                $('#sel-pickup-time').val(nhstr + ":00:00");
            } else if (nm <= 30) {
                $('#sel-pickup-time').val(nhstr + ":30:00");
            } else {
                nh = nh + 1;
                nhstr = nh;
                if (nh < 10)
                    nhstr = "0" + nh;
                if (nh == 18)
                    $('#sel-pickup-time').val("17:30:00");
                else
                    $('#sel-pickup-time').val(nhstr + ":00:00");
            }
        } else {
            $('#sel-pickup-time').val("17:30:00");
        }
    }
    function setRequireLabel(labelId, isRequired) {
        if (isRequired) {
            $("#" + labelId + " span.s30").remove();
            $("#" + labelId).append("<span class=\"s30\"> *</span>");
        } else {
            $("#" + labelId + " span.s30").remove();
        }

    }
    function checkSavaAddressBook(nameCheck) {
        if ($('input[name="' + nameCheck + '"]').is(":checked")) {
            $('input[name="' + nameCheck + '"]').val(1);
        } else {
            $('input[name="' + nameCheck + '"]').val(0);
        }
    }

    $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


$(document).ready(function(){
    var list ='<ul id="country-list">';

    $("#receiverAddress_city").keyup(function(){
        
        $("#suggesstion-box").html('');
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/get_postcode');?>",
        data:'keyword='+$(this).val(),
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#suggesstion-box").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 suburb" data-cityname="'+v.suburb+'">'+v.suburb+'</div>';
                list +='<div class="col-xs-3 postcode" data-postalcode="'+v.postcode+'">'+v.postcode+'</div>';
                list +='<div class="col-xs-3 state" data-statecode="'+v.state+'">'+v.state+'</div>';
                list +='</div></li>';
        });
            list +='<ul id="country-list" style="width:100%;">';
            
            
        }
        });
        $("#suggesstion-box").html(list);
        list='<ul id="country-list">';
        }
        else {
            $("#suggesstion-box").hide();
            list ='';
        }
    });
});


function onListClick(obj, isSender) {
    $("#suggesstion-box").hide();
    var cityName = $(obj).find("div[data-cityName]").html();
    cityName = cityName.trim();
    var postalCode = $(obj).find("div[data-postalCode]").html();
    postalCode = postalCode.trim();
    var stateCode = $(obj).find("div[data-stateCode]").html();
    stateCode = stateCode.trim();
    if (isSender) {
        $("input[name='city']").val(cityName1);
        $("input[name='postalCode']").val(postalCode1);
        $("input[name='state']").val(stateCode1);
    } else {
        $("input[name='receivercity']").val(cityName);
        $("input[name='receiverpostalCode']").val(postalCode);
        $("input[name='receiverstate']").val(stateCode);
    }
}

function onListClick1(obj, isReceiver) {
    $("#suggesstion-box1").hide();
    var cityName1 = $(obj).find("div[data-cityName1]").html();
    cityName1 = cityName1.trim();
    var postalCode1 = $(obj).find("div[data-postalCode1]").html();
    postalCode1 = postalCode1.trim();
    var stateCode1 = $(obj).find("div[data-stateCode1]").html();
    stateCode1 = stateCode1.trim();
    if (isReceiver) {
        $("input[name='receivercity']").val(cityName);
        $("input[name='receiverpostalCode']").val(postalCode);
        $("input[name='receiverstate']").val(stateCode);
      
    } else {
        $("input[name='city']").val(cityName1);
        $("input[name='postalCode']").val(postalCode1);
        $("input[name='state']").val(stateCode1);

    }
}
function continuewbooking()
{

    var formdata = $('#shipment-info-form').serialize();
    console.log(formdata);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/continue_booking');?>",
        data:{ "data"  : formdata},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
        }
    });

}
function continuewbookingnew()
{
     var formdata = $('#shipment-info-form').serialize();
    console.log(formdata);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/continue_bookingnew');?>",
        data:{ "data"  : formdata},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
        }
    });
}
 $("input[name='isdangerous']").change(function() {
        if(this.checked) {
        $("input[name='isdangerous']").val(1);        
        }
        else {
           $("input[name='isdangerous']").val(0);        
        }
    });
 function saveqoute()
{
    var quote_date =  new Date();
    var customer = '<?php echo $customers->customer_id;?>';
    var dd = String(quote_date.getDate()).padStart(2, '0');
    var qoute_jobnumber   = customer+'AGL'+dd;
    var sender_postcode= $("input[name='postalCode']").val();
    var sender_city= $("input[name='city']").val();

    var stateCode1 = $("input[name='state']").val();
    var postalCode = $("input[name='receiverpostalCode']").val();
    var stateCode = $("input[name='receiverstate']").val();
    var servicename = $("select[name='serviceId'] option:selected").text();
    var rcv_city= $("input[name='receivercity']").val();
    var service_type_name = $("select[name='shipmentTypeId'] option:selected").text();
    var package_type_name = $("select[name='packageId'] option:selected").text();
    var total_amount = $('#total_weight_input').val(); 
    
    
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/save_quote');?>",
        data:{quote_date:quote_date,customer:customer,sender_subrub:sender_city,sender_postcode:sender_postcode,reciver_subrub:rcv_city,reciver_postcode:postalCode,shipment_type:service_type_name,package_type:package_type_name,qoute_jobnumber:qoute_jobnumber,total_amount:total_amount},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){

        }
    });
}
function openForm() {

    document.getElementById("myForm").style.display = "block";
    var sender_postcode= $("input[name='postalCode']").val();
    var sender_city= $("input[name='city']").val();
    var stateCode1 = $("input[name='state']").val();
    var postalCode = $("input[name='receiverpostalCode']").val();
    var stateCode = $("input[name='receiverstate']").val();
    var serviceId = $("select[name='serviceId']").val();
    var rcv_city= $("input[name='receivercity']").val();
    var service_type_Id = $("select[name='shipmentTypeId']").val();

    
    var weight =$("input[name='total_weight']").val();
    
    var isdangerous = $("input[name='isdangerous']").val();
    var length =[$("#addr input[name='dimensionL1']").val()];
    var dnw =[$("#addr input[name='dimensionW1']").val()];
    var dnh=[$("#addr input[name='dimensionH1']").val()];
    var quantity =[$("#addr input[name='quantity1']").val()];
    var totalweight = $('#total_weight_input').val();    
    var final_total=$("#final_total_input").val();
    var get_volume_input = $("#get_volume_input").val();
    setTimeout(function()
    {    
    $('#saveQuoteLog table tbody').html('');
    var html = '';
    var total ='';
    var basic_charge = '';
    var per_kg ='';
    var surcharge_name = '';
    var surcharge_price = '';
    var total_charge = '';
     $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/get_calculate');?>",
        data:{sender_postcode:sender_postcode,sender_city:sender_city,sender_state:stateCode1,rc_postcode:postalCode,rc_statecode:stateCode,rcv_city:rcv_city,serviceId:serviceId,service_type_Id:service_type_Id,isdangerous:isdangerous},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            if(result.base_charge)
            {
            $.each(result.base_charge, function(k, v) {
                if(v)
                {
                    basic_charge = v.basic_charge;
                    if(basic_charge=='')
                    {
                        basic_charge='0.00';
                    }
                    console.log('basic_charge'+basic_charge);
                    per_kg = v.per_kg;
                    console.log('per_kg'+per_kg);
                    console.log('weight'+weight);
                    total =  (parseFloat(weight) * parseFloat(per_kg)) + parseFloat(basic_charge);
                }
             });
            }
            else {

                    basic_charge='0.00';
                    console.log('basic_charge'+basic_charge);
                    per_kg = result.fixed_price;
                    console.log('per_kg'+per_kg);
                    console.log('weight'+weight);
                    total =  parseFloat(weight) * parseFloat(per_kg);
            }

            html +='<tr>';
                    html +='<td class="td1">Base Charge</td>';
                    html +='<td class="td2">$ '+parseFloat(total.toFixed(3))+'</td>';
                    html +='</tr>';
            $.each(result.charges, function(k, v) {
                if(v)
                {

                    surcharge_name = v.surcharge_name;
                    surcharge_price = v.surcharge_price;
                    html +='<tr>';
                    html +='<td class="td1">'+surcharge_name+'</td>';
                    html +='<td class="td2">$ '+surcharge_price+'</td>';
                    html +='</tr>';
                    total_charge = (total + surcharge_price);
                   // alert(total_charge);
                }
            });
            
           html +='<tr>';
                html +='<td colspan="2" style="background: #686BB1;padding: 1px;"></td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td class="td1">Total weight</td>';
                    html +='<td class="td2 totalweight">'+totalweight+'kg(s)</td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td class="td1">Weight type</td>';
                    html +='<td class="td2">Actual</td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td colspan="2" style="background: #005786;padding: 1px;"></td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td class="td1"><b>Total Charge</b></td>';
                    html +='<td class="td2">$ '+total_charge+'</td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td colspan="2" style="background: #005786;padding: 1px;"></td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td colspan="2">';
                    html +='<p>Quote is an estimate. Additional fees may apply.</p>';
                    html +='</td>';
            html +='</tr>';
            $('#myForm table tbody').html(html);
        }
        
    });
    }, 1000);
   
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}



$(document).ready(function(){
    var list ='<ul id="country-list1">';

    $("#senderAddress_city").keyup(function(){
        
        $("#suggesstion-box1").html('');
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/get_postcode');?>",
        data:'keyword='+$(this).val(),
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#suggesstion-box1").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick1($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 suburb" data data-cityname1="'+v.suburb+'">'+v.suburb+'</div>';
                list +='<div class="col-xs-3 postcode" data-postalcode1="'+v.postcode+'">'+v.postcode+'</div>';
                list +='<div class="col-xs-3 state" data-statecode1="'+v.state+'">'+v.state+'</div>';
                list +='</div></li>';
        });
            list +='<ul id="country-list1" style="width:100%;">';
            
            
        }
        });
        $("#suggesstion-box1").html(list);
        list='<ul id="country-list1">';
        }
        else {
            $("#suggesstion-box1").hide();
            list ='';
        }
    });
});


var numRows = 1, ti = 5;

		function isNumber(n) {
			return !isNaN(parseFloat(n)) && isFinite(n);
		}

		function recalc() 
		{
            
			var lt = 0,
			wt = 0,
			weight_total = 0,
			tt = 0;
			$("#piece-table").find('tr').each(function () {
				var w = $(this).find('input.weight').val();

                console.log('w'+w);
				var q = parseFloat($(this).find('input.quantity').val());
				//total = w;
				var l = $(this).find('input.length').val();
				
				var p = $(this).find('input.width').val();
				
				var h = $(this).find('input.height').val();
				

				var dateTotal = (l * p * h);
				dateTotal = parseFloat(dateTotal.toFixed(3));
				//$(this).find('input.row-total').val(dateTotal ? dateTotal : "0.000");
				//dateTotal = (dateTotal * q);
				lt += isNumber(q) ? parseInt(q, 10) : 0;
				tt += isNumber(dateTotal) ? dateTotal : 0;
				weight_total += isNumber(w) ? parseInt(w, 10) : 0;
                 var kg= $('#service_kg').val();
                console.log('kg'+kg);
                if(w)
                {
                if( kg!='' && w > kg)
                {
                    $('.myerror').remove();
                    $(this).find('input.weight').css({ "border": "1px solid red" });
                    $(this).find('input.weight').parent().append('<span class="myerror">Weight must be less then fixed service weight');
            
                }
                else {
                    $(this).find('input.weight').css({ "border": "1px solid #d2d6de" });
                    $('.myerror').remove();
                }
                }
				
		    	}); //END .each

		        if(lt <= 0)
			     {
				   lt = 'NaN';
			     }

		     	$("#final_total").html(lt);
		    	$("#total_weight").html(weight_total.toFixed(2));
                var wght= weight_total.toFixed(2);


		    	$("#get_volume").html(tt.toFixed(3));
			    $("#final_total_input").val(lt);
			    $("#total_weight_input").val(weight_total.toFixed(2));
			    $("#get_volume_input").val(tt.toFixed(3));
		}


       
		function addRow() 
		{

    	$('#addr' + numRows).html("<td class='sno'>1</td><td width='10%'><input type='number' name='weight1' maxlength='6' value='' required id='shipment-info-form_shipmentPage_pieces_0__weight' class='form-control alloptions weight' onkeypress='return isNum(event)' oninput='maxLengthCheck(this)' min='1'></td><td width='40%'><div class='row mg0'><div class='col-lg-4 pd1'> <input type='text' name='dimensionL1' required class='form-control alloptions dimL length' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4'></div><div class='col-lg-4 pd1'><input type='text' name='dimensionW1' value='' required class='form-control alloptions dimW width' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1'></div><div class='col-lg-4 pd1'><input type='text' name='dimensionH1' value='' required class='form-control alloptions dimH height' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1' ></div></div></td> <td><input type='text' name='quantity1' value='1' id='shipment-info-form_shipmentPage_pieces_0__quantity' class='form-control quantity' required onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='10' min='1'></td><td><input type='button' value='&times;' class='del'></td>");

        $('#piece-table tr:last').after('<tr id="addr' + (numRows + 1) + '" class="calculation visible"></tr>');
			numRows++;
		}

		$(function () {
			$("#piece-table").on("click", ".calculation", recalc);
			$("#piece-table").on("keyup blur", ".form-control", recalc);
			$("#piece-table").on("keyup", ".checkbox:last", function () {
			  if (!$(this).data("done")) 
				{ 
				 	$(this).data("done", true);
					//addRow();
				}
			});

		   $("#add_row").on("click",function(e) {
				   var isValid = true;
                    $('.num').each(function() {
             if ($.trim($(this).val()) == '') 
			    {
                   isValid = false;
                  $(this).css({ "border": "1px solid red" });
               }
		   else 
		      {
               $(this).css({ "border": "" });
              }

			  $('.num').blur(function () {
				$(this).css({ "border": "" });
              });
           });
           if (isValid == false) 
              e.preventDefault();
           else 
	     	 addRow()
         });

         $(document).on("click", ".add, .del", function(){
        
        $("td.sno").each(function(index,element){                 
            $(element).text(index + 1); 
         });
     });
      });
				
      $('#piece-table').on('click', '.del', function () {
			$(this).closest('tr').remove();
	      });
         
function changeShipmentType(shipmentTypeId, texthtml) {

       var kg= texthtml.replace(/[^0-9]/g,'');
       
       $('#service_kg').val(kg);
    if (typeof (shipmentTypeId) == "undefined" || shipmentTypeId == '') {
        shipmentTypeId = $('#shipmentPage_shipmentTypeId').val();
    }
    
    
    $("#piece-table").find("tbody").find("tr").each(function () {
        $(this).find("td").find("input").each(function () {
            var name_piece = $(this).attr("name");
            var value_piece = $(this).val();
        });
    });
    recalc();
    
}
      
document.getElementById ("shipmentPage_shipmentTypeId").addEventListener ("change", 
	function(obj)
  {
  	var input = document.getElementById("textInput");
    var input1 = document.getElementById("textInput1");
    var input2 = document.getElementById("textInput2");
    input.disabled = (this.value >= 3);
    input1.disabled = (this.value >= 3);
    input2.disabled = (this.value >= 3);
  }, false);
      

  $(function () {
  $('#shipment-info-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});

    </script>


<style>

#country-list1 {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 288%;
    position: absolute;
    z-index: 9;
}
#country-list {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 288%;
    position: absolute;
}
#country-list li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#country-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list1 li:hover{background:#ece3d2;cursor: pointer;}
.col-xs-6.suburb {
    margin-left: 9px;
    margin-top: 9px;
}
.col-xs-3.postcode {
    margin-left: -151px;
}
.col-xs-3.state {
    margin-left: 113px;
}
.col-xs-3{
margin-top: 0px !important;
}
</style>
