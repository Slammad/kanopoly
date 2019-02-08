<?php
include 'core/connection.php'; 

    if(isset($_GET['dow'])){
        $path = $_GET['dow'];
        $res = $conn->query("SELECT * FROM `projects` WHERE `path`='$path'");

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        header('Content-Length:'. filesize($path));
        readfile($path);

    }
?>