<?php require_once('../../configs/config.php');include_once ('../../common/core.php');$_SESSION['S_LangId'] = $_POST['lang_id'];$_SESSION[$_POST['token']] = $_POST['content'];?>