
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--h5 class="modal-title" id="exampleModalLabel">Edit Address Book Details</h5-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open(base_url('customer/update_address_book'), 'class="address_book_add-form" '); ?>
      <div class="modal-body">
      <input type="hidden"  name="address_id" class="form-control" value="" id="address_id">
      <input type="hidden" name="customerCode" id="customerCode" value="<?php echo $customers->customer_id;?>">
      <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Address Fields
                                </div>
                                <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php if(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } }?>
                                <div class="tools">
                                    <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Contact"> Contact <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressContactName" value="" id="addresscontactName" class="form-control" required="required">
                         </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company
                                                    </label>
                                                    <input type="text" name="addressCompanyName" value="" id="addresscompanyName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Address"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="addressAddress1" value="" id="address1" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="addressAddress2" value="" id="address2" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="City"> City <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressCity" value="" id="addresscity" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div id="city-search"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> State/Province
                                                    </label>
                                                    <input type="text" name="addressState" value="" id="addressstate" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="addressPostalCode" value="" id="addresspostalCode" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Country"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="addressCountry" id="addressCountryId" class="form-control" required="required">
                                                    <option value="0">Select a Country</option>
                                                    <?php  for($c=0;$c<count($country);$c++) 
                                                            {                                                                
                                                                ?>  
                                                                <option value="<?php echo $country[$c]['id'];?>" ><?php echo $country[$c]['country_name'];?></option>
                                                               
                                                            <?php
                                                           }   ?> 
</select>


                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Phone"> Phone <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressPhone" value="" id="addressphone" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email
                                                    </label>
                                                    <input type="email" name="addressEmail" value="" id="addressemail" class="form-control">
                                                    <span class="s30"> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Additional Detail
                                </div>
                                <div class="tools">
                                    <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="panel-body pan">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Department
                                                    </label>
                                                    <input type="text" name="addressDepartment" value="" id="addressdepartment" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Fax
                                                    </label>
                                                    <input type="text" name="addressFax" value="" id="addressfax" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Service Type
                                                    </label>
                                                    <select name="addressDefaultServiceType" id="defaultServiceType" class="form-control">
    <option value="0">No default</option>
    <option value="0">Not Available</option>
    <option value="1">DHL Worldwide Express</option>
</select>


                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Package Type</label>
                                                    <select name="addressDefaultPackageType" id="defaultPackageType" class="form-control">
    <option value="0">No default</option>
    <option value="1">
    	Star Track
</option>
</select>
     </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Billing Type</label>
                                                    <select name="addressDefaultBillingType" id="defaultBillingType" class="form-control">
    <option value="0">No default</option>
    <option value="1">
    	Sender
</option>
    <option value="2">
    	Receiver
</option>
    <option value="3">
    	Third Party
</option>

</select>
 </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName">Account No</label>
                                                    <input type="text" name="addressAccountNumber" value="" id="addressAccountNumber" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isResidential" id="isResidential" type="checkbox" value="1">
                                                        &nbsp; Residential Address
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="addressBookModel.addressId" value="" id="address_book_add_addressBookModel_addressId">
                                    <div class=" text-right pal pdt10">
                                       
                                        <!--a href="http://localhost/agllogistic/customer/address_book" class="btn s33 ">Cancel</a-->
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
                            </div>
                        </div>
                    </div>
                </div>
           
      </div>
      <div class="modal-footer">
        
      <button type="submit" name="submit" class="btn s33 s44">Update</button>
        <button type="button" class="btn s33 s44" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
   </div>
</div>

