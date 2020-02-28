<h2>Edit Pet File</h2>
<div class = "form">
  
  @if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

@if(Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif


  <form action="{{action('PetController@update', ['id' => $id])}}" method="post">
    @csrf
    <label for="">Pet Name</label>
      <input type="text" name="name" value="">
    <label for="">Pet Breed</label>
      <input type="text" name="breed" value="">
    <label for="">Pet Age</label>
      <input type="number" name="age" value="">
    <label for="">Pet Height</label>
      <input type="number" name="height" value="">
    <label for="">Pet photo</label>
      <input type="number" name="photo" value="">
      <label for="">Pet Owner ID</label>
      <input type="number" name="owner_id" value="">

      <div class="form-submit">
        <input type="submit">
      </div>
  </form> 

</div>