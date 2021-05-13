<?php
foreach ($result as $datas) {
    foreach ($datas as $data) {
        $status = $data['consignment'];
        $tarcking = $data['tracking_id'];
    }
} ?>


  <div class="portlet box">
                                <div class="portlet-header">
                                    <div class="caption">
                                        Track Shipments
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
                                                    <div class="col-lg-6">
                                                        <table class="table s99" style="margin-bottom: 0px">
                                                            <tbody><tr>
                                                                <td class="td1">Tracking Number</td>
                                                                <td class="td2"><?php echo $tarcking; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Shipped By</td>
                                      <?php $carrier = $this->db->where('id', $shipmentdatas['carrier_id'])->get('carriers')->row(); ?>
                                   <td class="td2"><?php print_r($carrier->carrier_name); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Signed for by</td>
                                                                <td class="td2">
                                                                                             
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Destination</td>
                                                                <td class="td2">- </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Status</td>
                                                                <td class="td2"><?php echo $status['status']; ?></td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <table class="table s99" style="margin-bottom: 0px">
                                                            <tbody><tr>
                                                                <td class="td1">Consignee</td>
                                                                <td class="td2"><?php echo $shipmentdatas['collect_city'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Ship Date</td>
                                                                <td class="td2"><?php echo $shipmentdatas['ready_date'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Delivery Date</td>
                                                                <td class="td2">
                                                                    
                                                                           10-05-2021
                                                                            10:48:00
                                                                        
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td1">Service Type</td>
                                                                <td class="td2"><?php echo $shipmentdatas['service_name'] ?></td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <br> <br>
                                                        <hr class="w11">
                                                        <table class="table table-hover table-bordeed mg0" id="datatable1">
                                                            <thead>
                                                            <tr>
                                                                <th>Date/Time</th>
                                                                <th>Activity</th>
                                                                <th>Location</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                      <?php foreach ($status['events'] as $event) { ?>
                                                       <tr>

                                                       <?php  $date = $shipmentdatas['ready_date'];
                                                $start= date('d-m-Y h:i:s', strtotime($date)); ?>
                                                                  <td><?php echo $start; ?></td>
                                                                  <td><?php echo $event['description']; ?></td>
                                                                  <td><?php echo $event['location']; ?></td>

                                                         </tr>
                                               <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       