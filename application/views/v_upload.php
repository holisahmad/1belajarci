<html>
<head>
	<title>Upload gambar</title>
	<!-- <title>Uplad data</title> -->
</head>
<body>
	<center><h1>Membuat form upload gambar</h1></center>
	<!-- <center><h1>Upload data gambar</h1></center> -->
	<?php echo $error; ?>
    
    <!-- <form action="" enctype="multipart/form-data"> -->
	<?php echo form_open_multipart('upload/aksi_upload'); ?>
 
	<input type="file" name="berkas" />
 
	<br /><br />
 
	<input type="submit" value="upload" />
 
</form>
 
</body>
</html>