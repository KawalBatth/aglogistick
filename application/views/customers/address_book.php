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
                                                          <tr data-address-id="36">
                                                                <td>MARK CANNING</td>
                                                                <td>CENTURION GARAGE DOORS</td>
                                                                <td>145 QUINNS HILL ROAD EAST</td>
                                                                <td></td>
                                                                <td>STAPYLTON</td>
                                                                <td>QLD</td>
                                                                <td>4207</td>
                                                                <td>Australia</td>
                                                                <td>0734414900</td>
                                                            </tr>
                                                        
                                                            <tr data-address-id="37">
                                                                <td>VIKKI</td>
                                                                <td>CENTURION GARAGE DOORS</td>
                                                                <td>79 INNOVATION CIRCUT</td>
                                                                <td></td>
                                                                <td>WANGARA</td>
                                                                <td>WA</td>
                                                                <td>6065</td>
                                                                <td>Canada</td>
                                                                <td>0893027500</td>
                                                            </tr>
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
                                            <a href="<?= base_url('admin/address_book_add'); ?>" class="btn s33 s44">Add</a>
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