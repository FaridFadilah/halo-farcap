<x-app-layout>
  <x-slot:content>
    <div class="container py-4">

      <div class="alert alert-primary" role="alert">
        {{ session()->get("message") }}
      </div>
      <table class="table py-2">
        <h1>User</h1>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Sekolah</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
            <th scope="col">aktif</th>
            <th scope="col">edit</th>
            <th scope="col">hapus</th>
          </tr>
        </thead>
        <tbody>
          @php $i =1; @endphp
          @foreach($users as $user)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->sekolah->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              @if($user->aktif)
                <p class="badge text-bg-success">telah diaktifkan</p>
              @else
                <a href="{{ route("user.aktif", $user->id) }}">Aktifkan</a>
              @endif
            </td>
            <td><a href="{{ route("user.show", $user->id) }}">Details</a></td>
            <td><a href="{{ route("user.destroy", $user->id) }}">Hapus</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <table class="table">
        <h1>Sekolah</h1>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $i = 1 @endphp
          @foreach($sekolah as $data)
          <tr>
            <td>{{ 
              
              $i++ }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td class="gap-3 d-flex"><a href="">Details</a><a href="">Hapus</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="d-flex" style="justify-content: space-between">
        <a href="{{ route('user.create') }}" class="btn btn-primary">tambah orang</a>
        <a href="{{ route('sekolah.create') }}" class="btn btn-primary">tambah sekolah</a>
      </div>
    </div>
  </x-slot>
</x-app-layout>