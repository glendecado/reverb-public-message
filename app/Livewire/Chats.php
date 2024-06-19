<?php

namespace App\Livewire;


use App\Events\MessageEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Chats extends Component
{
    public string $message = "";
    public $message_live = [];

    public function messageSent()
    {

        if($this->message !== ""){
            MessageEvent::dispatch(Auth::user()->name, $this->message);
            $this->reset('message');
        }
        $this->reset('message');
    }

    #[On('echo:channel-name,MessageEvent')]
    public function m($e)
    {
        $this->message_live[] = $e;
    }
    public function render()
    {
        $e = $this->message_live;
        return view('livewire.chats', compact('e'));
    }
}
