@extends('template.master')

@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                Upload Data
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <?php if(!empty(Session::get('notif'))) :  ?>
                    <div class="alert alert-warning">
                    {!! Session::get('notif') !!}
                    </div>
                    <?php endif; ?>
                    <form action="{{route('upload_data_kas')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="mini-label">Pilih File Data Kas</label>
                        <input type="file" name="data_kas" id="data_kas" class="form-control fileinput" required/>
                    </div>
                    <div class="text-center" style="margin-bottom:20px;">
                            <button id="submit_file" type="submit" class="btn btn-success btn-brand">
                                <i class="fa fa-upload"></i>
                                <span> Upload </span>
                            </button>
                    </div>
                    <div class="alert alert-primary"><i class="fa fa-info-circle"></i> Pastikan mengupload file dengan extensi .Xls atau Xlxs dan telah divalidasi</div>
                    </form>

                </div>
            </div>  
        </div>
    </div>
@endsection
