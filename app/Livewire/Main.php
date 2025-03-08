<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    protected $status='';
    protected $listeners= ['mainView'=>'switchView'];
    public function switchView($status)
    {
        $this->status=$status;
        return $this->render();
    }
    public function render()
    {
        switch ($this->status)
        {
            case 'home':
                return view('livewire.home');
                break;
            case 'contact':
                return view('livewire.contact');
                break;
            case 'projects':
                return view('livewire.projects');
                break;
            default:
                return (new Home())->render();
        }
    }
}
