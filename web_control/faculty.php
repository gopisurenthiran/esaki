<?php 
include 'dbc.php'; 
page_protect();
?>
<?php $page = ""; ?>
<?php 
  if(isset($_REQUEST['rid'])){
    $id = $_REQUEST['rid'];
    $del = mysqli_query($link,"delete from faculty where id=$id");
    header("location:faculty.php");
  }
  
  

  ?>
<?php include 'header.php'; ?>
<style type="text/css">
  .margin-left-50{
      margin-left: 50% !important;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'top_header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'side_menu.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $page = 'Faculty'; ?>
        <small>View Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $page; ?></a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- Table start -->
            <div class="box">
              <div class="box-header">
                <div class="row">
                  <div class="col-sm-10">
                    <h3 class="box-title"><?php echo $page; ?></h3>
                  </div>
                  <div class="col-sm-2">
                    <a class="btn btn-primary" style="text-align: right" href="faculty_add.php?page=<?php echo $page; ?>">Add <?php echo $page; ?></a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php if(isset($_REQUEST['msg'])){ ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 
                  <?php echo "Successfully Updated!"; ?>
                </div>
                <?php } 

                $sel_rw = mysqli_query($link,"select * from faculty");  ?>
                
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr> 
                        <th>S.No</th>
                        <th>Title</th>
                        
                        <th>Sort Order </th>
                        <th>Status </th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                  <tbody>
                    <?php $i=1;
                     while($row = mysqli_fetch_object($sel_rw)){  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->title; ?></td>
                        
                        <td> <?php echo $row->sort; ?> </td>
                        <td><?php echo $row->status; ?></td>
                        <td>
                          <a href="faculty_add.php?pid=<?php echo $row->id; ?>" title="Edit Details"><i class="fa fa-edit"></i></a>
                          <a href="faculty.php?rid=<?php echo $row->id; ?>&del=yes" title="Delete Details"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>
               
            </div>
          </div>

          
        </div>
      </div>
    </div>
    </section>
  </div>
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
  
  </script>
  <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({
      dom: "Blfrtip",
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true,
        keys: true
    });

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->