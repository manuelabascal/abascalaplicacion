<h2 align="center">Add Accounts</h2>


<form action="<?php echo APP_URL; ?>accounts/add" method="POST">
<p><label for="name">Name: </label>
<input type="text" name="name"></p>
<p>
<select name="user_id" >
<?php 

	 foreach ($users as $user): ?>

	 <label for="name">Elija su cuenta de usuario: </label>
       <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
	 	<?php endforeach; ?>
</select></p><br>

<input  value="Save" name="button" type="submit">

</form>	