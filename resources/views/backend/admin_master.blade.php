<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('Backend/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('Backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Backend/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('Backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('Backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('Backend/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('Backend/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller">
    @include('backend.body.header')
    @include('backend.body.sidebar')

  </div>

  <!-- plugins:js -->
  <script src="{{asset('Backend/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('Backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('Backend/data_table/data-table.js')}}"></script>
  <script src="{{asset('Backend/data_table/datatables.min.js')}}"></script>
  <script src="{{asset('Backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('Backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('Backend/js/dataTables.select.min.js')}}"></script>
<!--Sweet Alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $(document).on('click', '#deleteData', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Are You Sure?',
                    text: "Are You Sure Delete This Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your File has been Deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    </script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('Backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('Backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Backend/js/template.js')}}"></script>
  <script src="{{asset('Backend/js/settings.js')}}"></script>
  <script src="{{asset('Backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('Backend/js/dashboard.js"></script>
  <script src="{{asset('Backend/js/Chart.roundedBarCharts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
  <!-- End custom js for this page-->
</body>

</html>