<div id="shipment-div">
    <div class="row mbl">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
            </div>
        </div>
        <form id="shipment-info-form" name="shipment_form" action="" method="post" onsubmit="return validate_form();">
			<input type="hidden" name="customerCode" id="<?php echo $customers->customer_id;?>">
			<input type="hidden" name="total_charge" id="total_charge" value="">
            <input type="hidden" name="final_charge" id="final_charge" value="">
            <input type="hidden" name="surcharge" id="surcharge" value="">
            
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
                                                    <label class="control-label shipment" for="inputName"> Company <span class="s30"> *</span>
                                                    </label>

                                                    <input type="text" name="shipmentPage.senderAddress.companyName" maxlength="35" value="<?php echo $customers->customerName;?>" id="sender-companyName" class="form-control alloptions" onkeyup="searchSenderAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" autocomplete="off" onfocus="this.value=''" required>
                                                    <div id="error"></div>
                                                 <div id="sender-search-result"></div>
                                                
                                                </div>
                                                
                                             
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.phone" maxlength="12" pattern="08\d{8}" value="<?php echo $customers->phone;?>" id="shipment-info-form_shipmentPage_senderAddress_phone" class="form-control alloptions" data-toggle="tooltip" required data-placement="top" data-original-title="TOOLTIP:Phone" onfocus="this.value=''">
                                                    <div id="error1"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 send_contact">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.contactName" maxlength="35" value="<?php echo $customers->contact_name;?>" id="sender_contactName" class="form-control alloptions" required onkeyup="searchSenderAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" autocomplete="off" onfocus="this.value=''">
                                                    <div id="error2"></div>
                                                    <div id="sender-contact-result"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 send_email">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address<span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.email" maxlength="50" value="<?php echo $customers->email;?>" id="shipment-info-form_shipmentPage_senderAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email" onfocus="this.value=''">
                                                    <div id="error14"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.senderAddress.country" required id="shipmentPage_senderAddress_country" class="form-control">
                                                    <option value="Australia" selected="selected"> Australia</option>
                                                            </select>
 

