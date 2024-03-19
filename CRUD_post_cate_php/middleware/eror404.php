<?php
    function eror_validate_posts(){
        $cates = loadall_categories();
        $sites = loadall_sites();
        echo  "Choose the correct slug\n";
        echo  "Choose the correct is_active == 0 or 1 \n";
        echo  "Choose the correct id categories \n";
        foreach ($cates as $category) {
            echo "ID: " . $category['id'] . " Name: " . $category['name'] . "\n";
        }
        echo "Choose the correct id categories \n";
        foreach ($sites as $site) {
            echo "ID: " . $site['id'] . " Name: " . $site['name'] . "\n";
        }
    }
    function eror_validate_posts_img(){
        $list_posts = loadall_posts();
        echo"Choose the correct id post_id \n";
        foreach ($list_posts as $list_posts) {
            echo "ID: " . $list_posts['id'] . " Title: " . $list_posts['title'] . "\n";
        }
    }

    function eror_validate_cate_isactive(){
        echo"Choose the correct Is_active - 0 or 1\n";
    }
?>