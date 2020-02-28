<div>
  @foreach($owners as $owner) 
    <h4>{{$owner->first_name}} {{$owner->surname}}</h4>
    <p> {{$owner->id}} </p>
  @endforeach

</div>