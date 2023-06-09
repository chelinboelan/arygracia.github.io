<?php
    session_start();6
    session_destroy();
    header("Location: index.php");
?>