<div id="stat_webship_log" style="font-size: 11px; padding: 10px">
<a id="6878662873" href="#" data-toggle="modal" data-target="#exampleModal" onclick="doQuickSearch_new(this.id);">
            13:49 PM - 10000188 - PINNACLE GRAINS PTY LTD generated a DHL shipment</a>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="save-webship-form">
      <div class="modal-body">
     <input type="hidden" value="26316" id="hid_shipment_id">
    <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody><tr>
                <td class="td1">Service Type</td>
                <td class="td2">Road Express</td>
            </tr>
            <tr>
                <td class="td1">Shipment Date</td>
                <td class="td2">11-05-2021</td>
            </tr>
            <tr>
                <td class="td1">Package Type</td>
                <td class="td2">Customer packaging</td>
            </tr>
            <tr>
                <td class="td1">Tracking#</td>
                <td class="td2"><input type="text" name="saveWebshipHistory.airbillNumber" value="95AZ00020960" id="saveWebshipHistory_airbillNumber" class="form-control"></td>
            </tr>

        </tbody></table>
    </div>
    <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody><tr>
                <td class="td1">Reference#</td>
                <td class="td2">Joyce</td>
            </tr>
            <tr>
                <td class="td1">Collection Reference#</td>
                <td class="td2">1</td>
            </tr>
            <tr>
                <td class="td1">Confirmation#</td>
                <td class="td2">1241132</td>
            </tr>
            <tr>
                <td class="td1">Zone</td>
                <td class="td2"></td>
            </tr>
            <tr>
                <td class="td1">Content Description:</td>
                <td class="td2">Topper</td>
            </tr>
            <tr>
                <td class="td1">Dim. Weight</td>
                <td class="td2">19.00 kg(s)</td>
            </tr>
            <tr>
                <td class="td1">Actual. Weight</td>
                <td class="td2">10.0 kg(s)</td>
            </tr>
        </tbody></table>
    </div>
    <div class="col-lg-12">
        <br> <label> <b><u>Package Information:</u></b>
    </label>
        <hr class="w11">
        <table class="table table-hover table-bordeed mg0" id="datatable1">
            <thead>
            <tr>
                <th>Piece</th>
                <th>Dead weight</th>
                <th>Cubic weight</th>
                <th>Dimension</th>
            </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>1</td>
                    <td>10.00 kg(s)<br></td>
                    <td>19.00 kg(s)</td>
                    <td>36 x 36 x 58 cm(s)</td>
                </tr>
            
            </tbody>
        </table>
        <hr class="w11">
        <div class="row">
            <div class="text-right pal pdt10 w6">
                <button type="button" class="btn s33" onclick="javascript:viewAirbill();">
                    View
                </button>
                <button type="button" class="btn s33" onclick="javascript:trackAirbill();">
                    Track
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <hr class="w11">
        <div class="col-lg-6">
            <table class="table table-hover  mg0" id="">
                <thead>
                <tr>
                    <th>Shipper Address</th>
                    <th>Receiver Address</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>THE BACK and NECK BED SHOP</td>
                    <td>Joyce Grantham</td>
                </tr>
                <tr>
                    <td>KANE SIMPSON</td>
                    <td>Joyce Grantham</td>
                </tr>
                <tr>
                    <td>110 NORMA ROAD</td>
                    <td>49 Crowther Street</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>BOORAGOON 6154 WA</td>
                    <td>BAYSWATER 6053 WA</td>
                </tr>
                <tr>
                    <td>Australia</td>
                    <td>Australia</td>
                </tr>
                <tr>
                    <td>Ph: 0893021290</td>
                    <td>Ph: 0892725890</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <input type="hidden" name="saveWebshipHistory.shipmentId" value="26316" id="saveWebshipHistory_shipmentId">
            <table class="table table-hover  mg0" id="">
                <thead>
                <tr>
                    <th colspan="2">Quote Detail</th>
                </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>- Base Charge:</td>
                        <td><input type="text" name="saveWebshipHistory.baseCharge" value="31.28" id="saveWebshipHistory_baseCharge" class="form-control"></td>
                    </tr>
                    
                        
                            <tr>
                                <input type="hidden" name="saveWebshipHistory.surcharges[0].shipmentId" value="26316" id="saveWebshipHistory_surcharges_0__shipmentId">
                                <input type="hidden" name="saveWebshipHistory.surcharges[0].accessorialId" value="528" id="saveWebshipHistory_surcharges_0__accessorialId">
                                <td>- Fuel Surcharge:
                                </td>
                                <td><input type="text" name="saveWebshipHistory.surcharges[0].amount" value="4.41" id="saveWebshipHistory_surcharges_0__amount" class="form-control"></td>
                            </tr>
                        
                        
                        <tr>
                                <td>- GST:
                                </td>
                                <td>3.57</td>
                            </tr>
                        
                     <tr>
                                <td>- Total Charges:
                                </td>
                                <td>39.26</td>
                            </tr>
                        
                <tr>

                    <td colspan="2"><i>Quote is an estimate. Additional fees may apply.</i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr class="w11">
    </div>
 </div>
 </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>