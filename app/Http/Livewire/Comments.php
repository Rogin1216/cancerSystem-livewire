<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public function appendBody(){
        if($this->newComment){
            array_unshift($this->comments,[
                'body'=>$this->newComment,
                'created_at'=>Carbon::now()->diffForHumans(),
                'creator'=>'EUGENIO']);
                $this->newComment="";
        }else{
            return;
        }
    }
    public $newComment;
    public $text;
   public function mount($cancerRegtable){
    
    $this->text = $cancerRegtable;
    // dd($this->text);
   } 
    
    
    
    public function render()
    {
        return view('livewire.comments');
    }
}
