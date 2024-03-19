<?php
    function logout(){
        // Xóa tất cả các biến phiên làm việc
        session_unset();
        // Trả về kết quả thành công hoặc thông báo lỗi dưới dạng JSON
        echo json_encode(array("logout" => true));
    }
    function register(){
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('d-m-y h:i:s');
        insert_account($username,$pass,$email,$date );
        echo"register OK";
    }
    function login(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $checkuser=loadone_checkuser($username,$password,$email);
        if(is_array($checkuser)&& checkvaluelogin($username,$password,$email)==true){
            $_SESSION['user']=$checkuser;
            echo "DN thanh cong Tk:"; 
            $json_user = json_encode($_SESSION['user']);
            echo"$json_user";
        }else{ 
            echo"The ear is not the same";
        }
    }
?>