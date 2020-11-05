<form method="POST" action="/listing">
    {{ csrf_field() }}
    <p>
    <label for="name">Name of the restaurant</label>
    <input type="text" name="name" id="name">
    </p>
    <p>
    <label for="adress">Adress of the restaurant</label>
    <input type="text" name="adress" id="adress">
    </p>
    <p>
    <label for="description">Description of the restaurant</label>
    <input type="text" name="description" id="description">
    </p>
    <input type="submit" value="Submit"></input> 
</form>