<?php
    function insert_sites($name,$url,$data){
        $sql = "INSERT INTO sites (name,url,created_at,updated_at
        )
        VALUES (
            '$name',
            '$url',
            '$data',
            '$data'
        );
";
        pdo_execute($sql);
    }
    function loadall_sites(){
        $sql = "select * from sites order by id asc";
        $list_site = pdo_query($sql);
        return $list_site;
    }
?>