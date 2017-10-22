<?php
// ZeroNights hackquest challenge by d0znpp
// https://docs.google.com/document/d/1v1TkWZtrhzRLy0bYXBcdLUedXGb9njTNIJXa3u9akHM/edit?pli=1#heading=h.mytbih9w7xb0
// http://web.archive.org/web/20130512140235/http://d0znpp.blogspot.ru/2012/11/zeronights-hackquest-view-from-organizer.html
// http://raz0r.name/other/zeronights-hackquest-erssma-task-writeup/
if (empty($_POST['login'])) {
	die('<form action="" method="POST">
	Login: <input type="text" name="login"/>
	<input type="submit" name="submit" value="Submit"/>
</form>');
}

$host = 'db7-ubuntu.rd.ptsecurity.ru';
$f = fsockopen($host,5337);

libxml_disable_entity_loader(true);//no XXE
libxml_use_internal_errors(true);

$request = "GET /ErsSma/index.php?username={$_POST['login']} HTTP/1.1\r\nHost: $host\r\n\r\n";//CRLF injection
//file_put_contents('./request_' . microtime() . '.log', var_export($request, true));
fputs($f,$request);
$resp = '';
while($s = fgets($f)) {
	$resp.=$s;
}

$resp=substr($resp,strpos($resp,"\r\n\r\n"));//read by EOF, not by Length header
//file_put_contents('./resp_' . microtime() . '.log', var_export($resp, true));

$doc = new DOMDocument();
$doc->loadXML($resp);
//echo $resp."-----";

echo $doc->getElementsByTagName("error")->item(0)->nodeValue;
if(libxml_get_errors()!=null){
print_r(libxml_get_errors());
}
?>