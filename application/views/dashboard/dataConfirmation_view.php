<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){



  var oTable =   $('#confirmation').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "getJsonConfirmationData",
        "columnDefs": [
               {
                   "targets": 5,
                   "render": function(data, type, row, meta){
                     console.log(data+" "+type+" "+row+" "+meta);
                      return '<div class="btn-group btn-group-md"><button type="button" class="btn btn-danger tolak" id="'+data+'">Tolak</button>'+
                      '<button type="button" class="btn btn-info openBtn" id="'+data+'">Periksa</button>'+
                      '<button type="button" class="btn btn-success approve" id="'+data+'">Approve</button> </div>';
                   }
               },
                 { "width": "30%", "targets": 4 },
                 { "width": "10%", "targets": 3 }

           ]    ,
        "columns": [
            { "data": "nip" },
            { "data": "nama" },
            { "data": "instansi" },
            { "data": "subUnit" },
            { "data": "NJAB" },
            { "data": "action" }
        ]
    } );

    $('#confirmation').on('click','.openBtn',function(){
       var id = $(this).attr('id');
       console.log("ini Loh Id nya :"+id);
         $('.modal-body').load('modalViewConfirmation?id='+id,function(){
             $('#myModal').modal({show:true});
         });
     });

     $('#confirmation').on('click','.approve',function(){
        var id = $(this).attr('id');
        console.log("ini Loh Id nya :"+id);
        $.ajax({
              type: 'POST',
              url: '<?php echo base_url()?>dashboard/updateStatusDataConfirmation',
              data: {
                  'id': id,
                  'sts': 1 // <-- the $ sign in the parameter name seems unusual, I would avoid it
              },
              success: function(msg){
                  alert('Update ' + msg);
                  
                  oTable.draw();
              },
              error: function (response) {
                console.log(response);
                alert('Ada Masalah Di server');
              }
          });
      });
   });

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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="fa fa-dashboard"></i> Dashboard

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Check Update Data Pegawai</h4>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
      </div>
      <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Perubahan Identitas PNS</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
      </div>
      <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Confirmation Status</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    <table id="confirmation" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Nama</th>

                                    <th>Instansi</th>
                                    <th>SubUnit</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                  <th>Nip</th>
                                  <th>Nama</th>

                                  <th>Instansi</th>
                                  <th>SubUnit</th>
                                  <th>Jabatan</th>
                                  <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>



     </div>



    </div>
