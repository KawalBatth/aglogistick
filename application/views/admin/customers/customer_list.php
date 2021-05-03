<div class="portlet box">
  <div class="form-group">
    <div class="portlet-body">
       <h1> Customers List</h1>
       
                      <div id="customers-list-table">
                             <table class="table table-striped table-bordered" id="customer_list">
							  <thead>
        <tr>
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Email</th>
          <th>Mobile No.</th>
          <!--th>Role </th-->
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_customers as $row): ?>
          <tr data-accessorialid="<?php echo $row['id']; ?>">
            <td><?= $row['customer_id'];?></td>
            <td><?= $row['customerName']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['phone']; ?></td>
            <!--td><span class="btn btn-primary btn-flat btn-xs"><?php //($all_users['is_admin'] == 1)? 'admin': 'member'; ?></span></td-->
            
            <td class="text-right"><a href="<?= base_url('admin/customer_manage?id='.$row['customer_id']); ?>" class="btn btn-info btn-flat">Edit</a>
            <button type="button" class="btn remove"> Delete</button> </td>

         
          </tr>
          <?php endforeach; ?>
        </tbody>
                            
                                </table>
                                
                        </div>
                </div>         
        </div>
  </div>
 
<script>
  $(document).ready(function() {
    $('#customer_list').DataTable();
} );


$(".remove").click(function(){
        var id = $(this).parents("tr").attr("data-accessorialid");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
              url: 'customers/delCustomer/'+id,
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

   

</script>