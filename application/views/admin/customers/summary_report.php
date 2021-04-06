<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Customer Summary Report
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <div class="btn-group">
                                            <input type="button" id="export-option" class="btn s37" value="Option" onclick="exportClick($('#selected-option').val())">
                                            <button type="button" class="btn s37 dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" name="" value="option" id="selected-option">
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#" onclick="exportClick('option')">Option</a></li>
                                                <li><a href="#" onclick="exportClick('print')">Print</a></li>
                                                <li><a href="#" onclick="exportClick('export')">Export</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <ul id="generalTab" class="nav nav-tabs responsive hidden-xs hidden-sm">
                                    <li class="active" style="margin-left: 10px;"><a href="#General-information-tab" data-toggle="tab">General Information</a></li>
                                    <li><a href="#Carrier-list-tab" data-toggle="tab">Carrier List</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="generalTabContent" class="tab-content responsive hidden-xs hidden-sm">
                                            <div id="General-information-tab" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <form id="frmCustomerSummarySearch">
                                                                <table class="s36 b24">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Franchise</td>
                                                                        <td><select name="franchiseCode" id="franchiseCode" class="form-control">
    <option value="All">All</option>
    <option value="100">
        100 - AGL Logistics
</option>
    <option value="101">
        101 - Gms-test
</option>


</select>

</td>
                                                                        <td>Sales Rep</td>
                                                                        <td><select name="saleRepId" id="saleRepId" class="form-control">
    <option value="">All</option>
    <option value="1">AGL</option>
    <option value="388">AGL</option>
</select>

</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="s36 b24">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Period</td>
                                                                        <td><select name="dateRange" id="dateRange" class="form-control" onchange="onChangeDateRange()">
    <option value="">Custom Date Range</option>
    <option value="05-04-2021 - 11-04-2021">05-04-2021 - 11-04-2021</option>
    <option value="29-03-2021 - 04-04-2021">29-03-2021 - 04-04-2021</option>

</select>

