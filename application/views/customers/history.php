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
                                                                    <!--button class="btn s33" type="button" onclick="javascript:exportToPdf();">
                                                                        Export to PDF
                                                                    </button-->
                                                                    <input type="button" id="btnExport" class="btn export_pdf" value="Export Pdf" />
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
                                                                        <!--td>
                                                                            <input type="checkbox" name="chk_multivoid[]" value="25569" id="form_history_chk_multivoid__" class="chk_multivoid chk_multivoid_NO" style="display: none;"><input type="hidden" id="__checkbox_form_history_chk_multivoid__" name="__checkbox_chk_multivoid[]" value="25569">
                                                                            <input type="hidden" name="" value="0" id="is_void">
                                                                         </td-->

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
                                                                        <td>DILI</td>
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
                                            <div class="col-lg-12" id="div_list_chk_option" style="display: block;">
                                                <div class="form-group text-left s99">
                                                    <div class="form-group">
                                                        <label class="checkbox-inline"> <input type="checkbox" class="cb1" id="chk_option_all" onclick="optionShowAll();">
                                                            &nbsp; All
                                                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_package" class="cb1" onclick="optionShowCol();" checked="checked">
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
        </div>
    </div>
</form>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

                                
<script>
  $(document).ready(function() {
    $('#datatable1').DataTable( {
    } );
} );

