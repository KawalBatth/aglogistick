<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Search Customers
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <div class="btn-group">
                                            <input type="button" id="export-option" class="btn s37" value="Option" onclick="exportClick($('#selected-option').val())">
                                            <button type="button" class="btn s37 dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" name="" id="selected-option">
                                            <form id="order-form">
                                                <input type="hidden" name="orderField" value="customer_code" id="order_field">
                                                <input type="hidden" name="orderType" value="0" id="order_type">
                                            </form>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#" onclick="exportClick('option')">Option</a></li>
                                                <li><a href="#" onclick="exportClick('export')">Export</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="portlet-body">
                                    <form id="search-customer-form">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                                <td>Franchise:</td>
                                                <td><select name="franchiseCode" id="franchiseCode" class="form-control" onchange="getSaleRepsList()">
    <option value="All">All</option>
    <option value="100">100 - AGL Logistics</option>
    <option value="101">101 - Gms-test</option>


</select>

</td>
                                                <td>&nbsp;</td>
                                                <td>Customer #:</td>
                                                <td><input type="text" name="customerCode" class="form-control"></td>
                                                <td>&nbsp;</td>
                                                <td>Submit Date Start:</td>
                                                <td>
                                                    <div class="form-group input-group" style="margin-bottom: 0px;">
													<input name="startDate" class="form-control form_datetime" type="date" data-date-format="dd MM yyyy">
                                                    </div>
                                                </td>
                                                <td>&nbsp;</td>
                                                <td>End:</td>
                                                <td>
                                                    <div class="form-group input-group" style="margin-bottom: 0px;">
														<input name="endDate" class="form-control form_datetime" type="date" data-date-format="dd MM yyyy">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="11" height="5"></td>
                                            </tr>
                                            <tr>
                                                <td>Sales Rep:</td>
                                                <td id="sale-rep-list-result"><select name="salesRepId" id="salesRepId" class="form-control">
    <option value="">All</option>
    <option value="1">AGL</option>
    <option value="388">Tset</option>
</select>

</td>
                                                <td>&nbsp;</td>
                                                <td>Web Freight Group:</td>
                                                <td><select name="webshipGroupId" id="webshipGroupId" class="form-control">
    <option value=""></option>
    <option value="0">Default</option>


</select>

</td>
                                                <td>&nbsp;</td>
                                                <td>Search Name:</td>
                                                <td><input name="customerName" type="text" class="form-control"></td>
                                                <td>&nbsp;</td>
                                                <td colspan="2">
                                                    <button class="btn s37" type="button" onclick="onGoClick()">
                                                        Go
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <table class="s36">
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <br>
                                   
                                    <div id="search-customers-list">
                                        <div>
                                            <table class="table table-hover table-bordered" id="customer_search">
                                                <thead>
                                                <tr>
                                                    <th sort-field="customer_code" style="cursor: pointer;">Customer # <i class="fa fa-sort-up"></i></th>
                                                    <th sort-field="customer_name" style="cursor: pointer;">Customer Name <i class="fa fa-sort"></i></th>
                                                    <th sort-field="webship_group_name" style="cursor: pointer;">Web Freight Group <i class="fa fa-sort"></i></th>
                                                    <th sort-field="sales_rep_name" style="cursor: pointer;">Sales Rep <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="customer_name" style="cursor: pointer;">Name <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_contact_name" style="cursor: pointer;">Attn <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_address1" style="cursor: pointer;">Addr 1 <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_address2" style="cursor: pointer;">Addr 2 <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_city" style="cursor: pointer;">City <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_country" style="cursor: pointer;">Country <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_postal_code" style="cursor: pointer;">Postal Code <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_phone" style="cursor: pointer;">Phone <i class="fa fa-sort"></i></th>
                                                    <th data-group="address-detail" sort-field="address_email" style="cursor: pointer;">Email <i class="fa fa-sort"></i></th>
                                                
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>No data available...</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form id="column-flags-form" name="column-flags-form" action="/crm-admin/search_customers.ix" method="post">
                                            <b>Columns: </b>
                                            <input type="checkbox" data-group="address-detail" onchange="onCheckboxToggle($(this))" checked="checked">
                                            <input type="hidden" name="columnFlags.hasAddress" value="true" id="column-flags-form_columnFlags_hasAddress" data-group="address-detail">
                                            Address
                                            <input type="checkbox" data-group="billing-detail" onchange="onCheckboxToggle($(this))">
                                            <input type="hidden" name="columnFlags.hasBilling" value="false" id="column-flags-form_columnFlags_hasBilling" data-group="billing-detail">
                                            Billing
                                            <input type="checkbox" data-group="dhl-cost-basis" onchange="onCheckboxToggle($(this))">
                                            <input type="hidden" name="columnFlags.hasDhlAccounts" value="false" id="column-flags-form_columnFlags_hasDhlAccounts" data-group="dhl-cost-basis">
                                            DHL Accounts
                                            <input type="checkbox" data-group="invoicing-option" onchange="onCheckboxToggle($(this))">
                                            <input type="hidden" name="columnFlags.hasInvoicingOptions" value="false" id="column-flags-form_columnFlags_hasInvoicingOptions" data-group="invoicing-option">
                                            Invoicing Option
                                            <input type="checkbox" data-group="dates" onchange="onCheckboxToggle($(this))">
                                            <input type="hidden" name="columnFlags.hasDates" value="false" id="column-flags-form_columnFlags_hasDates" data-group="dates">
                                            Dates
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>

<script>
  $(document).ready(function() {
    $('#customer_search').DataTable();
} );
</script>