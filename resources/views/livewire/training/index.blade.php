<div>



    <nav class=" border-gray-200 rounded bg-blue-700 dark:bg-gray-800 dark:border-gray-700  ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="#" class="flex items-center">
              <img src="https://i.pinimg.com/236x/0c/fd/a2/0cfda250d33a038d777ef363e6ced83c.jpg" class="h-6 mr-2 sm:h-10" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap text-white">LMS</span>
          </a>
          <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
              </li>

             <div class="flex items-center justify-end pl-12">
              <li >

                <a class= "text-white italic text-xl underline  p-2">
                    {{ Auth::user()->name }}
                </a>
              </li>

           <div class="pl-12">

            <a class="text-danger border border-red-600 text-2xl no-underline  p-1"  href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
        <i class="ri-logout-circle-fill"></i>
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
        </div>

        </div>
         </div>

        </div>  <!-- Authentication Links -->
      </nav>





      {{-- card body data here --}}



<div class="container pt-2">

<div class="mb-2">
<button class="bg-blue-700 rounded w-64 h-12 material-symbols-outlined text-white" data-toggle="modal" data-target="#adddata"><i class="ri-add-box-fill"></i> ADD SUBJECT</button>
</div>

<div class="row">
    @forelse($subscribers as $post)
    <div class="col-md-3">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top"
                 src="images/sam3.jpg"
                 data-holder-rendered="true">
            <div class="card-body">
                <h2 class="card-text">{{ $post->name }}</h2>
                <p class="card-text">{{ $post->address }}</p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{ $post->contract }}</small>
                <small class="text-muted">{{ $post->subscriptions }}</small>
                </div>
            </div>

            <div class="card-body flex gap-1">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addstudent" wire:click="edit({{$post->id}})">AddStudent</button>
                <button class="btn btn-warning" data-toggle="modal" data-target="#updatedata" wire:click="edit({{$post->id}})">Update</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#delete" wire:click="deleteId({{$post->id}})">Delete</button>
            </div>
        </div>
    </div>
    @empty
        <p>No Posts Currently</p>
    @endforelse
</div>
</div>


 {{-- modal here  add --}}

 <div wire:ignore.self class="modal fade " id="adddata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
        <div class="modal-header bg-blue-700 ">
          <h5 class="modal-title text-white font-bold" id="exampleModalLabel">ADD NEW SUBJECTS</h5>
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
                <Label>Subject Code:</Label>
                <input type="text" class="form-control " wire:model="name">
                @error('name') <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <Label>Discription:</Label>
                <input type="text" class="form-control" wire:model="address">
                @error('address') <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <Label>Date:</Label>
                <input type="text" class="form-control" wire:model="contract">
                @error('contract') <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <Label>Time:</Label>
                <input type="text" class="form-control" wire:model="subscriptions">
                @error('subscriptions') <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

          </form>
        </div>
        <div class="modal-footer bg-blue-700 ">
          <button type="button" class="btn btn-danger  material-symbols-outlined" data-dismiss="modal" ><i class="ri-close-line"></i>Close</button>
          <button type="submit" wire:click="submit" class="btn btn-primary material-symbols-outlined"><i class="ri-save-line"></i>Save</button>
        </div>
        </div>
       </div>
       </div>

{{-- ---------------------------------stop -------------- --}}

{{--  modal here --}}

@include("livewire.training.add-student-modal")

@include("livewire.training.delete-modal")

@include("livewire.training.update-modal")



</div>










