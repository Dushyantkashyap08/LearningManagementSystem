<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')

  <!--courses goes here-->
  @section('courses')
    <div class="d-flex align-items-stretch">
      
      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

       <!--page-content goes here-->
        <div class="page-content">

          <!--page-header goes here-->
          <div class="page-header">
            <div class="container-fluid">
              <h1 class="h1 no-margin-bottom">Courses</h1>
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
                    <button class="h3 btn btn-primary" data-toggle="modal" data-target="#addCourseModal">Add Course</button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course</th>
                                    <th>Teacher's Name</th>
                                    <th>Students Enrolled</th>
                                    <th>Course Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($data as $items)
                                <tr>
                                    <td>{{$items->id}}</td>
                                    <td>{{$items->course}}</td>
                                    <td>{{$items->teacher_name}}</td>
                                    <td>{{$items->students_enrolled}}</td>
                                    <td>{{$items->duration}}</td>
                                    <td>
                                        <button class="btn btn-primary">View Details</button>
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

          <!-- Add Course Modal -->
          <div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCourseModalLabel">Add New Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add your form fields here -->
                        <!-- For example: -->
                        <form action="{{url('addcourse')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" name="coursename"><br>
                                <label>Teacher's Name</label>
                                <input type="text" class="form-control" name="teachername"><br>
                                <label>Students Enrolled</label>
                                <input type="text" class="form-control" name="totalstudents"><br>
                                <label>Course Duration</label>
                                <input type="text" class="form-control" name="duration"><br>
                            </div>
                            <!-- Add other form fields as needed -->
                            <button type="submit" value="addcourse" class="btn btn-primary">Add Course</button>
                        </form>
                    </div>
                </div>
            </div>
          </div>

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
  