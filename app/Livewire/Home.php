<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Stat;
use App\Models\Slide;
use App\Models\Post;
use App\Models\Entreprise;
use App\Models\LegalInformation;
use App\Models\Testimonial;
#[Title('Accueil - Ets Yoba')]
class Home extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
         $entreprise=Entreprise::first();
          $legalInformation=LegalInformation::first();
        $stats = Stat::where('is_active', true)->get();
         $slides=Slide::orderBy('created_at','ASC')
        ->where('is_active',true)
        ->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        $posts = Post::where('status','published')->latest()->take(3)->get();
        return view('livewire.home', compact('stats', 'slides', 'testimonials', 'posts', 'entreprise', 'legalInformation'));
    }
}
