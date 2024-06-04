<?php
	$page_title = "Zetcil Coder";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Page Title -->
	<title><?php echo $page_title; ?></title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo base_url().'grocery/customers';?>'>Customers</a> |
		<a href='<?php echo base_url().'grocery/orders';?>'>Orders</a> |
		<a href='<?php echo base_url().'grocery/products';?>'>Products</a> |
		<a href='<?php echo base_url().'grocery/offices';?>'>Offices</a> | 
		<a href='<?php echo base_url().'grocery/employees';?>'>Employees</a> |		 
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
