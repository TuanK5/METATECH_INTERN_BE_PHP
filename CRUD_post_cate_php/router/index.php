<?php
    session_start();
    //model
    include "../model/pdo.php";
    include "../model/categories.php";
    include "../model/posts.php";
    include "../model/users.php";
    include "../model/sites.php";
    include "../model/posts_images.php";
    $data = json_decode(file_get_contents('php://input'), true);
    //Controller
    include "../controller/CategoriesController.php";
    include "../controller/AuthController.php";
    include "../controller/SitesController.php";
    include "../controller/PostsImgController.php";
    include "../controller/PostsController.php";
    // middleware
    include "../middleware/validate.php";
    include "../middleware/eror404.php";
    // Xác định hoạt động từ yêu cầu của người dùng
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
            case 'logout':
                    logout();
                break;
            case 'forget_mk':
                // Xử lý yêu cầu quên mật khẩu
                // Code xử lý yêu cầu và trả về kết quả dưới dạng JSON
            break;
            case 'register':
                // POST
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    register();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
                break;

            case 'login':
                //POST
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    login();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
                break;
            //======================CRUD categories===============================
            case 'addcategories':
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $is_active = $_POST['is_active'];
                    if(validatecate($is_active)==true){
                        if (is_logged_in()) {
                            addcategories();
                        } else {
                            echo "You need to log in to add categories.";
                        }
                    }else{
                        eror_validate_cate_isactive();
                    }
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'viewcategories':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    viewcategories();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'deletecategories':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    if (is_logged_in()) {
                        deletecategories();
                    } else {
                        echo "You need to log in to add categories.";
                    }
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'getid_upcate':
                if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['id']>0)){
                    getid_upcate();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }           
                break;
            case 'updatecategories':
                if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_GET['id']>0)) {
                    $is_active = $_POST['is_active'];
                    if(validatecate($is_active)==true){
                        if (is_logged_in()) {
                            updatecategories();
                        } else {
                            echo "You need to log in to add categories.";
                        }
                    }else{
                        eror_validate_cate_isactive();
                    }                  
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            //====================CRUD Posts================================
            case 'addposts':
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $slug = $_POST['slug'];
                    $is_active = $_POST['is_active'];
                    $site_id = $_POST['site_id'];
                    $category_id = $_POST['category_id'];
                    if(validatepost($slug,$is_active,$site_id,$category_id)==true){
                        if (is_logged_in()) {
                            addposts();
                        } else {
                            echo "You need to log in to add categories.";
                        }
                    }else{
                        eror_validate_posts();
                    }
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'viewposts':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    viewposts();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'deleteposts':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    if (is_logged_in()) {
                        deleteposts();
                    } else {
                        echo "You need to log in to add categories.";
                    }
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            case 'getid_upposts':
                if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['id']>0)){
                    getid_upposts();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }           
                break;
            case 'updateposts':
                if(($_SERVER['REQUEST_METHOD'] == 'POST') && ($_GET['id']>0)) {
                    //$slug = $_POST['slug'];
                    $is_active = $_POST['is_active'];
                    $site_id = $_POST['site_id'];
                    $category_id = $_POST['category_id'];
                    if(validatepost($is_active,$site_id,$category_id)==true){
                        if (is_logged_in()) {
                            updateposts();
                        } else {
                            echo "You need to log in to add categories.";
                        }
                    }else{
                        eror_validate_posts();
                    }
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            //======================CR sites==============================
            case 'addsites':
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    addsites();
                }else{
                    echo "Review the [Get Put Post Patch request!";
                }
            break;
            case 'viewsites':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    viewsites();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            //======================CR PostsImg==============================
            case 'addposts_img':
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $post_id = $_POST['post_id'];
                    if(validatepost_img($post_id)==true){
                        addposts_img();
                    }else{
                        eror_validate_posts_img();
                    }
                }else{
                    echo "Review the [Get Put Post Patch request!";
                }
            break;
            case 'viewposts_img':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    viewposts_img();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            //===================SEARCH AND PAGING===================================
            case 'search':
                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                    search_name_posts();
                }else{
                    echo "Review the [Get Put Post Patch] request!";
                }
            break;
            default:
                // Xử lý các trường hợp yêu cầu không xác định hoặc không hợp lệ
                // Trả về thông báo lỗi hoặc mã lỗi dưới dạng JSON
                echo json_encode(array("error" => "Invalid request, Please pass valid action!"));
                break;
        }
    } else {
        // Xử lý yêu cầu không có tham số act
        // Trả về thông báo lỗi hoặc mã lỗi dưới dạng JSON
        echo json_encode(array("request 200" => "You can use PostMan to test!"));
    }
?>




