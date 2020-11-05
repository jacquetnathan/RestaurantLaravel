<form method="POST" action="/edit/{{ $restaurants->id }}">
    {{ csrf_field()}}
    {{ method_field('PATCH') }}
    <input type="text" name="name" placeholder="Name" value="{{ $restaurants->name }}">
    <input type="submit" value="Submit"></input> 
</form>