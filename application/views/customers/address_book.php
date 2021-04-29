
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open(base_url('customer/update_address_book'), 'class="address_book_add-form" '); ?>
      <div class="modal-body">
      <input type="hidden"  name="address_id" class="form-control" value="" id="address_id">
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
    <option value="0">country</option>
    <option value="1">Afghanistan</option>
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
    <option value="29">BQN</option>
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
    <option value="241">Congo,The Democratic Republic</option>
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
    <option value="242">England EU</option>
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
    <option value="244">French Polynesia</option>
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
    <option value="260">Scotland EU</option>
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
                                            { ?>
                                  <tr data-address-id="<?php echo $address_book[$i]['id'];?>">
                                  <?php $id= $address_book[$i]['id']; ?>
                                                                <td><?php echo $address_book[$i]['contact_name'];?></td>
                                                                <td><?php echo $address_book[$i]['company_name'];?></td>
                                                                <td><?php echo $address_book[$i]['address'];?></td>
                                                                <td><?php echo $address_book[$i]['address1'];?></td>
                                                                <td><?php echo $address_book[$i]['city'];?></td>
                                                                <td><?php echo $address_book[$i]['state'];?></td>
                                                                <td><?php echo $address_book[$i]['postcode'];?></td>
                                                                <td><?php echo $address_book[$i]['country'];?></td>
                                                                <td><?php echo $address_book[$i]['phone'];?></td>
                              
                               <td>     <button type="button" class="btn s33 s44 remove" id="remove"> Delete</button> </td>
                                                            
                                                            </tr>
                                                    <?php }?>
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
                                          
                                          <a href="<?= base_url('admin/address_book_import'); ?>" class="btn s33 s44">Import</a>
                                            <button class="btn s33 s44" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                            <!--a href="/crm-webship/address_book_export.ix" class="btn s33 s44">Export</a-->
                                            <input type="button" id="btnExport" class="btn s33 s44" value="Export to Pdf" />
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="btn s33 s44" type="button" onclick="onShipTo()">
                                                Ship To
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
 
<script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
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
        });
          

//To enable and disable edit surcharge button
$(document).on('click', '#address-book-table tbody tr', function(e) {
    $('#address-book-table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#EditButton").prop('disabled', false);
});


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
     $('#exampleModal #addressemail').val(addressEmail);
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


  $(document).ready(function() {
    $('#address-book-table').DataTable( {
    } );
} );
</script>