@extends('layouts.landing-layout')
@section('header')
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
								<a href="https://www.facebook.com/profile.php?id=100017213259299&ref=bookmarks"><i class="fab fa-facebook-f"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.instagram.com/dan_prozar/"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://vk.com/dan_proz"><i class="fab fa-vk"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>
@endsection

@section('home')
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
@endsection

@section('about-me')
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
					{{ setting('site.about-me') }}
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
						<div id="php" class="progressbar" aria-valuenow="70">
							<div class="bar" role="progressbar"></div>
							<span class="label"></span>
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>
@endsection

@section('service')
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
@endsection

@section('benefits')
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
@endsection

@section('portfolio')
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
@endsection

@include('testimonial')



@section('hire-me')
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

                <form action="{{ URL::to('/submit') }}" method="post">
                    @csrf
					<div class="form-controll hire">
						<div class="inputblock">
							<input type="email" placeholder="Введите ваш e-mail" name="email"/>
						</div>
						<div class="inputblock">
							<textarea placeholder="Введите ваше сообщение" name="msg"></textarea>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-sm-12"><button type="submit" class="btn send-ajax">Нанять меня</button></div>
					</div>
                </form>

                @if($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
							    <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
			</div>

		</div>
	</section>
@endsection


@section('footer')
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
								<a href="https://www.facebook.com/profile.php?id=100017213259299&ref=bookmarks"><i class="fab fa-facebook-f"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://www.instagram.com/dan_prozar/"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="circle-icon">
								<a href="https://vk.com/dan_proz"><i class="fab fa-vk"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="copyright">
				<div class="p1">
					Copyright <?php echo date('Y'); ?>  Dan Prozar. All Rights Resered
				</div>
			</div>
		</div>
    </footer>

    <div class="to-top fadeIn go-to-block" data-target=".home">
        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" data-prefix="fas" data-icon="rocket" class="svg-inline--fa fa-rocket fa-w-16" role="img" viewBox="0 0 512 512"><path fill="currentColor" d="M505.1 19.1C503.8 13 499 8.2 492.9 6.9 460.7 0 435.5 0 410.4 0 307.2 0 245.3 55.2 199.1 128H94.9c-18.2 0-34.8 10.3-42.9 26.5L2.6 253.3c-8 16 3.6 34.7 21.5 34.7h95.1c-5.9 12.8-11.9 25.5-18 37.7-3.1 6.2-1.9 13.6 3 18.5l63.6 63.6c4.9 4.9 12.3 6.1 18.5 3 12.2-6.1 24.9-12 37.7-17.9V488c0 17.8 18.8 29.4 34.7 21.5l98.7-49.4c16.3-8.1 26.5-24.8 26.5-42.9V312.8c72.6-46.3 128-108.4 128-211.1.1-25.2.1-50.4-6.8-82.6zM400 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"/></svg></span>
    </div>
@endsection
