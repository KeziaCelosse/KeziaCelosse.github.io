
<head>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<div style='height:0px;'></div>  
    <div style="padding: 0px">
		<?php echo $output; ?>
    </div>
  </div>
  
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>


