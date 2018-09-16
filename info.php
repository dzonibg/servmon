<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 7/11/2018
 * Time: 3:05 AM
 */
?>

<HTML>
  <script src="http://code.jquery.com/jquery-latest.js">

  $jQuery(document).ready(function($) {
    $jQuery.setTimeout(function () {
      $location.reload();
    }, 1000);
  });
  </script>
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
