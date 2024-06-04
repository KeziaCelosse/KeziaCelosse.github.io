  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-3">
				
				<br/>
				<?php
					$model = $_COOKIE['avatar'];
				?>
				
				<?php 
					echo  "<b>Model File:</b> <a href='" . $model. "'> ".$model." </a>"; ?><br/>
			
				<?php
					$file1 = str_replace(".glb", ".png", $model);
					echo  "<b>Normal:</b> <a href='" . $file1. "'> ".$file1." </a>"; ?><br/>

				<?php
					$file2 = $file1."?blendShapes[Wolf3D_Head][mouthSmile]=0.8";
					echo  "<b>Smile Pose:</b> <a href='" . $file2. "'> ".$file2." </a>"; ?><br/>

				<?php
					$file3 = $file1."?scene=fullbody-posture-v1-transparent";
					echo  "<b>Full Body Pose:</b> <a href='" . $file3. "'> ".$file3." </a>"; ?><br/>
			
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
