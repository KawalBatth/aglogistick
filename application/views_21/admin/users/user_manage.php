<div class="portlet box">
                        <div class="portlet-header">
                            <div class="col-lg-4" style="margin-left: 0px !important; padding-left: 0px !important">
                                <table class="s36">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="caption">
                                                System Users
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>The users below can login to REMS</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4 flr">
                                <div class="form-group flr mgb">
                                    <table class="s36">
                                        <tbody>
                                        <tr>
                                            <td>Double-click the entry to modify its value</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="portlet-body">
                                <input type="hidden" name="userId" value="" id="userId">
                                <form id="search-form" style="margin-bottom: 15px !important">
                                    <table class="s36">
                                        <tbody>
                                        <tr>
                                            <td>Customer # :</td>
                                            <td><input type="text" name="userCode" value="" id="userCode" class="form-control"></td>
                                            <td>Admin Level :</td>
                                            <td><select name="userLevelId" id="userLevelId" class="form-control">
    <option value=""></option>
    <option value="1">1.0 - Corporate Super Admin</option>
    <option value="2">2.0 - Corporate Admin</option>
    <option value="3">3.0 - Franchise/Group Owner or Agent</option>
    <option value="4">4.0 - Accounting</option>
    <option value="8">5.0 - Sales Manager</option>
    <option value="11">6.0 - Sales Rep</option>
    <option value="9">7.0 - Telemarketer</option>
    <option value="6">10.0 - Carrier (e.g. DHL) Login</option>
    <option value="7">11.0 - Carriers Services Failures</option>


</select>

</td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <button class="btn s37" type="button" onclick="search()">
                                                    Go
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <table class="table mg0">
                                    <tbody><tr>
                                        <th class="s42">Show <select name="pageSize" id="pageSize" style="height:22px; padding-top:1px;" onchange="search()">
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>


</select>


                                            entries</th>
                                    </tr>
                                </tbody></table>
                                <div id="user-list-result">
                                    <input type="hidden" name="page" value="" id="page">
                                    <input type="hidden" name="orderField" value="user_code" id="orderField">
                                    <input type="hidden" name="orderType" value="0" id="orderType">
                                    <table class="table table-hover table-bordered mg0" id="user_list_table">
                                        <thead>
                                        <tr>
                                            <th sort-field="user_code" style="cursor: pointer;">Customer # <i class="fa fa-sort-up"></i></th>
                                            <th sort-field="user_name" style="cursor: pointer;">User Name <i class="fa fa-sort"></i></th>
                                            <th>Password</th>
                                            <th sort-field="user_level_code" style="cursor: pointer;">Admin Level <i class="fa fa-sort"></i></th>
                                            <th sort-field="iscollector" style="cursor: pointer;">Is Collector? <i class="fa fa-sort"></i></th>
                                            <th sort-field="isrequirechangepassword" style="cursor: pointer;">Force Password Change <i class="fa fa-sort"></i></th>
                                            <th sort-field="last_change" style="cursor: pointer;">Last Changed <i class="fa fa-sort"></i></th>
                                            <th sort-field="display_name" style="cursor: pointer;">Display Name <i class="fa fa-sort"></i></th>
                                            <th sort-field="email" style="cursor: pointer;">Email Address <i class="fa fa-sort"></i></th>
                                            <th sort-field="phone" style="cursor: pointer;">Phone <i class="fa fa-sort"></i></th>
                                            <th sort-field="fax" style="cursor: pointer;">Fax <i class="fa fa-sort"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                            
                                                <tr uid="1" ondblclick="loadUserDialog('1')" style="cursor: pointer">
                                                    <td>100</td>
                                                    <td>admin</td>
                                                    <td>Admin@123</td>
                                                    <td>1</td>
                                                    <td><input type="checkbox" disabled="disabled"></td>
                                                    <td><input type="checkbox" disabled="disabled"></td>
                                                    <td>12-07-2019 12:10:26</td>
                                                    <td>AGL</td>
                                                    <td>agl.australia@gms-group.com</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            
                                                <tr uid="395" ondblclick="loadUserDialog('395')" style="cursor: pointer">
                                                    <td>100</td>
                                                    <td>Lynne</td>
                                                    <td>Andrea01</td>
                                                    <td>6</td>
                                                    <td><input type="checkbox" disabled="disabled"></td>
                                                    <td><input type="checkbox" disabled="disabled"></td>
                                                    <td>20-04-2018 15:07:12</td>
                                                    <td>Lynne</td>
                                                    <td>cs@agllogistics.com</td>
                                                    <td>0894793399</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    <div class="dataTables_paginate records">
                                        <div class="row">
                                            <div class="col-xs-4 text-left">
                                                <b>Showing 1 to
                                                    12 of
                                                    12</b>
                                            </div>
                                            <div class="col-xs-8">
                                                
                                                    <a class="paginate_button previous disabled">Previous</a>
                                                
                                                
												<span> 
                                                    
                                                        <a class="paginate_button current">1</a>
                                                    
                                                    
                                                
												</span>
                                                
                                                    <a class="paginate_button next" href="#">Next</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 5px">
                                    <table>
                                        <tbody><tr>
                                            <td>
                                                <button class="btn s37" type="button">
                                                    Assign Territory
                                                </button>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <button class="btn s37" type="button" onclick="loadUserDialog('')">
                                                    Add New User
                                                </button>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            
                                                <td>
                                                    <button id="btnDeleteUser" class="btn s37" type="button" onclick="deleteUser()" disabled="disabled">
                                                        Delete User
                                                    </button>
                                                </td>
                                            
                                        </tr>
                                    </tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>

  <!--script>
  $(document).ready(function() {
    $('#user_list').DataTable();
} );
</script-->