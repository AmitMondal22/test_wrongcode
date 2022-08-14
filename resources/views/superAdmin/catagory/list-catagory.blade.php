{{-- @php
                        echo"<pre>";
                      print_r($data);
                      echo"</pre>";
                      exit();
                  @endphp --}}
@extends('superAdmin.common.main')
@section('supetAdminContent')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Catagory /</span> </h4>

              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('catagory-add')}}"><i class='bx bxs-folder-plus me-1'></i> Add</a>
                </li>
              </ul>

              <div class="row">

              <div class="card">
                <!-- <h5 class="card-header">Table Caption</h5> -->
                <div class="table-responsive text-nowrap">
                  <table class="table">

                    <thead>
                      <tr>
                        <th>Catagory Name</th>
                        <th>Create By</th>
                        <th>Created At</th>
                        <th>Update At</th>

                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>


                    @foreach ($data as $catagoryData)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$catagoryData->catagory_name}}</strong></td>
                        <td>{{$catagoryData->name}}</td>
                        <td>{{$catagoryData->created_at}}</td>
                        <td>{{$catagoryData->updated_at}}</td>


                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      @endforeach



                    </tbody>
                    <thead>
                      <tr>
                        <th>Catagory Name</th>
                        <th>Create By</th>
                        <th>Created At</th>
                        <th>Update At</th>

                        <th>Actions</th>
                      </tr>
                    </thead>
                  </table>


                </div>
              </div>


              </div>
</div>

<div>
    {{ $data->links('superAdmin.s_admin_pagenation') }}
</div>
<!-- / Content -->


@endsection

@section('superAdminScript')
    <script>
console.log('ok');
    </script>
@endsection
