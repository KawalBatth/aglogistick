
<form id="form_booking" name="form_booking">
<input type="hidden" name="customerCode" id="customerCode" value="<?php echo $customers->customer_id;?>">
    <input type="hidden" name="shipmentRequestModelGson" value="{&quot;shipmentInfo&quot;:{&quot;senderAddress&quot;:{&quot;companyName&quot;:&quot;AGL SPECIALISED LOGISTICS&quot;,&quot;phone&quot;:&quot;0894793399&quot;,&quot;contactName&quot;:&quot;WAYNE ENNIS&quot;,&quot;email&quot;:&quot;wayne@agllogistics.com&quot;,&quot;country&quot;:&quot;12&quot;,&quot;address&quot;:&quot;UNIT 1 / 11 FRICKER ROAD&quot;,&quot;address2&quot;:&quot;PERTH AIRPORT&quot;,&quot;address3&quot;:&quot;&quot;,&quot;alternateUserName&quot;:&quot;&quot;,&quot;city&quot;:&quot;PERTH airport&quot;,&quot;postalCode&quot;:&quot;6105&quot;,&quot;state&quot;:&quot;WA&quot;},&quot;receiverAddress&quot;:{&quot;companyName&quot;:&quot;toll&quot;,&quot;phone&quot;:&quot;8888888888&quot;,&quot;contactName&quot;:&quot;toll&quot;,&quot;email&quot;:&quot;&quot;,&quot;country&quot;:&quot;12&quot;,&quot;address&quot;:&quot;88&quot;,&quot;address2&quot;:&quot;&quot;,&quot;address3&quot;:&quot;&quot;,&quot;city&quot;:&quot;MELBOURNE&quot;,&quot;postalCode&quot;:&quot;8001&quot;,&quot;state&quot;:&quot;&quot;},&quot;serviceId&quot;:&quot;72&quot;,&quot;shipmentTypeId&quot;:&quot;229&quot;,&quot;contentType&quot;:&quot;WPX&quot;,&quot;pieces&quot;:[{&quot;weight&quot;:&quot;67.00&quot;,&quot;dimensionL&quot;:&quot;67.00&quot;,&quot;dimensionW&quot;:&quot;67.00&quot;,&quot;dimensionH&quot;:&quot;67.00&quot;,&quot;customValue&quot;:&quot;0.00&quot;,&quot;quantity&quot;:&quot;1&quot;}],&quot;bound&quot;:&quot;15&quot;,&quot;isAddPiece&quot;:&quot;true&quot;,&quot;addCons&quot;:[{&quot;addConName&quot;:&quot;Dangerous Goods&quot;,&quot;addConCode&quot;:&quot;dangerousgoods&quot;,&quot;listProperties&quot;:[{&quot;addConDetailName&quot;:&quot;UN Number (4Digits)&quot;,&quot;addConDetailCode&quot;:&quot;unnumber&quot;,&quot;value&quot;:&quot;&quot;},{&quot;addConDetailName&quot;:&quot;Packing Group&quot;,&quot;addConDetailCode&quot;:&quot;packinggroup&quot;,&quot;value&quot;:&quot;1&quot;},{&quot;addConDetailName&quot;:&quot;I have a MSDS(Material Safety Data Sheet). Dangerous Goods attracts an additional surcharge.&quot;,&quot;addConDetailCode&quot;:&quot;msda&quot;}]},{&quot;addConName&quot;:&quot;Authorized to Leave (ATL)&quot;,&quot;addConCode&quot;:&quot;atl&quot;,&quot;listProperties&quot;:[{&quot;addConDetailName&quot;:&quot;Where to leave&quot;,&quot;addConDetailCode&quot;:&quot;atltoleave&quot;,&quot;value&quot;:&quot;&quot;}]},{&quot;addConName&quot;:&quot;agl Warranty&quot;,&quot;addConCode&quot;:&quot;aglWarranty&quot;,&quot;value&quot;:&quot;0&quot;}],&quot;shipperAccount&quot;:&quot;963374666&quot;,&quot;totalWeight&quot;:&quot;76.0&quot;,&quot;weightType&quot;:&quot;Dimensional&quot;,&quot;shipmentRequestPieces&quot;:[{&quot;weight&quot;:&quot;67.00&quot;,&quot;dimensionL&quot;:&quot;67.00&quot;,&quot;dimensionW&quot;:&quot;67.00&quot;,&quot;dimensionH&quot;:&quot;67.00&quot;,&quot;customValue&quot;:&quot;0.00&quot;,&quot;deadWeight&quot;:&quot;75.19&quot;,&quot;quantity&quot;:&quot;1&quot;}],&quot;dutiesBillTo&quot;:&quot;0&quot;,&quot;dutiesAccount&quot;:&quot;&quot;,&quot;billingParty&quot;:&quot;0&quot;,&quot;packageId&quot;:&quot;3&quot;,&quot;shipmentDate&quot;:&quot;21-04-2021&quot;,&quot;contents&quot;:&quot;1&quot;,&quot;weightUnit&quot;:&quot;KG&quot;,&quot;dimensionUnit&quot;:&quot;CM&quot;,&quot;currencyCode&quot;:&quot;AUD&quot;,&quot;totalCustomValue&quot;:&quot;0.00&quot;,&quot;zone&quot;:&quot;&quot;},&quot;quote&quot;:{&quot;baseCharge&quot;:&quot;414.22&quot;,&quot;carrierCharge&quot;:&quot;414.22&quot;,&quot;accessorial&quot;:[{&quot;accessorialId&quot;:&quot;526&quot;,&quot;code&quot;:&quot;Security Surcharge&quot;,&quot;description&quot;:&quot;Security Surcharge&quot;,&quot;typeId&quot;:&quot;2&quot;,&quot;value&quot;:&quot;15.95&quot;,&quot;valueCurrency&quot;:&quot;$ 15.95&quot;},{&quot;accessorialId&quot;:&quot;528&quot;,&quot;code&quot;:&quot;Fuel Surcharge&quot;,&quot;description&quot;:&quot;Fuel Surcharge&quot;,&quot;typeId&quot;:&quot;2&quot;,&quot;value&quot;:&quot;57.99&quot;,&quot;valueCurrency&quot;:&quot;$ 57.99&quot;},{&quot;code&quot;:&quot;GST&quot;,&quot;description&quot;:&quot;GST&quot;,&quot;value&quot;:&quot;48.82&quot;,&quot;valueCurrency&quot;:&quot;$ 48.82&quot;}],&quot;totalCharge&quot;:&quot;536.98&quot;,&quot;totalCustomValue&quot;:&quot;0.00&quot;,&quot;weight&quot;:&quot;76.00 kgs&quot;,&quot;weightType&quot;:&quot;Dimensional&quot;,&quot;nonStandardCharge&quot;:&quot;0.00&quot;,&quot;manualHandlingSurcharge&quot;:0.0,&quot;insuranceValue&quot;:&quot;0.00&quot;,&quot;baseChargeUnit&quot;:&quot;$ 414.22&quot;,&quot;totalChargeUnit&quot;:&quot;$ 536.98&quot;},&quot;shipmentReference&quot;:&quot;&quot;}" id="shipmentRequestModelGson">
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
                                Shipment
                            </div>
                            <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <table class="table s99" style="font-size: 13px; margin-bottom: 0px">
                                                <tbody><tr>
                                                    <td class="td1">Carrier Name</td>
                                                    <td class="td2"><?php echo $get_carrier->carrier_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="td1">Service Type</td>
                                                    <td class="td2"><?php echo $get_service->service_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="td1">Package Type</td>
                                                    <td class="td2">Customer packaging</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                        <div class="col-md-4">
                                            <table class="table s99" style="font-size: 13px;">
                                                <tbody><tr>
                                                    <td class="td1">Weight</td>
                                                    <td class="td2"><?php echo $result['total_weight']; ?> <?php echo $result['shipmentPage.weightUnit']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="td1">Dimensions</td>
                                                    <td class="td2"> 
                                                    
                                                  
                                                    <?php if(!empty($result['shipmentPage.pieces.dimensionL1'])){ echo $result['shipmentPage.pieces.dimensionL1']; }else{ echo 0; } ?> x <?php if(!empty($result['shipmentPage.pieces.dimensionW1'])){ echo $result['shipmentPage.pieces.dimensionW1']; }else{ echo 0; } ?> x   <?php if(!empty($result['shipmentPage.pieces.dimensionH1'])){ echo $result['shipmentPage.pieces.dimensionH1']; }else{ echo 0; } ?>
                                                         <br>
                                                       
                                                   </td>
                                                </tr>
                                            </tbody></table>
                                        </div>

                                       
                                        <div class="col-md-4">
											<?php $base_charge = 0;
											if(!empty($surcharge['base_charge'])){ 
												$basic_charge = $surcharge['base_charge'][0]['basic_charge'];
												$per_kg       = $surcharge['base_charge'][0]['per_kg'];
												$base_charge  = $result['total_weight']*$per_kg+$basic_charge;
												$quote_value  = $result['total_weight']*$per_kg+$basic_charge;
											} 
                                           
											?>
											<table class="table s99" style="font-size: 13px;">
												<?php if(!empty($surcharge['charges'])){
													foreach($surcharge['charges'] as $char){ 
														$quote_value += $char['surcharge_price'];
													}
                                                   
                                                }
                                               
												?>
												<tbody>
													<tr>
														<td class="td1">Quote</td>
														<td class="td2">$ <?php echo $quote_value; ?><br>
															<i><u> (Quote is an estimate. Additional fees may apply.)</u></i>
														</td>
													</tr>
												</tbody>
											</table>
                                        </div>
                                        <div class="col-md-12 pd0">
                                            <div class="col-md-12">
                                                <h4 class="s34">
                                                    <u><span style="cursor: pointer;" class="clicks a_more_detail">More Details:</span></u>
                                                </h4>
                                            </div>
                                            <div class="col-md-6 sd1 div_more_detail" style="display: none;">
                                                
                                                    <table class="table s99" style="font-size: 13px;">
                                                        <tbody>
															<tr>
																<td class="td1 s39" style="font-style: italic; text-decoration: underline;">
																	Quote Details:</td>
																<td class="td2"></td>
															</tr>
															<tr>
																<td class="td1 s40 ncl">- Base Charge</td>
																<td class="td2">$ <?php echo $base_charge; ?></td>
															</tr>
															<?php if(!empty($surcharge['charges'])){
																	foreach($surcharge['charges'] as $charges){ 
																	$base_charge += $charges['surcharge_price'];
																?>
																	<tr>
                                                               
																		<td class="td1 s40 ncl">- <?php echo $charges['surcharge_name']; ?></td>
																		<td class="td2">$ <?php echo $charges['surcharge_price']; ?></td>
																	</tr>	
																<?php	}
																}
															?>
															
															<tr>
																<td class="td1 s41 ncl">- Total Charge</td>
																<td class="td2">$ <?php echo $base_charge; ?></td>
															</tr>
                                                        </tbody>
                                                    </table>
                                                
                                            </div>
                                            <div class="col-md-6 sd1 div_more_detail" style="display: none;">
                                                <table class="table s99" style="font-size: 13px;">
                                                    <tbody>
                                                    <tr>
                                                        <td class="td1" style="font-style: italic; text-decoration: underline;">
                                                            Sender Address:</td>
                                                        <td class="td2"><?php echo $result['shipmentPage.senderAddress.companyName']; ?>
                                                        <?php echo $result['shipmentPage.senderAddress.contactName']; ?>
                                                        <?php echo $result['shipmentPage.senderAddress.address']; ?>
                                                        <?php echo $result['shipmentPage.senderAddress.address2']; ?>
                                                            
                                                        <?php echo $result['shipmentPage.senderAddress.postalCode']; ?>  
                                                        <?php echo $result['shipmentPage.senderAddress.city']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table s99" style="font-size: 13px; margin-bottom: 0px">
                                                    <tbody><tr>
                                                        <td class="td1" style="font-style: italic; text-decoration: underline;">
                                                            Receiver Address:</td>
                                                        <td class="td2"><?php echo $result['shipmentPage.receiverAddress.companyName']; ?>
                                                        <?php echo $result['shipmentPage.receiverAddress.contactName']; ?>
                                                        <?php echo $result['shipmentPage.receiverAddress.address']; ?>
                                                        <?php echo $result['shipmentPage.receiverAddress.address2']; ?>
                                                        <?php echo $result['shipmentPage.receiverAddress.postalCode']; ?>  
                                                        <?php echo $result['shipmentPage.receiverAddress.city']; ?>
                                                            </td>
                                                    </tr>
                                                </tbody></table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Additional Detail
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
                                            <div class="form-group">
                                                <label class="control-label tdd" for="inputName" data-label="Content Description"> Content Description <span class="s30"> *</span>
                                                </label>
                                                  <input type="text" name="contentDescription" maxlength="30" value="" id="form_booking_shipmentRequestModel_contentDetail_description" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Please limit content descriptions to 30 characters." required="required">
                                             </div>
                                            <div class="form-group">
                                                <label class="control-label tdd" for="inputName" data-label="Billing/Customer Reference"> Billing/Customer Reference <span class="s30"> *</span>
                                                </label>
                                                <input type="text" name="shipmentReference" required value="" id="form_booking_shipmentRequestModel_shipmentReference" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputName"> Special Delivery Instructions
                                                </label>
                                                <textarea name="specialDelivery" cols="" rows="" id="form_booking_shipmentRequestModel_shipmentInfo_specialDelivery" class="form-control"></textarea>
                                            </div>
											<div class="form-group">
												<label class="control-label tdd" for="inputName" data-label="Collection Reference No."> Collection Reference No. <span class="s30"> *</span>
												</label>
												<input type="text" name="collectionReference" required value="" id="form_booking_shipmentRequestModel_collectionReference" class="form-control" required="required">
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Collection Details
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
            <div class="form-group">
                <label class="control-label" for="inputName"> Option <span class="s30">*</span>
                </label>
                <select name="scheduleCollectionSelect" id="ws-schedule-collection-select" class="form-control" onchange="onScheduleCollectionChange()" required="required">
    <option value="0">Select a Collection Option</option>
    <option value="1">Book this collection now</option>
    <option value="2">I already have a collection scheduled.</option>
    <option value="3">I will book my collection later.</option>
    <option value="4">I have a daily collection.</option>
    <option value="5">I am going to drop off my package(s).</option>


