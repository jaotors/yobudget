<!DOCTYPE html>
<html>
<head>
	<title>Yo! Budget</title>
	<meta name="keywords" content="YO!,budget">
	<meta name="description" content="Learn how to save and budget all the time, Yo Budget!">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" type="text/css">
</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="head-content column col-xs-12">
					<a href="#" class="menu-bars"><i class="fa fa-lg fa-bars"></i></a>
					<div class="head-main-content">
						<div class="sub-container">
							<div class="title-money-container">
								<h1 class="page-title">Dashboard</h1>
								<p class="current-money"><span class="img-icon--wallet-o"></span> : 1,000.00</p>
							</div>
							<p class="date-today">03/14/2015</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav>
			<ul>
				<li class="active"><a href="#"><span class="fa fa-home fa-lg"></span></a></li>
				<li><a href="#"><span class="logo-pig"></span></a></li>
				<li><a href="#"><span class="fa fa-pie-chart fa-lg"></span></a></li>
				<li><a href="#"><span class="fa fa-puzzle-piece fa-lg"></span></a></li>
			</ul>
		</nav>
	</header>

	<main>
		<div class="content-container ">
			<div class="dashboard-container">
				<ul class="transac-container">
					<li>
						<div class="date-summary-exp">
							<p class="date-title">Today</p>
							<p class="summary-exp">-2,756.00 PHP</p>
						</div>
						<ul class="transac-list">
							<li>
								<div class="transac-list-cont">
									<div class="img-icon fa fa-cutlery"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title">Breakfast in the morning</p>
											<p class="category">Food</p>
										</div>
										<div class="money-container">
											<p class="money--exp">-25.00 PHP</p>
											<p class="from-money">Cash on Hand</p>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon fa fa-car"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title">Gas</p>
											<p class="category">Car</p>
										</div>
										<div class="money-container">
											<p class="money--exp">-700.00 PHP</p>
											<p class="from-money">Credit/Debit Card</p>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon fa fa-subway"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title">Going to office</p>
											<p class="category">Transport</p>
										</div>
										<div class="money-container">
											<p class="money--exp">-31.00 PHP</p>
											<p class="from-money">Cash on Hand</p>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon fa fa-beer"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title">with Friends</p>
											<p class="category">Credit</p>
										</div>
										<div class="money-container">
											<p class="money--exp">-500.00 PHP</p>
											<p class="from-money">Cash on Hand</p>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon fa fa-credit-card-alt"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title">utang kay Heisenberg</p>
											<p class="category">Credit</p>
										</div>
										<div class="money-container">
											<p class="money--exp">-1500.00 PHP</p>
											<p class="from-money">Cash on Hand</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="bank-container ">
				<ul class="transac-container">
					<li>
						<div class="date-summary-exp">
							<p class="date-title">This Month</p>
						</div>
						<ul class="transac-list">
							<li>
								<div class="transac-list-cont">
									<div class="img-icon--inc"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title--inc">Cash on Hand</p>
										</div>
										<div class="money-container">
											<p class="money--inc">1,000.00</p>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon--bank"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title--bank">Bank</p>
										</div>
										<div class="money-container">
											<p class="money--bank">9,000.00</p>
										</div>
									</div>
								</div>

								<ul class="transac-list-details">
									<li>
										<div class="detail-desc">
											<p class="title">BPI</p>
											<p class="category category--bank">Bank</p>
										</div>
										<div class="money-container">
											<p class="money">2,000.00</p>
										</div>
									</li>

									<li>
										<div class="detail-desc">
											<p class="title">EastWest Bank</p>
											<p class="category category--bank">Bank</p>
										</div>
										<div class="money-container">
											<p class="money">7,000.00</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon--loan fa fa-credit-card-alt"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title--loan">loans</p>
										</div>
										<div class="money-container">
											<p class="money--loan">1,600.00</p>
										</div>
									</div>
								</div>
								<ul class="transac-list-details">
									<li>
										<div class="detail-desc">
											<p class="title">Carlo</p>
											<p class="category category--loan">Credit</p>
										</div>
										<div class="money-container">
											<p class="money">100.00</p>
										</div>
									</li>

									<li>
										<div class="detail-desc">
											<p class="title">Rigor</p>
											<p class="category category--loan">Credit</p>
										</div>
										<div class="money-container">
											<p class="money">500.00</p>
										</div>
									</li>

									<li>
										<div class="detail-desc">
											<p class="title">Kuya Leo</p>
											<p class="category category--loan">Credit</p>
										</div>
										<div class="money-container">
											<p class="money">1,000.00</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="transac-list-cont">
									<div class="img-icon--exp fa fa-shopping-cart"></div>
									<div class="transac-details-container">
										<div class="detail-desc">
											<p class="title--exp">expenses</p>
										</div>
										<div class="money-container">
											<p class="money--exp">8,000.00</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="category-container">
				<ul class="transac-container">
					<li>
						<div class="img-icon fa fa-cutlery"></div>
						<div class="transac-details-container">
							<p class="title">Food</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-car"></div>
						<div class="transac-details-container">
							<p class="title">Car</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-subway"></div>
						<div class="transac-details-container">
							<p class="title">Transport</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-beer"></div>
						<div class="transac-details-container">
							<p class="title">Entertainment</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-credit-card"></div>
						<div class="transac-details-container">
							<p class="title">Credit</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-suitcase"></div>
						<div class="transac-details-container">
							<p class="title">Salary</p>
						</div>
					</li>

					<li>
						<div class="img-icon fa fa-wrench"></div>
						<div class="transac-details-container">
							<p class="title">Tool</p>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</main>


	<footer>
		<div class="jt-logo"><img src="{{URL::asset('images/jaotors-logo.png')}}" alt="JAOTORS"></div>
	</footer>






	<script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/scripts.js')}}" type="text/javascript"></script>

	<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.14.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
