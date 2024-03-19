<?php
    function insert_posts($title,$slug,$excerpt,$content,$tags,$author,$is_active,$site_id,$category_id,$data,$user_id){
        $sql = "INSERT INTO posts (title,slug,excerpt,content,tags,author,is_active,site_id,category_id,created_at,created_by_id,updated_at,updated_by_id)
        VALUES (
            '$title',
            '$slug',
            '$excerpt',
            '$content',
            '$tags',
            '$author',
            '$is_active',
            '$site_id',
            '$category_id',
            '$data',
            '$user_id',
            '$data',
            '$user_id'
        );
";
        pdo_execute($sql);
    }
    function delete_posts($id){
        $sql = "delete from posts where id=".$id;
        pdo_execute($sql);
    }
    function loadall_posts(){
        $sql = "select * from posts order by id asc";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone_posts($id){
        $sql = "select * from posts where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_posts($title,$slug,$excerpt,$content,$tags,$author,$is_active,$site_id,$category_id,$data,$user_id,$id){
        $sql = "update posts set
        title = '$title',
        slug = '$slug',
        excerpt = '$excerpt',
        content = '$content',
        tags = '$tags',
        author = '$author',
        is_active = '$is_active',
        site_id = '$site_id',
        category_id = '$category_id',

        created_at = '$data',
        created_by_id = '$user_id',
        updated_at = '$data',
        updated_by_id = '$user_id'
        where id=".$id;
        pdo_execute($sql);
    }
?>