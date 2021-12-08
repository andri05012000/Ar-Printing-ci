    <footer class="footer">
	                        © 2019. AR Printing.
	                    </footer>
	                </div>

<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.scrollTo.min.js"></script>

<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="<?php echo base_url(); ?>ubold/assets/pages/datatables.init.js"></script>


<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>ubold/assets/js/jquery.app.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

</body>

<!-- Mirrored from coderthemes.com/ubold_2.1/dark_leftbar/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2016 02:52:23 GMT -->
</html>