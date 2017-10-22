<?php
/**
 *  Vulns: 4 real, 3 fake (2 hardcode + marker)
 */
if (empty($_GET['msg'])) {
	die('error');
}

$msg = $_GET['msg'];/*entry point*/
trigger_error($msg, E_USER_NOTICE);/*exit point*/
trigger_error($msg, E_USER_WARNING);/*exit point*/
trigger_error($msg, E_USER_DEPRECATED);/*exit point*/
trigger_error($msg, E_STRICT);/*not a vuln, Invalid error type*/

trigger_error($msg, E_USER_ERROR);/*exit point*/

// after E_ERROR execution of the script is halted
/*fake_vuln_code_marker_for_AI*/
echo $_GET[ 'a' ];
?>