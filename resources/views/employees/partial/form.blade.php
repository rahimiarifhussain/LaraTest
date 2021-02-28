@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input id="name" class="form-control" type="text" name="name">
</div>
<div class="form-group">
    <label for="my-input">Text</label>
    <select name="province_id" id="province_id" onchange="ProvinceDistrict();" >
      @foreach ($provinces as $province)
      <option value="{{$province->id}}">{{$province->name}}</option>
      @endforeach
    </select>
</div>
<div class="form-group">
    <label for="my-input">Text</label>
    <select name="province_id" id="province_id">
      @foreach ($provinces as $province)
        @php
            $id = $province->find($province->id)->districts;
        @endphp
        @foreach ($id as $dist)
            <option value="">{{$dist->name}}</option>
        @endforeach
      @endforeach
    </select>
</div>
<script>
 function ProvinceDistrict() {
    // alert("this is ");
   var id = document.getElementById('province_id').value;
   var t =id->find(id);
   console.log(t);
  }
</script>
