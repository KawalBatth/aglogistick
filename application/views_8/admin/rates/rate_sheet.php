<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Rate Sheets
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                                <div id="rate-sheets-div">
                                                    <table class="table table-bordered mg0 table-hover table-pointer" id="rate-sheets-table">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Carrier</th>
                                                            <th>Shipment Type</th>
                                                            <th>Type</th>
                                                            <th>Date Imported</th>
                                                            <th>Total Number of Cells</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr id="search-filter">
                                                            <td><input type="text" name="rateSheetFilter.rateSheetName" value="" id="rateSheetFilter_rateSheetName" class="form-control" onkeyup="searchOnKeypress()"></td>
                                                            <td><input type="text" name="rateSheetFilter.carrierName" value="" id="rateSheetFilter_carrierName" class="form-control" onkeyup="searchOnKeypress()"></td>
                                                            <td><input type="text" name="rateSheetFilter.serviceName" value="" id="rateSheetFilter_serviceName" class="form-control" onkeyup="searchOnKeypress()"></td>
                                                            <td><select name="rateSheetFilter.type" id="rateSheetFilter_type" class="form-control" onchange="searchOnKeypress()">
    <option value="0">Document</option>
    <option value="1">Package</option>


</select>

</td>
                                                            <td><input type="text" name="rateSheetFilter.importDate" value="" id="rateSheetFilter_importDate" class="form-control form_datetime" onchange="searchOnKeypress()"></td>
                                                            <td><input type="text" name="rateSheetFilter.totalCells" value="" id="rateSheetFilter_totalCells" class="form-control" onkeyup="searchOnKeypress()"></td>
                                                        </tr>
                                                        
                                                        
                                                            
                                                                <tr data-sheet-id="379" data-rate-sheet-name="Expedited_Package_OB_150617" ondblclick="showRateSheet($(this).attr('data-sheet-id'))">
                                                                    <td>Expedited_Package_OB_150617</td>
                                                                    <td></td>
                                                                    <td>Expedited</td>
                                                                    <td>Package</td>
                                                                    <td>15-06-2017</td>
                                                                    <td>40</td>
                                                                </tr>
                                                            
                                                                <tr data-sheet-id="380" data-rate-sheet-name="Perkg_Expedited_Package_OB_150617" ondblclick="showRateSheet($(this).attr('data-sheet-id'))">
                                                                    <td>Perkg_Expedited_Package_OB_150617</td>
                                                                    <td></td>
                                                                    <td>Expedited</td>
                                                                    <td>Package</td>
                                                                    <td>15-06-2017</td>
                                                                    <td>14</td>
                                                                </tr>
                                                            
                                             
                                                            
                                                        
                                                        </tbody>
                                                    </table>
                                                    <script type="text/javascript">
                                                        $(document).ready(function () {
                                                            $('table#rate-sheets-table tbody tr').click(function () {
                                                                var sheetId = $(this).attr('data-sheet-id');
                                                                var rateSheetName = $(this).attr('data-rate-sheet-name');
                                                                if (typeof (sheetId) != "undefined" && sheetId != "") {
                                                                    $(this).addClass('selected-row').siblings().removeClass('selected-row');
                                                                    $('#btnRemove').attr('disabled', false);
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions pal pdt10">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button class="btn s37" type="button" id="btnRemove" disabled="disabled" onclick="deleteRateSheet()">
                                                        Delete Selected Rate Sheet
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <script>
  $(document).ready(function() {
    $('#rate-sheets-table').DataTable();
} );
</script>