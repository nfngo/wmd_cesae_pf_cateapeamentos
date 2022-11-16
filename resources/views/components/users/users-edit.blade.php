<h1>Edit</h1>
<form action="{{url('users/'.$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">name</label>
        <input type="text"
        id="name"
        name="name"
        value="{{$user->name}}"
        placeholder="Insira a name"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text"
        id="email"
        name="email"
        value="{{$user->email}}"
        autocomplete="email"
        placeholder="Insira o email"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password"
        id="password"
        name="password"
        value="a*({{$user->password}}).length"
        autocomplete="password"
        placeholder="Insira o password"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="file"
        id="image"
        name="image"
        value="{{$user->image}}"
        autocomplete="image"
        placeholder="Insira o image"
        class="form-control">
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
