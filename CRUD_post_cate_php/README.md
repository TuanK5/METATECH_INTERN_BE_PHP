
Tôi đã làm các chức năng mà bạn yêu cầu: CRUD categories, post, validate , search và paging.

TÔi chọn code PHP thuần để xử lý thay vì laravel, Tuy nhiên code  thuần cần validate nhiều để bảo mật còn laravel nó có hỗ trợ công nghệ.

Nếu có thời gian Tôi sẽ hoàn thiện phần validate vì tôi nghỉ còn nhiều lỗ hỗng cần test và fix.

Tôi đọc đề không hiểu lắm nên nếu code không đúng ý xin công ty thông cảm, cũng khó khăn trong việc hỏi lại yêu cầu nên tôi chỉ làm theo cách tôi hiểu đề.


cách chạy project :

Đầu tiên tạo dữ liệu bằng SQLiteStudio rồi copy path thay thế địa chỉ vào file moder/create_tables.php và model/pdo.php
hoặc cũng có thể add database của tôi tạo sẵn có tên là (db) trong CRUD_post_cate_php/db, trên máy bạn có thể có đường dẫn khác copy path thay vào mode/pdo.php để nó lấy dữ liệu.

chạy file moder/create_tables.php để tạo dữ liệu trong database nếu tạo db mới.

Sau đó chạy file router/index.php nó hiển thị conect thành công thì bạn dùng postman để test API
Bạn thực hiện test nhớ để ý các lỗi trả về, các phương thức get put patch post cũng ảnh hưởng. 
chọn body form để post, không dùng parm và body raw.

Bạn đăng kí tài khoản sau đó login rồi mới thêm các bảng được, lưu ý thêm categories trước bảng post để đúng quan hệ khóa.

Tôi mong có cơ hôị được phỏng vấn tiếp và được làm việc với công ty!