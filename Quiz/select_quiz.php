<?php
//include auth_session.php file on all user panel pages
include '../../FYP/login/db.php';
include("auth_course.php");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="dashbord.css" />
  </head>
  <body>
    <main class="main">
      <button class="btn-log">
        <a class="logout" href="../login/dashboard.php">dashbord</a>
      </button>
      <div class="container">
        <div>
          <h1 class="heading">Choose the Quiz of your prefrence  </h1>
        </div>

        <div class="pages">
          <div class="page">
            <button>
              <a href="./HTML QUIZ/html.php">
                <img class="course-png" src="../imgs/html.png" alt="" />
              </a>
            </button>
            <h2>HTML</h2>
          </div>
          <div class="page">
            <button>
              <a href="./CSS QUIZ/css.php">
                <img class="course-png css" src="../imgs/css.png.png" alt="" />
              </a>
            </button>
            <h2>CSS</h2>
          </div>
          <div class="page">
            <button>
              <a href="./JAVASCRIPT QUIZ/js.php">
                <img class="course-png" src="../imgs/js.png" alt="" />
              </a>
            </button>
            <h2>Javscript</h2>
          </div>
          <div class="page">
            <button>
              <a href="./PYTHON QUIZ/python.php">
                <img class="course-png" src="../imgs/python.png" alt="" />
              </a>
            </button>
            <h2>python</h2>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
