<footer class="container-fluid card text-dark bg-secondary mt-4 pt-2">
	<div class="row px-xl-5 pt-5">
		<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
			<a href="" class="text-decoration-none">
				<h1 class="mb-4 display-5 font-weight-semi-bold">XU STORE</h1>
			</a>
			<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
			<p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i></p>
			<p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i></p>
			<p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i></p>
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
						<a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
						<a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
						<a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
						<a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
						<a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
						<a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
						<a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
						<a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
						<a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
						<a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Theo dõi chúng tôi</h5>
					<div class="d-flex flex-column justify-content-start">
						<p class="mb-2"><i class="fa-brands fa-facebook text-primary mr-3"></i></p>
						<p class="mb-2"><i class="fa-brands fa-facebook-messenger text-primary mr-3"></i></p>
						<p class="mb-0"><i class="fa-brands fa-instagram text-primary mr-3"></i></i></p>
					</div>
					<h5 class="font-weight-bold text-dark mb-4"> Chấp nhận thanh toán</h5>
					<div class="d-flex flex-column justify-content-start">
						<img class="img-fluid" src="img/payments.png" alt="">
					</div>

					</div>
				</div>
			</div>
		</div>
	</div>
<hr class="border-2">
	<div class="row border-top border-light mx-xl-5 py-4">
		<div class="col-md-6 px-xl-0">
			<p class="mb-md-0 text-center text-md-left text-dark">
				<a class="text-dark font-weight-semi-bold" href="">Xu Store</a>. HVNH. Nhóm 5
			</p>
		</div>
	</div>
</footer>
</body>

<script>
	const dropdown =  document.querySelector('.dropdown-toggle');
	// dropdown.classList.toggle('active');

	dropdown.addEventListener('click',handleClick)

	function handleClick(){
		document.querySelector('.dropdown-menu').classList.toggle('active');
	}
let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}
</script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</html>
