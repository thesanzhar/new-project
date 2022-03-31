<x-layout>
    <section class="page__block pt-28 pb-8">
        <div class="container mx-auto">
            <div class="page__header mb-8">
                <div class="page__header_up mb-3">
                    <h2 class="courses__title text-3xl font-bold">{{ __('Курстар') }}</h2>
                </div>
                <div class="page__header_down flex items-center">
                    <a href="/" class="mr-3">{{ __('Басты бет') }}</a>
                    <img src="/img/icons/ic-post-header-arrow.svg" alt="" class="ic-post-header-arrow mr-3">
                    <a href="/courses" class="">{{ __('Курстар') }}</a>
                </div>
            </div>

            <div class="page__content">
                <div class="page__grid grid grid-cols-1 lg:grid-cols-3 gap-4">
                    @foreach($courses as $item)
                        <a href="{{ route('single', $item) }}" class="page__items ">
                            <div class="page__item-img w-full h-80 mb-3 rounded-lg overflow-hidden">
                                <img src="/img/img-news-2.jpg" alt="" class="img-courses w-full h-full object-cover">
                            </div>
                            <div class="page__item-title">
                                <h3 class="courses__title text-2xl font-bold mb-2">{{ $item->title }}</h3>
                                <h3 class="courses__subtitle text-base h-18 overflow-hidden">{{ $item->subtitle }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</x-layout>
