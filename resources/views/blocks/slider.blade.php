<section
    data-gsap-anim="section"
    @if(!empty($section_id)) id="{{ $section_id }}" @endif
    @class([ 'b-slider relative -smt' ,
    $sectionClass=> filled($sectionClass),
    $section_class => filled($section_class),
    ]) topic="cards-slider">

	<div class="__blur absolute "></div>
	<div class="__blur-left absolute "></div>    <div class="__wrapper c-main">
        <div class="__content">
            <div data-gsap-element="header" class="__wrapper block w-full md:w-1/2 pb-10">
                <h2 class="text-h2">{{ $g_slider['title']}}</h2>
                <div class="mt-4">{!! $g_slider['text'] !!}</div>
            </div>

            <div class="swiper slider-swiper !overflow-visible">
                <div data-gsap-element="swiper" class="swiper-wrapper">
                    @foreach($r_slider as $card)
                    <div class="swiper-slide !h-auto"> 
                        <div class="__card relative bg-white rounded-[24px] md:rounded-[32px] pt-5 pb-5 px-5 flex flex-col justify-start items-center w-full h-auto box-border transition-all">
                            
                            <div class="flex flex-col items-center justify-start w-full min-h-0">
                                
                                @if(!empty($card['logo']))
                                <div class="__card-logo flex items-center justify-center w-full shrink-0">
                                    <img class="object-contain" src="{{ $card['logo']['url'] }}" alt="{{ $card['logo']['alt'] ?? '' }}">
                                </div>
                                @endif

                                @if(!empty($card['image']))
                                <div class="__card-product-image flex items-center justify-center w-full min-h-0">
                                    <img class="object-contain" src="{{ $card['image']['url'] }}" alt="{{ $card['image']['alt'] ?? '' }}">
                                </div>
                                @endif

                            </div>

                            @if(!empty($card['txt']))
                            <div class="w-full text-center mt-3 shrink-0">
                                <div class="__txt line-clamp-2 text-xs md:text-sm text-gray-500">{!! $card['txt'] !!}</div>
                            </div>
                            @endif

                        </div>
                    </div>
                    @endforeach
                </div>

                <div data-gsap-element="arrows" class="absolute top-1/2 left-0 w-full -translate-y-1/2 z-30 flex justify-between items-center pointer-events-none">
                    <div class="__prev rounded-full bg-secondary h-10 w-10 md:h-20 md:w-20 flex items-center justify-center pointer-events-auto -translate-x-1/2 cursor-pointer transition-all duration-400">
                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 13 12" fill="none" class="w-4 h-4 md:w-6 md:h-6">
                            <path d="M0.270429 5.31498L5.08882 0.281803C5.44973 -0.0951806 6.03348 -0.0937777 6.39273 0.285093C6.75194 0.663916 6.75055 1.27664 6.38964 1.65367L3.15514 5.03226L12.078 5.03226C12.5872 5.03226 13 5.46552 13 6C13 6.53448 12.5872 6.96774 12.078 6.96774L3.15518 6.96774L6.3896 10.3463C6.75051 10.7234 6.75189 11.3361 6.39269 11.7149C6.03344 12.0938 5.44963 12.0951 5.08877 11.7182L0.271213 6.68594C0.270383 6.68502 -0.0907122 6.30673 0.270429 5.31498Z" fill="#FFF" />
                        </svg>
                    </div>
                    <div class="__next rounded-full bg-secondary h-10 w-10 md:h-20 md:w-20 flex items-center justify-center pointer-events-auto translate-x-1/2 cursor-pointer transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 13 12" fill="none" class="w-4 h-4 md:w-6 md:h-6">
                            <path d="M12.7296 5.31498L7.91118 0.281803C7.55027 -0.0951806 6.96652 -0.0937777 6.60727 0.285093C6.24806 0.663916 6.24945 1.27664 6.61036 1.65367L9.84486 5.03226L0.921985 5.03226C0.412773 5.03226 0 5.46552 0 6C0 6.53448 0.412773 6.96774 0.921985 6.96774L9.84482 6.96774L6.6104 10.3463C6.24949 10.7234 6.24811 11.3361 6.60731 11.7149C6.96657 12.0938 7.55037 12.0951 7.91123 11.7182L12.7288 6.68594C12.7296 6.68502 13.0907 6.30673 12.7296 5.31498Z" fill="#FFF" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>