<h2 align="center">Listado de usuarios</h2>




<center>
<table style="background-color: orange; margin: 15px; padding: 15px" border="1" align="center" WIDTH="500">
	<tr>
		<td font="23">ID</td>
		<td>Username</td>	
		<td>Rol</td>
		<td>Action</td>
	</tr>
<?php foreach ($users as $user ): ?>
    <tr>
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['username']; ?></td>	
		<td><?php echo $user['rol']; ?></td>
		<td>
		    <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>
</center>