<?php
/**
 * Render User Orders Tab.
 *
 * @package goFood
 */

$user = wp_get_current_user();

?>
<div class="bg-white rounded-3 shadow-sm border p-4 p-lg-5">
	<form>
		<!-- Personal Information Section -->
		<div class="mb-5">
			<h5 class="fw-bold mb-4 pb-2 border-bottom">
				<i class="fas fa-id-card me-2 text-primary-red"></i> Personal Information
			</h5>
			
			<div class="form-group mb-4">
				<label for="fullname" class="form-label">Fullname <span class="text-danger">*</span></label>
				<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="fullname" value="<?php echo esc_attr( $user->display_name ); ?>">
			</div>
			
			<div class="form-group mb-4">
				<label for="user" class="form-label">Email Address <span class="text-danger">*</span></label>
				<input type="email" class="form-control form-control-lg fs-6 rounded-1" id="user" value="<?php echo esc_attr( $user->user_email ); ?>">
			</div>
		</div>
		
		<!-- Password Update Section -->
		<div class="mb-5">
			<h5 class="fw-bold mb-4 pb-2 border-bottom">
				<i class="fas fa-lock me-2 text-primary-red"></i> Password Update
			</h5>
			
			<div class="alert px-3 py-2 alert-warning mb-4">
				<i class="fas fa-exclamation-circle me-2"></i> Leave these fields blank if you don't want to change your password.
			</div>
			
			<div class="form-group mb-4">
				<label for="currentPassword" class="form-label">Current Password</label>
				<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="currentPassword">
			</div>
			
			<div class="form-group mb-4">
				<label for="newPassword" class="form-label">New Password</label>
				<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="newPassword">
				<div class="form-text">Minimum 8 characters with at least one number</div>
			</div>
			
			<div class="form-group mb-4">
				<label for="confirmPassword" class="form-label">Confirm New Password</label>
				<input type="password" class="form-control form-control-lg fs-6 rounded-1" id="confirmPassword">
			</div>
		</div>
		
		<!-- Form Actions -->
		<div class="d-flex justify-content-end gap-3">
			<button type="reset" class="btn fs-6 btn-outline-secondary btn-lg px-4">Cancel</button>
			<button type="submit" class="btn fs-6 btn-primary-red btn-lg px-4">Save Changes</button>
		</div>
	</form>
</div>
