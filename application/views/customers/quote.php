
<div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Quote/Job
                            </div>
                            <div class="tools">
                            <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: block;">
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <table class="date">
                                        <tbody>
                                        <td>End date:</td>
                                                            <td><input type='date' id='date' class="form-control date form_datetime" value='<?php echo date('Y-m-d');?>' readonly="readonly"></td>
                                                            </tbody>
                                                            </table>
                                            <p>
                                                <br>
                                            </p>

                                            <div class="form-popup quote-form" id="myForm">
<form id="saveQuoteLog" name="saveQuoteLog">
<h3 class="quote_title">Quote</h3>
<hr>
<table class="table">
   
   <tbody></table>
<div class="quote-button">

   
    </div>
  </form>
</div>    
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
             { 
            if($quote[$i]['customer'] == $customers->customer_id)
            {?>
                <tr data-quote-id="<?php echo $quote[$i]['id'];?>" id="<?php echo $quote[$i]['id'];?>" >
             <?php 
             $quote_ship_id = $quote[$i]['id']; ?>
                <input type="hidden" name="quotes_id" value="<?php echo $quote[$i]['id'];?>">
                    <td><?php echo $quote[$i]['quote_date'];?></td>
                    <td><?php echo $quote[$i]['customer_name'];?></td>
                    <td><?php echo $quote[$i]['quote_number'];?></td>
                    <td><?php echo $quote[$i]['sender_suburb'];?></td>
                    <td><?php echo $quote[$i]['sender_postcode'];?></td>
                    <td><?php echo $quote[$i]['receiver_suburb'];?></td>
                    <td><?php echo $quote[$i]['receiver_postcode'];?></td>
                    <td><?php echo $quote[$i]['shipment_type'];?></td>
                    <td><?php echo $quote[$i]['package_type'];?></td>

                   <?php $amount = $quote[$i]['final_amount'];?>
                    <td><?php echo number_format((float)$amount, 2, '.', ''); ?></td>
                    
                </tr>
             <?php } 
            }?>
           
