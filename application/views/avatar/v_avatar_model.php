  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-3">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Metaversity</title>

    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <style>
        #modelviewer {
			padding-top: 100px;
            height: 600px;
            width: 100%;
        }
	</style>    
</head>

	<center><br/><br/>
	<div id="loading">Loading 3D Model. Please wait...</div>
	<script>
		// Mendapatkan elemen div yang berisi teks "Hello World"
		var myDiv = document.getElementById("loading");

		// Menampilkan teks "Hello World"
		myDiv.innerHTML = "Loading 3D Model. Please wait...";
		
		// Menghapus teks "Hello World" setelah 3 detik
		setTimeout(function(){
		myDiv.innerHTML = "";
		}, 5000);
	</script>
	
	<?php
		$avatar = $_COOKIE['avatar'];
		setcookie('avatar', $avatar, time() + (86400 * 30), '/');
	?>
	
    <model-viewer id="modelviewer" alt="Ready Player Me Avatar"
        src="<?php echo $avatar; ?>" shadow-intensity="1" camera-controls
        touch-action="pan-y">
    </model-viewer>
    </center>    
	
	<?php
	
		$email = $this->session->userdata('userEmail');
		$token = $this->session->userdata('TOKEN');
		$glblink = $avatar;
		
		$this->db->where('email',$email);
		$this->db->from('avatars');
		$query= $this->db->get();
		
		if($query->num_rows() > 0)
		{
			$update = $this->db->query("UPDATE avatars SET token = \"$token\" , glblink = \"$glblink\"  WHERE email = '".$email."'");
		}
		else
		{
			$insert = $this->db->query("INSERT INTO avatars (email, token, glblink) VALUES (\"$email\",\"$token\",\"$glblink\") ");
		}
	?>
			
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
