<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')

  <!--courses goes here-->
  @section('report')
    <div class="d-flex align-items-stretch">
      
      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

       <!--page-content goes here-->
        <div class="page-content">

          <!--page-header goes here-->
          <div class="page-header">
            <div class="container-fluid">
              <h1 class="h1 no-margin-bottom">Chats</h1>
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
                  
                </div>
            </div>
            {{-- @endforeach --}}
          </section>
          <!--no-padding section ends here-->

          {{-- <!-- Add Course Modal -->
          <div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCourseModalLabel">Add New Teacher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add your form fields here -->
                        <!-- For example: -->
                        <form action="{{url('addteacher')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Teacher Name</label>
                                <input type="text" class="form-control" name="teachername"><br>
                                <label>Email</label>
                                <input type="text" class="form-control" name="teacheremail"><br>
                                <label>Password</label>
                                <input type="text" class="form-control" name="teacherpassword"><br>
                            </div>
                            <!-- Add other form fields as needed -->
                            <button type="submit" value="addteacher" class="btn btn-primary">Add Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
          </div>

        </div>
    </div> --}}
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
  