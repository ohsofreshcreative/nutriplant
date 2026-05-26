<!--- content -->
<section
    data-gsap-anim="section"
    @if(!empty($section_id)) id="{{ $section_id }}" @endif
    class="b-content relative -smt {{ $sectionClass ?? '' }} {{ $section_class ?? '' }}">

    <div class="__wrapper c-main relative">
        <div class="__col grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-20">
            
            @if (!empty($g_content['image']))
            <div data-gsap-element="img" class="__img order1 relative">
                <img src="{{ $g_content['image']['url'] }}" alt="{{ $g_content['image']['alt'] ?? '' }}">

                @if(!empty($g_content['decor_image']))
                    <div class="__decor">
                        <img src="{{ $g_content['decor_image']['url'] }}" alt="{{ $g_content['decor_image']['alt'] ?? '' }}">
                    </div>
                @endif
            </div>
            @endif

            <div class="__content order2 lg:py-10">
                <h2 data-gsap-element="header" class="text-h2 text-carbon">{{ $g_content['header'] }}</h2>

                <div data-gsap-element="txt" class="__txt mt-4 ">
                    {!! $g_content['txt'] !!}
                </div>
            </div>

        </div>
    </div>
</section>