@extends('template.master')

@section('assets')
<!-- Datatable -->
<link href="{{url('assets/plugin/datatables/datatablesBootsrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('/')}}/assets/landing/plugin/croppie/croppie.css">

<script src="{{url('assets/plugin/datatables/datatables.js')}}"></script>
<script src="{{url('assets/plugin/datatables/dataTables.bootstrap4.min.js')}}"></script>

<link href="{{url('assets/plugin/summernote/summernote-bs4.css')}}" rel="stylesheet">
<script src="{{url('assets/plugin/summernote/summernote-bs4.js')}}"></script>
<script src="{{url('/')}}/assets/landing/plugin/croppie/croppie.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                            <form  mthod="POST" class="row" id="form-email" method="post" action="{{url('/')}}/application/email/send-broadcast">
                                <div class="col-sm-4">
                                    <h4 class="card-title mb-0">Artikel</h4>
                                    <div class="small text-muted">GBKP Runggun Tambun</div>
                                </div>
                                
                                <div class="col-sm-12 form-group mt-4">
                                    <label><strong>Judul</strong></label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>

                                <div class="col-sm-12 form-group">
                                    <label><strong>Tag</strong></label>
                                    <input type="text" name="tag" id="tag" class="form-control" required>
                                </div>


                                <div class="col-sm-12 form-group">
                                    <label><strong>Penulis</strong></label>
                                    <input type="text" name="subject" id="subject" class="form-control">
                                </div>


                                <div class="col-sm-12 col-md-8">
                                    <div id="summernote"></div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                  <div id="upload-demo" style="width:100%;padding: 0px;">
                                  </div>
                                   <input style="display: none;" type="file" id="upload-photo" accept="image/*">
                                </div>
                                @csrf
                                <input type="hidden" name="emailBody" id="emailBody">
                            </form>
                            <div class="row">
                                <div class="col-md-3 col-sm-12 offset-md-9">
                                    <button type="button" class="btn btn-success btn-sm pull-right" id="btn-send-email">Simpan</button>
                                </div>
                            </div>
                        </div>            
                    </div>
        </div>
    </div>
@endsection


@section('footcode')
<script type="text/javascript">    
  var Page = function () {
    $uploadCropCont  = document.getElementById('upload-demo');
    $uploadCrop      = new Croppie($uploadCropCont, {
          enableExif: true,
          enableResize: true,
        enableOrientation: true,
          viewport: {
              width: 200,
              height: 200,
              type: 'circle'
          },
          boundary: {
              width: 300,
              height: 300
          }
      });

    var wywsigInit = function(){                     
        $('#summernote').summernote({
            height : 300,
            maxHeight : 300
        });
    };  

      return {
          init: function() { 
            wywsigInit();
            $(document).on('click','#btn-send-email', function (e) {
                let emailBody = $('#summernote').summernote('code');
                $("#emailBody").val(emailBody);
                console.log($("#emailBody").val());
                $("#form-email").submit();
            });
           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>
<style type="text/css">
    .table>tbody>tr>td {cursor: pointer;}
</style>
@endsection