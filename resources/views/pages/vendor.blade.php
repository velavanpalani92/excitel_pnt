
<div class="table-responsive">

    <table class="table table-centered table-nowrap table-striped" id="products-datatable">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Created On</th>
              <th scope="col">Updated On</th>
              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>
            @foreach($vendors as $vendor)
            <tr>
              <td>{{ $vendor->name }}</td>
              <td>{{ $vendor->description }}</td>
              <td>{{ $vendor->created_at }}</td>
              <td>{{ $vendor->updated_at }}</td>

              <td>
                <a class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
            </tr>
          @endforeach
          </tbody>
        </table>


  </div>
