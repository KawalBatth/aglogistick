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

                                                    <input type="text" name="shipmentPage.senderAddress.companyName" maxlength="35" value="<?php echo $customers->customerName;?>" id="shipment-info-form_shipmentPage_senderAddress_companyName" class="form-control alloptions" required onkeyup="searchSenderAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company">
                                                    
                                                    <div id="sender-address-by-company-search-result"></div>
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
                                                    <input type="text" name="shipmentPage.senderAddress.contactName" maxlength="35" value="<?php echo $customers->contact_name;?>"  id="shipment-info-form_shipmentPage_senderAddress_contactName" class="form-control alloptions" required onkeyup="searchSenderAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name">
                                                    <div id="sender-address-by-contact-search-result"></div>
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
    <option value="12" selected="selected">Australia</option>
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
                                                    <label class="fw0"> <input name="shipmentPage.isSaveSenderAddressBook" value="0" tabindex="5" type="checkbox" onclick="checkSavaAddressBook('shipmentPage.isSaveSenderAddressBook')">
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
                                                    <input type="text" name="shipmentPage.receiverAddress.companyName" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_companyName" required class="form-control alloptions" ondblclick="searchReceiverAddress(true)" onkeyup="searchReceiverAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company">
                                                    <div id="receiver-address-by-company-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                         <input type="text" name="shipmentPage.receiverAddress.phone" maxlength="25" value="" pattern="08\d{8}" id="shipment-info-form_shipmentPage_receiverAddress_phone" required class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.contactName" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_contactName" class="form-control alloptions" required ondblclick="searchReceiverAddress(false)" onkeyup="searchReceiverAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name">
                                                    <div id="receiver-address-by-contact-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.email" maxlength="50" value="" id="shipment-info-form_shipmentPage_receiverAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.receiverAddress.country" id="shipmentPage_receiverAddress_country" class="form-control" onchange="changeCountry('receiver')">
    <option value="0">Please select a country.</option>
    <option value="2">Albania</option>
    <option value="3">Algeria</option>
    <option value="4">American Samoa</option>
    <option value="5">Andorra</option>
    <option value="6">Angola</option>
    <option value="7">Anguilla</option>
    <option value="8">Antigua</option>
    <option value="236">Antigua and Barbuda</option>
    <option value="237">ARE</option>
    <option value="9">Argentina</option>
    <option value="10">Armenia</option>
    <option value="11">Aruba</option>
    <option value="12">Australia</option>
    <option value="13">Austria</option>
    <option value="14">Azerbaijan</option>
    <option value="238">Azores EU</option>
    <option value="15">Bahamas</option>
    <option value="16">Bahrain</option>
    <option value="17">Bangladesh</option>
    <option value="18">Barbados</option>
    <option value="19">Belarus</option>
    <option value="20">Belgium</option>
    <option value="21">Belize</option>
    <option value="22">Benin</option>
    <option value="23">Bermuda</option>
    <option value="24">Bhutan</option>
    <option value="25">Bolivia</option>
    <option value="26">Bonaire</option>
    <option value="239">Bonaire,Saba &amp; Sint Eustatius</option>
    <option value="27">Bosnia and Herzegovina</option>
    <option value="28">Botswana</option>
    <option value="30">Brazil</option>
    <option value="31">Brunei</option>
    <option value="32">Bulgaria</option>
    <option value="33">Burkina Faso</option>
    <option value="34">Burundi</option>
    <option value="35">Cambodia</option>
    <option value="36">Cameroon</option>
    <option value="37">Canada</option>
    <option value="38">Canary Islands, The</option>
    <option value="39">Cape Verde</option>
    <option value="40">Cayman Islands</option>
    <option value="41">Central African Republic</option>
    <option value="240">Ceuta</option>
    <option value="42">Chad</option>
    <option value="43">Chile</option>
    <option value="44">China</option>
    <option value="45">Christmas Island</option>
    <option value="46">Cocos Island</option>
    <option value="47">Colombia</option>
    <option value="48">Comoros</option>
    <option value="49">Congo, The Democratic Republic of</option>
    <option value="50">Congo, The Republic of</option>
    <option value="51">Cook Islands</option>
    <option value="52">Costa Rica</option>
    <option value="53">Cote d'lvoire</option>
    <option value="54">Croatia</option>
    <option value="55">Cuba</option>
    <option value="56">Curacao</option>
    <option value="57">Cyprus</option>
    <option value="58">Czech Republic, The</option>
    <option value="59">Denmark</option>
    <option value="60">Djibouti</option>
    <option value="61">Dominica</option>
    <option value="62">Dominican Republic</option>
    <option value="63">East Timor</option>
    <option value="64">Ecuador</option>
    <option value="65">Egypt</option>
    <option value="66">El Salvador</option>
    <option value="67">Eritrea</option>
    <option value="68">Estonia</option>
    <option value="69">Ethiopia</option>
    <option value="243">FAJ</option>
    <option value="70">Falkland Islands</option>
    <option value="71">Faroe Islands</option>
    <option value="72">Fiji</option>
    <option value="73">Finland</option>
    <option value="74">France</option>
    <option value="75">French Guyana</option>
    <option value="245">French Polynesia</option>
    <option value="76">Gabon</option>
    <option value="77">Gambia</option>
    <option value="246">Gaza (West Bank)</option>
    <option value="78">Georgia</option>
    <option value="79">Germany</option>
    <option value="80">Ghana</option>
    <option value="81">Gibraltar</option>
    <option value="82">Greece</option>
    <option value="83">Greenland</option>
    <option value="84">Grenada</option>
    <option value="85">Guadeloupe</option>
    <option value="86">Guam</option>
    <option value="87">Guatemala</option>
    <option value="88">Guernsey</option>
    <option value="89">Guinea Republic</option>
    <option value="90">Guinea-Bissau</option>
    <option value="91">Guinea-Equatorial</option>
    <option value="92">Guyana (British)</option>
    <option value="93">Haiti</option>
    <option value="94">Honduras</option>
    <option value="95">Hong Kong</option>
    <option value="96">Hungary</option>
    <option value="97">Iceland</option>
    <option value="98">India</option>
    <option value="99">Indonesia</option>
    <option value="100">Iran (Islamic Republic of)</option>
    <option value="101">Iraq</option>
    <option value="102">Ireland, Republic Of</option>
    <option value="103">Israel</option>
    <option value="104">Italy</option>
    <option value="247">Ivory Coast</option>
    <option value="105">Jamaica</option>
    <option value="106">Japan</option>
    <option value="107">Jersey</option>
    <option value="108">Jordan</option>
    <option value="109">Kazakhstan</option>
    <option value="110">Kenya</option>
    <option value="111">Kiribati</option>
    <option value="112">Korea, Republic Of</option>
    <option value="113">Korea, The D.P.R of</option>
    <option value="114">Kosovo</option>
    <option value="115">Kuwait</option>
    <option value="116">Kyrgyzstan</option>
    <option value="117">Lao P. D. R.</option>
    <option value="118">Latvia</option>
    <option value="119">Lebanon</option>
    <option value="120">Lesotho</option>
    <option value="121">Liberia</option>
    <option value="122">Libya</option>
    <option value="123">Liechtenstein</option>
    <option value="124">Lithuania</option>
    <option value="125">Luxembourg</option>
    <option value="126">Macau</option>
    <option value="127">Macedonia, Republic of</option>
    <option value="128">Madagascar</option>
    <option value="248">Madeira EU</option>
    <option value="129">Malawi</option>
    <option value="130">Malaysia</option>
    <option value="131">Maldives</option>
    <option value="132">Mali</option>
    <option value="133">Malta</option>
    <option value="134">Marshall Islands</option>
    <option value="135">Martinique</option>
    <option value="136">Mauritania</option>
    <option value="137">Mauritius</option>
    <option value="138">Mayotte</option>
    <option value="249">Melilla</option>
    <option value="139">Mexico</option>
    <option value="250">Micronesia, Federated States of</option>
    <option value="140">Moldova, Republic Of</option>
    <option value="141">Monaco</option>
    <option value="142">Mongolia</option>
    <option value="143">Montenegro, Republic of</option>
    <option value="144">Montserrat</option>
    <option value="145">Morocco</option>
    <option value="146">Mozambique</option>
    <option value="147">Myanmar</option>
    <option value="148">Namibia</option>
    <option value="149">Nauru, Republic Of</option>
    <option value="150">Nepal</option>
    <option value="251">Netherlands Antilles</option>
    <option value="151">Netherlands, The</option>
    <option value="152">Nevis</option>
    <option value="153">New Caledonia</option>
    <option value="154">New Zealand</option>
    <option value="155">Nicaragua</option>
    <option value="156">Niger</option>
    <option value="157">Nigeria</option>
    <option value="158">Niue</option>
    <option value="159">Norfolk Island</option>
    <option value="252">Northern Ireland EU</option>
    <option value="253">Northern Ireland EU</option>
    <option value="254">Northern Mariana Islands</option>
    <option value="160">Norway</option>
    <option value="255">NRR</option>
    <option value="161">Oman</option>
    <option value="162">Pakistan</option>
    <option value="163">Palau</option>
    <option value="256">Palestine Authority</option>
    <option value="257">Palestinian National Authority</option>
    <option value="164">Panama</option>
    <option value="165">Papua New Guinea</option>
    <option value="166">Paraguay</option>
    <option value="167">Peru</option>
    <option value="168">Philippines, The</option>
    <option value="169">Poland</option>
    <option value="170">Portugal</option>
    <option value="258">PSE</option>
    <option value="171">Puerto Rico</option>
    <option value="172">Qatar</option>
    <option value="173">Reunion, Island Of</option>
    <option value="174">Romania</option>
    <option value="259">Rota ( Northern Mariana Islands)</option>
    <option value="175">Russian Federation, The</option>
    <option value="176">Rwanda</option>
    <option value="177">Saipan</option>
    <option value="178">Samoa</option>
    <option value="179">San Marino</option>
    <option value="180">Sao Tome and Principe</option>
    <option value="181">Saudi Arabia</option>
    <option value="182">Senegal</option>
    <option value="183">Serbia And Montenegro</option>
    <option value="184">Serbia, Republic of</option>
    <option value="185">Seychelles</option>
    <option value="186">Sierra Leone</option>
    <option value="187">Singapore</option>
    <option value="261">Sint Maarten</option>
    <option value="262">SJU</option>
    <option value="188">Slovakia</option>
    <option value="189">Slovenia</option>
    <option value="190">Solomon Islands</option>
    <option value="191">Somalia</option>
    <option value="192">Somaliland, Rep of (North Somalia)</option>
    <option value="193">South Africa</option>
    <option value="194">Spain</option>
    <option value="195">Sri Lanka</option>
    <option value="196">St Barthelemy</option>
    <option value="263">St Kitts and Nevis</option>
    <option value="264">St Lucia</option>
    <option value="265">St Martin</option>
    <option value="266">St Pierre &amp; Miquelon</option>
    <option value="197">St. Eustatius</option>
    <option value="198">St. Kitts</option>
    <option value="199">St. Lucia</option>
    <option value="200">St. Maarten</option>
    <option value="201">St. Vincent</option>
    <option value="267">St. Vincent and the Grenadines</option>
    <option value="268">St.Barthelemy</option>
    <option value="202">Sudan</option>
    <option value="203">Suriname</option>
    <option value="204">Swaziland</option>
    <option value="205">Sweden</option>
    <option value="206">Switzerland</option>
    <option value="207">Syria</option>
    <option value="208">Tahiti</option>
    <option value="209">Taiwan</option>
    <option value="210">Tajikistan</option>
    <option value="211">Tanzania</option>
    <option value="212">Thailand</option>
    <option value="269">Tinian (Northern Mariana Islands)</option>
    <option value="213">Togo</option>
    <option value="214">Tonga</option>
    <option value="215">Trinidad and Tobago</option>
    <option value="216">Tunisia</option>
    <option value="217">Turkey</option>
    <option value="218">Turkmenistan</option>
    <option value="219">Turks and Caicos Islands</option>
    <option value="220">Tuvalu</option>
    <option value="221">Uganda</option>
    <option value="222">Ukraine</option>
    <option value="223">United Arab Emirates</option>
    <option value="224">United Kingdom</option>
    <option value="225">United States of America</option>
    <option value="226">Uruguay</option>
    <option value="227">Uzbekistan</option>
    <option value="228">Vanuatu</option>
    <option value="229">Venezuela</option>
    <option value="230">Vietnam</option>
    <option value="231">Virgin Islands (British)</option>
    <option value="232">Virgin Islands (US)</option>
    <option value="270">Wales EU</option>
    <option value="271">Wallis and Futuna Islands</option>
    <option value="233">Yemen, Republic of</option>
    <option value="272">Zaire</option>
    <option value="234">Zambia</option>
    <option value="235">Zimbabwe</option>


