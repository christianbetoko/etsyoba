<style>
    /* On annule la rotation et l'inclinaison sur l'item et l'icône */
    .service-item, .service-icon {
        transform: none !important;
    }

    /* On s'assure que le lien et l'image ne subissent pas de déformation */
    .service-icon a, .service-icon img {
        transform: none !important;
        clip-path: none !important; /* Au cas où le thème utilise des masques */
        border-radius: 8px; /* Optionnel : pour des coins arrondis propres */
    }

    /* Optionnel : un léger effet de zoom au survol sans inclinaison */
    .service-icon img:hover {
        transform: scale(1.1) !important;
    }
</style>
@section('title', $service->name . ' | etsyoba.com')

@section('meta_tags')
    <meta property="og:title" content="{{ $service->name }}">
    <meta property="og:description" content="{{ Str::limit($service->description, 160) }}">
    {{-- On utilise directement l'attribut calculé --}}
    <meta property="og:image" content="{{   asset('storage/'.$service->photo) }}">
   <meta property="og:type" content="article">

    <meta name="twitter:title" content="{{ $service->name }}">
    <meta name="twitter:description" content="{{ Str::limit($service->description, 160) }}">
    <meta name="twitter:image" content="{{ asset('storage/'.$service->photo) }}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
<div>
      <div class="container-fluid position-relative p-0">

     <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ $service->name }}</h1>
                    <a href="{{ route('home') }}" class="h5 text-white">Accueil</a>
                   {{--  <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('actualites') }}" class="h5 text-white">Actualités</a> --}}
                </div>
            </div>
        </div>
   </div>
      <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ $service->name }}</h5>
                        <h1 class="mb-0">{{ $service->about}}</h1>
                    </div>
                   {!! $service->description !!}
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-phone text-primary me-3"></i>{{ $service->phone }}</h5>
                            <h5 class="mb-3"><i class="fa fa-envelope text-primary me-3"></i>{{ $service->email }}</h5>
                        </div>
                        
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Notre adresse</h5>
                            <h4 class="text-primary mb-0">{{ $service->address }}</h4>
                        </div>
                    </div>
                                    <button class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" 
        id="shareBtn"
        data-title="{{ $service->name }}" 
        data-url="{{ url()->current() }}">
    <i class="fas fa-share-alt"></i> Partager
</button>
              
                   
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('storage/'.$service->photo) }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Galerie Photos</h5>
                <h1 class="mb-0">Découvrez notre activité en images</h1>
            </div>
            <div class="row g-4">
    @forelse($service->images as $image)
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            {{-- Suppression de 'service-item' et 'service-icon' qui causent l'inclinaison --}}
            <div class="position-relative border rounded overflow-hidden" style="height: 250px;">
                <a href="{{ asset('storage/' . $image) }}" data-lightbox="service-gallery" data-title="{{ $service->name }}">
                    <img class="img-fluid w-100 h-100" 
                         src="{{ asset('storage/' . $image) }}" 
                         alt="Galerie {{ $service->name }}" 
                         style="object-fit: cover; transition: 0.5s;">
                </a>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p>Aucune image supplémentaire disponible pour ce service.</p>
        </div>
    @endforelse
</div>
        </div>
    </div>
</div>
<script>
    document.getElementById('shareBtn').addEventListener('click', function() {
        // On récupère les valeurs stockées dans les attributs data
        const title = this.getAttribute('data-title');
        const url = this.getAttribute('data-url');

        if (navigator.share) {
            navigator.share({
                title: title,
                url: url
            }).then(() => {
                console.log('Merci pour le partage !');
            })
            .catch(console.error);
        } else {
            // Utilisation d'un template literal (backticks) pour éviter les soucis de guillemets dans l'alerte
            alert(`Le partage n'est pas pris en charge par votre navigateur. Voici l'URL : ${url}`);
        }
    });
</script>
