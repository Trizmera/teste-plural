<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @include('livewire.create')

    @include('livewire.update')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Phone</th>
                <th>CEP</th>
                <th>Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach($testeplural as $data)
            <tr>
                <td>{{ $data->first_name }}</td>
                <td>{{ $data->last_name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->cpf }}</td>
                <td>{{ $data->cellphone }}</td>
                <td>{{ $data->cep }}</td>
                <td>{{ $data->address }}</td>
                <td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn tn-primary btn-sm" wire:click="edit({{ $data->id }})">Edit</button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger tn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
