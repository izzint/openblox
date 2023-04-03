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
    <meta name="description" content="Free Games at openblox.lol">
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
            <?php include "Header.php" ?>
        </div>
        <div id="Body">
          <div class="FrontPagePanel" id="SignInPane" style="font: normal 8pt/normal 'Comic Sans MS',Verdana,sans-serif; height: 194px;">
            <div id="LoginViewContainer">
              <div id="LoginView">            
                <h5 style="letter-spacing: 1px; padding: 5px 5px 5px 5px;">Member Login</h5>
                <div class="login">
                  <form method="POST" action="/Account/register.php">
                    <div class="username">
                      <p class="label" style="margin-bottom: 7px;">Character Name</p>
                      <input type="text" name="username" style="width: 129px;">
                    </div>
                    <div class="password">
                      <p class="label" style="margin-bottom: 7px;">Password</p>
                      <input type="password" name="password" style="width: 129px;">
                    </div>
                    <div class="LoginButtonMain">
                      <button type="submit" name="login">Login</button>
                      <br>
                      <br>
                      <button type="submit" name="register">Register</button>
                      <p style="color: gray; line-height: 0.5px;font-family: Verdana;font-size: 9px;">Forgot your Password?</p>
                    </div> 
                </div>
              </div>
            </div>
          </div>
          <div id="ProfilePane" class="FrontPagePanel" style="position: relative; left: 10px; display: block; width: 738px; height: 339px; background-color: #eee;">
                <div style="position: relative; top: -5px !important; left: 13px !important; font-family: Comic Sans MS;">
                    <h1>OPENBLOX Virtual Playworld</h1>
                    <h3 style="line-height: 2px;">Thanks for Trying Openblox!</h3>
                    <br>
                    <p>Currently, you can:</p>
                    <ul style="line-height: 5px;">
                      <h5>
                        <li>Register an account</li>
                        <li>View other people's profiles</li>
                        <li>Check up on our (unfinished) forum</li>
                        <li>Read the latest news on the blog</li>
                      </h5>
                    </ul>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h4 style="border-bottom: solid black 1px;">More things coming soon!</h4>
        </div>
        <?php include "Footer.html" ?>
      </div>
  </body>
</html>