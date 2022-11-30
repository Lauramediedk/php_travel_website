<?php

require_once __DIR__.'/_x.php';

_validate_user_psw();
_validate_email();

$user = [
  'user_psw' => $_POST['user_psw'],
  'user_email' => $_POST['email']
];

// Success
_respond($user);