<div id="error3"></div>




                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.address" maxlength="35" required value="<?php echo $customers->address;?>" id="shipment-info-form_shipmentPage_senderAddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1" onfocus="this.value=''">
                                                    <div id="error4"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.address2" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2" onfocus="this.value=''">
                                                </div>
                                            </div>
												 <div class="col-md-6 address3">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="shipmentPage.senderAddress.address3" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3" onfocus="this.value=''">
													</div>
												</div>
												
												<div class="col-md-6"></div>
												
                                            <div class="col-md-4 save">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="shipmentPage.isSaveSenderAddressBook" value="0" tabindex="5" type="checkbox">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 residence">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="0" name="shipmentPage.residentialPickup">
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
                                            	<input type="text" name="shipmentPage.senderAddress.alternateUserName" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_alternateUserName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:ALTERNATE USERNAME">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> City <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.city" maxlength="35" value="<?php echo $customers->city;?>" id="senderAddress_city" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City" autocomplete="off" onfocus="this.value=''">
                                                    <div id="error5"></div>
                                                    <div id="suggesstion-box1"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.postalCode" maxlength="12" value="<?php echo $customers->postal_code;?>" id="shipment-info-form_shipmentPage_senderAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(true,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code" onfocus="this.value=''">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-sender-state">




<label class="control-label" for="inputName"> State/Province</label>

    
        <input type="text" name="shipmentPage.senderAddress.state" value="<?php echo $customers->state_code;?>" id="shipmentPage_senderAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province" onfocus="this.value=''">
    
    

</div>
                                            </div>
                                            <div class="col-md-12" id="sender-city-search"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php //echo '<pre>'; print_r($addres); echo '</pre>'; ?>
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
                                                    <input type="text" name="shipmentPage.receiverAddress.companyName" maxlength="35" value="<?php if(isset($addres->company_name)){ echo $addres->company_name; } elseif(isset($quotes->receiver_company)){ echo $quotes->receiver_company; }
                                                ?>" id="receiver_companyName" required class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" autocomplete="off" onfocus="this.value=''">
                                                    <div id="receiver-search-result"></div>
                                                    <div id="error6"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                         <input type="text" name="shipmentPage.receiverAddress.phone" maxlength="25" value="<?php if(isset($addres->phone)){ echo $addres->phone; } elseif(isset($quotes->receiver_phone)){ echo $quotes->receiver_phone; } ?>" pattern="08\d{8}" id="shipment-info-form_shipmentPage_receiverAddress_phone" required class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone" onfocus="this.value=''">
                                         <div id="error7"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.contactName" maxlength="35" value="<?php if(isset($addres->contact_name)){ echo $addres->contact_name; } elseif(isset($quotes->receiver_contact)){ echo $quotes->receiver_contact; }
                                                ?>" id="receiver_contactName" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" autocomplete="off" onfocus="this.value=''">
                                                    <div id="receiver-contact-result">
                                                    <div id="error8"></div></div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.email" maxlength="50" value="<?php if(isset($addres->email)){ echo $addres->email; } elseif(isset($quotes->receiver_email)){ echo $quotes->receiver_email; }
                                                ?>" id="shipment-info-form_shipmentPage_receiverAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email" onfocus="this.value=''">
                                                 <div id="error15"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.receiverAddress.country" id="shipmentPage_receiverAddress_country" class="form-control" onchange="changeCountry('receiver')">
                                                 
                                                 
                                                  <option value="<?php if(isset($addres->country)){ echo $addres->country; } elseif(isset($quotes->receiver_country)){ echo $quotes->receiver_country; } else { echo "Australia";} ?>" selected="selected"><?php if(isset($addres->country)){ echo $addres->country; } elseif(isset($quotes->receiver_country)){ echo $quotes->receiver_country; }  else { echo "Australia";} ?></option>
                                            
                                           
                                                            </select>

<div id="error9"></div>
   </div>
    </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address" maxlength="35" value="<?php if(isset($addres->address)){ echo $addres->address; } elseif(isset($quotes->receiver_address)){ echo $quotes->receiver_address; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_address" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1" onfocus="this.value=''">
                                                    <div id="error10"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address2" maxlength="35" value="<?php if(isset($addres->address1)){ echo $addres->address1; } elseif(isset($quotes->	receiver_address1)){ echo $quotes->receiver_address1; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2" onfocus="this.value=''">
                                                </div>
                                            </div>
												 <div class="col-md-6 address3">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="shipmentPage.receiverAddress.address3" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3" onfocus="this.value=''">
													</div>
												</div>
												
												<div class="col-md-6"></div>
                                            <div class="col-md-6 saves">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="shipmentPage.isSaveRecipientAddressBook" value="0" tabindex="5" type="checkbox">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 residences">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="0" name="shipmentPage.residentialDelivery">
                                                        &nbsp; Residence
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> City <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.city" maxlength="35" value="<?php if(isset($addres->city)){ echo $addres->city; } elseif(isset($quotes->receiver_suburb)){ echo $quotes->receiver_suburb; } ?>" id="receiverAddress_city" class="form-control alloptions" required  data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City"  autocomplete="off" onfocus="this.value=''">
                                                    <div id="error11"></div>
                                                    <div id="suggesstion-box"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    
                                                  
                                                    <input type="text" name="shipmentPage.receiverAddress.postalCode" maxlength="12" value="<?php if(isset($addres->postcode)){ echo $addres->postcode; } elseif(isset($quotes->receiver_postcode)){ echo $quotes->receiver_postcode; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(false,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code" onfocus="this.value=''">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-receiver-state">




                                                    <label class="control-label" for="inputName"> State/Province</label>


    
                                                   <input type="text" name="shipmentPage.receiverAddress.state" value="<?php if(isset($addres->state)){ echo $addres->state; } elseif(isset($quotes->receiver_state)){ echo $quotes->receiver_state; } ?>" id="shipmentPage_receiverAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province" onfocus="this.value=''">
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
                                                        <label class="control-label" for="inputName"> Shipping Date
                                                        </label>

                                                        <div class="form-group input-group">
															<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
														
                                                            </span><input type='date' name="shipping_date" id='date' class="form-control date form_datetime" value='<?php echo date('Y-m-d');?>' readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-6" id="change-country-div">
                                                        <label class="control-label" for="inputName"> Carrier <span class="s30"> *</span>
                                                        </label>
                                                        
                                                        <select name="shipmentPage.serviceId" id="shipmentPage_serviceId" required class="form-control">
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
                                                        <select name="shipmentPage.shipmentTypeId" id="shipmentPage_shipmentTypeId" required class="form-control shipmentId"  onchange="changeShipmentType($(this).val(), $('option:selected',this).text())">
                                                        <?php
                                                        if(!empty(isset($quotes->shipment_type))){
                                                          $service = $quotes->shipment_type;
                                                          $this->db->select('*');
                                                        $this->db->from('star_services');
                                                        $this->db->where('service_name',$service);
                                                        $get_quote = $this->db->get()->row(); ?>
                                                        <option value="<?php echo $get_quote->id;  ?>" <?php echo "selected" ?>><?php echo $get_quote->service_name;  ?> </option>
                                                        <?php }
                                                       else
                                                       {
                                                        for($c=0;$c<count($services);$c++) 
                                                            {                                                                
                                                                ?>  
                                                                <option value="<?php echo $services[$c]['id'];?>" ><?php echo $services[$c]['service_name'];?></option>
                                                               
                                                            <?php
                                                           }  } ?>  
 
                                                        </select>


                                                    </div>
                                                    <div class="form-group col-lg-12" id="change-shipmenttype-div">
                                                        <label class="control-label" for="inputName"> Package Type
                                                        </label>
                                                        <select name="shipmentPage.packageId" id="shipmentPage_packageId" class="form-control" onchange="changePackage()">
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
                                                            <label class="radio-inline document"> <input type="radio" value="DOX" required name="shipmentPage.contentType" disabled="disabled" onclick="resetAddPiece($(this).val())"> &nbsp;
                                                                Documents
                                                            </label>
                                                            <label class="radio-inline parcel"> <input type="radio" value="WPX" name="shipmentPage.contentType" checked="checked" onclick="resetAddPiece($(this).val())">
                                                                &nbsp; Parcel
                                                            </label>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Weight Unit
                                                            </label>
                                                            <select name="shipmentPage.weightUnit" id="sel-weight-unit" class="form-control">
    <option value="KG">KG</option>


</select>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Dimension Unit
                                                            </label>
                                                            <select name="shipmentPage.dimensionUnit" id="sel-dim-unit" class="form-control">
    <option value="CM">CM</option>


</select>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputName">
                                                                Currency
                                                            </label>
                                                            <select name="shipmentPage.currencyCode" id="shipment-info-form_shipmentPage_currencyCode" class="form-control">
   
    <option value="AUD" selected="selected">Australian Dollars</option>

</select>


                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12" id="reset-add-piece-div">
                                                        <table class="s32 table table-striped table-bordered" id="piece-table">
                                                            
                                                            
                                                            
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
                                                            <td class="sno"><input type="hidden" name="peice" id="peice" value="">1</td>
                                                            
                                                                
                                                                <td width="10%"><input type="number" name="shipmentPage.pieces.weight" id="shipment-weight" maxlength="6" value="<?php if(isset($quotes->quote_weight)){ echo $quotes->quote_weight; } ?>" required id="shipment-info-form_shipmentPage_pieces_0__weight" class="form-control alloptions weight" onkeypress="return isNum(event)" oninput="maxLengthCheck(this)" min="1" > 
                                                                <div id="error12"></div>
                                                                <div id="error13"></div>
                                                                <input type="hidden" name="total_weight" id="total_weight_input" value="">
                                                                     <input type="hidden" name="service_kg" id="service_kg" value="">
                                                                </td>
                                                                <td width="40%">
                                                                    <div class="row mg0">
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionL1" required value="<?php if(isset($quotes->quote_length)){ echo $quotes->quote_length; } ?>" id="textInput" class="form-control alloptions dimL length" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                           
                                                                 </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionW1" value="<?php if(isset($quotes->quote_width)){ echo $quotes->quote_width; } ?>" required id="textInput1" class="form-control alloptions dimW width" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                        </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionH1" value="<?php if(isset($quotes->quote_height)){ echo $quotes->quote_height; } ?>" required id="textInput2" class="form-control alloptions dimH height" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                            <input type="hidden" name="get_volume" id="get_volume_input" value="">    
	
                                                                        </div>
                                                                    </div>
                                                              </td>

                                                              
                                                               <td><input type="text" name="shipmentPage.pieces.quantity1" value="<?php if(isset($quotes->quote_quantity)){ echo $quotes->quote_quantity; } else { echo 1; }?>" id="shipment-info-form_shipmentPage_pieces_0__quantity" class="form-control quantity" required onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="10" min="1" onfocus="this.value=''">
                                                               <input type="hidden" name="final_total" id="final_total_input" value=""></td>
                                                                 
      <td><input type="button" value="&times;" class="del" /></td>
                                                                
                                                                <td width="3%" style="padding-top: 9px"><i id="remove" class="fa fa-times-circle-o s10" style="font-size: 18px; display: none;" onclick="removePiece($(this))"></i>
                                                                </td>
                                                            </tr>
                                                            
                                                                <input type="hidden" name="shipmentPage.isAddPiece" value="true" id="shipment-info-form_shipmentPage_isAddPiece">
                                                                                     </tbody>
                                                                                
                                                        </table>
                                                        
                                                       
                                                        <!--a id="add_row" class="add-box" href="#">+Add Item</a-->
                                                                <button class="btn s33 add" type="button" onclick="addRow()">
                                                                   +
                                                                </button>
                                                            
                                                        
                                                        <!--script type="text/javascript">
                                                            var order = $('#piece-table tbody tr').length;
                                                            function addPiece() {
                                                                order++;
                                                                index = order - 1;
                                                                var addPieceContent = $("#piece-dt" + index).clone();
                                                                addPieceContent.attr('id', 'piece-dt' + order);
                                                                addPieceContent.find(".order-number").html(order);
                                                                addPieceContent.find(".weight").attr('name', 'shipmentPage.pieces[' + index + '].weight');
//                                                                addPieceContent.find(".dimensionList").attr('name', 'dimensionList[' + index + ']');
                                                                addPieceContent.find(".dimensionList").attr('onchange', 'changeDimensionList($(this).val(),' + index + ')');
                                                                addPieceContent.find(".dimL").attr('name', 'shipmentPage.pieces[' + index + '].dimensionL');
                                                                addPieceContent.find(".dimW").attr('name', 'shipmentPage.pieces[' + index + '].dimensionW');
                                                                addPieceContent.find(".dimH").attr('name', 'shipmentPage.pieces[' + index + '].dimensionH');
                                                                addPieceContent.find(".customValue").attr('name', 'shipmentPage.pieces[' + index + '].customValue');
                                                                addPieceContent.find(".quantity").attr('name', 'shipmentPage.pieces[' + index + '].quantity');
                                                                addPieceContent.find(".nonStandardPackage").attr('name', 'shipmentPage.pieces[' + index + '].nonStandardPackage');
                                                                addPieceContent.find('#remove').show();
                                                                $('#piece-table tbody tr:last').after(addPieceContent);
                                                            }
                                                            function removePiece($this) {
                                                                $this.closest("tr").remove();
                                                                $('#piece-table tbody tr').each(function (i) {
                                                                    $(this).find(".order-number").html(i + 1);
                                                                });
                                                                order--;
                                                            }
                                                        </script-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12" id="additional-config-div">



    <div class="form-group">
        
            <label class="fw0">
                <input data-group="dangerousgoods" tabindex="5" id="service_cons_0" type="checkbox" name="isdangerous" value="0" onclick="showServiceAddConDetails(0)"> &nbsp;
                Dangerous Goods
            </label>
        
        
        <input type="hidden" name="shipmentPage.addCons[0].addConName" value="Dangerous Goods">
        <input type="hidden" name="shipmentPage.addCons[0].addConCode" value="dangerousgoods">
        
            <div class="row" id="service_cons_0_add" style="display: none;">
                
                    <div class="col-xs-6">
                        <div class="form-group">
                            
                            <input type="hidden" value="UN Number (4Digits)" name="shipmentPage.addCons[0].listProperties[0].addConDetailName">
                            <input type="hidden" value="unnumber" name="shipmentPage.addCons[0].listProperties[0].addConDetailCode">
                            
                            
                            
                                <label class="control-label">
                                    UN Number (4Digits)
                                </label>
                                <input type="text" class="form-control" name="shipmentPage.addCons[0].listProperties[0].value">
                            
                        </div>
                    </div>
                
                    <div class="col-xs-6">
                        <div class="form-group">
                            
                            <input type="hidden" value="Packing Group" name="shipmentPage.addCons[0].listProperties[1].addConDetailName">
                            <input type="hidden" value="packinggroup" name="shipmentPage.addCons[0].listProperties[1].addConDetailCode">
                            
                                <label class="control-label">
                                    Packing Group
                                </label>
                                <select class="form-control" name="shipmentPage.addCons[0].listProperties[1].value">
                                    
                                        <option value="1">1</option>
                                    
                                        <option value="2">2</option>
                                    
                                        <option value="3">3</option>
                                    
                                        <option value="4">4</option>
                                    
                                </select>
                            
                            
                            
                        </div>
                    </div>
                
                    <div class="col-xs-6">
                        <div class="form-group">
                            
                            <input type="hidden" value="I have a MSDS(Material Safety Data Sheet). Dangerous Goods attracts an additional surcharge." name="shipmentPage.addCons[0].listProperties[2].addConDetailName">
                            <input type="hidden" value="msda" name="shipmentPage.addCons[0].listProperties[2].addConDetailCode">
                            
                            
                                <label class="fw0">
                                    <input type="checkbox" tabindex="5" name="shipmentPage.addCons[0].listProperties[2].value">
                                    &nbsp;
                                    I have a MSDS(Material Safety Data Sheet). Dangerous Goods attracts an additional surcharge.
                                </label>
                            
                            
                        </div>
                    </div>
                
            </div>
        
    </div>
    

    <div class="form-group">
        
            <label class="fw0">
                <input data-group="atl" tabindex="5" id="service_cons_1" type="checkbox" name="shipmentPage.addCons[1].value" value="1" onclick="showServiceAddConDetails(1)"> &nbsp;
                Authorized to Leave (ATL)
            </label>
        
        
        <input type="hidden" name="shipmentPage.addCons[1].addConName" value="Authorized to Leave (ATL)">
        <input type="hidden" name="shipmentPage.addCons[1].addConCode" value="atl">
        
            <div class="row" id="service_cons_1_add" style="display: none;">
                
                    <div class="col-xs-6">
                        <div class="form-group">
                            
                            <input type="hidden" value="Where to leave" name="shipmentPage.addCons[1].listProperties[0].addConDetailName">
                            <input type="hidden" value="atltoleave" name="shipmentPage.addCons[1].listProperties[0].addConDetailCode">
                            
                            
                            
                                <label class="control-label">
                                    Where to leave
                                </label>
                                <input type="text" class="form-control" name="shipmentPage.addCons[1].listProperties[0].value">
                            
                        </div>
                    </div>
                
            </div>
        
    </div>
    
	<div class="form-popup" id="myForm">
	<form id="saveQuoteLog" name="saveQuoteLog">
	<h3 class="quote_title">Quote</h3>
	<hr>
		<table class="table">
	   
			<tbody></table>
	<div class="quote-button">
	<button type="button" class="btn s33 save" onclick="saveqoute()">Save quote</button>
		<button type="button" class="btn s33 cancel" onclick="closeForm()">Ok</button>
		</div>
	  </form>
	</div>


	<div class="form-group" id="divAglWarranty" style="display: none;">
		<label class="fw0">
			<input data-group="aglWarranty" tabindex="5" id="service_cons_2" type="checkbox" name="shipmentPage.addCons[2].value" value="0" onclick="showServiceAddConDetails(2)" disabled="disabled"> &nbsp;
			AGL Warranty
		</label>
		<input type="hidden" name="shipmentPage.addCons[2].value" value="0">
		<input type="hidden" name="shipmentPage.addCons[2].addConName" value="agl Warranty">
		<input type="hidden" name="shipmentPage.addCons[2].addConCode" value="aglWarranty">
	</div>
<script type="text/javascript">
    var isAglWarranty = false;
    $(document).ready(function () {
        if (isAglWarranty) {
            $("#divAglWarranty").show();
            $("#divAglWarranty").find("input[type='checkbox']").attr("checked", true);
            $("#divAglWarranty").find("input[name='shipmentPage.addCons[2].value']").val(1);
        } else {
            $("#divAglWarranty").hide();
            $("#divAglWarranty").find("input[type='checkbox']").attr("checked", false);
            $("#divAglWarranty").find("input[name='shipmentPage.addCons[2].value']").val(0);
        }
    });
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
																	Quote
                                                                </button>
                                                                <!--button class="btn s33 calculation" type="button">
                                                                    Calculate
                                                                </button-->
                                                                  <button class="btn s33" type="button" onclick="continuewbooking()">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

<script type="text/javascript">
function validate_form()
{
    valid = true;

 var companyName = document.getElementById("sender-companyName").value;
 var contactName = document.getElementById("sender_contactName").value;
 var senderCountry = document.getElementById("shipmentPage_senderAddress_country").value;
 var senderAddress = document.getElementById("shipment-info-form_shipmentPage_senderAddress_address").value;
 var senderPhone = document.getElementById("shipment-info-form_shipmentPage_senderAddress_phone").value;
 var senderCity = document.getElementById("senderAddress_city").value;
 var receiverCompanyName = document.getElementById("receiver_companyName").value;
 var receiverContactName = document.getElementById("receiver_contactName").value;
 var receiverCountry = document.getElementById("shipmentPage_receiverAddress_country").value;
 var receiverAddress = document.getElementById("shipment-info-form_shipmentPage_receiverAddress_address").value;
 var receiverCity = document.getElementById("receiverAddress_city").value;
 var receiverPhone = document.getElementById("shipment-info-form_shipmentPage_receiverAddress_phone").value;
 var senderEmail = document.getElementById("shipment-info-form_shipmentPage_senderAddress_email").value;
 var receiverEmail = document.getElementById("shipment-info-form_shipmentPage_receiverAddress_email").value;

 var serviceId = document.getElementById("shipmentPage_serviceId").value;
 var shipmentType = document.getElementById("shipmentPage_shipmentTypeId").value;
 var shipmentWeight = document.getElementById("shipment-weight").value;
 var kg= $('#service_kg').val();
 
 //var = $('#shipment-weight').val();



    /*if ( companyName == "" || contactName == "" || senderCountry == "" || senderAddress == "" || senderPhone == "" || senderCity == "" || receiverCompanyName == "" || receiverContactName =="" || receiverCountry == "" || receiverAddress == "" || receiverCity == "" || receiverPhone == "" || serviceId == "" || shipmentType == "" || shipmentWeight == "")
    {
        alert ( "Please fill the required field." );
        valid = false;
    }*/
    if(companyName == ""){
     // alert("Please enter Sender Company Name");
     document.getElementById('error').innerHTML="*Sender Company Name is required";
     $("#error").css("color", "red");
     $("#error").css("font-size", "11px");
      valid = false;
     }

     if(contactName == ""){
     // alert("Please enter Sender Contact Name");
     document.getElementById('error2').innerHTML="*Sender Contact Name is required";
     $("#error2").css("color", "red");
     $("#error2").css("font-size", "11px");
      valid = false;
     }

     if(senderCountry == ""){
     // alert("Please choose a Sender Country Name");
     document.getElementById('error3').innerHTML="*Sender Country Name is required";
     $("#error3").css("color", "red");
     $("#error3").css("font-size", "11px");
      valid = false;
     }

     if(senderAddress == ""){
      //alert("Please enter Sender Address");
      document.getElementById('error4').innerHTML="*Sender Address is required";
      $("#error4").css("color", "red");
      $("#error4").css("font-size", "11px");
      valid = false;
     } 
     
     if(senderPhone == ""){
     // alert("Please enter Sender Phone");
     document.getElementById('error1').innerHTML="*Sender Phone is required";
     $("#error1").css("color", "red");
     $("#error1").css("font-size", "11px");
      valid = false;
     }
     
      if(senderCity == ""){
      //alert("Please enter Sender City");
      document.getElementById('error5').innerHTML="*Sender City is required";
      $("#error5").css("color", "red");
      $("#error5").css("font-size", "11px");
      valid = false;
     }
     
      if(receiverCompanyName == ""){
      //alert("Please enter Receiver Company Name");
      document.getElementById('error6').innerHTML="*Receiver Company Name is required";
      $("#error6").css("color", "red");
      $("#error6").css("font-size", "11px");
      valid = false;
     }

     if(receiverContactName == ""){
      //alert("Please enter Receiver Contact Name");
      document.getElementById('error8').innerHTML="*Receiver Contact Name is required";
      $("#error8").css("color", "red");
      $("#error8").css("font-size", "11px");
      valid = false;
     }
      
     if(receiverCountry == ""){
      //alert("Please choose a Receiver Country");
      document.getElementById('error9').innerHTML="*Receiver Country is required";
      $("#error9").css("color", "red");
      $("#error9").css("font-size", "11px");
      valid = false;
     }
     
      if(receiverAddress == ""){
      //alert("Please enter Receiver Address");
      document.getElementById('error10').innerHTML="*Receiver Address is required";
      $("#error10").css("color", "red");
      $("#error10").css("font-size", "11px");
      valid = false;
     }
     if(receiverCity == ""){
      //alert("Please enter Receiver City");
      document.getElementById('error11').innerHTML="*Receiver City is required";
      $("#error11").css("color", "red");
      $("#error11").css("font-size", "11px");
      valid = false;
     }

     if(receiverPhone == ""){
      //alert("Please enter Receiver Phone");
      document.getElementById('error7').innerHTML="*Receiver Phone is required";
      $("#error7").css("color", "red");
      $("#error7").css("font-size", "11px");
      valid = false;
     }

     if(senderEmail == ""){
      //alert("Please enter Receiver Phone");
      document.getElementById('error14').innerHTML="*Sender Email is required";
      $("#error14").css("color", "red");
      $("#error14").css("font-size", "11px");
      valid = false;
     }
    
     if(receiverEmail == ""){
      //alert("Please enter Receiver Phone");
      document.getElementById('error15').innerHTML="*Receiver Email is required";
      $("#error15").css("color", "red");
      $("#error15").css("font-size", "11px");
      valid = false;
     }

     /*if(serviceId == ""){
     // alert("Please choose a Carrier");
     document.getElementById('error').innerHTML="*Field is empty";
      valid = false;
     }

     if(shipmentType == ""){
      //alert("Please choose a Service Type");
      document.getElementById('error').innerHTML="*Field is empty";
      valid = false;
     }*/
    
     if(shipmentWeight == ""){
     // alert("Please enter a Weight");
     document.getElementById('error12').innerHTML="*Weight is required";
     $("#error12").css("color", "red");
     $("#error12").css("font-size", "11px");
      valid = false;
     }
     /* else if(shipmentWeight > kg){
        //alert('Weight should be less than or equal to' + kg);
        document.getElementById('error13').innerHTML='Weight should be less than or equal to' + kg;
        $("#error13").css("color", "red");
        $("#error13").css("font-size", "11px");
      valid = false;
     }*/
    
     else
     {
        return valid;
     }

   
}

</script>
<script>
 function onChangeServiceType(isReturn) {
        var defaultAddressJs = JSON.parse($("#defaultAddressJson").val());
        if (isReturn) {
            $("#chkThirdParty").prop("checked", false);
            if ($("#chkReturnService").prop("checked")) {
                $("input[name='shipmentPage.senderAddress.companyName']").val("");
                $("input[name='shipmentPage.senderAddress.contactName']").val("");
                $("input[name='shipmentPage.senderAddress.phone']").val("");
                $("input[name='shipmentPage.senderAddress.email']").val("");
                $("select[name='shipmentPage.senderAddress.country']").val("");
                $("input[name='shipmentPage.senderAddress.address']").val("");
                $("input[name='shipmentPage.senderAddress.address2']").val("");
                $("input[name='shipmentPage.senderAddress.address3']").val("");
                $("input[name='shipmentPage.senderAddress.city']").val("");
                $("input[name='shipmentPage.senderAddress.postalCode']").val("");
                $("input[name='shipmentPage.senderAddress.state']").val("");

                $("input[name='shipmentPage.receiverAddress.companyName']").val(defaultAddressJs["companyName"]);
                $("input[name='shipmentPage.receiverAddress.contactName']").val(defaultAddressJs["contactName"]);
                $("input[name='shipmentPage.receiverAddress.phone']").val(defaultAddressJs["phone"]);
                $("input[name='shipmentPage.receiverAddress.email']").val(defaultAddressJs["email"]);
                $("select[name='shipmentPage.receiverAddress.country']").val(defaultAddressJs["country"]);
                $("input[name='shipmentPage.receiverAddress.address']").val(defaultAddressJs["address"]);
                $("input[name='shipmentPage.receiverAddress.address2']").val(defaultAddressJs["address2"]);
                $("input[name='shipmentPage.receiverAddress.address3']").val(defaultAddressJs["address3"]);
                $("input[name='shipmentPage.receiverAddress.city']").val(defaultAddressJs["city"]);
                $("input[name='shipmentPage.receiverAddress.postalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='shipmentPage.receiverAddress.state']").val(defaultAddressJs["state"]);
            } else {
                $("input[name='shipmentPage.receiverAddress.companyName']").val("");
                $("input[name='shipmentPage.receiverAddress.contactName']").val("");
                $("input[name='shipmentPage.receiverAddress.phone']").val("");
                $("input[name='shipmentPage.receiverAddress.email']").val("");
                $("select[name='shipmentPage.receiverAddress.country']").val("");
                $("input[name='shipmentPage.receiverAddress.address']").val("");
                $("input[name='shipmentPage.receiverAddress.address2']").val("");
                $("input[name='shipmentPage.receiverAddress.address3']").val("");
                $("input[name='shipmentPage.receiverAddress.city']").val("");
                $("input[name='shipmentPage.receiverAddress.postalCode']").val("");
                $("input[name='shipmentPage.receiverAddress.state']").val("");

                $("input[name='shipmentPage.senderAddress.companyName']").val(defaultAddressJs["companyName"]);
                $("input[name='shipmentPage.senderAddress.contactName']").val(defaultAddressJs["contactName"]);
                $("input[name='shipmentPage.senderAddress.phone']").val(defaultAddressJs["phone"]);
                $("input[name='shipmentPage.senderAddress.email']").val(defaultAddressJs["email"]);
                $("select[name='shipmentPage.senderAddress.country']").val(defaultAddressJs["country"]);
                $("input[name='shipmentPage.senderAddress.address']").val(defaultAddressJs["address"]);
                $("input[name='shipmentPage.senderAddress.address2']").val(defaultAddressJs["address2"]);
                $("input[name='shipmentPage.senderAddress.address3']").val(defaultAddressJs["address3"]);
                $("input[name='shipmentPage.senderAddress.city']").val(defaultAddressJs["city"]);
                $("input[name='shipmentPage.senderAddress.postalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='shipmentPage.senderAddress.state']").val(defaultAddressJs["state"]);
            }
        } else {
            if ($("#chkThirdParty").prop("checked")) {
                $("#chkReturnService").prop("checked", false);
                $("input[name='shipmentPage.senderAddress.companyName']").val("");
                $("input[name='shipmentPage.senderAddress.contactName']").val("");
                $("input[name='shipmentPage.senderAddress.phone']").val("");
                $("input[name='shipmentPage.senderAddress.email']").val("");
                $("select[name='shipmentPage.senderAddress.country']").val("");
                $("input[name='shipmentPage.senderAddress.address']").val("");
                $("input[name='shipmentPage.senderAddress.address2']").val("");
                $("input[name='shipmentPage.senderAddress.address3']").val("");
                $("input[name='shipmentPage.senderAddress.city']").val("");
                $("input[name='shipmentPage.senderAddress.postalCode']").val("");
                $("input[name='shipmentPage.senderAddress.state']").val("");

                $("input[name='shipmentPage.receiverAddress.companyName']").val("");
                $("input[name='shipmentPage.receiverAddress.contactName']").val("");
                $("input[name='shipmentPage.receiverAddress.phone']").val("");
                $("input[name='shipmentPage.receiverAddress.email']").val("");
                $("select[name='shipmentPage.receiverAddress.country']").val("");
                $("input[name='shipmentPage.receiverAddress.address']").val("");
                $("input[name='shipmentPage.receiverAddress.address2']").val("");
                $("input[name='shipmentPage.receiverAddress.address3']").val("");
                $("input[name='shipmentPage.receiverAddress.city']").val("");
                $("input[name='shipmentPage.receiverAddress.postalCode']").val("");
                $("input[name='shipmentPage.receiverAddress.state']").val("");
            } else {
                $("input[name='shipmentPage.receiverAddress.companyName']").val("");
                $("input[name='shipmentPage.receiverAddress.contactName']").val("");
                $("input[name='shipmentPage.receiverAddress.phone']").val("");
                $("input[name='shipmentPage.receiverAddress.email']").val("");
                $("select[name='shipmentPage.receiverAddress.country']").val("");
                $("input[name='shipmentPage.receiverAddress.address']").val("");
                $("input[name='shipmentPage.receiverAddress.address2']").val("");
                $("input[name='shipmentPage.receiverAddress.address3']").val("");
                $("input[name='shipmentPage.receiverAddress.city']").val("");
                $("input[name='shipmentPage.receiverAddress.postalCode']").val("");
                $("input[name='shipmentPage.receiverAddress.state']").val("");

                $("input[name='shipmentPage.senderAddress.companyName']").val(defaultAddressJs["companyName"]);
                $("input[name='shipmentPage.senderAddress.contactName']").val(defaultAddressJs["contactName"]);
                $("input[name='shipmentPage.senderAddress.phone']").val(defaultAddressJs["phone"]);
                $("input[name='shipmentPage.senderAddress.email']").val(defaultAddressJs["email"]);
                $("select[name='shipmentPage.senderAddress.country']").val(defaultAddressJs["country"]);
                $("input[name='shipmentPage.senderAddress.address']").val(defaultAddressJs["address"]);
                $("input[name='shipmentPage.senderAddress.address2']").val(defaultAddressJs["address2"]);
                $("input[name='shipmentPage.senderAddress.address3']").val(defaultAddressJs["address3"]);
                $("input[name='shipmentPage.senderAddress.city']").val(defaultAddressJs["city"]);
                $("input[name='shipmentPage.senderAddress.postalCode']").val(defaultAddressJs["postalCode"]);
                $("input[name='shipmentPage.senderAddress.state']").val(defaultAddressJs["state"]);
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
        $("input[name='shipmentPage.senderAddress.city']").val(cityName1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(postalCode1);
        $("input[name='shipmentPage.senderAddress.state']").val(stateCode1);
    } else {
        $("input[name='shipmentPage.receiverAddress.city']").val(cityName);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(postalCode);
        $("input[name='shipmentPage.receiverAddress.state']").val(stateCode);
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
        $("input[name='shipmentPage.receiverAddress.city']").val(cityName);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(postalCode);
        $("input[name='shipmentPage.receiverAddress.state']").val(stateCode);
      
    } else {
        $("input[name='shipmentPage.senderAddress.city']").val(cityName1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(postalCode1);
        $("input[name='shipmentPage.senderAddress.state']").val(stateCode1);

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
			window.location.href = "<?php echo base_url('customer/booking');?>";
        }
    });

}

 $("input[name='isdangerous']").change(function() 
 {
        if(this.checked) {
        $("input[name='isdangerous']").val(1);        
        }
        else {
           $("input[name='isdangerous']").val(0);        
        }
    });

    $("input[name='shipmentPage.isSaveSenderAddressBook']").change(function() 
    {
        if(this.checked) {
        $("input[name='shipmentPage.isSaveSenderAddressBook']").val(1);        
        }
        else {
           $("input[name='shipmentPage.isSaveSenderAddressBook']").val(0);        
        }
    });

    $("input[name='shipmentPage.isSaveRecipientAddressBook']").change(function() 
    {
        if(this.checked) {
        $("input[name='shipmentPage.isSaveRecipientAddressBook']").val(1);        
        }
        else {
           $("input[name='shipmentPage.isSaveRecipientAddressBook']").val(0);        
        }
    });
    

    $("input[name='shipmentPage.residentialPickup']").change(function() 
    {
        if(this.checked) {
        $("input[name='shipmentPage.residentialPickup']").val(1);        
        }
        else {
           $("input[name='shipmentPage.residentialPickup']").val(0);        
        }
    });


    $("input[name='shipmentPage.residentialDelivery']").change(function() 
    {
        if(this.checked) {
        $("input[name='shipmentPage.residentialDelivery']").val(1);        
        }
        else {
           $("input[name='shipmentPage.residentialDelivery']").val(0);        
        }
    });


    function saveqoute()
{
    var quote_date =  new Date();
    var customer = '<?php echo $customers->customer_id;?>';
    //alert(customer);
   // var dd = String(quote_date.getDate()).padStart(2, '0');
    var qoute_jobnumber   = customer;

    var customer_name= $("input[name='shipmentPage.senderAddress.companyName']").val();

    var sender_companyName= $("input[name='shipmentPage.senderAddress.companyName']").val();
    var sender_contactName= $("input[name='shipmentPage.senderAddress.contactName']").val();
    var sender_phone = $("input[name='shipmentPage.senderAddress.phone']").val();
    var sender_address = $("input[name='shipmentPage.senderAddress.address']").val();
    var sender_country = $("select[name='shipmentPage.senderAddress.country'] option:selected").text();
    var sender_postcode= $("input[name='shipmentPage.senderAddress.postalCode']").val();
    var sender_city= $("input[name='shipmentPage.senderAddress.city']").val();
    var sender_state = $("input[name='shipmentPage.senderAddress.state']").val();

    var rcv_state = $("input[name='shipmentPage.receiverAddress.state']").val();
    var receiver_city = $("input[name='shipmentPage.receiverAddress.city']").val();
    var rcv_phone= $("input[name='shipmentPage.receiverAddress.phone']").val();
    var rcv_company= $("input[name='shipmentPage.receiverAddress.companyName']").val();
    var rcv_contact= $("input[name='shipmentPage.receiverAddress.contactName']").val();
    var rcv_email= $("input[name='shipmentPage.receiverAddress.email']").val();
    var rcv_address= $("input[name='shipmentPage.receiverAddress.address']").val();
    var rcv_address3= $("input[name='shipmentPage.receiverAddress.address3']").val();
    var rcv_country = $("select[name='shipmentPage.receiverAddress.country'] option:selected").text();

    var quote_weight = $("input[name='shipmentPage.pieces.weight']").val();
    var quote_length= $("input[name='shipmentPage.pieces.dimensionL1']").val();
    var quote_width= $("input[name='shipmentPage.pieces.dimensionW1']").val();
    var quote_height= $("input[name='shipmentPage.pieces.dimensionH1']").val();
    var quote_quantity= $("input[name='shipmentPage.pieces.quantity1']").val();

    var postalCode = $("input[name='shipmentPage.receiverAddress.postalCode']").val();
    var servicename = $("select[name='shipmentPage.serviceId'] option:selected").text();
    var service_type_name = $("select[name='shipmentPage.shipmentTypeId'] option:selected").text();
    var package_type_name = $("select[name='shipmentPage.packageId'] option:selected").text();
    var total_amount = $('#total_charge').val(); 
    var final_amount = $('#final_charge').val();
    var surcharge_amount = $('#surcharge').val();
    var get_volume_input = $("#get_volume_input").val();
     get_volume_input = get_volume_input*250;
    
    
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/save_quote');?>",
        data:{quote_date:quote_date,customer:customer,customer_name:customer_name,sender_subrub:sender_city,sender_postcode:sender_postcode,receiver_city:receiver_city,reciver_postcode:postalCode,shipment_type:service_type_name,package_type:package_type_name,qoute_jobnumber:qoute_jobnumber,total_amount:total_amount,rcv_phone:rcv_phone,rcv_company:rcv_company,rcv_contact:rcv_contact,rcv_email:rcv_email,rcv_address:rcv_address,rcv_address3:rcv_address3,quote_weight:quote_weight,quote_length:quote_length,quote_width:quote_width,quote_height:quote_height,quote_quantity:quote_quantity,rcv_country:rcv_country,rcv_state:rcv_state,sender_state:sender_state,servicename:servicename,sender_companyName:sender_companyName,sender_contactName:sender_contactName,sender_phone:sender_phone,sender_address:sender_address,sender_country:sender_country,final_amount:final_amount,get_volume_input:get_volume_input,surcharge_amount},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){

        }
    });
}


function openForm() {
    validate_form();
    if(valid == true){
document.getElementById("myForm").style.display = "block";
var sender_postcode= $("input[name='shipmentPage.senderAddress.postalCode']").val();
var sender_city= $("input[name='shipmentPage.senderAddress.city']").val();
var stateCode1 = $("input[name='shipmentPage.senderAddress.state']").val();
var postalCode = $("input[name='shipmentPage.receiverAddress.postalCode']").val();
var stateCode = $("input[name='shipmentPage.receiverAddress.state']").val();
var serviceId = $("select[name='shipmentPage.serviceId']").val();
var rcv_city= $("input[name='shipmentPage.receiverAddress.city']").val();
var service_type_Id = $("select[name='shipmentPage.shipmentTypeId']").val();


//var weight =$("input[name='total_weight']").val();
var quantity =[$("#addr input[name='shipmentPage.pieces.quantity1']").val()];
var base_weight = $("input[name='shipmentPage.pieces.weight']").val();
var isdangerous = $("input[name='isdangerous']").val();
var length =[$("#addr input[name='shipmentPage.pieces.dimensionL1']").val()];
    length = length/100;
var dnw =[$("#addr input[name='shipmentPage.pieces.dimensionW1']").val()];
    dnw = dnw/100;
var dnh=[$("#addr input[name='shipmentPage.pieces.dimensionH1']").val()];
    dnh = dnh/100;
var quote_volume = length*dnw*dnh;
    quote_volume = quote_volume * 250;
var totalweight = $('#total_weight_input').val();  
  
var final_total=$("#final_total_input").val();
//weight = weight * quantity;
var get_volume_input = $("#get_volume_input").val();
    get_volume_input = get_volume_input;
var get_weight = $("#shipment-weight").val();
   get_weight = get_weight;

 
		
//alert(get_volume_input);
setTimeout(function()
{    
    $('#saveQuoteLog table tbody').html('');
    var html = '';
    var total ='';
    var basic_charge = '';
    var is_dangerous = '';
    var per_kg ='';
    var margin ='';
    var total_charge = '';
    var final_charge = '';
    var surcharge_name = '';
    var surcharge_price = '';
   
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
							console.log('totalweight'+totalweight);
                            console.log('get_weight'+get_weight);
                            console.log('quote_volume'+quote_volume);
							console.log('get_volume_input'+get_volume_input);
                            
                            /*if(get_weight >quote_volume && get_weight >totalweight)
                           	{
								total = (parseFloat(get_weight) * parseFloat(per_kg)) + parseFloat(basic_charge);
							}
							else if (totalweight >get_weight && totalweight >get_volume_input)
							{
								total = (parseFloat(totalweight) * parseFloat(per_kg)) + parseFloat(basic_charge);
							}
                            else  
                            {	
                                total = (parseFloat(quote_volume) * parseFloat(per_kg)) + parseFloat(basic_charge);
                            }*/

                            if(get_weight >quote_volume)
							{
								total = (parseFloat(get_weight) * parseFloat(per_kg)) + parseFloat(basic_charge);
							}
							else 
							{
								total = (parseFloat(quote_volume) * parseFloat(per_kg)) + parseFloat(basic_charge);
							}
                            
                          
						}
                        
					});
				} else {

					basic_charge='0.00';
					console.log('basic_charge'+basic_charge);
					per_kg = result.fixed_price;
					console.log('per_kg'+per_kg);
					console.log('totalweight'+totalweight);
                    console.log('get_weight'+get_weight);
                    console.log('quote_volume'+quote_volume);
                    console.log('get_volume_input'+get_volume_input);
					total =  parseFloat(get_weight) * parseFloat(per_kg);
                }
				
				html +='<tr>';
						html +='<td class="td1">Base Charge</td>';
						//html +='<td class="td2">$ '+parseFloat(total.toFixed(2))+'</td>';
					    html +='<td class="td2">$ '+total+'</td>';
						html +='</tr>';
				if(service_type_Id == 1 || service_type_Id == 2){
					
					$.each(result.charges, function(k, v) {
						if(v)
						{
							is_dangerous = v.is_dangerous;
							surcharge_name = v.surcharge_name;
							surcharge_price = v.surcharge_price;

                            console.log('quote_volume'+quote_volume);
							//total_charge = total + SUM(surcharge_price);
							total += parseFloat(surcharge_price);
						  //  alert(total_charge);
						  html +='<div class="surcharge">';
						  html +='<tr>';
							html +='<td class="td1">'+surcharge_name+'</td>';
							html +='<td class="td2">$ '+surcharge_price+'</td>';
							html +='</tr>';
							html +='</div>';
						}
					});
				}
                
				html +='<tr>';
					html +='<td colspan="2" style="background: #686BB1;padding: 1px;"></td>';
				html +='</tr>';
                if(get_weight >quote_volume )
                        {
                              
				html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(get_weight)+':00 kg(s)</td>';
				html +='</tr>';
                        }
                        else
                        {
                            html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(quote_volume)+':00 kg(s)</td>';
				html +='</tr>';
                        }

                       /* if(get_weight >quote_volume && get_weight >get_volume_input)
                        {
                              
				html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(get_weight)+':00 kg(s)</td>';
				html +='</tr>';
                        }
                      
                        else if(totalweight >get_weight && totalweight >get_volume_input)
                        {
                            html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(totalweight)+':00 kg(s)</td>';
				html +='</tr>';
                        }
                        else if(get_volume_input >quote_volume && get_volume_input >get_weight)
                        {
                            html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(get_volume_input)+':00 kg(s)</td>';
				html +='</tr>';
                        }
                        else{
                            html +='<tr>';
						html +='<td class="td1">Total weight</td>';
						html +='<td class="td2 totalweight">'+Math.round(quote_volume)+':00 kg(s)</td>';
				html +='</tr>';
                        }*/

				html +='<tr>';
						html +='<td class="td1">Weight type</td>';
						html +='<td class="td2">Actual</td>';
				html +='</tr>';
				html +='<tr>';
						html +='<td colspan="2" style="background: #005786;padding: 1px;"></td>';
				html +='</tr>';
				html +='<tr>';
						html +='<td class="td1"><b>Total Charge</b></td>';
						//html +='<td class="td2">$ '+parseFloat(total.toFixed(2))+'</td>';
                        html +='<td class="td2">$ '+total+'</td>';
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



function onListClick3(obj, isRecipient) {
    $("#company-list1").hide();
    var companyName = $(obj).find("div[data-companyName]").html();
        companyName = companyName.trim();
    var contactName = $(obj).find("div[data-contactName]").html();
        contactName = contactName.trim();
    var receiverCountry = $(obj).find("div[data-receiverCountry]").html();
        receiverCountry = receiverCountry.trim();
    var receiverCity = $(obj).find("div[data-receiverCity]").html();
        receiverCity = receiverCity.trim();
    var receiverAddress = $(obj).find("div[data-receiverAddress]").html();
        receiverAddress = receiverAddress.trim();
    var receiverPost = $(obj).find("div[data-receiverPost]").html();
        receiverPost = receiverPost.trim();
    var receiverState = $(obj).find("div[data-receiverState]").html();
        receiverState = receiverState.trim();
    var receiverAddress1 = $(obj).find("div[data-receiverAddress1]").html();
         receiverAddress1 = receiverAddress1.trim();
    var receiverPhone = $(obj).find("div[data-receiverPhone]").html();
        receiverPhone = receiverPhone.trim();
    var receiverEmail = $(obj).find("div[data-receiverEmail]").html();
        receiverEmail = receiverEmail.trim();
    if (isRecipient) 
    {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
        $("input[name='shipmentPage.receiverAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.receiverAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.receiverAddress.address2']").val(receiverAddress1);
     } 
     else
      {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
        $("input[name='shipmentPage.receiverAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.receiverAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.receiverAddress.address2']").val(receiverAddress1);

    }
}

// to show receiver details
$(document).ready(function(){
    var list ='<ul id="company-list1">';
    var customerId = '<?php echo $customers->customer_id;?>';
    $("#receiver_companyName").keyup(function(){
        
        $("#receiver-search-result").html('');
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
       url: "<?php echo base_url('customer/get_receiver');?>",
     //url: 'customers/get_receiver',
        data:'keyword='+$(this).val(),customerId:customerId,
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#receiver-search-result").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick3($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 companyName" data data-companyName="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 contactName" data-contactName="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState="'+v.state+'">'+v.state+'</div>';
                list +='<div class="col-xs-6 receiverPhone" data-receiverPhone="'+v.phone+'">'+v.phone+'</div>';
                list +='<div class="col-xs-6 receiverEmail" data-receiverEmail="'+v.email+'">'+v.email+'</div>';
                list +='<div class="col-xs-6 receiverAddress1" data-receiverAddress1="'+v.address1+'">'+v.address1+'</div>';
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='</div></li>';
        });
            list +='<ul id="company-list1" style="width:100%;">';
            
            
        }
        });
        $("#receiver-search-result").html(list);
        list='<ul id="company-list1">';
        }
        else {
            $("#receiver-search-result").hide();
            list ='';
        }
    });
});


