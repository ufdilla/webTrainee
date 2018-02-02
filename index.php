<!DOCTYPE html>

<?php
include 'dbCon.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Multiple Act</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<!-- <script type="text/javascript" src="script/delete_script.js"></script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 <script src="jquery-3.3.1.min.js"></script>

 <?php
  $data = mysql_query("SELECT * FROM position ");
  $indexins = 0;
  $dataServer = array();
  $rowsData = array();
  while ($rowData = mysql_fetch_assoc($data)) {
    $rowsData[] = $rowData;
  }
?>

 <script>
  var rowsData = <?php echo json_encode($rowsData); ?>;
  var rowsData_arr = rowsData.toString().split(',');

$(document).ready(function(){
  // $("#hapus").click(function(){
  //     $("#addRow").empty();
  // });

  // $("#btnRemove").click(function(){
  //     $("#tdtodel").remove();
  // });

  $("#addRow").click(function(){
      $("#rowValue").append("<tr>"+
      "<td></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='name[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='address[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='positionId[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='groupId[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='status[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='phone[]'></td>"+
      "<td><input class='actbut' type='text' value='' style='width:100%;' name='email[]'></td>"+
      "<td class='table-dark'><a href='#'><bold>x</bold></a></td>"+
      "</tr>");
  });
});
</script>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->
  <section class="hero">
    <div class="container text-center">
      <div class="col-md-12">
        <h1> Welcome </h1>
        <a class="btn btn-full" href="#listData">Get Started</a>
      </div>
    </div>
  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">
    </div>
  </header>
  <!-- #header -->

  <!-- About -->
  <section class="listData" id="listData">
    <div class="container text-center">
       <div class="col-md-12">
         <div oncontextmenu ="event.preventDefault();$('#context-menu').show();$('#context-menu').offset({'top':mouseY,'left':mouseX})">
            <form action="inputData.php" method="POST" id="formtable">
              <table style="margin-left: 20px;margin-right: 20px; " class="table table-hover table-bordered" id="example" class="display" cellspacing="0" width="100%" >
                <thead>
                <tr>
                  <th scope="row"></th>
                  <th scope="row">Nama</th>
                  <th scope="row">Alamat</th>
                  <th scope="row">Posisi</th>
                  <th scope="row">Grup</th>
                  <th scope="row">Status</th>
                  <th scope="row">No. Telp.</th>
                  <th scope="row">Email</th>
                  <th>Remove</th>
                </tr>
                </thead>
                <tbody  id='rowValue'>
                <?php
                $result = mysql_query("SELECT * FROM users order by userId Desc");
                $indexinsert = 0;
                $dServer = array();
                $rows = array();
                while ($row = mysql_fetch_assoc($result)) {
                  $rows[] = $row;
                }
                ?>
                <script type='text/javascript'>
                    var nomor = 1;
                    var rows = <?php echo json_encode($rows); ?>;
                    var rows_arr = rows.toString().split(',');
                    for (var i = 0, nomor = 1; i < rows_arr.length; nomor++, i++) {
                      document.write(
                      "<input class='actbut' type='text' value='" + rows[i]['password'] + "' style='width:100%;' name='passwordExist[]' readonly='true' hidden='true'>",
                      "<input class='actbut' type='text' value='" + rows[i]['photo'] + "' style='width:100%;' name='photoExist[]' readonly='true' hidden='true'>",
                                "<tr id='tdtodel'>"+
                                "<td><input type='text' name='userIdExist[]' value='"+ rows[i]['userId'] +"' hidden></td>",
                                "<td><input class='actbut' type='text' value='" + rows[i]['name'] + "'style='width:100%;'  name='nameExist[]'></td>",
                                "<td><input class='actbut' type='text' value='" + rows[i]['address'] + "'style='width:100%;' name='addressExist[]'></td>",
                                "<td><select name='positionIdExist[]'><option value='" + rows[i]['positionId'] + "'>" + rows[i]['positionId'] + "</option></select></td>",
                                "<td><select name='groupIdExist[]'><option value='" + rows[i]['groupId'] + "'>" + rows[i]['groupId'] + "</option></select></td>",
                                "<td><input class='actbut' type='text' value='" + rows[i]['status'] + "'style='width:100%;' name='statusExist[]'></td>",
                                "<td><input class='actbut' type='text' value='" + rows[i]['phone'] + "'style='width:100%;' name='phoneExist[]'></td>",
                                "<td><input class='actbut' type='text' value='" + rows[i]['email'] + "'style='width:100%;' name='emailExist[]'></td>",
                                "<td class='table-dark'><a href='delete.php?userId=" + rows[i]['userId'] + "'><bold>x</bold></a></td>"
                                +"</tr>");
                    }
                </script>
                </tbody>
              </table>

              <div style="margin-left:10px;" class="btn-group">
                <button  type="button"  class="btn" id="addRow">Add</button>
                <button  type="Submit"  class="btn" id="">Save</button>
                <button class="btn" type="button" onClick="location.reload();" VALUE="Reset">Refresh</button>
              </div>
            </form>
            </div>
			</div>
    </div>
  </section>
  <!-- /About -->

  <!-- Parallax -->
 <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              easySoft Indonesia
            </p>
            <div class="credits">
                <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
            </div>
          </div>
        </div>
      </div>
    </div>
 </footer>

  <a class="scrolltop" href="index.php"><span class="fa fa-angle-up"></span></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

  <?php mysql_close($connector); ?>
</body>
</html>