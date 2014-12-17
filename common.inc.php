<?php
switch($_SERVER["HTTP_HOST"]) {
	case "simpreative.zerglinggo.net":
		$con['name'] = "ZerglingGo";
		$con['desc'] = "Web Developer";
		$con['img'] = "zerglinggo.png?".mt_rand();
		break;
	case "simpreative.whitewolf.kr":
		$con['name'] = "WhiteWolf";
		$con['desc'] = "Software Developer";
		$con['img'] = "whitewolf.png?".mt_rand();
		break;
	case "simpreative.qwertylove.net":
		$con['name'] = "QwertyLove";
		$con['desc'] = "Student";
		$con['img'] = "qwertylove.png?".mt_rand();
		break;
}
?>