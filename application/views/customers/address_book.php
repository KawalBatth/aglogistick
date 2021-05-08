
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" id="exampleModalLabel">Edit Address Book Details</h5-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open(base_url('customer/update_address_book'), 'class="address_book_add-form" '); ?>
      <div class="modal-body">
      <input type="hidden"  name="address_id" class="form-control" value="" id="address_id">
      <input type="hidden" name="customerCode" id="customerCode" value="<?php echo $customers->customer_id;?>">
      <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Address Fields
                                </div>
                                <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php if(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } }?>
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
                                                    <label class="control-label" for="inputName" data-label="Contact"> Contact <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressContactName" value="" id="addresscontactName" class="form-control" required="required">
                         </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company
                                                    </label>
                                                    <input type="text" name="addressCompanyName" value="" id="addresscompanyName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Address"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="addressAddress1" value="" id="address1" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="addressAddress2" value="" id="address2" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="City"> City <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressCity" value="" id="addresscity" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div id="city-search"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> State/Province
                                                    </label>
                                                    <input type="text" name="addressState" value="" id="addressstate" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="addressPostalCode" value="" id="addresspostalCode" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Country"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="addressCountry" id="addressCountryId" class="form-control" required="required">
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


                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Phone"> Phone <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressPhone" value="" id="addressphone" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email
                                                    </label>
                                                    <input type="email" name="addressEmail" value="" id="addressemail" class="form-control">
                                                    <span class="s30"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Department
                                                    </label>
                                                    <input type="text" name="addressDepartment" value="" id="addressdepartment" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Fax
                                                    </label>
                                                    <input type="text" name="addressFax" value="" id="addressfax" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Service Type
                                                    </label>
                                                    <select name="addressDefaultServiceType" id="defaultServiceType" class="form-control">
    <option value="0">No default</option>
    <option value="0">Not Available</option>
    <option value="1">DHL Worldwide Express</option>
</select>


                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Package Type</label>
                                                    <select name="addressDefaultPackageType" id="defaultPackageType" class="form-control">
    <option value="0">No default</option>
    <option value="1">
    	Star Track
</option>
</select>
     </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Billing Type</label>
                                                    <select name="addressDefaultBillingType" id="defaultBillingType" class="form-control">
    <option value="0">No default</option>
    <option value="1">
    	Sender
</option>
    <option value="2">
    	Receiver
</option>
    <option value="3">
    	Third Party
</option>

</select>
 </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName">Account No</label>
                                                    <input type="text" name="addressAccountNumber" value="" id="addressAccountNumber" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isResidential" id="isResidential" type="checkbox" value="1">
                                                        &nbsp; Residential Address
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="addressBookModel.addressId" value="" id="address_book_add_addressBookModel_addressId">
                                    <div class=" text-right pal pdt10">
                                       
                                        <!--a href="http://localhost/agllogistic/customer/address_book" class="btn s33 ">Cancel</a-->
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
                            </div>
                        </div>
                    </div>
                </div>
           
      </div>
      <div class="modal-footer">
        
      <button type="submit" name="submit" class="btn s33 s44">Update</button>
        <button type="button" class="btn s33 s44" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
   </div>
</div>

