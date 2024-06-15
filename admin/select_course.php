<?php
//include auth_session.php file on all user panel pages
// include '../../FYP/login/db.php';

include '../login/admin_auth.php'


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Course</title>
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
        <a class="logout" href="./manage.php">GO BACK</a>
      </button>
      <div class="container">
        <div>
          <h1 class="heading">Select Courses of your prefrences</h1>
        </div>

        <div class="pages">
          <div class="page">
            <button>
              <a href="../uploadvideo/html_upload_index.php">
                <img class="course-png" src="../imgs/html.png" alt="" />
              </a>
            </button>
            <h2>HTML</h2>
          </div>
          <div class="page">
            <button>
              <a href="../uploadvideo/css_upload_index.php">
                <img class="course-png css" src="../imgs/css.png.png" alt="" />
              </a>
            </button>
            <h2>CSS</h2>
          </div>
          <div class="page">
            <button>
              <a href="../uploadvideo/js_upload_index.php">
                <img class="course-png" src="../imgs/js.png" alt="" />
              </a>
            </button>
            <h2>Javscript</h2>
          </div>
          <div class="page">
            <button>
              <a href="../uploadvideo/py_upload_index.php">
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
