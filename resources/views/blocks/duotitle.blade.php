@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
$sectionClass .= $wide ? ' wide' : '';
$sectionClass .= $nomt ? ' !mt-0' : '';
$sectionClass .= $gap ? ' wider-gap' : '';
$sectionClass .= $lightbg ? ' section-light' : '';
$sectionClass .= $graybg ? ' section-gray' : '';
$sectionClass .= $whitebg ? ' section-white' : '';
$sectionClass .= $brandbg ? ' section-brand' : '';

$targets = [
0 => '#produkty',
1 => '#doradztwo',
2 => '#ochrona-biologiczna',

];
@endphp

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="duotitle relative -smt {{ $sectionClass }} {{ $section_class }}">

	<div class="__wrapper c-main">

		<div class="grid grid-cols-1 lg:grid-cols-12 items-start gap-10 lg:gap-16 z-10 relative">

			<div class="__content lg:col-span-6 py-0 lg:sticky lg:top-36 z-20">
				@if (!empty($g_duotitle['title']))
				<p data-gsap-element="title" class="title m-title text-lg text-brand-green font-semibold">{{ $g_duotitle['title'] }}</p>
				@endif
				<h2 data-gsap-element="header" class="text-h2 leading-tight tracking-tight mt-1 text-carbon">{{ $g_duotitle['header'] }}</h2>

				@if (!empty($g_duotitle['txt']))
				<div data-gsap-element="txt" class="mt-4 text-base text-carbon leading-relaxed">
					{!! $g_duotitle['txt'] !!}
				</div>
				@endif

				@if (!empty($g_duotitle['button']))
				<a data-gsap-element="btn" class="main-btn m-btn second-btn mt-6 inline-block" href="{{ $g_duotitle['button']['url'] }}">{{ $g_duotitle['button']['title'] }}</a>
				@endif
			</div>

			<div class="lg:col-span-6 w-full z-10 relative lg:pt-0">

				@if(!empty($g_duotitle['image']['url']))
				<div data-gsap-element="img" class="hidden lg:block absolute top-0 right-0 w-[130%] h-[320px] z-0 pointer-events-none overflow-visible">
					<img class="absolute right-0 bottom-0 w-auto h-full max-w-none object-contain origin-bottom-right scale-110" src="{{ $g_duotitle['image']['url'] }}" alt="{{ $g_duotitle['image']['alt'] ?? '' }}" loading="lazy" decoding="async">
				</div>
				<div class="block lg:hidden w-full mb-6">
					<img class="w-full h-auto object-contain" src="{{ $g_duotitle['image']['url'] }}" alt="{{ $g_duotitle['image']['alt'] ?? '' }}">
				</div>
				@endif

				@if(!empty($r_duotitle))
				<div class="__cards-repeater flex flex-col gap-5 w-full relative z-10 lg:mt-[340px]">
					@foreach($r_duotitle as $card)
					@php
					$cardTarget = $targets[$loop->index] ?? '#';
					$bgColor = !empty($card['card_bg']) ? $card['card_bg'] : 'bg-primary-100';
					@endphp

					<a data-gsap-element="stagger" href="{{ $cardTarget }}" class="group block no-underline cursor-pointer">
						<div class="grid grid-cols-1 md:grid-cols-[2fr_3fr] md:flex-row items-stretch {{ $bgColor }} transition-all duration-300 rounded-3xl shadow-sm relative overflow-hidden min-h-[300px] cursor-pointer">

							@if(!empty($card['card_image']))
							<div class="mb-0">
								<img src="{{ $card['card_image']['url'] }}" alt="{{ $card['card_title'] }}" class=" inset-0 w-full max-h-[200px] md:max-h-none h-full object-cover  ">
							</div>
							@endif

							<div class="flex-grow p-6 md:p-8 pr-16 flex flex-col justify-center">
								<h4 class="text-xl font-bold text-carbon mb-2 md:mb-5 tracking-normal leading-tight">
									{{ $card['card_title'] }}
								</h4>
								@if(!empty($card['card_text']))
								<p class="text-sm text-carbon leading-snug m-0">
									{{ $card['card_text'] }}
								</p>
								@endif
							</div>

							<div class="absolute bottom-[-6px] right-[-3px] bg-primary w-12 h-12 md:w-16 md:h-16 rounded-full flex items-center justify-center text-white transition-all duration-300 z-20 group-hover:scale-110 group-hover:bg-primary-300 group-hover:text-carbon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 13 12" fill="none" class="transition-transform duration-300 group-hover:translate-x-0.5">
									<path d="M12.7296 5.31498C12.7293 5.31469 12.7291 5.31445 12.7287 5.31406L7.91118 0.281803C7.55027 -0.0951806 6.96652 -0.0937777 6.60727 0.285093C6.24806 0.663916 6.24945 1.27664 6.61036 1.65367L9.84486 5.03226L0.921985 5.03226C0.412773 5.03226 0 5.46552 0 6C0 6.53448 0.412773 6.96774 0.921985 6.96774L9.84482 6.96774L6.6104 10.3463C6.24949 10.7234 6.24811 11.3361 6.60731 11.7149C6.96657 12.0938 7.55037 12.0951 7.91123 11.7182L12.7288 6.68594C12.7291 6.68565 12.7293 6.68531 12.7296 6.68502C13.0907 6.30673 13.0896 5.69202 12.7296 5.31498Z" fill="currentColor" />
								</svg>
							</div>

						</div>
					</a>
					@endforeach
				</div>
				@endif

			</div>

		</div>

	</div>

</section>