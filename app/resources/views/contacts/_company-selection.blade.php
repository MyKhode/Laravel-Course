
<select class="form-select">
    <option value="" selected>All Companies</option>
    @foreach($companies_data as $key=>$value):
        <option value="{{$key}}">{{$value['name']}}</option>
    @endforeach
</select>