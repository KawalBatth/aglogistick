<head>
  <title>Code Table</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <fieldset>
    <input id="searchBox" placeholder="Paste the list HERE" type="search">

    <button type="button" id="Search">Search</button>
    <br><br>
    <input type="checkbox" class="theader" name="theader1" checked="checked"> CODE
    <input type="checkbox" class="theader" name="theader2" checked="checked"> DIVISION
    <input type="checkbox" class="theader" name="theader3" checked="checked"> PROVINCE
    <input type="checkbox" class="theader" name="theader4" checked="checked"> NAME

  </fieldset>
  <br>
  <table border="1px" id="data">
    <thead>
      <tr>
        <th id="theader1" class="theader1">CODE</th>
        <th id="theader2" class="theader2">DIVISION</th>
        <th id="theader3" class="theader3">PROVINCE</th>
        <th id="theader4" class="theader4">NAME</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  var datab, datac, datad;
$("#Search").click(function() {
  $("tbody").empty();

  var searchIds = new Set($('#searchBox').val().split(/[ ,\r\n]+/).map(s => s.trim()));

  searchIds.forEach(CODE => {

    var theader = [`<td class="theader1">${CODE}</td>`, `<td class="theader2">${datab[CODE]}</td>`, `<td class="theader3" >${datac[CODE]}</td>`, `<td class="theader4">${datad[CODE]}</td>`];
    $("tbody").append('<tr></tr>');
    $('.theader').each(function(idx) {

      if ($(this).is(':checked')) {
        $("tbody tr:last").append(`${theader[idx]}`);
      }
    });
  });
});


function getdata() {
  fetch("https://api.myjson.com/bins/f2nos").then(resp => resp.json()).then(resp => {
    datab = Object.assign({}, ...resp.features.map(
      ({
        properties: {
          CODE,
          DIVISION
        }
      }) => ({
        [CODE]: DIVISION
      })));
    datac = Object.assign({}, ...resp.features.map(
      ({
        properties: {
          CODE,
          PROVINCE
        }
      }) => ({
        [CODE]: PROVINCE
      })));
    datad = Object.assign({}, ...resp.features.map(
      ({
        properties: {
          CODE,
          NAME
        }
      }) => ({
        [CODE]: NAME
      })));
  });
}

getdata();

/*Checkbox To Table Head*/
$(".theader:not(:checked)").each(function() {
  var column = "table ." + $(this).attr("name");
  $(column).hide();
});

$(".theader").click(function() {
  var column = "table ." + $(this).attr("name");
  $(column).toggle();
});
</script>