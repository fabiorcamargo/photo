<section id="examples" class="section">
    <div class="container">
        <div class="row">
            <ul class="box-container d-md-block">
                @foreach ($gallery as $key => $value)
                <li class="box">
                    <!-- Botão para abrir o modal -->
                    <div class="inner">
                        <a href="/portifolio/{{$value->id}}" class="glightbox">
                            <img class="imagem-vibrante"
                                src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" />
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
