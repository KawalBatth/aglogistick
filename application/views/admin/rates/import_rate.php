<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Import Rate Sheet
                                </div>
                                <div class="col-lg-8 flr">
                                    <div class="form-group flr mgb">
                                        <div class="btn-group" id="btn-export" style="display: none;">
                                            <input type="button" id="export-option" class="btn s37" value="Option" onclick="exportClick($('#selected-option').val())">
                                            <button type="button" class="btn s37 dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                <span class="caret"></span>
                                            </button>
                                            <input type="hidden" name="" id="selected-option">
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#" onclick="exportClick('option')">Option</a></li>
                                                <li><a href="#" onclick="exportClick('html')">Print</a></li>
                                                
                                                    <li><a href="#" onclick="exportClick('xls')">Export</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-12 ">
                                                <div class="form-group ">
                                                    <table class="s36 b24">
                                                        <tbody><tr>
                                                            <td>Please name the rate sheet*
                                                            </td>
                                                            <td><input type="text" name="sheet_name" value="" id="sheet_name" class="form-control"></td>
                                                            <td>Carrier*</td>
                                                            <td><select name="services" id="services" class="form-control" onchange="getRateSheetType()">
    
    <option value="72">Startrack</option>
   


</select>

</td>
                                                            <td>Rate Sheet Type*</td>
                                                            <td id="rateSheetType"><select class="form-control" id="shipment_type" name="shipment_type" onchange="changeSheetType()">
                                                                <option value="218,1,0,0,1">
                                                                            Dangerous Goods -
                                                                            Package</option>
                                                                    
                                                                    
                                                                <option value="186,0,0,0,1">
                                                                            DHL domestic</option>
                                                                    
                                                            </select></td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </div>
                                            <div class="pal form-actions">
                                                <table class="s36">
                                                    <tbody>
                                                    <tr id="source_zone">
                                                        <td><input type="checkbox" name="isSourceZone" id="isSourceZone" onchange="checkSourceZone(this)">
                                                            Specify Source Zone (Country - Country Only)
                                                        </td>
                                                        <td><input type="text" name="source_zone" value="" disabled="disabled" id="source_zone" class="form-control" style="width: 40px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="hidden" name="file_path" value="" id="file_path"> <input type="file" name="fileUpload" value="" id="rate_sheet_upload" class="w10">
                                                            <div class="progress progress-striped active" style="display: none">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr id="carrier_cost" style="display: none;">
                                                        <td><input type="checkbox" name="isCarrierCost" id="isCarrierCost">
                                                            This is a Carrier Cost rate sheet. Rate Sheet.
                                                        </td>
                                                    </tr>
                                                    <tr id="per_weight">
                                                        <td><input type="checkbox" name="isPerWeight" id="isPerWeight">
                                                            This is a Per Weight Rate Sheet.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn s37" type="button" onclick="saveRateSheet()">
                                                                Save Rate Sheet
                                                            </button>
                                                             
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


          