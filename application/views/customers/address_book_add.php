<?php /*$address_id = @$_GET['id'];
if(isset($address_id))
{
  @$address_book= get_address_by_id($address_id);
  
   foreach($address_book as $key=>$value)
        { 
          if (!$value) 
            $address_book->$key = '';
        }
        
}
echo @$address_book;*/

?>
<form id="address_book_add" name="address_book_add">
<input type="hidden" name="customerCode" id="customerCode" value="<?php echo $customers->customer_id;?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Address Fields
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
                                                    <label class="control-label" for="inputName" data-label="Contact"> Contact <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressContactName" value="" id="address_book_add_addressBookModel_contactName" class="form-control" required="required">
                         </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company
                                                    </label>
                                                    <input type="text" name="addressCompanyName" value="" id="address_book_add_addressBookModel_companyName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Address"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="addressAddress1" value="" id="address_book_add_addressBookModel_address1" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="addressAddress2" value="" id="address_book_add_addressBookModel_address2" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="City"> City <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressCity" value="" id="address_book_add_addressBookModel_city" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div id="city-search"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> State/Province
                                                    </label>
                                                    <input type="text" name="addressState" value="" id="address_book_add_addressBookModel_state" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="addressPostalCode" value="" id="address_book_add_addressBookModel_postalCode" class="form-control">
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
                                                    <input type="text" name="addressPhone" value="" id="address_book_add_addressBookModel_phone" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email
                                                    </label>
                                                    <input type="email" name="addressEmail" value="" id="address_book_add_addressBookModel_email" class="form-control">
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
                                                    <input type="text" name="addressDepartment" value="" id="address_book_add_addressBookModel_department" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Fax
                                                    </label>
                                                    <input type="text" name="addressFax" value="" id="address_book_add_addressBookModel_fax" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Service Type
                                                    </label>
                                                    <select name="addressDefaultServiceType" id="address_book_add_addressBookModel_defaultServiceType" class="form-control">
    <option value="0">No default</option>
    <option value="0">Not Available</option>
    <option value="1">DHL Worldwide Express</option>
</select>


                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Package Type</label>
                                                    <select name="addressDefaultPackageType" id="address_book_add_addressBookModel_defaultPackageType" class="form-control">
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
                                                    <select name="addressDefaultBillingType" id="address_book_add_addressBookModel_defaultBillingType" class="form-control">
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
                                                    <input type="text" name="addressAccountNumber" value="" id="address_book_add_addressAccountNumber" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isResidential" type="checkbox" value="1">
                                                        &nbsp; Residential Address
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="addressBookModel.addressId" value="" id="address_book_add_addressBookModel_addressId">
                                    <div class=" text-right pal pdt10">
                                        <button class="btn s33 " type="button" onclick="saveNewAddressBook()">
                                            Save
                                        </button>
                                        <a href="<?= base_url('customer/address_book'); ?>" class="btn s33 ">Cancel</a>
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
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

        <script>
        
    function saveNewAddressBook() {
      
     var formdata = $("#address_book_add").serialize();
      var isfromsubmit = true;
      var isfromsubmitvalue = true;
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
             
      });
      if(isfromsubmit==true)
      {
        alertDialog.dialog("close"); 
        $.ajax({
            url: 'customers/add_address_book',
           //url: "<?php //echo base_url('customer/add_address_book');?>",
             type: 'POST',
             data:formdata,
             error: function() {
                alert('Something is wrong');
             },
             success: function(res) {
                //location.reload();
                alert("Address Book added Suucessfully");
                window.location.href = "address_book";
             }
          });
      }
    
  }

  // To disappear a Falsh message
var timeout = 2000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);

</script>
<style>
.ui-widget-content {
    background: #ffffff;
    padding: 0px;
    position: relative;
    padding: 1.6em;
    border: 0;
    margin-top: 0px !important;
}

span.ui-button-text {
    margin-left: -20px;
}

.ui-dialog .ui-dialog-title {
    /* float: left; */
    margin: .1em 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-top: 3px !important;
}

button.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-icon-only.ui-dialog-titlebar-close {
    background: none;
}

.ui-dialog .ui-dialog-title {
    float: none !important;
    margin: 0;
    border-bottom: none;
    color:#fff !important;
}

.ui-button .ui-button-text {
    display: inline-block;
    text-indent: 0;
}
    </style>