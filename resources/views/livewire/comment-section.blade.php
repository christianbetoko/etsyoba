<div>
    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">{{ $comments->count() }} Commentaires</h3>
                        </div>
                         @forelse ($comments as $comment)
                        <div class="d-flex mb-4">
                           {{--  <img src="https://via.placeholder.com/45" class="img-fluid rounded" style="width: 45px; height: 45px;"> --}}
                            <div class="ps-3">
                                <h6><a href="">{{ $comment->user_name }}</a> <small><i>{{ $comment->created_at->diffForHumans() }}</i></small></h6>
                              <p>  {{ $comment->content }}</p>
                               
                            </div>
                        </div>
                        @empty
                         <p class="text-center text-muted">Soyez le premier à réagir !</p>
        @endforelse
                    </div>
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Laisser un commentaire</h3>
                              @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
                        </div>
                        <form wire:submit.prevent="postComment">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input wire:model="name" type="text" class="form-control bg-white border-0 @error('name') is-invalid @enderror" placeholder="Votre nom" style="height: 55px;">
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input wire:model='email'  type="email" class="form-control bg-white border-0 @error('email') is-invalid @enderror" placeholder="Votre email" style="height: 55px;">
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                
                        
   
                                <div class="col-12">
                                    <textarea wire:model="content" class="form-control bg-white border-0 @error('content') is-invalid @enderror" rows="5" placeholder="Comment"></textarea>
                                @error('content') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" wire:loading.attr="disabled"><span wire:loading.remove>Envoyer le commentaire</span>
                    <span wire:loading><i class="fas fa-spinner fa-spin"></i> Envoi en cours...</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
</div>
