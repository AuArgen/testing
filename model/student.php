<?php 
    require("./conn.php");
    $sql = "CREATE TABLE student (
        id BIGINT(21) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fio VARCHAR(105) NOT NULL,
        email VARCHAR(105) NOT NULL,
        phone VARCHAR(16) ,
        bio TEXT,
        avatar VARCHAR(150),
        login VARCHAR(16) NOT NULL,
        password VARCHAR(1000) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    // $sql = "
    //     ALTER TABLE teacher
    //     ADD avatar VARCHAR(150);
    // ";
    $conn->query($sql);
?>