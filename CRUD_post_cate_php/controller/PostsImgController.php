<?php
    function addposts_img() {
        $post_id = $_POST['post_id'];
        $url = $_POST['url'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data = date('d-m-y h:i:s');

            $json_user = $_SESSION['user'];
            $user_id = $json_user['id'];
        insert_posts_img($post_id,$url,$data,$user_id);
        echo"add post_img ok";
    }
    function viewposts_img() {
        $list_posts_img = loadall_posts_img();
            foreach ($list_posts_img as $item) {
                // Lấy giá trị của từng trường trong mảng
                $id = $item['id'];
                $post_id = $item['post_id'];
                $url = $item['url'];
                $created_at = $item['created_at'];
                $created_by_id = $item['created_by_id'];
                $updated_at = $item['updated_at'];
                $updated_by_id = $item['updated_by_id'];
                // In ra các giá trị
                echo "ID: $id  Post_id: $post_id  Url: $url  Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id\n"; 
            }
    }
?> 