<x-app-layout>
  <x-slot:content>
    <div class="container">
      <div class=" py-5 d-grid gap-3">
        <form method="post" action="{{ route("sekolah.store") }}">
          @csrf
          <h1>Tambah sekolah</h1>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1">
          </div>
          <a href="{{ route("user.index") }}" class="btn btn-outline-primary">Kembali</a>
          <button type="submit" class="btn btn-primary">tambah</button>
        </form>
      </div>
    </div>
  </x-slot>
</x-app-layout>