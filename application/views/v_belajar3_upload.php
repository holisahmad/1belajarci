<h1>Upload Gambar</h1>
<?php
echo $error;
if($data){
	
	?>

	<h3>Gambar berhasil diupload</h3>
	<img src="<?php echo base_url();?>uploads/<?php echo $data['file_name'];?>" alt="" width="200">

	<?php } ?>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploads" id="uploads">
	<button type="submit">Upload</button>
</form>