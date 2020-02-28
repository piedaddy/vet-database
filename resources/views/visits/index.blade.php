<form action="{{action('VisitController@create')}}" method="post">
  <label for="">Date of Visit</label>
    <input type="date" name="date">

  <label for="">Owner of Visit</label>
    {{-- <input type="text" name="owner_id"> --}}
    <select id="owner_name" name="owner_name">
        @foreach($owners as $owner)
          <option value="{{$owner->name}}">{{$owner->name}}</option>
        @endforeach
    </select>

  <label for="">Pet of Visit</label>
    {{-- <input type="text" name="pet_id"> --}}
    <select id="pet_name" name="pet_name">
      @foreach($pets as $pet)
      <option value="{{$pet->name}}">{{$pet->name}}</option>
     @endforeach
    </select>

  <label for="">Report of Visit</label>
    <textarea name="report" rows="3" columns="10"></textarea>

    <div>
      <input type="submit" value="update visit">
    </div>
</form>