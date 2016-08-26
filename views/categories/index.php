<h2 align="center">hola categorias</h2>
<center>
<table style="background-color: orange; margin: 15px; padding: 15px" border="1" align="center">
	<tr>
		<td>Id</td>
		<td>name</td>
		<td>Action</td>	
		
	</tr>
<?php foreach ($categories as $category ): ?>
    <tr>
		<td><?php echo $category['id']; ?></td>
		<td><?php echo $category['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>
</center>


