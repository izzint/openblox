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
