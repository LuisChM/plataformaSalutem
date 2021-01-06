@csrf
<div class="form-group">
    <label for="name">Nombre del rol:</label>
    <input type="text" class="form-control @error('name') is-invalid @else border-0 @enderror" name="name"
        id="name" placeholder="Ingrese el name del rol"
        value="{{old('name', $role->name)}}">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="form-check" >
    @foreach ($permissions as $id => $name)
    <div class="checkbox col-sm-6">

         <input class="form-check-input " type="checkbox"
                value="{{ $id }}" {{ $role->permissions->pluck('id')->contains($id) ? 'checked' : '' }}
                name="permissions[]">
            <label
                class="form-check-label pr-2 mr-3 @error('permissions') is-invalid @else border-0 @enderror">{{ $name }}</label>
    </div>
    @endforeach
@error('permissions')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="d-flex justify-content-end m-5">
    <a class="btn btn-primary mr-3" href="{{route('roles.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>