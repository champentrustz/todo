<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo-list</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
              <div class="col-xs-6 col-md-4">
                <img src="https://www.img.in.th/images/6938cd659f60409e272fbb27d8bef7f7.png" width="60" height="60">
              </div>
              <div class="col-xs-6 col-md-8">
    <h3>Todo-list<h3>
  </div>
  <div class="top-right links">
    <a href="{{ url('/login')}}">Login</a>
    <a href="{{ url('/register')}}">Register</a>
  </div>
    </div>
  </div>
  </nav>



            <div class="content">
              <div class="col-xs-12">



                <div class="col-sm-12">
                  <div class="panel panel-default">
                  <div class="panel-body">

                  <div class="col-sm-3">

                  </div>

                    <div class="col-sm-3">


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                  <h4>Start getting more done in less time,
                    manage tasks and projects anywhere with Todo-list. At home. At school. At work. Online. Offline.</h4>


                  </div>


                  <div class="col-sm-3">

                    <img src="https://www.img.in.th/images/e3a558f4bcc7a011c86c868d9a7f6232.png" width="500" height="400">

                  </div>

                  <div class="col-sm-3">
                    </div>

            </div>
            </div>
            </div>


                <div class="col-md-6 col-md-offset-3">
                  <br>
                  <br>
                  <br>

                    <div class="panel panel-default">
                    <div class="panel-body">
                  <img src="https://www.img.in.th/images/92ce68b09c01e62789d48aad48f47801.png"  width="70" height="70">
              <h4>List your many works in Todolist for reminder you to do it.
                Planning a holiday, sharing a shopping list with a partner or managing multiple work projects,
                Todolist is here to help you tick off all your personal and professional to-dos.</h4>
                  </div>
                  </div>
                  </div>



                  <div class="col-md-6 col-md-offset-3">

                      <div class="panel panel-default">
                      <div class="panel-body">

                      <img src="https://www.img.in.th/images/fd544f57a4ab4913f6fdba15412028cf.png"  width="70" height="70">
                    <h4>Organize and share your to-do, work, grocery, movies and household lists.
                      No matter what you’re planning, how big or small the task may be,
                      Todolist makes it super easy to get stuff done.                  </h4>
                </div>
              </div>
              </div>

              <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="https://www.img.in.th/images/aafa42f0bd201551aaa0de290eb7455b.png"  width="70" height="70">
                    <h4>Plan your to-do in each category for easy to search and reminder you to do.
                      When you select category such as work it will show about some works that you plan.</h4>

          </div>
        </div>
        </div>


                <div class="col-xs-6 col-md-12">
                  </div>
                    <div class="col-xs-6 col-md-12">

                      <a href="{{ url('/login')}}"><img src="https://www.img.in.th/images/62c9b677c0f3c0040e2d65d7f23bb959.png"></a>




                    </div>
                    <div class="col-xs-6 col-md-12">
                      </div>
                        <div class="col-xs-6 col-md-12">
                        <img src="https://www.img.in.th/images/75c1b83b79f160487b2c951324668883.jpg">
                      </div>


            </div>
          </div>



    </body>

</html>
