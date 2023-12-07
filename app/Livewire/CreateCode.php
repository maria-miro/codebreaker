<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;


class CreateCode extends Component
{
    public $message = 'This is my message?';

    
    #[Computed(persist: true)]
    
    public function map()
    {
        return array_combine(range('a', 'z'), $this->symbols());
    }

    
    protected function symbols()
    {
        $symbols = [];
        
        foreach(array_rand(config('symbols'), 26) as $key){
            $symbols[]= (config('symbols')[$key]);
        }
        shuffle($symbols);

        return $symbols;
    }



    public function render()
    {
        return view('livewire.create-code');
    }
}
