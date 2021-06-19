<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <form wire:submit.prevent="SaveInward">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="category">Partner</label>
                      <select id="selectize-select" wire:model="category_name">
                        <option value="">Select Partner</option>
                        @foreach ($partners as $partner)
                            <option value="{{ $partner->id }}">{{ $partner->windowname }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="category">OLT</label>
                      <select id="selectize-select" wire:model="category_name">
                        <option value="">Select OLT</option>
                        @foreach ($inwards as $inward)
                            <option value="{{ $inward->id }}">{{ $inward->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="serial">Serial No</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="serial">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="mac">MAC Address</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="mac">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="category">Category</label>
                      <select id="selectize-select" wire:model="category_name">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="vendor">Vendor</label>
                      <select id="selectize-select" wire:model="vendor_name">
                        <option value="">Select Vendor</option>
                        @foreach ($vendors as $vendor )
                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                        @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="description">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-center">Submit</button>
              </form>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
