<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    History
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
                                                <div class="col-lg-12 pd0">
                                                    <div class="form-group mgb">
                                                        <table class="s36">
                                                            <tbody><tr>
                                                              <td>
                                                                <button class="btn s33 s44" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                                                </td>
                                                                <td>
                                                                    <button class="btn s33" type="button" onclick="javascript:exportToExcel();">
                                                                        Export to Excel
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <button class="btn s33" type="button" onclick="javascript:exportToPdf();">
                                                                        Export to PDF
                                                                    </button>
                                                                </td>
                                                                <td id="btngenerate_manifest" style="display: none">
                                                                    <button class="btn s33" type="button" onclick="javascript:generateManifest();">
                                                                        Generate Manifest
                                                                    </button>
                                                                </td>
                                                                <td id="btntollprioritygenerate_manifest" style="display: none">
                                                                    <button class="btn s33" type="button" onclick="javascript:generateTollPriorityManifest();">
                                                                        Generate Manifest(Toll)
                                                                    </button>
                                                                </td>
                                                                <td id="btntollipecgenerate_manifest" style="display: none">
                                                                    <button class="btn s33" type="button" onclick="javascript:generateTollIpecManifest();">
                                                                        Generate Manifest(Toll Ipec)
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 pd0" style="margin-top: 5px; display: none;" id="div_range_date">
                                                    <div class="form-group mgb">
                                                        <table class="s36">
                                                            <tbody><tr>
                                                                <td><label> From :
                                                                </label></td>
                                                                <td>
                                                                    <div class="form-group input-group mg0">
																		<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
																		</span> <input class="form-control form_datetime" id="txtFromDate" type="text" name="filterModel.fromDate" data-date-format="dd MM yyyy">
                                                                    </div>
                                                                </td>
                                                                <td><label> To :
                                                                </label></td>
                                                                <td>
                                                                    <div class="form-group input-group mg0">
																		<span class="input-group-addon s31"> <i class="fa fa-calendar"></i>
																		</span> <input class="form-control form_datetime" id="txtToDate" name="filterModel.toDate" type="text" data-date-format="dd MM yyyy">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 " id="button_actions" style="margin-top: 10px">

                                                    <button class="btn s33 s44" type="button" onclick="reshipHistory();" disabled="disabled">
                                                        Re-Ship Same Package
                                                    </button>
                                                    <button class="btn s33 s44" type="button" onclick="viewDetail();" disabled="disabled">
                                                        View Details
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btn_view_shipment_receipt" onclick="shipmentReceipt();" disabled="disabled">
                                                        Shipment Receipt
                                                    </button>
                                                        
                                                    <button class="btn s33 s44" type="button" id="btnViewAirbill" onclick="viewAirbill();" disabled="disabled">
                                                        View Airbill
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnViewThermalLabel" onclick="viewThermalLabel()" disabled="disabled">
                                                        Thermal Label
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnviewmanifest" onclick="viewManifest()" disabled="disabled">
                                                        View Manifest
                                                    </button>
                                                    
                                                    <button class="btn s33 s44" type="button" onclick="viewPackingList()" id="btn_packing_list" disabled="disabled">
                                                        View Packing List
                                                    </button>
                                                    <button class="btn s33 s44" type="button" onclick="viewTntConnote()" id="btn_tnt_connote" style="display: none" disabled="disabled">
                                                        Consignment Note
                                                    </button>
                                                    <button class="btn s33 s44" type="button" id="btnSendAirbill" onclick="sendAirbill();" disabled="disabled">
                                                        Send Airbill
                                                    </button>
                                                    
                                                        
                                                    <button class="btn s33 s44" type="button" onclick="trackAirbill();" disabled="disabled">
                                                        Track
                                                    </button>
                                                        
                                                    <button class="btn s33 s44" type="button" id="btn_void" onclick="voidAirbill();" disabled="disabled">
                                                        Void
                                                    </button>
                                                    
                                                        

                                                    <!-- Note -->

                                                    <!-- End AddNote -->
                                                </div>
                                             
                                                <div id="div_history_data">
                                                    <input type="hidden" name="" value="" id="hid_shipment_id">
                                                    <input type="hidden" name="" value="" id="hid_service_id">
                                                    <input type="hidden" id="hid_history_records" value="25">

                                                  
                                                        
                                                            <table class="table table-hover table-bordered mg0 datatable1" id="datatable1">
                                                                <thead>
                                                                <tr>
                                                                  
                                                                    <th>Carrier</th>
                                                                    <th>Voided</th>
                                                                    <th>Tracking#</th>
                                                                    <th>Date</th>
                                                                    <th>Time Stamp</th>
                                                                    <th>Ship Date</th>
                                                                    <th>Pieces</th>
                                                                    <th>Service</th>
                                                                    <th class="col_hidden th_package" style="display: none;">Package</th>
                                                                    <th>Weight</th>
                                                                    <th class="col_hidden th_dimensions" style="display: none;">
                                                                        Dimension</th>
                                                                    
                                                                        <th>Quoted</th>
                                                                    
                                                                        
                                                                    <th>Scheduled</th>
                                                                    <th>Scheduled collection timestamp</th>
                                                                    <th>Collection Information</th>
                                                                    <th class="col_hidden th_shipment_reference" style="display: none;">
                                                                        Reference</th>
                                                                    <th class="col_hidden th_billing_party" style="display: none;">
                                                                        Billing Party</th>
                                                                    <th class="col_hidden th_sender_company" style="display: none;">
                                                                        Sender Company</th>
                                                                    <th class="col_hidden th_sender_contact" style="display: none;">
                                                                        Sender Contact</th>
                                                                    <th class="col_hidden th_sender_location" style="display: none;">
                                                                        Sender Location</th>
                                                                    <th class="col_hidden th_receiver_company" style="display: none;">
                                                                        Receiver Company</th>
                                                                    <th class="col_hidden th_receiver_contact" style="display: none;">
                                                                        Receiver Contact</th>
                                                                    <th>Destination</th>
                                                                    <th>Dest. Country</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                    <tr class="tr_no_record">
                                                                        <td>
                                                                            <input type="checkbox" name="chk_multivoid[]" value="25569" id="form_history_chk_multivoid__" class="chk_multivoid chk_multivoid_NO" style="display: none;"><input type="hidden" id="__checkbox_form_history_chk_multivoid__" name="__checkbox_chk_multivoid[]" value="25569">
                                                                            <input type="hidden" name="" value="0" id="is_void">
                                                                         </td>

                                                                        <td>DHL <input type="hidden" name="" value="25569" id="shipmentId">
                                                                            <input type="hidden" name="" value="0" id="commercialInvoiceId">
                                                                            <input type="hidden" name="" value="13142" id="schedule_collection_id">
                                                                            <input type="hidden" name="" value="1" id="service_id"> <input type="hidden" name="" value="0" id="packingList"></td>
                                                                        <td class="td_void_status">NO</td>
                                                                        <td id="td_airbillNumber">4052114555</td>
                                                                        <td>06-04-2021</td>
                                                                        <td>12:37:26</td>
                                                                        <td>06-04-2021</td>
                                                                        <td>1</td>
                                                                        <td>DHL Worldwide Express</td>
                                                                        <td class="col_hidden th_package" style="display: none;">Customer packaging</td>
                                                                        <td>8.07 kg(s)</td>
                                                                        <td class="col_hidden th_dimensions" style="display: none;">31 X 31 X 42 cm</td>
                                                                        
                                                                            <td>
                                                                                305.72
                                                                             </td>
                                                                        
                                                                            
                                                                        <td class="td_schedule" id="is_scheduled">YES</td>
                                                                        <td>06-04-2021 13:00:00</td>
                                                                        <td>88632</td>
                                                                        <td class="col_hidden th_shipment_reference" style="display: none;">
                                                                            62015859 - Thomas </td>
                                                                        <td class="col_hidden th_billing_party" style="display: none;">
                                                                             </td>
                                                                        <td class="col_hidden th_sender_company" style="display: none;">
                                                                            Woodside Energy c/- AGL</td>
                                                                        <td class="col_hidden th_sender_contact" style="display: none;">
                                                                            DESPATCH</td>
                                                                        <td class="col_hidden th_sender_location" style="display: none;">
                                                                            PERTH AIRPORT, 6105</td>
                                                                        <td class="col_hidden th_receiver_company" style="display: none;">
                                                                            Woodside Energy Ltd </td>
                                                                        <td class="col_hidden th_receiver_contact" style="display: none;">
                                                                            Antonio Dos Santos </td>
                                                                        <td>DILI, </td>
                                                                        <td>East Timor</td>
                                                                    </tr>
                                                                
                                                                    </tbody>
                                                            </table>
                                                        
                                                        
                                                    </div>
                                                   </div>
                                                </div>
                                                <button class="btn s33 s44 multivoid" type="button" onclick="proceedToVoid();" style="display: none;">
                                                    Proceed to Void
                                                </button>
                                                <button class="btn s33 s44 multivoid" type="button" onclick="proceedToUpate();" style="display: none;">
                                                    Proceed to Update
                                                </button>
                                                <button class="btn s33 s44 multivoid" type="button" id="cancel_multivoid" style="display: none;">
                                                    Cancel
                                                </button>
                                                <div id="div_proceed_tovoid"></div>
                                                <div id="div_proceed_tovoid_result"></div>
                                                <div id="div_proceed_toupdate"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal pdt10">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group text-left s100">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label> <input type="checkbox" id="chk_show_option" onclick="showOption();"> &nbsp;
                                                                Show Report Options
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" id="div_list_chk_option" style="display: none;">
                                                <div class="form-group text-left s99">
                                                    <div class="form-group">
                                                        <label class="checkbox-inline"> <input type="checkbox" class="cb1" id="chk_option_all" onclick="optionShowAll();">
                                                            &nbsp; All
                                                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_package" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Package Type
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_dimensions" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Dimensions
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_shipment_reference" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Shipment Reference
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_billing_party" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Billing Party
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_company" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Sender Company
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_contact" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Sender Contact
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_location" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Sender Location
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_receiver_company" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Receiver Company
                                                    </label> <label class="checkbox-inline"> <input type="checkbox" name="th_receiver_contact" class="cb1" onclick="optionShowCol();">
                                                        &nbsp; Receiver Contact
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                
<script>
  $(document).ready(function() {
    $('#datatable1').DataTable( {
    } );
} );
</script>