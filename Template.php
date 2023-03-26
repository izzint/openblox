<!DOCTYPE html>
<?php
  // Page Setup
  ini_set('display_errors', 0); 
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="author" content="OPENBLOX">
    <meta name="keywords" content="game, video game, building game, contstruction game, online game, LEGO game, LEGO, MMO, MMORPG, virtual world, avatar chat, blox, roblox, revival, roblox revival, roblox 2009, Roblox">
    <meta name="theme-color" content="#FF0000">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OPENBLOX: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics</title>
    <meta name="description" content="Free Games at openblox.xyz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="ROBLOXicon" type="image/x-icon" href="favicon.ico?">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="master">
      <div class="container">
        <div class="navbox">
        <div class="accountcontrol">
          <?php
            if ($_SESSION["loggedin"] == true) {
              echo "Logged In as " . $_SESSION["username"] . '<a href=/Account/logout.php style="color: white; text-decoration: none;"> | Logout</a>';
              
            } else {
              echo '<a href=/ style="color: white; text-decoration: none;">Login</a>';
            }
          ?>
        </div>
          <div class="logo">
            <img src="img/roblox.png" alt="ROBLOX Logo" style="width:28%; align-items: center; position:relative; top: 4px;">
          </div>
          <div class="navbar">
            <p>My OPENBLOX | Games | Catalog | People | Builders Club | Forum | News | Parents | Help</p>
          </div>
        </div>
        <div id="Body">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>