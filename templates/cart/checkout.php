<?php
/**
 * Render My Account Page.
 *
 * @package goFood
 */

?>
<div class="section-spacer-small"></div>

<main id="primary" class="site-main">
	<section id="cart-checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="shadow-sm border rounded py-3 px-4">
						<h4>Checkout</h4>
						<hr>
						<form action="">
							<h5 class="mb-3">Billing details</h5>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="first_name" placeholder="John">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="last_name" placeholder="Doe">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group mb-4">
										<label for="address" class="form-label">Street Address <span class="text-danger">*</span></label>
										<textarea name="" class="form-control form-control-lg fs-6 rounded-1" placeholder="1234 Main St" id="address"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="state" class="form-label">State <span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="state" placeholder="Chittagong">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="zipcode" class="form-label">Zipcode <span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="zipcode" placeholder="12345">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
										<input type="text" class="form-control form-control-lg fs-6 rounded-1" id="phone" placeholder="+1 234-567-8900">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group mb-4">
										<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
										<input type="email" class="form-control form-control-lg fs-6 rounded-1" id="email" placeholder="john.doe@hotmail.com">
									</div>
								</div>
								<div class="col-12 mt-2">
									<button class="btn btn-primary-red w-100 py-3 fs-5 fw-bold"><i class="fas fa-lock me-2"></i> Place Order</button>
									<div class="text-center mt-3">
										<small class="text-muted">
											<i class="fas fa-shield-alt me-1"></i> Secure checkout. Your information is protected.
										</small>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-5">
					<div class="shadow-sm border rounded p-3">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h4 class="mb-0">
								<i class="fas fa-shopping-cart me-2 text-primary-red"></i> Your Order
							</h4>
							<span class="badge bg-primary-red rounded-pill">2 items</span>
						</div>
						<hr>
						<table class="table border">
							<thead class="table-light">
								<tr>
									<th scope="col">Product</th>
									<th scope="col">Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="" class="fw-light text-decoration-none text-dark-red">Ayozon Restora, Haleem...</a>
										<b>x2</b>
									</td>
									<td>$20.00</td>
								</tr>
							</tbody>
						</table>
						<!-- Order Summary -->
						<div class="bg-light-red p-3 rounded-3 mb-3">
							<h6 class="fw-bold mb-3">Order Summary</h6>
							<div class="d-flex justify-content-between mb-2">
								<span class="text-muted">Subtotal (3 items)</span>
								<span>$28.50</span>
							</div>
							<div class="d-flex justify-content-between mb-2">
								<span class="text-muted">Delivery Fee</span>
								<span>$5.00</span>
							</div>
							<div class="d-flex justify-content-between mb-2">
								<span class="text-muted">Tax</span>
								<span>$1.43</span>
							</div>
							<hr class="my-2">
							<div class="d-flex justify-content-between fw-bold fs-5">
								<span>Total</span>
								<span class="text-primary-red">$34.93</span>
							</div>
						</div>
						<h5><i class="fas fa-credit-card me-2"></i> Payment</h5>
						<hr>
						<p class="text-muted mb-0">Pay with cash on delivery.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<div class="section-spacer-small"></div>
