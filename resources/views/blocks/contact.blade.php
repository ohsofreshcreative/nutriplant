<!-- contact -->

<section
	data-gsap-anim="section"
	@if(!empty($section_id)) id="{{ $section_id }}" @endif
	@class([ 'b-contact relative -smt w-full block clear-both pt-20 pb-20 bg-gradient' ,
	$section_class=> filled($section_class),
	])>
	<div class="__blur absolute "></div>
	<div class="__blur-left absolute "></div>
	<div class="c-main relative z-2 mx-auto px-4 w-full">

		<div class="relative grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center z-10">

			<div class="__content w-full flex flex-col justify-center h-auto">

				<div class="w-full">

					@if(!empty($g_contact_1['subtitle']))
					<span class="text-brand-green !text-base font-normal tracking-wider uppercase mb-4 block">
						{!! $g_contact_1['subtitle'] !!}
					</span>
					@endif

					<h2
						data-gsap-element="header"
						class="text-white text-5xl text-h2 font-bold leading-tight mb-6 ">
						{!! $g_contact_1['header'] !!}
					</h2>

					@if(!empty($g_contact_1['description']))
					<p
						data-gsap-element="txt"
						class="text-white text-sm lg:text-base max-w-2xl mb-8 leading-relaxed opacity-90 lg:pr-12">
						{!! $g_contact_1['description'] !!}
					</p>
					@endif

				</div>

				@if(!empty($g_contact_1['bottom_image']['url']))
				<div data-gsap-element="img" class="mt-4 __img-wrapper overflow-hidden rounded-[96px] max-w-2xl h-[272px] w-full shadow-xl">

					<img
						src="{{ $g_contact_1['bottom_image']['url'] }}"
						alt="{{ $g_contact_1['bottom_image']['alt'] ?? 'Kontakt' }}"
						class="w-full h-full object-cover object-center">

				</div>
				@endif

			</div>

			<div
				data-gsap-element="form "
				class="__form-container w-full lg:pt-8">

				<div class="custom-figma-form w-full max-w-xl mr-auto ">
					{!! do_shortcode($g_contact_2['shortcode']) !!}
				</div>

			</div>

		</div>

	</div>

</section>