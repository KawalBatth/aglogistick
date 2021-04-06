<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Customer Status Report
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <table class="s36">
                                            <tbody>
                                            <tr>
                                                <td><input id="chkExcGst" type="checkbox" onclick="showHideColumns()">
                                                </td>
                                                <td>Exclude GST/VAT</td>
                                                <td>|</td>
                                                <td>Franchise</td>
                                                <td><select name="franchiseCode" id="franchiseCode" class="form-control">
    <option value="All">All</option>
    <option value="100">100 - AGL Logistics</option>
    <option value="101">101 - Gms-test</option>


</select>

</td>
                                                <td>
                                                    <button class="btn s37" type="button" onclick="search()">
                                                        &nbsp;
                                                        Go
                                                        &nbsp;
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-header">
                                <div class="row">
                                    <div class="tab-content" style="font-size: 11px;">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <strong>Carriers:</strong>
                                            </div>
                                        </div>
                                        
                                            <div class="col-md-2 col-sm-6">
                                                <input type="checkbox" name="chkService1" service-group="1" onclick="showHideColumns()">
                                                DHL
                                            </div>
                                        
                                            <div class="col-md-2 col-sm-6">
                                                <input type="checkbox" name="chkService52" service-group="52" onclick="showHideColumns()">
                                                Toll Priority
                                            </div>
                                        
                                            <div class="col-md-2 col-sm-6">
                                                <input type="checkbox" name="chkService59" service-group="59" onclick="showHideColumns()">
                                                Toll Ipec
                                            </div>
                                        
                                            <div class="col-md-2 col-sm-6">
                                                <input type="checkbox" name="chkService72" service-group="72" onclick="showHideColumns()">
                                                Startrack
                                            </div>
                                        
                                            <div class="col-md-2 col-sm-6">
                                                <input type="checkbox" name="chkService400" service-group="400" onclick="showHideColumns()">
                                                UPS Express
                                            </div>
                                        
                                    </div>
                                </div>
                                <table class="s36">
                                    <tbody><tr>
                                        <td></td>

                                    </tr>
                                </tbody></table>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <div class="row" id="customer-status-report">
                                            <input type="hidden" name="rptTxnId" value="" id="rptTxnId">
                                            <div class="col-lg-12" id="weekly-report-result">
                                                <input type="hidden" name="weeklyField" value="" id="weeklyField">
                                                <input type="hidden" name="weeklyType" value="" id="weeklyType">
                                                <table class="table table-bordered mg0" id="weekly_report_table">
                                                    <thead>
                                                    <tr>
                                                        <th>Period</th>
                                                        <th>Setups</th>
                                                        <th>Activations</th>
                                                        <th>Total Ship</th>
                                                        <th group="inc-gst">Total Rev</th>
                                                        <th group="exc-gst" style="display: none;">Total Rev</th>
                                                        <th group="inc-gst">Total Mrg</th>
                                                        <th group="exc-gst" style="display: none;">Total Mrg</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="8">No data available...</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div style="clear: both; width: 1px; height: 30px;"></div>
                                            <div class="col-lg-12" id="monthly-report-result">
                                                <input type="hidden" name="monthlyField" value="" id="monthlyField">
                                                <input type="hidden" name="monthlyType" value="" id="monthlyType">
                                                <table class="table table-bordered mg0">
                                                    <thead>
                                                    <tr>
                                                        <th>Month</th>
                                                        <th>Setups</th>
                                                        <th>Activations</th>
                                                        <th>Total Ship</th>
                                                        <th group="inc-gst">Total Rev</th>
                                                        <th group="exc-gst" style="display: none;">Total Rev</th>
                                                        <th group="inc-gst">Total Mrg</th>
                                                        <th group="exc-gst" style="display: none;">Total Mrg</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="8">No data available...</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>