<div class="portlet box">
   <section class="content">
      <div class="row">
         <div class="search_customer">
            <div class="form-group flr mgb">
                <table class="s36">
                   <tbody>
                      <tr>
                        <td>Search</td>
                        <td><input id="searchText" name="searchText" class="form-control b20" type="text"></td>
                        <td>
                              <select name="franchiseCode" id="franchiseCode" class="form-control">
                                 <option value="100">100 - AGL Logistics</option>
                                 <option value="101">101 - Gms-test</option>
                              </select>
                        </td>
                        <td>
                            <button class="btn s37" type="button">Search</button>
                        </td>
                        <td id="search-customer-list">
                             <select name="customerCode" id="customerCode" class="form-control" onchange="location = this.options[this.selectedIndex].value;">
                                    <option value="-1">Select a Customer</option>
                                    <option value="add">Add a Customer</option>
                                    <?php foreach($all_users as $row): ?>
				   <?= ($row['is_admin'] != 1)? 'admin': 'member'; ?>
				   <option value="<?= $row['id']; ?>"><?= $row['firstname']; ?></option>
				   <?php endforeach; ?>
				   
                              </select>
                          </td>
                         </tr>
                      </tbody>
                  </table>
              </div>
        
           <!--label name="search" class="search_tab">Search</label><input type="search" name="search" class="search">
                <select name="customers" id="customers">
                   <option value="">Select a customers</option>
                   <option value="">Add a customers</option>
				   <?php foreach($all_users as $row): ?>
				   <?= ($row['is_admin'] != 1)? 'admin': 'member'; ?>
				   <option value="<?= $row['id']; ?>"><?= $row['firstname']; ?></option>
				   <?php endforeach; ?>
				   
                   
                </select-->
        
        </div>
  
 <h2 class="tab_title">Edit Customer</h2>

<div class="tab">
   <button class="tablinks" onclick="openCity(event, 'Account')" id="defaultOpen">Account Setup</button>
   <button class="tablinks" onclick="openCity(event, 'Address')">Address</button>
   <button class="tablinks" onclick="openCity(event, 'Base')">Base Rates</button>
   <button class="tablinks" onclick="openCity(event, 'Markups')">Markups</button>
   <button class="tablinks" onclick="openCity(event, 'Web')">Web Freight</button>
   <button class="tablinks" onclick="openCity(event, 'Notes')">Notes</button>
   <button class="tablinks" onclick="openCity(event, 'History')">History</button>
   <button class="tablinks" onclick="openCity(event, 'Freight')">Web Freight History</button>
</div>

<div id="Account" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Account Setup</h3>
  
</div>

<div id="Address" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Address</h3>
  
</div>

<div id="Base" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Base Rates</h3>
  
</div>
<div id="Markups" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Markups</h3>
  
</div>
<div id="Web" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Web Freight</h3>
  
</div>
<div id="Notes" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Notes</h3>
  
</div>
<div id="History" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>History</h3>
  
</div>
<div id="Freight" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Freight</h3>
  
</div>
<div class="bottom_button">
<input type="button" name="reset" class="reset" value="Reset"></button>
<input type="button" name="save" class="save" value="Save"></button>
</div>
</div>

</section>

</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();


</script>
