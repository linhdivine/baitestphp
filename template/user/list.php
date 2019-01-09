<?php
if (isset($_GET['user']) == 'insert' || isset($_GET['user']) == 'update'):?>
<div class="col-xs-12  col-md-6">
	<table class="table-responsive">
						<thead>
								<tr>
								<th>ID</th>
								<th>ảnh nhân viên</th>
								<th>Mã nhân viên</th>
								<th>họ và tên</th>
								<th>ngày sinh</th>
								<th colspan="2">thao tác</th>
						</tr>
						</thead>
						<tbody id="result">
								<?php 
									$list_user = get_list_user();

										if ($list_user->num_rows > 0) :
												while ($row = $list_user->fetch_assoc()) :
												 ?>
												 <tr>
                         <td><?=$row['id']  ?></td>
                         <td><img class="img-responsive" src="upload/<?=$row['url_anh']; ?>" alt="" /></td>
                         <td><?=$row['ma_nv']  ?></td>
                         <td><?=$row['ho_ten']  ?></td>
                         <td><?=$row['ngay_sinh']  ?></td>
                        <td colspan="2">
                        	<a href="index.php?user=update&id=<?=$row['id']?>"><i class="fal fa-edit"></i></a>
                        	<a href="index.php?user=delete&id=<?=$row['id']?>"><i class="fal fa-trash-alt"></i></a>
                        </td>
                     </tr>
											<?php endwhile;
											else:
												echo '<td><span style="color:red">không có dữ liệu</span> </td>';
										endif;
								 ?>
						</tbody>
        </table>
</div>
<?php else: ?>
	<div class="col-xs-12  col-md-12">
        <table class="table-responsive table-destop">
						<thead>
								<tr>
								<th>ID</th>
								
								<th>ảnh nhân viên</th>
								<th>Mã nhân viên</th>	
								<th>họ và tên</th>
								<th>ngày sinh</th>
								<th>thao tác</th>
						</tr>
						</thead>
						<tbody id="result1">
								<?php 
									$list_user = get_list_user();

										if ($list_user->num_rows > 0) :
												while ($row = $list_user->fetch_assoc()) :
												 ?>
												 <tr>
                         <td><?=$row['id']  ?></td>
                         <td class="fix-img"><img class="img-responsive" src="upload/<?=$row['url_anh']; ?>" alt=""></td>
                          <td><?=$row['ma_nv']  ?></td>
                         <td><?=$row['ho_ten']  ?></td>
                         <td><?=$row['ngay_sinh']  ?></td>
                        <td colspan="2">
	                        	<a href="index.php?user=update&id=<?=$row['id']?>"><i class="fal fa-edit"></i></a>
	                        	<a href="index.php?user=delete&id=<?=$row['id']?>"><i class="fal fa-trash-alt"></i></a>
	                        </td>
                       </tr>
											<?php endwhile;
											else:
												echo '<td><span style="color:red">không có dữ liệu</span> </td>';
										endif;
								 ?>
						</tbody>
        </table>
</div>
<?php  endif;?>
