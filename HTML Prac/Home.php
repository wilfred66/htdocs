<html>
    <head>
      <title>Time For Fun</title>


      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <style>
      body {
          padding-top: 70px;
          /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
      }

      .home1{
        background-color: #2db300;
        border-style: soild;
        border: 5px;
        padding: 5px;
            }
      </style>

    </head>

    <body>
        <form>
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="Menubar">

                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                          <span class="sr-only">Home</span>
                      </button>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="icon-bar">Games</span>
                      </button>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="icon-bar">Videos</span>
                      </button>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="icon-bar">Cal</span>
                      </button>

                  </div>
          <h2>Time For Fun</h2>
          <hr><hr>
          <br><br>

          <html>
            <head>
                <meta charset="utf-8">
                  <title>Calculator</title>
            </head>
            <body>
                <form method="post" attribute="post" action="Calculator/cal_disp.php">


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





        </form>
    </body>
</html>
