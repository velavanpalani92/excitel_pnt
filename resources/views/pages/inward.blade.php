
<div class="table-responsive">

    <table class="table table-centered table-nowrap table-striped" id="products-datatable">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Serial No</th>
              <th scope="col">MAC Address</th>
              <th scope="col">Category</th>
              <th scope="col">Vendor</th>
              <th scope="col">Created On</th>
              <th scope="col">Updated On</th>
              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>

          @foreach($inwards as $inward)
            <tr>
              <td>{{ $inward->name }}</td>
              <td>{{ $inward->serial }}</td>
              <td>{{ $inward->mac }}</td>
              <td>{{ $inward->category_id }}</td>
              <td>{{ $inward->vendor_id }}</td>
              <td>{{ $inward->created_at}}</td>
              <td>{{ $inward->updated_at }}</td>
              <td>
                <a href="/" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                <a href="" wire:click.prevent="edit({{ $inward }})" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
            </tr>
          @endforeach
          </tbody>
        </table>


  </div>
