
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aplikasi Sederhana Apotek</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
    
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><B>A</B></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="obat.php">Obat</a></li>
              <li><a href="pegawai.php">Pegawai</a></li>
              <li><a href="transaksi.php">Transaksi</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <?php require_once 'koneksi.php';
                $id = $_SESSION['admin']; 
                $admin = mysqli_query($koneksi, "select * from admin where id ='$id'");
                while($u = mysqli_fetch_assoc($admin)) {
                     
                  ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hai <?php echo $u['username'] ?> <span class="caret"></span></a>
              <?php } ?>
                <ul class="dropdown-menu">
                  <li><a href="edit_user.php?id=<?php echo $id ?>">Edit Login</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
               </li>	
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
