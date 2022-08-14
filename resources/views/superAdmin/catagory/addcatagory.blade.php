@extends('superAdmin.common.main')
@section('supetAdminContent')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Catagory /</span> </h4> -->
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Catagory /</span> Add &amp; Catagory</h4>

              <div class="row">

              <!-- Form controls -->
              <div class="col-md-12">
                  <div class="card mb-4">
                    <!-- <h5 class="card-header">Form Controls</h5> -->
                    <div class="card-body">
                        <form action="{{route('catagory-add')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Catagory Name</label>
                                <input type="title" class="form-control" id="exampleFormControlInput1" name="catacory_Namme"  placeholder="Catagory Name" require/>
                            </div>


                            <div class="mt-3">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                            </div>
                        </form>
                  </div>
                </div>
              </div>
</div>
<!-- / Content -->


@endsection

@section('superAdminScript')
    <script>
console.log('ok');
    </script>
@endsection
