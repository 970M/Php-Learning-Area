<?php

session_start();
$_SESSION['pseudo'] = "Mathieu";
$_SESSION['mdp'] = "Balmont";
print_r($_SESSION);
unset($_SESSION['mdp']);
print_r($_SESSION);
session_destroy();
print_r($_SESSION);