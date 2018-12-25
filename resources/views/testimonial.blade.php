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
										@foreach($testimonials as $key => $testimonial)
										<li data-target="#carouselExampleIndicators"
											data-slide-to="{{ $key }}" class='{{ $key == '0' ? 'active' : ''}}'></li>
										@endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($testimonials as $key => $testimonial)
												<div class="carousel-item {{ $key == '0' ? 'active' : ''}}">
                            <div class="item-test">
															<div class="photo client-{{ $key + 1 }}"
																style="background-image: 
																url('../storage/TestimonialPhotos/client-{{ $key + 1}}.jpeg')"></div>
                                <div class="name">
                                    <div class="p1">
                                        {{ $testimonial->name }}
                                    </div>
                                </div>
                                <div class="location">
                                    <div class="p1">
                                        {{ $testimonial->location }}
                                    </div>
                                </div>

                                <div class="text">
																	<p class="p1">{{ $testimonial->testimonial }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
