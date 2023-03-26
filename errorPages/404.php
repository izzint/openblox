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
    <title>OPENBLOX | Missing Item</title>
    <meta name="description" content="Free Games at openblox.xyz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="ROBLOXicon" type="image/x-icon" href="favicon.ico?">
    <link rel="stylesheet" href="/css/style.css">
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
          <a href="/index.php"><img src="/img/roblox.png" alt="ROBLOX Logo" style="width:28%; align-items: center; position:relative; top: 4px;"></a>
          </div>
        </div>
        <center><strong><h2 style="padding: 50px; position: relative; top: 50px; width: 50%; font-family:'Comic Sans MS',Verdana,sans-serif; margin: auto;">The item you requested does not exist</h2></strong></center>
        <div id="Body">
            

            
                  
                </div>
                <div id="Footer" class="FrontPagePanel" style="background: transparent;border: transparent; align-items: center;">
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
            </div>
          </div>
        </div>
          </div> 
      </div>
  </body>
</html>