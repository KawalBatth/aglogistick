<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption" id="manage-customer-title">
                                    Edit Customer
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                                <td>Search</td>
                                                <td><input id="searchText" name="searchText" class="form-control b20" type="text"></td>
                                                <td><select name="franchiseCode" id="franchiseCode" class="form-control" onchange="onFranchiseChange()">
    <option value="100">100 - AGL Logistics</option>
    <option value="101">101 - Gms-test</option>


</select>

</td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="onGoClick()">
                                                        Search
                                                    </button>
                                                </td>
                                                <td id="search-customer-list"><select name="customerCode" id="customerCode" class="form-control" onchange="onCustomerCodeChange()">
    <option value="-1">Select a Customer</option>
    <option value="0">Add a Customer</option>
    <option value="10000018">10000018 -Test</option>
    <option value="10000019">10000019 - TEST</option>
</select>

</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;" id="manage-customer-content-body">
                                <ul id="manage_customer_tab_nav" class="nav nav-tabs responsive hidden-xs hidden-sm">
                                    <li class="active" style="margin-left: 10px;"><a href="#account-setup-tab" data-toggle="tab">Account Setup</a></li>
                                    <li><a href="#address-tab" data-toggle="tab">Address</a>
                                    </li>
                                    <li><a href="#base-rates-tab" data-toggle="tab">Base Rates</a></li>
                                    
                                    <li><a href="#markups-tab" data-toggle="tab">Markups</a>
                                    </li>
                                    
                                   
                                    <li><a href="#webship-tab" data-toggle="tab">Web Freight</a>
                                    </li>
                                    <li><a href="#notes-tab" data-toggle="tab">Notes</a></li>
                                    <li><a href="#history-tab" data-toggle="tab">History</a>
                                    </li>
                                    <li><a href="#webship-history-tab" data-toggle="tab">Web Freight History</a></li>
                                </ul>
                                <div id="manage_customer_tab_content" class="tab-content responsive hidden-xs hidden-sm">
                                    <div id="account-setup-tab" class="tab-pane fade in active"></div>
                                    <div id="address-tab" class="tab-pane fade"></div>
                                    <div id="base-rates-tab" class="tab-pane fade"></div>
                                    <!-- <div id="invoice-options-tab" class="tab-pane fade"></div> -->
                                    <div id="markups-tab" class="tab-pane fade"></div>
                                    <div id="payments-tab" class="tab-pane fade"></div>
                                   <!--  <div id="collections-tab" class="tab-pane fade"></div> -->
                                    <div id="webship-tab" class="tab-pane fade"></div>
                                    <div id="notes-tab" class="tab-pane fade"></div>
                                    <div id="history-tab" class="tab-pane fade"></div>
                                    <div id="webship-history-tab" class="tab-pane fade"></div>
                                </div><div class="panel-group responsive visible-xs visible-sm" id="collapse-manage_customer_tab_nav"><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-account-setup-tab">Account Setup</a></h4></div><div id="collapse-account-setup-tab" class="panel-collapse collapse in"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-address-tab">Address</a></h4></div><div id="collapse-address-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-base-rates-tab">Base Rates</a></h4></div><div id="collapse-base-rates-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-markups-tab">Markups</a></h4></div><div id="collapse-markups-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-webship-tab">Web Freight</a></h4></div><div id="collapse-webship-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-notes-tab">Notes</a></h4></div><div id="collapse-notes-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-history-tab">History</a></h4></div><div id="collapse-history-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-manage_customer_tab_nav" href="#collapse-webship-history-tab">Web Freight History</a></h4></div><div id="collapse-webship-history-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div></div>
                                <div class="pal form-actions">
                                    <table class="s36" align="right">
                                        <tbody>
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class="btn s37" type="reset" name="reset">
                                                    Reset
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn s37" type="button">
                                                    Save
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    