<?php
// Thực hiện kết nối đến cơ sở dữ liệu
try {
    //thay địa chỉ data của bạn
    $pdo = new PDO('sqlite:D:\META_TECHNOLOGY_INTERN_BE_PHP\CRUD_post_cate_php\db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
}

// Tạo bảng users
$sql_users = "
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(50) UNIQUE,
    email VARCHAR(256) UNIQUE,
    password VARCHAR(256),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME
)";
$pdo->exec($sql_users);

// Tạo bảng sites
$sql_sites = "
CREATE TABLE IF NOT EXISTS sites (
    id INTEGER PRIMARY KEY AutoIncrement,
    name VARCHAR(256) UNIQUE,
    url VARCHAR(512) UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME
)";
$pdo->exec($sql_sites);

// Tạo bảng categories
$sql_categories = "
CREATE TABLE IF NOT EXISTS categories (
    id INTEGER PRIMARY KEY AutoIncrement,
    name VARCHAR(256),
    slug VARCHAR(256) UNIQUE,
    is_active BOOLEAN DEFAULT FALSE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_by_id INTEGER,
    updated_at DATETIME,
    updated_by_id INTEGER,
    FOREIGN KEY (created_by_id) REFERENCES users(id),
    FOREIGN KEY (updated_by_id) REFERENCES users(id)
)";
$pdo->exec($sql_categories);

// Tạo bảng posts
$sql_posts = "
CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY AutoIncrement,
    title VARCHAR(256),
    slug VARCHAR(256) UNIQUE,
    excerpt VARCHAR(512) DEFAULT '',
    content TEXT DEFAULT '',
    tags VARCHAR(256),
    author VARCHAR(50),
    is_active BOOLEAN DEFAULT FALSE,
    site_id INTEGER,
    category_id INTEGER,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_by_id INTEGER,
    updated_at DATETIME,
    updated_by_id INTEGER,
    FOREIGN KEY (site_id) REFERENCES sites(id),
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (created_by_id) REFERENCES users(id),
    FOREIGN KEY (updated_by_id) REFERENCES users(id)
)";
$pdo->exec($sql_posts);

// Tạo bảng posts_images
$sql_posts_images = "
CREATE TABLE IF NOT EXISTS posts_images (
    id INTEGER PRIMARY KEY AutoIncrement,
    post_id INTEGER,
    url VARCHAR(2048),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_by_id INTEGER,
    updated_at DATETIME,
    updated_by_id INTEGER,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (created_by_id) REFERENCES users(id),
    FOREIGN KEY (updated_by_id) REFERENCES users(id)
)";
$pdo->exec($sql_posts_images);

echo "Tạo bảng thành công!";
?>
