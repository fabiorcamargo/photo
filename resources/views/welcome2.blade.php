<x-guest-layout>

    <link rel="stylesheet" href="{{asset('plugins/simplelightbox/dist/simple-lightbox.css')}}" />

    <style>
        .imagem-vibrante {
            filter: saturate(120%);
        }

        .imagem-slide {
            filter: saturate(130%) opacity(40%);
        }
    </style>
    <livewire:SlideShow />
    <livewire:gallery />
    <livewire:testimonial />






    <script src="{{asset('plugins/simplelightbox/dist/simple-lightbox.js')}}"></script>

</x-guest-layout>