function onListClick4(obj, isRecipient) {
    $("#contact-list1").hide();
    var companyName = $(obj).find("div[data-companyName]").html();
        companyName = companyName.trim();
    var contactName = $(obj).find("div[data-contactName]").html();
        contactName = contactName.trim();
    var receiverCountry = $(obj).find("div[data-receiverCountry]").html();
        receiverCountry = receiverCountry.trim();
    var receiverCity = $(obj).find("div[data-receiverCity]").html();
        receiverCity = receiverCity.trim();
    var receiverAddress = $(obj).find("div[data-receiverAddress]").html();
        receiverAddress = receiverAddress.trim();
    var receiverPost = $(obj).find("div[data-receiverPost]").html();
        receiverPost = receiverPost.trim();
    var receiverState = $(obj).find("div[data-receiverState]").html();
        receiverState = receiverState.trim();
    var receiverAddress1 = $(obj).find("div[data-receiverAddress1]").html();
         receiverAddress1 = receiverAddress1.trim();
    var receiverPhone = $(obj).find("div[data-receiverPhone]").html();
        receiverPhone = receiverPhone.trim();
    var receiverEmail = $(obj).find("div[data-receiverEmail]").html();
        receiverEmail = receiverEmail.trim();
    if (isRecipient) 
    {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
        $("input[name='shipmentPage.receiverAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.receiverAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.receiverAddress.address2']").val(receiverAddress1);
     } 
     else
      {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
        $("input[name='shipmentPage.receiverAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.receiverAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.receiverAddress.address2']").val(receiverAddress1);

    }
}

