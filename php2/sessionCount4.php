<?php

session_start();

echo "num of view" . $_SESSION['counter']; // no incriment becaus no include forsessionCount2.php