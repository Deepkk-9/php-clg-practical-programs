<?php
if (isset($_POST['val'])) {
    $val = $_POST['val'];

    session_start();

    $_SESSION["name"] = $val;
    echo "Session set with value : " . $_SESSION["name"];
}
