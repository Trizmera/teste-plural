<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Testeplural;

class Posts extends Component
{
    public $testeplural, $first_name, $last_name, $email,
            $cpf, $cellphone, $cep, $address, $password;

    public function render()
    {
        $this->testeplural = Testeplural::all();

        return view('livewire.posts');
    }

    public function resetInputFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->cpf = '';
        $this->cellphone = '';
        $this->cep = '';
        $this->address = '';
        $this->password = '';
    }

    public function store()
    {
        $validation = $this->validate([
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
            'email'      => 'required|email',
            'cpf'        => 'required|min:11',
            'cellphone'  => 'required',
            'cep'        => 'required',
            'address'    => 'required',
            'password'   => 'required|confirmed|min:5'
        ]);

        Testeplural::create($validation);
        session()->flash('message', 'Data Created Successfully!');

        $this->resetInputFields();
        $this->emit('windowUser');
    }

    public function edit($id)
    {
        $data = Testeplural::findOrFail($id);
        $this->data_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->cpf = $data->cpf;
        $this->cellphone = $data->cellphone;
        $this->cep = $data->cep;
        $this->address = $data->address;
        $this->password = $data->password;
    }

    public function update()
    {
        $validation = $this->validate([
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
            'email'      => 'required|email',
            'cpf'        => 'required|min:11',
            'cellphone'  => 'required',
            'cep'        => 'required',
            'address'    => 'required',
            'password'   => 'required|confirmed|min:5'
        ]);

        $data = Testeplural::find($this->data_id);

        $data->update([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'cpf'        => $this->cpf,
            'cellphone'  => $this->cellphone,
            'cep'        => $this->cep,
            'address'    => $this->address,
            'password'   => $this->password
        ]);

        session()->flash('message', 'Data Updated Successfully!');

        $this->resetInputFields();
        $this->emit('windowUser');
    }

    public function delete($id)
    {
        Testeplural::find($id)->delete();
        session()->flash('message', 'Data Deleted Successfully!');
    }
}
