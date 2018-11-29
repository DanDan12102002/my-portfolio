<?php
	# -------- META---------- #
$meta = new stdClass();
	# Название сайта
$meta->sitename = '';
	# Заголовок
$meta->title = '';
	# Описание
$meta->desc = '';
	# Текущий линк на страницу
	//$meta->url = getBaseUrl();
	# Картинка для соц. сетей, размер: 1200x630px
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">

<head>
	<title>
		Portfolio
	</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="image_src" href="{{ asset('images/social.jpg') }}" />

	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="{{ asset('images/social.jpg') }}" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="{{ asset('images/social.jpg') }}">
	<meta itemprop="image" content="{{ asset('images/social.jpg') }}" />

	<script src="./node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
	<script src="./assets/public/js/jquery.validate.min.js"></script>
	<link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="./node_modules/popper.js/dist/popper.js" crossorigin="anonymous"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="./node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">



	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
	<script src="./node_modules/wow.js/dist/wow.min.js"></script>
</head>

<body>
	<header>
		<div class="container">
			<div class="row head">
				<div class="col-sm-3">
					<div class="logo">
						<img src="{{ asset('images/logo.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row menu">
						<div class="col-sm-3">
							<div class="link"><a class="go-to-block" data-target=".about-me">Обо мне</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a class="go-to-block" data-target=".service">Услуги</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a class="go-to-block" data-target=".portfolio">Портфолио</a></div>
						</div>
						<div class="col-sm-3">
							<div class="link"><a href="" class="go-to-block" data-target=".contacts">Контакты</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row networks">
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.facebook.com/profile.php?id=100017213259299&ref=bookmarks"><i class="fa fa-facebook-f"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.instagram.com/dan_prozar/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://vk.com/dan_proz"><i class="fa fa-vk"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="home">
		<div class="container">
			<div class="row content">
				<div class="col-sm-6">
					<div class="welcome-text">
						<div class="hello">
							<div class="p">
								Добро пожаловать! <span class="smaller">Меня зовут</span>
							</div>
						</div>
						<div class="name">
							<div class="p h1">
								<span class="d">Д</span>аня Прозар
							</div>
						</div>
						<div class="spec-on">
							<div class="p">
								Full-stack web разработчик
							</div>
						</div>
						<div class="text-about">
							<div class="p">
								Lorem ipsum dolor sit amet,Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.
							</div>
						</div>
					</div>
					<div class="row buttons">
						<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".portfolio">Мои работы</button></div>
						<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".hire-me">Заказать у меня сайт</button></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-me">
		<div class="container">
			<div class="title-gen">
				<div class="p1">
					Кто я?
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Full-stack web разработчик
				</div>
			</div>
			<div class="description">
				<div class="p1">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui laborum adipisci pariatur consequuntur, modi rerum error @eos magni repudiandae, est impedit provident, doloribus itaque non? Cupiditate praesentium corrupti non doloremque.
				</div>
			</div>
			<div class="row skills top">
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>HTML</p>
						<div id="html" class="progressbar" aria-valuenow="90">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>JavaScript & Frameworks</p>
						<div id="js" class="progressbar" aria-valuenow="80">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
			</div>

			<div class="row skills">
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>CSS & Preprocesors</p>
						<div id="css" class="progressbar" aria-valuenow="95">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="skill-bar">
						<p>PHP & Frameworks</p>
						<div id="php" class="progressbar" aria-valuenow="65">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>
	<section class="service">
		<div class="container">
			<div class="title">
				<div class="p1">
					Услуги
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit.
				</div>
			</div>

			<div class="services row">
				<div class="col-sm-4">
					<div class="card c-1">
						<div class="card-head">
							<div class="icon">
								<img src="{{ asset('images/landing.svg') }}" alt="">
							</div>
						</div>
						<div class="card-body">
							<h5 class="card-title title"><div class="p1"><b>Разработка Landing Page</b></div></h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officiis eveniet laudantium nesciunt animi error numquam corrupti, fuga culpa quos illum excepturi perferendis! Quis reprehenderit eos dolore expedita, temporibus officia!</p>
						</div>
						<div class="foot-card">
							<div class="price-block">
								<p>от $50</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card c-2">
						<div class="card-head">
							<div class="icon">
								<img src="{{ asset('images/cms.svg') }}" alt="">
							</div>
						</div>
						<div class="card-body">
							<h5 class="card-title title"><div class="p1"><b>Разработка проекта под CMS</b></div></h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officiis eveniet laudantium nesciunt animi error numquam corrupti, fuga culpa quos illum excepturi perferendis! Quis reprehenderit eos dolore expedita, temporibus officia!</p>
						</div>
						<div class="foot-card">
							<div class="price-block">
								<p>от $100</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card c-3">
						<div class="card-head">
							<div class="icon">
								<img src="{{ asset('images/full-stack.svg') }}" alt="">
							</div>
						</div>
						<div class="card-body">
							<h5 class="card-title title"><div class="p1"><b>Full-stack web разработка</b></div></h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officiis eveniet laudantium nesciunt animi error numquam corrupti, fuga culpa quos illum excepturi perferendis! Quis reprehenderit eos dolore expedita, temporibus officia!</p>
						</div>
						<div class="foot-card">
							<div class="price-block">
								<p>от $250</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row buttons">
				<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".portfolio">Мои работы</button></div>
				<div class="col-sm-6"><button class="btn btn-banner go-to-block" data-target=".hire-me">Заказать у меня сайт</button></div>
			</div>
		</div>
	</section>
	<section class="benefits">
		<div class="container">
			<div class="title">
				<div class="p1">
					Преимущества работы со мной
				</div>
			</div>
			<div class="benefit row">
				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<img src="{{ asset('images/speed.svg') }}" alt="">
						</div>
						<div class="title">
							<div class="p1">Скорость</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<img src="{{ asset('images/icon-work.png') }}" alt="">
						</div>
						<div class="title">
							<div class="p1">Качество</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="ser-item">
						<div class="icon">
							<!-- Some icon -->
							<img src="{{ asset('images/checked.svg') }}" alt="">
						</div>
						<div class="title">
							<div class="p1">Довольный клиент</div>
						</div>
						<div class="text">
							<div class="p1">Lorem ipsum dolor sit amet consectetur.</div>
						</div>
						<div class="row buttons">
							<div class="col-sm-12"><button class="btn btn-banner">Button</button></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="portfolio">
		<div class="container">
			<div class="title">
				<div class="p1">
					Портфолио
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Мои работы
				</div>
			</div>

			<div class="works row">

				<div class="col-sm-6">
					<div class="item">
						<img src="{{ asset('images/portfolio/item-3.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="item">
						<img src="{{ asset('images/portfolio/item-2.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="item">
						<img src="{{ asset('images/portfolio/item-1.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="item">
						<img src="{{ asset('images/portfolio/item-4.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="item">
						<img src="{{ asset('images/portfolio/item-5.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonials">
		<div class="container">
			<div class="title">
				<div class="p1">
					Отзывы
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Что говорят обо мне люди
				</div>
			</div>

			<div class="testimonal-block">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="item-test">
								<div class="photo joseph">

								</div>
								<div class="name">
									<div class="p1">
										Joseph Kent
									</div>
								</div>
								<div class="location">
									<div class="p1">
										Tampa, US
									</div>
								</div>

								<div class="text">
									<p class="p1">Стремительный и умный - Даня именно тот, кого вы ищете на Upwork!</p>
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<div class="item-test">
								<div class="photo dima">

								</div>
								<div class="name">
									<div class="p1">
										Дмитрий Сабадаш
									</div>
								</div>
								<div class="location">
									<div class="p1">
										Каменец-Подольский, Украина
									</div>
								</div>

								<div class="text">
									<p class="p1">Очень доволен работой по сайту! Все было сделано четко, так как планировалось и в очень короткий срок. Рекомендую!</p>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev control" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<i class="fa fa-chevron-left"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next control" href="#carouselExampleIndicators" role="button" data-slide="next">
						<i class="fa fa-chevron-right"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</section>
	<section class="contacts">
		<div class="container">
			<div class="title">
				<div class="p1">
					Как связаться со мной
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, assumenda.
				</div>
			</div>
			<div class="contact-block">
				<form action="" method="post">
					<div class="form-controll contact">
						<div class="row">
							<div class="col-sm-6">
								<div class="inputblock">
									<input type="email" placeholder="Введите ваш e-mail" name="email" required />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="inputblock">
									<input type="text" placeholder="Введите ваше имя" name="name" required />
								</div>
							</div>
						</div>
						<div class="inputblock">
							<textarea placeholder="Введите ваше сообщение" name="msg" required></textarea>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-sm-12"><button type="submit" class="btn send-ajax">Написать мне</button></div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="hire-me">
		<div class="container">
			<div class="title">
				<div class="p1">
					Хотите нанять меня?
				</div>
			</div>
			<div class="pod-title">
				<div class="p1">
					Вы всегда сможете обратится ко мне
				</div>
			</div>
			<div class="hire-block">
				<form action="" method="post">
					<div class="form-controll hire">
						<div class="inputblock">
							<input type="email" placeholder="Введите ваш e-mail" name="email" required />
						</div>
						<div class="inputblock">
							<textarea placeholder="Введите ваше сообщение" name="msg" required></textarea>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-sm-12"><button type="submit" class="btn send-ajax">Нанять меня</button></div>
					</div>
				</form>
			</div>

		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row head">
				<div class="col-sm-3">
					<div class="logo">
						<img src="{{ asset('images/logo.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row menu">
						<div class="col-sm-4">
							<div class="link"><a class="go-to-block" data-target=".about-me">Обо мне</a></div>
						</div>
						<div class="col-sm-4">
							<div class="link"><a class="go-to-block" data-target=".portfolio">Портфолио</a></div>
						</div>
						<div class="col-sm-4">
							<div class="link"><a class="go-to-block" data-target=".service">Услуги</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row networks">
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.facebook.com/profile.php?id=100017213259299&ref=bookmarks"><i class="fa fa-facebook-f"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.instagram.com/dan_prozar/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://vk.com/dan_proz"><i class="fa fa-vk"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="copyright">
				<div class="p1">
					Copyright <?php echo date('Y'); ?> Dan Prozar. All Rights Resered
				</div>
			</div>
		</div>
	</footer>

	<div class="to-top fadeIn go-to-block" data-target=".home">
		<span class="icon"><i class="fa fa-rocket"></i></span>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
