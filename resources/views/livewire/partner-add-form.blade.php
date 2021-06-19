<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <form wire:submit.prevent="submit">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="partnercode">Partner Code</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="PartnerCode">
                    @error('PartnerCode')
                    <div class="error">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="windowname">Window Name</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="" wire:model="WindowName">
                    @error('WindowName')
                    <div class="error">{{ $message }}</div>@enderror
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="auth_person">Authorised Person</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="AuthorisedPerson">
                      @error('AuthorisedPerson')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="contact_num">Contact No</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="" wire:model="ContactNo">
                      @error('ContactNo')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="" wire:model="Address">
                  @error('Address')
                  <div class="error">{{ $message }}</div>@enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="latlong">Lat Long</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="LatLong">
                      @error('LatLong')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="area">Area</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="" wire:model="Area">
                      @error('Area')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="zone">Zone</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="Zone">
                      @error('Zone')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="region">Region</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="" wire:model="Region">
                      @error('Region')
                      <div class="error">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="" wire:model="City">
                    @error('City')
                    <div class="error">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="infra">Infrastructure</label>
                    <input type="text" class="form-control" id="" wire:model="Infra">
                    @error('Infra')
                    <div class="error">{{ $message }}</div>@enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary float-center">Submit</button>
              </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
