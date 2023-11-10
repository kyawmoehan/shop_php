<?php
// used to connect to the database
$host = "";
$db_name = "";
$username = "";
$password = "";
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    // sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;";
  
  if ($con->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  }
}
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>