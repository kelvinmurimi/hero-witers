@if(session()->has('danger'))
<div class="alert alert-danger">
    {{ session('danger') }}
 
</div>
@endif