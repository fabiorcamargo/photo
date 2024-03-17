<div>
    {{-- <div class="px-4">
        <ul class="box-container grid gap-3 columns-2 md:columns-3 relative">
            @foreach ($gallery as $key => $value)

            <li class="box">
                <!-- Botão para abrir o modal -->
                <div class="inner">
                    <a href="/portifolio/{{$value->id}}" class="glightbox rounded-sm ">
                        <img class="imagem-vibrante"
                            src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" />
                    </a>
                </div>
            </li>

            @endforeach
        </ul>
    </div> --}}

    <!-- Simple images example -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="box-container three-cols">
                        @foreach ($gallery as $key => $value)
                        <li class="box">
                            <div class="inner">
                                <a href="demo/img/large/gm1.jpg" class="glightbox">
                                    <img src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" alt="image" />
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
</div>
