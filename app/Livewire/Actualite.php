<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Comment;
#[Title('Actualités - Ets Yoba')]
class Actualite extends Component
{
     public $slug;



    public function mount( $slug){
       
        $this->slug = $slug;
    }
    public function render()
    {
         Carbon::setLocale('fr');
         $post=Post::where('slug',$this->slug)->firstOrFail();
        $comments=Comment::where('post_id',$post->id)->where('is_visible',true)->get();
        return view('livewire.actualite', compact('post', 'comments'));
    }
}
