<?php
	;
	  $error = insert_user();
    ?>
<div class="col-xs-12  col-md-6">
    <form method="post" enctype="multipart/form-data">
            <div class="wrapper-insert">
            <div class="input-row">
                <p><label for="ma_nv">Mã nhân viên</label><input type="text" name="ma_nv" class="form-control"></p>
                <?=$error['ma_nv'] ?>
            </div>
            <div class="input-row">
                <p><label for="ho_ten">Họ Tên nhân viên</label><input type="text" name="ho_ten" class="form-control"></p>
                <?=$error['ho_ten'] ?>
            </div>
            <div class="input-row">
                <p><label for="ngay_sinh">Ngày sinh</label><input type="date" name="ngay_sinh" class="form-control"></p>
                <?=$error['ngay_sinh'] ?>
            </div>
            <div class="input-row">
                <p><label for="url_anh">Ảnh nhân viên</label><input type="file" name="url_anh" class="form-control"></p>
            </div>
            <div>
                <p><input class="btn-send" data-label="Send" data-success="Sent!" type="submit" name="insert_user" value="submit"></p>
            </div>
            </div>
    </form>
</div>