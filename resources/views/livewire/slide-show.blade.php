<div>
    <style>
        .slide-docker video {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .slide-docker::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 1);
            z-index: 1;
        }

        .texto-personalizado {
            font-family: 'Whisper Regular', sans-serif;
        }
    </style>

    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
        <div class="slide-docker absolute top-0 left-0 w-full h-full overflow-hidden" data-carousel="slide">
            <div class="min-w-full min-h-full absolute object-cover">
                @foreach ($portifolios as $key => $portifolio)

                @if($portifolio->photos->first)

                {{-- <div class="duration-700 ease-in-out" data-carousel-item>
                    <div class="min-w-full min-h-full absolute object-cover imagem-slide object-cover w-full h-full"
                        id="slide">
                        <div class="absolute inset-0 bg-black bg-opacity-60 z-50"></div>
                        {{ $portifolio->photos->first()->getFirstMedia('portifolio-images') }}
                    </div>
                </div> --}}

                <div class="duration-700 ease-in-out" data-carousel-item>
                    <div id="slide" class="object-cover w-full h-full">
                        <div class="absolute inset-0 bg-black bg-opacity-60 z-50"></div>
                        {{ $portifolio->photos->first()->getFirstMedia('portifolio-images') }}
                    </div>
                </div>

                @endif
                @endforeach
            </div>
        </div>
        <a href="/" class="slide-content space-y-2 z-50 text-white hover:text-white">
            <div class="px-8 max-w-lg rounded-xl py-4 flex smcenter:items- space-y-0 space-x-6">
                <img class="block h-24 rounded-full mx-0 shrink-0"
                    src="{{$config ? $config->getFirstMediaUrl('avatar', 'avatar') : '/lilly.webp'}}"
                    alt="Woman's Face">
                <div id="banner" class=" space-y-2 text-left">
                    <div class="sm:space-y-0.5">
                        <h1 class="font-light text-6xl text-white texto-personalizado">Lilly Almeida</h1>
                        <h3 class="font-light text-white text-3xl">Fotografia</h3>
                    </div>
                    <div class="flex justify-start">
                        <!-- Adicionado classe flex e justify-end -->
                        <button wire:click='wplink()' type="button"
                            class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <x-tabler-brand-whatsapp class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                        <button wire:click='instalink()' type="button"
                            class="text-white bg-pink-600 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-pink-500 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                            <x-tabler-brand-instagram class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                    </div>
                </div>
            </div>
        </a>
    </section>

    <script>
        // Selecionando todas as imagens dentro dos elementos com id=slide
        var imgElements = document.querySelectorAll('#slide img');
    
        // Loop para adicionar a classe desejada a todas as imagens
        imgElements.forEach(function(imgElement) {
            imgElement.classList.add('imagem-vibrante');
            imgElement.classList.add('object-cover');
            imgElement.classList.add('w-full');
            imgElement.classList.add('h-full');
        });
    </script>

</div>