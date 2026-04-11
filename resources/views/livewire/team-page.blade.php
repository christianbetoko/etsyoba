<div>
    <div class="container-fluid position-relative p-0">

     <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Equipe</h1>
                    <a href="{{ route('home') }}" class="h5 text-white">Accueil</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('team') }}" class="h5 text-white">Equipe</a>
                </div>
            </div>
        </div>
   </div>

 <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Equipe </h5>
                <h1 class="mb-0"> Notre équipe </h1>
            </div>
            <div class="row g-5">
                @if($membres->isNotEmpty())
                @foreach ($membres  as $membre )
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$membre->image)}}" alt="{{$membre->name}}">
                            <div class="team-social">
                                @if($membre->twitter)
                                 <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$membre->twitter}}"><i class="fab fa-twitter fw-normal"></i></a>
                                @endif
                                @if($membre->facebook)
                                 <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$membre->facebook}}"><i class="fab fa-facebook fw-normal"></i></a>
                                @endif
                               @if($membre->instagram)
                                 <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$membre->instagram}}"><i class="fab fa-instagram fw-normal"></i></a>
                                @endif
                                 @if($membre->linkedin)
                                 <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{$membre->linkedin}}"><i class="fab fa-linkedin fw-normal"></i></a>
                                @endif
                               
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{$membre->name}}</h4>
                            @if ($membre->phone)
                                <h6>{{$membre->phone}}</h6> 
                            @endif
                           @if ($membre->email)
                                <h6>{{$membre->email}}</h6> 
                            @endif
                            @if ($membre->message)
                                  <p class="text-uppercase m-0">{{$membre->role}}</p>
                            @endif
                         
                        </div>
                    </div>
                </div>
                @endforeach

                @endif
                
                
            </div>
        </div>
    </div>
    <!-- Team End -->

</div>
