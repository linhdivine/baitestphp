<?php 
	require '../config.php';
	isset($_GET['search']) ? $search = $_GET['search'] : $search ='';
	if ($search) {
	
	$sql = "select * from usser where ma_nv like '%$search%' or ho_ten like '%$search%'";

	 $result =  $conn->query($sql);

		if ($result->num_rows > 0) :
			while ($row = $result->fetch_assoc()) :
					echo '<tr>
					<td>'.$row['id'] .'</td>
					<td><img class="img-responsive" src="upload/'.$row['url_anh'].'" alt="" /></td>
					<td>'.$row['ma_nv'].'</td>
					<td>'.$row['ho_ten'].'</td>
					<td>'.$row['ngay_sinh'].'</td>
					<td colspan="2">
					<a href="index.php?user=update&id='.$row['id'].'"><i class="fal fa-edit"></i></a>
					<a href="index.php?user=delete&id='.$row['id'].'"><i class="fal fa-trash-alt"></i></a>
					</td>
				</tr>';
				endwhile;
			else:
			echo '<td><span style="color:red">không có dữ liệu</span> </td>';
		endif;

	}

	?>
