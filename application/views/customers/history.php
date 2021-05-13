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
                                <tbody>
                                        <tr class="upper">
                                            <td>
                                                <button class="btn s33 s44" type="button" onClick="window.location.reload()">
                                                    Refresh
                                                </button>
                                            </td>
                                            <td>
                                                 <button name="create_excel" id="create_excel" class="btn s33">Export to Excel</button> 
                                                   
                                            </td>
                                            <td>
                                            <input type="button" id="btnExport" class="btn s33 export_pdf" value="Export to Pdf" />
                                            </td>
                                       
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                      
                        <div id="div_history_data">
                            <input type="hidden" name="" value="" id="hid_shipment_id">
                            <input type="hidden" name="" value="" id="hid_tracking_id">
                            <input type="hidden" name="" value="" id="hid_table_id">
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
                                    <?php foreach ($historys as $history) { ?>
                                        <tr class="tr_no_record" id="<?php echo $history['id']; ?>">
                                   <?php     $history_id = $history['id']; ?>
                                            <!--td>
                                                                            <input type="checkbox" name="chk_multivoid[]" value="25569" id="form_history_chk_multivoid__" class="chk_multivoid chk_multivoid_NO" style="display: none;"><input type="hidden" id="__checkbox_form_history_chk_multivoid__" name="__checkbox_chk_multivoid[]" value="25569">
                                                                            <input type="hidden" name="" value="0" id="is_void">
                                                                         </td-->
                                            <?php $carrier = $this->db->where('id', $history['carrier_id'])->get('carriers')->row(); ?>
                                            <td><?php print_r($carrier->carrier_name); ?><input type="hidden" name="" value="<?php echo $this->user_model->get_history($history['id']); ?>" id="shipmentId">
                                                <input type="hidden" name="" value="<?php echo $this->user_model->get_tracking_id($history['id']); ?>" id="trackingID">
                                                <input type="hidden" name="" value="13142" id="schedule_collection_id">
                                                <input type="hidden" name="" value="<?php echo $history['id'] ?>" id="userId">
                                                <input type="hidden" name="" value="1" id="service_id"> <input type="hidden" name="" value="0" id="packingList">
                                            </td>
                                            <td class="td_void_status">NO</td>
                                            <td id="td_airbillNumber"><?php echo $this->user_model->get_tracking_id($history['id']); ?></td>
                                            <?php  $date = $history['ready_date'];
                                                $ship_date= date('d-m-Y', strtotime($date)); ?>
                                            <td><?php echo $ship_date; ?></td>
                                            <td><?php echo $history['collect_ready_time'] ?></td>
                                            <td><?php echo $ship_date; ?></td>
                                            <td>1</td>
                                            <td><?php echo $history['service_name'] ?></td>
                                            <td class="col_hidden th_package" style="display: none;">Customer packaging</td>
                                            <td><?php echo $this->user_model->get_iteam_weight($history['id']); ?> kg(s)</td>
                                            <td class="col_hidden th_dimensions" style="display: none;"><?php echo $history['ship_length']. "X" . $history['ship_width']. "X" .$history['ship_height'];?> cm</td>

                                            <td>
                                                <?php echo $this->user_model->get_price($history['id']); ?>
                                            </td>


                                            <td class="td_schedule" id="is_scheduled">YES</td>
                                            <td><?php //echo $this->user_model->get_sechdule_date($history['id']); ?><?php echo $ship_date . " " .$history['collect_ready_time'];?></td>
                                            <td><?php echo $history['billing_ref']; ?></td>
                                            <td class="col_hidden th_shipment_reference" style="display: none;">
                                            <?php echo $history['billing_ref']; ?> </td>
                                            <td class="col_hidden th_billing_party" style="display: none;">
                                            </td>
                                            <td class="col_hidden th_sender_company" style="display: none;">
                                            <?php echo $history['sender_company']; ?></td>
                                            <td class="col_hidden th_sender_contact" style="display: none;">
                                            <?php echo $history['sender_contact']; ?></td>
                                            <td class="col_hidden th_sender_location" style="display: none;">
                                            <?php echo $history['sender_city'] . ", " . $history['sender_pin'];?></td>
                                            <td class="col_hidden th_receiver_company" style="display: none;">
                                            <?php echo $history['receiver_company']; ?></td>
                                            <td class="col_hidden th_receiver_contact" style="display: none;">
                                            <?php echo $history['receiver_contact']; ?> </td>
                                            <td><?php echo $history['receiver_city'] . " , " . $history['receiver_pin'];?></td>
                                            <td><?php echo $history['receiver_country']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

                <div class="col-lg-12 " id="button_actions" style="margin-top: 10px">
                <table class="s36">
<tbody>
    <?php if(!empty($history_id)){ ?>
<tr class="buttons">

<td><button class="btn s33 s44" type="button" data-toggle="modal" id="view" data-target="#exampleModal" disabled="disabled">
    View Details
</button></td>
<button class="btn s33" type="button" id="view" onclick="fecth_hstory()" disabled>View Details
                                                                </button>

<td><button class="btn s33 s44" type="button" id="btnViewAirbill" onclick="viewAirbill();" disabled="disabled">
    Freight Label
</button></td>
<!--td><button class="btn s33 s44" type="button" id="btnViewThermalLabel" onclick="viewThermalLabel()" disabled="disabled">
    Thermal Label
</button></td-->
<td>  <button class="btn s33 s44" type="button" id="btnviewmanifest" onclick="viewManifest()" disabled="disabled">
                                View Manifest
                            </button></td>

<td><button class="btn s33 s44" type="button" id="btnSendAirbill" onclick="sendAirbill();" disabled="disabled">
    Send Airbill
</button></td>


<td><button class="btn s33 s44" type="button" onclick="trackAirbill();" id="trackAirbill" disabled="disabled">
    Track
</button></td>

<td><button class="btn s33 s44" type="button" id="btn_void" onclick="voidHistory();" disabled="disabled">
    Void
</button></td>
</tr>
<?php } ?>
</tbody>
</table>

<div class="form-popup history-form" id="myForm">
<form id="saveQuoteLog history" name="saveQuoteLog">
<h3 class="history-title">Quote</h3>
<hr>
<table class="table">
   
   <tbody></table>
<div class="history-button">

   
    </div>
  </form>
</div>    
<!-- Note -->

<!-- End AddNote -->
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
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_package" class="cb1" onclick="optionShowCol();">
                            &nbsp; Package Type
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_dimensions" class="cb1" onclick="optionShowCol();">
                            &nbsp; Dimensions
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_shipment_reference" class="cb1" onclick="optionShowCol();">
                            &nbsp; Shipment Reference
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_billing_party" class="cb1" onclick="optionShowCol();">
                            &nbsp; Billing Party
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_company" class="cb1" onclick="optionShowCol();" checked="checked">
                            &nbsp; Sender Company
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_contact" class="cb1" onclick="optionShowCol();" checked="checked">
                            &nbsp; Sender Contact
                        </label> <label class="checkbox-inline"> <input type="checkbox" name="th_sender_location" class="cb1" onclick="optionShowCol();" checked="checked">
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
</div>
</div>
</div>
</form>




<div id="note-dialog"></div>
<div id="add-note-dialog"></div>
<div id="send-airbill-dialog"></div>

<div class="remember_me">
    <ul style="margin-left: 5px; margin-top: 10px;">
        <li style="color: #F00;"></li>
        <li style="color: #F00;"></li>
    </ul>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
 
	<script type="text/javascript">
		$("body").on("click", "#btnExport", function () {
			html2canvas($('#datatable1')[0], {
				onrendered: function (canvas) {
					var data = canvas.toDataURL();
					var docDefinition = {
						content: [{
							image: data,
							width: 550
						}]
					};
					pdfMake.createPdf(docDefinition).download("ShippingHistoryReport.pdf");
				}
			});
		});



        function voidHistory(){
			var row_id = $('tr.selected-row').attr('id');
			window.location.href = "<?php echo base_url('customer/history_void/?history_id='); ?>"+row_id;
		}

        $(document).ready(function() {
    $('#datatable1').DataTable( {
    } );
} );

    new_aae_manifest = false;
    toll_view_gen_manifest = false;
    toll_ipec_view_gen_manifest = false;
    $(document).ready(function() {
        tnt_manifest_status = $("#tnt_manifest_status").val();

        toll_priority_manifest_status = $("#toll_priority_manifest_status").val();
        toll_ipec_manifest_status = $("#toll_ipec_manifest_status").val();
        if (tnt_manifest_status != null && tnt_manifest_status != undefined) {
            tnt_manifest_status = parseInt(tnt_manifest_status);
        }

        if (toll_priority_manifest_status != null && toll_priority_manifest_status != undefined) {
            toll_priority_manifest_status = parseInt(toll_priority_manifest_status);
        }

        if (toll_ipec_manifest_status != null && toll_ipec_manifest_status != undefined) {
            toll_ipec_manifest_status = parseInt(toll_ipec_manifest_status);
        }
        if (tnt_manifest_status > 0) {
            new_aae_manifest = true;
        } else {
            new_aae_manifest = false;
        }
        if (toll_priority_manifest_status > 0) {
            toll_view_gen_manifest = true;
        }

        if (toll_ipec_manifest_status > 0) {
            toll_ipec_view_gen_manifest = true;
        }

        $("#div_range_date").hide();
        $("#div_list_chk_option").hide();
        var hid_history_records = $("#hid_history_records").val();

        $("#button_actions").find("button").attr("disabled", true);
        if (hid_history_records > 0) {
            $("#multi_void, #update_collection").attr("disabled", false);

            $(document).on('click', '#datatable1 tbody tr', function(e) {
                $('#datatable1 tbody tr').removeClass('selected-row');
                $(this).toggleClass('selected-row');
                $("#view").prop('disabled', false);
                $("#btnViewAirbill").prop('disabled', false);
                $("#btnviewmanifest").prop('disabled', false);
                $("#btnSendAirbill").prop('disabled', false);
                $("#btn_void").prop('disabled', false);
                $("#trackAirbill").prop('disabled', false);
            });

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

    $('#cancel_multivoid').click(function() {
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
        $("#div_list_chk_option").find("input").each(function() {
            var nameColumn = $(this).attr("name");
            if (!$(this).is(":checked")) {
                columnOption += nameColumn + ',';
            }
        });
    }

    function viewThermalLabel() {
        var id = $('#hid_shipment_id').val();
        $.ajax({
            url: "<?php echo base_url(); ?>track",
            method: "POST",
            data: {
                "_token": "{{csrf_token() }}",
                'id': id
            },
            success: function(data) {

                window.open(data);


            }

        });
    }

    function updateCollectionNo() {
        doPostDataNonError('history_search.ix?reqType=json', 'form_history', '', 'div_history_data');
    }




    function optionShowCol() {
        columnOption = '';
        $("#div_list_chk_option").find("input").each(function() {
            var index = $("#div_list_chk_option").find("input").index(this) - 1;
            var nameColumn = $(this).attr("name");
            var colToHide = $(".datatable1").find("." + nameColumn);
            if ($(this).is(":checked")) {
                $(this).attr('checked', true);
                colToHide.show("slow");
            } else {
                $(this).attr('checked', false);
                colToHide.hide("slow");
                columnOption += nameColumn + ',';
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


    function exportToPdf() {
        var data = $("#form_history").serialize();
        columnOption = columnOption.replace("undefined,", "");
        columnHide = "&columnHide=" + columnOption + "insured";
        window.open("history_export_pdf.ix?" + data + columnHide, '_self');
    }

    function generateManifest() {
        document.getElementById('btngenerate_manifest').style.display = "none";
        $.post("generate_tnt_manifest_list.ix", null, function() {
            alertDialog.html("Success");
            alertDialog.dialog("open");
        });
    }


    function exportToExcel() {
        var data = $("#form_history").serialize();
        columnOption = columnOption.replace("undefined,", "");
        columnHide = "&columnHide=" + columnOption + "insured";
        window.open("history_export_excel.ix?" + data + columnHide, '_self');
    }



    $('table#datatable1 tbody tr').click(function() {
        
        $(this).addClass('selected-row').siblings().removeClass('selected-row');
        var shipmentId = $(this).find('#shipmentId').val();
        var trackingId = $(this).find('#trackingID').val();
        var userId = $(this).find('#userId').val();
        console.log(shipmentId);
        $("#hid_shipment_id").val(shipmentId);
        $("#hid_tracking_id").val(trackingId);
        $("#hid_table_id").val(userId);
        viewDetail();
    });

    function viewAirbill() {
        var id = $('#hid_shipment_id').val();
        $.ajax({
            url: "<?php echo base_url(); ?>track",
            method: "POST",
            data: {
                "_token": "{{csrf_token() }}",
                'id': id
            },
            success: function(data) {

                window.open(data);


            }

        });

    }

    function trackAirbill() {
        var id = $("#hid_tracking_id").val();
        var tableId = $("#hid_table_id").val();
        window.location.href = "<?php echo base_url('customer/history_tracking'); ?>?trackingId=" + id + "&id=" + tableId;



    }



    function viewManifest() {
        var shipment_id = $("#hid_shipment_id").val();
        var id = $("#hid_table_id").val();
        $.ajax({
            url: "<?php echo base_url(); ?>order",
            method: "POST",
            data: {
                "_token": "{{csrf_token() }}",
                'id': id,
                'shipment_id': shipment_id
            },
            success: function(data) {

                window.open(data);


            }

        });
    }


    function viewTntConnote() {
        var shipment_id = $("#hid_shipment_id").val();
        var win = window.open("view_tnt_connote.ix?shipmentId=" + shipment_id, '_blank');
        win.focus();
    }

    function fecth_hstory()
      {
        document.getElementById("myForm").style.display = "block";
          var historyId =  $('.selected-row').attr('id'); ;
          //alert(zone);
         // $('#exampleModal .caption').html('Rate Sheet For: Star Track');
          var html ='';
          var x=0;
          var result='';
         
           $.ajax({
               url: 'customers/gets_history',
              // url: 'get_rates',
               type: 'POST',
               data:{historyId:historyId},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(res) {
                var data= JSON.parse(res);              
                console.log(data);    
                jQuery.each(data, function( i, val ) {
                  result = val;
                
                  html +='<button type="button" class="btn s33 ok" onclick="closeForm()">x</button>';
                  html +='<div class="col-lg-6">';
                  html +='<table class="table" style="font-size: 11px; margin-bottom: 0px">';
                  html +='<tbody>';
                  html +='<tr>';
                  html +='<td class="td1">Service Type</td>';
                  html +='<td class="td2">'+'</td>';
                  html +='</tr>';
                  html +='<tr>';
                  html +='<td class="td1">Shipment Date</td>';
                  html +=' <td class="td2">'+val.ready_date+'</td>';
                  html +='    </tr>';
                  html +='    <tr>';
                            html +=' <td class="td1">Package Type</td>';
                            html +='<td class="td2">Customer packaging</td>';
                            html +='     </tr>';
                            html +='      <tr>';
                            html +='       <td class="td1">Tracking#</td>';
                            html +='     <td class="td2">95AZ00020632</td>';
                            html +='   </tr>';
                            html +='   <tr>';
                            html +='     <td class="td1">Contents Description#</td>';
                            html +='    <td class="td2">Spare Parts</td>';
                            html +='  </tr>';

                            html +=' </tbody>';
                            html +=' </table>';
                            html +='</div>';
                            html +='  <div class="col-lg-6">';
                            html +='  <table class="table" style="font-size: 11px; margin-bottom: 0px">';
                            html +='   <tbody>';
                            html +='      <tr>';
                            html +='         <td class="td1">Reference#</td>';
                            html +='        <td class="td2">84005-MMN-046 </td>';
                            html +='    </tr>';
                            html +='   <tr>';
                            html +='     <td class="td1">Collection Reference#</td>';
                            html +='<td class="td2">'+val.ready_date+'</td>';
                            html +='  </tr>';
                            html +='  <tr>';
                            html +='    <td class="td1">Confirmation#</td>';
                            html +='     <td class="td2">9898177</td>';
                            html +='  </tr>';
                            html +='   <tr>';
                            html +='    <td class="td1">Zone</td>';
                            html +='    <td class="td2">1</td>';
                            html +='  </tr>';
                            html +='  <tr>';
                            html +='      <td class="td1">Cubic. Weight</td>';
                            html +='       <td class="td2">0.00 kg(s)</td>';
                            html +='    </tr>';
                            html +='    <tr>';
                            html +='      <td class="td1">Total. Dead. Weight</td>';
                            html +='     <td class="td2">3.0 kg(s)</td>';
                            html +='    </tr>';
                            html +='        </tbody>';
                            html +='     </table>';
                            html +='  </div>';
                            html +=' <div class="col-lg-12">';
                            html +='   <br> <label> <b><u>Package Information:</u></b>';
                   html +='   </label>';
                   html +=' <hr class="w11">';
                   html +='    <table class="table table-hover table-bordeed mg0" id="datatable12">';
                   html +='   <thead>';
                   html +='     <tr>';
                   html +='       <th>Piece</th>';
                   html +='     <th>Dead weight</th>';
                   html +='   <th>Cubic weight</th>';
                   html +='   <th>Dimension</th>';
                   html +='  </tr>';
                   html +=' </thead>';
                   html +='  <tbody>';

                   html +='      <tr>';
                   html +='            <td>1</td>';
                                html +='          <td>0.00 kg(s)</td>';
                                html +='        <td>0 x 0 x 0 cm(s)</td>';
                                html +='     </tr>';

                                html +='    </tbody>';
                                html +=' </table>';
                                html +=' <hr class="w11">';
                                html +=' <div class="row">';
                                html +='     <div class="text-right pal pdt10 w6">';
                                html +='         <button type="button" class="btn s33" onclick="javascript:viewAirbill();">View</button>';
                                html +=' <button type="button" class="btn s33" onclick="javascript:trackAirbill();">Track</button>';
                                html +='  </div>';
                                html +='  </div>';
                                html +='</div>';
                html +=' <div class="col-lg-12">';
                html +='   <hr class="w11">';
                html +='  <div class="col-lg-6">';
                html +='  <table class="table table-hover  mg0" id="">';
                        html +='<thead>';
                        html +='<tr>';
                        html +='<th>Shipper Address</th>';
                        html +='<th>Receiver Address</th>';
                        html +='</tr>';
                        html +='</thead>';
                        html +='<tbody>';
                        html +='<tr>';
                        html +='<td>CEVA LOGISTICS </td>';
                                    html +='<td>'+val.ready_date+'</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>'+val.ready_date+'</td>';
                                    html +='<td>'+val.ready_date+'</td>';
                                    html +='</tr>';
                                    html +=' <tr>';
                                    html +='<td>'+val.ready_date+' </td>';
                                    html +='<td>'+val.ready_date+'</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td></td>';
                                    html +='<td>'+val.ready_date+'</td>';
                                    html +='</tr>';
                                html +='<tr>';
                                html +='<td></td>';
                                html +='<td></td>';
                                html +='</tr>';
                                html +='<tr>';
                                html +='<td>'+val.ready_date+'</td>';
                                html +='<td>'+val.ready_date+'</td>';
                                html +='</tr>';
                                html +='<tr>';
                                html +='<td>Australia</td>';
                                    html +='<td>Australia</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>Ph: 08 6218 6813</td>';
                                    html +='<td>Ph: 0436 848 566 </td>';
                                    html +='</tr>';
                                    html +='</tbody>';
                                    html +='</table>';
                                    html +='</div>';
                                    html +=' <div class="col-lg-6">';
                                    html +='<table class="table table-hover  mg0" id="">';
                                    html +='<thead>';
                                    html +='<tr>';
                                    html +='<th colspan="2">Quote Detail</th>';
                                    html +='</tr>';
                                    html +=' </thead>';
                                    html +='<tbody>';
                                    html +=' <tr>';
                                    html +='<td>- Base Charge:';
                                    html +='</td>';
                                    html +='<td>16.90</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>- Security Surcharge:';
                                    html +='</td>';
                                    html +='<td>0.65</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>- Fuel Surcharge:';
                                    html +='</td>';
                                    html +='<td>2.37</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>- GST:';
                                    html +='</td>';
                                    html +='<td>1.99</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td>- Total Charges:';
                                    html +='</td>';
                                    html +='<td>21.91</td>';
                                    html +='</tr>';
                                    html +='<tr>';
                                    html +='<td colspan="2"><i>Quote is an estimate. Additional fees may apply.</i></td>';
                                    html +='</tr>';
                                    html +='  </tbody>';
                                    html +='  </table>';
                               

                });
            	$('#myForm').html(html);
              }
            });
          }

          function openDetail() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
