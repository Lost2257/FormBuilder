@extends('car.app')

@section('content')
    <div class="container">
    <table id="lentele" class="table table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@sortablelink('Marke')</th>
      <th scope="col">@sortablelink('Gamybos_metai')</th>
      <th scope="col">@sortablelink('Savininko_vardas')</th>
    </tr>
  </thead>
        @foreach($cars as $car)
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td>{{ $car->Marke }}</td>
      <td>{{ $car->Gamybos_metai }}</td>
      <td>{{ $car->Savininko_vardas }}</td>
    </tr>
  </tbody>

        @endforeach
</div>
        </table>
        {!! $cars->appends(\Request::except('page'))->render() !!}

            <a class="btn btn-success" href="/cars/create">Prideti masina</a>
    </div>
@endsection
