<?php
$dn = "o=My Company, c=US";
$filter=$_GET['a'];
$justthese = array("ou", "sn", "givenname", "mail");

$sr=ldap_search($ds, $dn, $filter, $justthese);
?>