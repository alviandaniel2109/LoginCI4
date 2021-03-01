<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
	<title>Home page</title>
</head>
<body>
	<div class="container">
	</br>
	<h1><center> Ini halaman Dashboard<a href="<?php echo base_url('/login'); ?>" class="btn btn-success float-right mb-4">Logout</a></h1></center>
	<div class="session">
	<?php  
	$session = session();
	echo ('Nama : ' ).$session->get('user_name');
	?>
	<?php  
	$session = session();
	echo('Email : ').$session->get('user_email');
	?>
	 </div>
	 </div>
</body>
</html>