</select>

            </div>
        </div>
        <div id="ws-schedule-collection-div" style="display: none;">
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="control-label" for="inputName"> Company <span class="s30">*</span>
                    </label>
                    <input type="text" name="scheduleCollectioncompanyName" required maxlength="25" value="<?php echo $customers->customerName;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_companyName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Contact Name <span class="s30">*</span>
                    </label>
                    <input type="text" name="scheduleCollectionContactName" maxlength="25" required value="<?php echo $customers->contact_name;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_contactName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                    </label>
                    <input type="text" name="scheduleCollectionAddress" maxlength="25" required value="<?php echo $customers->address;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address line 1">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Address 2
                    </label>
                    <input type="text" name="scheduleCollectionAddress2" maxlength="25" value="<?php //echo $customers->customerName;?>T" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address line 2">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> City <span class="s30">*</span>
                    </label>
                    <input type="text" name="scheduleCollectionCity" maxlength="25" required value="<?php echo $customers->city;?>" id="city" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City">
               </div>
            </div>
          
            <div class="col-lg-7">
                <div class="form-group">
                    <label class="control-label" for="inputName"> Phone<span class="s30"> *</span>
                    </label>
                    <input type="text" name="scheduleCollectionPhone" maxlength="25" required value="<?php echo $customers->phone;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Postal Code
                    </label>
                    <input type="text" name="scheduleCollectionpostalCode" maxlength="25" required value="<?php echo $customers->postal_code;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_postalCode" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal code">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> State/Province
                    </label>
                    <input type="text" name="scheduleCollectionstate" maxlength="25" value="<?php echo $customers->state_code;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_state" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:State\/Province">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label class="control-label" for="inputName"> Ready Time (DD-MM-YYYY)
                        </label>

                        <div class="form-group input-group">
							<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
							</span>
                            <input type="text" name="scheduleCollectionPickupDate" value="<?php echo date('Y-m-d');?>" readonly="readonly" id="form_booking_shipmentRequestModel_scheduleCollection_pickupDate" class="form-control form_datetime schedule-time" data-date-format="dd MM yyyy">
                     </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <div class="sa"><a href="//24timezones.com/South-Australia/time" style="text-decoration: none" class="clock24" id="tz24-1619079550-ad16135-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="Current time in South Australia" target="_blank" rel="nofollow">South Australia</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>

