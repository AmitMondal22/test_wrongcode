@extends('superAdmin.common.main')
@section('supetAdminContent')
<!-- Content -->
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">progress /</span> Add </h4>

              <!-- Collapse -->
              <!-- <h5>progress</h5> -->
              <div class="row">

              @foreach ($data as $progssData)
                <div class="col-12">
                  <div class="card mb-4">
                    <h5 class="card-header">{{$progssData->name}} : {{$progssData->title}}</h5>
                    <div class="card-body">
                      <p class="card-text"><a href="{{$progssData->url}}" target="_blank" rel="noopener noreferrer">{{$progssData->url}}</a></p>
                      <p class="demo-inline-spacing">
                        <!-- <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
                          Link with href
                        </a> -->
                        <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$progssData->Progress_id}}" aria-expanded="false" aria-controls="collapseExample{{$progssData->Progress_id}}" >Show</button>
                      </p>
                      <div class="collapse" id="collapseExample{{$progssData->Progress_id}}">
                        <div class="d-grid d-sm-flex p-3 border">
                          <!-- <img  src="../assets/img/elements/1.jpg" alt="collapse-image"  height="125" class="me-4 mb-sm-0 mb-2"  /> -->
                          <span>
                            {{$progssData->about}}
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <!-- / Content -->
<!-- / Content -->


@endsection

@section('superAdminScript')
    <script>
console.log('ok');
    </script>
@endsection
