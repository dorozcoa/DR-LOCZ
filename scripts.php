
<!-- LIbreria Bootstrap -->
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="js/librerias/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/bootstrap-uploader/js/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="js/jquery.blockui.js"></script>

    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>
    <script src="js/colorbox/jquery.colorbox-min.js" language="javascript" type="text/javascript"></script>


    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
    <script src="js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript" src="plugins/jscroll-master/jquery.jscroll.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
    <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="plugins/coolcarousel/jquery.carouFredSel-6.0.4-packed.js"></script>
    <script type="text/javascript" src="plugins/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="plugins/data-tables/DT_bootstrap.js"></script>
    <script type="text/javascript" src="plugins/nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="plugins/metr-folio/js/jquery.metro-gal.plugins.min.js"></script>
    <script type="text/javascript" src="plugins/metr-folio/js/jquery.metro-gal.megafoliopro.js"></script>
    <script type="text/javascript" src="plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/nestable.js"></script>



    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/form-component.js"></script>
    <!--script for datetable-->
    <script src="js/dynamic-table.js"></script>
    <!--script for calendar-->
    <script src="js/external-dragging-calendar.js"></script>
    <!-- END JAVASCRIPTS -->

    <script>

        $(function () {
           $(" input[type=radio], input[type=checkbox]").uniform();
        });
   </script>
   <script type="text/javascript">
    $(document).ready(function(){
    $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('▲')
                else $(this).find('span').html('▼')
        })
    });
    </script>

</body>
</html>