<?php
    //ket noi CSDL
    include 'db.php';

    $TENHANG    = 'Khóa học PHP';
    $MACONGTY   = 5;

    //cau query
    $sql = "INSERT INTO MATHANG(TENHANG, MACONGTY) VALUES('$TENHANG', $MACONGTY)";

    //check sql
    //var_dump($sql);

    //thuc hien truy van
    $conn->exec($sql);
    