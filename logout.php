<?php

session_start();

session_destroy();

setcookie('user_id', null, -1);		// On veut détruire notre cookie

header('location: index.php');