$("body").on("click", "#btnExport", function () {
            html2canvas($('#datatable1')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("shippingHistoryReport.pdf");
                }
            });
        });

       


    new_aae_manifest = false;
    toll_view_gen_manifest = false;
    toll_ipec_view_gen_manifest = false;
    $(document).ready(function () {
        tnt_manifest_status = $("#tnt_manifest_status").val();

        toll_priority_manifest_status = $("#toll_priority_manifest_status").val();
        toll_ipec_manifest_status = $("#toll_ipec_manifest_status").val();
        if(tnt_manifest_status!=null && tnt_manifest_status!=undefined)
        {
            tnt_manifest_status = parseInt(tnt_manifest_status);
        }

        if(toll_priority_manifest_status!=null && toll_priority_manifest_status!=undefined)
        {
            toll_priority_manifest_status = parseInt(toll_priority_manifest_status);
        }

        if(toll_ipec_manifest_status!=null && toll_ipec_manifest_status!=undefined)
        {
            toll_ipec_manifest_status = parseInt(toll_ipec_manifest_status);
        }
        if(tnt_manifest_status>0)
        {
            new_aae_manifest = true;
        }else
        {
            new_aae_manifest = false;
        }
        if(toll_priority_manifest_status>0)
        {
            toll_view_gen_manifest = true;
        }

        if(toll_ipec_manifest_status>0)
        {
            toll_ipec_view_gen_manifest = true;
        }

        $("#div_range_date").hide();
        $("#div_list_chk_option").hide();
        var hid_history_records = $("#hid_history_records").val();

        $("#button_actions").find("button").attr("disabled", true);
        if (hid_history_records > 0) {
            $("#multi_void, #update_collection").attr("disabled", false);
        }
        $(".chk_multivoid").hide();
        $(".col_hidden").hide();
        optionShowAll();
        optionShowCol();

        $('.multivoid').hide();


    });
    function multiVoid() {
        $('.chk_multivoid_NO').show();
        $('.multivoid').show();

        $("#button_actions").find("button").attr("disabled", true);
        $("#multi_void, #update_collection").attr("disabled", false);
    }

    $('#cancel_multivoid').click(function () {
        $('.chk_multivoid_NO').hide();
        $('.multivoid').hide();
    });
    function refreshHistory() {
        $("#hid_page").val(1);
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');
    }

    function changePage(page) {
        $("#hid_page").val(page);
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');

    }

    function sendAirbill() {
        var shipment_id = $("#hid_shipment_id").val();
        var emails = $('#list_email').val();
        loadDialogFieldError("send_airbill.ix?reqType=json", {
            'shipmentId': shipment_id,
            'sendAirlbillHistoryFillterModel.templateEmail': 'Send Airbill Label'
        }, "form-send-airbill", "Send", "Close", "send-airbill-dialog", "Send Airbill", "error_send_airbill");
    }
    function showNote() {
        var shipment_id = $("#hid_shipment_id").val();
        var data = {
            'shipmentNoteFilterModel.shipmentId': shipment_id,
            'shipmentNoteFilterModel.sizeRecord': 10
        };
        var data2 = {
            'shipmentNoteFilterModel.shipmentId': shipment_id
        };
        loadTwoDialogWithUpdate("history_shipment_note.ix?reqType=json", data, null, "note-dialog", "Add Note", "Cancel", "View Note", data2);
    }
    function addNote() {
        var shipment_id = $("#hid_shipment_id").val();
        var data = {
            'shipmentNoteFilterModel.shipmentId': shipment_id
        };
        loadDialogAddNote("history_shipment_note_add.ix?reqType=json", data, "form-add-note", "Add", "Cancel", "add-note-dialog", "Add Note", "note-dialog");
    }

    function showOption() {
        if ($("#chk_show_option").is(":checked")) {
            $("#div_list_chk_option").slideDown();
        } else {
            $("#div_list_chk_option").slideUp();
        }
    }

    function optionShowAll() {
        if ($("#chk_option_all").is(":checked")) {
            $("#div_list_chk_option").find("input").attr('checked', true);
            $(".col_hidden").show("slow");
        } else {
            $("#div_list_chk_option").find("input").attr('checked', false);
            $(".col_hidden").hide("slow");
        }
        columnOption = '';
        $("#div_list_chk_option").find("input").each(function () {
            var nameColumn = $(this).attr("name");
            if (!$(this).is(":checked")) {
                columnOption += nameColumn+',';
            }
        });
    }

    function viewThermalLabel() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_thermal_label.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function updateCollectionNo() {
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');
    }

    function trackAirbill() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_tracking.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function optionShowCol() {
        columnOption = '';
        $("#div_list_chk_option").find("input").each(function () {
            var index = $("#div_list_chk_option").find("input").index(this) - 1;
            var nameColumn = $(this).attr("name");
            var colToHide = $(".datatable1").find("." + nameColumn);
            if ($(this).is(":checked")) {
                $(this).attr('checked', true);
                colToHide.show("slow");
            } else {
                $(this).attr('checked', false);
                colToHide.hide("slow");
                columnOption += nameColumn+',';
            }
        });
    }

    function proceedToVoid() {
        var a = document.getElementsByName('chk_multivoid[]');
        var len = a.length;
        var list_sm = "0";
        var totalSm = 0;
        for (i = 0; i < len; i++) {
            if (a[i].checked == true) {
                list_sm = list_sm + "|" + a[i].value;
                totalSm = totalSm + 1
            }
        }
        var data = {
            'listShipmentId': list_sm
        };
        if (totalSm > 0) {
            var messageVoid = "Are You Sure Want To Void Total " + totalSm;
            loadConfirmDialog("history_proceed_to_void.ix?reqType=json", data, messageVoid, "div_proceed_tovoid", updateCollectionNo(), "OK", "Cancel", "Proceed To Void");
        } else {
            alert("Please select shipment(s) to void.");
        }

    }

    function proceedToUpate() {
        var a = document.getElementsByName('chk_multivoid[]');
        var len = a.length;
        var list_sm = "";
        var totalSm = 0;
        for (i = 0; i < len; i++) {
            if (a[i].checked == true) {
                list_sm = list_sm + "|" + a[i].value;
                totalSm = totalSm + 1
            }
        }
        if (totalSm > 0) {
            var contentDialog = '<p>New collection no:<form id="form_updateCollection"><input name="collectionNoNew" id="collection_no_new" class="form-control" /></form></p>';
            var messageUpdate = "Update Collection of  Total " + totalSm + contentDialog;
            var dataUpdate = {
                'listShipmentId': list_sm
            };
            loadConfirmDialog("history_proceed_update_collection.ix?reqType=json", dataUpdate, messageUpdate, "div_proceed_toupdate", updateCollectionNo(), "OK", "Cancel", "Proceed To Update Collection", "form_updateCollection");
        } else {
            alert("Please select shipment(s) to void.");
        }

    }

    function scheduleCollection(shipmentId) {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("schedule_collection_create.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();

    }

    function moScheduleCollection(shipmentId) {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("schedule_collection_modify.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function reshipHistory() {
        var serviceId = $(this).find("#service_id").val();
        var shipment_id = $("#hid_shipment_id").val();
        if (serviceId == "16" || serviceId == "17" || serviceId == "18" || serviceId == "19" || serviceId == "20" || serviceId == "26" || serviceId == "27" || serviceId == "36") {
            window.location = "view_shipment_receipt.ix?shipmentId=" + shipment_id;
        } else {
            window.location = "webship.ix?shipmentId=" + shipment_id;
        }
    }

    function shipmentReceipt() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_shipment_receipt.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function viewAirbill() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_airbill.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function viewCommercialInvoice() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_commercial_invoice.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function caScheduleCollection() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_cancel_collection.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function viewDetail() {
        var shipment_id = $("#hid_shipment_id").val();
        var data = {
            'shipmentId': shipment_id
        }
        loadDialogWithFunctionCallBack("history_detail.ix?reqType=json", data, exportDetail, "", "Close", "history_detaill", "Shipment Detail", "");

    }

    function exportDetail() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_export_detail.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function voidAirbill() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_void_airbill.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function exportToPdf() {
        var data = $("#form_history").serialize();
        columnOption = columnOption.replace("undefined,","");
        columnHide = "&columnHide="+ columnOption + "insured";
        window.open("history_export_pdf.ix?" + data + columnHide, '_self');
    }

    function generateManifest() {
        document.getElementById('btngenerate_manifest').style.display = "none";
        $.post("generate_tnt_manifest_list.ix", null, function(){
            alertDialog.html("Success");
            alertDialog.dialog("open");
        });
    }

    function generateTollPriorityManifest() {
        document.getElementById('btntollprioritygenerate_manifest').style.display = "none";
        $.post("generate_toll_priority_manifest_list.ix", null, function(){
            $("#toll_priority_manifest_status").val(0);
            toll_view_gen_manifest = false;
            alertDialog.html("Success");
            alertDialog.dialog("open");
        });
    }

    function generateTollIpecManifest() {
        document.getElementById('btntollipecgenerate_manifest').style.display = "none";
        $.post("generate_toll_ipec_manifest_list.ix", null, function(){
            $("#toll_ipec_manifest_status").val(0);
            toll_ipec_view_gen_manifest = false;
            alertDialog.html("Success");
            alertDialog.dialog("open");
        });
    }

    function exportDetail() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("history_export_detail.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function exportToExcel() {
        var data = $("#form_history").serialize();
        columnOption = columnOption.replace("undefined,","");
        columnHide = "&columnHide="+ columnOption + "insured";
        window.open("history_export_excel.ix?" + data + columnHide, '_self');
    }



    $("select#sel_total_date").change(function () {
        var total_date = $(this).val();
        if (total_date == 5) {
            $("#div_range_date").slideDown();
        } else {
            $("#div_range_date").find("input").val("");
            $("#div_range_date").slideUp();
        }
    });

    $("select#sel_page_size").change(function () {
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');
    });

    function viewPackingList() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_packing_list.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    $('table#datatable1 tbody tr').click(function () {
        $(this).addClass('selected-row').siblings().removeClass('selected-row');
        var shipmentId = $(this).find('#shipmentId').val();
        var commercialInvoiceId = $(this).find('#commercialInvoiceId').val();
        var scheduleCollectionId = $(this).find('#schedule_collection_id').val();
        var serviceId = $(this).find("#service_id").val();
        var packingList = $(this).find("#packingList").val();
        var isScheduled = $(this).find("#is_scheduled").val();
        $("#hid_shipment_id").val(shipmentId);
        $("#hid_service_id").val(serviceId);
        $("#hidenShipmentId").val(shipmentId);
        $("#hid_schedule_collection_id").val(scheduleCollectionId);
        var strvoid = $(this).find("td.td_void_status").text();

        if ($(".multivoid").css('display') == 'none') {
            $("#button_actions").find("button").attr("disabled", false);
            
            if (packingList == "2") {
                if ($(this).find("td.td_airbillNumber").text() == "" && serviceId == "50") {
                    $("#btn_packing_list").attr("disabled", true);
                } else {
                    $("#btn_packing_list").attr("disabled", false);
                }
            } else {
                $("#btn_packing_list").attr("disabled", true);
            }
            checkManifestButton(serviceId, strvoid);
            if (commercialInvoiceId == "3") {
                if ($(this).find("td.td_airbillNumber").text() == "" && serviceId == "50") {
                    $("#btn_viewcommercial").attr("disabled", true);
                } else {
                    $("#btn_viewcommercial").attr("disabled", false);
                }
            } else {
                $("#btn_viewcommercial").attr("disabled", true);
            }

            if ($(this).find("td.td_void_status").text() == "YES") {
                $("#btn_void").attr("disabled", true);
                $("#btn_schedule_collection, #btn_mo_schedule_collection, #btn_ca_schedule_collection").attr("disabled", true);
            } else {
                $("#btn_void").attr("disabled", false);
                if ($(this).find("td.td_schedule").html() == "YES") {
                    $("#btn_schedule_collection").attr("disabled", true);
                    if (serviceId == 54) {
                        $("#btn_mo_schedule_collection, #btn_ca_schedule_collection").attr("disabled", true);
                    } else {
                        $("#btn_mo_schedule_collection, #btn_ca_schedule_collection").attr("disabled", false);
                    }
                    if(serviceId==72)
                    {
                        $("#btn_ca_schedule_collection").attr("disabled", true);
                    }
                } else {
                    $("#btn_schedule_collection").attr("disabled", false);
                    $("#btn_mo_schedule_collection, #btn_ca_schedule_collection").attr("disabled", true);
                }
            }
            //$("#btn_ca_schedule_collection").attr("disabled", true);//disiable modifie collection
            if (serviceId != 1 && serviceId != 3 && serviceId != 15 && serviceId != 52 && serviceId != 54 && serviceId != 59 && serviceId != 72 && serviceId != 46) {
                $("#btnViewAirbill").attr("disabled", true);
                $("#btnViewThermalLabel").attr("disabled", true);
                $("#btnSendAirbill").attr("disabled", true);
            }
            
            if (serviceId == 400){
				$("#btnViewAirbill").attr("disabled", false);
                $("#btnViewThermalLabel").attr("disabled", false);
                $("#btnSendAirbill").attr("disabled", false);
			}
        } else {
            $("#button_actions").find("button").attr("disabled", true);
            $("#multi_void, #update_collection").attr("disabled", false);
            $("#btn_ca_schedule_collection").attr("disabled", true);//disiable modifie collection
        }
        if(serviceId == "16" || serviceId == "17" || serviceId == "18" || serviceId == "19" || serviceId == "20" || serviceId == "26" || serviceId == "27" || serviceId == "36")
        {
            $("#btn_view_shipment_receipt").attr("disabled", false);
            $("#btn_schedule_collection").attr("disabled", false);
            $("#btn_mo_schedule_collection").attr("disabled", true);
            $("#btn_ca_schedule_collection").attr("disabled", true);
        }else
        {
            $("#btn_view_shipment_receipt").attr("disabled", true);
        }
        if (serviceId == 54) {
            $("#btn_tnt_connote").show();
            $("#btn_tnt_connote").attr("disabled", false);
        } else {
            $("#btn_tnt_connote").hide();
            $("#btn_tnt_connote").attr("disabled", true);
        }
    });

    $('table#datatable1 tbody tr').dblclick(function () {
        $(this).addClass('selected-row').siblings().removeClass('selected-row');
        var shipmentId = $(this).find('#shipmentId').val();
        $("#hid_shipment_id").val(shipmentId);
        viewDetail();
    });

    function checkManifestButton(service_id, strvoid) {


        document.getElementById("btngenerate_manifest").style.display = "none";
        document.getElementById("btntollprioritygenerate_manifest").style.display = "none";
        document.getElementById("btntollipecgenerate_manifest").style.display = "none";
        if (service_id == 50 || service_id == 2 || (service_id == 3 && strvoid != "YES")) {
            $("#btnviewmanifest").attr("disabled", false);
             if(new_aae_manifest==true){
                 document.getElementById("btngenerate_manifest").style.display = "block";
             }
        } else if (service_id == 52) {
            $("#btnviewmanifest").attr("disabled", false);
//             if(new_toll_manifest==true){
             $("#toll_btngenerate_manifest").attr("disabled", false);
             if(toll_view_gen_manifest)
             {
                 document.getElementById("btntollprioritygenerate_manifest").style.display = "block";
                 $("#btntollprioritygenerate_manifest").attr("disabled", false);
             }else
             {
                 document.getElementById("btntollprioritygenerate_manifest").style.display = "none";
             }
//             }
        } else if (service_id == 59) {
            $("#btnviewmanifest").attr("disabled", false);
//             if(new_toll_manifest==true){
            $("#toll_ipec_btngenerate_manifest").attr("disabled", false);
            if(toll_ipec_view_gen_manifest)
            {
                document.getElementById("btntollipecgenerate_manifest").style.display = "block";
                $("#btntollipecgenerate_manifest").attr("disabled", false);
            }else
            {
                document.getElementById("btntollipecgenerate_manifest").style.display = "none";
            }
        } else if (service_id == 54) {
            $("#btnviewmanifest").attr("disabled", false);
//             if(new_tnt_int_manifest==true){
             $("#btngenerate_manifest").attr("disabled", true);
//             }
        } else if (service_id == 72) {
            $("#btnviewmanifest").attr("disabled", false);
        } else {
            $("#btnviewmanifest").attr("disabled", true);
        }
    }
    function viewManifest() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_manifest.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function viewTntConnote() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_tnt_connote.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }


          
           
                var loadingDialog = $("#loading-dialog").dialog({
                    autoOpen: false,
                    modal: true,
                    dialogClass: "no-close",
                    show: {
                        effect: 'fade',
                        duration: 300
                    }
                });
                var alertDialog = $("#alert-dialog").dialog({
                    modal: true,
                    autoOpen: false,
                    maxHeight: 800,
                    minWidth: 400,
                    buttons: {
                        'Close': function () {
                            $(this).dialog("close");
                        }
                    }
                });

                function doLoginAs() {
                    var name = $("#txtLoginAsName").val();
                    var data = {
                        "name": name
                    };
                    $.post("quick_search_login_as.ix?reqType=json", data, function (res) {
                        if (res.errorCode == "SUCCESS") {
                            loginAsDialog.html(res.content);
                            loginAsDialog.dialog("open");
                        } else {
                            alertDialog.html(res.errorMsg);
                            alertDialog.dialog("open");
                        }
                    }).fail(function () {
                        alertDialog.html('System internal error, please contact administrator.');
                        alertDialog.dialog("open");
                    });
                }
          
</script>