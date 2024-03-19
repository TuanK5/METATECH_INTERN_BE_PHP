<?php
    function insert_posts_img($post_id,$url,$data,$user_id){
        $sql = "INSERT INTO posts_images (post_id,url,created_at,created_by_id,updated_at,updated_by_id)
        VALUES (
            '$post_id',
            '$url',
            '$data',
            '$user_id',
            '$data',
            '$user_id'
        );";
        pdo_execute($sql);
    }
    function loadall_posts_img(){
        $sql = "select * from posts_images order by id asc";
        $list_posts_img = pdo_query($sql);
        return $list_posts_img;
    }
?>