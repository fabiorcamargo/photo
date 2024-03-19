<x-guest-layout>
    <link  href="{{asset('plugins/glightbox/demo/css/style.css')}}" />
    <link  href="{{asset('plugins/glightbox/dist/css/glightbox.css')}}" />
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


    <script src="{{asset('plugins/glightbox/demo/js/valde.min.js')}}"></script>
    <script src="{{asset('plugins/glightbox/dist/js/glightbox.min.js')}}"></script>
    <script src="{{asset('plugins/glightbox/demo/js/site.js')}}"></script>

</x-guest-layout>
