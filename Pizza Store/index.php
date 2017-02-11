<html>
    <head>
        <title>Owner View Orders</title>
    </head>

    <body>
      <?php require 'DB/Connect.php' ?>

      <?php
        $query = "select * from orders";

        if ($result = $db->query($query)) {
          if ($count = $result->num_rows) {
            while ($row = $result->fetch_object()) {
              echo "$row->custName $row->address $row->phone<br>";
            }
          }
        }
       ?>

      <h1>View Orders</h1>

      <h4 style="font-style:italics">Pending Orders: <?php echo "<span style='font-style: bold'>$count</span>"; ?></h4>

      <hr>



    </body>



</html>
