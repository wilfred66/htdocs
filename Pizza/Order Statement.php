<html>
<head>
  <title>Order Statement</title>
</head>
<body>
  <h1>Order Results</h1>
  <form action="index.php" method="get">
<p>Your order </p>
  <?php

      $Firstname = $_POST['Firstname'];
       $Lastname = $_POST['Lastname'];
       $Address = $_POST['Address'];



if( $_POST['Firstname'] || $_POST['Lastname'] ) {
   echo "Welcome ". $_POST['Firstname'] || $_POST['Lastname']. "<br />";
   echo "You ordered". $_POST['Lastname']. " with.". "<br/>";
 }
 if( $_POST['Address']){
   echo "The address for this order is". $_POST['Address']."<br/>";
 }
 

?>
</body>
</html>
