<?php

session_start();
unset($_SESSION['user_id']);
session_destroy();

header('login2.php');
echo '<script>window.location.href = "login2.php"</script>';
?>
