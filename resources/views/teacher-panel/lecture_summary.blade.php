<!--extending layouts.main here-->
@extends('teacher-panel.layouts.main')

  <!--dashboard goes here-->
  @section('lecture_summary')

  <!--sidebar goes here-->
@include('teacher-panel.layouts.sidebar')
<!--sidebar ends here-->

      <h1>Lecture Summary</h1>
@endsection
<!--section ends here-->

@section('script')
<script src="admin-template/vendor/chart.js/Chart.min.js"></script>
    <script src="admin-template/vendor/jquery/jquery.min.js"></script>
    <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin-template/js/front.js"></script>
    <!-- JavaScript files ends here-->
@endsection
  