// to show receiver details
$(document).ready(function(){
    var list ='<ul id="contact-list1">';

    $("#receiver_contactName").keyup(function(){
        
        $("#receiver-contact-result").html('');
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
       url: "<?php echo base_url('customer/get_contact_name');?>",
     //url: 'customers/get_receiver',
        data:'keyword='+$(this).val(),
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#receiver-contact-result").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick4($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 contactName" data-contactName="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 companyName" data data-companyName="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState="'+v.state+'">'+v.state+'</div>';
                list +='<div class="col-xs-6 receiverPhone" data-receiverPhone="'+v.phone+'">'+v.phone+'</div>';
                list +='<div class="col-xs-6 receiverEmail" data-receiverEmail="'+v.email+'">'+v.email+'</div>';
                list +='<div class="col-xs-6 receiverAddress1" data-receiverAddress1="'+v.address1+'">'+v.address1+'</div>';
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='</div></li>';
        });
            list +='<ul id="contact-list1" style="width:100%;">';
            
            
        }
        });
        $("#receiver-contact-result").html(list);
        list='<ul id="contact-list1">';
        }
        else {
            $("#receiver-contact-result").hide();
            list ='';
        }
    });
});


function onListClick5(obj, isRecipient) {
    $("#contact-list").hide();
    var companyName = $(obj).find("div[data-companyName]").html();
        companyName = companyName.trim();
    var contactName = $(obj).find("div[data-contactName]").html();
        contactName = contactName.trim();
    var receiverCountry = $(obj).find("div[data-receiverCountry]").html();
        receiverCountry = receiverCountry.trim();
    var receiverCity = $(obj).find("div[data-receiverCity]").html();
        receiverCity = receiverCity.trim();
    var receiverAddress = $(obj).find("div[data-receiverAddress]").html();
        receiverAddress = receiverAddress.trim();
    var receiverPost = $(obj).find("div[data-receiverPost]").html();
        receiverPost = receiverPost.trim();
    var receiverState = $(obj).find("div[data-receiverState]").html();
        receiverState = receiverState.trim();
    var receiverAddress1 = $(obj).find("div[data-receiverAddress1]").html();
         receiverAddress1 = receiverAddress1.trim();
    var receiverPhone = $(obj).find("div[data-receiverPhone]").html();
        receiverPhone = receiverPhone.trim();
    var receiverEmail = $(obj).find("div[data-receiverEmail]").html();
        receiverEmail = receiverEmail.trim();
    if (isRecipient) 
    {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.senderAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState);
        $("input[name='shipmentPage.senderAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.senderAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.senderAddress.address2']").val(receiverAddress1);
     } 
     else
      {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName);
        $("select[name='shipmentPage.senderAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState);
        $("input[name='shipmentPage.senderAddress.phone']").val(receiverPhone);
        $("input[name='shipmentPage.senderAddress.email']").val(receiverEmail);
        $("input[name='shipmentPage.senderAddress.address2']").val(receiverAddress1);

    }
}

