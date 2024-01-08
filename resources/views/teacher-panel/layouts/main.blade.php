<!--layouts.header starts here-->
@include('teacher-panel.layouts.header')
<!--layouts.header ends here-->

    <!--yield section starts here-->
    @yield('profile')
    @yield('create_course')
    @yield('attendance')
    @yield('lecture_summary')
    @yield('student_performance')
    @yield('batches')
    @yield('assignment_review')
    @yield('script')
    <!--yield section ends here-->
    
<!--layouts.footer starts here-->
{{-- @include('teacher-panel.layouts.footer') --}}
<!--layouts.footer ends here-->
    