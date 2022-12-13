@extends('header')

@section("content")
  @if($tampilkanPeserta)
    <ul>
      @foreach ($peserta as $item)
        <li>{{ $item }}</li>
      @endforeach
    </ul>
  @endif
@endsection