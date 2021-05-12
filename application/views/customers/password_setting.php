<div class="portlet box">
            <div class="portlet-header">
                <div class="caption w4">
                  Change a Password
                </div>
                <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                </div>
            </div>
          
          
           
            <div class="portlet-body">
            <?php echo form_open(base_url('customer/change_password'), 'class="change_password-form" '); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert" style="display: none">
                                <i class="fa fa-check fa-fw"></i><span></span>
                            </div>
                            <p class="note">
                                <b>Note:</b> <br> - Password should contain minimum 8 characters, with at least one letter and one number.
                            </p>
<!--pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"-->
                            <div class="form-group">
                                <label class="control-label" for="inputName">Old Password</label> 
                                <input name="oldPassword" value="" type="password" placeholder="Enter the old password" class="form-control old_pass" required> <span class="s30"></span>
                                <?php echo form_error('oldPassword', '<div class="error">', '</div>')?>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">New Password</label>
                                 <input name="newPassword" value="" pattern="^(?=(.*[a-z]){3,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$" type="password" placeholder="Enter the new password"  class="form-control alloptions old_pass" id="newPassword" required> <span class="s30"></span>
                                 <?php echo form_error('newPassword', '<div class="error">', '</div>')?>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">Confirm New</label>
                                 <input name="confirmPassword" pattern="^(?=(.*[a-z]){3,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$" type="password" required placeholder="Re-enter the new password" class="form-control alloptions old_pass" id="confirmPassword" required>
                                 <span id="message"></span>
                            </div>
                        </div>
                    </div>
                    <div class=" text-right pal pdt10">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn s33 s44 save" type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>

// To disappear a Falsh message
var timeout = 2000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);


$(document).ready(function() {
  $("#confirmPassword").keyup(validate);
 // $("#newPassword").keyup(validate);
});


function validate() {
  var password1 = $("#newPassword").val();
  var password2 = $("#confirmPassword").val();

    if(password1 == password2) {
       document.getElementById('message').style.color = 'green';
       document.getElementById('message').innerHTML = 'Passwords Matching';        
    }
    else { 
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Passwords not matching';
    }
    
}
</script>