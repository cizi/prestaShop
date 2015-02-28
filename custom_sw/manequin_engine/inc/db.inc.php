<?php
// DB settings & connecting
dibi::connect(array(
    'driver'   => 'mysql',
    'host'     => _DB_SERVER_,
    'username' => _DB_USER_,
    'password' => _DB_PASSWD_,
    'database' => _DB_NAME_,
    'charset'  => 'utf8',
));
?>