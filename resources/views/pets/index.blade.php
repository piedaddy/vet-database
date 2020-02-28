<div>

  <form action="{{action('PetController@search')}}" method="post">
    @csrf 
    <input type="text" id="search" name="search">
    <input type="submit" value="search">
  </form>

  @foreach($pets as $pet) 
    <h4>Name: {{$pet->name}}</h4>

   {{-- @if({{$pet->species}} )  --}}
      <p>Species:{{$pet->species}}</p>
    {{-- @endif --}}
    <p>Breed: {{$pet->breed}}</p>
    <p>Age: {{$pet->age}}</p>
    <p>Weight: {{$pet->species}}lbs</p>
    <p>Photo:<br>
      <img src="/pet_images/{{$pet->photo}}" alt="{{$pet->name}}" width="200px">
    </p>
    <p>Owner Name: {{$pet->owner->first_name}} {{$pet->owner->surname}}</p>
    <p>Owner ID: {{$pet->owner_id}} </p>
    <nav>
      <a href="{{action('PetController@show', ['id'=>$pet->id])}}">Go to specific page</a>
    </nav>

  @endforeach
</div>