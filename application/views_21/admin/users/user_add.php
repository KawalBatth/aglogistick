<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Add New User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/users/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-9">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Select Role</label>

                <div class="col-sm-9">
                  <select name="user_role" class="form-control">
                    <option value="">Select Role</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                  </select>
                </div>
				
              </div>
			  <table class="table" style="font-size: 11px;">
                        <tbody><tr>
                            <td colspan="3" style="border-top: 0px !important">
                                <div class="caption b17">
                                    Address
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="td1">Contact Name:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="contactName" value="" id="contactName" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Contact Title:</td>
                            <td class="td2" colspan="2"><input type="text" name="contactTitle" value="" id="contactTitle" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Address:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="address1" value="" id="address1" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">&nbsp;</td>
                            <td class="td2" colspan="2"><input type="text" name="address2" value="" id="address2" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">City:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><input type="text" name="city" value="" id="city" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">Country:<span class="s30">*</span></td>
                            <td class="td2" colspan="2"><select name="country" id="country" class="form-control uppercase" group="address">
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

</td>
                        </tr>
                        <tr>
                            <td class="td1">Postal Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="postalCode" value="" id="postalCode" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td1">State Code:</td>
                            <td class="td2" colspan="2"><input type="text" name="stateCode" value="" id="stateCode" class="form-control uppercase" group="address"></td>
                        </tr>

                        <tr>
                            <td class="td1">Fax:</td>
                            <td class="td2" colspan="2"><input type="text" name="fax" value="" id="fax" class="form-control uppercase" group="address"></td>
                        </tr>
                        <tr>
                            <td class="td2" colspan="2"><span> Eg: first@email.com; second@email.com
							</span></td>
                        </tr>
                        <tr>
                            <td class="td1">Alt Contact Phone:</td>
                            <td class="td2" colspan="2"><input type="text" name="alternatePhone" value="" id="alternatePhone" class="form-control uppercase" group="address"></td>
                        </tr>
                    </tbody></table>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add User" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 


<script>
$("#add_user").addClass('active');
</script>    