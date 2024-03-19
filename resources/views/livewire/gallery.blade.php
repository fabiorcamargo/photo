<div>
    <div class="sm:px-8 pt-8">

        @php $counter = 0; @endphp

        @foreach ($gallery as $key => $value)
        @if ($counter % 6 == 0)
        @if ($counter > 0)
        </ul><!-- Fecha o último ul -->
        @endif
        <ul class="box-container grid gap-3 columns-2 md:columns-3 relative">
            <!-- Inicia um novo ul -->
            @endif

            @if ($value->photos->first())
            <li class="box py-2">
                <!-- Botão para abrir o modal -->
                <div class="inner ">
                    <a href="/portifolio/{{$value->id}}" class="glightbox">
                        <img class="imagem-vibrante"
                            src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" />
                    </a>
                </div>
            </li>
            @endif

            @php $counter++; @endphp
            @endforeach

            @if ($counter % 6 != 0)
        </ul><!-- Fecha o último ul se o contador não for divisível por 6 -->
        @endif


    </div>
</div>
