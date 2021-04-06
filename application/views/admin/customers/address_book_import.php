 <div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Address Book Import
                            </div>
                            <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form id="form_import_address_book">
                                                <p>
                                                    <b>Note:</b>
														<br>
														- Choose a Spreadsheet type to import.
                                                </p>

                                                <div class="form-group">
                                                    <input type="file" name="fileUpload" value="" id="address_upload" class="w10" placeholder="Inlcude some file">
                                                    <br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12" style="overflow: auto;" id="file-datas-result"></div>
                                    </div>
                                </div>
                                <div class=" text-right pal pdt10">
                                    <input type="hidden" name="" value="0" id="isMapped">
                                    <button class="btn s33 " type="button" id="mapping_btn" style="display: none;" onclick="doMapping()">
                                        Map States &amp; Countries
                                    </button>
                                    <button class="btn s33 " type="button" id="import_btn" onclick="doImport()" disabled="disabled">
                                        Import
                                    </button>
                                    <a href="<?= base_url('admin/address_book'); ?>" class="btn s33 ">Cancel</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
      

      

