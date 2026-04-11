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
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $slide->description }}</h5>
                                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $slide->title }}</h1>
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
                        <div class="col-lg-4 wow zoomIn" >
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
  <!-- Features Start -->
    <div class="container-fluid py-5 " >
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ETABLISSEMENT YOBA</h5>
                <h1 class="mb-0">Votre Partenaire de Confiance</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" >
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-leaf text-white"></i>
                            </div>
                            <h4>Agro pastoral</h4>
                            <p class="mb-0">Une expertise avicole de premier plan dédiée à l'élevage de poules pondeuses et à la production d'œufs d'une fraîcheur absolue. Nous maîtrisons chaque étape, de la fabrication de l'aliment à la récolte finale, pour garantir des produits sains, naturels et conformes aux plus hauts standards sanitaires.</p>
                        </div>
                        <div class="col-12 wow zoomIn" >
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-hospital text-white"></i>
                            </div>
                            <h4>CMC-B</h4>
                            <p class="mb-0">Centre Médical Christ-ma-Bannière, Une offre de soins premium fondée sur l’éthique et l’excellence technique. Notre centre allie compétences médicales de pointe et prise en charge humaine pour garantir votre bien-être au quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn"  style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{asset('assets/img/logo.png')}}" style="object-fit: contain;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" >
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-camera text-white"></i>
                            </div>
                            <h4>Médias</h4>
                            <p class="mb-0">Pôle stratégique dédié à l’information et à la communication d'impact. Nous valorisons les initiatives à forte valeur ajoutée à travers une rédaction rigoureuse et une diffusion d'élite.</p>
                        </div>
                        <div class="col-12 wow zoomIn" >
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-bus text-white"></i>
                            </div>
                            <h4>Transport</h4>
                            <p class="mb-0">Solutions logistiques robustes et sécurisées pour répondre à vos besoins les plus exigeants. Nous mettons à votre disposition une flotte performante garantissant fiabilité, ponctualité et professionnalisme.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->
       <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" >
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Témoignages</h5>
                <h1 class="mb-0">Ce que disent nos clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" >
               @if($testimonials->isNotEmpty())
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item bg-light my-4">
                            <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                                <img class="img-fluid rounded" src="{{ asset('storage/' . $testimonial->image) }}" style="width: 60px; height: 60px;" alt="{{ $testimonial->name }}">
                                <div class="ps-4">
                                    <h4 class="text-primary mb-1">{{ $testimonial->name }}</h4>
                                    <small class="text-uppercase">{{ $testimonial->job }}</small>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                {{ $testimonial->content}}
                            </div>
                        </div>
                    @endforeach
                @endif
               
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

      <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" >
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Derniers Articles</h5>
                <h1 class="mb-0">Lisez Les Derniers Articles de Notre Blog</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-8 wow slideInUp" >
                    <div class="row g-5">
                        @if ($posts->isNotEmpty())
                            @foreach ($posts as $post)
                                <div class="col-lg-6">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{ asset('storage/' . $post->image_cover) }}" alt="{{ $post->title }}">
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{ route('actualite', ['category' => $post->category->slug, 'slug' => $post->slug]) }}">{{ $post->category->name }}</a>
                                        </div>
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $post->author->name }}</small>
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $post->created_at->format('d M, Y') }}</small>
                                            </div>
                                            <h4 class="mb-3">{{ $post->title }}</h4>
                                            {!! Str::limit($post->content, 100) !!}
                                            <a class="text-uppercase" href="{{ route('actualite', ['category' => $post->category->slug, 'slug' => $post->slug]) }}">Lire la suite <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Aucun article trouvé.</p>
                        @endif
                    </div>
                
               
            </div>
        </div>
    </div>
    <!-- Blog Start -->

</div>
