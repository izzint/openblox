<?php
// you're not supposed to be here. In fact, you're not. Go back where you belong, and forget all about this. 
function permCheck($level) {
    if ($level == 1) {
        if ($_SESSION["loggedin"] == false) {
            header('Location: /');
            exit;
        }
    }
    //TODO: write admin check
}

// get the users badges from the database "badge".
function getBadges($InputID) {
    include 'api/private/sqlconn.php';

    $getBadgeSQL = "SELECT * FROM badge WHERE id = $InputID";
    $badgeResult = mysqli_query($conn, $getBadgeSQL);

    $badgeRow = mysqli_fetch_assoc($badgeResult);
    return $badgeRow;
}

// print the users badges on the page. (is there a better way to do this?)
function printBadges($BadgeName, $BadgeImage, $BadgeDescription) {
    $badgeOut = <<<EOT
    <td>
        <div class="Badge">
        <div class="BadgeImage">
            <a href="Badges.php">
            <img src="/img/badges/$BadgeImage" alt="$BadgeDescription" height="75" border="0">
            </a>
        </div>
        <div class="BadgeLabel">
            <a href="Badges.php">$BadgeName</a>
        </div>
        </div>
    </td>
    EOT;

    echo $badgeOut;
}