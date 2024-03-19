<?php
    function addposts(){
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        $excerpt = $_POST['excerpt'];
        $content = $_POST['content'];
        $tags = $_POST['tags'];
        $author = $_POST['author'];
        $is_active = $_POST['is_active'];
        $site_id = $_POST['site_id'];
        $category_id = $_POST['category_id'];

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data = date('d-m-y h:i:s');
            // $created_at = $data['created_at'];
            // $updated_at = $data['updated_at'];
        $json_user = $_SESSION['user'];
        $user_id = $json_user['id'];
            // $created_by_id = $data['created_by_id'];
            // $updated_by_id = $data['updated_by_id'];
        insert_posts($title,$slug,$excerpt,$content,$tags,$author,$is_active,$site_id,$category_id,$data,$user_id);
        echo"added posts successfully";
    }
    function viewposts(){
        $list_posts = loadall_posts();
            foreach ($list_posts as $row) {
                $id = $row['id'];
                $title = $row['title'];
                $slug = $row['slug'];
                $excerpt = $row['excerpt'];
                $content = $row['content'];
                $is_active = $row['is_active'];
                $site_id = $row['site_id'];
                $category_id = $row['category_id'];
                $created_at = $row['created_at'];
                $created_by_id = $row['created_by_id'];
                $updated_at = $row['updated_at'];
                $updated_by_id = $row['updated_by_id'];
                // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                echo "ID: $id, title: $title, Slug: $slug, Excerpt: $excerpt,Content: $content,Is Active: $is_active, Site_id: $site_id, Category_id: $category_id,
                Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
            }
    }
    function  deleteposts(){
        $id = $_GET['id'];
        delete_posts($id);
        $list_posts = loadall_posts();
            foreach ($list_posts as $row) {
                $id = $row['id'];
                $title = $row['title'];
                $slug = $row['slug'];
                $excerpt = $row['excerpt'];
                $content = $row['content'];
                $is_active = $row['is_active'];
                $site_id = $row['site_id'];
                $category_id = $row['category_id'];
                $created_at = $row['created_at'];
                $created_by_id = $row['created_by_id'];
                $updated_at = $row['updated_at'];
                $updated_by_id = $row['updated_by_id'];
                // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                echo "ID: $id, title: $title, Slug: $slug, Excerpt: $excerpt,Content: $content,Is Active: $is_active, Site_id: $site_id, Category_id: $category_id,
                Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
            }
    }
    function updateposts(){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        $excerpt = $_POST['excerpt'];
        $content = $_POST['content'];
        $tags = $_POST['tags'];
        $author = $_POST['author'];
        $is_active = $_POST['is_active'];
        $site_id = $_POST['site_id'];
        $category_id = $_POST['category_id'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data = date('d-m-y h:i:s');
            // $created_at = $data['created_at'];
            // $updated_at = $data['updated_at'];
            $json_user = $_SESSION['user'];
            $user_id = $json_user['id'];
            // $created_by_id = $data['created_by_id'];
            // $updated_by_id = $data['updated_by_id'];
            update_posts($title,$slug,$excerpt,$content,$tags,$author,$is_active,$site_id,$category_id,$data,$user_id,$id);

                $list_posts = loadall_posts();
                foreach ($list_posts as $row) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $slug = $row['slug'];
                    $excerpt = $row['excerpt'];
                    $content = $row['content'];
                    $is_active = $row['is_active'];
                    $site_id = $row['site_id'];
                    $category_id = $row['category_id'];
                    $created_at = $row['created_at'];
                    $created_by_id = $row['created_by_id'];
                    $updated_at = $row['updated_at'];
                    $updated_by_id = $row['updated_by_id'];
                    // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                    echo "ID: $id, title: $title, Slug: $slug, Excerpt: $excerpt,Content: $content,Is Active: $is_active, Site_id: $site_id, Category_id: $category_id,
                    Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
                }
    }
    function getid_upposts(){
        $posts=loadone_posts($_GET['id']);
        echo "ID: " . $posts['id'] . ", 
        Title: " . $posts['title'] . ", 
        Slug: " . $posts['slug'] . ", 
        Excerpt: " . $posts['excerpt'] . ", 
        Content: " . $posts['content'] . ", 
        Is Active: " . $posts['is_active'] . ", 
        Site_id: " . $posts['site_id'] . ", 
        Category_id: " . $posts['category_id'] . ", 
        Created At: " . $posts['created_at'] . ", 
        Created By ID: " . $posts['created_by_id'] . ", 
        Updated At: " . $posts['updated_at'] . ", 
        Updated By ID: " . $posts['updated_by_id'] . "\n";
    }

    //====================SEARCH AND PAGING
    function search_name_posts(){
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $posts_per_page = 2;
        $keysearch = $_GET['keysearch'];
        // $page = $_GET['page'];
        $offset = ($current_page - 1) * $posts_per_page;
        $sql = "SELECT * FROM posts WHERE title LIKE '%$keysearch%' LIMIT $posts_per_page OFFSET $offset";
        $result = pdo_query($sql);
        foreach ($result as $post) {
            echo "Title: " . $post['title'] . "Excerpt: " . $post['excerpt'] . "Author: " . $post['author'] . "\n\n";
        }
    }
?>