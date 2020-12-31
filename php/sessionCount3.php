<?php

session_start();

echo "hello " . $_SESSION['name'] . " How Are You";

include "sessionCount2.php";