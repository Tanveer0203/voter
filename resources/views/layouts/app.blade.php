<!DOCTYPE html><html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Voter Card">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Voter Card">
    <title>Voter Card</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('css/examples.css" rel="stylesheet')}}">
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.min.css') }}">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include DataTables library -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!-- Include DataTables Buttons extension -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  </head>
 

<body>
@include("includes.header")

@yield("content")

@include("includes.footer")

 <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>

@if (session()->has('success'))
    <script>
        $(function(){
        Swal.fire({
            title: "Success!",
            html: "{{ session()->get('success') }}",
            type: "success",
            showConfirmButton: true,
            timer: 5000
        });
        });
    </script>
@endif

@if (Session::has('flash'))
    <?php $flash = Session::get('flash');
    Session::forget('flash'); ?>

    <script>
        $(function(){
        Swal.fire({
            html: "{{ $flash['message'] }}",
            type: "{{ $flash['msg_type'] }}",
            title: "{{ $flash['error_type'] }}",
            showConfirmButton: true,
            timer: 5000
        });
        });
    </script>
@endif


@if (session()->has('error'))
    <script>
        $(function(){
        Swal.fire({
            title: "Error!",
            html: "{{ session()->get('error') }}",
            type: "error",
            showConfirmButton: true,
            timer: 5000
        });
        });
    </script>
@endif

@if ($errors->any())
    <script>
        $(function(){
        Swal.fire({
            title: "Error!",
            html: "<ul class='text-left m-auto d-block'> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>",
            type: "error",
            showConfirmButton: true,
        });
        });
    </script>
@endif

<script>
	$(function(){
	  $('#datepicker').datepicker({ dateFormat: 'dd/mm/yy' });
	});

</script>

<script>
        $(document).ready(function() { 
            $('#example').DataTable( { dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ] } ); 
        } );
    </script>
</body>

</html>

