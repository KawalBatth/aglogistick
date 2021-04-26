<div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Address Book
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
                                            
                                            
                                            <div id="div-address-book-table" class="col-xs-12">
                                                <table class="table table-hover table-bordered mg0" id="address-book-table">
                                                    <thead>
                                                    <tr>
                                                        <th>Contact</th>
                                                        <th>Company</th>
                                                        <th>Address#</th>
                                                        <th>Address 2</th>
                                                        <th>City</th>
                                                        <th>State/Province</th>
                                                        <th>Postal Code</th>
                                                        <th>Country</th>
                                                        <th>Phone</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php for($i=0;$i<count($address_book);$i++)
                                            { ?>
                                  <tr data-address-id="<?php echo $address_book[$i]['id'];?>">
                                                                <td><?php echo $address_book[$i]['contact_name'];?></td>
                                                                <td><?php echo $address_book[$i]['company_name'];?></td>
                                                                <td><?php echo $address_book[$i]['address'];?></td>
                                                                <td><?php echo $address_book[$i]['address1'];?></td>
                                                                <td><?php echo $address_book[$i]['city'];?></td>
                                                                <td><?php echo $address_book[$i]['state'];?></td>
                                                                <td><?php echo $address_book[$i]['postcode'];?></td>
                                                                <td><?php echo $address_book[$i]['country'];?></td>
                                                                <td><?php echo $address_book[$i]['phone'];?></td>
                                                            </tr>
                                                    <?php }?>
                                                         </tbody>
                                                </table>
                                                <input type="hidden" name="" value="1" id="currPage">
                                                <input type="hidden" id="selectedId" value="">
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('#selectedId').val("");
                                                        $('table#address-book-table tbody tr').click(function () {
                                                            $(this).addClass('selected-row').siblings().removeClass('selected-row');
                                                            selectedAddressId = $(this).attr("data-address-id");
                                                            $('#selectedId').val(selectedAddressId);
                                                            $('#btnEdit').attr('disabled', false);
                                                            $('#btnRemove').attr('disabled', false);
                                                        });
                                                    });
                                                </script>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-right pal pdt10">
                                    <div class="row">
                                        <div class="col-lg-10 text-left">
                                            <a href="<?= base_url('customer/address_book_add'); ?>" class="btn s33 s44">Add</a>
                                            <button class="btn s33 s44" disabled="disabled" id="btnEdit" onclick="doEdit()">
                                     Edit
                                            </button>
                                            <button class="btn s33 s44" disabled="disabled" id="btnRemove" onclick="doRemove()">
                                                Remove
                                            </button>
                                            <a href="<?= base_url('admin/address_book_import'); ?>" class="btn s33 s44">Import</a>
                                            <button class="btn s33 s44" type="button" onClick="window.location.reload()">
                                              Refresh
                                            </button>
                                            <a href="/crm-webship/address_book_export.ix" class="btn s33 s44">Export</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="btn s33 s44" type="button" onclick="onShipTo()">
                                                Ship To
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
          
        
<script>
  $(document).ready(function() {
    $('#address-book-table').DataTable( {
    } );
} );
</script>