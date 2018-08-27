<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 7/11/2018
 * Time: 3:05 AM
 */
?>

<HTML>
<title>orangePi server</title>
<p align="center">
    welcome to
    <br>
    opi.nidza.eu.org
    <br>
    Develompent/deployment/production cloud server.
    <br><br>

    <?php
    $result = shell_exec("uptime");
    echo $result;
    ?>
</p>
</HTML>

