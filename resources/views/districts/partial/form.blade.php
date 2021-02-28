@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input id="name" class="form-control" type="text" name="name">
</div>
<div class="form-group">
    <label for="my-input">Text</label>
    <select name="province_id" id="province_id">
      @foreach ($provinces as $province)
      <option value="{{$province->id}}">{{$province->name}}</option>
      @endforeach
    </select>
</div>
