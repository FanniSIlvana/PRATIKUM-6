<html>
<head>
  <title>Koneksi Database MySQL</title>
</head>
<body>
  <h1>Demo Koneksi Database MySQL</h1>
  <?php
  $con = mysqli_connect("localhost","root","my_db");

  //check connenction
  if (mysqli_connect_errno()){
    echo "Koneksi MySQL Gagal :".mysqli_connect_error();
    exit();
  }
  ?>
</body>
</html>