<div class="portlet box">
                        <div class="portlet-header">
                            <div class="caption">
                                Address Book
                            </div>
                            <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="panel-body pan">
                                <div class="form-body pal">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            
                                            <div id="div-address-book-table" class="col-xs-12">
                                                <table class="table table-hover table-bordered mg0" id="address-book-table">
                                                    <thead>
														<tr>
															<th>Contact</th>
															<th>Company</th>
															<th>Address#</th>
															<th>Address 2</th>
															<th>City</th>
															<th>State/Province</th>
															<th>Postal Code</th>
															<th>Country</th>
															<th>Phone</th>
												</tr>
                                                    </thead>
													<tbody>
														<?php for($i=0;$i<count($address_book);$i++)
														{ 
															if($address_book[$i]['customer_id'] == $customers->customer_id){ ?>
																<tr data-address-id="<?php echo $address_book[$i]['id'];?>" id="<?php echo $address_book[$i]['id'];?>" >
																	<?php  
																		$addressId =  $address_book[$i]['id'];
																		$id	= $address_book[$i]['customer_id']; ?>
																	<td><?php echo $address_book[$i]['contact_name'];?></td>
																	<td><?php echo $address_book[$i]['company_name'];?></td>
																	<td><?php echo $address_book[$i]['address'];?></td>
																	<td><?php echo $address_book[$i]['address1'];?></td>
																	<td><?php echo $address_book[$i]['city'];?></td>
																	<td><?php echo $address_book[$i]['state'];?></td>
																	<td><?php echo $address_book[$i]['postcode'];?></td>
                                                                    <td> <?php echo $address_book[$i]['country']; ?></td>
                                                                   <td><?php echo $address_book[$i]['phone'];?></td>
																	<!--td>     
																		<button type="button" class="btn s33 s44 remove" id="remove">Delete</button> 
																	</td-->
																</tr>
															<?php } 
														} ?>
													</tbody>
                                                </table>
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
              <table class="address_button">
                <tbody> 
                 <div class="row">
                      <div class="col-lg-10 text-left">
                                        <tr>
                                <td>  <a href="<?= base_url('customer/address_book_add'); ?>" class="btn s33 s44">Add</a></td>
                               
                                <td><a href="javascript:void(0);" class="btn s33 s44" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
											</td>
											  <!-- File upload form -->
											  <div class="col-md-12" id="importFrm" style="display: none;">
												<form action="<?php echo base_url('members/import'); ?>" method="post" enctype="multipart/form-data">
													<input type="file" name="file" />
													<input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
												</form>
											</div>
                                         
                                      <td> <button class="btn s33 s44" type="button" id="refresh" onClick="window.location.reload()">
                                              Refresh
                                            </button></td>
                                            <!--a href="/crm-webship/address_book_export.ix" class="btn s33 s44">Export</a-->
                                            <!--input type="button" id="btnExport" class="btn s33 s44" value="Export to Pdf" /-->
                                            <td><button name="create_excel" id="create_excel" class="btn s33 export">Export Excel</button> </td>
                                        </div>
                                        <td> <button type="button" onclick="editAddressBook()" id="EditButton" class="btn s33 s44" disabled>Edit</button></td>
											<?php if(!empty($addressId))
											{ ?>
                                              <td>  <button type="button" class="btn s33 s44" id="remove" disabled onclick="deleteAddress()">Delete</button> <td>
												<td><button class="btn s33 s44" type="button" id="shipto" disabled onclick="onShipTo()">
													Ship To
												</button></td>
											<?php } 
											else { ?>
												<td><button class="btn s33 s44" type="button" id="shipto" onclick="myFunction()">Ship To </button></td>
											<?php } ?>
										</div></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script-->
  
 
<script type="text/javascript">
       /* $("body").on("click", "#btnExport", function () {
            html2canvas($('#address-book-table')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("address-book.pdf");
                }
            });
        });*/
        
		function onShipTo(){
			var row_id = $('tr.selected-row').attr('id');
			window.location.href = "<?php echo base_url('customer/shipment/?id='); ?>"+row_id;
		}
		
		function myFunction() {
			alert("Please select an address!");
		}
//To enable and disable edit surcharge button
$(document).on('click', '#address-book-table tbody tr', function(e) {
    $('#address-book-table tbody tr').removeClass('selected-row');
    $(this).toggleClass('selected-row'); 
    $("#EditButton").prop('disabled', false);
    $("#shipto").prop('disabled', false);
    $("#remove").prop('disabled', false);
});


