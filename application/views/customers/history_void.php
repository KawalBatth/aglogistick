<div class="row">
                        <div class="col-lg-12">
                            <div class="portlet box">
                                <div class="portlet-header">
                                    <div class="caption">
                                        Shipments Void
                                    </div>
                                    <div class="tools">
                                        <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="panel-body pan">
                                        <form action="#">
                                            <div class="form-body pal">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <p>
                                                            <b id="result_void"> </b>
                                                        </p>
                                                        
                                                        <table class="table" style="font-size: 11px; margin-bottom: 0px">
                                                            <tbody><tr>
                                                                <td class="td1">Airway Bill Number</td>
                                                                <td class="td2">95AZ00020958</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="td1">Shipment Date</td>
                                                                <td class="td2"><?php if(isset($history_data->customer_id)){ echo $history_data->customer_id; } ?></td>
                                                                
                                                                  <td><?php //echo $history_data->id; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Pickup Date</td>
                                                                <td class="td2"><?php //echo $historys['ready_date']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Collection Number</td>
                                                                <td class="td2" id="td_confirmation_no">
                                                                        1240473
                                                                        <input type="hidden" name="" value="26311" id="shipmentId">
                                                                        <input type="hidden" name="" value="13493" id="schID">
                                                            </td></tr><tr>
                                                                <td colspan="2" style="border: 0px;">
                                                                    <p>
                                                                        <b>- If this shipment is scheduled for collection you may need to cancel the scheduled collection first
                                                                            . <br> - Please select a reason for cancelling this shipment.
                                                                        </b>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Reason</td>
                                                                <td class="td2"><select id="void_reason" class="form-control" style="height: 25px; padding-top: 2px;">
                                                                    <option value="001">PACKAGE NOT READY</option>
                                                                    <option value="002">RATES TOO HIGH</option>
                                                                    <option value="003">TRANSIT TIME TOO SLOW</option>
                                                                    <option value="004">TAKE TO SERVICE CENTER OR DROP BOX</option>
                                                                    <option value="005">COMMITMENT TIME NOT MET</option>
                                                                    <option value="006">REASON NOT GIVEN</option>
                                                                    <option value="007">OTHER</option>
                                                                    <option value="008">PICKUP MODIFIED</option>
                                                                </select></td>
                                                            </tr>
                                                           
                                                        </tbody></table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-actions text-right pal pdt10">
                                        <button class="btn s33 " id="void_shipment" type="button" onclick="javascript:voidAirbill();">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>