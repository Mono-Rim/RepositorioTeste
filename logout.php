<?php
session_start();
session_unset();
session_destroy();
echo 'Você saiu com sucesso.';
?>
