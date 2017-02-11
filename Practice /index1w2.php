<html>
      <head>
          <title>Practice 1</title>
      </head>
      <body>
          <p>PHP code</p>
      </body>
</html>
<?php
$fruits = ["Apple" , "Banana" , "Grapes" , "Pinapple" , "Mango"];
$flavors =["Sweet" , "Bitter" ,"Sour" , "Salty"];  //Array set up
echo $fruits[3];
echo $flavors[0];
for($i=0; $i<sizeof($fruits);$i++)
{
  echo "position ", $i+1, $fruits[$i], "\n";

}
?>