</select>


                                                </div>
                                            </div>
                                            
                                           
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address" class="form-control alloptions" required data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.address2" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
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
                                                    <label class="fw0"> <input name="shipmentPage.isSaveRecipientAddressBook" value="0" tabindex="5" type="checkbox" onclick="checkSavaAddressBook('shipmentPage.isSaveRecipientAddressBook')">
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
                                                    <input type="text" name="shipmentPage.receiverAddress.city" maxlength="35" value="" id="receiverAddress_city" class="form-control alloptions" required  data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City"  autocomplete="off">
                                                        <div id="suggesstion-box"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    
                                                  
                                                    <input type="text" name="shipmentPage.receiverAddress.postalCode" maxlength="12" value="" id="shipment-info-form_shipmentPage_receiverAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(false,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-receiver-state">




                                                    <label class="control-label" for="inputName"> State/Province</label>


    
                                                   <input type="text" name="shipmentPage.receiverAddress.state" value="" id="shipmentPage_receiverAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
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
                                                        <select name="shipmentPage.shipmentTypeId" id="shipmentPage_shipmentTypeId" required class="form-control"  onchange="changeShipmentType($(this).val(), $('option:selected',this).text())">
                                                            <!--option value="" selected="selected">Select Service Type</option-->
    
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
                                                        <table class="s32 table table-striped table-bordered" border="" id="piece-table">
                                                            
                                                            
                                                            
                                                            <thead>
                                                            <tr>
                                                                <th>Row</th>
                                                                
                                                                    <th id="weight-unit">Weight(kgs)*</th>
                                                                
                                                                
                                                                <th style="text-align: center">
                                                                    
                                                                    
                                                                        
                                                                            <div id="dimensions-unit">Dimensions(CM)</div>
                                                                        
                                                                        
                                                                        <div style="width: 100%;text-align: center;padding-left: 25px;padding-right: 25px">
                                                                            <span style="float: left">L*</span>
                                                                            <span style="float: none">W*</span>
                                                                            <span style="float: right">H*</span>
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
                                                                
                                                                <td width="10%"><input type="number" name="shipmentPage.pieces.weight" maxlength="6" value="" required id="shipment-info-form_shipmentPage_pieces_0__weight" class="form-control alloptions weight" onkeypress="return isNum(event)" oninput="maxLengthCheck(this)" min="1" > <input type="hidden" name="total_weight" id="total_weight_input" value="">
                                                                     <input type="hidden" name="service_kg" id="service_kg" value="">
                                                                </td>
                                                                <td width="40%">
                                                                    <div class="row mg0">
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionL1" required value="" id="textInput" class="form-control alloptions dimL length" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                           
                                                                 </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionW1" value="" required id="textInput1" class="form-control alloptions dimW width" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                        </div>
                                                                        <div class="col-lg-4 pd1">
                                                                            <input type="text" name="shipmentPage.pieces.dimensionH1" value="" required id="textInput2" class="form-control alloptions dimH height" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="4" min="1" onfocus="this.value=''">
                                                                            <input type="hidden" name="get_volume" id="get_volume_input" value="">    
	
                                                                        </div>
                                                                    </div>
                                                                  
	
	         </td>

                                                                </td>
                                                               <td><input type="text" name="shipmentPage.pieces.quantity1" value="1" id="shipment-info-form_shipmentPage_pieces_0__quantity" class="form-control quantity" required onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" maxlength="10" min="1" onfocus="this.value=''">
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
                                                                    <!--button class="btn s33" type="button" onclick="continuewbookingnew()">
                                                                     Continue Booking
                                                                </button-->
                                                           
                                                           
                                                                
                                                               
                                                            
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
    //alert(quote_date);
    var customer = '<?php echo $customers->customer_id;?>';
   //var dd = String(quote_date.getDate()).padStart(2, '0');
   // var column = 'A';
   // var i= 0;
   // var step = 2; // number of columns to step by
   // for(i = 1; i < step; i++) {
    //var qoute_jobnumber   = customer+'AGL';
    var qoute_jobnumber   = customer;

