@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input id="name" class="form-control" type="text" name="name">
</div>
<div class="form-group">
    <label for="my-input">انتخاب ولایت</label>
    <select name="province_id" id="province_id" onchange="ProvinceDistrict();" >
      @foreach ($provinces as $province)
      <option value="{{$province->id}}">{{$province->name}}</option>
      @endforeach
    </select>
</div>
<div class="form-group">
    <label for="my-input">انتخاب ولسوالی</label>
    <select name="district_id" id="district_id">
      <option value="">Select</option>
    </select>
</div>

<script>

function ProvinceDistrict() {
   var id= document.getElementById("province_id").value;
  $.ajax({
            url:"{{ URL('provinceid')}}"+"/"+id+"/find",
            method:"get",
            dataType:"JSON",
            success:function(responseText){
              document.getElementById("district_id").innerHTML = "";
            for( var index =0; index<responseText.length; index++) {
              console.log(responseText[index].name);
                var option = document.createElement('option');
                option.text =responseText[index].name;
                 document.getElementById("district_id").add(option, null);
            }
            }
        })
  }
</script>
