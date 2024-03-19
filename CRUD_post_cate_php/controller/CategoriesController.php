<?php
    function addcategories(){
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $is_active = $_POST['is_active'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data = date('d-m-y h:i:s');
            // $created_at = $data['created_at'];
            // $updated_at = $data['updated_at'];
        $json_user = $_SESSION['user'];
        $user_id = $json_user['id'];
            // $created_by_id = $data['created_by_id'];
            // $updated_by_id = $data['updated_by_id'];
        insert_categories($name,$slug,$is_active,$data,$user_id);
        echo"added category successfully";
    }
    function viewcategories(){
        $list_cate = loadall_categories();
            foreach ($list_cate as $row) {
                $id = $row['id'];
                $name = $row['name'];
                $slug = $row['slug'];
                $is_active = $row['is_active'];
                $created_at = $row['created_at'];
                $created_by_id = $row['created_by_id'];
                $updated_at = $row['updated_at'];
                $updated_by_id = $row['updated_by_id'];
                // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                echo "ID: $id, Name: $name, Slug: $slug, Is Active: $is_active, Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
            }
    }
    function  deletecategories(){
        $id = $_GET['id'];
                    delete_categories($id);
                    $list_cate = loadall_categories();
                    foreach ($list_cate as $row) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $slug = $row['slug'];
                        $is_active = $row['is_active'];
                        $created_at = $row['created_at'];
                        $created_by_id = $row['created_by_id'];
                        $updated_at = $row['updated_at'];
                        $updated_by_id = $row['updated_by_id'];             
                        // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                        echo "ID: $id, Name: $name, Slug: $slug, Is Active: $is_active, Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
                    }
    }
    function updatecategories(){
        $id = $_GET['id'];
            $name = $_POST['name'];
            $slug = $_POST['slug'];
            $is_active = $_POST['is_active'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $data = date('d-m-y h:i:s');
            // $created_at = $data['created_at'];
            // $updated_at = $data['updated_at'];
            $json_user = $_SESSION['user'];
            $user_id = $json_user['id'];
            // $created_by_id = $data['created_by_id'];
            // $updated_by_id = $data['updated_by_id'];
            update_categories($name,$slug,$is_active,$data,$user_id,$id);
                $list_cate = loadall_categories();
                foreach ($list_cate as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $slug = $row['slug'];
                    $is_active = $row['is_active'];
                    $created_at = $row['created_at'];
                    $created_by_id = $row['created_by_id'];
                    $updated_at = $row['updated_at'];
                    $updated_by_id = $row['updated_by_id'];             
                    // Thực hiện xử lý hoặc hiển thị thông tin của mỗi bản ghi ở đây
                    echo "ID: $id, Name: $name, Slug: $slug, Is Active: $is_active, Created At: $created_at, Created By ID: $created_by_id, Updated At: $updated_at, Updated By ID: $updated_by_id \n\n";
                }
    }
    function getid_upcate(){
        $cate=loadone_categories($_GET['id']);
        echo"ID: ".$cate['id'].", Name: ".$cate['name'].", Slug: ".$cate['slug'].", Is Active: ".$cate['is_active'].", 
        Created At: ".$cate['created_at'].", Created By ID: ".$cate['created_by_id'].", 
        Updated At: ".$cate['updated_at'].", Updated By ID: ".$cate['updated_by_id']."";
    }
?>