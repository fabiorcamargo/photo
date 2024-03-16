
<section id="examples" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($gallery as $key => $value)
                <ul class="box-container three-cols">
                    <li class="box">
                        <div class="inner">
                            <a href="demo/img/large/gm1.jpg" class="glightbox">
                                <img src="{{ $value->photos->first()->getFirstMediaUrl('portifolio-images', 'thumb') }}" alt="image" />
                            </a>
                        </div>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</section>
