<?php
function p($var) {
	if (is_bool($var)) {
		var_dump($var);
	} else if (is_null($var)) {
		var_dump(NULL);
	} else {
		echo "<pre style='position:relative;z-index:99999;margin:10px;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:20px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
	}
}

function isEmpty($v) {
	return (!isset($v) || trim($v) === '');
}

function slashVar($val) {
	return MAGIC_QUOTES_GPC ? trim($val) : addslashes(trim($val));
}

function cleanVar($val) {
	if ((MAGIC_QUOTES_GPC && $val != stripslashes($val)) || (!MAGIC_QUOTES_GPC && $val != addslashes($val)) || substr($val, -1) == "\\") {
		exit();
	}
	$val = str_replace("%", "", $val);
	$val = str_replace("*", "", $val);
	$val = str_replace("#", "", $val);
	$val = str_replace(" ", "", $val);
	$val = str_replace("\t", "", $val);
	$val = str_replace("%20", "", $val);
	$val = str_replace("%27", "", $val);
	$val = str_replace("/", "", $val);
	$val = str_replace("\"", "", $val);
	$val = str_replace("'", "", $val);
	$val = str_replace(";", "", $val);
	$val = str_replace("--", "", $val);
	$val = htmlspecialchars($val, ENT_QUOTES);
	return $val;
}

function getVal($var, $method = '', $val = null) {
	switch (strtolower($method)) {
	case "get":
		if (!empty($_GET[$var])) {
			$val = cleanVar($_GET[$var]);
		}
		break;
	case "post":
		if (!empty($_POST[$var])) {
			$val = cleanVar($_POST[$var]);
		}
		break;
	case "cookie":
		$var = SAFE_COOKIEPRE . $var;
		if (!empty($_COOKIE[$var])) {
			$val = cleanVar($_COOKIE[$var]);
		}
		break;
	default:
	}
	return $val;
}