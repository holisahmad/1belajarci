<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
    <center><h1><?php echo $judul;?></h1></center>
   
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
        //$no = 1;
        $no = $this->uri->segment('3') + 1;
        foreach ($user as $u) {
        ?>
		
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->nama; ?></td>
			<td><?php echo $u->alamat; ?></td>
			<td><?php echo $u->pekerjaan; ?></td>
			<td>
			<?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?>
            <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
<?php 
$data =  $this->pagination->create_links();
echo "<div align='center'>".$data."</div>";
?>
</body>
</html>