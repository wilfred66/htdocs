<html>
    <head>

      <title>Wilfred.submit</title>

    </head>


    <body>
      <?php


      $sports_list = $_POST["sports"];

      $sports_list2 = [];

      foreach ($sports_list as $sports){
        if ($sports) {

          echo "$sports";
          echo "</br>";
          $spots_list2 []= $sports;

        }
        }

          echo "<br>";
          setcookie("sports", implode(",", $sports_list), time() + (86400 * 30), "/");

$gameday = [

    "Basketball" => 7/14/16,
    "Soccer" => 8/16/16,
    "Footbal" => 9/14/16,
];

foreach ($gameday as $sports => $gameday) {
  echo "$sports: \$gameday";
  echo "</br>";
}

      ?>




  </body>





</html>
