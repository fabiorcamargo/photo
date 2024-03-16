<div>

    <div class="md:p-10 grid mb-8 border border-gray-700 rounded-lg shadow-sm md:grid-cols-3  ">
        @foreach ($testimonials as $testimonial)
        <div class="m-2 md:m-4 ">
            <figure class="max-w-screen-md text-center bg-gradient-to-r from-rose-50 to-amber-50 rounded-lg w-full p-4">
                <x-heroicon-m-heart class="w-10 h-10 mx-auto mb-3 text-red-500 "/>
                <blockquote>
                    <p class="text-xl italic font-medium text-gray-900 ">"{{$testimonial->testimonial}}"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                    <img class="w-6 h-6 rounded-full"
                        src="{{$testimonial->getFirstMediaURL('client-avatar', 'thumb')}}"
                        alt="profile picture">
                    <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 ">
                        <cite class="pe-3 font-medium text-gray-900 ">{{$testimonial->name}}</cite>
                        <a href="{{$testimonial->social}}" class="ps-3 text-sm text-gray-500 "> Social </a>
                    </div>
                </figcaption>
            </figure>
        </div>
        @endforeach
    </div>

</div>
