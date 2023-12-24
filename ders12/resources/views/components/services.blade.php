<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><em>Hizmetlerimiz</em></h2>
                </div>
            </div>
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{ asset('front/assets/images/service_01.jpg') }}" alt="">
                        <div class="down-content">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ Str::limit($service->description, 100, $end = '...') }}</p>
                            @if ($loop->iteration == 3)
                            @break
                        @endif
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
</div>
