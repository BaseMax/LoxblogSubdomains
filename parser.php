<?php
$input=file_get_contents("subs.txt");
// persiantooniha.loxblog.com
preg_match_all('/([^\.\s]+)\.loxblog\.com/si', $input, $domains);
// print_r($domains);
$subdomains=[];
foreach($domains[0] as $domain) {
	$subdomains[$domain]=true;
	// print $domain ."\n";
}
foreach($subdomains as $subdomain=>$bool) {
	print $subdomain ."\n";
}
