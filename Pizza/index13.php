<!doctype html>
<html>
<head>
    <title>Speedy Wil</title>
    <style type="text/css">
    .redbox{
          background-color: red }

          body {
            background-color:#ff5c33;
          }
          </style>

</head>
<body>

<div>
  <center><h1>Speedy Wil</h1></center>

  <img src=Speedy_Logo_2012/>
      <!--Start form-->
     <form action="Order Statement.php" method="post">



        <center><input type="text" value="Firstname" name="Firstname" ></center> <!--text box1-->
         <br></br>
        <center><input type="text" value="Lastname" name="Lastname"></center>     <!--text box2-->
         <br></br>
         <center><input type="Address" value="Address" name="Address"></center>   <!--email box-->
         <br></br>
<center>
         <p>Pizza Size</p>
          <!--Drop Meau-->
         <select name= "PizzaSize">
            <option>Select Size</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
            <option>X-Large</option>
         </select>
</center>
         <br></br>
<div>
        <br></br>
         <center>
          <p> Meats </p>
         <input type="checkbox" value="meats"  id= "Pepperoni"name="Pepperoni" >Pepperoni<br>
         <input type="checkbox" value="meats"  id= "Sausage"name="Sausage">Sausage<br>
         <input type="checkbox" value="meats" id= "Salamia"name="Salami">Salami<br>
         <input type="checkbox" value="meats" id= "Beef"name="Beef">Beef<br>
         <input type="checkbox" value="meats" id= "Seasoned Pork" name="Seasoned Pork">Seasoned Pork<br>
         <input type="checkbox" value="meats" id= "Grilled Chickenname"="Grilled Chicken">Grilled Chicken<br>
         <input type="checkbox" value="meats" id= "Applessmoked Bacon"name="Applesmoked Bacon">Applesmoked Bacon<br>
         <input type="checkbox" value="meats" id= "Brown Beef"name="Brown Beef">Brown Beef<br>
         <input type="checkbox" value="meats" id= "Wil Cajuan Chicken"name="Wil Cajuan Chicken">Wil Cajuan Chicken<br>
       </center>
  </div>

         <br></br>
<div>

          <br></br>
          <center>
      <p>Vegatable</p>
         <input type="checkbox" value="Fresh Mushrooms" name="vegatable[]">Fresh Mushrooms<br>
         <input type="checkbox" value="Fresh Spinach" name="vegatable[]">Fresh Spinach<br>
         <input type="checkbox" value="Cherry Peppers" name="vegatable[]">Cherry Peppers<br>
         <input type="checkbox" value="Fresh Red Onions" name="vegatable[]">Fresh Red Onions<br>
         <input type="checkbox" value="Fresh Green Bell Peppers" name="vegatable[]">Fresh Green Bell Peppers<br>
         <input type="checkbox" value="Sliced Bannana Peppers" name="vegatable[]">Sliced Bannana Peppers<br>
         <input type="checkbox" value="Black Olives" name="vegatable[]">Black Olives<br>
         <input type="checkbox" value="Squash" name="vegatable[]">Squash<br>
         <input type="checkbox" value="Fresh Red Peppers" name="vegatable[]">Fresh Red Peppers<br>
         <br></br>
       </center>
</div>
        <br></br>
        <center>
         <select>
           <option>Selct Sauce</option>
           <option>Creamy Mari Sauce</option>
           <option>Alfredo Sauce</option>
           <option>Creamy Garlic Parmesan</option>
           <option>Tomato Sauce</option>
           <option>Speedy Sauce</option>
         </select>
       </center>
       <br></br>
<div>
         <br></br>
          <center>
         <select>
           <option>Select Chesse</option>
           <option>Chesse</option>
           <option>No Chesse</option>
           <option>Wil Chesse</option>
        </select>
          </center>
        <br></br>


</div>
           <br></br>

         <center><input type="submit" value="Submit"></center>


    </form>

</div>
</body>
</html>