// to show receiver details
$(document).ready(function(){
    var list ='<ul id="contact-list">';

    $("#sender_contactName").keyup(function(){
        
        $("#sender-contact-result").html('');
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
       url: "<?php echo base_url('customer/get_contact_name');?>",
     //url: 'customers/get_receiver',
        data:'keyword='+$(this).val(),
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#sender-contact-result").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick5($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 contactName1" data-contactName="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 companyName1" data data-companyName="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress2" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverCity1" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverPost1" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState1" data-receiverState="'+v.state+'">'+v.state+'</div>';
                list +='<div class="col-xs-6 receiverPhone" data-receiverPhone="'+v.phone+'">'+v.phone+'</div>';
                list +='<div class="col-xs-6 receiverEmail" data-receiverEmail="'+v.email+'">'+v.email+'</div>';
                list +='<div class="col-xs-6 receiverAddress1" data-receiverAddress1="'+v.address1+'">'+v.address1+'</div>';
                list +='<div class="col-xs-6 receiverCountry1" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='</div></li>';
        });
            list +='<ul id="contact-list" style="width:100%;">';
            
      }
        });
        $("#sender-contact-result").html(list);
        list='<ul id="contact-list">';
        }
        else {
            $("#sender-contact-result").hide();
            list ='';
        }
    });
});

