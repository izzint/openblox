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
          <a href="/index.php"><img src="img/roblox.png" alt="ROBLOX Logo" style="width:28%; align-items: center; position:relative; top: 4px;"></a>
          </div>
          <div class="navbar">
            <span>
                <a class="MenuItem" href="/User.php">My OPENBLOX</a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Games.php">Games</a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Catalog.php">Catalog</a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Browse.php">People</a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Forum.php">Forum</a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Blog">News </a><a href="/blog/rcc.php"><img src="img/icons/silk/feed.png"></a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Source.php">Downloads</a>
              </span>
          </div>
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
        <div id="Footer" class="FrontPagePanel" style="background: transparent;border: transparent;">
              <hr>
              <p class="Legalese">
                OPENBLOX, "Awsom Brick.", characters, logos, names, and all related indicia
                are trademarks of
                <a id="ctl00_rbxFooter_hlRobloxCorporation" href="info/About.aspx">ROBLOX Corporation</a>,
                ©2009. Patents pending.<br>
                OPENBLOX is not affiliated with ROBLOX, Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!<br>
                Use of this site signifies your acceptance of the
                <a id="ctl00_rbxFooter_hlTermsOfService" href="info/TermsOfService.aspx">Terms and Conditions</a>.<br>
                <a id="ctl00_rbxFooter_hlPrivacyPolicy" href="info/Privacy.aspx">Privacy Policy</a>
                &nbsp;|&nbsp; <a href="https://web.archive.org/web/20080603131404/mailto:info@roblox.com">Contact Us</a> &nbsp;|&nbsp;
                <a id="ctl00_rbxFooter_hlAboutRoblox" href="info/About.aspx">About Us</a>
                &nbsp;|&nbsp;
                <a id="ctl00_rbxFooter_HyperLink1" href="info/Jobs.aspx">Jobs</a></p>
          </div> 
      </div>
  </body>
</html>