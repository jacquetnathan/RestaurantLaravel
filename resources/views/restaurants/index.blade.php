@foreach($restaurants as $restaurant)
    <h2>{{ $restaurant->name }} <strong>(Restaurant adresse is {{ $restaurant->adress }})</strong></h2>
    <p>{{ $restaurant->description }}</p>
@endforeach