<div class="nsw"><a href="//24timezones.com/Sydney/time" style="text-decoration: none" class="clock24" id="tz24-1619079518-c1240-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="Clock - Sydney" target="_blank" rel="nofollow">Sydney</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>

<div class="wa"><a href="//24timezones.com/Perth/time" style="text-decoration: none" class="clock24" id="tz24-1619079574-c1196-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="Perth local time" target="_blank" rel="nofollow">Perth</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>

<div class="tas"><a href="//24timezones.com/Tasmania/time" style="text-decoration: none" class="clock24" id="tz24-1619079654-ad16138-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="timezone - Tasmania" target="_blank" rel="nofollow">Tasmania</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>

<div class="vic"><a href="//24timezones.com/State-of-Victoria/time" style="text-decoration: none" class="clock24" id="tz24-1619078892-ad16137-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="local time in Victoria" target="_blank" rel="nofollow">Victoria</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>

<div class="qld"><a href="//24timezones.com/Queensland/time" style="text-decoration: none" class="clock24" id="tz24-1619079735-ad16139-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIwIiwic2hvd3NlY29uZHMiOiIwIiwic2hvd3RpbWV6b25lIjoiMSIsInR5cGUiOiJkIiwibGFuZyI6ImVuIn0=" title="Queensland time zone" target="_blank" rel="nofollow">Queensland</a>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script></div>
                            <select name="scheduleCollectionPickupTime" id="sel-pickup-time" class="form-control">
    <option value="06:00:00">6:00 AM</option>
    <option value="06:30:00">6:30 AM</option>
    <option value="07:00:00">7:00 AM</option>
    <option value="07:30:00">7:30 AM</option>
    <option value="08:00:00">8:00 AM</option>
    <option value="08:30:00">8:30 AM</option>
    <option value="09:00:00">9:00 AM</option>
    <option value="09:30:00">9:30 AM</option>
    <option value="10:00:00">10:00 AM</option>
    <option value="10:30:00">10:30 AM</option>
    <option value="11:00:00">11:00 AM</option>
    <option value="11:30:00">11:30 AM</option>
    <option value="12:00:00">12:00 PM</option>
    <option value="12:30:00">12:30 PM</option>
    <option value="13:00:00">1:00 PM</option>
    <option value="13:30:00">1:30 PM</option>
    <option value="14:00:00">2:00 PM</option>
    <option value="14:30:00">2:30 PM</option>
    <option value="15:00:00">3:00 PM</option>
    <option value="15:30:00">3:30 PM</option>
    <option value="16:00:00">4:00 PM</option>
    <option value="16:30:00">4:30 PM</option>
    <option value="17:00:00">5:00 PM</option>
    <option value="17:30:00">5:30 PM</option>
    <option value="18:00:00">6:00 PM</option>
    <option value="18:30:00">6:30 PM</option>
    <option value="19:00:00">7:00 PM</option>
    <option value="19:30:00">7:30 PM</option>
    <option value="20:00:00">8:00 PM</option>
    <option value="20:30:00">8:30 PM</option>
    <option value="21:00:00">9:00 PM</option>
    <option value="21:30:00">9:30 PM</option>
    <option value="22:00:00">10:00 PM</option>
    <option value="22:30:00">10:30 PM</option>
    <option value="23:00:00">11:00 PM</option>
    <option value="23:30:00">11:30 PM</option>


