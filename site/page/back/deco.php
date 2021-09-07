<?php 
session_start();
session_destroy();
header("Location: http://localhost/dev_web/site/page/index.php");