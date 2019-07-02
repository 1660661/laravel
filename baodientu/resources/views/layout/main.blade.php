<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
        <!-- ##### Header Area Start ##### -->
            @include('partials.Header')   
        <!-- ##### Header Area End ##### -->
        <!-- ##### Hero Area Start ##### -->
            @yield('content')
        <!-- ##### Hero Area Start ##### -->
        <!-- ##### Footer Area Start ##### -->
             @include('partials.Footer') 
        <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
        @include('partials.importjs')
        @yield('js')
</body>

</html>