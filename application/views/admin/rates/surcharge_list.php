<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Surcharge List
                                </div>
                            </div>
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
     
  <div class="form-group">
  
  <label for="exampleInputEmail1">Carrier Name</label>
  
    <select name="carriers" id="carriers">
    <?php for($i=0;$i<count($surcharge_list);$i++){?>
        <option value="<?php echo $surcharge_list[$i]['carrier_id'];?>"><?php echo $surcharge_list[$i]['carrier_name'];?></option>
        <?php }?>
</select>

  </div>
  <input type="button" id="addRowBtn" value="+">
  <table id="dataTable">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" class="form-control dimL" id="surcharge_name" required name="surcharge_name" placeholder="Surcharge Name">
  </div>
  </td>
  <td>
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>

      <select name="surcharge_type" id="types">
        <option value="0">Fixed</option>
        <option value="1">Percent of Base Charge</option>
        <option value="2">Percent of Surcharge</option>
   </select>
  </div>
  </td>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number"  class="form-control weight" id="surcharge_price" required name="surcharge_price" placeholder="Surcharge Price">
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
    
  <label for="exampleInputEmail1">Carrier Name</label>
    <select name="carrier_id" id="editcarriers">
    <?php for($i=0;$i<count($surcharge_list);$i++){?>
        <option value="<?php echo $surcharge_list[$i]['carrier_id'];?>"><?php echo $surcharge_list[$i]['carrier_name'];?></option>
        <?php }?>
</select>
  </div>

  <table id="dataTable1">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" class="form-control" value="" name="surcharge_name" id="surcharge_name">
  </div>
  </td>
  <td>
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
      <select name="surcharge_type" id="types">
        <option value="0">Fixed</option>
        <option value="1">Percent of Base Charge</option>
        <option value="2">Percent of Surcharge</option>
   </select>
  </div>
  </td>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number"  class="form-control prices" name="surcharge_price" id="surcharge_price" value="">
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
      <form>
  <?php echo form_open(base_url('admin/add_carrier'), 'class="surcharges-form" '); ?>
      <div class="modal-body">
    
  <div class="form-group">
    <label for="exampleInputName">Carrier Name</label>
    <input type="text" name="carrier_name" class="form-control car_name">
  </div>
 
</div>
</form>
      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Add</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

                                  <div class="row">
                                        <div class="col-lg-12">
                                            <div id="accessorial-list-div">
                                                <table class="table table-bordered mg0 table-hover table-pointer" id="surcharge-list-table">
                                                    <thead>
                                                        <tr>
                                                     
                                                            <th sort-field="code" style="cursor: pointer;">Carrier ID <i class="fa fa-sort-up"></i></th>
                                                            <th sort-field="modified_date" style="cursor: pointer;">Carrier Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="typeid" style="cursor: pointer;">Surcharge Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="service_name" style="cursor: pointer;">Surcharge Price <i class="fa fa-sort"></i></th>
                                                            <th sort-field="description" style="cursor: pointer;">Surcharge Description <i class="fa fa-sort"></i></th>
                                                            <th sort-field="isquotable" style="cursor: pointer;">Last modified <i class="fa fa-sort"></i></th>
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
                                                       
                                                                    <td><?php echo $surcharge_list[$i]['carrier_id'];?></td>
																	<td><?php echo $surcharge_list[$i]['carrier_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_price'];?></td>
																	<td><?php echo $surcharge_type;?></td>
																	<td><?php echo $surcharge_list[$i]['last_modified'];?></td>
                                <td>  <a href="<?= base_url('admin/carriers/delSurcharge/'.$surcharge_list[$i]['id']); ?>" class="btn">Delete</a></td>
                                                                 
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
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add New Carrier</button>
                                                <button class="btn" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Surcharge</button>
                                             <button type="button" onclick="editsurcharge()" id="EditButton" class="btn" disabled>Edit Surcharge Details</button>
                                             <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>  
                                             
                                          </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                      
<script>
    //To show datatable
    $(document).ready(function() 
   {
      $('#surcharge-list-table').DataTable();
   });


    //To add and delete dynamic row in add surcharges Modal
    var tbl = $("#dataTable");
    $("#addRowBtn").click(function(){
        $("<tr><td><input type='text' class='form-control dimL' id='surcharge_name' name='surcharge_name[]' required placeholder='Surcharge Name'></td><td><select name='types' id='types'><option value=''>Fixed</option><option value='DHL'>Percent of Base Charge</option><option value='Star Track'>Percent of Surcharge</option></select></td><td><input type='number' class='form-control weight' required id='surcharge_price' name='surcharge_price[]' placeholder='Surcharge Price'></td><br><td><button class='delRowBtn'>-</button></td></tr>").appendTo(tbl);        
    });
        
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 


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



</script>