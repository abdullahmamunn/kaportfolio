@include('layouts.header')

<body class="vertical  light">
  <div class="wrapper">
    @include('layouts.nav')
    @include('layouts.side-bar')
    <main role="main" class="main-content">
      @yield('content')
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/moment.min.js')}}"></script>

  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/js/simplebar.min.js')}}"></script>
  <script src="{{asset('admin/js/daterangepicker.js')}}"></script>
  <script src="{{asset('admin/js/jquery.stickOnScroll.js')}}"></script>
  <script src="{{asset('admin/js/tinycolor-min.js')}}"></script>
  <script src="{{asset('admin/js/config.js')}}"></script>
  <script src="{{asset('admin/js/d3.min.js')}}"></script>
  <script src="{{asset('admin/js/topojson.min.js')}}"></script>
  <script src="{{asset('admin/js/datamaps.all.min.js')}}"></script>
  <script src="{{asset('admin/js/datamaps-zoomto.js')}}"></script>
  <script src="{{asset('admin/js/datamaps.custom.js')}}"></script>
  <script src="{{asset('admin/js/Chart.min.js')}}"></script>
  <script>
    /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="{{ asset('admin') }}/sweetalert/sweetalert.js"></script>
  <script>
    swal({
            // title: "Are you sure?",
        })
  </script>
  <script src="{{ asset('admin') }}/toastr/toastr.min.js"></script>

  <script src='{{ asset("admin/js/jquery.dataTables.min.js") }}'></script>
  <script src='{{ asset('admin/js/dataTables.bootstrap4.min.js') }}'></script>

  <script src="{{asset('admin/js/gauge.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('admin/js/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/js/apexcharts.custom.js')}}"></script>
  <script src="{{asset('admin/js/apps.js')}}"></script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    $('#dataTable-1').DataTable(
    {
      autoWidth: true,
      "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
      ]
    });
  </script>
  <script type="text/javascript">
    // notification
        $(function() {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "0",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
  </script>
  <script>
    $(document).on('click', '.delete', function() {
              var data_id = $(this).attr('data-id');
              var data_url = $(this).attr('data-route');
              var _token = '{{ csrf_token() }}';
              var $tr = $(this).closest('tr');
              swal({
                      title: "Are you sure?",
                      text: "You will not be able to recover this information!",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonClass: 'btn-danger',
                      confirmButtonText: 'Yes, delete it!',
                      cancelButtonText: "No, cancel plz!",
                      closeOnConfirm: false,
                      closeOnCancel: false
                  },
                  function(isConfirm) {
                      if (isConfirm) {
                          $.ajax({
                              url: data_url,
                              type: "post",
                              data: {
                                  id: data_id,
                                  _token: _token
                              },
                              success: function(response) {
                                // console.log(response);
                                  swal("Deleted!", "Data has been Deleted.", "success"),
                                      swal({
                                              title: "Deleted!",
                                              text: "Data has been Deleted.",
                                              type: "success"
                                          },
                                          function(isConfirm) {
                                              if (isConfirm) {
                                                  $tr.find('td').fadeOut(1000, function() {
                                                      $tr.remove();
                                                  });
                                                  toastr.success(response.success);
                                              }
                                          });
                              }
                          });
                      } else {
                          swal("Cancelled", "Your data is safe :)", "error");
                      }
                  });

          });
  </script>
  @include("layouts.notification")
  @yield('script')
</body>

</html>
