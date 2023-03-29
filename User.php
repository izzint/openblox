<?php
include 'api/private/sqlconn.php';
include 'api/general.php';

session_start();
// disable on production
ini_set('display_errors', 0); 

if (!empty($_GET)) {
  $urlID = htmlspecialchars($_GET["id"]);
}

// If URL has ID parameter (?id=1), select account row with matching ID. If no parameter, redirect to logged-in homepage; if not logged in, go to index file.
if (isset($urlID)) {
  $sql = "SELECT * FROM accounts WHERE id = $urlID";
  $badgeList = getBadges($urlID);
  $viewingAsSelf = false;
} else {
  if ($_SESSION["loggedin"] == false) {
    header('Location: /');
    exit;
  } else {
    $sql = "SELECT * FROM accounts WHERE id = {$_SESSION['currentID']}";
    $badgeList = getBadges($_SESSION['currentID']);
    $viewingAsSelf = true;
  }
}

$result = mysqli_query($conn, $sql);

//AVA.. DO NOT TOUCH THIS!! IF YOU DO, I LOSE EVERYTHING, PLEASE DONT. 9999 lool 88 7yg hhuhi FChicken , Bigmap , 99999 , 999 , 9999 Next we will tka e alook at, 


// theres prolly a better way to do this
if ($result->num_rows === 0) {
  http_response_code(404);
  include('errorPages/404.php');
  die();
} else {
  $row = mysqli_fetch_assoc($result);
  
  $username = $row['username'];
  $is_admin = $row['is_admin'];
  $created_at = $row['created_at'];
  $status = $row['about'];
  $id = $row['id'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="author" content="OPENBLOX">
    <meta name="keywords" content="game, video game, building game, contstruction game, online game, LEGO game, LEGO, MMO, MMORPG, virtual world, avatar chat, blox, roblox, revival, roblox revival, roblox 2009, Roblox">
    <meta name="theme-color" content="#FF0000">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $username . "'s " . "OPENBLOX Home Page";?></title>
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
          <div class="logo">
            <a href="/"><img src="img/roblox.png" alt="ROBLOX Logo" style="width:28%; align-items: center; position:relative; top: 4px;"></a>
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
                <a class="MenuItem" href="http://blog.openblox.lol">News </a><a href="http://blog.openblox.lol/rss.php"><img src="img/feed.png"></a>
              </span>
              <span class="Separator"> | </span>
              <span>
                <a class="MenuItem" href="/Source.php">Downloads</a>
              </span>
          </div>
        </div>
        <div id="Body">
            <div id="ProfilePane" class="FrontPagePanel" style="width: 444px; background-color: #AEC0D9; height: 339px;">
                <div style="position: relative; top: 7px !important;">
                    <center><span class="Title""><?php echo $username?></span></center>
                    <center><h5 style="color: gray; position: relative; top: -20px !important">[ Offline ]</h5>
                    <div style="top: -24px !important; position: relative;">
                        <center><span><?php echo $username . "'s " . 'OPENBLOX:' ?></p></center>
                        <center><a href=<?php echo "/User.php?id=" . $id ?> style="position: relative; top: -14px"><?php echo "openblox.rf.gd/User.php?id=" . $id ?></a></center>
                        <center><span style="position: absolute; left: 175px !important; top: 36px !important;"><?php echo ($viewingAsSelf) ? '<a href="Settings.php">Account Settings</a>' : '' ?></p></span></center>
                    </div>
                    <table width="100">
                    <thead>
                      <tr>
                        <td><img style="margin-left: -150px; " src="/img/placeholderAvatar.png"></td>
                        <td><p style="text-align: center; position: relative; left: 41px !important; top: -44px !important;word-wrap: break-word; width: 100px;""><?php echo $status;?></p></td>
                      </tr>
                    </thead>
                    </table>
                    
                </div>
            </div>
            <div id="UserPlaces" class="FrontPagePanel" style=" width: 444px; relative; left: 10px;">
                <h4 class="userPlacesPlane" style="margin-top: 0px; text-align: center;">Showcase</h4>
                <div class="AccordionHeader" style="margin-top: -23px;">Starter Place</div>
                <div style="display:block;">
                    <div class="Place">
                        <div class="PlayStatus">
                            <span style="display: inline;">
                                <img src="/img/locked.png" alt="Locked" border="0">
                                 Friends-only
                            </span>
                        </div>
                        <div class="PlayOptions">
                            <div style="display:inline">
                                <button class="Button" onclick='alert("does not work yet, lol")'>Visit Online</button>
                                <button class="Button" onclick='alert("does not work yet, lol")'>Visit Solo</button>
                            </div>
                        </div>
                        <div class="Statistics">
                            <span>Visited 0 times (0 last week)</span>
                        </div>
                        <div class="Thumbnail">
                            <a title="Starter Place" href="/Item.php?ID=1" style="display:inline-block;">
                                <img src="/img/placeholder.png" alt="Starter Place" border="0">
                            </a>
                        </div>
                        <div class="Description">
                            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_lDescription">Hello, World!</span>
                        </div>
                </div>
            </div>
      <div id="UserBadgesPane" style="position: relative; top: -40px !important; left: -457px !important;">
        <div id="UserBadges">
          <h4 class="headerText"><a href="Badges.php">Badges</a></h4>
          <table cellspacing="0" border="0" align="Center" style="min-height: 115px;">
            <tbody>
              <tr>
                  <?php echo ($badgeList['admin'] == 1) ? printBadges("Administrator", "Administrator-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['buildersClub'] == 1) ? printBadges("Builders Club", "BuildersClub-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['bricksmith'] == 1) ? printBadges("Bricksmith", "Bricksmith-54x75.jpg", "Test Alt") : null?>
                  <?php echo ($badgeList['combat1'] == 1) ? printBadges("Combat Initiation", "CombatInitiation-75x75.jpg", "Test Alt") : null?>
                  <?php echo ($badgeList['combat2'] == 1) ? printBadges("Warrior", "Warrior-75x75.jpg", "Test Alt") : null?>
                  <?php echo ($badgeList['forumMod'] == 1) ? printBadges("Forum Moderator", "ForumModerator-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['friendship'] == 1) ? printBadges("Friendship", "Friendship-75x75.jpg", "Test Alt") : null?>
                  <?php echo ($badgeList['homestead'] == 1) ? printBadges("Homestead", "Homestead-70x75.jpg", "Test Alt") : null?>
                  <?php echo ($badgeList['imageMod'] == 1) ? printBadges("Image Moderator", "ImageModerator-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['inviter'] == 1) ? printBadges("Inviter", "Inviter-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['veteran'] == 1) ? printBadges("Veteran", "Veteran-75x75.png", "Test Alt") : null?>
                  <?php echo ($badgeList['awesome'] == 1) ? printBadges("Awesome", "Awesome-75x75.png", "Test Alt") : null?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        </div>
        <div id="Footer" class="FrontPagePanel" style="background: transparent;border: transparent;">
              <hr>
              <p class="Legalese">
                OPENBLOX, "Awsom Brick.", characters, logos, names, and all related indicia
                are trademarks of
                <a id="ctl00_rbxFooter_hlRobloxCorporation" href="info/About.aspx">ROBLOX Corporation</a>,
                ©2009. Patents pending.<br>
                OPENBLOX is not affiliated with ROBLOX, Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!<br>
                Based off the Jaunary 2009 version of ROBLOX. 
        </div>  
  </body>
</html>