//To show contact name
function onListClick2(obj, isSend) {
    $("#company-list").hide();
    var companyName1 = $(obj).find("div[data-companyName1]").html();
        companyName1 = companyName1.trim();
    var contactName1 = $(obj).find("div[data-contactName1]").html();
        contactName1 = contactName1.trim();
    var receiverCountry1 = $(obj).find("div[data-receiverCountry1]").html();
        receiverCountry1 = receiverCountry1.trim();
    var receiverCity1 = $(obj).find("div[data-receiverCity1]").html();
        receiverCity1 = receiverCity1.trim();
    var receiverAddress1 = $(obj).find("div[data-receiverAddress1]").html();
        receiverAddress1 = receiverAddress1.trim();
    var receiverPost1 = $(obj).find("div[data-receiverPost1]").html();
        receiverPost1 = receiverPost1.trim();
    var receiverState1 = $(obj).find("div[data-receiverState1]").html();
        receiverState1 = receiverState1.trim();
    var receiverAddress1 = $(obj).find("div[data-receiverAddress1]").html();
         receiverAddress1 = receiverAddress1.trim();
    var receiverPhone1 = $(obj).find("div[data-receiverPhone1]").html();
        receiverPhone1 = receiverPhone1.trim();
    var receiverEmail1 = $(obj).find("div[data-receiverEmail1]").html();
        receiverEmail1 = receiverEmail1.trim();
    if (isSend) 
    {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName1);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName1);
        $("select[name='shipmentPage.senderAddress.country']").val(receiverCountry1);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress1);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost1);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState1);
        $("input[name='shipmentPage.senderAddress.phone']").val(receiverPhone1);
        $("input[name='shipmentPage.senderAddress.email']").val(receiverEmail1);
        $("input[name='shipmentPage.senderAddress.address2']").val(receiverAddress1);
     } 
     else
      {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName1);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName1);
        $("select[name='shipmentPage.senderAddress.country']").val(receiverCountry1);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress1);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost1);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState1);
        $("input[name='shipmentPage.senderAddress.phone']").val(receiverPhone1);
        $("input[name='shipmentPage.senderAddress.email']").val(receiverEmail1);
        $("input[name='shipmentPage.senderAddress.address2']").val(receiverAddress1);

    }
}

