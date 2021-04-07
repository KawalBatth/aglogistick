<div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Surcharge List
                                </div>
                            </div>
                            <div class="portlet-body" style="padding: 0px;">
                                <div class="tab-content responsive">
                                    <div id="Overview-tab" class="tab-pane fade in active">
                                        <!--p>
                                            <b>Note:</b>
											<br>
											- This is the Accessorial information used for invoices and airbill imports.
											<br>
											Double-click the entry to modify its value.
											<br>
                                        </p-->

<div class="surcharge-form" id="surchargeForm">
<form>
<h3 class="new_surcharge">Add Carrier Surcharges</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Carrier Name</label>
    <input type="text" class="form-control carrier_name" id="carrier_name" aria-describedby="emailHelp" placeholder="Carrier Name">
  </div>
  <table id="piece-table">
  
  <tr id="carrier-dt1">
 
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" name="carriertPage.pieces[0].name" class="form-control dimL" id="surcharge_name" placeholder="Surcharge Name">
  </div>
  </td>
  <b>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number" name="carriertPage.pieces[0].price" class="form-control weight" id="surcharge_price" placeholder="Surcharge Price">
  </div>
  </td>
 <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Description</label>
    <input type="text" class="form-control dimS" id="surcharge_desc" name="carriertPage.pieces[0].desc" placeholder="Description">
  </div>
  </td>
  
  <td width="3%" style="padding-top: 9px"><i id="remove" class="fa fa-times-circle-o s10" style="font-size: 18px; display: none;" onclick="removePiece($(this))"></i>
                                                                </td>
  </tr>
  </table>
   <button class="btn s33" type="button" onclick="addSurcharge()"> + </button>
  <div class="quote-button">
  <button type="submit" name="submit" class="btn s33">Save</button>
  <button type="button" class="btn s33 cancel" onclick="closeForm()">Close</button>
  </div>
</form>

</div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                
                                                <div id="accessorial-list-div">
                                                    <input type="hidden" name="page" value="1" id="surcharge_page">
                                                    <input type="hidden" name="orderField" value="code" id="orderField">
                                                    <input type="hidden" name="orderType" value="0" id="orderType">
                                                    <table class="table table-bordered mg0 table-hover table-pointer" id="surcharge-list-table">
                                                        <thead>
                                                        <tr>
                                                            <th sort-field="code" style="cursor: pointer;">Carrier ID <i class="fa fa-sort-up"></i></th>
                                                            <th sort-field="modified_date" style="cursor: pointer;">Carrier Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="typeid" style="cursor: pointer;">Surcharge Name <i class="fa fa-sort"></i></th>
                                                            <th sort-field="service_name" style="cursor: pointer;">Surcharge Price <i class="fa fa-sort"></i></th>
                                                            <th sort-field="description" style="cursor: pointer;">Surcharge Description <i class="fa fa-sort"></i></th>
                                                            <th sort-field="isquotable" style="cursor: pointer;">Last modified <i class="fa fa-sort"></i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- Multiple filter -->
                                                
                                                        
                                                          <tr data-accessorialid="169" class="on-click" ondblclick="showAccessorial($(this).attr('data-accessorialId'))">
                                                                    <td>1</td>
                                                                    <td>Star Track</td>
                                                                    <td>DG Surcharge</td>
                                                                    <td>12.67</td>
                                                                    <td>Dangerous Surcharge</td>
                                                                    <td>12-03-21</td>
                                                                </tr>
                                                            
                                                            <tr data-accessorialid="494" class="on-click" ondblclick="showAccessorial($(this).attr('data-accessorialId'))">
                                                                    <td>2</td>
                                                                    <td>StarTrack</td>
                                                                    <td>Fuel Surcharge</td>
                                                                    <td>13.59</td>
                                                                    <td>Fuel Surcharge</td>
                                                                    <td>12-94-21</td>
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
                                                       Add New Carrier Surcharge
                                                    </button>
                                                    <button class="btn s37" id="btnView" disabled="disabled">
                                                        Edit Surcharge Detail
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

function showAddDialog() {
  document.getElementById("surchargeForm").style.display = "block";
}

function closeForm() {
  document.getElementById("surchargeForm").style.display = "none";
}

var order = $('#piece-table tbody tr').length;
   function addSurcharge()
{
   order++;
   index = order - 1;
   var addPieceContent = $("#carrier-dt" + index).clone();
   addPieceContent.attr('id', 'carrier-dt' + order);
   addPieceContent.find(".order-number").html(order);
   addPieceContent.find(".weight").attr('name', 'carriertPage.pieces[' + index + '].price');
   addPieceContent.find(".dimensionList").attr('onchange', 'changeDimensionList($(this).val(),' + index + ')');
   addPieceContent.find(".dimL").attr('name', 'carriertPage.pieces[' + index + '].name');
   addPieceContent.find(".dimS").attr('name', 'carriertPage.pieces[' + index + '].desc');
   addPieceContent.find('#remove').show();
   $('#piece-table tbody tr:last').after(addPieceContent);
}

function removePiece($this) 
{
   $this.closest("tr").remove();
   $('#piece-table tbody tr').each(function (i) {
   $(this).find(".order-number").html(i + 1);
    });
                                                                
}

$('tr.on-click')
     .click(function(event) {
                 
$('tr.on-click').not(this).removeClass('selected-row');
$(this).toggleClass('selected-row'); 

 var wasSelected = $(this).hasClass('selected-row');
  
 if (wasSelected) {
    $('#btnView').removeClass("disabled");
  } else {
    $('#btnView').addClass("disabled");
  }
})
</script>