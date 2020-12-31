<?php

session_start();

$_session['name'] = 'dardir';

include "sessionCount2.php";

echo "<a href = 'sessionCount3.php'>about </a>";