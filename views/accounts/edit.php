<form action="<?php echo APP_URL; ?>accounts/edit" method="POST">
<input type="hidden" name="id" value="<?php echo $account['id']; ?>">
<p><label for="name">id: <?php echo $account["id"]; ?></label>
<p><label for="name">user_id: <?php echo $account["user_id"]; ?></label>


<p><label for="name">Nombre de Tarjeta Nueva:</label> 
<input type="text" name="new_name"></p>


<p><input type="submit" value="update"></p>

</form>

