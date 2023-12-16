<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sachhayhuce</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
	<?php
		include("layout/header.php")
		?>
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Bước 1</h2>
			</div>
			<div class="checkout-options">
				<h3>Người dùng mới</h3>
				<p>Tuỳ chọn thanh toán </p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Đăng ký tài khoản</label>
					</li>
					<li>
						<label><input type="checkbox"> Tài khoản khách</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Huỷ bỏ</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Vui lòng sử dụng Đăng ký và Thanh toán để dễ dàng truy cập vào lịch sử đặt hàng của bạn hoặc sử dụng tài khoản khách với tư cách khách</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Thông tin người mua hàng</p>
							<form>
								<input type="text" placeholder="Tên hiển thị">
								<input type="text" placeholder="Tên tài khoản">
								<input type="password" placeholder="Mật khẩu">
								<input type="password" placeholder="Xác nhận mật khẩu">
							</form>
							<a class="btn btn-primary" href="">Tiếp tục</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Hoá Đơn</p>
							<div class="form-one">
								<form>
									
									<input type="text" placeholder="Email*">
									<input type="text" placeholder="Tiêu đề">
									<input type="text" placeholder="Họ*">
									<input type="text" placeholder="Tên đệm">
									<input type="text" placeholder="Tên *">
									<input type="text" placeholder="Địa chỉ *">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Mã bưu chính *">
									<select>
										<option>-- Quốc gia --</option>
										<option>Việt Nam</option>
									</select>
									<select>
										<option>-- Tỉnh / Thành Phố  --</option>
										<option>Hà Nội</option>
									<option>Hà Tĩnh</option>
									<option>Hà Nam</option>
									<option>Bắc Ninh</option>
									<option>Bắc Giang</option>
									<option>Hồ Chí Minh</option>
									<option>Đà Nẵng</option>
									</select>
									<input type="password" placeholder="Xác nhận mật khẩu">
									<input type="text" placeholder="Số điện thoại *">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Vận chuyển</p>
							<textarea name="message"  placeholder="Ghi chú về đơn hàng của bạn, ghi chú đặc biệt khi giao hàng" rows="16"></textarea>
							<label><input type="checkbox">Vận chuyển đến địa chỉ hóa đơn</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Thanh Toán</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Tổng tiền hàng</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Số lượng trong giỏ hàng</td>
										<td>2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Phí vận chuyện</td>
										<td>4$</td>										
									</tr>
									<tr>
										<td>Tổng tiền cần trả</td>
										<td><span>$63</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Chuyển khoản trực tiếp</label>
					</span>
					<span>
						<label><input type="checkbox"> Thanh toán khi nhận hàng</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	<footer id="footer"><!--Footer-->
	<?php
		include("layout/footer.php")
		?>
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>