</select>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for="inputName"> Close Time
                            </label>
                            <select name="scheduleCollectionPickupTimeNoLater" id="sel-pickup-nolater" class="form-control">
    <option value="06:00:00">6:00 AM</option>
    <option value="06:30:00">6:30 AM</option>
    <option value="07:00:00">7:00 AM</option>
    <option value="07:30:00">7:30 AM</option>
    <option value="08:00:00">8:00 AM</option>
    <option value="08:30:00">8:30 AM</option>
    <option value="09:00:00">9:00 AM</option>
    <option value="09:30:00">9:30 AM</option>
    <option value="10:00:00">10:00 AM</option>
    <option value="10:30:00">10:30 AM</option>
    <option value="11:00:00">11:00 AM</option>
    <option value="11:30:00">11:30 AM</option>
    <option value="12:00:00">12:00 PM</option>
    <option value="12:30:00">12:30 PM</option>
    <option value="13:00:00">1:00 PM</option>
    <option value="13:30:00">1:30 PM</option>
    <option value="14:00:00">2:00 PM</option>
    <option value="14:30:00">2:30 PM</option>
    <option value="15:00:00">3:00 PM</option>
    <option value="15:30:00">3:30 PM</option>
    <option value="16:00:00">4:00 PM</option>
    <option value="16:30:00">4:30 PM</option>
    <option value="17:00:00">5:00 PM</option>
    <option value="17:30:00">5:30 PM</option>
    <option value="18:00:00">6:00 PM</option>
    <option value="18:30:00">6:30 PM</option>
    <option value="19:00:00">7:00 PM</option>
    <option value="19:30:00">7:30 PM</option>
    <option value="20:00:00">8:00 PM</option>
    <option value="20:30:00">8:30 PM</option>
    <option value="21:00:00">9:00 PM</option>
    <option value="21:30:00">9:30 PM</option>
    <option value="22:00:00">10:00 PM</option>
    <option value="22:30:00">10:30 PM</option>
    <option value="23:00:00">11:00 PM</option>
    <option value="23:30:00">11:30 PM</option>


