<!--layouts.header starts here-->
@include('admin-panel.layouts.header')
<!--layouts.header ends here-->

    <!--yield section starts here-->
    @yield('dashboard')
    @yield('courses')
    @yield('classes')
    @yield('students')
    @yield('teachers')
    @yield('chat')
    @yield('reports')
    @yield('script')
    <!--yield section ends here-->
    
<!--layouts.footer starts here-->
@include('admin-panel.layouts.footer')
<!--layouts.footer ends here-->
    