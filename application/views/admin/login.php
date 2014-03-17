<html>
<head>
<title>My Form</title>
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>First name</h5>

<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" size="50" />
<?php echo form_error('first_name'); ?>

<h5>Last name</h5>

<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" size="50" />
<?php echo form_error('last_name'); ?>

<h5>phone No</h5>

<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" size="50" />
<?php echo form_error('phone'); ?>

<h5>ID No</h5>

<input type="text" name="id" value="<?php echo set_value('id'); ?>" size="50" />
<?php echo form_error('id'); ?>
<h5>Username</h5>

<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username'); ?>
<h5>Password</h5>

<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<?php echo form_error('password'); ?>
<h5>Password Confirm</h5>

<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<?php echo form_error('passconf'); ?>
<h5>Email Address</h5>

<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<?php echo form_error('email'); ?>
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
