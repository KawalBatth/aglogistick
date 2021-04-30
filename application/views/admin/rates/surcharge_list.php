<!DOCTYPE html>  
 <html>  
 <body>
<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Surcharge List
                                </div>
                               
                            </div>
                            
                            <?php if($this->session->flashdata('msg')){?>
   <div class="alert alert-success">      
    <?php echo $this->session->flashdata('msg')?>
 </div>
 <?php } ?>
                           
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                       


<!-- Add Surcharge Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
   
        <h5 class="modal-title" id="exampleModalLabel">Add Carrier Surcharges</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php echo form_open(base_url('admin/add_surcharge'), 'class="surcharges-form" '); ?>

      <div class="modal-body">
     
  <div class="form-group surcharge-list">
  
  <label for="exampleInputEmail1">Carrier Name:</label>
  
    <select name="carriers" id="carriers">
    <option value="0">Select a carrier</option>
    <?php for($i=0;$i<count($carrier_list);$i++){?>
     
        <option value="<?php echo $carrier_list[$i]['id'];?>"><?php echo $carrier_list[$i]['carrier_name'];?></option>
        <?php }?>
</select>

  </div>
  <!--input type="button" id="addRowBtn" value="+"-->
  <table id="dataTable">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name:</label>
    <input type="text" class="form-control dimL" id="surcharge_name" required name="surcharge_name" placeholder="Enter Surcharge Name" onkeydown = "return((event.keyCode >= 65 && event.keyCode <= 120) || (event.keyCode==32));"  onfocus="this.value=''">
  </div>
  </td>
    </tr>
    <tr>
  <td>
  <div class="form-group">
    <label for="exampleInputEmail1" class="sur_types">Type:</label>

      <select required name="surcharge_type" id="types">
      <option value="">Select a type</option>
        <option value="0">Fixed</option>
        <option value="1">Percent of Base Charge</option>
        <option value="2">Percent of Surcharge</option>
   </select>
  </div>
  </td>
    </tr>
    <tr>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price:</label>
    <input type="text"  class="form-control" id="surcharge_price" required name="surcharge_price" placeholder="Enter Surcharge Price" autofocus pattern="[0-9]*\.?[0-9]{2}"  onfocus="this.value=''">
  </div>
  </td> 
  </tr>
  <tr>
    <td>
      <div class="form-group">
            <label class="fw0">
                <input data-group="dangerousgoods" tabindex="5" id="service_cons_0" type="checkbox" name="is_dangerous" value="0"> &nbsp;
                Dangerous Goods
            </label>
        
        
        
        
           
        
    </div>
      
    </td>
  </tr>
  </table>
 

      </div>
      
      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Save</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
     
      </div>
	  </form>
    </div>
  </div>
</div>



<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Surcharges Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open(base_url('admin/update_surcharge'), 'class="update_surcharge-form" '); ?>
      <div class="modal-body">
  <div class="form-group">

    <input type="hidden"  name="surcharge_id" class="form-control" value="" id="surcharge_id">
    
  <label for="exampleInputEmail1">Carrier Name:</label>
    <select name="carrier_id" id="editcarriers">
    <?php for($i=0;$i<count($surcharge_list);$i++){?>
        <option value="<?php echo $surcharge_list[$i]['carrier_id'];?>"><?php echo $surcharge_list[$i]['carrier_name'];?></option>
        <?php }?>
</select>
  </div>

  <table id="dataTable1">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group surcharge-list">
    <label for="exampleInputPassword1">Surcharge Name:</label>
    <input type="text" id="surcharge_name" class="form-control" value="" name="surcharge_name">
  </div>
  </td>
    </tr>
    <tr>
  <td>
  <div class="form-group">
    <label for="exampleInputEmail1">Type:</label>
      <select name="surcharge_type" id="types">
        <option value="0">Fixed</option>
        <option value="1">Percent of Base Charge</option>
        <option value="2">Percent of Surcharge</option>
   </select>
  </div>
  </td>
    </td>
    <tr>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price:</label>
    <input type="text"  class="form-control prices" name="surcharge_price" id="surcharge_price" value="">
  </div>
  </td>
  </tr>
  </table>
 

      </div>
      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Update</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </form>
  </div>
</div>



