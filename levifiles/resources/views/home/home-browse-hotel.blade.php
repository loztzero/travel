<div class="panel panel-default">
  <div class="panel-body">
    <form>

      <div class="form-group">
        <label class="control-label">Country *</label>
         <select class="form-control" ng-model="field.country" ng-change="getCity()">
          <option value="">Select Country</option>
          {{-- @foreach($countries->Countrys->Country As $value)
          <option>{{ucfirst(strtolower($value->CountryName))}}</option>
          @endforeach  --}}
         </select>
      </div>

      <div class="form-group">
        <label for="locationHotel">Location / Hotel</label>
        <input type="text" class="form-control" id="locationHotel" placeholder="Location or Hotel Name">
      </div>

      <div class="form-group row">
        <div class="col-md-6 col-sm-12">
          <label for="checkIn">Check In</label>
          <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 row-gap">
          <label for="checkOut">Check Out</label>
          <div class='input-group date' id='datetimepicker2'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-md-6 col-sm-12">
          <label for="night">Nights</label>
          <div>
            <select class="form-control" id="night">
              @for($i = 1; $i <=30; $i++)
              <option value={{$i}}>{{$i}}</option>
              @endfor
            </select>
          </div>
        </div>

        <div class="col-md-6 col-sm-12 row-gap">
          <label for="rooms">Rooms</label>
          <select class="form-control" id="rooms" class="col-sm-2">
            @for($i = 1; $i <=9; $i++)
            <option value={{$i}}>{{$i}}</option>
            @endfor
          </select>
        </div>
        <div style="clear:both;"></div>
      </div>

      <button type="submit" class="btn btn-material-teal-900 btn-sm">Search</button>
    </form>
  </div>
</div>