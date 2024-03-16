<div>
    <style>
        .slide-docker img {
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
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
    </style>

    <!-- component -->
<!-- This is an example component -->
{{-- <div class="max-w-2xl mx-auto">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

	<p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn
		more
		by going to the official <a class="text-blue-600 hover:underline"
			href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
	</p>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div> --}}

     {{-- <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
        <div class="slide-docker absolute top-0 left-0 w-full h-full overflow-hidden" data-carousel="slide">
            <div class="min-w-full min-h-full absolute object-cover">

                @foreach ($photos as $key => $photo)

                <div class="hidden duration-700 ease-in-out" data-carousel-item>

                    <img id="photo{{$key}}" src="/storage{{$photo}}"
                        class="imagem-slide object-cover w-full h-full" alt="Slide 1">
                </div>
                @endforeach

            </div>
        </div>
        <div class="slide-content space-y-2 z-50 absolute bottom-8 sm:right-0 mb-10 sm:mr-4">
            <div class="px-8 max-w-sm bg-white rounded-xl shadow-lg  py-4 flex smcenter:items- space-y-0 space-x-6">
                <img class="block h-24 rounded-full mx-0 shrink-0" src="https://lillyalmeida.com.br/avatar/lilly/1683322175508.jpg" alt="Woman's Face">
                <div id="banner" class=" space-y-2 text-left">
                    <div class="sm:space-y-0.5">
                        <p class="text-lg text-black font-semibold" style=" font-family: 'Whisper';">
                            Lilian Almeida
                        </p>
                        <p class="text-slate-500 font-medium">
                            Fotografia
                        </p>
                    </div>
                    <div class="flex justify-start"> <!-- Adicionado classe flex e justify-end -->
                        <button type="button" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <x-tabler-brand-whatsapp class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                        <button type="button" class="text-white bg-pink-600 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-rose-500 dark:hover:bg-rose-700 dark:focus:ring-rose-800">
                            <x-tabler-brand-instagram class="w-6 h-6" />
                            <span class="sr-only">Icon description</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}


    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
        <div class="slide-docker absolute top-0 left-0 w-full h-full overflow-hidden">

            <div class="relative min-w-full min-h-full overflow-hidden">
                <img class="absolute inset-0 object-cover object-top w-full h-full" src="{{ $portifolio->photos->first()->getFirstMediaUrl('portifolio-images', 'banner') }}" alt="Imagem">
            </div>
        </div>
        <a href="/" class="slide-content space-y-2 z-10">
            <div class="px-8 max-w-lg rounded-xl py-4 flex smcenter:items- space-y-0 space-x-6">
                <img class="block h-24 rounded-full mx-0 shrink-0" src="https://lillyalmeida.com.br/avatar/lilly/1683322175508.jpg" alt="Woman's Face">
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



    {{--<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script> --}}
</div>