<div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Address Book
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
                                            
                                            
                                            <div id="div-address-book-table" class="col-xs-12">
                                                <table class="table table-hover table-bordered mg0" id="address-book-table">
                                                    <thead>
														<tr>
															<th>Contact</th>
															<th>Company</th>
															<th>Address#</th>
															<th>Address 2</th>
															<th>City</th>
															<th>State/Province</th>
															<th>Postal Code</th>
															<th>Country</th>
															<th>Phone</th>
															<th>Action</th>
														</tr>
                                                    </thead>
													<tbody>
														<?php for($i=0;$i<count($address_book);$i++)
														{ 
															if($address_book[$i]['customer_id'] == $customers->customer_id){ ?>
																<tr data-address-id="<?php echo $address_book[$i]['id'];?>" id="<?php echo $address_book[$i]['id'];?>" >
																	<?php  
																		$addressId =  $address_book[$i]['id'];
																		$id	= $address_book[$i]['customer_id']; ?>
																	<td><?php echo $address_book[$i]['contact_name'];?></td>
																	<td><?php echo $address_book[$i]['company_name'];?></td>
																	<td><?php echo $address_book[$i]['address'];?></td>
																	<td><?php echo $address_book[$i]['address1'];?></td>
																	<td><?php echo $address_book[$i]['city'];?></td>
																	<td><?php echo $address_book[$i]['state'];?></td>
																	<td><?php echo $address_book[$i]['postcode'];?></td>
																	<td><?php echo $address_book[$i]['country'];?></td>
																	<td><?php echo $address_book[$i]['phone'];?></td>
																	<td>     
																		<button type="button" class="btn s33 s44 remove" id="remove">Delete</button> 
																	</td>
																</tr>
															<?php } 
														} ?>
													</tbody>
                                                </table>
                                                <input type="hidden" name="" value="1" id="currPage">
                                                <input type="hidden" id="selectedId" value="">
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('#selectedId').val("");
                                                        $('table#address-book-table tbody tr').click(function () {
                                                            $(this).addClass('selected-row').siblings().removeClass('selected-row');
                                                            selectedAddressId = $(this).attr("data-address-id");
                                                           // $('#selectedId').val(selectedAddressId);
                                                            $('#btnEdit').attr('disabled', false);
                                                            $('#btnRemove').attr('disabled', false);
                                                        });
                                                    });
                                                </script>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-right pal pdt10">
                                    <div class="row">
                                        <div class="col-lg-10 text-left">
                                            <a href="<?= base_url('customer/address_book_add'); ?>" class="btn s33 s44">Add</a>
                                            <button type="button" onclick="editAddressBook()" id="EditButton" class="btn s33 s44" disabled>Edit</button>
                                            <div class="col-md-12 head">
												<div class="float-right">
													<a href="javascript:void(0);" class="btn s33 s44 import" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
												</div>
											</div>
											  <!-- File upload form -->
											  <div class="col-md-12" id="importFrm" style="display: none;">
												<form action="<?php echo base_url('members/import'); ?>" method="post" enctype="multipart/form-data">
													<input type="file" name="file" />
													<input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
												</form>
											</div>
                                          <!--a href="<?php //base_url('customer/import_excel'); ?>" class="btn s33 s44">Import</a-->
                                            <button class="btn s33 s44" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                            <!--a href="/crm-webship/address_book_export.ix" class="btn s33 s44">Export</a-->
                                            <!--input type="button" id="btnExport" class="btn s33 s44" value="Export to Pdf" /-->
                                            <button name="create_excel" id="create_excel" class="btn s33 export">Export Excel</button> 
                                        </div>
										<div class="col-lg-2">
											<?php if(!empty($addressId))
											{ ?>
												<button class="btn s33 s44" type="button" id="shipto" disabled onclick="onShipTo()">
													Ship To
												</button>
											<?php } 
											else { ?>
												<button class="btn s33 s44" type="button" id="shipto" onclick="myFunction()">Ship To </button>
											<?php } ?>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
  
 
<script type="text/javascript">
       /* $("body").on("click", "#btnExport", function () {
            html2canvas($('#address-book-table')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("address-book.pdf");
                }
            });
        });*/
        
		function onShipTo(){
			var row_id = $('tr.selected-row').attr('id');
			window.location.href = "<?php echo base_url('customer/shipment/?id='); ?>"+row_id;
		}
		
		function myFunction() {
			alert("Please select an address!");
		}
