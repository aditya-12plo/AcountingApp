<link rel="stylesheet" href="{{asset('sweetalert/animate.min.css')}}">
<script src="{{asset('sweetalert/sweetalert.all.js')}}"></script>

@if ($message = Session::get('success'))
<script>
        Swal.fire({"title":"{{ $message }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"success","position":"top-end"});
</script>
@endif
@if ($message = Session::get('info'))
<script>
        Swal.fire({"title":"{{ $message }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"info","position":"top-end"});
</script>
@endif
@if ($message = Session::get('warning'))
<script>
        Swal.fire({"title":"{{ $message}}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"warning","position":"top-end"});
</script>
@endif
@if ($message = Session::get('error'))
<script>
        Swal.fire({"title":"{{ $message }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"error","position":"top-end"});
</script>
@endif
@if ($message = Session::get('errors'))
<script>
        Swal.fire({"title":"{{ $message}}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"error","position":"top-end"});
</script>
@endif
@if ($message = Session::get('402'))
<script>
    Swal.fire({"title":"{{ $message}}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"success","position":"top-end"});
</script>
@endif
@if ($message = Session::get('200'))
<script>
        Swal.fire({"title":"{{ $message }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"success","position":"top-end"});
</script>
@endif
@if ($errors->any())
  @foreach($errors->all() as $error)
  <script>
        Swal.fire({"title":"{{ $error }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"warning","position":"top-end"});
</script>
   @endforeach
@endif
@if (session('status'))
<script>
        Swal.fire({"title":"{{ session('status') }}","text":"","timer":5000,"width":"32rem","heightAuto":true,"padding":"1.25rem","showConfirmButton":false,"showCloseButton":true,"showClass":{"popup":"animated fadeInDown faster"},"hideClass":{"popup":"animated fadeOutUp faster"},"toast":true,"icon":"success","position":"top-end"});
</script>
@endif
