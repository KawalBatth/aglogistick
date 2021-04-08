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
                                                                <button class="btn s33" type="button" disabled="disabled" id="btn-view-detail" onclick="openDetail()">
                                                                    View Details
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
        
        
            
                <tr data-quote-id="3262">
                    <td>01-04-2021</td>
                    <td>AGL SPECIALISED LOGISTICS</td>
                    <td>10006666</td>
                    <td>PERTH AIRPORT</td>
                    <td>6105</td>
                    <td>DILI</td>
                    <td></td>
                    <td>DHL Worldwide Express</td>
                    <td>Customer packaging</td>
                    <td>899.98</td>
                </tr>
            
                <tr data-quote-id="3261">
                    <td>01-04-2021</td>
                    <td>AGL SPECIALISED LOGISTICS</td>
                    <td>100056787R</td>
                    <td>BUSSELTON</td>
                    <td>6280</td>
                    <td>PERTH AIRPORT</td>
                    <td>6105</td>
                    <td>ROAD EXPRESS</td>
                    <td>Customer Supplied Package</td>
                    <td>87.54</td>
                </tr>
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

        function viewDetail() {
        var quoteId = $("#selectedId").val();
        loadDetailDialog("quote_job_view_detail.ix?reqType=json", {
            "quoteId": quoteId
        }, "Quote/Job detail", "Close", "view-detail-dialog");
    }

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