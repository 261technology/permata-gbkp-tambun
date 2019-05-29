@extends('template.master')

@section('content')
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                Upload Data
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <form action="{{route('upload_data_anggota')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="data_anggota">Pilih File Data Anggota</label>
                        <input type="file" name="data_anggota" id="data_anggota" required/>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-sm btn-info btn-badge w-100" ><i class="fa fa-upload"> <span>Upload File</span> </i> </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
