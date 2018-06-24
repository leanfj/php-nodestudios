<?php

setcookie('user', 'Leandro', time()+3600);
setcookie('email', 'leanfj@email.com', time()+3600);
setcookie('lastSearch', 'tenis nike', time()+3600);

var_dump($_COOKIE);