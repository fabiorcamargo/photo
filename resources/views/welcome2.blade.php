<x-guest-layout>
    <link rel="stylesheet" href="{{asset('plugins/glightbox/demo/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/glightbox/dist/css/glightbox.css')}}" />
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
    <script src="{{asset('plugins/glightbox/demo/js/valde.min.js')}}"></script>
    <script src="{{asset('plugins/glightbox/dist/js/glightbox.js')}}"></script>
    <script src="{{asset('plugins/glightbox/demo/js/site.js')}}"></script>

</x-guest-layout>
