<div class="container pb-3 ">
    <h1>{{$mode.' '.$action}} usuario</h1>

    @if(count($errors)>0)
    @foreach ($errors->all() as $error )
    <div class="alert alert-danger">
        {{$error}}
    </div>

    @endforeach
    @endif

    @if (Session::has('alert'))
    <form action="/usuarios" method="post">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <strong> {{ Session::get('alert') }}</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Nombre</label>
            <input type="text" class="form-control" value="{{isset( $user->name)?$user->name:old('name')}}" name="name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" value="{{isset( $user->email)?$user->email:old('email')}}" name="email">
        </div>

        <div class="mb-3">
            <label for="password" class="">{{ __('Password') }}</label>

            <div class="mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="">

            </div>
        </div>

        <div class="mb-3">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- ROL -->
        <div class="mb-3">
            <label for="roles" class="form-label">rol</label>
            <select id="roles" class="form-control" name="roles" required>
                @foreach($roles as $role)
                <option value="{{ $role }}">{{ $role }}</option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="btn btn-primary">{{$mode}} usuario</button>
        <a class="btn btn-danger" href="{{url('/usuarios')}}">Regresar</a>

</div>
</form>
