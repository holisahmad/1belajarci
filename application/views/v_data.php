<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- <h1>Membuat Pagination Pada CodeIgniter | MalasNgoding.com</h1> -->
    <h1><?php echo $judul;?></h1>
	<table border="1">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>alamat</th>
			<th>pekerjaan</th>		
        </tr>
        
		<?php 
        $no = $this->uri->segment('3') + 1;
        foreach ($user as $u) {
        ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->nama; ?></td>
			<td><?php echo $u->alamat; ?></td>
			<td><?php echo $u->pekerjaan; ?></td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php 
echo $this->pagination->create_links();
?>
</body>
</html>