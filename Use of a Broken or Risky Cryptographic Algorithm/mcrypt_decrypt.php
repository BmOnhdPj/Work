<?php
$unencryptedPassword = mcrypt_decrypt(MCRYPT_DES, "some_key", "some_string", MCRYPT_MODE_ECB);
?>