// to show receiver details
$(document).ready(function(){
    var list ='<ul id="company-list">';

    $("#sender-companyName").keyup(function(){

         $("#sender-search-result").html('');
        
        if($(this).val().length>2)
        {
        $.ajax({
        type: "POST",
       url: "<?php echo base_url('customer/get_receiver');?>",
     //url: 'customers/get_receiver',
        data:'keyword='+$(this).val(),
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result= JSON.parse(data);
            console.log(result);
            $("#sender-search-result").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick2($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 companyName" data data-companyName1="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 contactName" data-contactName1="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress1="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity1="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost1="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState1="'+v.state+'">'+v.state+'</div>';
                list +='<div class="col-xs-6 receiverPhone" data-receiverPhone1="'+v.phone+'">'+v.phone+'</div>';
                list +='<div class="col-xs-6 receiverEmail" data-receiverEmail1="'+v.email+'">'+v.email+'</div>';
                list +='<div class="col-xs-6 receiverAddress1" data-receiverAddress1="'+v.address1+'">'+v.address1+'</div>';
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry1="'+v.country+'">'+v.country+'</div></br>';
                list +='</div></li>';
        });
            list +='<ul id="company-list" style="width:100%;">';
            
            
        }
        });
        $("#sender-search-result").html(list);
        list='<ul id="company-list">';
        }
        else {
            $("#sender-search-result").hide();
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
				l/= 100;
				var p = $(this).find('input.width').val();
				p/= 100;
				var h = $(this).find('input.height').val();
				h/= 100;

				var dateTotal = (l * p * h);
                dateTotal =dateTotal * 250;
				//dateTotal = parseFloat(dateTotal.toFixed(3));
				//$(this).find('input.row-total').val(dateTotal ? dateTotal : "0.000");
				//dateTotal = (dateTotal * q);
                wt =isNumber(w) ? parseFloat(w, 10) : 0;
				lt += isNumber(q) ? parseInt(q, 10) : 0;
				tt += isNumber(dateTotal) ? dateTotal : 0;
				weight_total += isNumber(w) ? parseFloat(w, 10) : 0;
                
                 var kg= $('#service_kg').val();
                console.log('kg'+kg);
                if(weight_total)
                {
                if( kg!='' && weight_total > kg)
                {
                    $('.myerror').remove();
                    $(this).find('input.weight').css({ "border": "1px solid red" });
                    $(this).find('input.weight').parent().append('<span class="myerror">Weight must be less than or equal to' + kg);
            
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
                
                 $("#shipment-weight").html(wt.toFixed(2));
		    	$("#total_weight_input").html(weight_total.toFixed(2));
               // var kg= $('#total_weight_input').val();
                var wght= weight_total;


		    	//$("#get_volume").html(tt.toFixed(3));
			    $("#final_total_input").val(lt);
			    $("#total_weight_input").val(weight_total.toFixed(2));
               //$("#total_weight_input").val(weight_total);
			    $("#get_volume_input").val(tt.toFixed(3));
		}


       
		function addRow() 
		{

    	$('#addr' + numRows).html("<td class='sno'>1</td><td width='10%'><input type='number' name='shipmentPage.pieces.weight1' maxlength='6' value='' required id='shipment-weight' class='form-control alloptions weight' onkeypress='return isNum(event)' oninput='maxLengthCheck(this)' min='1'></td><td width='40%'><div class='row mg0'><div class='col-lg-4 pd1'> <input type='text' name='shipmentPage.pieces.dimensionL1' required class='form-control alloptions dimL length' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4'></div><div class='col-lg-4 pd1'><input type='text' name='shipmentPage.pieces.dimensionW1' value='' required class='form-control alloptions dimW width' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1'></div><div class='col-lg-4 pd1'><input type='text' name='shipmentPage.pieces.dimensionH1' value='' required class='form-control alloptions dimH height' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1' ></div></div></td> <td><input type='text' name='shipmentPage.pieces.quantity1' value='1' id='shipment-info-form_shipmentPage_pieces_0__quantity' class='form-control quantity' required onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='10' min='1'></td><td><input type='button' value='&times;' class='del'></td>");

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


document.getElementById('shipment-weight').onchange = function(){
      if(this.value > 5000)
          alert('The maximum allowed weight is 5000Kg');
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
    input.value = '';
    input1.value = '';
    input2.value = '';
  }, false);
      

  /*$(function() {
    $("select").change(function() {        
        var selectValue=document.getElementById("shipmentPage_shipmentTypeId").value
       // alert(selectValue);
        if (selectValue == 3) {
           // $(".extra_field_input input").show();
            $(".surcharge").hide();
        } else {
            //$(".extra_field_input input").hide();
            $(".surcharge").show();
        };
    });
});*/
    </script>
<style>


#contact-list1{
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 93%;
    position: absolute;
    z-index: 9;
}

#contact-list{
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 93%;
    position: absolute;
    z-index: 9;
}

#company-list1 {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 93%;
    position: absolute;
    z-index: 9;
}

#company-list {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 93%;
    position: absolute;
    z-index: 9;
}

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
#country-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid; }
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


.col-xs-6.receiverState1 {
    display: none;
}

.col-xs-6.receiverEmail1 {
    display: none;
}

.col-xs-6.receiverPhone1 {
    display: none;
}

.col-xs-6.receiverState {
    display: none;
}

.col-xs-6.receiverEmail {
    display: none;
}

.col-xs-6.receiverPhone {
    display: none;
}

.col-xs-6.receiverAddress1 {
    display: none;
}
#company-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid; font-size: 11px; padding: 4px 0px 10px 6px}
#company-list1 li:hover{background:#ece3d2;cursor: pointer;}

#company-list li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid; font-size: 11px; padding: 4px 0px 10px 6px}
#company-list li:hover{background:#ece3d2;cursor: pointer;}

#contact-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid; font-size: 11px; padding: 4px 0px 10px 6px}
#contact-list1 li:hover{background:#ece3d2;cursor: pointer;}

#contact-list li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid; font-size: 11px; padding: 4px 0px 10px 6px}
#contact-list li:hover{background:#ece3d2;cursor: pointer;}

</style>