<?php
    if ($_COOKIE['user'] == 'True')
        setcookie('user', 'True', time() - 3600, '/');
    else
        setcookie('user', 'True', time() + 3600, '/');
        
    header('Location: /');
?>