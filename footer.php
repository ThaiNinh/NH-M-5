<footer class="container-fluid card text-dark bg-secondary mt-4 pt-2">
	<div class="row px-xl-5 pt-5">
		<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
			<a href="" class="text-decoration-none">
				<h1 class="mb-4 display-5 font-weight-semi-bold">XU STORE</h1>
			</a>
			<p>Dẫn đầu xu hướng mới</p>
			<p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Hà Nội</p>
			<p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>xustore@gmail.com</p>
			<p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>098323645</p>
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<div class="col-md-6 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Truy cập</h5>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
						<a class="text-dark mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Sản phẩm</a>
						<a class="text-dark mb-2" href="tintuc.php"><i class="fa fa-angle-right mr-2"></i>Tin tức</a>
						<a class="text-dark mb-2" href="lienhe.php"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>

					</div>
				</div>
				<div class="col-md-4 mb-5">
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
