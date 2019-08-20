<?php

session_start();
session_unset();
session_destroy();
header("Location: ../_pages/Login.php");