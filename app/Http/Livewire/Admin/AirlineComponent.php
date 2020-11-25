<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\admin\AirlineController;
use App\Models\Airline;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AirlineComponent extends Component
{

      use WithPagination;
       use WithFileUploads;

    public $name;
    public $photo;


    protected $rules = [
        'name' => 'required',
        'photo' => 'image|max:1024', // 1MB Max
    ];

    public function insertData(){
        $this->validate();
//        $data=[
//            'name'=>$this->name
//        ];
//        $request=new Request($data);
//
//        $obj=new AirlineController();
//        $res=$obj->store($request);
         $filename=uniqid().'.'.$this->photo->extension();
         $this->photo->storeAs('upload/airline', $filename);
        Airline::create([
            'name'=>$this->name,
            'logo'=>'upload/airline/'.$filename
        ]);
        $this->name="";
        $this->emit('done','success','Created Succesfully');

    }

    public function updateAirline(){
        $this->validate();
        $data=[
            'name'=>$this->name
        ];
        $request=new Request($data);
        $obj=new AirlineController();
        $res=$obj->update($request,$this->myid);
        $this->name="";
        $this->emit('done',$res['status'],$res['message']);

    }

    public function deleteData($id){
        $obj=new AirlineController();
        $res=$obj->destroy($id);
        $this->emit('done',$res['status'],$res['message']);
    }


    public $myid;

    public function setData($id){
        $data=Airline::findOrFail($id);
        $this->name=$data->name;
        $this->myid=$id;
    }


    public function render()
    {
        $obj=new AirlineController();
        $result=$obj->index();
        return view('livewire.admin.airline-component')->with([
            'data'=>$result['data']
        ]);
    }

}
