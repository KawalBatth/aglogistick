<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Manage Cover Sheets
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <b>Note :</b><br> - This tool allows you to import JPEG,JPG,GIF,PNG,BMP file and set them as cover sheets for carrier rate sheets.
                                                </p>

                                                <div class="col-lg-12 ">
                                                    <div class="form-group text-center">
														<span class="b13 "> Selected file:(<span id="selected-file">nothing selected</span>) Check to <span id="rate-sheets-count">0</span> carrier rate sheets.
														</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 ">
                                                        <div class="form-group text-right mgb">
                                                            <table class="s36">
                                                                <tbody>
                                                                <tr>
                                                                    <td><form id="manage_cover_sheets" name="manage_cover_sheets" action="/crm-admin/manage_cover_sheets.ix" method="post" enctype="multipart/form-data">
                                                                        <input type="file" name="fileUpload" value="" accept="image/*" id="cover-upload" class="w10">
                                                                    </form>




                                                                        <div class="progress progress-striped active" style="display: none">
                                                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn s37" type="button" id="btn-delete-cover" disabled="disabled" onclick="deleteCoverSheet(afterDeleteCoverSheet)">
                                                                            Delete Attachment
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <table class="table mg0">
                                                            <tbody><tr>
                                                                <th class="s42">
                                                                    <table class="s36">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Show</td>
                                                                            <td><select name="" class="form-control" style="height: 22px; padding-top: 1px; width: 55px;" onchange="changeCPageSize($(this).val())">
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
                                                        </tbody></table>
                                                        <div id="cover-sheets-table-div">
                                                            <table class="table table-bordered mg0 table-hover table-pointer" id="cover-sheets-table">
                                                                <thead>
                                                                <tr>
                                                                    <th>File Name</th>
                                                                    <th>Upload Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                                
                                                                    
                                                                        <tr data-cover-sheet-id="49" data-file-name="DHL IB Zone Guide_cover page 26.02.15_1.png">
                                                                            <td>DHL IB Zone Guide_cover page 26.02.15_1.png</td>
                                                                            <td>01-03-2015 22:31:40</td>
                                                                        </tr>
                                                                    
                                                                        <tr data-cover-sheet-id="48" data-file-name="DHL OB Zone Guide-2015.png">
                                                                            <td>DHL OB Zone Guide-2015.png</td>
                                                                            <td>06-01-2015 19:40:11</td>
                                                                        </tr>
                                                                    
                                                                
                                                                </tbody>
                                                            </table>
                                                            <script type="text/javascript">
                                                                $(document).ready(function () {
                                                                    $('table#cover-sheets-table tbody tr').click(function () {
                                                                        var coverSheetId = $(this).attr('data-cover-sheet-id');
                                                                        var fileName = $(this).attr('data-file-name');
                                                                        if (typeof (coverSheetId) != "undefined" && coverSheetId != "") {
                                                                            $(this).addClass('selected-row').siblings().removeClass('selected-row');
                                                                            selectCSheet(coverSheetId, fileName);
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="dataTables_paginate">
                                                                        
                                                                            <button class="paginate_button previous disabled" disabled="disabled">
                                                                                Previous
                                                                            </button>
                                                                        
                                                                        
																		<span> 
                                                                            
                                                                                <a class="paginate_button current">1</a>
                                                                            
                                                                            </span>
                                                                        
                                                                        
                                                                            <a class="paginate_button next" href="javascript:changeCPage(2)">Next</a>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 ">
                                                        <form id="service-cover-sheets-form" name="service-cover-sheets-form" action="/crm-admin/manage_cover_sheets.ix" method="post">
                                                            <div class="form-group text-right w11">
                                                                <table class="s36">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Check the carrier rate sheets attach:</td>
                                                                        <td><label class="radio-inline cl666"> <input type="radio" name="coverType" value="cover" checked="checked"> &nbsp;
                                                                            Cover Sheet
                                                                        </label> <label class="radio-inline cl666">
                                                                            <input type="radio" name="coverType" value="inbound_cover"> &nbsp;
                                                                            Inbound Cover Sheet
                                                                        </label></td>
                                                                        <td>
                                                                            <button class="btn s37" type="button" id="btn-attach" disabled="disabled" onclick="attachCoverSheet()">
                                                                                Attach
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn s37" type="button" id="btn-remove" disabled="disabled" onclick="removeAttach(disabledButtons)">
                                                                                Remove Attachment
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <table class="table mg0">
                                                                <tbody><tr>
                                                                    <th class="s42"></th>
                                                                </tr>
                                                            </tbody></table>
                                                            <div id="service-cover-sheet-div">
                                                                <table class="table table-bordered mg0 table-hover" id="service-cover-sheets-table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th width="22"><input type="checkbox" onclick="selectAll($(this))">
                                                                        </th>
                                                                        <th>Carrier Name</th>
                                                                        <th>Cover Sheet</th>
                                                                        <th>Inbound Cover Sheet</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    
                                                                    
                                                                        
                                                                            <tr>
                                                                                <td><input name="serviceId" type="checkbox" value="2" onclick="countService()">
                                                                                </td>
                                                                                <td>AAE</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        
                                                                            <tr>
                                                                                <td><input name="serviceId" type="checkbox" value="67" onclick="countService()">
                                                                                </td>
                                                                                <td>ABC</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                       
                                                                          
                                                                        
                                                                    
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </form>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>