</select>


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for="inputName"> Pickup Location
                            </label> <select name="scheduleCollectionPickupLocation" class="form-control">
                            <option value="1">Front</option>
                            <option value="2">Rear</option>
                            <option value="3">Side</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Location Code
                    </label>
                    <select name="scheduleCollectionLocationCodeId" id="form_booking_shipmentRequestModel_scheduleCollection_locationCodeId" class="form-control">
    <option value="1">Business</option>
    <option value="2">Residence</option>
    <option value="3">Business/Residence</option>


</select>


                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Location Description <span class="s30"> *</span>
                    </label>
                    <input type="text" name="scheduleCollectionDescription" required maxlength="25" value="Front Desk" id="form_booking_shipmentRequestModel_scheduleCollection_description" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Location description">
                </div>
            </div>
        </div>
    </div>
</div>
                                <div class="text-right pal pdt10">
                                <a href="<?php echo base_url('customer/shipment'); ?>" class="back"> <button class="btn s33" type="button">
                                        Back
                                    </button>
                                    <button class="btn s33 " type="button" onclick="saveNewBooking()">
                                        Ship
                                    </button>
                                </div>
                            </div>
                            <div class="chat-form s11"></div>
                        </div>
                    </div>
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
        //width: "500px",
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
<div id="result_booking" title="Booking Result"></div>
<div id="webship_booking_send_airbill_dialog" title="Send Airbill"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.schedule-time').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy'
        });
        $(".schedule-time").datetimepicker("update", $("#shipment-date-input").val());
        setdefaulttime();
        onScheduleCollectionChange();
    });

    function onScheduleCollectionChange() {
        var scheduleCollectionType = $("#ws-schedule-collection-select option:selected").val();
        if (scheduleCollectionType == 1) {
            $("#ws-schedule-collection-div").show();
        } else {
            $("#ws-schedule-collection-div").hide();
        }
    }


