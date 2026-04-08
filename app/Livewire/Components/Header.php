<?php

namespace App\Livewire\Components;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Entreprise;
use App\Models\Social;
use App\Models\Slide;
use App\Models\LegalInformation;
class Header extends Component
{
    public function render()
    {
         Carbon::setLocale('fr');
          $entreprise=Entreprise::first();
          $legalInformation=LegalInformation::first();
           $socials=Social::orderBy('created_at','ASC')
        ->where('status',true)
        ->get();
         $slides=Slide::orderBy('created_at','ASC')
        ->where('is_active',true)
        ->get();
        return view('livewire.components.header',[
            'entreprise'=>$entreprise,
            'legalInformation'=>$legalInformation,
            'socials'=>$socials,
            'slides'=>$slides
        ]);
    }
}