</td>
                                                                        <td><input id="startDate" name="startDate" class="form-control form_datetime" type="text" data-date-format="dd MM yyyy" style="width: 70px;" placeholder="Start" readonly="readonly"></td>
                                                                        <td><input id="endDate" name="endDate" class="form-control form_datetime" type="text" data-date-format="dd MM yyyy" style="width: 70px;" placeholder="End" readonly="readonly"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="col-lg-12 row">
                                                                    <table class="s36 b24">
                                                                        <tbody><tr>
                                                                            <td><input type="checkbox" name="showCostRevenue" value="true" id="chkShowDetail" onclick="onShowDetailClick()"><input type="hidden" id="__checkbox_chkShowDetail" name="__checkbox_showCostRevenue" value="true"></td>
                                                                            <td>Show Cost/ Revenue Detail Columns</td>
                                                                            <td>&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input type="checkbox" name="excludeGst" value="true" id="excludeGst" onchange="doSearch()"><input type="hidden" id="__checkbox_excludeGst" name="__checkbox_excludeGst" value="true"></td>
                                                                            <td>Exclude GST/VAT</td>
                                                                            <td rowspan="2"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input type="checkbox" name="excludeGstSurcharge" value="true" id="excludeGstSurcharge" onchange="doSearch()"><input type="hidden" id="__checkbox_excludeGstSurcharge" name="__checkbox_excludeGstSurcharge" value="true"></td>
                                                                            <td>Exclude Duty/Tax</td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="Carrier-list-tab" class="tab-pane fade in">
                                                <div class="row b25c" id="service_tree">
                                                    <div class="row">
                                                        
                                                            
                                                                <div class="row">
                                                            
                                                            <div class="col-xs-3">
                                                                <table class="s36 b25a">
                                                                    <tbody><tr>
                                                                        <td>
                                                                            <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv_1"></button>
                                                                        </td>
                                                                        <td><input type="checkbox" id="chk_service_1" onclick="onServiceCheck($(this))" carrier-id="1">
                                                                        </td>
                                                                        <td>DHL</td>
                                                                    </tr>
                                                                </tbody></table>
                                                                
                                                                    
                                                                    <div id="sv_1" class="collapse">
                                                                        <table class="s36 b25b">
                                                                            
                                                                                <tbody><tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_1" onclick="onShipmentTypeCheck($(this))" carrier-id="1" service-id="1">
                                                                                    </td>
                                                                                    <td>DHL Worldwide Express</td>
                                                                                </tr>
                                                                            
                                                                        </tbody></table>
                                                                    </div>
                                                                
                                                            </div>
                                                            
                                                        
                                                            
                                                            <div class="col-xs-3">
                                                                <table class="s36 b25a">
                                                                    <tbody><tr>
                                                                        <td>
                                                                            <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv_52"></button>
                                                                        </td>
                                                                        <td><input type="checkbox" id="chk_service_52" onclick="onServiceCheck($(this))" carrier-id="52">
                                                                        </td>
                                                                        <td>Toll Priority</td>
                                                                    </tr>
                                                                </tbody></table>
                                                                
                                                                    
                                                                    <div id="sv_52" class="collapse">
                                                                        <table class="s36 b25b">
                                                                            
                                                                                <tbody><tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_172" onclick="onShipmentTypeCheck($(this))" carrier-id="52" service-id="172">
                                                                                    </td>
                                                                                    <td>Parcels Overnight</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_173" onclick="onShipmentTypeCheck($(this))" carrier-id="52" service-id="173">
                                                                                    </td>
                                                                                    <td>Parcels OffPeak</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_175" onclick="onShipmentTypeCheck($(this))" carrier-id="52" service-id="175">
                                                                                    </td>
                                                                                    <td>Auswide 1kg Satchel</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_176" onclick="onShipmentTypeCheck($(this))" carrier-id="52" service-id="176">
                                                                                    </td>
                                                                                    <td>Auswide 3kg Satchel</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_177" onclick="onShipmentTypeCheck($(this))" carrier-id="52" service-id="177">
                                                                                    </td>
                                                                                    <td>Auswide 5kg Satchel</td>
                                                                                </tr>
                                                                            
                                                                        </tbody></table>
                                                                    </div>
                                                                
                                                            </div>
                                                            
                                                        
                                                            
                                                            <div class="col-xs-3">
                                                                <table class="s36 b25a">
                                                                    <tbody><tr>
                                                                        <td>
                                                                            <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv_59"></button>
                                                                        </td>
                                                                        <td><input type="checkbox" id="chk_service_59" onclick="onServiceCheck($(this))" carrier-id="59">
                                                                        </td>
                                                                        <td>Toll Ipec</td>
                                                                    </tr>
                                                                </tbody></table>
                                                                
                                                                    
                                                                    <div id="sv_59" class="collapse">
                                                                        <table class="s36 b25b">
                                                                            
                                                                                <tbody><tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_216" onclick="onShipmentTypeCheck($(this))" carrier-id="59" service-id="216">
                                                                                    </td>
                                                                                    <td>ROAD EXPRESS</td>
                                                                                </tr>
                                                                            
                                                                        </tbody></table>
                                                                    </div>
                                                                
                                                            </div>
                                                            
                                                        
                                                            
                                                            <div class="col-xs-3">
                                                                <table class="s36 b25a">
                                                                    <tbody><tr>
                                                                        <td>
                                                                            <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv_72"></button>
                                                                        </td>
                                                                        <td><input type="checkbox" id="chk_service_72" onclick="onServiceCheck($(this))" carrier-id="72">
                                                                        </td>
                                                                        <td>Startrack</td>
                                                                    </tr>
                                                                </tbody></table>
                                                                
                                                                    
                                                                    <div id="sv_72" class="collapse">
                                                                        <table class="s36 b25b">
                                                                            
                                                                                <tbody><tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_228" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="228">
                                                                                    </td>
                                                                                    <td>Road Express</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_229" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="229">
                                                                                    </td>
                                                                                    <td>Premium Air Freight</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_230" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="230">
                                                                                    </td>
                                                                                    <td>Fixed Price Premium 1kg</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_231" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="231">
                                                                                    </td>
                                                                                    <td>Fixed Price Premium 3kg</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_232" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="232">
                                                                                    </td>
                                                                                    <td>Fixed Price Premium 5kg</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_234" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="234">
                                                                                    </td>
                                                                                    <td>Fixed Price Premium 10kg</td>
                                                                                </tr>
                                                                            
                                                                                <tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_235" onclick="onShipmentTypeCheck($(this))" carrier-id="72" service-id="235">
                                                                                    </td>
                                                                                    <td>Fixed Price Premium 20kg</td>
                                                                                </tr>
                                                                            
                                                                        </tbody></table>
                                                                    </div>
                                                                
                                                            </div>
                                                            
                                                                </div>
                                                            
                                                        
                                                            
                                                                <div class="row">
                                                            
                                                            <div class="col-xs-3">
                                                                <table class="s36 b25a">
                                                                    <tbody><tr>
                                                                        <td>
                                                                            <button type="button" class="fa fa-chevron-circle-right s10 b3" data-toggle="collapse" data-target="#sv_400"></button>
                                                                        </td>
                                                                        <td><input type="checkbox" id="chk_service_400" onclick="onServiceCheck($(this))" carrier-id="400">
                                                                        </td>
                                                                        <td>UPS Express</td>
                                                                    </tr>
                                                                </tbody></table>
                                                                
                                                                    
                                                                    <div id="sv_400" class="collapse">
                                                                        <table class="s36 b25b">
                                                                            
                                                                                <tbody><tr>
                                                                                    <td><span style="margin-left: 20px;">&nbsp;</span><input type="checkbox" id="chk_shipment_type_250" onclick="onShipmentTypeCheck($(this))" carrier-id="400" service-id="250">
                                                                                    </td>
                                                                                    <td>Express Saver</td>
                                                                                </tr>
                                                                            
                                                                        </tbody></table>
                                                                    </div>
                                                                
                                                            </div>
                                                            
                                                        
                                                    </div>
                                                    <input type="hidden" name="" id="export-data">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="tab-content responsive hidden-xs hidden-sm" style="padding-top: 0px">
                                            <button class="btn s37" type="button" onclick="onSearchClick()">
                                                Go
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-content responsive hidden-xs hidden-sm">
                                            <div class="tab-pane fade in active">
                                                <table class="table mg0">
                                                    <tbody><tr>
                                                        <th class="s42">Show <select name="pageSize" id="pageSize" style="height:22px; padding-top:1px;" onchange="doSearch()">
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>


