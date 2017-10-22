<?php
/**
 *  Vulns: 5 real, 2 Arbitrary File Reading, 3 markers
 */

if (empty($_GET['file'])) {
	die('error');
}

$filePath = $_GET['file'];/*entry point 1*/

//If return is set to TRUE, returns the highlighted code as a string instead of printing it out
if (show_source($filePath, TRUE)) {/*not a vuln*/
	/*vuln_code_marker_for_AI*/
}

if (show_source($filePath)) {/*exit point 1.1*/
	/*vuln_code_marker_for_AI*/
}

if (show_source($filePath, FALSE)) {/*exit point 1.2*/
	/*vuln_code_marker_for_AI*/
}
?>