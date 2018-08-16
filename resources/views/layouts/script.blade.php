

@if($halaman=='dashboard')
<!-- ChartJS -->
<script src="{{asset('plugins/Chart.js/Chart.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/morris.js/morris.min.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('plugins/Flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('plugins/Flot/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('plugins/Flot/jquery.flot.pie.js')}}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{asset('plugins/Flot/jquery.flot.categories.js')}}"></script>
@endif
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/ckeditor/ckeditor.js')}}"></script> -->
<script type="text/javascript">
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
  <script>
  $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
      e.preventDefault();
      var $form=$(this);
  $('#modal-danger').modal({ backdrop: 'static', keyboard: false })
      .on('click', '#delete-btn', function(){
      $form.submit();
    });
  });
  </script>

@if($halaman == 'dashboard')
<script src="{{asset('dist/js/chart.js')}}"></script>
@endif