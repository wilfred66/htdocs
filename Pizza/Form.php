<html>

  <head>
<title></title>
        <style type="text/css">
            .bluebox{
                background-color:blue;
                width:500px;
                height:200px;
                float:right;
                border-style: solid;
                border-width: 5px;
                margin: 100px 150px 100px 80px;
                position:relative;
                    }
           </style>

  </head>

    <body>
        <div>
          <h1>Hello World</h1>
          <p>Im Wilfred</p>

          <hr></hr>


          <hr></hr>

          <!--This is a unorder list-->
          <ul>
            <li> Strawberry</li>
            <li> Mint Chcolate</li>
            <li>Fun</li>
          </ul>

          <!--Order List-->
          <ol>
            <li>Apple</li>
            <li>LG</li>
            <li>Sony</li>
          </ol>

          <hr></hr>

          <!-- This button-->
          <p> Submit down below </p>
          <input type="submit" value="click">

          <!--Img Import-->


    </div>
  <p>
  <?php

      $hello = "Hello";
      $world = "World";
      echo $hello . $world;
      //helloworld
    ?>
</p>
<p>
     <?php

      echo "Wilfred or Fred ";
      $Firstname = "Wilfred"; //Variable is a $ sign
      $Lastname = "Powell"; // example
      echo $Firstname + $Lastname;// to display a variable you need to echo it

      ?>
</p>
<p>
  <?php
  $array = ["Apple" , "Banana" , "Grapes" , "Pinapple" , "Mango"],;  //Array set up
  echo $array[3];
  for ($i=0;$i<sizeof($array); $i++){
    echo $i 

  }

?>
    </p>
    <p>
      <?php
        $bars = ["Level 1" , "Level 2" , "Level 3" , "Level 4"];
        echo $bars[0];
      ?>
    </p>
  </body>
</html>
