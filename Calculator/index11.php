<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
        <title>Calculator</title>
  </head>
  <body>
      <form method="post" attribute="post" action="cal_disp.php">
          <h2>Freddy Cal</h2>

        <br></br>
          <p>First Value:<br/>

          <input type="text" id="first" name="first"></p>

          <p>Second Value:<br/>
            <input type="text" id="second" name="second"></p>
            <input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
            <input type="radio" name="group1" id="subtract" value="subtract"><p>-</p><br/>
            <input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
            <input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
          <p></p>
            <button type="submit" name="answer" id="answer" value="answer">Calculate</button>

      </form>
    </body>
</html>
