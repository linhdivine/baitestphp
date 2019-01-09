<?php

// hàm select user
function get_list_user(){
    global $conn;
    $sql ="select * from usser where 1=1 order by id asc ";
    return $conn->query($sql);
}


// hàm thêm nhân viên
function insert_user(){
    global $conn;
    $error = array(
         'ma_nv' =>'',
         'ho_ten'=>'',
        'ngay_sinh' =>''
    );

    	if(isset($_POST['insert_user'])) {
            $manv = $_POST['ma_nv'];
            $fullname = $_POST['ho_ten'];
            $bithday = $_POST['ngay_sinh'];
            $image = $_FILES['url_anh']['name'];
            if (empty($manv)) {
                $error['ma_nv'] = '<soan class="has-error">xin mời nhập mã nhân viên</soan>';
            }
            if (empty($fullname)) {
                $error['ho_ten'] = '<soan class="has-error">bạn chưa nhập họ và tên</soan>';
            }
            if (empty($bithday)) {
                $error['ngay_sinh'] = '<soan class="has-error">bạn chưa chọn ngày sinh</soan>';
            }
            else {
                if (empty($image)) {
                    $image = 'anonymous_user.png';
                }
                move_uploaded_file($_FILES['url_anh']['tmp_name'], 'upload/' . $image);
                $sql = "INSERT INTO usser(ma_nv, ho_ten, ngay_sinh, url_anh) 
          VALUES ('$manv','$fullname','$bithday','$image')";
                $conn->query($sql);
            }
        }
	   return $error; 
}
 // hàm xóa nhân viên

function delete_user($id){
    global $conn;
    $sql="DELETE FROM usser WHERE id='$id'";
    return $conn->query($sql);
}
// hàm lấy nhân viên theo id
function get_single_ID($id){
    global $conn;
    $sql="select * from usser where id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}

// hàm cập nhật nhân viên
function update_user($id){
    global $conn;
    global $conn;
    $error = array(
        'ma_nv' =>'',
        'ho_ten'=>'',
        'ngay_sinh' =>''
    );
   $row = get_single_ID($id);
    if (isset($_POST['update_user'])){

            $manv = $_POST['ma_nv'];
            $fullname = $_POST['ho_ten'];
            $bithday = $_POST['ngay_sinh'];
            $image = $_FILES['url_anh']['name'];
            if (empty($manv)) {
                $error['ma_nv'] = '<soan class="has-error">xin mời nhập mã nhân viên</soan>';
            }
            elseif ($manv == $row['ma_nv']){
                $error['ma_nv'] = '<soan class="has-error"> mã nhân viên không được trùng</soan>';
            }
            if (empty($fullname)) {
                $error['ho_ten'] = '<soan class="has-error">bạn chưa nhập họ và tên</soan>';
            }
            if (empty($bithday)) {
                $error['ngay_sinh'] = '<soan class="has-error">bạn chưa chọn ngày sinh</soan>';
            }
            else {
                if (empty($image)) {
                    $image = 'anonymous_user.png';
                }
                move_uploaded_file($_FILES['url_anh']['tmp_name'], 'upload/' . $image);
                $sql = "UPDATE usser SET ma_nv='$manv',ho_ten='$fullname',ngay_sinh='$bithday',url_anh='$image' WHERE id='$id'";
                $conn->query($sql);
            }
        }
        return $error;
}

