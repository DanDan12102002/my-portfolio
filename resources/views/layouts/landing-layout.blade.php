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
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="image_src" href="{{ asset('images/social.jpg') }}" />

	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="{{ asset('images/social.jpg') }}" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="{{ asset('images/social.jpg') }}">
    <meta itemprop="image" content="{{ asset('images/social.jpg') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
</head>

<body>

	@yield('header')
	@yield('home')
	@yield('about-me')
	@yield('service')
	@yield('benefits')
	@yield('portfolio')
	@yield('testimonials')
	@yield('contacts')
	@yield('hire-me')
	@yield('footer')
	@yield('to-top')

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
