<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Carrier Name</label>
    <input type="text" class="form-control carrier_name" id="carrier_name" aria-describedby="emailHelp" placeholder="Enter Carrier Name">
  </div>
  <table id="piece-table">
  
  <tr id="carrier-dt1">
  <td width="2%" style="padding-top: 8px"><span id="piece-order1" class="order-number"> 1<span>
                                                                </td>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Name</label>
    <input type="text" name="carriertPage.pieces[0].name" class="form-control dimL" id="surcharge_name" placeholder="Enter Surcharge Name">
  </div>
  </td>
  <b>
  <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Price</label>
    <input type="number" name="carriertPage.pieces[0].price" class="form-control weight" id="surcharge_price" placeholder="Enter Price">
  </div>
  </td>
 <td>
  <div class="form-group">
    <label for="exampleInputPassword1">Surcharge Description</label>
    <input type="text" class="form-control dimS" id="surcharge_desc" name="carriertPage.pieces[0].desc" placeholder="Enter Description">
  </div>
  </td>
  <td width="3%" style="padding-top: 9px"><i id="remove" class="fa fa-times-circle-o s10" style="font-size: 18px; display: none;" onclick="removePiece($(this))"></i>
                                                                </td>
  </tr>
  </table>
  
  <button class="btn s33" type="button" onclick="addSurcharge()"> Add </button>
        
  <button type="submit" name="submit" class="btn s33">Save</button>
</form>


<script type="text/javascript">
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
</script>