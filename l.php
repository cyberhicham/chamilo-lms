<?php
require_once 'main/inc/global.inc.php';
$result = UserManager::logInAsFirstAdmin();
if ($result) {
    header('Location: index.php');
    exit;
}
api_not_allowed();
exit;
