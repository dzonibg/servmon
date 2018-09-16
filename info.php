<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 7/11/2018
 * Time: 3:05 AM
 */
?>



<HTML>

  <script
  			  src="https://code.jquery.com/jquery-3.3.1.min.js"
  			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  			  crossorigin="anonymous">
  </script>

  <script type="text/javascript">
  $$(document).ready(function() {

  function reloadInfo() {
    $("#info").load("data.php");
  }
  setInterval(reloadInfo, 1000);
  reloadInfo();
  });
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
