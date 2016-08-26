<h2 align="center">Listado de cuentas</h2>

<center>
<table style="background-color: orange; margin: 15px; padding: 15px" border="1" align="center">
	<tr>
		<td>Id</td>
		<td>User_id</td>	
		<td>Name</td>
		<td>Action</td>
	</tr>
<?php foreach ($accounts as $account ): ?>
    <tr>
		<td><?php echo $account['id']; ?></td>
		<td><?php echo $account['user_id']; ?></td>	
		<td><?php echo $account['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>
</center>