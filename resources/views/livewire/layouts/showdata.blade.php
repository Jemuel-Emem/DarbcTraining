<div>

    <div class="flex justify-center items-center mr-11 ml-6 mt-4 bg-transparent border-blue-300">
        <table class=" border  w-screen p text-start radius ">
            <tr class="bg-blue-400 h-16 font-bold text-xl text-white ">

                <td>ID</td>
                <td>Name</td>
                <td>Address</td>
                <td>Contract</td>
                <td>Subscriptions</td>
                <td>Action</td>

            </tr>
        <tbody id="tbody">
        @forelse ($subscriber as $data1)
        <tr class="h-16 text-xl shadow hover:bg-blue-100" >
            <td>{{ $data1->id }}</td>
            <td>{{ $data1 ->name }}</td>
            <td>{{ $data1 ->address }}</td>
            <td>{{$data1 ->contract }}</td>
            <td>{{ $data1 ->subscriptions }}</td>
            <td>

               <button type="submit" data-toggle="modal" data-target="#updatedata" class="material-symbols-outlined border text-blue-400 bg-transparent"  wire:click="edit({{$data1->id}})">
                        Edit
               </button>

              <button type="button" data-toggle="modal" data-target="#delete" class="material-symbols-outlined border text-red-400 bg-transparent" wire:click="deleteId({{ $data1->id }})" >
                Delete
               </button>



            </td>
            </tr>
        @empty
        <td colspan="8" class="h-12 text-center">No data</td>
        @endforelse
        </tbody>
        </table>
     </div>
     <div class="flex justify-center mt-12"> {!! $subscriber->render() !!}</div>


    </div>
