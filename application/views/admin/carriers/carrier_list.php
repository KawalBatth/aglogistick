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
                                            
                                               
                                                <div class="form-popup" id="carierAdd">
                                 
               <form id="carrier-form" name="carrier-form" action="/crm-admin/carrier_list_add.ix" method="post">
    <div class="form-group">
    <h3> Add New Carrier</h3>
        <p class="">
            Carrier Name
            :<span class="s30">*</span>
        </p>
        
        
            <input type="text" name="carrier.serviceName" value="" id="carrier-form_carrier_serviceName" class="form-control">
            <span class="text-danger"></span>
        
    </div>
    <div class="form-group">
        <p class="car_type">
            Carrier Type
            :<span class="s30">*</span>
        </p>
        <div class="carrier_type">
        <label class="radio-inline inter">
            <input class="b15" type="radio" value="0" name="carrier.carrierType">
            International
        </label>
        <label class="radio-inline dome">
            <input class="b15" type="radio" value="1" name="carrier.carrierType">
            Domestic
        </label>
        <label class="radio-inline b14">
            <input class="b15" type="radio" value="2" name="carrier.carrierType">
            Both
        </label>
        <span class="text-danger"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="radio-inline b14">
            <input type="checkbox" name="carrier.inactive" value="0">
            Active
        </label>
    </div>
    <div class="form-group">
        <label class="radio-inline b14">
            <input type="checkbox" name="carrier.nonCentralized" value="1">
            Non Centralized
        </label>
    </div>
    <input type="hidden" name="carrier.serviceId" value="" id="carrier-form_carrier_serviceId">
    <input type="hidden" name="page" value="1" id="carrier-form_page">
    <input type="hidden" name="pageSize" value="" id="carrier-form_pageSize">
    <div class="quote-button">
<button type="button" class="btn s33 save" onclick="save()">Save</button>
    <button type="button" class="btn s33 cancel" onclick="closeForm()">Cancel</button>
    </div>
</form>

</div>
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
                                                <button id="add-carriers-link" class="btn s37" type="button" onclick="openCarrier()">
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

                        <script>
function openCarrier() {
  document.getElementById("carierAdd").style.display = "block";
}

function closeForm() {
  document.getElementById("carierAdd").style.display = "none";
}


  $(document).ready(function() {
    $('#carrier-list-table').DataTable();
} );
</script>
</script>