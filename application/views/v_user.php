<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $judul;?></h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama User</th>
		</tr>
        <?php 
        $no = 1;
        foreach ($user as $u) { 
        ?>
		<tr>
			<!-- //memasukkan data dari tabel masuk - holis -->
            <td><?php echo $no; ?></td>
			<td><?php echo $u->kode ?></td>
			<td><?php echo $u->nama ?></td>
		</tr>
        <?php 
        $no++;
} 

?>
	</table>
</body>
</html>



