<div class="portlet box">
            <div class="portlet-header">
                <div class="caption w4">
                    Password
                </div>
            </div>
            <div class="portlet-body">
                <form id="frmChangePassword">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert" style="display: none">
                                <i class="fa fa-check fa-fw"></i><span></span>
                            </div>
                            <p style="color: red">
                                <b>Note:</b>
																<br>
																- Password should contain minimum 8 characters, with at least one letter and one number.
                            </p>

                            <div class="form-group">
                                <label class="control-label" for="inputName">Old Password</label> <input name="user.oldPassword" value="" type="password" placeholder="" class="form-control old_pass" data-placement="top" maxlength="25"> <span class="s30"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">New Password</label> <input name="user.newPassword" value="" type="password" placeholder="" class="form-control alloptions old_pass" data-placement="top" maxlength="25"> <span class="s30"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputName">Confirm New</label> <input name="user.confirmPassword" value="" type="password" placeholder="" class="form-control alloptions old_pass" data-placement="top" maxlength="25"> <span class="s30"></span>
                            </div>
                        </div>
                    </div>
                    <div class=" text-right pal pdt10">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn s33 s44" type="button" onclick="doChangePass()">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>