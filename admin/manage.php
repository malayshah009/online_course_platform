
<?php
include '../login/admin_auth.php'

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
        <!-- <a class="logout" href="../login/dashboard.php">dashbord</a> -->
        <a class="logout" href="./logout_admin.php">LOG OUT</a>
      </button>

      <div class="container">
        <div>
          <h1 class="heading">Which one do you want to manage</h1>
        </div>

        <div class="pages">
          <div class="page">
            <button>
              <a href="./select_course.php">
                <ion-icon class="logos" name="desktop"></ion-icon>
              </a>
            </button>
            <h2>Manage Video Tutorials</h2>
          </div>
          
          <div class="page">
            <button>
              <a href="../notes/notes_upload_index.php">
              <ion-icon class="logos" name="document"></ion-icon>
              </a>
            </button>
            <h2>Manage NOTES</h2>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
