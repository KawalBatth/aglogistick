
<form id="address_book_add" name="address_book_add" onsubmit="return validate_form();">
<input type="hidden" name="customerCode" id="customerCode" value="<?php echo $customers->customer_id;?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">
                                    Address Fields
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
                                                    <label class="control-label address_imp" for="inputName" data-label="Contact"> Contact <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressContactName" value="" id="address_book_add_addressBookModel_contactName" class="form-control" required="required">
                                                    <div id="error"></div>
                         </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company
                                                    </label>
                                                    <input type="text" name="addressCompanyName" value="" id="address_book_add_addressBookModel_companyName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label address_imp" for="inputName" data-label="Address"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="addressAddress1" value="" id="address_book_add_addressBookModel_address1" class="form-control" required="required">
                                                    <div id="error1"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="addressAddress2" value="" id="address_book_add_addressBookModel_address2" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label address_imp" for="inputName" data-label="City"> City <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressCity" value="" id="address_book_add_addressBookModel_city" class="form-control" required="required">
                                                    <div id="error6"></div>
                                                </div>
                                                <div id="city-search"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> State/Province
                                                    </label>
                                                    <input type="text" name="addressState" value="" id="address_book_add_addressBookModel_state" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Postal Code
                                                    </label>
                                                    <input type="text" name="addressPostalCode" value="" id="address_book_add_addressBookModel_postalCode" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label address_imp" for="inputName" data-label="Country"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="addressCountry" id="addressCountryId" class="form-control" required="required">
                                                    <option value="Australia" selected="selected"> Australia</option>
                                                            </select>

<div id="error2"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Phone"> Phone <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressPhone" value="" id="address_book_add_addressBookModel_phone" class="form-control" required="required" maxlength="10">
                                                    <div id="error3"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email
                                                    </label>
                                                    <input type="email" name="addressEmail" value="" id="address_book_add_addressBookModel_email" class="form-control">
                                                    <div id="error4"></div>
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
                                                    <input type="text" name="addressDepartment" value="" id="address_book_add_addressBookModel_department" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Fax
                                                    </label>
                                                    <input type="text" name="addressFax" value="" id="address_book_add_addressBookModel_fax" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Service Type
                                                    </label>
                                                    <select name="addressDefaultServiceType" id="address_book_add_addressBookModel_defaultServiceType" class="form-control">
    <option value="0">No default</option>
    <option value="0">Not Available</option>
    <option value="1">DHL Worldwide Express</option>
</select>


                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Default Package Type</label>
                                                    <select name="addressDefaultPackageType" id="address_book_add_addressBookModel_defaultPackageType" class="form-control">
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
                                                    <select name="addressDefaultBillingType" id="address_book_add_addressBookModel_defaultBillingType" class="form-control">
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
                                                    <input type="text" name="addressAccountNumber" value="" id="address_book_add_addressAccountNumber" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="fw0"> <input name="isResidential" type="checkbox" value="1">
                                                        &nbsp; Residential Address
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="addressBookModel.addressId" value="" id="address_book_add_addressBookModel_addressId">
                                    <div class=" text-right pal pdt10">
                                        <button class="btn s33 " type="button" onclick="saveNewAddressBook()">
                                            Save
                                        </button>
                                        <a href="<?= base_url('customer/address_book'); ?>" class="btn s33 ">Cancel</a>
                                    </div>
                                </div>
                                <div class="chat-form s11"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

<script type="text/javascript">

function validate_form()
{
    valid = true;

 var addressContactName = document.getElementById("address_book_add_addressBookModel_contactName").value;
 var address = document.getElementById("address_book_add_addressBookModel_address1").value;
 var addressCity = document.getElementById("address_book_add_addressBookModel_city").value;
 var addressCountry = document.getElementById("addressCountryId").value;
 var addressPhone = document.getElementById("address_book_add_addressBookModel_phone").value;
    
     if(addressContactName == "")
     {
     document.getElementById('error').innerHTML="*Contact Name is empty";
     $("#error").css("color", "red");
     $("#error").css("font-size", "11px");
      valid = false;
     }
     

      if(address == ""){
       document.getElementById('error1').innerHTML="*Address is empty";
        $("#error1").css("color", "red");
        $("#error1").css("font-size", "11px");
         valid = false;
     }
     
   

     if(addressCity == ""){
     document.getElementById('error6').innerHTML="*City is empty";
     $("#error6").css("color", "red");
     $("#error6").css("font-size", "11px");
      valid = false;
     }
    

    if(addressCountry == ""){
       document.getElementById('error2').innerHTML="*Country is empty";
        $("#error2").css("color", "red");
        $("#error2").css("font-size", "11px");
        valid = false;
     }
    

     if(addressPhone == ""){
       document.getElementById('error3').innerHTML="*Phone number is empty";
        $("#error3").css("color", "red");
        $("#error3").css("font-size", "11px");
        valid = false;
     }

     else
     {
      
        return valid;
     }

    
}

document.address_book_add.addressContactName.onchange = function() {
    document.getElementById('error').remove();
}


document.address_book_add.addressAddress1.onchange = function() {
    document.getElementById('error1').remove();
}


document.address_book_add.addressCity.onchange = function() {
    document.getElementById('error6').remove();
}


document.address_book_add.addressPhone.onchange = function() {
    document.getElementById('error3').remove();
}



</script>

<script>
        
    function saveNewAddressBook() {
        validate_form();
    if(valid == true){
     var formdata = $("#address_book_add").serialize();
        $.ajax({
            url: 'customers/add_address_book',
             type: 'POST',
             data:formdata,
             error: function() {
                alert('Something is wrong');
             },
             success: function(res) {
                //location.reload();
                alert("Address Book added Successfully");
                window.location.href = "address_book";
             }
          });
      }
    
  }


  $("input[name='isResidential']").change(function() 
  {
        if(this.checked) {
        $("input[name='isResidential']").val(1);        
        }
        else {
           $("input[name='isResidential']").val(0);        
        }
    });


  // To disappear a Falsh message
var timeout = 2000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);

</script>
<style>
.ui-widget-content {
    background: #ffffff;
    padding: 0px;
    position: relative;
    padding: 1.6em;
    border: 0;
    margin-top: 0px !important;
}

span.ui-button-text {
    margin-left: -20px;
}

.ui-dialog .ui-dialog-title {
    /* float: left; */
    margin: .1em 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-top: 3px !important;
}

button.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-icon-only.ui-dialog-titlebar-close {
    background: none;
}

.ui-dialog .ui-dialog-title {
    float: none !important;
    margin: 0;
    border-bottom: none;
    color:#fff !important;
}

.ui-button .ui-button-text {
    display: inline-block;
    text-indent: 0;
}
    </style>