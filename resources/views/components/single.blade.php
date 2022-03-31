@props(['courses'])

<x-layout>
    <section class="page__block pt-28 pb-8">
        <div class="container mx-auto flex items-start justify-between ">
            <x-course-menu />
            <div class="page__view w-10/12 p-2 bg-white border border-b-red-100">
                <x-lessons />
            </div>
        </div>
    </section>

</x-layout>
