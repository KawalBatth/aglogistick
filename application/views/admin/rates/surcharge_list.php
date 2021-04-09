<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Surcharge List
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                       


<!-- Modal -->
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
    <input type="text" class="form-control carrier_name" id="carrier_name" required name="carrier_name" aria-describedby="emailHelp" placeholder="Carrier Name">
  </div>
  <input type="button" id="addRowBtn" value="+">
  <table id="dataTable">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" class="form-control dimL" id="surcharge_name" required name="surcharge_name[]" placeholder="Surcharge Name">
  </div>
  </td>
  <b>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number"  class="form-control weight" id="surcharge_price" required name="surcharge_price[]" placeholder="Surcharge Price">
  </div>
  </td>
 <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Description</label>
    <input type="text" class="form-control dimS" id="surcharge_desc" required placeholder="Description" name="s_description[]">
  </div>
  </td>
 
  </tr>
  </table>
 

      </div>
      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Save</button>
        <button type="button" class="btn" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Surcharges Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
    
  <div class="form-group">
    <label for="exampleInputName">Carrier Name</label>
    <input type="text" class="form-control car_name" value="">
  </div>

  <table id="dataTable1">
  
  <tr id="carrier-dt1">
  
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" class="form-control surcharge_name" value="">
  </div>
  </td>
  <b>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number"  class="form-control prices" id="surcharge_prices" value="">
  </div>
  </td>
 <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Description</label>
    <input type="text" class="form-control desc" id="surcharge_description" value="">
  </div>
  </td>
 
  </tr>
  </table>
 

      </div>
      <div class="modal-footer">
         <button type="submit" name="submit" class="btn">Edit</button>
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
															?>
                                                          <tr class="on-click" data-accessorialid="<?php echo $surcharge_list[$i]['id'];?>">
                                                       
                                                                    <td><?php echo $surcharge_list[$i]['id'];?></td>
																	<td><?php echo $surcharge_list[$i]['carrier_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_name'];?></td>
																	<td><?php echo $surcharge_list[$i]['surcharge_price'];?></td>
																	<td><?php echo $surcharge_list[$i]['s_description'];?></td>
																	<td><?php echo $surcharge_list[$i]['last_modified'];?></td>
                                                                    <td><input type="button" value="Delete" /></td>
                                                                 
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
                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Surcharge</button>
                                             <button type="button" data-toggle="modal" data-target="#editModal" id="EditButton" class="btn" disabled>Edit Surcharge Details</button>
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
        $("<tr><td><input type='text' class='form-control dimL' id='surcharge_name' name='surcharge_name[]' required placeholder='Surcharge Name'></td><td><input type='number' class='form-control weight' required id='surcharge_price' name='surcharge_price[]' placeholder='Surcharge Price'></td><td><input type='text' required class='form-control dimS' id='surcharge_desc' required placeholder='Description' name='s_description[]'></td><br><td><button class='delRowBtn'>-</button></td></tr>").appendTo(tbl);        
    });
        
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 


//To enable and disable edit surcharge button
$(document).on('click', '#surcharge-list-table tbody tr', function(e) {
    $(this).toggleClass('selected-row'); 
    $("#EditButton").prop('disabled', false);
});



</script>