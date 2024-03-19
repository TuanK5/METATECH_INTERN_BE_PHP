<?php
    function is_logged_in() {
        // Kiểm tra xem session 'user' có tồn tại không
        return isset($_SESSION['user']);
    }

    function validatepost($is_active, $site_id, $category_id) {
        $cate = loadall_categories();
        $site = loadall_sites();
        //$list_posts = loadall_posts();
        // Tạo mảng chứa các id của categories và sites
        $category_ids = array_map(function($category) {
            return $category['id'];
        }, $cate);

        $site_ids = array_map(function($site) {
            return $site['id'];
        }, $site);

        // $post_ids = array_map(function($list_posts) {
        //     return $list_posts['slug'];
        // }, $list_posts);

        // Kiểm tra xem các giá trị đã được truyền vào có hợp lệ không
        if (($is_active == 0 || $is_active == 1) && in_array($site_id, $category_ids) && in_array($category_id, $site_ids)) {
            return true;
        } else {
            return false;
    }
    }
    function validatepost_img($post_id){
        $list_posts = loadall_posts();
        $post_ids = array_map(function($post) {
            return $post['id'];
        }, $list_posts);
        if ( in_array($post_id, $post_ids) && $post_id > 0) {
            return true;
        } else {
            return false;
        }
    }

    function validatecate($is_active){
        if (  $is_active == 0 || $is_active == 1 ) {
            return true;
        } else {
            return false;
        }
    }

    function checkvaluelogin($username,$password,$email){
        if (!preg_match('/[\'"=]/', $username) && !preg_match('/[\'"=]/', $password) && !preg_match('/[\'"=]/', $email)) {
            // Biến `$username`, `$password`, và `$email` không chứa các ký tự không mong muốn
            return true;
        } else {
            // Một trong các biến `$username`, `$password`, hoặc `$email` chứa các ký tự không mong muốn
            echo "Một trong các biến chứa các ký tự không mong muốn.";
            return false;
        }
    }
?>