//To enable and disable edit surcharge button
$(document).on('click', '#address-book-table tbody tr', function(e) {
    $('#address-book-table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#EditButton").prop('disabled', false);
    $("#shipto").prop('disabled', false);
});


$('#create_excel').click(function() {
	  var titles = [];
	  var data = [];

	  $('.dataTable th').each(function() {
		titles.push($(this).text());
	  });

	  $('.dataTable td').each(function() {
		data.push($(this).text());
	  });

	  var CSVString = prepCSVRow(titles, titles.length, '');
	  CSVString = prepCSVRow(data, titles.length, CSVString);

	  var downloadLink = document.createElement("a");
	  var blob = new Blob(["\ufeff", CSVString]);
	  var url = URL.createObjectURL(blob);
	  downloadLink.href = url;
	  downloadLink.download = "data.csv";

	  document.body.appendChild(downloadLink);
	  downloadLink.click();
	  document.body.removeChild(downloadLink);
	});

	function prepCSVRow(arr, columnCount, initial) {
	  var row = ''; // this will hold data
	  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
	  var newLine = '\r\n'; // newline separator for CSV row

	  function splitArray(_arr, _count) {
		var splitted = [];
		var result = [];
		_arr.forEach(function(item, idx) {
		  if ((idx + 1) % _count === 0) {
			splitted.push(item);
			result.push(splitted);
			splitted = [];
		  } else {
			splitted.push(item);
		  }
		});
		return result;
	  }
	  var plainArr = splitArray(arr, columnCount);
	  plainArr.forEach(function(arrItem) {
		arrItem.forEach(function(item, idx) {
		  row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
		});
		row += newLine;
	  });
	  return initial + row;
	}



    function editAddressBook()
   {

    $('#exampleModal').modal('show');
    var address_id = $('.selected-row').attr('data-address-id');
    var addressContactName = $('.selected-row td:eq(0)').html();
    var addressCompanyName = $('.selected-row td:eq(1)').html();
    var addressAddress1 = $('.selected-row td:eq(2)').html();
    var addressAddress2 = $('.selected-row td:eq(3)').html();
    var addressCity = $('.selected-row td:eq(4)').html();
    var addressState = $('.selected-row td:eq(5)').html();
    var addressPostalCode = $('.selected-row td:eq(6)').html();
    var addressCountry = $('.selected-row td:eq(7)').html();
    var addressPhone = $('.selected-row td:eq(8)').html();
    var addressEmail = $('.selected-row td:eq(9)').html();
    var addressDepartment = $('.selected-row td:eq(10)').html();
    var addressFax = $('.selected-row td:eq(11)').html();
    var addressDefaultServiceType = $('.selected-row td:eq(12)').html();
    var addressDefaultPackageType = $('.selected-row td:eq(13)').html();
    var addressDefaultBillingType = $('.selected-row td:eq(14)').html();
    var addressAccountNumber = $('.selected-row td:eq(15)').html();
    var isResidential = $('.selected-row td:eq(16)').html();


    $('#exampleModal #addressCountryId option').each(function()
    {
        if($(this).html()==addressCountry)
        {
            $(this).prop('selected',true);
        } 
    });  
     $('#exampleModal #defaultServiceType option').each(function()
    {
        if($(this).html()==addressDefaultServiceType)
        {
            $(this).prop('selected',true);
        } 
    });   
   $('#exampleModal #defaultPackageType option').each(function()
    {
        if($(this).html()==addressDefaultPackageType)
        {
            $(this).prop('selected',true);
        } 
    });   
    $('#exampleModal #defaultBillingType option').each(function()
    {
        if($(this).html()==addressDefaultBillingType)
        {
            $(this).prop('selected',true);
        } 
    });   

     $('#exampleModal #addresscontactName').val(addressContactName);
     $('#exampleModal #addresscompanyName').val(addressCompanyName);
     $('#exampleModal #address1').val(addressAddress1);
     $('#exampleModal #address2').val(addressAddress2);
     $('#exampleModal #addresscity').val(addressCity);
     $('#exampleModal #addressstate').val(addressState);
     $('#exampleModal #addresspostalCode').val(addressPostalCode);
     $('#exampleModal #addressphone').val(addressPhone);
     $('#exampleModal #email').val(addressEmail);
     $('#exampleModal #addressdepartment').val(addressDepartment);
     $('#exampleModal #addressfax').val(addressFax);
     $('#exampleModal #addressAccountNumber').val(addressAccountNumber);
     $('#exampleModal #isResidential').val(isResidential);
     $('#exampleModal #address_id').val(address_id);
     
}


    
        $(".remove").click(function(){
        var id = $(this).parents("tr").attr("data-address-id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
             url: 'customers/delAddress/'+id,
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
    });

    function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}


  $(document).ready(function() {
    $('#address-book-table').DataTable( {
    } );
} );
</script>