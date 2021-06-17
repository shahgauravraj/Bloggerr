@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert-danger alert" style="margin-top: 1rem;">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
  <div class="alert alert-success" style="margin-top: 1rem;">
      {{session('success')}}
    </div>
@endif

@if(session('error'))
  <div class="alert alert-danger" style="margin-top: 1rem;">
      {{session('error')}}
    </div>
@endif
