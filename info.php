<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 7/11/2018
 * Time: 3:05 AM
 */
?>

<HTML>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
  function reloadInfo() {
    $("#info").load("data.php");
  }
  setInterval(reloadInfo(), 3000);
  reloadInfo();
  </script>
<title>orangePi server</title>
<div id="main" align="center">
    welcome to
    <br>
    opi.nidza.eu.org
    <br>
    Develompent/deployment/production cloud server.
    <br><br>
</div>
<div id="info">

</div>




</HTML>