</div>

                                  <div class="row">
                                        <div class="col-lg-12">
                                            <div id="accessorial-list-div" id="surcharge-data">
                                                <table class="table table-bordered table-hover table-pointer" id="surcharge-list-table">
                                                    <thead>
                                                        <tr>
                                                     
                                                            <th><b> ID </b></th>
                                                            <th><b>Carrier Name <b></th>
                                                            <th>Surcharge Name </th>
                                                            <th>Surcharge Price</th>
                                                            <th>Surcharge Type </th>
                                                            <th>Last modified</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                      <tbody>
                                                        <!-- Multiple filter -->
                                                         <?php for($i=0;$i<count($surcharge_list);$i++)
                              												 	  {  
                                                            
                                                            $s_type=$surcharge_list[$i]['surcharge_type'];
                                                            if($s_type==0)
                                                            {
                                                                $surcharge_type="Fixed";
                                                            }
                                                            if($s_type==1)
                                                            {
                                                                $surcharge_type="Percent of Base Charge";
                                                            }  
                                                            if($s_type==2)
                                                            {
                                                                $surcharge_type="Percent of Surcharge";
                                                            }
                            															?>

                                                          <tr class="on-click" data-accessorialid="<?php echo $surcharge_list[$i]['id'];?>">
                                                       
                                                                    <td><?php echo $surcharge_list[$i]['id'];?></td>
																	<td><?php echo $surcharge_list[$i]['carrier_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_price'];?></td>
																	<td><?php echo $surcharge_type;?></td>
																	<td><?php echo $surcharge_list[$i]['last_modified'];?></td>
                                <td>  <button type="button" class="btn remove"> Delete</button> </td>
                                <!--td class="delete_surcharge">  <a href="#" class="remove"> <img src="<?= base_url() ?>public/dist/img/delete.jpg" class="del" alt="User Image"></a> </td-->               
                                                          </tr>
														<?php }?>
                                                     </tbody>
                                                </table>
                                                    
                                                   
                                            </div>
                                        </div>
                                 </div>
                                      <div class="form-actions pal pdt10">
                                        <div class="row">
                                       
                                          <div class="col-lg-12 text-right">
                                          <button type="button" class="btn btn-primary add_car" data-toggle="modal" data-target="#addModal">Add New Carrier</button>
                                                <button class="btn ref" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                             <button type="button" class="btn btn-primary add_sur" data-toggle="modal" data-target="#exampleModal">Add New Surcharge</button>
                                             <button type="button" onclick="editsurcharge()" id="EditButton" class="btn edit_sur" disabled>Edit Surcharge Details</button>
                                           
                                             <div align="right">  
                     <button name="create_excel" id="create_excel" class="btn export">Export Excel</button>  
                     <input type="button" id="btnExport" class="btn export_pdf" value="Export Pdf" />
                </div> 
                                          </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                 <!-- Add Carrier Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Add New Carrier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
  <?php echo form_open(base_url('admin/add_carrier'), 'class="surcharges-form" '); ?>
      <div class="modal-body">
    
  <div class="form-group">
    <label for="exampleInputName" class="add_carrier">Carrier Name:</label>
    <!--input type="text" name="carrier_name" required class="form-control car_name"-->
    <!--input type="text" id="carrier_name" name="carrier_name" required class="form-control car_name" placeholder="Enter Carrier Name"-->
    <input type="text" name="carrier_name" id="carrier_name" class="form-control car_name" onkeydown = "return((event.keyCode >= 65 && event.keyCode <= 120) || (event.keyCode==32));" placeholder="Enter Carrier Name" required  onfocus="this.value=''">
  </div>
 
</div>

      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Add</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
