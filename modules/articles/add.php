<?php
    require_once("common/session_validator.php");
    require_once("common/form.php");
    require_once("modules/$current_module/form_definition.php");


    $smarty->assign("form", $forms);
    $smarty->assign("form_name", $form_name);

?>
