<div class="portlet box">
  <div class="form-group">
    <div class="portlet-body">
       <h1> Customers List</h1>
         <div class="portlet-content">
            <form id="search-form">
              <table class="s36">
                <tbody>
                  <tr>
                    <td>Franchise :</td>
                    <td>
                      <select name="franchiseCode" id="franchiseCode" class="form-control">
                         <option value="All">All</option>
                         <option value="100">100 - AGL Logistics</option>
                         <option value="101">101 - Gms-test</option>
                      </select>
                    </td>
                                               
                    <td>Sale Rep :</td>
                    <td id="sale-rep-list-result">
                       <select name="salesRepId" id="salesRepId" class="form-control">
                         <option value="">All</option>
                         <option value="1">AGL</option>
                         <option value="388">Test</option>
                      </select>
                    </td>
                    <td>
                      <input type="button" class="reset" value="Go">
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
                      <div id="customers-list-table">
                             <table class="table table-striped table-bordered" id="customer_list">
							  <thead>
        <tr>
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Email</th>
          <th>Mobile No.</th>
          <th>Role </th>
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_users as $row): ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['firstname']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['mobile_no']; ?></td>
            <td><span class="btn btn-primary btn-flat btn-xs"><?= ($row['is_admin'] == 1)? 'admin': 'member'; ?><span></td>
            <td class="text-right"><a href="<?= base_url('admin/users/edit/'.$row['id']); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/users/del/'.$row['id']); ?>" class="btn btn-danger btn-flat <?= ($row['is_admin'] == 1)? 'disabled': ''?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
                                 <!--thead>
                                    <tr>
                                          <th>Customer #</th>
                                          <th>Customer Name</th>
                                          <th class="text-right">MTD Rev.</th>
                                          <th class="text-right">YTD Rev.</th>
                                          <th class="text-right">Last Shipment Date/Time</th>
                                    </tr>
                                  </thead>
                                    <tbody>
                                        <tr>
                                            <td>200003</td>
                                            <td>Demo</td>
                                            <td>1234556</td>
                                            <td>123456</td>
                                            <td>12/02/2021</td>
                                        </tr>
                                        <tr>
                                            <td>200003</td>
                                            <td>Test</td>
                                            <td>1234556</td>
                                            <td>123456</td>
                                            <td>12/02/2021</td>
                                        </tr>
                                      </tbody-->
                                </table>
                                
                        </div>
                </div>         
        </div>
  </div>
 
<script>
  $(document).ready(function() {
    $('#customer_list').DataTable();
} );
</script>