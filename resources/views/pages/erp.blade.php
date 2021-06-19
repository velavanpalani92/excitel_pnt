
<div class="table-responsive">

    <table class="table table-centered table-nowrap table-striped" id="products-datatable">
          <thead>
            <tr>
              <th scope="col">Partner Code</th>
              <th scope="col">Window Name</th>
              <th scope="col">Authorised Person</th>
              <th scope="col">Contact No</th>
              <th scope="col">Zone</th>
              <th scope="col">City</th>
              <th scope="col">Region</th>
              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>

          @foreach($partners as $partner)
            <tr>
              <td>{{ $partner->partnercode }}</td>
              <td>{{ $partner->windowname }}</td>
              <td>{{ $partner->auth_person }}</td>
              <td>{{ $partner->contact_num }}</td>
              <td>{{ $partner->zone }}</td>
              <td>{{ $partner->city }}</td>
              <td>{{ $partner->region }}</td>
              <td>
                <a href={{ route('partner.view', $partner->partnercode) }} class="action-icon"> <i class="mdi mdi-eye"></i></a>
                <a href="" wire:click.prevent="edit({{ $partner }})" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
            </tr>
          @endforeach
          </tbody>
        </table>


  </div>
