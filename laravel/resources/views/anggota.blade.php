@extends('template.master')

@section('assets')
<!-- Datatable -->
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="card-title mb-0">Daftar Anggota Permata</h4>
                                    <div class="small text-muted">GBKP Runggun Tambun</div>
                                </div>
            
                                <div class="col-sm-8" style="margin-bottom: 15px;">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="sektor">Sektor</label>
                                                        <select id="sektor" class="form-control">
                                                            <option value="0">Semua</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="marga">Marga</label>
                                                        <select id="marga" class="form-control">
                                                            <option value="0">Semua</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="marga">Jenis Kelamin</label>
                                                        <select id="marga" class="form-control">
                                                            <option value="0">Semua</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <select id="pekerjaan" class="form-control">
                                                            <option value="0">Pekerjaan</option>
                                                            <option value="1">Option #1</option>
                                                            <option value="2">Option #2</option>
                                                            <option value="3">Option #3</option>
                                                        </select>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12">
                                    <table id="tableAnggota" class="table table-responsive-sm table-bordered table-striped table-md">
                                        <thead>
                                            <th style="width:45%">NAMA</th>
                                            <th style="width:20%">SEKTOR</th>
                                            <th style="width:15%">TELEPON</th>
                                            <th style="width:10%">STATUS</th>
                                            <th style="width:10%"></th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
            
            
                        </div>
                
            
                        <div class="card-footer">
                                <button class="btn btn-brand btn-info float-left" type="button" style="margin-bottom: 4px">
                                    <i class="fa fa-download"></i>
                                    <span>Download excel</span>
                                </button>

                                <button class="btn btn-brand btn-success float-right" type="button" style="margin-bottom: 4px">
                                        <i class="fa fa-plus"></i>
                                        <span>Tambah Anggota</span>
                                    </button>
                        </div>
            
                    </div>
        </div>
    </div>
@endsection