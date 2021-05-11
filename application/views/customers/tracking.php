<?php
foreach ($result as $datas) {
    foreach ($datas as $data) {
        $status = $data['consignment'];
        $tarcking = $data['tracking_id'];
    }
} ?>

<div class="modal-body">
    <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody>
                <tr>
                    <td class="td1">Tracking Number</td>
                    <td class="td2"><?php echo $tarcking; ?></td>
                </tr>
                <tr>
                    <td class="td1">Shipment Date</td>
                    <td class="td2"><?php echo $shipmentdatas['ready_date'] ?></td>
                </tr>
                <tr>
                    <td class="td1"> Signed for by</td>
                    <td class="td2"></td>
                </tr>
                <tr>
                    <td class="td1">Destination</td>
                    <td class="td2">-</td>
                </tr>
                <tr>
                    <td class="td1">Status</td>
                    <td class="td2"><?php echo $status['status']; ?></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
        <table class="table" style="font-size: 11px; margin-bottom: 0px">
            <tbody>
                <tr>
                    <td class="td1">Consignee</td>
                    <td class="td2"><?php echo $shipmentdatas['collect_city'] ?> </td>
                </tr>
                <tr>
                    <td class="td1">Shipped By</td>
                    <?php $carrier = $this->db->where('id', $shipmentdatas['carrier_id'])->get('carriers')->row(); ?>
                    <td class="td2"><?php print_r($carrier->carrier_name); ?></td>
                </tr>
                <tr>
                    <td class="td1">Delivery Date</td>
                    <td class="td2">9898177</td>
                </tr>
                <tr>
                    <td class="td1">Service Type</td>
                    <td class="td2">DHL Worldwide Express</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <table class="table table-hover table-bordeed mg0" id="datatable12">
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
                        <td><?php echo $event['date']; ?></td>
                        <td><?php echo $event['description']; ?></td>
                        <td><?php echo $event['location']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>