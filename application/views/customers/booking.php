<?php 
//echo "<pre>";
//print_r($result);
//print_r($surcharge);
//echo "</pre>";
?>

                <script type="text/javascript">
                    var loginAsDialog = $("#login-as-dialog").dialog({
                        modal: true,
                        autoOpen: false,
                        width: "600",
                        height: 'auto',
                        maxHeight: 800,
                    //dialogClass: "no-close",
                        show: {
                            effect: "fade",
                            duration: 500
                        }
                    });
                    </script>
<div id="shipment-div" style="display: none;">
    <div class="row mbl">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
            </div>
        </div>
        <form id="shipment-info-form" name="shipment-info-form" action="/crm-webship/webship.ix" method="post">
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
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.companyName" maxlength="35" value="<?php echo $customers->customerName;?>" id="shipment-info-form_shipmentPage_senderAddress_companyName" class="form-control alloptions" onkeyup="searchSenderAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company">
                                                    <div id="sender-address-by-company-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.phone" maxlength="25" value="0894793399" id="shipment-info-form_shipmentPage_senderAddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.contactName" maxlength="35" value="WAYNE ENNIS" id="shipment-info-form_shipmentPage_senderAddress_contactName" class="form-control alloptions" onkeyup="searchSenderAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name">
                                                    <div id="sender-address-by-contact-search-result"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email Address
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.email" maxlength="50" value="wayne@agllogistics.com" id="shipment-info-form_shipmentPage_senderAddress_email" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="shipmentPage.senderAddress.country" id="shipmentPage_senderAddress_country" class="form-control" onchange="changeCountry('sender')">
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
    <option value="12" selected="selected">Australia</option>
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
                                                    <input type="text" name="shipmentPage.senderAddress.address" maxlength="35" value="UNIT 1 / 11 FRICKER ROAD" id="shipment-info-form_shipmentPage_senderAddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.address2" maxlength="35" value="PERTH AIRPORT" id="shipment-info-form_shipmentPage_senderAddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 2">
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
                                                    <input type="text" name="shipmentPage.senderAddress.city" maxlength="35" value="VIC" id="shipment-info-form_shipmentPage_senderAddress_city" class="form-control alloptions" onkeyup="searchCity(true,true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="shipmentPage.senderAddress.postalCode" maxlength="12" value="6105" id="shipment-info-form_shipmentPage_senderAddress_postalCode" class="form-control alloptions" onkeyup="searchCity(true,false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal Code">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" id="div-sender-state">




<label class="control-label" for="inputName"> State/Province</label>

    
        <input type="text" name="shipmentPage.senderAddress.state" value="WA" id="shipmentPage_senderAddress_state" class="form-control" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Sate\/Province">
    
    

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
                                                    <input type="text" name="shipmentPage.receiverAddress.companyName" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_companyName" class="form-control alloptions" ondblclick="searchReceiverAddress(true)" onkeyup="searchReceiverAddress(true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company">
                                                    <div id="receiver-address-by-company-search-result">




</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Phone <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.phone" maxlength="25" value="" id="shipment-info-form_shipmentPage_receiverAddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Contact Name <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="shipmentPage.receiverAddress.contactName" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_contactName" class="form-control alloptions" ondblclick="searchReceiverAddress(false)" onkeyup="searchReceiverAddress(false)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact Name">
                                                    <div id="receiver-address-by-contact-search-result">




</div>
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
                                                    <input type="text" name="shipmentPage.receiverAddress.address" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address 1">
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
                                                    <input type="text" name="shipmentPage.receiverAddress.city" maxlength="35" value="" id="shipment-info-form_shipmentPage_receiverAddress_city" class="form-control alloptions" onkeyup="searchCity(false,true)" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City">
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
    
    
   <!--  previous code  -->
   
    
   <!--  code by shahabuddin -->
    
    
</div>
                                            </div>
                                            <div class="col-md-12" id="receiver-city-search">




    <ul class="sss1" style="display: none;">
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE">
                        MELBOURNE
                    </div>
                    <div class="col-xs-3" data-postalcode="8001">
                        8001
                    </div>
                    <div class="col-xs-3" data-statecode="">
                        
                    </div>
                </div>
            </li>
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE">
                        MELBOURNE
                    </div>
                    <div class="col-xs-3" data-postalcode="3000">
                        3000
                    </div>
                    <div class="col-xs-3" data-statecode="VIC">
                        VIC
                    </div>
                </div>
            </li>
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE">
                        MELBOURNE
                    </div>
                    <div class="col-xs-3" data-postalcode="3004">
                        3004
                    </div>
                    <div class="col-xs-3" data-statecode="VIC">
                        VIC
                    </div>
                </div>
            </li>
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE AIRPORT">
                        MELBOURNE AIRPORT
                    </div>
                    <div class="col-xs-3" data-postalcode="3045">
                        3045
                    </div>
                    <div class="col-xs-3" data-statecode="VIC">
                        VIC
                    </div>
                </div>
            </li>
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE UNIVERSITY">
                        MELBOURNE UNIVERSITY
                    </div>
                    <div class="col-xs-3" data-postalcode="3052">
                        3052
                    </div>
                    <div class="col-xs-3" data-statecode="VIC">
                        VIC
                    </div>
                </div>
            </li>
        
            <li onclick="onCityClick($(this),false)">
                <div class="row">
                    <div class="col-xs-6" data-cityname="MELBOURNE WORLD TRADE CENTRE">
                        MELBOURNE WORLD TRADE CENTRE
                    </div>
                    <div class="col-xs-3" data-postalcode="3005">
                        3005
                    </div>
                    <div class="col-xs-3" data-statecode="VIC">
                        VIC
                    </div>
                </div>
            </li>
        
    </ul>
</div>
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
                                                            </span><input type='date' id='date' class="form-control date form_datetime" value='<?php echo date('Y-m-d');?>' readonly="readonly">
															
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-6" id="change-country-div">


<label class="control-label" for="inputName">
    Carrier
    <span class="s30"> *</span>
</label>
<select name="shipmentPage.serviceId" id="shipmentPage_serviceId" class="form-control" onchange="changeService($(this).val())">
    <option value="72">Startrack</option>
    <option value="52">Toll Priority</option>
    <option value="59">Toll Ipec</option>


</select>


<script type="text/javascript">
    $(document).ready(function () {
        changeService("72");
    });
</script></div>
                                                    <div class="form-group col-lg-6" id="change-service-div">


<label class="control-label" for="inputName">
    Service Type
    <span class="s30"> *</span>
</label>
<select name="shipmentPage.shipmentTypeId" id="shipmentPage_shipmentTypeId" class="form-control" onchange="changeShipmentType($(this).val())">
    <option value="229">Premium Air Freight</option>
    <option value="228">Road Express</option>
    <option value="230">Fixed Price Premium 1kg</option>
    <option value="231">Fixed Price Premium 3kg</option>
    <option value="232">Fixed Price Premium 5kg</option>
    <option value="234">Fixed Price Premium 10kg</option>
    <option value="235">Fixed Price Premium 20kg</option>


</select>


<script type="text/javascript">
    $(document).ready(function () {
        changeShipmentType("", "Customer packaging");
        loadAdditionalConfig();
    });
</script></div>
                                                    <div class="form-group col-lg-12" id="change-shipmenttype-div">


<label class="control-label" for="inputName">
    Package Type
</label>
<select name="shipmentPage.packageId" id="shipmentPage_packageId" class="form-control" onchange="changePackage()">
    <option value="3" selected="selected">Customer packaging</option>


</select>


<script type="text/javascript">
    $(document).ready(function () {
        changePackage("3", "229");
        loadAdditionalConfig();
    });
</script>
</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row" id="change-package-div">




<div class="form-group col-lg-12" id="content-type-radios">
    <label class="control-label" for="inputName"> Contents <span class="s30"> *</span>
    </label> <br> <label class="radio-inline"> <input type="radio" value="DOX" name="shipmentPage.contentType" disabled="disabled" onclick="resetAddPiece($(this).val())"> &nbsp; Documents
</label> <label class="radio-inline"> <input type="radio" value="WPX" name="shipmentPage.contentType" checked="checked" onclick="resetAddPiece($(this).val())"> &nbsp; Parcel
</label>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="control-label" for="inputName"> Weight Unit
        </label>
        <select name="shipmentPage.weightUnit" id="sel-weight-unit" class="form-control" onchange="changeWeightUnit($(this).val())">
    <option value="KG">KG</option>


</select>


    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="control-label" for="inputName"> Dimension Unit
        </label>
        <select name="shipmentPage.dimensionUnit" id="sel-dim-unit" class="form-control" onchange="changeDimUnit($(this).val())">
    <option value="CM">CM</option>


</select>


    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="control-label" for="inputName"> Currency
        </label>
        <select name="shipmentPage.currencyCode" id="shipmentPage_currencyCode" class="form-control" onchange="changeCurrency($(this).val())">
    <option value="TWD">Taiwan New Dollars</option>
    <option value="SGD">Singapore Dollars</option>
    <option value="GBP">British Pounds</option>
    <option value="CNY">Chinese Yuan (Ren Min Bi)</option>
    <option value="USD">US Dollars</option>
    <option value="JPY">Japanese Yen</option>
    <option value="AUD" selected="selected">Australian Dollars</option>
    <option value="HKD">Hong Kong Dollars</option>
    <option value="EUR">Euro</option>
    <option value="MYR">Malaysia Ringgits</option>
    <option value="ZAR">South African rand</option>
    <option value="CAD">Canadian Dollars</option>
    <option value="NZD">New Zealand Dollars</option>
    <option value="CHF">Swiss Francs</option>


</select>


    </div>
</div>
<div class="form-group col-lg-12" id="reset-add-piece-div">
    <table class="s32 table table-striped table-bordered" border="" id="piece-table">
        
        
        <thead>
        <tr>
            <th>Row</th>
            
                <th id="weight-unit">Weight(kgs)*</th>
            
            
            <th></th>
            <th style="text-align: center">
                
                
                    
                        <div id="dimensions-unit">Dimensions(CM)</div>
                    
                    
                    <div style="width: 100%;text-align: center;padding-left: 25px;padding-right: 25px">
                        <span style="float: left">L*</span>
                        <span style="float: none">W*</span>
                        <span style="float: right">H*</span>
                    </div>
                
            </th>
            
            
                <th class="quantity">Quantity*
                </th>
            
            
            <th></th>
        </tr>
        </thead>
        <tbody>
        
            
                <tr id="piece-dt1">
                    <td width="2%" style="padding-top: 8px" id="piece-order1" class="order-number">1</td>
                    <td width="10%"><input type="text" name="shipmentPage.pieces[0].weight" maxlength="6" value="" id="shipmentPage_pieces_0__weight" class="form-control alloptions weight" onkeypress="return formartNumber(event,this,true);" data-toggle="tooltip" data-placement="top" placeholder="" data-original-title="TOOLTIP:Shipment weight"></td>
                    <td width="15%"><select name="" id="sel-dimension-list" class="form-control alloptions dimensionList" onchange="changeDimensionList($(this).val(),0)">
    <option value="0"></option>
    <option value="1">test</option>
    <option value="24">wigets</option>


</select>

</td>
                    <td width="40%">
                        <div class="row mg0">
                            <div class="col-lg-4 pd1">
                                
                                
                                    <input type="text" name="shipmentPage.pieces[0].dimensionL" maxlength="4" value="" id="shipmentPage_pieces_0__dimensionL" class="form-control alloptions dimL" onkeypress="return formartNumber(event,this,false);">
                                
                            </div>
                            <div class="col-lg-4 pd1">
                                
                                
                                    <input type="text" name="shipmentPage.pieces[0].dimensionW" maxlength="4" value="" id="shipmentPage_pieces_0__dimensionW" class="form-control alloptions dimW" onkeypress="return formartNumber(event,this,false);">
                                
                            </div>
                            <div class="col-lg-4 pd1">
                                
                                
                                    <input type="text" name="shipmentPage.pieces[0].dimensionH" maxlength="4" value="" id="shipmentPage_pieces_0__dimensionH" class="form-control alloptions dimH" onkeypress="return formartNumber(event,this,false);">
                                
                            </div>
                        </div>
                    </td>
                    <td width="25%" style="display:none;">
                        <input type="text" name="shipmentPage.pieces[0].customValue" maxlength="10" value="0.00" id="shipmentPage_pieces_0__customValue" class="form-control alloptions customValue" onkeypress="return formartNumber(event,this,true);" data-toggle="tooltip" data-placement="top" placeholder="" data-original-title="TOOLTIP:Shipment value"></td>
                    
                        <td class="quantity"><input type="text" name="shipmentPage.pieces[0].quantity" value="1" id="shipmentPage_pieces_0__quantity" class="form-control quantity" onkeypress="return formartNumber(event,this,false);" data-toggle="tooltip" data-placement="top" placeholder="" data-original-title="TOOLTIP:Quantity"></td>
                    
                    
                    <td width="3%" style="padding-top: 9px"><i id="remove" class="fa fa-times-circle-o s10" style="font-size: 18px;  display: none; " onclick="removePiece($(this))"></i></td>
                </tr>
            
        
        
        
            <input type="hidden" name="shipmentPage.isAddPiece" value="true" id="shipmentPage_isAddPiece">
        
        
        
        </tbody>
    </table>
    
    
        
            <button class="btn s33" type="button" onclick="addPiece()">
                Add Piece
            </button>
        
    
    <script type="text/javascript">
        var order = $('#piece-table tbody tr').length;
        function addPiece() {
            order++;
            index = order - 1;
            var addPieceContent = $("#piece-dt" + index).clone();
            addPieceContent.attr('id', 'piece-dt' + order);
            addPieceContent.find(".order-number").html(order);
            addPieceContent.find(".weight").attr('name', 'shipmentPage.pieces[' + index + '].weight');
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
        $(document).ready(function () {
            $('input.alloptions').maxlength({
                alwaysShow: true,
                threshold: 10,
                warningClass: "label label-success w5",
                limitReachedClass: "label label-danger w5",
                separator: '/',

            });
        });
    </script>
</div>
</div>
                                                <div class="row">
                                                    <div class="col-lg-12" id="additional-config-div">



    <div class="form-group">
        
            <label class="fw0">
                <input data-group="dangerousgoods" tabindex="5" id="service_cons_0" type="checkbox" name="shipmentPage.addCons[0].value" value="1" onclick="showServiceAddConDetails(0)"> &nbsp;
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
</script></div>
                                                    <div class="col-lg-12">
                                                        <div class="text-left pal pdt10" style="margin-bottom: 50px; margin-top: 102px; text-align: right;">
                                                            <button class="btn s33a" type="button" onclick="createNewShipment()">
                                                                New Shipment
                                                            </button>
                                                            
                                                                <button class="btn s33a" type="button" onclick="getQuote()">
                                                                    Quote
                                                                </button>
                                                           
                                                            <button type="button" class="btn s33a" onclick="continueBooking()">
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
<input type="hidden" name="defaultAddressJson" value="{&quot;companyName&quot;:&quot;AGL SPECIALISED LOGISTICS&quot;,&quot;phone&quot;:&quot;0894793399&quot;,&quot;contactName&quot;:&quot;WAYNE ENNIS&quot;,&quot;email&quot;:&quot;wayne@agllogistics.com&quot;,&quot;country&quot;:&quot;12&quot;,&quot;address&quot;:&quot;UNIT 1 / 11 FRICKER ROAD&quot;,&quot;address2&quot;:&quot;PERTH AIRPORT&quot;,&quot;city&quot;:&quot;PERTH airport&quot;,&quot;postalCode&quot;:&quot;6105&quot;,&quot;state&quot;:&quot;WA&quot;}" id="defaultAddressJson">
<div id="continue-booking-div" style="">




<form id="form_booking" name="form_booking" action="/crm-webship/webship_continue_booking.ix" method="post">
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
                                                    <td class="td2">Startrack</td>
                                                </tr>
                                                <tr>
                                                    <td class="td1">Service Type</td>
                                                    <td class="td2">Premium Air Freight</td>
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
                                                    <td class="td2">76.00 kgs</td>
                                                </tr>
                                                <tr>
                                                    <td class="td1">Dimensions</td>
                                                    <td class="td2"> 
                                                    
                                                         
                                                         67.00 x 67.00 x 67.00
                                                         <br>
                                                    
                                                   </td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                        <div class="col-md-4">
                                            
                                                <table class="table s99" style="font-size: 13px;">
                                                    <tbody><tr>
                                                        <td class="td1">Quote</td>
                                                        <td class="td2">536.98 <br>
                                                            <i><u> (Quote is an estimate. Additional fees may apply.)
                                                            </u></i></td>
                                                    </tr>
                                                </tbody></table>
                                            
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
                                                            <td class="td2">414.22</td>
                                                        </tr>
                                                        
                                                            <tr>
                                                                <td class="td1 s40 ncl">- Security Surcharge</td>
                                                                <td class="td2">15.95</td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <td class="td1 s40 ncl">- Fuel Surcharge</td>
                                                                <td class="td2">57.99</td>
                                                            </tr>
                                                        
                                                          <tr>
                                                            <td class="td1 s41 ncl">- Total Charge</td>
                                                            <td class="td2">536.98</td>
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
                                                        <td class="td2"><?php echo $customers->customerName;?>
                                                        <?php echo $customers->contact_name;?>
                                                        <?php echo $customers->address;?>
                                                        <?php echo $customers->city;?>
                                                            
                                                        <?php echo $customers->postal_code;?>
                                                        <?php echo $customers->state_code;?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table s99" style="font-size: 13px; margin-bottom: 0px">
                                                    <tbody><tr>
                                                        <td class="td1" style="font-style: italic; text-decoration: underline;">
                                                            Receiver Address:</td>
                                                        <td class="td2">toll
                                                            toll
                                                            88
                                                            
                                                            
                                                            8001
                                                            MELBOURNE</td>
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
                                                <label class="control-label" for="inputName"> Content Description <span class="s30"> *</span>
                                                </label>
                                                
                                                
                                                    <input type="text" name="shipmentRequestModel.contentDetail.description" required maxlength="30" value="" id="form_booking_shipmentRequestModel_contentDetail_description" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Please limit content descriptions to 30 characters.">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputName"> Billing/Customer Reference <span class="s30"> *</span>
                                                </label>
                                                <input type="text" name="shipmentRequestModel.shipmentReference" required value="" id="form_booking_shipmentRequestModel_shipmentReference" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputName"> Special Delivery Instructions
                                                </label>
                                                <textarea name="shipmentRequestModel.shipmentInfo.specialDelivery" cols="" rows="" id="form_booking_shipmentRequestModel_shipmentInfo_specialDelivery" class="form-control"></textarea>
                                            </div>
											<div class="form-group">
												<label class="control-label" for="inputName"> Collection Reference No. <span class="s30"> *</span>
												</label>
												<input type="text" name="shipmentRequestModel.collectionReference" required value="" id="form_booking_shipmentRequestModel_collectionReference" class="form-control">
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
                <select name="shipmentRequestModel.scheduleCollectionSelect" id="ws-schedule-collection-select" class="form-control" onchange="onScheduleCollectionChange()">
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
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.companyName" required maxlength="25" value="<?php echo $customers->customerName;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_companyName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Company name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Contact Name <span class="s30">*</span>
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.contactName" maxlength="25" required value="<?php echo $customers->contact_name;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_contactName" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Contact name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Address <span class="s30"> *</span>
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.address" maxlength="25" required value="<?php echo $customers->address;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_address" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address line 1">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Address 2
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.address2" maxlength="25" value="<?php //echo $customers->customerName;?>T" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_address2" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Address line 2">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> City <span class="s30">*</span>
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.city" maxlength="25" required value="<?php echo $customers->city;?>" id="city" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:City">
               </div>
            </div>
          
            <div class="col-lg-7">
                <div class="form-group">
                    <label class="control-label" for="inputName"> Phone<span class="s30"> *</span>
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.phone" maxlength="25" required value="<?php echo $customers->phone;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_phone" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Phone">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Postal Code
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.postalCode" maxlength="25" required value="<?php echo $customers->postal_code;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_postalCode" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Postal code">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> State/Province
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.saddress.state" maxlength="25" value="<?php echo $customers->state_code;?>" id="form_booking_shipmentRequestModel_scheduleCollection_saddress_state" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:State\/Province">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label class="control-label" for="inputName"> Ready Time (DD-MM-YYYY)
                        </label>

                        <div class="form-group input-group">
							<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
							</span>
                            <input type="text" name="shipmentRequestModel.scheduleCollection.pickupDate" value="<?php echo date('Y-m-d');?>" readonly="readonly" id="form_booking_shipmentRequestModel_scheduleCollection_pickupDate" class="form-control form_datetime schedule-time" data-date-format="dd MM yyyy">
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
                            <select name="shipmentRequestModel.scheduleCollection.pickupTime" id="sel-pickup-time" class="form-control">
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
                            <select name="shipmentRequestModel.scheduleCollection.pickupTimeNoLater" id="sel-pickup-nolater" class="form-control">
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
                            </label> <select class="form-control">
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
                    <select name="shipmentRequestModel.scheduleCollection.locationCodeId" id="form_booking_shipmentRequestModel_scheduleCollection_locationCodeId" class="form-control">
    <option value="1">Business</option>
    <option value="2">Residence</option>
    <option value="3">Business/Residence</option>


</select>


                </div>
                <div class="form-group">
                    <label class="control-label" for="inputName"> Location Description <span class="s30"> *</span>
                    </label>
                    <input type="text" name="shipmentRequestModel.scheduleCollection.description" required maxlength="25" value="Front Desk" id="form_booking_shipmentRequestModel_scheduleCollection_description" class="form-control alloptions" data-toggle="tooltip" data-placement="top" data-original-title="TOOLTIP:Location description">
                </div>
            </div>
        </div>
    </div>
</div>
                                <div class="text-right pal pdt10">
                                <a href="<?php echo base_url('customer/shipment'); ?>" class="back"> <button class="btn s33" type="button">
                                        Back
                                    </button>
                                    <button class="btn s33 " type="button" onclick="doShip()">
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
<script type="text/javascript">

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