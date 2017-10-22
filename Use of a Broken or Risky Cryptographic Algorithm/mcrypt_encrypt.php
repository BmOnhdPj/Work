<?php
$encryptedPassword = mcrypt_encrypt(MCRYPT_DES, "some_key", "some_string", MCRYPT_MODE_ECB);
?>