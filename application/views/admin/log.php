<html>
<head>
<title>My Form</title>
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>

<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username'); ?>
<h5>Password</h5>

<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<?php echo form_error('password'); ?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
