<div align="right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create</button>
</div>

<div wire:ignore.self id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="Enter First Name" wire:model="first_name" />
                        @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Last Name</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Last Name" wire:model="last_name" />
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput3">Email</label>
                        <input type="email" id="exampleFormControlInput3" class="form-control" placeholder="Enter Email" wire:model="email" />
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput4">CPF</label>
                        <input type="email" id="exampleFormControlInput4" class="form-control" placeholder="Enter CPF" wire:model="cpf" />
                        @error('cpf')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput5">Phone</label>
                        <input type="phone" id="exampleFormControlInput5" class="form-control" placeholder="Enter Phone" wire:model="cellphone" />
                        @error('cellphone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput6">CEP</label>
                        <input type="text" id="exampleFormControlInput6" class="form-control" placeholder="Enter CEP" wire:model="cep" />
                        @error('cep')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput7">Address</label>
                        <input type="text" id="exampleFormControlInput7" class="form-control" placeholder="Enter Address" wire:model="address" />
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput8">Password</label>
                        <input type="password" id="exampleFormControlInput8" class="form-control" placeholder="Enter Password" wire:model="password" />
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>