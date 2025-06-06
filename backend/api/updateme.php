<?php

require_once "../helpers.php";
require_once "../backend/backend.php";

try {
    validateRequest();
    $user_id = idetifyUser();
    $new_user = json_decode(file_get_contents("php://input"), true);
    Backend::updateme($user_id, $new_user);
    sendMessage("user data updated", 200, true);
}
catch(BackendException $e) {
    sendMessage($e->getMessage(), $e->getCode());
}
catch(Throwable $e){
    sendMessage("internal server error", 500);
}
