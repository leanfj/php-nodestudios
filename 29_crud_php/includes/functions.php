<?php

function clear ($argInput) {
    global $connect;
    $var = mysqli_escape_string($connect, $argInput);
    $var = htmlspecialchars($var);
    return $var;
  }