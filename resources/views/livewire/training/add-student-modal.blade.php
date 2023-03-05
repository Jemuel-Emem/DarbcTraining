<div>
    {{-- Student add data --}}

<div wire:ignore.self class="modal fade " id="addstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

</div>

