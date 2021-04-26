<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quote/Job Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     <div class="row" style="width: 800px;">
      <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody><tr>
                <td class="td1">Service Type</td>
                <td class="td2">Road Express</td>
            </tr>
            <tr>
                <td class="td1">Package Type</td>
                <td class="td2">Customer packaging</td>
            </tr>
            <tr>
                <td class="td1">Reference#</td>
                <td class="td2">10000020</td>
            </tr>
            <tr>
                <td class="td1">Zone</td>
                <td class="td2"></td>
            </tr>
        </tbody></table>
    </div>
    <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody><tr>
                <td class="td1">Quote Date</td>
                <td class="td2">21-04-2021</td>
            </tr>

            <tr>
                <td class="td1">Job Number</td>
                <td class="td2">10000020AAJF</td>
            </tr>
            <tr>
                <td class="td1">Acutal weight</td>
                <td class="td2">14.00 KG(s)
                </td>
            </tr>
            <tr>
                <td class="td1">Dim. Weight</td>
                <td class="td2">7.96 KG(s)
                </td>
            </tr>
        </tbody></table>
    </div>
    <div class="col-lg-12">
        <br>
        <label>
            <b><u>Package Information:</u></b>
        </label>
        <hr class="w11">
        <table class="table table-hover table-bordeed mg0" id="datatable1">
            <thead>
            <tr>
                <th>Piece</th>
                <th>Dead weight</th>
                <th>Cubic weight</th>
                <th>Quantity</th>
                <th>Dimension</th>
            </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>1</td>
                    <td>14.00 KG(s)</td>
                    <td>7.96 KG(s)</td>
                    <td>1</td>
                    <td>35.00 x 35.00 x 26.00 CM(s)
                    </td>
                </tr>
            
            </tbody>
        </table>
        <hr class="w11">
        <div class="row">
            <div class="text-right pal pdt10 w6"></div>
        </div>
    </div>
    <div class="col-lg-12">
        <hr class="w11">
        <div class="col-lg-6">
            <table class="table table-hover  mg0">
                <thead>
                <tr>
                    <th>Shipper Address</th>
                    <th>Receiver Address</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>
                    <table>
                        <tbody><tr>
                            <td>Beaver Process Equipment </td>
                        </tr>
                        <tr>
                            <td>Jason</td>
                        </tr>
                        <tr>
                            <td>193 Beechboro Road South</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>EMBLETON&nbsp;6062</td>
                        </tr>
                        <tr>
                            <td>Australia</td>
                        </tr>
                        <tr>
                            <td>Ph: 1300239398</td>
                        </tr>
                    </tbody></table>
                </td>
                <td>
                    <table>
                        <tbody><tr>
                            <td>Beaver Process Equipment </td>
                        </tr>
                        <tr>
                            <td>Samuel Hinschen</td>
                        </tr>
                        <tr>
                            <td>538 Tarragindi Rd </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SALISBURY&nbsp;4107</td>
                        </tr>
                        <tr>
                            <td>Australia</td>
                        </tr>
                        <tr>
                            <td>Ph: 1300295799</td>
                        </tr>
                    </tbody></table>
                </td>
                </tr></tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <form id="formUpdatequoteJob" name="formUpdatequoteJob" action="/crm-webship/quote_job_view_detail.ix" method="post">
                <table class="table table-hover  mg0" id="">
                    <thead>
                    <tr>
                        <th>Quote Detail</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" width="60%">- Base Charge:
                        </td>
                        <td colspan="2"><input type="hidden" name="webshipQuoteLogModel.quoteId" value="3315" id="formUpdatequoteJob_webshipQuoteLogModel_quoteId"> 21.57</td>
                    </tr>
                    
                        <tr>
                            <td colspan="2" width="60%">- Fuel Surcharge:
                            </td>
                            <input type="hidden" name="listWebshipQuoteLogDetailModels[0].quoteId" value="3315" id="formUpdatequoteJob_listWebshipQuoteLogDetailModels_0__quoteId">
                            <td colspan="2">3.02
                        </td></tr>
                    
                    <tr>
                        <td colspan="2" width="60%">- Total Charges:
                        </td>
                        <td colspan="2">27.05</td>
                    </tr>
                    <tr>
                        <td colspan="4"><i>Quote is an estimate. Additional fees may apply.</i></td>
                    </tr>
                    </tbody>
                </table>
              </form>
          </div>
       </div>
    </div>
