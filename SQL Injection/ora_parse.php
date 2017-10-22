<?php
    // open a connection
    if (!$db = @ora_logon("dev@ORCL","dev")) {
       $error = ora_error();
       printf("There was an error connecting. Error was: %s", $error);
       die();
    }

    // open a cursor
    $curs = ora_open($db);

    // check that SQL is OK
    if (!@ora_parse($curs,"SELECT * FROM users WHERE name='" . $_GET['name'] . "'")) {
       echo "Error in parse. Error was :", ora_error($curs);
    } else {
       // if OK execute the query
       ora_exec($curs);
    }
?>