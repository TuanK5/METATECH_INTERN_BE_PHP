<?php
    function addsites() {
        $name = $_POST['name'];
        $url = $_POST['url'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data = date('d-m-y h:i:s');
        insert_sites($name,$url,$data);
        echo"add sites ok";
    }
    function viewsites() {
        $list_site = loadall_sites();
            foreach ($list_site as $item) {
                // Lấy giá trị của từng trường trong mảng
                $id = $item['id'];
                $name = $item['name'];
                $url = $item['url'];
                $created_at = $item['created_at'];
                $updated_at = $item['updated_at'];
                // In ra các giá trị
                echo "ID: $id  Name: $name  Url: $url  Created At: $created_at  Updated At: $updated_at \n"; 
            }
    }
?> 