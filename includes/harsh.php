<?php

function harsh($password_utilisateur){
$hashFormat="$2a$07$";
        $salt="iamthebeautifullestprogrammerofmyclass";
        $hash_Format_and_Salt=$hashFormat.$salt;
        $encrypted_password=crypt($password_utilisateur,$hash_Format_and_Salt);

    return $encrypted_password;
}

?>