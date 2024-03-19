<div>

    <link rel="stylesheet" href="{{asset('plugins/glightbox/demo/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/glightbox/dist/css/glightbox.css')}}" />

    <style>
        .imagem-vibrante {
            filter: saturate(120%);
        }

        .imagem-slide {
            filter: saturate(130%) opacity(40%);
        }
    </style>

    @livewire('portifolio.SlideShow', ['portifolio' => $portifolio])

    <livewire:portifolio.gallery :portifolio="$portifolio"/>

    <script src="{{asset('plugins/simplelightbox/dist/simple-lightbox.js')}}"></script>
    <script src="{{asset('plugins/glightbox/demo/js/valde.min.js')}}"></script>
    <script src="{{asset('plugins/glightbox/dist/js/glightbox.js')}}"></script>
    <script src="{{asset('plugins/glightbox/demo/js/site.js')}}"></script>

    <script>
        (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
    </script>
</div>
