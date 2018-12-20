@section('testimonials')
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
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next control" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>

                </a>
            </div>
        </div>

    </div>
</section>
@endsection