</form>     
      </div>
    </div>
  </div>     
 

  <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
 
	<script type="text/javascript">
		$("body").on("click", "#btnExport", function () {
			html2canvas($('#surcharge-list-table')[0], {
				onrendered: function (canvas) {
					var data = canvas.toDataURL();
					var docDefinition = {
						content: [{
							image: data,
							width: 650
						}]
					};
					pdfMake.createPdf(docDefinition).download("surcharge_list.pdf");
				}
			});
		});

		//To show datatable
		$(document).ready(function() 
		{
			$('#surcharge-list-table').DataTable();
		});

		/* $(document).ready(function(){  
			$('#create_excel').click(function(){  
				var excel_data = $('#surcharge-data').html();  
				var page = "rates/import_rate?data=" + excel_data;  
				window.location = page;  
			});  
		});  */ 


	 
		//To add and delete dynamic row in add surcharges Modal
		/* var tbl = $("#dataTable");
		$("#addRowBtn").click(function(){
			$("<tr><td><input type='text' class='form-control dimL' id='surcharge_name' name='surcharge_name[]' required placeholder='Surcharge Name'></td><td><select name='types' id='types'><option value=''>Fixed</option><option value='DHL'>Percent of Base Charge</option><option value='Star Track'>Percent of Surcharge</option></select></td><td><input type='number' class='form-control weight' required id='surcharge_price' name='surcharge_price[]' placeholder='Surcharge Price'></td><br><td><button class='delRowBtn'>-</button></td></tr>").appendTo(tbl);        
		});
			
		$(document.body).delegate(".delRowBtn", "click", function(){
			$(this).closest("tr").remove();        
		}); */


		//To enable and disable edit surcharge button
		$(document).on('click', '#surcharge-list-table tbody tr', function(e) {
			$('#surcharge-list-table tbody tr').removeClass('selected-row');
			$(this).toggleClass('selected-row'); 
			$("#EditButton").prop('disabled', false);
		});

		function editsurcharge()
		{

			$('#editModal').modal('show');
			var surcharge_id = $('.selected-row').attr('data-accessorialid');
			var carrier_id = $('.selected-row td:eq(0)').html();
			var carrier_name = $('.selected-row td:eq(1)').html();

			var surcharge_name = $('.selected-row td:eq(2)').html();
			var surcharge_price = $('.selected-row td:eq(3)').html();
			var surcharge_type = $('.selected-row td:eq(4)').html();

			$('#editModal #editcarriers option').each(function()
			{
				if($(this).html()==carrier_name)
				{
					$(this).prop('selected',true);
				} 
			});    
			 $('#editModal #types option').each(function()
			{
				if($(this).html()==surcharge_type)
				{
					$(this).prop('selected',true);
				} 
			});   
			$('#editModal #surcharge_price').val(surcharge_price);
			$('#editModal #surcharge_name').val(surcharge_name);
			$('#editModal #surcharge_id').val(surcharge_id);
		}

		$(".remove").click(function(){
			var id = $(this).parents("tr").attr("data-accessorialid");
			if(confirm('Are you sure to remove this record ?'))
			{
				$.ajax({

				  url: 'carriers/delSurcharge/'+id,
				   type: 'DELETE',
				   error: function() {
					  alert('Something is wrong');
				   },
				   success: function(data) {
						$("#"+id).remove();
						alert("Record removed successfully");  
					   window.location.reload();
				   }
				});
			}
		});

		// To disappear a Falsh message
		var timeout = 2000; // in miliseconds (3*1000)
		$('.alert').delay(timeout).fadeOut(300);

		$("input[name='is_dangerous']").change(function() {
			if(this.checked) {
				$("input[name='is_dangerous']").val(1);        
			}
			else {
				$("input[name='is_dangerous']").val(0);        
			}
		});
	</script>
	
	<script>
	$('#create_excel').click(function() {
	  var titles = [];
	  var data = [];

	  $('.dataTable th').each(function() {
		titles.push($(this).text());
	  });

	  $('.dataTable td').each(function() {
		data.push($(this).text());
	  });

	  var CSVString = prepCSVRow(titles, titles.length, '');
	  CSVString = prepCSVRow(data, titles.length, CSVString);

	  var downloadLink = document.createElement("a");
	  var blob = new Blob(["\ufeff", CSVString]);
	  var url = URL.createObjectURL(blob);
	  downloadLink.href = url;
	  downloadLink.download = "data.csv";

	  document.body.appendChild(downloadLink);
	  downloadLink.click();
	  document.body.removeChild(downloadLink);
	});

	function prepCSVRow(arr, columnCount, initial) {
	  var row = ''; // this will hold data
	  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
	  var newLine = '\r\n'; // newline separator for CSV row

	  function splitArray(_arr, _count) {
		var splitted = [];
		var result = [];
		_arr.forEach(function(item, idx) {
		  if ((idx + 1) % _count === 0) {
			splitted.push(item);
			result.push(splitted);
			splitted = [];
		  } else {
			splitted.push(item);
		  }
		});
		return result;
	  }
	  var plainArr = splitArray(arr, columnCount);
	  plainArr.forEach(function(arrItem) {
		arrItem.forEach(function(item, idx) {
		  row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
		});
		row += newLine;
	  });
	  return initial + row;
	}
	</script>

	</body>
</html>  