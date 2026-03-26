<div>
 <div class="container-fluid position-relative p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @if ($slides->isNotEmpty())
                    @foreach ($slides as $slide)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="w-100" src="{{ url('storage/' . $slide->image) }}" alt="{{ $slide->title }}">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $slide->title }}</h5>
                                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $slide->description }}</h1>
                                    <a href="{{ $slide->url }}" class="btn btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
            
                @endif
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


 </div>

   <!-- Facts Start -->
     <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                @if ($stats->isNotEmpty())
                    @foreach ($stats as $stat)
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                            <div class=" bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                    <i class="{{ $stat->icon }} text-primary"></i>
                                </div>   
                                <div class="ps-4">
                            <h5 class="text-white mb-0">{{ $stat->title }}</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{ $stat->number }}</h1>
                        </div>
                    </div>
                        </div>
                    @endforeach
                @endif
                                
               {{--  <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div> 
    <!-- Facts Start -->
</div>
