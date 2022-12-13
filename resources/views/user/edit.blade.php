<x-app-layout>
  <x-slot:content>
    <div class="container">
      <div class=" py-5 d-grid gap-3">
        <form action="post" class="" action="{{ route("user.update", $user) }}">
          @csrf
          <h1>edit siswa</h1>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" {}>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <input type="text" class="form-control">
          </div>
          <select name="role" id="role">
            <option value="1">Admin</option>
            <option value="2">User</option>
            <option value="3">Guest</option>
          </select>
          <a href="{{ redirect()->back() }}"><button>kembali</button></a>
          <button type="submit" >tambah</button>
        </form>
      </div>
    </div>
  </x-slot>
</x-app-layout>