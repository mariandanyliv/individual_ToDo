<?php 
    setcookie('log', $user->id, time() - 3600 * 24 * 30, "/");

    echo 'ok';
?>