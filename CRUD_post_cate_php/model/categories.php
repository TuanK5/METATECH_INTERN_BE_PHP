<?php
    function insert_categories($name,$slug,$is_active,$data,$user_id){
        $sql = "INSERT INTO categories (name,slug,is_active,created_at,created_by_id,updated_at,updated_by_id)
        VALUES (
            '$name',
            '$slug',
            '$is_active',
            '$data',
            '$user_id',
            '$data',
            '$user_id'
        );
";
        pdo_execute($sql);
    }
    function delete_categories($id){
        $sql = "delete from categories where id=".$id;
        pdo_execute($sql);
    }
    function loadall_categories(){
        $sql = "select * from categories order by id asc";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone_categories($id){
        $sql = "select * from categories where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_categories($name,$slug,$is_active,$data,$user_id,$id){
        $sql = "update categories set  
        name = '$name',
        slug = '$slug',
        is_active = '$is_active',
        created_at = '$data',
        created_by_id = '$user_id',
        updated_at = '$data',
        updated_by_id = '$user_id'
        where id=".$id;
        pdo_execute($sql);
    }
?>