</script>




    <script>  

    function saveNewBooking() {
      
     var formdata = $("#form_booking").serialize();
     //var customer = '<?php //echo $customers->customer_id;?>';
    console.log(formdata);
    $.ajax({
      /*var isfromsubmitvalue = true;
      var html='';
      $('#address_book_add input').each(function()
      {

              if($(this).prop('required') && $(this).val()=='')
              {
                    alertDialog.dialog("open");  
                    
                if(!$(this).parent().parent().find('.control-label').attr('data-label'))
                    {
                        html +=$(this).parent().parent().find('.control-label').html()+' cannot be empty <br/>';  
                    }
                    else {
                      html +=$(this).parent().parent().find('.control-label').attr('data-label')+' cannot be empty <br/>';
                    }
                    isfromsubmit = false;
                    alertDialog.html(html);               
              }
             
      });*/
     
             url: 'customers/add_booking',
             type: 'POST',
             data:formdata,
            // data:{customer:customer,formdata},
    
             error: function() {
                alert('Something is wrong');
             },
             success: function(res) {
                location.reload();
             }
          });
      }
 


$('#city').keyup(function() {
  
  // If value is not empty
  if ($(this).val() == "NT") {
    // Hide the element
    $('.sa').show();
      $('.nsw').hide();
        $('.wa').hide();
          $('.tas').hide();
            $('.qld').hide();
              $('.vic').hide();
   
  }
 else if ($(this).val() == "NSW") {
    // Hide the element
    $('.nsw').show();
      $('.sa').hide();
        $('.wa').hide();
          $('.tas').hide();
            $('.qld').hide();
              $('.vic').hide();
  }
  else if ($(this).val() == "WA") {
    // Hide the element
    $('.wa').show();
      $('.sa').hide();
       $('.syd').hide();
         $('.tas').hide();
           $('.qld').hide();
             $('.vic').hide();
  }
    else if ($(this).val() == "TAS") {
    // Hide the element
    $('.tas').show();
      $('.sa').hide();
       $('.nsw').hide();
         $('.wa').hide();
           $('.qld').hide();
             $('.vic').hide();
  }
  
  else if ($(this).val() == "VIC") {
    // Hide the element
     $('.vic').show();
      $('.sa').hide();
       $('.nsw').hide();
         $('.wa').hide();
          $('.tas').hide();
           $('.qld').hide();
  }
  
    else if ($(this).val() == "QLD") {
    // Hide the element
     $('.qld').show();
      $('.vic').hide();
       $('.sa').hide();
        $('.nsw').hide();
         $('.wa').hide();
          $('.tas').hide();
  }
  else {
    // Otherwise show it
    $('.nsw').hide();
     $('.sa').hide();
      $('.wa').show();
       $('.tas').hide();
        $('.vic').hide();
        $('.qld').hide();
  } 
}).keyup();
    function changeCollectionType(type) {
        var data = {
            'shipmentRequestModelGson': $("#shipmentRequestModelGson").val(),
            scheduleCollectionsType: type
        };
        doPostDataByParameters("get-schedule-collection-input.ix?reqType=json", data, "", "schedule-collection-input", true);
    }
    $(document).ready(function () {
        $(".div_more_detail").hide();
        $(".civ_generate").hide();
        $("#pickup-date").datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy'
        });
        $("#pickup-date").datetimepicker("update", new Date());
        $("[data-toggle='tooltip'], [data-hover='tooltip']").tooltip();
        $('input.alloptions').maxlength({
            alwaysShow: true,
            threshold: 10,
            warningClass: "label label-success w5",
            limitReachedClass: "label label-danger w5",
            separator: '/',

        });
    });
    function doShip() {
        var captionList = [];
        captionList.push('View Waybill');
        captionList.push('Thermal Label');
        captionList.push('');
        captionList.push('');
        if ($("#ws-schedule-collection-select option:selected").val() != "1") {
            captionList.push('Schedule Collection');
        } else {
            captionList.push('');
        }
        captionList.push('Send Airbill');
        captionList.push('New Shipment');
        captionList.push('Re-Ship Same Package');
        captionList.push('');
        captionList.push('');
        captionList.push('View Manifest');
        var actionPost = "webship_do_ship.ix?reqType=json";
        loadDialogResultBooking(actionPost, captionList);
    }
    $(".a_more_detail").click(function () {
        $(".div_more_detail").toggle("slow");
    });


