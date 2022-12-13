<x-app-layout>
  <x-slot:content>
    <div class="container">
      <div class=" py-5 d-grid gap-3">
        <form method="post" action="{{ route("user.store") }}">
          @csrf
          <h1>Tambah siswa</h1>
          @if($errors->any())
            @foreach ($errors->all() as $data)
              <div class="alert alert-warning" role="alert">
                <p>{{ $data }}</p>
              </div>
            @endforeach
          @endif
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
            <input type="text" name="nama" value="{{ old("nama") }}" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="mb-3">  
            <p>Sekolah</p>
            <select name="sekolah_id" class="form-select mb-2" id="sekolah">
              @foreach($sekolah as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ old("email")}}" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
          </div>
          <h5 class="">Role</h3>
          <select name="role" class="form-select mb-2" id="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="guest">Guest</option>
          </select>
          <a href="{{ route("user.index") }}" class="btn btn-outline-primary">kembali</a>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </x-slot>
</x-app-layout>