<?php
//ket noi CSDL

function them_mathang( $ten_hang, $ma_cong_ty ){
    include_once 'db.php';
    //Model
    //cau query
    $sql = "INSERT INTO MATHANG(TENHANG, MACONGTY) VALUES('$ten_hang', $ma_cong_ty)";
    //check sql
    //var_dump($sql);die();
    //thuc hien truy van
    $conn->exec($sql);
}

function get_product(){
    include_once 'db.php';
    $sql = "SELECT * FROM `MATHANG` WHERE MAHANG = 102 ";
    //truyen cau truy van vao
    $stmt = $conn->query($sql);

    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);

    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $row = $stmt->fetch();

    return $row;
}