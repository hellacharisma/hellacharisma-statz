<html>
<head>
</head>

<body>
<h1>Hello world</h1>

  <?php

  $host = "us-cdbr-east-02.cleardb.com";
  $username = "b2d27009ffc4be";
  $password = "d1c00c7a";
  $database = "heroku_8af758a5bfbbeef";

  $mysqli = new mysqli($host, $username, $password, $database);
  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  echo $mysqli->host_info . "\n";
  
  ?>
  
</body>

</html>