</div>
       <div class="modal-footer">
        <button type="button" class="btn s33" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
</div>
<div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Quote/Job
                            </div>
                            <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="afa fa-times"></i>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: block;">
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-12 flr pd0">
                                                <div class="form-group flr mgb">
                                                    <table class="s36" style="margin-bottom: 10px;">
                                                        <tbody><tr>
                                                            <td>Start date:</td>
                                                            <td><input id="startDate"  type="text" class="form-control date form_datetime" data-date-format="dd MM yyyy" readonly="readonly"></td>
                                                            <td>End date:</td>
                                                            <td><input type='date' id='date' class="form-control date form_datetime" value='<?php echo date('Y-m-d');?>' readonly="readonly"></td>
                                                            
                                                            <td>
                                                                <button class="btn s33" type="button" disabled="disabled" id="btn-reship" onclick="javascript:reshipQuoteJob();">
                                                                    Book this shipment
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <!--button class="btn s33" type="button" disabled="disabled" id="btn-view-detail" onclick="openDetail()"-->
                                                                <!-- Button trigger modal -->
                                                                 <button class="btn s33" type="button" id="btn-view-detail" data-toggle="modal" data-target="#exampleModal" disabled>View Details
                                                                </button>
                                                          </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </div>
                                            <p>
                                                <br>
                                            </p>

                                         
    <table class="table table-hover table-bordered mg0" id="quote-job-table">
        <thead>
        <tr>
            <th>Quote Date</th>
            <th>Customer</th>
            <th>Quote/Job Number</th>
            <th>Sender Suburb</th>
            <th>Sender Postcode</th>
            <th>Receiver Suburb</th>
            <th>Receiver Postcode</th>
            <th>Shipment Type</th>
            <th>Package Type</th>
            <th>Total Amount</th>
        </tr>
        </thead>
        <tbody>
        
        <!-- new added to show quote data--->
        <?php for($i=0;$i<count($quote);$i++)
                                            { ?>
                <tr data-quote-id="<?php echo $quote[$i]['customer'];?>">
                    <td><?php echo $quote[$i]['quote_date'];?></td>
                    <td><?php echo $quote[$i]['customer_name'];?></td>
                    <td><?php echo $quote[$i]['quote_number'];?></td>
                    <td><?php echo $quote[$i]['sender_suburb'];?></td>
                    <td><?php echo $quote[$i]['sender_postcode'];?></td>
                    <td><?php echo $quote[$i]['receiver_suburb'];?></td>
                    <td><?php echo $quote[$i]['receiver_postcode'];?></td>
                    <td><?php echo $quote[$i]['shipment_type'];?></td>
                    <td><?php echo $quote[$i]['package_type'];?></td>
                    <td><?php echo $quote[$i]['total_amount'];?></td>
                </tr>
             <?php } ?>
        </tbody>
    </table>
    <input type="hidden" name="" value="1" id="currPage">
    <input type="hidden" id="selectedId" value="">
    <script type="text/javascript">
        $(document).ready(function () {
            $('#selectedId').val("");
            $('table#quote-job-table tbody tr').click(function () {
                $(this).addClass('selected-row').siblings().removeClass('selected-row');
                selectedAddressId = $(this).attr("data-quote-id");
                $('#selectedId').val(selectedAddressId);
                $('#btn-view-detail').attr('disabled', false);
                $('#btn-reship').attr('disabled', false);
            });
            $('table#quote-job-table tbody tr').dblclick(function () {
                viewDetail();
            });
        });

        $(document).on('click', '#quote-job-table tbody tr', function(e) {
    $('#quote-job-table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#btn-view-detail").prop('disabled', false);
});

    function openDetail() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>
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
    $('#quote-job-table').DataTable( {
    } );
} );
</script>