<?php /*$address_id = @$_GET['id'];
if(isset($address_id))
{
  @$address_book= get_address_by_id($address_id);
  
   foreach($address_book as $key=>$value)
        { 
          if (!$value) 
            $address_book->$key = '';
        }
        
}
echo @$address_book;*/

?>
<form id="address_book_add" name="address_book_add">
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
                                                    <label class="control-label" for="inputName" data-label="Contact"> Contact <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressContactName" value="" id="address_book_add_addressBookModel_contactName" class="form-control" required="required">
                         </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Company
                                                    </label>
                                                    <input type="text" name="addressCompanyName" value="" id="address_book_add_addressBookModel_companyName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="Address"> Address <span class="s30"> *</span>
                                                    </label>
                                                    <input type="text" name="addressAddress1" value="" id="address_book_add_addressBookModel_address1" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Address 2
                                                    </label>
                                                    <input type="text" name="addressAddress2" value="" id="address_book_add_addressBookModel_address2" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName" data-label="City"> City <span class="s30">*</span>
                                                    </label>
                                                    <input type="text" name="addressCity" value="" id="address_book_add_addressBookModel_city" class="form-control" required="required">
                                                    <span class="s30"> </span>
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
                                                    <label class="control-label" for="inputName" data-label="Country"> Country <span class="s30"> *</span>
                                                    </label>
                                                    <select name="addressCountry" id="addressCountryId" class="form-control" required="required">
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
                                                    <input type="text" name="addressPhone" value="" id="address_book_add_addressBookModel_phone" class="form-control" required="required">
                                                    <span class="s30"> </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputName"> Email
                                                    </label>
                                                    <input type="email" name="addressEmail" value="" id="address_book_add_addressBookModel_email" class="form-control">
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
        

 <div id="alert-dialog" title="Error"></div>
<div id="message-dialog" title="Message"></div>
<script type="text/javascript">
    // init common dialog
    var loadingDialog = $("#loading-dialog").dialog({
        modal: true,
        autoOpen: false,
        //width: "500px",
        height: "auto",
        //dialogClass: "no-close",
        closeOnEscape: false,
        show: {
            effect: "fade",
            duration: 500
        }
    });
    var alertDialog = $("#alert-dialog").dialog({
        autoOpen: false,
        modal: true,
        close: function (e) {
            $("#message-dialog").html("");
        }
    });
    var messageDialog = $("#message-dialog").dialog({
        autoOpen: false,
        show: {
            effect: "fade",
            duration: 300
        },
        modal: true,
        close: function (e) {
            $("#message-dialog").html("");
        }
    });
</script>

        <script>
        
    function saveNewAddressBook() {
      
     //var formdata = $("#address_book_add").serialize();
    var customerId = '<?php echo $customers->customer_id;?>';
    var addressContactName= $("input[name='addressContactName']").val();
    var addressCompanyName= $("input[name='addressCompanyName']").val();
    var addressAddress1 = $("input[name='addressAddress1']").val();
    var addressAddress2 = $("input[name='addressAddress2']").val();
    var addressCountry = $("select[name='addressCountry'] option:selected").text();
    var addressCity= $("input[name='addressCity']").val();
    var addressState= $("input[name='addressState']").val();
    var addressPostalCode = $("input[name='addressPostalCode']").val();
    var addressPhone= $("input[name='addressPhone']").val();
    var addressEmail= $("input[name='addressEmail']").val();

    var addressDepartment = $("input[name='addressDepartment']").val();
    var addressFax = $("input[name='addressFax']").val();
    var addressDefaultServiceType = $("select[name='addressDefaultServiceType'] option:selected").text();
    var addressDefaultPackageType = $("select[name='addressDefaultPackageType'] option:selected").text();
    var addressDefaultBillingType = $("select[name='addressDefaultBillingType'] option:selected").text();
    var addressAccountNumber = $("input[name='addressAccountNumber']").val();
    var isResidential = $("input[name='isResidential']").val();
      var isfromsubmit = true;
      var isfromsubmitvalue = true;
      var html='';
      $('#address_book_add input').each(function()
      {

              if($(this).prop('required') && $(this).val()=='')
              {
                    alertDialog.dialog("open");  
                    
                if(!$(this).parent().parent().find('.control-label').attr('data-label'))
                    {
                        html +=$(this).parent().parent().find('.control-label').html()+' cannot be empty <br/>';  
                    }
                    else {
                      html +=$(this).parent().parent().find('.control-label').attr('data-label')+' cannot be empty <br/>';
                    }
                    isfromsubmit = false;
                    alertDialog.html(html);               
              }
             
      });
      if(isfromsubmit==true)
      {
        alertDialog.dialog("close"); 
        $.ajax({
            url: 'customers/add_address_book',
           //url: "<?php //echo base_url('customer/add_address_book');?>",
             type: 'POST',
             //data:formdata,
             data:{customerId:customerId,addressContactName:addressContactName,addressCompanyName:addressCompanyName,addressAddress1:addressAddress1,addressAddress2:addressAddress2,addressCountry:addressCountry,addressCity:addressCity,addressState:addressState,addressPostalCode:addressPostalCode,addressPhone:addressPhone,addressEmail:addressEmail,addressDepartment:addressDepartment,addressFax:addressFax,addressDefaultServiceType:addressDefaultServiceType,addressDefaultPackageType:addressDefaultPackageType,addressDefaultBillingType:addressDefaultBillingType,addressAccountNumber:addressAccountNumber,isResidential:isResidential},
             error: function() {
                alert('Something is wrong');
             },
             success: function(res) {
                //location.reload();
                alert("Address Book added Suucessfully");
                window.location.href = "address_book";
             }
          });
      }
    
  }


  $("input[name='isResidential']").change(function() {
        if(this.checked) {
        $("input[name='isResidential']").val(1);        
        }
        else {
           $("input[name='isResidential']").val(0);        
        }
    });

 /* $("#addressCountryId").on('change', function(){
var text = $("#addressCountryId :selected").text();
var value = $("#addressCountryId").val();
console.log(text); // this will print text
console.log(value); // this will print value
//var plan = $('#plan').val(text); // this will change the value of plan
//$("#plan").attr("value",text); // this will add the value attribute 
//$('#plan').val(text); // this will change the value of plan
//$('#addressCountryId :selected').val(value);
});*/


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