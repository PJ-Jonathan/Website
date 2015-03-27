<?php
$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
echo '<script>window.location.href="/index.html"</script>';
?>
