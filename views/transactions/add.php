<h2>transaccion nueva</h2>

<form action="<?php echo APP_URL; ?>transactions/add" method="POST">
	<p>
		<select name="account_id">
			<?php
			foreach ($accounts as $account): ?>
				<option value="<?php echo $account["id"]; ?>">
				<?php echo $account["name"]; ?>
				</option>
			<?php endforeach; ?>
		</select>
	</p>
	<p>
		<select name="category_id">
			<?php
			foreach ($categories as $category): ?>
				<option value="<?php echo $category["id"]; ?>">
				<?php echo $category["name"]; ?>
				</option>
			<?php endforeach; ?>
		</select>
	</p>
	<p>
		<label for="description">Description: </label>
		<input type="text" name="description">
	</p>
	<p>
		<label for="amount">Amount: </label>
		<input type="number" name="amount">
	</p>
	<p>
		<label for="date">Date: </label>
		<input type="text" name="date">
	</p>

	<p>
		<input type="submit" value="Save">
	</p>
</form>