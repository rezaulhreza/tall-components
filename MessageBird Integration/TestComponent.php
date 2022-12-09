<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Notification;//illuminate/facade
use App\Models\Order;
use App\Notifications\MessageCreated;

class TestComponent extends Component
{
    
    public $order;
    
    public $orderId;
    
    public $name;
    
    public $qty;
    
    public $note;
    
    public $phoneNumber;


    public function store()
    {
        
        $this->order = Order::updateOrCreate(['id' => $this->orderId], [
            'name' => $this->name,
            'qty' => $this->qty
            'note' => $this->note ?? '',
            'user_id' =>  auth()->user()->id,
           
        ]);

        // Notify the user
        $phone = optional($this->phoneNumber ?? '';//phone number must be in international format e.g +4478.....
        if ($phone) {
         Notification::route('messagebird', $phone)->notify(new MessageCreated);
        }

    }


    public function render()
    {

        return view('livewire.test-component');
    }
        }