<x-app-layout>
   @section('content')
     <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
          
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{ $todayCount}} </div>
                    <div>Today Voters</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->

            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-success">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{ $totalCount}} </div>
                    <div>All Voters</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
         
        </div>
      </div>

    @endsection
    </x-app-layout>
