
<form action="<?php echo APP_URL; ?>users/add" method="post">
    <input type="hidden" name="add">
    <div class="form-group">
        <label for="username">Username: </label>
        <input class="form-control" type="text" name="username">
    </div>
    <div class="form-group">
        <label style="1px " for="password">Password: </label>
        <input class="form-control" type="password" type="text" name="password">
    </div>
    <div class="form-group">
        <label size="50" for="rol">Rol: </label>
        <input class="form-control" type="text" name="rol">
    </div>
    <input type="submit" value="Save" class="btn btn-default">
</form>




