<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <form wire:submit.prevent="SaveVendor">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Vendor Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="" wire:model="name">
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
