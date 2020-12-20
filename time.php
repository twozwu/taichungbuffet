<?php
(!isset($_SESSION)) ? session_start() : "";
if (isset($_SESSION['time'])) {
    if ($_SESSION['time'] + 500 > time()) {
        $_SESSION['time'] = time();
    } else {
        // session_destroy();
        session_unset();
    }
}