</tbody>
    </table>
    <div class="col-lg-12 flr pd0">
                                                <div class="form-group flr mgb">
                                                    <table class="s36" style="margin-bottom: 10px;">
                                                        <tbody><tr>
                                                             
                                                          <td>  <?php if(!empty($quote_ship_id))
											{ ?>
												<button class="btn s33 s44" type="button" id="bookTo" onclick="bookTo()" disabled>
													Book this shipment
												</button>
											<?php } 
											else { ?>
												<button class="btn s33 s44" type="button" id="bookTo" onclick="myFunction()" disabled>Book this shipment </button>
											<?php } ?></td>
                                                              <td>
                                                                <!--button class="btn s33" type="button" disabled="disabled" id="btn-view-detail" onclick="openDetail()"-->
                                                                <!-- Button trigger modal -->
                                                                 <button class="btn s33" type="button" id="btn-view-detail" onclick="fecth_quote()" disabled>View Details
                                                                </button>
                                                              

                                                          </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </div>
  
   
    <input type="hidden" name="" value="1" id="currPage">
    <input type="hidden" id="selectedId" value="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#selectedId').val("");
            $('table#quote-job-table tbody tr').click(function () {
                $(this).addClass('selected-row').siblings().removeClass('selected-row');
                selectedAddressId = $(this).attr("data-quote-id");
                $('#selectedId').val(selectedAddressId);
                $('#btn-view-detail').attr('disabled', false);
                $('#shipment').attr('disabled', false);
            });

            $('table#quote-job-table tbody tr').dblclick(function () {
                viewDetail();
            });
        });

 $(document).on('click', '#quote-job-table tbody tr', function(e) {
    $('#quote-job-table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#btn-view-detail").prop('disabled', false);
    $("#bookTo").prop('disabled', false);
});



    function openDetail() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function myFunction() {
  alert("Please select an address!");
}

function bookTo(){
			var row_id = $('tr.selected-row').attr('id');
			window.location.href = "<?php echo base_url('customer/shipment/?quote_id='); ?>"+row_id;
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


function fecth_quote()
      {
        document.getElementById("myForm").style.display = "block";
          var zone =  $('.selected-row').attr('data-quote-id'); ;
          //alert(zone);
         // $('#exampleModal .caption').html('Rate Sheet For: Star Track');
          var html ='';
          var x=0;
          var result='';
         
           $.ajax({
               url: 'customers/gets_quote',
              // url: 'get_rates',
               type: 'POST',
               data:{zone:zone},
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
                  html +='<table class="table" style="font-size: 11px; margin-bottom: 0px; margin-top: 28px">';
                  html +='<tbody>';
                    html +='<tr>';
                        html +='<td class="td1">Service Type</td>';
                        html +='<td class="td2">'+val.shipment_type+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td class="td1">Package Type</td>';
                        html +='<td class="td2">'+val.package_type+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td class="td1">Reference#</td>';
                        html +='<td class="td2">'+val.customer+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td class="td1">Zone</td>';
                        html +='<td class="td2"></td>';
                html +='</tr>'; 
                html +='</tbody>';
                html +='</table>';
                html +='</div>';  

                 html +='<div class="col-lg-6">';
                 html +='<table class="table" style="font-size: 11px; margin-bottom: 0px">';
                 html +='<tbody>';
                 html +='<tr>';
                       html +='<td class="td1">Quote Date</td>';
                       html +='<td class="td2">'+val.quote_date+'</td>';
                 html +='</tr>';

                 html +='<tr>';
                 html +='<td class="td1">Job Number</td>';
                      html +='<td class="td2">'+val.quote_number+'</td>';
                 html +='</tr>';
                 html +='<tr>';
                     html +='<td class="td1">Acutal weight</td>';
                     html +='<td class="td2"> </td>';
                 html +='</tr>';
                 html +='<tr>';
                     html +='<td class="td1">Dim. Weight</td>';
                     html +='<td class="td2">'+val.dimension_weight+' KG(s) </td>';
                html +='</tr>';
                html +='</tbody>';
                html +='</table>';
                html +='</div>';
                html +='<div class="col-lg-12">';
                html +='<br>';
                html +='<label>';
                html +='<b><u>Package Information:</u></b>';
                html +='</label>';
                html +='<hr class="w11">';
                html +='<table class="table table-hover table-bordeed mg0" id="datatable1">';
                html +='<thead>';
                html +='<tr>';
                html +='<th>Piece</th>';
                html +='<th>Dead weight</th>';
                html +='<th>Cubic weight</th>';
                html +='<th>Quantity</th>';
                html +='<th>Dimension</th>';
                html +='</tr>';
                html +='</thead>';
                html +='<tbody>';
                html +='<tr>';
                html +='<td>1</td>';
                html +='<td>'+val.quote_weight+' KG(s)</td>';
                html +='<td>7.96 KG(s)</td>';
                html +='<td>'+val.quote_quantity+'</td>';
                html +='<td>'+val.quote_length+':00 x '+val.quote_width+':00 x '+val.quote_height+':00 CM(s)';
                html +='</td>';
                html +='</tr>';
            
                html +='</tbody>';
                html +='</table>';
                html +='<hr class="w11">';
                html +='<div class="row">';
                html +='<div class="text-right pal pdt10 w6"></div>';
                html +='</div>';
                html +='</div>';
                html +='<div class="col-lg-12">';
                html +='<hr class="w11">';
                html +='<div class="col-lg-6">';
                html +='<table class="table table-hover  mg0">';
                html +='<thead>';
                html +='<tr>';
                html +='<th>Shipper Address</th>';
                html +='<th>Receiver Address</th>';
                html +='</tr>';
                html +='</thead>';
                html +='<tbody>';
                html +='<tr><td>';
                html +='<table>';
                html +='<tbody><tr>';
                html +='<td>'+val.sender_company+'</td>';
                html +='</tr>';
                html +='<tr>';
                html +='<td>'+val.sender_contact+'</td>';
                html +='</tr>';
                html +='<tr>';
                html +='<td>'+val.sender_address+'</td>';
                html +='</tr>';
                html +='<tr>';
                html +='<td></td>';
                       html +='</tr>';
                       html +='<tr>';
                       html +='<td>'+val.sender_suburb+' '+val.sender_postcode+'</td>';
                       html +='</tr>';
                       html +='<tr>';
                       html +='<td>'+val.sender_country+'</td>';
                       html +='</tr>';
                       html +='<tr>';
                       html +='<td>Ph: '+val.sender_phone+'</td>';
                       html +='</tr>';
                       html +='</tbody></table>';
                       html +='</td>';
                       html +='<td>';
                       html +='<table>';
                       html +='<tbody><tr>';
                       html +='<td>'+val.receiver_company+'</td>';
                       html +='</tr>';
                        html +='<tr>';
                        html +='<td>'+val.receiver_contact+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td>'+val.receiver_address+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td></td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td>'+val.receiver_suburb+' '+val.receiver_postcode+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td>'+val.receiver_country+'</td>';
                        html +='</tr>';
                        html +='<tr>';
                        html +='<td>Ph: '+val.receiver_phone+'</td>';
                        html +='</tr>';
                        html +='</tbody></table>';
                        html +='</td>';
                        html +='</tr></tbody>';
                        html +='</table>';
                        html +='</div>';
                        html +='<div class="col-lg-6">';
                        html +='<form id="formUpdatequoteJob" name="formUpdatequoteJob" action="/crm-webship/quote_job_view_detail.ix" method="post">';
                        html +='<table class="table table-hover mg0" id="">';
                        html +='<thead>';
                  html +='<tr>';
                        html +='<th>Quote Detail</th>';
                        html +='<th></th>';
                        html +='</tr>';
                        html +='</thead>';
                        html +='<tbody>';
                 html +='<tr>';
                        html +='<td colspan="2" width="60%">- Base Charge:</td>';
                       html +='<td colspan="2">'+val.total_amount+'</td>';
                       html +='</tr>';
                    
                       html +='<tr>';
                       html +='<td colspan="2" width="60%">- Fuel Surcharge: </td>';
                      
                      html +='<td colspan="2">'+val.surcharge_amount+'</td>';
                       html +='</tr>';
                    
                       html +='<tr>';
                       html +='<td colspan="2" width="60%">- Total Charges: </td>';
                       html +='<td colspan="2">'+val.final_amount+'</td>';
                       html +='</tr>';
                       html +='<tr>';
                       html +='<td class="quote" colspan="4"><i>Quote is an estimate. Additional fees may apply.</i></td>';
                       html +='</tr>';
                });
            	$('#myForm').html(html);
              }
            });
          }

         

</script>