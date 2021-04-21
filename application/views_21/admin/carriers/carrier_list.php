<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Carriers
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <b>Note :</b>
													<br>
													- The list of Carriers
													<br>
													- Double-click the entry to modify its value.
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <form id="carrier_list_search_form">
                                                    <input type="hidden" name="page" value="1" id="carrier_list_page">
                                                    <input type="hidden" name="orderType" value="0" id="carrier_list_order_type">
                                                    <input type="hidden" name="orderField" value="service_id" id="carrier_list_order_field">
                                                    <table class="table mg0">
                                                        <tbody>
                                                        <tr>
                                                            <th class="s42">
                                                                <table class="s36">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Show</td>
                                                                        <td><select name="pageSize" id="carrier_list_page_size" class="form-control" onchange="changePageSize()">
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>


</select>

</td>
                                                                        <td>Entries</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                                <div id="carrier-list-div">
                                                    <table class="table table-bordered mg0 table-pointer" id="carrier-list-table">
                                                        <thead>
                                                        <tr>
                                                            <th sort-field="service_id" style="cursor: pointer;">Id <i class="fa fa-sort-up"></i></th>
                                                            <th sort-field="service_name" style="cursor: pointer;">Carrier Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="inactive" style="cursor: pointer;">Active <i class="fa fa-sort"></i></th>
                                                            <th sort-field="non_centralized" style="cursor: pointer;">Non Centralized <i class="fa fa-sort"></i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                        
                                                            
                                                                <tr data-carrier-id="1" ondblclick="showEditDialog('1')">
                                                                    <td>1</td>
                                                                    <td>DHL</td>
                                                                    <td><input type="checkbox" disabled="disabled" checked="checked">
                                                                    </td>
                                                                    <td><input type="checkbox" disabled="disabled">
                                                                    </td>
                                                                </tr>
                                                            
                                                                <tr data-carrier-id="2" ondblclick="showEditDialog('2')">
                                                                    <td>2</td>
                                                                    <td>AAE</td>
                                                                    <td><input type="checkbox" disabled="disabled">
                                                                    </td>
                                                                    <td><input type="checkbox" disabled="disabled">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate records">
                                                        <div class="row">
                                                            <div class="col-xs-4 text-left">
                                                                <b>Showing 1
                                                                    to 25
                                                                    of 54
                                                                    entries</b>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                
                                                                    <a class="paginate_button previous disabled">Previous</a>
                                                                
                                                                
																<span> 
                                                                    
                                                                        <a class="paginate_button current">1</a>
                                                                    
                                                                </span>
                                                                
                                                                
                                                                    <a class="paginate_button next" href="javascript:changePage(2)">Next</a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions pal pdt10">
                                        <div class="row">
                                            <div class="col-lg-12 text-right">
                                                <button class="btn s37" id="btnView" disabled="disabled" onclick="viewService()">
                                                    View Service
                                                </button>
                                                <button id="add-carriers-link" class="btn s37" type="button" onclick="showAddDialog()">
                                                    New Carriers
                                                </button>
                                                <button class="btn s37" id="btnDelete" disabled="disabled" onclick="deleteCarrier()">
                                                    Delete Carrier
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>