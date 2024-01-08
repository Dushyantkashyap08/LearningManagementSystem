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
                                <tr>
                                    <td>1</td>
                                    <td>Introduction to Bootstrap</td>
                                    <td>John Doe</td>
                                    <td>50</td>
                                    <td>4 weeks</td>
                                    <td>
                                        <button class="btn btn-primary">View Details</button>
                                        <button class="btn btn-primary">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
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
                        <form>
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" id="coursename"><br>
                                <label>Teacher's Name</label>
                                <input type="text" class="form-control" id="teachername"><br>
                                <label>Students Enrolled</label>
                                <input type="text" class="form-control" id="totalstudents"><br>
                                <label>Course Duration</label>
                                <input type="text" class="form-control" id="duration"><br>
                            </div>
                            <!-- Add other form fields as needed -->
                            <button type="submit" class="btn btn-primary">Add Course</button>
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    
    <style>
    .modal-open .modal-backdrop {
      filter: blur(100px); /* Adjust the blur intensity as desired */
      opacity: 0.8; /* Adjust the opacity as needed */
    }
      </style>
@endsection
  