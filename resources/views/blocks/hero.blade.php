

<!-- hero --->
@php
$sectionClass = '';
$sectionClass .= $nomt ? ' !mt-0' : '';

$backgroundImage = $g_hero['image']['url'] ?? '';
$backgroundStyle = $backgroundImage ? "background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('{$backgroundImage}');" : '';
@endphp

<section
    data-gsap-anim="section"
    @if(!empty($section_id)) id="{{ $section_id }}" @endif
    class="b-hero relative {{ $sectionClass }} {{ $section_class }} bg-background-brand overflow-hidden flex items-center bg-cover bg-center md:bg-none" 
    @if(!empty($backgroundImage)) style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('{{ $backgroundImage }}');" @endif
>
    <div class="hidden lg:block absolute left-0 bottom-0 w-[22%] z-10 pointer-events-none">
        <img 
            src="/wp-content/uploads/2026/05/shape-left.svg" 
            alt="" 
            class="w-full h-auto object-contain"
        >
    </div>

    <div class="hero-image-wrapper hidden md:block absolute xl:right-6 right-0 top-0 bottom-0 w-1/2 h-full z-10 pointer-events-none">
        <img 
            src="{{ $backgroundImage }}" 
            class="hero-mask-img" 
            alt="NutriPlant"
        >
    </div>

    <div class="__wrapper c-main relative z-20 w-full h-full flex items-center py-12 md:py-20">
        <div class="__content relative flex flex-col justify-center w-full md:w-1/2">
            <h1 data-gsap-element="header" class="text-white  font-bold leading-tight">
                {{ $g_hero['title'] }}
            </h1>

            <div data-gsap-element="txt" class="text-lg text-gray-300 mt-6">
                {!! $g_hero['txt'] !!}
            </div>

            @if (!empty($g_hero['button1']))
            <div class="inline-buttons m-btn mt-8 flex flex-wrap gap-4">
                <a
                    data-gsap-element="button"
                    class="second-btn left-btn" 
                    href="{{ $g_hero['button1']['url'] }}"
                    target="{{ $g_hero['button1']['target'] ?? '_self' }}">
                    {{ $g_hero['button1']['title'] }}
                </a>

                @if (!empty($g_hero['button2']))
                <a
                    data-gsap-element="button"
                    class="white-btn"
                    href="{{ $g_hero['button2']['url'] }}"
                    target="{{ $g_hero['button2']['target'] ?? '_self' }}">
                    {{ $g_hero['button2']['title'] }}
                </a>
                @endif
            </div>
            @endif
        </div>
    </div>
</section>