$('#create_excel').click(function() {
	  var titles = [];
	  var data = [];

	  $('.dataTable th').each(function() {
		titles.push($(this).text());
	  });

	  $('.dataTable td').each(function() {
		data.push($(this).text());
	  });

	  var CSVString = prepCSVRow(titles, titles.length, '');
	  CSVString = prepCSVRow(data, titles.length, CSVString);

	  var downloadLink = document.createElement("a");
	  var blob = new Blob(["\ufeff", CSVString]);
	  var url = URL.createObjectURL(blob);
	  downloadLink.href = url;
	  downloadLink.download = "data.csv";

	  document.body.appendChild(downloadLink);
	  downloadLink.click();
	  document.body.removeChild(downloadLink);
	});

	function prepCSVRow(arr, columnCount, initial) {
	  var row = ''; // this will hold data
	  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
	  var newLine = '\r\n'; // newline separator for CSV row

	  function splitArray(_arr, _count) {
		var splitted = [];
		var result = [];
		_arr.forEach(function(item, idx) {
		  if ((idx + 1) % _count === 0) {
			splitted.push(item);
			result.push(splitted);
			splitted = [];
		  } else {
			splitted.push(item);
		  }
		});
		return result;
	  }
	  var plainArr = splitArray(arr, columnCount);
	  plainArr.forEach(function(arrItem) {
		arrItem.forEach(function(item, idx) {
		  row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
		});
		row += newLine;
	  });
	  return initial + row;
	}



    function editAddressBook()
   {

    $('#exampleModal').modal('show');
    var address_id = $('.selected-row').attr('data-address-id');
    var addressContactName = $('.selected-row td:eq(0)').html();
    var addressCompanyName = $('.selected-row td:eq(1)').html();
    var addressAddress1 = $('.selected-row td:eq(2)').html();
    var addressAddress2 = $('.selected-row td:eq(3)').html();
    var addressCity = $('.selected-row td:eq(4)').html();
    var addressState = $('.selected-row td:eq(5)').html();
    var addressPostalCode = $('.selected-row td:eq(6)').html();
    var addressCountry = $('.selected-row td:eq(7)').html();
    var addressPhone = $('.selected-row td:eq(8)').html();
    var addressEmail = $('.selected-row td:eq(9)').html();
    var addressDepartment = $('.selected-row td:eq(10)').html();
    var addressFax = $('.selected-row td:eq(11)').html();
    var addressDefaultServiceType = $('.selected-row td:eq(12)').html();
    var addressDefaultPackageType = $('.selected-row td:eq(13)').html();
    var addressDefaultBillingType = $('.selected-row td:eq(14)').html();
    var addressAccountNumber = $('.selected-row td:eq(15)').html();
    var isResidential = $('.selected-row td:eq(16)').html();


    $('#exampleModal #addressCountryId option').each(function()
    {
        if($(this).html()==addressCountry)
        {
            $(this).prop('selected',true);
        } 
    });  
     $('#exampleModal #defaultServiceType option').each(function()
    {
        if($(this).html()==addressDefaultServiceType)
        {
            $(this).prop('selected',true);
        } 
    });   
   $('#exampleModal #defaultPackageType option').each(function()
    {
        if($(this).html()==addressDefaultPackageType)
        {
            $(this).prop('selected',true);
        } 
    });   
    $('#exampleModal #defaultBillingType option').each(function()
    {
        if($(this).html()==addressDefaultBillingType)
        {
            $(this).prop('selected',true);
        } 
    });   

     $('#exampleModal #addresscontactName').val(addressContactName);
     $('#exampleModal #addresscompanyName').val(addressCompanyName);
     $('#exampleModal #address1').val(addressAddress1);
     $('#exampleModal #address2').val(addressAddress2);
     $('#exampleModal #addresscity').val(addressCity);
     $('#exampleModal #addressstate').val(addressState);
     $('#exampleModal #addresspostalCode').val(addressPostalCode);
     $('#exampleModal #addressphone').val(addressPhone);
     $('#exampleModal #email').val(addressEmail);
     $('#exampleModal #addressdepartment').val(addressDepartment);
     $('#exampleModal #addressfax').val(addressFax);
     $('#exampleModal #addressAccountNumber').val(addressAccountNumber);
     $('#exampleModal #isResidential').val(isResidential);
     $('#exampleModal #address_id').val(address_id);
     
}

    function deleteAddress(){
		var id = $('tr.selected-row').attr('id');
		if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
             url: 'customers/delAddress/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
                   window.location.reload();
               }
            });
        }
		}

    function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}


  $(document).ready(function() {
    $('#address-book-table').DataTable( {
    } );
} );
</script>