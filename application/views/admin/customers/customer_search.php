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
                                            <table class="table table-hover table-bordered" id="customer-list-table">
                                                <thead>
                                                <tr>
                                                    <th>Customer #</th>
                                                    <th>Customer Name</th>
                                                    <th>Web Freight Group</th>
                                                    <th>Sales Rep</th>
                                                    <th data-group="address-detail">Name</th>
                                                    <th data-group="address-detail">Attn</th>
                                                    <th data-group="address-detail">Addr 1</th>
                                                    <th data-group="address-detail">Addr 2</th>
                                                    <th data-group="address-detail">City</th>
                                                    <th data-group="address-detail">Country</th>
                                                    <th data-group="address-detail">Postal Code</th>
                                                    <th data-group="address-detail">Phone</th>
                                                    <th data-group="address-detail">Email</th>
                                                    <th data-group="billing-detail">Billing Name</th>
                                                    <th data-group="billing-detail">Billing Attn</th>
                                                    <th data-group="billing-detail">Billing Addr 1</th>
                                                    <th data-group="billing-detail">Billing Addr 2</th>
                                                    <th data-group="billing-detail">Billing City</th>
                                                    <th data-group="billing-detail">Billing Country</th>
                                                    <th data-group="billing-detail">Billing Postal Code</th>
                                                    <th data-group="billing-detail">Billing Phone</th>
                                                    <th data-group="billing-detail">Billing Email</th>
                                                    <th data-group="dhl-cost-basis">DHL Acct #</th>
                                                    <th data-group="dhl-cost-basis">Inbound Acct #</th>
                                                    <th data-group="invoicing-option">Inv Terms</th>
                                                    <th data-group="invoicing-option">Email Invoice?</th>
                                                    <th data-group="dates">Submitted</th>
                                                    <th data-group="dates">Activated</th>
                                                    
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>No data available...</td>
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
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
   $(document).ready(function() {
   // $('#customer-list-table').DataTable( {
   /// } );
//});
</script>
<script>
 
$("input[type='checkbox'][data-group]").each(function () {
            if ($(this).is(":checked")) {
                showColumns($(this).attr("data-group"), true);
            } else {
                showColumns($(this).attr("data-group"), false);
            }
        });
        var fieldList = ["customer_code", "customer_name", "webship_group_name", "sales_rep_name", "customer_name", "address_contact_name", "address_address1", "address_address2", "address_city", "address_country", "address_postal_code", "address_phone", "address_email", "billing_customer_name", "billing_contact_name", "billing_address1", "billing_address2", "billing_city", "billing_country", "billing_postal_code", "billing_phone", "billing_email", "dhl_international_account", "dhl_inbound_account", "invoice_days", "email_invoice", "create_date", "activate_date"];
        $("#customer-list-table").tablesorter({
            sortFieldId: "order_field",
            sortTypeId: "order_type",
            fieldList: fieldList,
            callback: doSearch
        });
    
  
    function showColumns(group, show) {
        if (show) {
            $("#search-customers-list [data-group='" + group + "']").show();
            $("#column-flags-form input[type='hidden'][data-group='" + group + "']").val("true");
        } else {
            $("#search-customers-list [data-group='" + group + "']").hide();
            $("#column-flags-form input[type='hidden'][data-group='" + group + "']").val("false");
        }
    }

    function onCheckboxToggle(obj) {
        var group = obj.attr("data-group");
        var show = obj.is(":checked");
        showColumns(group, show);
    }



    function doSearch(pageSize, page) {
        var p = typeof(page) != "undefined" ? page : "1";
        var ps = typeof(pageSize) != "undefined" ? pageSize : $("#pageSize").val();
        var data = $("#search-customer-form").serialize();
        data = data + "&page=" + p;
        data = data + "&pageSize=" + ps;
        data = data + "&" + $("#order-form").serialize();
        loadingDialog.dialog("open");
        $.post("search_customers_search.ix?reqType=json", data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                $("#search-customers-list").html(res.content);
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }

    function onGoClick() {
        var pageSize = $("select[name='pageSize'] option:selected").val();
        doSearch(pageSize, 1);
    }

    function changePage(page) {
        var pageSize = $("select[name='pageSize'] option:selected").val();
        doSearch(pageSize, page);
    }

    function exportClick(option) {
        var data = $("#search-customer-form").serialize() + "&" + $("#column-flags-form").serialize() + "&" + $("#order-form").serialize();
        $('#selected-option').val(option);
        switch (option) {
            case 'option':
                $("#export-option").val("Option");

                break;
            case 'export':
                $("#export-option").val("Export");
                var url = "search_customers_export.ix?" + data;
                window.open(url);
                break;
        }

    }

    function getSaleRepsList() {
        var data = $("select#franchiseCode option:selected").val();
        loadingDialog.dialog("open");
        $.post("search_customers_sale_rep_list.ix?reqType=json", "franchiseCode=" + data, function (res) {
            loadingDialog.dialog("close");
            if (res.errorCode == "SUCCESS") {
                $("#sale-rep-list-result").html(res.content);
            } else {
                alertDialog.html(res.errorMsg);
                alertDialog.dialog("open");
            }
        }).fail(function () {
            loadingDialog.dialog("close");
            alertDialog.html('System internal error, please contact administrator.');
            alertDialog.dialog("open");
        });
    }


</script>
