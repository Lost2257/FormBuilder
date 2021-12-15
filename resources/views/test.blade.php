@extends('car.app')

@section('content')
    <div class="container">
        @foreach($cars as $car)
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">MarkesId</th>
      <th scope="col">Metai</th>
      <th scope="col">Savininko vardas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $car->Marke }}</td>
      <td>{{ $car->Gamybos_metai }}</td>
      <td>{{ $car->Savininko_vardas }}</td>
    </tr>
  </tbody>
</table>
        @endforeach
    </div>
@endsection