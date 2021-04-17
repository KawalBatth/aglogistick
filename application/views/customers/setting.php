<div class="portlet box">
            <div class="portlet-header">
                <div class="caption w4">
                  Change a Password
                </div>
                <div class="tools">
                                <i class="fa fa-chevron-up"></i><i class="fa fa-times"></i>
                </div>
            </div>
            <?php if($error = $this->session->flashdata('success_msg')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success!</strong> <?= $error ?>
                </div>
            <?php endif; ?>
            <?php if($error = $this->session->flashdata('error_msg')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?= $error ?>
                </div>
            <?php endif; ?>
           
            <div class="portlet-body">
            <?php echo form_open(base_url('customer/change_password'), 'class="change_password-form" '); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert" style="display: none">
                                <i class="fa fa-check fa-fw"></i><span></span>
                            </div>
                            <p style="color: red">
                                <b>Note:</b> <br> - Password should contain minimum 8 characters, with at least one letter and one number.
                            </p>
<!--pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"-->
                            <div class="form-group">
                                <label class="control-label" for="inputName">Old Password</label> 
                                <input name="oldPassword" value="" type="password" placeholder="Enter the old password" class="form-control old_pass" required="required"> <span class="s30"></span>
                                <?php echo form_error('oldPassword', '<div class="error">', '</div>')?>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">New Password</label>
                                 <input name="newPassword" value="" type="password" placeholder="Enter the new password"  class="form-control alloptions old_pass" id="newPassword" required="required"> <span class="s30"></span>
                                 <?php echo form_error('newPassword', '<div class="error">', '</div>')?>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">Confirm New</label>
                                 <input name="confirmPassword" value="" type="password" required placeholder="Re-enter the new password" class="form-control alloptions old_pass" onkeypress="chkPwd(this)" id="confirmPassword" required="required">
                                 <span id="err"></span>
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

function chkPwd(a)
    {
        var newPwd = document.getElementById('newPassword').value;
        var confirmPwd = document.getElementById('confirmPassword').value;
        if(newPwd != confirmPwd)
        {
            document.getElementById('confirmPassword').focus();
            document.getElementById('confirmPassword').value="";
            document.getElementById('err').innerHTML="Passwords are Not Matching";
        }   
    }

</script>