</script></div>

<div id="session_time_out_dialog" title="Message"></div>
<script src="https://webfreight.agllogistics.com:443/crm-webship/script/webship/customer/pages/webship.js"></script>
<script src="https://webfreight.agllogistics.com:443/crm-webship/script/common/common.js"></script>
<script type="text/javascript">
    var defaultCurrencyCode = "AUD";
    $(document).ready(function () {
        loadAdditionalConfig();
        loadState('sender');
        loadState('receiver');
    });
    $('body').click(function () {
        $('.sss1').hide();
    });
    function createNewShipment() {
        window.location.reload();
    }
    function getQuote() {
        $(".nonStandardPackage input[type=checkbox]").each(function() {
            $(this).val(this.checked);
        });
        loadDialogQuoteWithSessionTimeout("webship_get_quote.ix?reqType=json", "webship_save_quote.ix?reqType=json", "get-quote-dialog", "shipment-info-form", "saveQuoteLog", "Save quote", "Ok", "session_time_out_dialog",
                "Ok");

        var senderId = $("select[name='shipmentPage.senderAddress.country']").val();
        var receiverId = $("select[name='shipmentPage.receiverAddress.country']").val();
        if (senderId != 12 &&  receiverId != 12) {
            $('.ui-dialog-buttonset button:contains("Save quote")').button().hide();
        }
    }
    function changeCurrency(code) {
        if (code != defaultCurrencyCode) {
            $(".fw0:contains('Insurance')").find("input[type='checkbox']").attr("disabled", "disabled");
        } else {
            $(".fw0:contains('Insurance')").find("input[type='checkbox']").attr("disabled", false);
        }
    }
    function changeDimensionList(val, no) {
        if (val > 0) {
            var data = {
                "dimensionId": val
            };
            $.post("webship_change_dimension_type.ix?reqType=json", data, function (res) {
                if (res.errorCode == "SUCCESS") {
                    var json = res.content.trim();
                    var obj = JSON.parse(json);
                    $("input[name='shipmentPage.pieces[" + no + "].dimensionL']").val(obj.l);
                    $("input[name='shipmentPage.pieces[" + no + "].dimensionW']").val(obj.w);
                    $("input[name='shipmentPage.pieces[" + no + "].dimensionH']").val(obj.h);
                } else {
                    alertDialog.html(res.errorMsg);
                    alertDialog.dialog("open");
                }
            }).fail(function () {
                alertDialog.html('System internal error, please contact administrator.');
                alertDialog.dialog("open");
            });
        } else {
            $("input[name='shipmentPage.pieces[" + no + "].dimensionL']").val("");
            $("input[name='shipmentPage.pieces[" + no + "].dimensionW']").val("");
            $("input[name='shipmentPage.pieces[" + no + "].dimensionH']").val("");
        }
    }

    
    // Prepare for return service

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

</script>
            </div>