<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CityComponent extends Component
{

    use WithPagination;
    
    public $name;

    protected $rules = [
        'name' => 'required',
    ];

    public function insertCity(){
        $this->validate();
        
        City::create([
            'name'=>$this->name
        ]);
        $this->name="";
        $this->emit('done');
        
    }

    public function updateCity(){
        $this->validate();
        
        City::findOrFail($this->myid)->update([
            'name'=>$this->name
        ]);
        $this->name="";
        $this->emit('done');
        
    }


    public $myid;

    public function setData($id){
        $data=City::findOrFail($id);
        $this->name=$data->name;
        $this->myid=$id;
    }

  
    public function render()
    {
        return view('livewire.admin.city-component')->with([
            'data'=>City::paginate(10)
        ]);
    }
}
