<?php
    function insert_account($username,$pass,$email,$date ){
        $sql = "INSERT INTO users (username,email,password,created_at,updated_at)
        VALUES (
            '$username',
            '$email',
            '$pass',
            '$date',
            '$date'
        );";
        pdo_execute($sql);
    }
    function loadone_checkuser($username,$password,$email){
        $sql = "SELECT * FROM users WHERE username = '".$username."'  AND password = '".$password."'  AND  email='".$email."'";
        $tkus = pdo_query_one($sql);
        return $tkus;
    }
?>