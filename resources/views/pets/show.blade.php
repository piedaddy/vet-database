<h4>Name: {{$pet->name}}</h4>

  @if($pet->species) 
   <p>Species:{{$pet->species}}</p>
  @endif
  <p>Breed: {{$pet->breed}}</p>
  <p>Age: {{$pet->age}}</p>
  @if($pet->weight) 
    <p>Weight: {{$pet->weight}}lbs</p>
  @endif
 <p>Photo:<br>
   <img src="/pet_images/{{$pet->photo}}" alt="{{$pet->name}}" width="200px">
 </p>
 <p>Owner Name: {{$pet->owner->first_name}} {{$pet->owner->surname}}</p>
 <p>Owner ID: {{$pet->owner_id}} </p>
 <p>Visit History:</p>
 {{-- <p>Visit Date:{{$visit->date}}</p>
 <p>Visit Report:{{$visit->report}}</p> --}}
 <a href="{{action('VisitController@index')}}">Add New Visit</td>



 <nav>
  <a href="{{action('PetController@index')}}">Go to main patient list</a>
</nav>

  @if ($pet->id) 

        <form action="{{ action('PetController@delete', ['id' => $pet->id]) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="delete">
        </form>
  @endif 