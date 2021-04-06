<div class="col-lg-12">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Admin Country List
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb" id="div_list_chk_option">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="th_gst" onclick="javascript:optionShowCol();"></td>
                                                <td>Show GST</td>
                                                <td><input type="checkbox" name="th_ap_code" onclick="javascript:optionShowCol();"></td>
                                                <td>Show DHL</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <input type="hidden" name="" id="hid_country_id_selected">
                                <input type="hidden" name="orderType" value="0" id="order_type">
                                <input type="hidden" name="orderField" value="countryCode" id="order_field">
                                <input type="hidden" name="page" value="1" id="country_page">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <b>Note:</b> <br>
                                                    - Double-click a setting to modify its value.WARNING - any change to the values below will take effect immediately.
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <table class="table mg0">
                                                    <tbody>
                                                    <tr>
                                                        <th class="s42">
                                                            <table class="s36">
                                                                <tbody>
                                                                <tr>
                                                                    <td>Show</td>
                                                                    <td><select name="pageSize" id="country_page_size" onchange="doSearch()">
    <option value="25" selected="selected">25</option>
    <option value="50">50</option>
    <option value="100">100</option>


</select>

</td>
                                                                    <td>Entries</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div id="country_list_data">
                                                    <table class="table table-bordered mg0" id="country-list-table">
                                                        <thead>
                                                        <tr>
                                                            <th sort-field="countryCode" style="cursor: pointer;">Country Code <i class="fa fa-sort-up"></i></th>
                                                            <th sort-field="countryName" style="cursor: pointer;">Country Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="displayName" style="cursor: pointer;">Display Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="otherName" style="cursor: pointer;">Other Name <i class="fa fa-sort"></i></th>
                                                            <th class="col_hidden th_gst" sort-field="gstPercent" style="display: none; cursor: pointer;">GST <i class="fa fa-sort"></i></th>
                                                            <th sort-field="modifiedDate" style="cursor: pointer;">Last Modified <i class="fa fa-sort"></i></th>
                                                            <th sort-field="isShow" style="cursor: pointer;">Show in Country List <i class="fa fa-sort"></i></th>
                                                            <th class="col_hidden th_ap_code" sort-field="dhlApCode" style="display: none; cursor: pointer;">DHL-AP Code <i class="fa fa-sort"></i></th>
                                                            <th class="col_hidden th_ap_code" sort-field="dhlApZone" style="display: none; cursor: pointer;">DHL-AP Zone <i class="fa fa-sort"></i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="adm-country-list-filter">
                                                            <td><input type="text" name="countryCode" value="" id="countryCode" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td><input type="text" name="countryName" value="" id="countryName" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td><input type="text" name="displayName" value="" id="displayName" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td><input type="text" name="otherName" value="" id="otherName" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td class="col_hidden th_gst" style="display: none;"><input type="text" name="gst" value="" id="gst" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td><input type="text" name="modifiedDate" value="" id="modifiedDate" class="form-control form_datetime" onchange="doSearch()" data-date-format="dd MM yyyy"></td>
                                                            <td>
                                                                <!--<input type="checkbox" name="isShow" value="true" id="isShow" onchange="doSearch()"/><input type="hidden" id="__checkbox_isShow" name="__checkbox_isShow" value="true" />-->
                                                                &nbsp;
                                                            </td>
                                                            <td class="col_hidden th_ap_code" style="display: none;"><input type="text" name="apCode" value="" id="apCode" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                            <td class="col_hidden th_ap_code" style="display: none;"><input type="text" name="apZone" value="" id="apZone" class="form-control" onkeyup="onSearchCountryKeyUp()"></td>
                                                        </tr>
                                                        
                                                            
                                                                <tr id="edit-country-link">
                                                                    <td><input type="hidden" name="" value="267" id="country_id">
                                                                        </td>
                                                                    <td>St. Vincent and the Grenadines</td>
                                                                    <td>St. Vincent and the Grenadines</td>
                                                                    <td>VC</td>
                                                                    <td class="col_hidden th_gst" style="display: none;">0.00</td>
                                                                    <td>10-09-2012</td>
                                                                    <td><input type="checkbox" name="isShow" value="true" checked="checked" id="isShow" onclick="isShow($(this).is(':checked'), $(this).attr('countryId'));" countryid="267"><input type="hidden" id="__checkbox_isShow" name="__checkbox_isShow" value="true"></td>
                                                                    <td class="col_hidden th_ap_code" style="display: none;"></td>
                                                                    <td class="col_hidden th_ap_code" style="display: none;"></td>
                                                                </tr>
                                                            
                                                               
                                                            
                                                        
                                                        
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate records">
                                                        <div class="row">
                                                            <div class="col-xs-4 text-left">
                                                                <b>Showing 1
                                                                    to 25
                                                                 entries</b>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                
                                                                    <a class="paginate_button previous disabled">Previous</a>
                                                                
                                                                
																<span> 
                                                                    
                                                                        <a class="paginate_button current">1</a>
                                                                    
                                                                
                                                                
																</span>
                                                                
                                                                
                                                                    <a class="paginate_button next" href="javascript:changePage(2)">Next</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions pal pdt10">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button class="btn s37" type="button" onclick="viewState()" id="btn_view_state" disabled="disabled">
                                                        View State/City
                                                    </button>
                                                    <button class="btn s37" type="button" onclick="addNewCountry()">
                                                        Add New Country
                                                    </button>
                                                    <button class="btn s37" type="submit">
                                                        Import
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>