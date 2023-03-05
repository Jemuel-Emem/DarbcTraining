<div>

    <div>
    {{-- this is for header  --}}
    <div class="flex justify-start items-center p-3 ">
    <div class="flex justify-start">
    <div class="mr-4 text-blue-600 "> <img src="images/sample.jpg" alt="image" class="bg-contain bg-no-repeat h-12 rounded"> </div>
    <div class="text-4xl font-bold text-blue-400" style="font-family: 'Anton', sans-serif;">  SUBSCRIBER </div>
    </div>
    </div>

{{-- This portion the content of dashboard --}}

    <form class="flex items-center ">
    <div class="relative w-11/12 pl-4 flex items-center ">
    <input class="bg-blue-200 border font-thin  text-gray-500 text-sm rounded-lg  w-full pl-10 p-2.5 h-16 outline-blue-300 " wire:model="search" placeholder="Search" required>
    </div>
    <div class=" flex items-center">
    <span class="ml-1 mr-5">
    <button class="bg-blue-400 text-light rounded text-center h-16" data-toggle="modal" data-target="#adddata">Add New Subscriber</button>
    </span>
    </div>
    </form>

    {{-- <span class="validation">
        @if (session()->has('message'))
        <div class="alert alert-primary text-center">{{ session('message') }}</div>
        @endif
    </span> --}}

    @include('livewire.layouts.showdata')

    <div wire:ignore.self class="modal fade " id="adddata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title text-blue-400 font-bold" id="exampleModalLabel">ADD NEW SUBSCRIBERS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            {{-- Modal body here.... --}}

            <div class="modal-body" >

                {{-- Validate area --}}
            @if (session()->has('message'))
            <div class="alert alert-primary text-center">{{ session('message') }}</div>
            @endif

              <form >
                <div class="mb-3">
                    <Label>Name:</Label>
                    <input type="text" class="form-control " wire:model="name">
                    @error('name') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <Label>Address:</Label>
                    <input type="text" class="form-control" wire:model="address">
                    @error('address') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <Label>Contract:</Label>
                    <input type="text" class="form-control" wire:model="contract">
                    @error('contract') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <Label>Subscriptions:</Label>
                    <input type="text" class="form-control" wire:model="subscriptions">
                    @error('subscriptions') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="close">Close</button>
              <button type="submit" wire:click="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- Modal update here --}}

    <div wire:ignore.self class="modal fade " id="updatedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header ">
              <h5 class="modal-title text-blue-400 font-bold" id="exampleModalLabel">UPDATE NEW SUBSCRIBERS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            {{-- Modal body here.... --}}

            <div class="modal-body" >

                {{-- Validate area --}}
            @if (session()->has('message'))
            <div class="alert alert-primary text-center">{{ session('message') }}</div>
            @endif

              <form >
                <div class="mb-3">
                    <Label>Name:</Label>
                    <input type="text" class="form-control " wire:model="name">
                    @error('name') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <Label>Address:</Label>
                    <input type="text" class="form-control" wire:model="address">
                    @error('address') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <Label>Contract:</Label>
                    <input type="text" class="form-control" wire:model="contract">
                    @error('contract') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <Label>Subscriptions:</Label>
                    <input type="text" class="form-control" wire:model="subscriptions">
                    @error('subscriptions') <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="close">Close</button>
              <button type="submit" wire:click="update" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>


      {{-- delete modal id here --}}

      <div wire:ignore.self class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
               <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