//}
//column++;
  //  alert(qoute_jobnumber);
 


    var customer_name= $("input[name='shipmentPage.senderAddress.companyName']").val();
    var sender_postcode= $("input[name='shipmentPage.senderAddress.postalCode']").val();
    var sender_city= $("input[name='shipmentPage.senderAddress.city']").val();

    var stateCode1 = $("input[name='shipmentPage.senderAddress.state']").val();
    var postalCode = $("input[name='shipmentPage.receiverAddress.postalCode']").val();
    var stateCode = $("input[name='shipmentPage.receiverAddress.state']").val();
    var servicename = $("select[name='shipmentPage.serviceId'] option:selected").text();
    var rcv_city= $("input[name='shipmentPage.receiverAddress.city']").val();
    var service_type_name = $("select[name='shipmentPage.shipmentTypeId'] option:selected").text();
    var package_type_name = $("select[name='shipmentPage.packageId'] option:selected").text();
    var total_amount = $('#total_weight_input').val(); 
    
    
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('customer/save_quote');?>",
        data:{quote_date:quote_date,customer:customer,customer_name:customer_name,sender_subrub:sender_city,sender_postcode:sender_postcode,reciver_subrub:rcv_city,reciver_postcode:postalCode,shipment_type:service_type_name,package_type:package_type_name,qoute_jobnumber:qoute_jobnumber,total_amount:total_amount},
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
    var get_volume_input = $("#get_volume_input").val();
    setTimeout(function()
    {    
    $('#saveQuoteLog table tbody').html('');
    var html = '';
    var total ='';
    var basic_charge = '';
   // var is_dangerous = '';
    var per_kg ='';
    var total_charge = '';
    var surcharge_name = '';
    var surcharge_price = '';
    //var SUM = '';
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
                    total = (parseFloat(weight) * parseFloat(per_kg)) + parseFloat(basic_charge);
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
                   // html +='<td class="td2">$ '+parseFloat(total.toFixed(3))+'</td>';
                   html +='<td class="td2">$ '+total+'</td>';
                    html +='</tr>';

            $.each(result.charges, function(k, v) {
                if(v)
                {
                    //is_dangerous = v.is_dangerous;
                    surcharge_name = v.surcharge_name;
                    surcharge_price = v.surcharge_price;
                    //total_charge = total + SUM(surcharge_price);
                    //total_charge = (total + surcharge_price);
                  //  alert(total_charge);
                    /*if(is_dangerous == 1){
                        if(surcharge_name == "Dangerous goods")
                    }*/
                    html +='<tr>';
                    html +='<td class="td1">'+surcharge_name+'</td>';
                    html +='<td class="td2">$ '+surcharge_price+'</td>';
                    html +='</tr>';
                }
            });
           
            
            html +='<tr>';
                html +='<td colspan="2" style="background: #686BB1;padding: 1px;"></td>';
            html +='</tr>';
            html +='<tr>';
                    html +='<td class="td1">Total weight</td>';
                    html +='<td class="td2 totalweight">'+weight+'kg(s)</td>';
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

    	$('#addr' + numRows).html("<td class='sno'>1</td><td width='10%'><input type='number' name='shipmentPage.pieces.weight1' maxlength='6' value='' required id='shipment-info-form_shipmentPage_pieces_0__weight' class='form-control alloptions weight' onkeypress='return isNum(event)' oninput='maxLengthCheck(this)' min='1'></td><td width='40%'><div class='row mg0'><div class='col-lg-4 pd1'> <input type='text' name='shipmentPage.pieces.dimensionL1' required class='form-control alloptions dimL length' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4'></div><div class='col-lg-4 pd1'><input type='text' name='shipmentPage.pieces.dimensionW1' value='' required class='form-control alloptions dimW width' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1'></div><div class='col-lg-4 pd1'><input type='text' name='shipmentPage.pieces.dimensionH1' value='' required class='form-control alloptions dimH height' onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='4' min='1' ></div></div></td> <td><input type='text' name='shipmentPage.pieces.quantity1' value='1' id='shipment-info-form_shipmentPage_pieces_0__quantity' class='form-control quantity' required onkeypress='return isNumeric(event)' oninput='maxLengthCheck(this)' maxlength='10' min='1'></td><td><input type='button' value='&times;' class='del'></td>");

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

   /* border: 1px solid #e5e5e5;
    margin-top: 1px;
    padding-left: 5px;
    position: absolute;
    width: 100%;
    background: #fff;
  
    max-height: 300px;
    overflow: auto;*/
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