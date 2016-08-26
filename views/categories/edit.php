<form action="<?php echo APP_URL; ?>categories/edit" method="POST">
<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
<p><label for="name">id: <?php echo $category['id']; ?></label></p>
<p><label for="name">Nombre de Categorya Nueva:</label> 
<input type="text" name="new_name"></p>


<p><input type="submit" value="update"></p>

</form>

