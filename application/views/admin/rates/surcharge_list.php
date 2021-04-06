<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Surcharge List
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <p>
                                            <b>Note:</b>
											<br>
											- This is the Accessorial information used for invoices and airbill imports.
											<br>
											Double-click the entry to modify its value.
											<br>
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                                <div id="accessorial-list-div">
                                                    <input type="hidden" name="page" value="1" id="surcharge_page">
                                                    <input type="hidden" name="orderField" value="code" id="orderField">
                                                    <input type="hidden" name="orderType" value="0" id="orderType">
                                                    <table class="table table-bordered mg0 table-hover table-pointer" id="surcharge-list-table">
                                                        <thead>
                                                        <tr>
                                                            <th sort-field="code" style="cursor: pointer;">Accessorial Code <i class="fa fa-sort-up"></i></th>
                                                            <th sort-field="modified_date" style="cursor: pointer;">Last Modified <i class="fa fa-sort"></i></th>
                                                            <th sort-field="typeid" style="cursor: pointer;">Accessorial Type <i class="fa fa-sort"></i></th>
                                                            <th sort-field="description" style="cursor: pointer;">Accessorial Description <i class="fa fa-sort"></i></th>
                                                            <th sort-field="service_name" style="cursor: pointer;">Carrier <i class="fa fa-sort"></i></th>
                                                            <th sort-field="isquotable" style="cursor: pointer;">Quoteable <i class="fa fa-sort"></i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- Multiple filter -->
                                                        <tr id="surcharge-list-multiple-filter">
                                                            <td><input type="text" name="code" value="" id="code" class="form-control" onkeyup="searchSurchargeByKeyUp()"></td>
                                                            <td><input type="text" name="modifiedDate" value="" id="modifiedDate" class="form-control form_datetime" onchange="doSearch()" data-date-format="dd MM yyyy"></td>
                                                            <td><select name="type" id="type" class="form-control" onchange="doSearch()">
    <option value=""></option>
    <option value="1">Fixed</option>
    <option value="2">Percent of Base Charge</option>
    <option value="3">Percent of Surcharge</option>


</select>

</td>
                                                            <td><input type="text" name="description" value="" id="description" class="form-control" onkeyup="searchSurchargeByKeyUp()"></td>
                                                            <td><input type="text" name="carrierName" value="" id="carrierName" class="form-control" onkeyup="searchSurchargeByKeyUp()"></td>
                                                            <td><select name="quotable" id="quotable" class="form-control" onchange="doSearch()">
    <option value=""></option>
    <option value="0">No</option>
    <option value="1">Yes</option>


</select>

</td>
                                                        </tr>
                                                        
                                                        
                                                            
                                                                <tr data-accessorialid="169" ondblclick="showAccessorial($(this).attr('data-accessorialId'))">
                                                                    <td></td>
                                                                    <td>08-05-2012</td>
                                                                    <td>Fixed</td>
                                                                    <td>Un Known</td>
                                                                    <td>DHL</td>
                                                                    <td>No</td>
                                                                </tr>
                                                            
                                                              
                                                            
                                                                <tr data-accessorialid="494" ondblclick="showAccessorial($(this).attr('data-accessorialId'))">
                                                                    <td>Account Admin</td>
                                                                    <td>08-05-2015</td>
                                                                    <td>Fixed</td>
                                                                    <td>Account Opening Fee</td>
                                                                    <td>AGL Australia</td>
                                                                    <td>No</td>
                                                                </tr>
                                                            
                                                        
                                                        </tbody>
                                                    </table>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions pal pdt10">
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button class="btn s37" onclick="showAddDialog()">
                                                        New Accessorial Charge
                                                    </button>
                                                    <button class="btn s37" id="btnView" onclick="showEditPage()" disabled="disabled">
                                                        View Accesorial Detail
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
  $(document).ready(function() {
    $('#surcharge-list-table').DataTable();
} );
</script>