</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="{!! asset('/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! asset('/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="{!! asset('/plugins/datatables/jquery.dataTables.js') !!}" type="text/javascript"></script>
<script src="{!! asset('/plugins/datatables/dataTables.bootstrap.js') !!}" type="text/javascript"></script>

<!-- SlimScroll -->
<script src="{!! asset('/plugins/slimScroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
<!-- FastClick -->
<script src='{!! asset('/plugins/fastclick/fastclick.min.js') !!}'></script>
<!-- AdminLTE App -->
<script src="{!! asset('/dist/js/app.min.js') !!}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->

<!-- page script -->
<script type="text/javascript">
    $(function () {

        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });

      $('#example1').dataTable();

    });
    $('.load-ajax-modal').click(function(){

        $.ajax({
            type : 'GET',
            url : $(this).data('path'),

            success: function(result) {
                $('#myModal div.modal-content').html(result);
            }
        });
    });
</script>

</body>
</html>