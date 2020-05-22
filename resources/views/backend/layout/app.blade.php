<!DOCTYPE html>
<html lang="en">
    @include('backend.include.head')
    <body>


    <!-- ======================================
        ******* Page Wrapper Area Start **********
        ======================================= -->
        <div class="ecaps-page-wrapper">
            <!-- Sidemenu Area -->
            @include('backend.include.sidemenu')
        

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
              @include('backend.include.header')
            <!-- Main Content Area -->
            @yield('content')
        </div>



    </div>

    @include('backend.include.footer')
</body>
</html>
