
<?php
//include auth_session.php file on all user panel pages
include 'db.php';
include("auth_session.php");



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
      <button class="btn-log ch-pw">
        <a class="logout" href="update_pw.php">Change Password</a>
      </button>
      <button class="btn-log">
        <a class="logout" href="logout.php">Log out</a>
      </button>
      <div class="container">
        <div>
          <h1 class="heading">Let's Start your learning journey</h1>
        </div>

        <div class="pages">
          <div class="page">
            <button>
              <a href="../courses/select_course.php">
                <ion-icon class="logos" name="code-slash"></ion-icon>
              </a>
            </button>
            <h2>Courses</h2>
          </div>
          <div class="page">
            <button>
              <a href="../Course Videos/select_vid_course.php">
                <ion-icon class="logos" name="desktop"></ion-icon>
              </a>
            </button>
            <h2>Video Tutorials</h2>
          </div>
          <div class="page">
            <button>
              <a href="../Quiz/select_quiz.php">
                <ion-icon class="logos" name="create"></ion-icon>
              </a>
            </button>
            <h2>Test</h2>
          </div>
          <div class="page">
            <button>
              <a href="../notes/notes_user.php">
              <ion-icon class="logos" name="document"></ion-icon>
              </a>
            </button>
            <h2>NOTES</h2>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
