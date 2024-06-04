  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-3">

	<?php 
        $model = $_COOKIE['avatar']; 
        $stickers = str_replace(".glb", ".png", $model);
        $stickers = $stickers."?blendShapes[Wolf3D_Head][mouthSmile]=0.8";
    ?>
    
    <br/><img style="height:500px" src="<?php echo $stickers; ?>" />

	
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
