<!DOCTYPE html>
<?php
include 'dbconfig.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <link rel = "stylesheet" type = "text/css" href = "main/js/lib/datatable/jquery.dataTables.min.css">
        <script type="text/javascript" src="main/js/lib/jquery/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="main/js/lib/datatable/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="main/js/lib/datatable/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="main/css/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="main/css/rightclick.css">
        <link rel="stylesheet" href="main/css/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="main/css/formresmi.css">
        <link rel="stylesheet" href="main/css/table.css">
        <script src="main/js/formresmi.js" ></script>
        <script src="main/js/rightclick_1.js" ></script>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="index.html" class="logo">AWAL MUHIB HALIM</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
			  <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
			  <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-sign-out fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
			  <li ><form role="form"><input type="date" class="form-control input-lg" id="search" placeholder="Search..."></form>
			  </li>
            </ul>
          </div>
        </nav>
      </header>
	  
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/awal.PNG" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p>AWAL MH</p>
              <p class="designation">PROGRAMMER</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Main Table</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="main_table.html"><i class="fa fa-circle-o"></i> Table 1</a></li>
                <li><a href="table.html"><i class="fa fa-circle-o"></i> Table 2</a></li>
              </ul>
            </li>
		<!--
            <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Form Componants</a></li>
                <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Componants</a></li>
                <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>MultiLavel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
	-->
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Purcasing</h1>
            <p>Order List</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Sample Forms</a></li>
            </ul>
          </div>
        </div>
                <?php
                $sql_query = "SELECT * FROM infocust";
                $result_set = mysql_query($sql_query);
                $row = mysql_fetch_array($result_set);
                ?>
                  
            <div class="col-md-12">
                <!--
				<div class="loader"></div>
                <ul style="margin-left:-30px;">
                    <li style = "margin-left: 0px; margin-right: 20px; margin-bottom: 20px; border-bottom: solid black"></li>
                </ul>
				-->
                            <form action="inserttable.php" method="post" id="formtable">
                <div oncontextmenu ="event.preventDefault();$('#context-menu').show();$('#context-menu').offset({'top':mouseY,'left':mouseX})">
                    <table style="margin-left: 20px;margin-right: 20px; " class="table table-hover table-bordered" id="example" class="display" cellspacing="0" width="100%" >
                        <thead>
                            <tr>
                                <th class="thcek" style="color:black; background-color: white;text-align:center">&nbsp;</th>
                                <th style="color:black; background-color: white;text-align:center">No</th>
                                <th style="color:black; background-color: white;text-align:center">Code Transaction</th>
                                <th style="color:black; background-color: white;text-align:center">Transaction Name</th>
                                <th style="color:black; background-color: white;text-align:center">Customer Name</th>
                                <th style="color:black; background-color: white;text-align:center">Date</th>
                                <th style="color:black; background-color: white;text-align:center">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysql_query("SELECT * FROM infocust ");
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
                                document.write("<tr ><td class='tdcek'><input type='checkbox' class='actionButton' name='cek[] id='cek[]'  value='" + rows[i]['id'] + "'  /></td>",
                                        "<td style='width:30px;'><input class='actbut' type='text' value ='" + nomor + "' style='width:100%;' readonly/></td>",
                                        "<td><input class='actbut' type='text' value='" + rows[i]['codetransaction'] + "' style='width:100%;' name='codetransactions[]' readonly></td>",
                                        "<td><input class='actbut' type='text' value='" + rows[i]['transactionname'] + "'style='width:100%;'  name='transactionnames[]'></td>",
                                        "<td><input class='actbut' type='text' value='" + rows[i]['customername'] + "'style='width:100%;' name='customernames[]'></td>",
                                        "<td><input class='actbut' type='date' value='" + rows[i]['datetransaction'] + "'style='width:100%;' name='datetransactions[]'></td>",
                                        "<td><input class='actbut' type='text' value='" + rows[i]['address'] + "'style='width:100%;' name='addresss[]'></td></tr>");
                            }
                        </script>
                        </tbody>
                    </table>
                    <div style="margin-left:10px;" class="btn-group">
                        <button type="button" class="btn btn-link" id="tambahRow"><img src="main/img/icon/create.jpg" style="height:50px; width: 50px" /><br/></button>
                        <button type="button" class="btn btn-link" id="hapus"><img src="main/img/icon/del.png" style="height:50px;width: 50px" /><br/></button>
                        <button type="button" class="btn btn-link" id="update2"><img src="main/img/icon/save.png" style="height:50px;width: 50px" /><br/></button>
                        <button type="button" class="btn btn-link" onclick="aprint2();"><img src="main/img/icon/preview.png" style="height:50px;width: 50px" /><br/></button>
                        <button class="btn btn-link" TYPE="button" onClick="history.go(0)" VALUE="Reset" style=" border: none; background: transparent;"><img src="main/img/icon/roll.png" style="width: 50px; height: 50px"></br></button>
                    </div>
                </div>
            </form>
			</div>
			  <div class="context-menu"  id="context-menu" style="display:none;position: relative;z-index:99">
            <ul>
                <li><a tabindex="-1" href="" class="viewLink"><i class="fa fa-eye"></i> Lihat</a></li>       
<!--                <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>       
                <li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>       
                <li><a href="#"><i class="fa fa-share fa-fw"></i> Move</a></li>       
                <li><a href="#"><i class="fa fa-files-o"></i> Copy</a></li>       -->
            </ul>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  
	 <?php mysql_close($connector); ?> 
  </body>
  
</html>