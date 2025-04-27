<?php
/**
 * The homepage template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goFood
 */

get_header();

?>

<main id="primary" class="site-main">

	<section id="hero-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-5 pb-4 ps-lg-0 text-center text-lg-start d-flex flex-column justify-content-center align-items-center align-items-lg-start">
					<h1 class="display-4 fw-semibold"><span class="text-dark-red">Fast, Fresh <br/> & Right</span> To Your Door</h1>
					<p class="fs-4 fw-light">Order dishes from favorite restaurants near you.</p>
					<div class="mt-3">
						<a href="" class="btn btn-primary-red d-inline-block px-4 fs-5">Shop Now</a>
					</div>
				</div>
				<div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
					<img id="hero-banner-img" class="mx-auto me-lg-0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-banner.webp" alt="Hero Banner">
				</div>
			</div>
		</div>
	</section>

	<div class="section-spacer"></div>

	<section id="features-products">
		<div class="container">
			<div class="row">
				<div class="col-12 pb-4 mb-2">
					<h3 class="fw-bold">Featured Products</h3>
				</div>
				<div class="col-12 mb-4 pb-2">
					<div id="food-categories">
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/13325/13325375.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Pizza</span>
						</a>
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/8504/8504028.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Thai</span>
						</a>
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/3075/3075977.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Burgers</span>
						</a>
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/9362/9362027.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Chinese</span>
						</a>
						
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/783/783075.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Desert</span>
						</a>
						
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/5087/5087281.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Fast Food</span>
						</a>

						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/6122/6122389.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Chicken</span>
						</a>
						
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/2718/2718224.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Asian</span>
						</a>
						
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/6920/6920176.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Japanese</span>
						</a>
						
						<a href="" class="category-item">
							<img src="https://cdn-icons-png.freepik.com/512/6483/6483896.png?ga=GA1.1.200560356.1727600189" alt="">
							<span>Sushi</span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-4 col-lg-3">
					<div class="product-item shadow-sm">
						<a href="" class="product-item-img">
							<span class="product-item-discount">Save 20%</span>
							<img src="https://img.cdn4dd.com/p/fit=cover,width=600,height=300,format=auto,quality=50/media/photosV2/8fc76aa1-1f86-4835-b5b7-1deecc3a7033-75bda54a-c832-4d4f-a472-f9d3ffe4d965-retina-large.jpg" alt="">
						</a>
						<div class="product-item-description">
							<a href=""><h4 class="product-item-title">Ayozon Restora, Shahi Haleem Mix for Family Pack 3x55</h4></a>
							<div class="product-action">
								<!-- <span class="gofood-Price-amount amount"><bdi><span class="gofood-Price-currencySymbol">$</span>22.00</bdi></span> -->
								<span class="price"><del aria-hidden="true"><span class="amount"><bdi><span class="gofood-Price-currencySymbol">$</span>25.00</bdi></span></del> <span class="screen-reader-text">Original price was: $25.00.</span><ins aria-hidden="true"><span class="gofood-Price-amount amount"><bdi><span class="gofood-Price-currencySymbol">$</span>22.00</bdi></span></ins></span>
								<button class="btn btn-outline-danger btn-sm">
									<i class="fas fa-shopping-cart fs-5"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-spacer"></div>
	
</main>


<?php
get_footer();
