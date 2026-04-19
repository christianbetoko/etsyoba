@section('title', $post->title . ' | etsyoba.com')

@section('meta_tags')
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ Str::limit($post->content, 160) }}">
    {{-- On utilise directement l'attribut calculé --}}
    <meta property="og:image" content="{{   asset('storage/'.$post->image_cover) }}">
   <meta property="og:type" content="article">

    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ Str::limit($post->content, 160) }}">
    <meta name="twitter:image" content="{{ asset('storage/'.$post->image_cover) }}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
<div>
     <div class="container-fluid position-relative p-0">

     <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ $post->title }}</h1>
                    <a href="{{ route('home') }}" class="h5 text-white">Accueil</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('actualites') }}" class="h5 text-white">Actualités</a>
                </div>
            </div>
        </div>
   </div>

     <!-- Blog Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row g-5">
                <div class="col-lg-12">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('storage/'.$post->image_cover) }}" alt="{{ $post->title }}">
                        
                        <h1 class="mb-4">{{ $post->title }}</h1>
                        <ul class="blog-info-link mt-3 mb-4 d-flex align-items-center list-unstyled">
                            <li class="mr-3">
                                <a href="#" class="text-muted"><i class="fa fa-folder text-primary mr-1"></i> {{ $post->category->name }}</a>
                            </li>
                           
                            <li class="ml-auto">
                                {{--<button class="btn btn-sm btn-outline-danger border-0" onclick="sharePost('{{ $post->title }}', '{{ url()->current() }}')">
                                    <i class="fas fa-share-alt"></i> 
                                </button>--}}
                                <button class="btn btn-sm btn-outline-primary border-10" 
        id="shareBtn"
        data-title="{{ $post->title }}" 
        data-url="{{ url()->current() }}">
    <i class="fas fa-share-alt"></i> 
</button>
                            </li>
                        </ul>
                        <p>{!! $post->content !!}</p>
                    </div>
                    <!-- Blog Detail End -->
    
                    <livewire:comment-section :postId="$post->id" />
                </div>
    
                
            </div>
        </div>
    </div>
    <!-- Blog End -->
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
