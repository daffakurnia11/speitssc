<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPE ITS SC | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <style>
    .note-editor.note-frame.card {
      margin-bottom: 0;
    }
    .note-insert, .note-view, .note-table {
      display: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.navbar')

  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/bootstrap4/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      items: 1,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true
    });

    $(".btn-submit").click(function(e){
      e.preventDefault();

      let id = $(this).data('member');
      let point = $('.score-' + id).val();

      $.ajax({
        type:'PUT',
        url:"/dashboard/updatePoint/" + id,
        data:{point:point, _token: '{{csrf_token()}}'},
        cache: false,
        success:function(data){
          $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Point Updated!',
            body: data.name + '\'s point has been updated to ' + data.point
          })
        }
      });
    });
  });
  $(function () {
    $("#shortlinkList").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo('#shortlinkList_wrapper .col-md-6:eq(0)');
    $("#memberList").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#memberList_wrapper .col-md-6:eq(0)');
    // Summernote
    $('#summernote').summernote()
  });
</script>
</body>
</html>
