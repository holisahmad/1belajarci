<!-- <!DOCTYPE html>
<html>
<head>
	<title><?php //echo $title;?></title>
</head>
<body> -->
	<!-- <h1><?php //echo $judul;?></h1> -->
	<!-- <?php //echo validation_errors(); ?> -->
	<!-- <?php //echo form_open('form/aksi'); ?> -->
	<!-- <?php //echo form_open('form'); ?> -->

		<!-- <label>Kode</label><br/> -->
		<!-- <input type="text" name="kode"><br/> -->
        <!-- <?php //echo form_error('kode');?> -->
		<!-- <label>Nama User</label><br/> -->
		<!-- <input type="text" name="nama"><br/> -->
        <!-- <?php //echo form_error('nama');?> -->
		<!-- <input type="submit" value="Simpan"> -->
	    <!-- <?php //echo form_close();?> -->
    <!-- </form> -->
<!-- </body> -->
<!-- </html> -->

		<section>
		<!-- //halaman judul - holis -->
		<h1><?php echo $judul; ?></h1>
		<?php echo validation_errors(); ?>
		<!-- <?php //echo form_open('form/aksi'); ?> -->
		<?php echo form_open('form/form_valid'); ?>

		<label>Kode</label><br/>
		<input type="text" name="kode"><br/>
        <!-- <?php //echo form_error('kode');?> -->
		<label>Nama User</label><br/>
		<input type="text" name="nama"><br/>
        <!-- <?php //echo form_error('nama');?> -->
		<input type="submit" value="Simpan">
	    <?php echo form_close();?>
    <!-- </form> -->

		</section>
		