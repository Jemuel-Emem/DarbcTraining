<?php

namespace App\Http\Livewire\Training;
use App\Models\training;

use Livewire\Component;

class Index extends Component
{
    public $name;
    public $address;
    public $contract;
    public $subscriptions;
    public $subscribers;
    public $sub_id;
    public $deleteId;

    public function submit(){

        $this->validate([
            'name' => 'required', //students = table name
            'address' => 'required',
            'contract' => 'required',
            'subscriptions' => 'required',
        ]);

        $subcriber = new training();
        $subcriber->name = $this->name;
        $subcriber->address = $this->address;
        $subcriber->contract = $this->contract;
        $subcriber->subscriptions = $this->subscriptions;
        $subcriber->save();

        session()->flash('message', 'New subscriber has been added successfully');


         $this->resetInputs();

         //For hide modal after add student success
         $this->dispatchBrowserEvent('close-modal');


    }

    public function close()
    {
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInputs();
    }

    public function resetInputs()
     {
         $this->name = '';
         $this->address = '';
         $this->contract = '';
         $this->subscriptions = '';

     }


     public function edit($id)
     {

         $subdata = training::where('id',$id)->first();
         $this->sub_id = $subdata->id; //we need this for updating the id
         $this->id = $id;
         $this->name = $subdata->name;
         $this->address= $subdata->address;
         $this->contract= $subdata->contract;
         $this->subscriptions = $subdata->subscriptions;

     }

     public function update()
    {
        $this->validate([

            'name' => 'required', //students = table name
            'address' => 'required',
            'contract' => 'required',
            'subscriptions' => 'required',
        ]);
        $student = training::where('id', $this->sub_id)->first();
        $student->name = $this->name;
        $student->address = $this->address;
        $student->contract = $this->contract;
        $student->subscriptions = $this->subscriptions;
        $student->save();
        session()->flash('message', 'Data has been updated successfully!');
        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');


    }

    public function deleteId($id)
    {

        $this->deleteId = $id;
        // subscriberModel::find($this->deleteId)->delete();
    }

    public function delete()
    {
        training::find($this->deleteId)->delete();
        session()->flash('message', 'Subscriber has been deletd successfully');
    }

    public function render()
    {

        $this->subscribers = training::all();

         return view('livewire.training.index')->layout('livewire.layouts.base');

        // return view('livewire.training.index', [
        //     'subscribers' => training::all()
        // ])->layout('livewire.layouts.base');


    }
}
