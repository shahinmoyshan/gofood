<?php
/**
 * Render the login Form.
 *
 * @package goFood
 */

?>

<form action="">
	<div class="form-group mb-4">
		<label for="user" class="form-label">Email Address / Username <span class="text-danger">*</span></label>
		<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="user" placeholder="john.doe@hotmail.com">
	</div>
	<div class="form-group mb-4">
		<label for="password" class="form-label">Password <span class="text-danger">*</span></label>
		<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="password" placeholder="*******">
	</div>

	<button class="btn btn-primary-red w-100 py-2 fw-semibold text-uppercase">Login</button>
</form>
