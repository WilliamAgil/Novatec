<html>
<head>

</head>

<body>

<?php

$link = new PDO('mysql:host=localhost;dbname=db_novatecideas', 'root', ''); 
?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>EMAIL</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from users') as $row){  ?> 
<tr>
	<td><?php echo $row['id_user'] ?></td>
    <td><?php echo $row['first_name'] ?></td>
	<td><?php echo $row['email'] ?></td>
    
 </tr>
<?php
	}
?>
</table>


</body>
</html>