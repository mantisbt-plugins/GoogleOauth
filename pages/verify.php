<?php
$current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];
$url = parse_url($current_link );
$query = $url['query'];
echo "rediect to link: <a href=\"".$domain."/verify.php?".$query."\">".$domain."/verify.php?".$query."</a>";
header("Location: $domain/verify.php?$query"); 
exit();
?>