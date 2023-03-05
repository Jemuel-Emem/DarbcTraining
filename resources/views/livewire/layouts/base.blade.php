<!DOCTYPE html>
<html lang="en">
<head>
{{-- this is for google apis and font  --}}
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subcriber</title>
    @vite('resources/css/app.css')
    <style>
        tr:nth-child(even) {
         background-color: #f2f2f2;
       }
       *{
           font-family: Arial;
       }

           </style>
    {{-- Bootstrap Styles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    @livewireStyles
</head>
<body>

    @include('sweetalert::alert')

    {{ $slot }}

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{  asset('sweetalert2/sweetalert2.min.css') }}">
    @stack('scripts')
    @livewireScripts

<script src="sweetalert2/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
 window.addEventListener('SwalConfirm', function(event){
               swal.fire({
                   title:event.detail.title,
                   imageWidth:48,
                   imageHeight:48,
                   html:event.detail.html,
                   showCloseButton:true,
                   showCancelButton:true,
                   cancelButtonText:'Cancel',
                   confirmButtonText:'Yes, Delete',
                   cancelButtonColor:'#d33',
                   confirmButtonColor:'#3085d6',
                   width:300,
                   allowOutsideClick:false
               }).then(function(result){
                   if(result.value){
                       window.livewire.emit('deleteConfirmed',event.detail.id);
                   }
               })
           })

           window.addEventListener('deleted', function(event){
               alert('Country record has been deleted');
           });
</script>



    @section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#adddata').modal('hide');
        $('#updatedata').modal('hide');
        $('#deletedata').modal('hide');
    })
</script>
@endsection
</body>
</html>
