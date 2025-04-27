<?php
/**
 * Render the Register Form
 *
 * @package goFood
 */

?>

<form action="">
	<div class="form-group mb-4">
		<label for="name" class="form-label">Fullname <span class="text-danger">*</span></label>
		<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="name" placeholder="John Doe">
	</div>
	<div class="form-group mb-4">
		<label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
		<input type="email" class="form-control form-control-lg fs-6 rounded-1" id="email" placeholder="john.doe@hotmail.com">
	</div>
	<div class="form-group mb-4">
		<label for="password" class="form-label">Password <span class="text-danger">*</span></label>
		<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="password" placeholder="*******">
	</div>
	
	<div class="form-group mb-4">
		<label for="confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
		<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="confirm_password" placeholder="*******">
	</div>

	<button class="btn btn-primary-red w-100 py-2 fw-semibold text-uppercase">Register</button>
</form>
