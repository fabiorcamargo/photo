<div>
    <link rel="stylesheet" href="{{asset('plugins/simplelightbox/dist/simple-lightbox.css')}}" />

    <style>
        /* CSS para controlar a transição de opacidade */
        .gallery-image {
            opacity: 0;
            /* Começa com opacidade 0 */
            transition: opacity 0.5s ease;
            /* Transição suave de opacidade */
        }

        .gallery-image.active {
            opacity: 1;
            /* Altera a opacidade para 1 quando a classe ativa é adicionada */
        }
    </style>
{{--
<div class="pswp-gallery pswp-gallery--single-column" id="my-gallery">
    <a href="{{$photos->getFirstMedia('portifolio-images')->getUrl()}}"  target="_blank">

      {{$photos->getFirstMedia('portifolio-images')}}
    </a>
    <!-- cropped thumbnail: -->
    <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-2500.jpg"
      data-pswp-width="1875"
      data-pswp-height="2500"
      data-cropped="true"
      target="_blank">
      <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-200.jpg" alt="" />
      Cropped
    </a>
    <!-- data-pswp-src with custom URL in href -->
    <a href="https://unsplash.com"
      data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
      data-pswp-width="2500"
      data-pswp-height="1666"
      target="_blank">
      <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg" alt="" />
    </a>
    <!-- Without thumbnail: -->
    <a href="http://example.com"
      data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/5/img-2500.jpg"
      data-pswp-width="2500"
      data-pswp-height="1668"
      target="_blank">
      No thumbnail
    </a>
    <!-- wrapped with any element: -->
    <div>
      <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-2500.jpg"
        data-pswp-width="2500"
        data-pswp-height="1667"
        target="_blank">
        <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-200.jpg" alt="" />
      </a>
    </div>
  </div> --}}


    <div>
        <div class="px-4 pt-4">
            <ul
                class="gallery box-container columns-2 md:columns-3 relative">
                @foreach ($photos->getMedia('portifolio-images') as $value)
                <li class="box py-2">
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="{{$value->getUrl('banner')}}" class="glightbox">
                            <img class="imagem-vibrante" src="{{$value->getUrl('thumb')}}" />
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



</div>
