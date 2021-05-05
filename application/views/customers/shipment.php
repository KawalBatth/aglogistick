<div id="shipment-div">
    <div class="row mbl">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
            </div>
        </div>
        <form id="shipment-info-form" name="shipment-info-form" action="/crm-webship/webship.ix" method="post">
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

                                                    <input type="text" name="shipmentPage.senderAddress.companyName" maxlength="35" value="<?php echo $customers->customerName;?>" id="sender-companyName" class="form-control alloptions" required onkeyup="searchSenderAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" autocomplete="off">
                                                    
                                                    <div id="sender-search-result"></div>
                                                </div>
                                              <?php  // }?>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.phone" maxlength="25" pattern="08\d{8}" value="<?php echo $customers->phone;?>" id="shipment-info-form_shipmentPage_senderAddress_phone" class="form-control alloptions" data-toggle="tooltip" required data-placement="top" data-original-title="TOOLTIP:Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.contactName" maxlength="35" value="<?php echo $customers->contact_name;?>" id="sender_contactName" class="form-control alloptions" required onkeyup="searchSenderAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" autocomplete="off">
                                                    <div id="sender-contact-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.email" maxlength="50" value="<?php echo $customers->email;?>" id="shipment-info-form_shipmentPage_senderAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.senderAddress.country" required id="shipmentPage_senderAddress_country" class="form-control">
                                                    <option value="0">Select a Country</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antigua">Antigua</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="ARE">ARE</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Azores EU">Azores EU</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire">Bonaire</option>
    <option value="Bonaire,Saba &amp; Sint Eustatius">Bonaire,Saba &amp; Sint Eustatius</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="BQN">BQN</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Canary Islands, The">Canary Islands, The</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Ceuta">Ceuta</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Island">Cocos Island</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo, The Democratic Republic of">Congo, The Democratic Republic of</option>
    <option value="Congo, The Republic of">Congo, The Republic of</option>
    <option value="Congo,The Democratic Republic">Congo,The Democratic Republic</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote d'lvoire">Cote d'lvoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curacao">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic, The">Czech Republic, The</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="England EU">England EU</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="FAJ">FAJ</option>
    <option value="Falkland Islands">Falkland Islands</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guyana">French Guyana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Gaza (West Bank)">Gaza (West Bank)</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea Republic">Guinea Republic</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guinea-Equatorial">Guinea-Equatorial</option>
    <option value="Guyana (British">Guyana (British)</option>
    <option value="Haiti">Haiti</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland, Republic Of">Ireland, Republic Of</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Ivory Coast">Ivory Coast</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Republic Of">Korea, Republic Of</option>
    <option value="Korea, The D.P.R of">Korea, The D.P.R of</option>
    <option value="Kosovo">Kosovo</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao P. D. R.">Lao P. D. R.</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia, Republic of">Macedonia, Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Madeira EU">Madeira EU</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Melilla">Melilla</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic Of">Moldova, Republic Of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro, Republic of">Montenegro, Republic of</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru, Republic Of">Nauru, Republic Of</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="Netherlands, The">Netherlands, The</option>
    <option value="Nevis">Nevis</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Ireland EU">Northern Ireland EU</option>
    <option value="Northern Ireland EU">Northern Ireland EU</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="NRR">NRR</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine Authority">Palestine Authority</option>
    <option value="Palestinian National Author">Palestinian National Authority</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines, The">Philippines, The</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="PSE">PSE</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion, Island Of">Reunion, Island Of</option>
    <option value="Romania">Romania</option>
    <option value="Rota (Northern Mariana Islands)">Rota (Northern Mariana Islands)</option>
    <option value="Russian Federation, The">Russian Federation, The</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saipan">Saipan</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Scotland EU">Scotland EU</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia And Montenegro">Serbia And Montenegro</option>
    <option value="Serbia, Republic of">Serbia, Republic of</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint Maarten">Sint Maarten</option>
    <option value="SJU">SJU</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="Somaliland, Rep of (North Somalia)">Somaliland, Rep of (North Somalia)</option>
    <option value="South Africa">South Africa</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="St Barthelemy">St Barthelemy</option>
    <option value="St Kitts and Nevis">St Kitts and Nevis</option>
    <option value="St Lucia">St Lucia</option>
    <option value="St Martin">St Martin</option>
    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
    <option value="St. Eustatius">St. Eustatius</option>
    <option value="St. Kitts">St. Kitts</option>
    <option value="St. Lucia">St. Lucia</option>
    <option value="St. Maarten">St. Maarten</option>
    <option value="St. Vincent">St. Vincent</option>
    <option value="St. Vincent and the Grenadine">St. Vincent and the Grenadines</option>
    <option value="St. Barthelemy">St.Barthelemy</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tahiti">Tahiti</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Tinian (Northern Mariana Islands)">Tinian (Northern Mariana Islands)</option>
    <option value="Togo">Togo</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (US)">Virgin Islands (US)</option>
    <option value="Wales EU">Wales EU</option>
    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
    <option value="Yemen, Republic of">Yemen, Republic of</option>
    <option value="Zaire">Zaire</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select>



                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.address" maxlength="35" required value="<?php echo $customers->address;?>" id="shipment-info-form_shipmentPage_senderAddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.address2" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
                                                </div>
                                            </div>
												 <div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="shipmentPage.senderAddress.address3" maxlength="35" value="" id="shipment-info-form_shipmentPage_senderAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3">
													</div>
												</div>
												
												<div class="col-md-6"></div>
												
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="shipmentPage.isSaveSenderAddressBook" value="0" tabindex="5" type="checkbox">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="true" name="shipmentPage.residentialPickup">
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
                                                    <input type="text" name="shipmentPage.senderAddress.city" maxlength="35" value="<?php echo $customers->city;?>" id="senderAddress_city" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City" autocomplete="off">
                                                    <div id="suggesstion-box1"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.postalCode" maxlength="12" value="<?php echo $customers->postal_code;?>" id="shipment-info-form_shipmentPage_senderAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(true,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-sender-state">




<label class="control-label" for="inputName"> State/Province</label>

    
        <input type="text" name="shipmentPage.senderAddress.state" value="<?php echo $customers->state_code;?>" id="shipmentPage_senderAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
    
    

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
                                                ?>" id="receiver_companyName" required class="form-control alloptions" ondblclick="searchReceiverAddress(true)" onkeyup="searchReceiverAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company" autocomplete="off">
                                                    <div id="receiver-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                         <input type="text" name="shipmentPage.receiverAddress.phone" maxlength="25" value="<?php if(isset($addres->phone)){ echo $addres->phone; } elseif(isset($quotes->receiver_phone)){ echo $quotes->receiver_phone; } ?>" pattern="08\d{8}" id="shipment-info-form_shipmentPage_receiverAddress_phone" required class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.contactName" maxlength="35" value="<?php if(isset($addres->contact_name)){ echo $addres->contact_name; } elseif(isset($quotes->receiver_contact)){ echo $quotes->receiver_contact; }
                                                ?>" id="receiver_contactName" class="form-control alloptions" required ondblclick="searchReceiverAddress(false)" onkeyup="searchReceiverAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name" autocomplete="off">
                                                    <div id="receiver-contact-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.email" maxlength="50" value="<?php if(isset($addres->email)){ echo $addres->email; } elseif(isset($quotes->receiver_email)){ echo $quotes->receiver_email; }
                                                ?>" id="shipment-info-form_shipmentPage_receiverAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.receiverAddress.country" id="shipmentPage_receiverAddress_country" class="form-control" onchange="changeCountry('receiver')">
                                                    <option value="<?php if(isset($addres->country)){ echo $addres->country; } elseif(isset($quotes->receiver_country)){ echo $quotes->receiver_country; } ?>" <?php echo "selected"; ?>><?php if(isset($addres->country)){ echo $addres->country; } elseif(isset($quotes->receiver_country)){ echo $quotes->receiver_country; } ?></option>
                                                   
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antigua">Antigua</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="ARE">ARE</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Azores EU">Azores EU</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire">Bonaire</option>
    <option value="Bonaire,Saba &amp; Sint Eustatius">Bonaire,Saba &amp; Sint Eustatius</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="BQN">BQN</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Canary Islands, The">Canary Islands, The</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Ceuta">Ceuta</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Island">Cocos Island</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo, The Democratic Republic of">Congo, The Democratic Republic of</option>
    <option value="Congo, The Republic of">Congo, The Republic of</option>
    <option value="Congo,The Democratic Republic">Congo,The Democratic Republic</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote d'lvoire">Cote d'lvoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curacao">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic, The">Czech Republic, The</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="England EU">England EU</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="FAJ">FAJ</option>
    <option value="Falkland Islands">Falkland Islands</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guyana">French Guyana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Gaza (West Bank)">Gaza (West Bank)</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea Republic">Guinea Republic</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guinea-Equatorial">Guinea-Equatorial</option>
    <option value="Guyana (British">Guyana (British)</option>
    <option value="Haiti">Haiti</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland, Republic Of">Ireland, Republic Of</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Ivory Coast">Ivory Coast</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Republic Of">Korea, Republic Of</option>
    <option value="Korea, The D.P.R of">Korea, The D.P.R of</option>
    <option value="Kosovo">Kosovo</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao P. D. R.">Lao P. D. R.</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia, Republic of">Macedonia, Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Madeira EU">Madeira EU</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Melilla">Melilla</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic Of">Moldova, Republic Of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro, Republic of">Montenegro, Republic of</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru, Republic Of">Nauru, Republic Of</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="Netherlands, The">Netherlands, The</option>
    <option value="Nevis">Nevis</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Ireland EU">Northern Ireland EU</option>
    <option value="Northern Ireland EU">Northern Ireland EU</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="NRR">NRR</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine Authority">Palestine Authority</option>
    <option value="Palestinian National Author">Palestinian National Authority</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines, The">Philippines, The</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="PSE">PSE</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion, Island Of">Reunion, Island Of</option>
    <option value="Romania">Romania</option>
    <option value="Rota (Northern Mariana Islands)">Rota (Northern Mariana Islands)</option>
    <option value="Russian Federation, The">Russian Federation, The</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saipan">Saipan</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Scotland EU">Scotland EU</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia And Montenegro">Serbia And Montenegro</option>
    <option value="Serbia, Republic of">Serbia, Republic of</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint Maarten">Sint Maarten</option>
    <option value="SJU">SJU</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="Somaliland, Rep of (North Somalia)">Somaliland, Rep of (North Somalia)</option>
    <option value="South Africa">South Africa</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="St Barthelemy">St Barthelemy</option>
    <option value="St Kitts and Nevis">St Kitts and Nevis</option>
    <option value="St Lucia">St Lucia</option>
    <option value="St Martin">St Martin</option>
    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
    <option value="St. Eustatius">St. Eustatius</option>
    <option value="St. Kitts">St. Kitts</option>
    <option value="St. Lucia">St. Lucia</option>
    <option value="St. Maarten">St. Maarten</option>
    <option value="St. Vincent">St. Vincent</option>
    <option value="St. Vincent and the Grenadine">St. Vincent and the Grenadines</option>
    <option value="St. Barthelemy">St.Barthelemy</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tahiti">Tahiti</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Tinian (Northern Mariana Islands)">Tinian (Northern Mariana Islands)</option>
    <option value="Togo">Togo</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (US)">Virgin Islands (US)</option>
    <option value="Wales EU">Wales EU</option>
    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
    <option value="Yemen, Republic of">Yemen, Republic of</option>
    <option value="Zaire">Zaire</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>


</select>

   </div>
    </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address" maxlength="35" value="<?php if(isset($addres->address)){ echo $addres->address; } elseif(isset($quotes->receiver_address)){ echo $quotes->receiver_address; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_address" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address2" maxlength="35" value="<?php if(isset($addres->address1)){ echo $addres->address1; } elseif(isset($quotes->	receiver_address1)){ echo $quotes->receiver_address1; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
                                                </div>
                                            </div>
												 <div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="inputName"> Address 3
														</label>
														<input type="text" name="shipmentPage.receiverAddress.address3" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address3" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 3">
													</div>
												</div>
												
												<div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="shipmentPage.isSaveRecipientAddressBook" value="0" tabindex="5" type="checkbox">
                                                        &nbsp; Save to Address Book
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw0"> <input tabindex="5" type="checkbox" value="true" name="shipmentPage.residentialDelivery">
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
                                                    <input type="text" name="shipmentPage.receiverAddress.city" maxlength="35" value="<?php if(isset($addres->city)){ echo $addres->city; } elseif(isset($quotes->receiver_suburb)){ echo $quotes->receiver_suburb; } ?>" id="receiverAddress_city" class="form-control alloptions" required  data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City"  autocomplete="off">
                                                        <div id="suggesstion-box"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    
                                                  
                                                    <input type="text" name="shipmentPage.receiverAddress.postalCode" maxlength="12" value="<?php if(isset($addres->postcode)){ echo $addres->postcode; } elseif(isset($quotes->receiver_postcode)){ echo $quotes->receiver_postcode; } ?>" id="shipment-info-form_shipmentPage_receiverAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(false,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-receiver-state">




                                                    <label class="control-label" for="inputName"> State/Province</label>


    
                                                   <input type="text" name="shipmentPage.receiverAddress.state" value="<?php if(isset($addres->state)){ echo $addres->state; } elseif(isset($quotes->receiver_state)){ echo $quotes->receiver_state; } ?>" id="shipmentPage_receiverAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
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
                                                        <?php if(!empty(isset($quotes->shipment_type))){ ?>
                                                        <option value="<?php echo $quotes->shipment_type;  ?>" <?php echo "selected" ?>><?php echo $quotes->shipment_type;  ?> </option>
                                                        <?php }
                                                       else{
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
                                                            <td class="sno">1</td>
                                                                
                                                                <td width="10%"><input type="number" name="shipmentPage.pieces.weight" id="shipment-weight" maxlength="6" value="<?php if(isset($quotes->quote_weight)){ echo $quotes->quote_weight; } ?>" required id="shipment-info-form_shipmentPage_pieces_0__weight" class="form-control alloptions weight" onkeypress="return isNum(event)" oninput="maxLengthCheck(this)" min="1" > <input type="hidden" name="total_weight" id="total_weight_input" value="">
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

 $("input[name='isdangerous']").change(function() {
        if(this.checked) {
        $("input[name='isdangerous']").val(1);        
        }
        else {
           $("input[name='isdangerous']").val(0);        
        }
    });

    $("input[name='shipmentPage.isSaveSenderAddressBook']").change(function() {
        if(this.checked) {
        $("input[name='shipmentPage.isSaveSenderAddressBook']").val(1);        
        }
        else {
           $("input[name='shipmentPage.isSaveSenderAddressBook']").val(0);        
        }
    });

    $("input[name='shipmentPage.isSaveRecipientAddressBook']").change(function() {
        if(this.checked) {
        $("input[name='shipmentPage.isSaveRecipientAddressBook']").val(1);        
        }
        else {
           $("input[name='shipmentPage.isSaveRecipientAddressBook']").val(0);        
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
    var sender_postcode= $("input[name='shipmentPage.senderAddress.postalCode']").val();
    var sender_city= $("input[name='shipmentPage.senderAddress.city']").val();
    var rcv_state = $("input[name='shipmentPage.receiverAddress.state']").val();
    var postalCode = $("input[name='shipmentPage.receiverAddress.postalCode']").val();
    var stateCode = $("input[name='shipmentPage.senderAddress.state']").val();
    var servicename = $("select[name='shipmentPage.serviceId'] option:selected").text();

    var receiver_city = $("input[name='shipmentPage.receiverAddress.city']").val();
    var rcv_phone= $("input[name='shipmentPage.receiverAddress.phone']").val();
    var rcv_company= $("input[name='shipmentPage.receiverAddress.companyName']").val();
    var rcv_contact= $("input[name='shipmentPage.receiverAddress.contactName']").val();
    var rcv_email= $("input[name='shipmentPage.receiverAddress.email']").val();
    var rcv_address= $("input[name='shipmentPage.receiverAddress.address']").val();
    var rcv_address3= $("input[name='shipmentPage.receiverAddress.address3']").val();

    var quote_weight = $("input[name='shipmentPage.pieces.weight']").val();
    var quote_length= $("input[name='shipmentPage.pieces.dimensionL1']").val();
    var quote_width= $("input[name='shipmentPage.pieces.dimensionW1']").val();
    var quote_height= $("input[name='shipmentPage.pieces.dimensionH1']").val();
    var quote_quantity= $("input[name='shipmentPage.pieces.quantity1']").val();

    var rcv_country = $("select[name='shipmentPage.receiverAddress.country'] option:selected").text();
    var service_type_name = $("select[name='shipmentPage.shipmentTypeId'] option:selected").text();
    var package_type_name = $("select[name='shipmentPage.packageId'] option:selected").text();
    var total_amount = $('#total_weight_input').val(); 
    
    
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/save_quote');?>",
        data:{quote_date:quote_date,customer:customer,customer_name:customer_name,sender_subrub:sender_city,sender_postcode:sender_postcode,receiver_city:receiver_city,reciver_postcode:postalCode,shipment_type:service_type_name,package_type:package_type_name,qoute_jobnumber:qoute_jobnumber,total_amount:total_amount,rcv_phone:rcv_phone,rcv_company:rcv_company,rcv_contact:rcv_contact,rcv_email:rcv_email,rcv_address:rcv_address,rcv_address3:rcv_address3,quote_weight:quote_weight,quote_length:quote_length,quote_width:quote_width,quote_height:quote_height,quote_quantity:quote_quantity,rcv_country:rcv_country,rcv_state:rcv_state,stateCode:stateCode,servicename:servicename},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){

        }
    });
}


function openForm() {

document.getElementById("myForm").style.display = "block";
var sender_postcode= $("input[name='shipmentPage.senderAddress.postalCode']").val();
var sender_city= $("input[name='shipmentPage.senderAddress.city']").val();
var stateCode1 = $("input[name='shipmentPage.senderAddress.state']").val();
var postalCode = $("input[name='shipmentPage.receiverAddress.postalCode']").val();
var stateCode = $("input[name='shipmentPage.receiverAddress.state']").val();
var serviceId = $("select[name='shipmentPage.serviceId']").val();
var rcv_city= $("input[name='shipmentPage.receiverAddress.city']").val();
var service_type_Id = $("select[name='shipmentPage.shipmentTypeId']").val();


var weight =$("input[name='total_weight']").val();

var isdangerous = $("input[name='isdangerous']").val();
var length =[$("#addr input[name='shipmentPage.pieces.dimensionL1']").val()];
var dnw =[$("#addr input[name='shipmentPage.pieces.dimensionW1']").val()];
var dnh=[$("#addr input[name='shipmentPage.pieces.dimensionH1']").val()];
var quantity =[$("#addr input[name='shipmentPage.pieces.quantity1']").val()];
var totalweight = $('#total_weight_input').val();  
  
var final_total=$("#final_total_input").val();
weight = weight * final_total;
var get_volume_input = $("#get_volume_input").val();
get_volume_input = (get_volume_input * 250) * final_total;
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
    var surcharge_name = '';
    var surcharge_price = '';
    var SUM = '';
     $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/get_calculate');?>",
        data:{sender_postcode:sender_postcode,sender_city:sender_city,sender_state:stateCode1,rc_postcode:postalCode,rc_statecode:stateCode,rcv_city:rcv_city,serviceId:serviceId,service_type_Id:service_type_Id,isdangerous:isdangerous},
        beforeSend: function(){

            //$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            var result = JSON.parse(data);
            console.log(result);
            margin = result.margin;
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
                        console.log('get_volume_input'+get_volume_input);
                        if(weight >get_volume_input)
                        {
                            total = (parseFloat(weight) * parseFloat(per_kg)) + parseFloat(basic_charge);
                            if(margin != ''){
                                total =  total + parseFloat(total * parseFloat(margin/100));
                            }
                        }
                        else
                        {
                            total = (parseFloat(get_volume_input) * parseFloat(per_kg)) + parseFloat(basic_charge);
                            if(margin != ''){
                                total =  total + parseFloat(total * parseFloat(margin/100));
                            }
                        }
                    }
                });
            } else {

                basic_charge='0.00';
                console.log('basic_charge'+basic_charge);
                per_kg = result.fixed_price;
                console.log('per_kg'+per_kg);
                console.log('weight'+weight);
                total =  parseFloat(weight) * parseFloat(per_kg);
                if(margin != ''){
                    total =  total + parseFloat(total * parseFloat(margin/100));
                }
            }
            
            html +='<tr>';
                    html +='<td class="td1">Base Charge</td>';
                    html +='<td class="td2">$ '+parseFloat(total.toFixed(2))+'</td>';
                   // html +='<td class="td2">$ '+total+'</td>';
                    html +='</tr>';
            if(service_type_Id == 1 || service_type_Id == 2){
                
                $.each(result.charges, function(k, v) {
                    if(v)
                    {
                        is_dangerous = v.is_dangerous;
                        surcharge_name = v.surcharge_name;
                        surcharge_price = v.surcharge_price;

                   
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
            if(weight >get_volume_input)
                    {
                          
            html +='<tr>';
                    html +='<td class="td1">Total weight</td>';
                    html +='<td class="td2 totalweight">'+Math.round(weight)+':00 kg(s)</td>';
            html +='</tr>';
                    }else
                    {
                        html +='<tr>';
                    html +='<td class="td1">Total weight</td>';
                    html +='<td class="td2 totalweight">'+Math.round(get_volume_input)+':00 kg(s)</td>';
            html +='</tr>';
                    }
            html +='<tr>';
                    html +='<td class="td1">Weight type</td>';
                    html +='<td class="td2">Actual</td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td colspan="2" style="background: #005786;padding: 1px;"></td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td class="td1"><b>Total Charge</b></td>';
                    html +='<td class="td2">$ '+parseFloat(total.toFixed(2))+'</td>';
                  //  html +='<td class="td2">$ '+total+'</td>';
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
    if (isRecipient) 
    {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
     } 
     else
      {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);

    }
}

// to show receiver details
$(document).ready(function(){
    var list ='<ul id="company-list1">';

    $("#receiver_companyName").keyup(function(){
        
        $("#receiver-search-result").html('');
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
            $("#receiver-search-result").show();
            $.each(result, function(k, v) {
                //console.log(k + ' is ' + v);
                list +='<li onclick="onListClick3($(this),false);"><div class="row">';
                list +='<div class="col-xs-6 companyName" data data-companyName="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 contactName" data-contactName="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState="'+v.state+'">'+v.state+'</div></br>';
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
    if (isRecipient) 
    {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);
     } 
     else
      {
        $("input[name='shipmentPage.receiverAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.receiverAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.receiverAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.receiverAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.receiverAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.receiverAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.receiverAddress.state']").val(receiverState);

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
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState="'+v.state+'">'+v.state+'</div></br>';
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
    if (isRecipient) 
    {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.senderAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState);
     } 
     else
      {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName);
        $("input[name='shipmentPage.senderAddress.country']").val(receiverCountry);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState);

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
                list +='<div class="col-xs-6 contactName" data-contactName="'+v.contact_name+'">'+v.contact_name+'</div></br>';
                list +='<div class="col-xs-6 companyName" data data-companyName="'+v.company_name+'">'+v.company_name+'</div></br>';
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry="'+v.country+'">'+v.country+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState="'+v.state+'">'+v.state+'</div></br>';
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
    if (isSend) 
    {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName1);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName1);
        $("input[name='shipmentPage.senderAddress.country']").val(receiverCountry1);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress1);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost1);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState1);
     } 
     else
      {
        $("input[name='shipmentPage.senderAddress.companyName']").val(companyName1);
        $("input[name='shipmentPage.senderAddress.contactName']").val(contactName1);
        $("input[name='shipmentPage.senderAddress.country']").val(receiverCountry1);
        $("input[name='shipmentPage.senderAddress.address']").val(receiverAddress1);
        $("input[name='shipmentPage.senderAddress.city']").val(receiverCity1);
        $("input[name='shipmentPage.senderAddress.postalCode']").val(receiverPost1);
        $("input[name='shipmentPage.senderAddress.state']").val(receiverState1);

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
                list +='<div class="col-xs-6 receiverCountry" data-receiverCountry1="'+v.country+'">'+v.country+'</div></br>';
                list +='<div class="col-xs-6 receiverCity" data data-receiverCity1="'+v.city+'">'+v.city+'</div></br>';
                list +='<div class="col-xs-6 receiverAddress" data-receiverAddress1="'+v.address+'">'+v.address+'</div></br>';
                list +='<div class="col-xs-6 receiverPost" data-receiverPost1="'+v.postcode+'">'+v.postcode+'</div></br>';
                list +='<div class="col-xs-6 receiverState" data-receiverState1="'+v.state+'">'+v.state+'</div></br>';
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
				dateTotal = parseFloat(dateTotal.toFixed(3));
				//$(this).find('input.row-total').val(dateTotal ? dateTotal : "0.000");
				//dateTotal = (dateTotal * q);
				lt += isNumber(q) ? parseInt(q, 10) : 0;
				tt += isNumber(dateTotal) ? dateTotal : 0;
				weight_total += isNumber(w) ? parseFloat(w, 10) : 0;
                
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
                var wght= weight_total;


		    	$("#get_volume").html(tt.toFixed(3));
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
    width: 89%;
    position: absolute;
    z-index: 9;
}

#contact-list{
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 89%;
    position: absolute;
    z-index: 9;
}

#company-list1 {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 89%;
    position: absolute;
    z-index: 9;
}

#company-list {
    float: left;
    list-style: none;
    margin-top: -1px;
    padding: 0px;
    width: 89%;
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

#company-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#company-list1 li:hover{background:#ece3d2;cursor: pointer;}

#company-list li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#company-list li:hover{background:#ece3d2;cursor: pointer;}

#contact-list1 li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#contact-list1 li:hover{background:#ece3d2;cursor: pointer;}

#contact-list li{background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#contact-list li:hover{background:#ece3d2;cursor: pointer;}


</style>