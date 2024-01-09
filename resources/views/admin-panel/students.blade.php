<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')

  <!--courses goes here-->
  @section('students')
    <div class="d-flex align-items-stretch">
      
      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

       <!--page-content goes here-->
        <div class="page-content">

          <!--page-header goes here-->
          <div class="page-header">
            <div class="container-fluid">
              <h1 class="h1 no-margin-bottom">Students</h1>
            </div>
          </div>
          <!--page-header ends here-->

          @if(session()->has('success') || session()->has('error'))
          <div class="alert {{ session()->has('success') ? 'alert-success' : 'alert-danger' }}">
              @if(session()->has('success'))
                  {{ session()->get('success') }}
              @else
                  {{ session()->get('error') }}
              @endif
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          </div>
          @endif

          <!--no-padding section goes here-->
          <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                  <div class="container mt-5">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student's Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($data as $items)
                                <tr>
                                    <td>{{$items->id}}</td>
                                    <td>{{$items->name}}</td>
                                    <td>{{$items->email}}</td>
                                    <td>
                                        <button class="btn btn-primary">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                              @endforeach
                              <tr>
                                <td colspan="6">
                                  {{$data->links('pagination::bootstrap-5')}}
                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
          </section>
          <!--no-padding section ends here-->

        </div>
    </div>
    <!--page-content ends here-->
@endsection
<!--section ends here-->

@section('script')
    <script src="admin-template/vendor/jquery/jquery.min.js"></script>
    <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <style>
    .modal-open .modal-backdrop {
      filter: blur(100px);
      opacity: 0.8; 
    }
    </style>
@endsection
  