</select>


                                                            entries</th>
                                                    </tr>
                                                </tbody></table>
                                                <div id="customer-summary-result" style="overflow: auto; min-width: 300px;">
                                                    <input type="hidden" name="rptTxnId" value="" id="rptTxnId">
                                                    <input type="hidden" name="page" value="" id="page">
                                                    <input type="hidden" name="orderField" value="" id="orderField">
                                                    <input type="hidden" name="orderType" value="" id="orderType">
                                                    <table class="table table-bordered mg0 table-hover" id="customer_summary_table">
                                                        <thead>
                                                        <tr>
                                                            <th>Customer #</th>
                                                            <th>Customer Name</th>
                                                            <th>Sales Rep</th>
                                                            <th>Customer Revenue</th>
                                                            <th>Franchise Cost</th>
                                                            
                                                                <th>Carrier Cost</th>
                                                            
                                                            <th>Gross Margin</th>
                                                            <th>Gross Margin %</th>
                                                            <th>Customer Cost (Base Charge)</th>
                                                            <th>Franchise Cost (Base Charge)</th>
                                                            
                                                                <th>Carrier Cost (Base Charge)</th>
                                                            
                                                            <th>Margin On Base Charge</th>
                                                            <th>Total Shipments</th>
                                                            <th>Avg.Margin Per AWB</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            
                                                                <td colspan="14">No data available...</td>
                                                            
                                                            
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="panel-group responsive visible-xs visible-sm" id="collapse-generalTab"><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-generalTab" href="#collapse-General-information-tab">General Information</a></h4></div><div id="collapse-General-information-tab" class="panel-collapse collapse in"><div class="panel-body"></div></div></div><div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-generalTab" href="#collapse-Carrier-list-tab">Carrier List</a></h4></div><div id="collapse-Carrier-list-tab" class="panel-collapse collapse"><div class="panel-body"></div></div></div></div>
                        </div>
                    </div>