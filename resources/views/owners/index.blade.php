<h1>Owners Directory</h1>
<div>
  <table>
    <tr>
      <th>Owner Name</th>
      <th>Owner ID</th>
      <th>Pet(s)</th>
      <th>Visit History</th>
      <th>Add a Visit</th>
    </tr>
  @foreach($owners as $owner) 
  <tr>
    <td><p>{{$owner->first_name}} {{$owner->surname}}</p> </td>
    <td><p> {{$owner->id}} </p> </td>
    <td> </td>
    <td><a href="{{action('OwnerController@show', ['id' => $owner->id ?? '']) }}">Browse</td>
    <td><a href="{{action('VisitController@index')}}">Add</td>
  </tr>
  @endforeach
  </table>
</div>