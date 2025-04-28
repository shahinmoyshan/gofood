<?php
/**
 * Render User Orders Tab.
 *
 * @package goFood
 */

?>
<div class="row g-4 mb-4">
	<div class="col-md-4">
		<div class="account-card">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<h6 class="text-muted mb-2">Total Orders</h6>
					<div class="count">24</div>
				</div>
				<div class="bg-light-red p-3 rounded-circle">
					<i class="fas fa-shopping-bag text-primary-red" style="font-size: 1.5rem;"></i>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="account-card">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<h6 class="text-muted mb-2">Pending Orders</h6>
					<div class="count">3</div>
				</div>
				<div class="bg-light-red p-3 rounded-circle">
					<i class="fas fa-clock text-primary-red" style="font-size: 1.5rem;"></i>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="account-card">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<h6 class="text-muted mb-2">Loyalty Points</h6>
					<div class="count">1,250</div>
				</div>
				<div class="bg-light-red p-3 rounded-circle">
					<i class="fas fa-award text-primary-red" style="font-size: 1.5rem;"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="order-table">
	<div class="p-3 border-bottom d-flex justify-content-between align-items-center">
		<h5 class="mb-0 fw-bold">Recent Orders</h5>
		<button class="btn btn-sm btn-outline-red">View All</button>
	</div>
	
	<div class="table-responsive">
		<table class="table table-hover mb-0">
			<thead>
				<tr>
					<th>Order ID</th>
					<th>Date</th>
					<th>Items</th>
					<th>Total</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>#FX-78945</td>
					<td>12 Jun 2023</td>
					<td>3</td>
					<td>$42.50</td>
					<td><span class="order-status status-completed">Completed</span></td>
				</tr>
				<tr>
					<td>#FX-78123</td>
					<td>10 Jun 2023</td>
					<td>5</td>
					<td>$68.75</td>
					<td><span class="order-status status-processing">Processing</span></td>
				</tr>
				<tr>
					<td>#FX-77982</td>
					<td>05 Jun 2023</td>
					<td>2</td>
					<td>$29.90</td>
					<td><span class="order-status status-pending">Pending</span></td>
				</tr>
				<tr>
					<td>#FX-77541</td>
					<td>28 May 2023</td>
					<td>4</td>
					<td>$55.20</td>
					<td><span class="order-status status-cancelled">Cancelled</span></td>
				</tr>
				<tr>
					<td>#FX-77129</td>
					<td>22 May 2023</td>
					<td>1</td>
					<td>$15.99</td>
					<td><span class="order-status status-completed">Completed</span></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="p-3 border-top d-flex justify-content-between align-items-center">
		<div class="text-muted small">Showing 1 to 5 of 24 orders</div>
		<nav aria-label="Page navigation">
			<ul class="pagination pagination-sm mb-0">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
