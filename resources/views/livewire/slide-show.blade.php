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
    </style>



<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

        @foreach ($portifolios as $key => $portifolio)

                @if($portifolio->photos->first())

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{$portifolio->photos->first()->getFirstMediaUrl('portifolio-images', 'banner')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                    @endif
                @endforeach
   
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
        <div class="slide-docker absolute top-0 left-0 w-full h-full overflow-hidden" data-carousel="slide">
            <div class="min-w-full min-h-full absolute object-cover">
                @foreach ($portifolios as $key => $portifolio)

                @if($portifolio->photos->first())

                   <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img id="photo{{$key}}" src="{{$portifolio->photos->first()->getFirstMediaUrl('portifolio-images', 'banner')}}"
                        class="imagem-slide object-cover w-full h-full" alt="Slide 1">
                    </div>

                    @endif
                @endforeach
            </div>
        </div>
        <a href="/" class="slide-content space-y-2 z-50 text-white hover:text-white">
            <div class="px-8 max-w-lg rounded-xl py-4 flex smcenter:items- space-y-0 space-x-6">
                <img class="block h-24 rounded-full mx-0 shrink-0" src="{{$config->getFirstMediaUrl('avatar', 'avatar')}}" alt="Woman's Face">
                <div id="banner" class=" space-y-2 text-left">
                    <div class="sm:space-y-0.5">
                        <h1 class="font-light text-6xl text-white" style=" font-family: 'Whisper';">Lilly Almeida</h1>
                        <h3 class="font-light text-white text-3xl">Fotografia</h3>
                    </div>
                    <div class="flex justify-start"> <!-- Adicionado classe flex e justify-end -->
                        <button wire:click='wplink()' type="button" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <x-tabler-brand-whatsapp class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                        <button wire:click='instalink()' type="button" class="text-white bg-pink-600 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-pink-500 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                            <x-tabler-brand-instagram class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                    </div>
                </div>
            </div>
        </a>
    </section>


</div>
