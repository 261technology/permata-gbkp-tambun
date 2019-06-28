@extends('template.master')

@section('content')
<div class="cover"></div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md" id="left">
      <div class="card" id="user">
        <div class="card-header">
          <div class="col-md-12 text-right">
            <a class="action" href="#">Edit Profile</a>     
          </div>
        </div>
          <img id="userImage"/>
        <div class="card-block">
          <h4 class="card-title">{{$data->nama}}, {{$data->umur.'Thn'}}</h4>
          <div class="row">
            <div class="col">
              <div class="font-weight-bold">{{$data->nama_sektor}}</div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-1"><i class="fa fa-map-marker"></i></div>
            <div class="col"><strong>{{$data->domisili}}</strong><br/>{{$data->alamat}}</div>
          </div>
          <div class="row mt-2">
            <div class="col-1"><i class="fa fa-phone"></i></div>
            <div class="col">{{$data->telepon}}</div>
          </div>
          <div class="row mt-2">
            <div class="col-1"><i class="fa fa-envelope"></i></div>
            <div class="col">{{$data->email}}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">Kewajiban</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">Aktifitas Terakhir<a class="action" href="#">Semua Aktifitas Activity</a></div>
            <ul class="list-group">
              <li class="list-group-item">
                <div class="row no-gutters">
                  <div class="col">
                    <div class="row no-gutters align-content-center">
                      <div class="col icon warning"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-usd fa-stack-1x"></i></span></div>
                      <div class="col">You have a recent payment that did not process</div>
                    </div>
                  </div>
                  <div class="col right">
                    <div class="row no-gutters justify-content-center align-items-center">
                      <div class="view">
                        <button class="btn btn-primary">View</button>
                      </div>
                      <div class="text-center">4 Hours Ago</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters">
                  <div class="col">
                    <div class="row no-gutters align-content-center">
                      <div class="col icon"><i class="fa fa-calendar-o fa-2x"></i></div>
                      <div class="col">You registered for an event, Greater Atlanta Champer of Commerce 2015</div>
                    </div>
                  </div>
                  <div class="col right">
                    <div class="row no-gutters justify-content-center align-items-center">
                      <div class="view">
                        <button class="btn btn-primary">View</button>
                      </div>
                      <div class="text-center">2 Days Ago</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters">
                  <div class="col">
                    <div class="row no-gutters align-content-center">
                      <div class="col icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-usd fa-stack-1x"></i></span></div>
                      <div class="col">You made a payment in the amount of <em>$34.99</em> to your membership account</div>
                    </div>
                  </div>
                  <div class="col right">
                    <div class="row no-gutters justify-content-center align-items-center">
                      <div class="view">
                        <button class="btn btn-primary">View</button>
                      </div>
                      <div class="text-center">5 Days Ago</div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row no-gutters">
                  <div class="col">
                    <div class="row no-gutters align-content-center">
                      <div class="col icon"><i class="fa fa-envelope fa-2x"></i></div>
                      <div class="col">You received a message from Bill Jones</div>
                    </div>
                  </div>
                  <div class="col right">
                    <div class="row no-gutters justify-content-center align-items-center">
                      <div class="view">
                        <button class="btn btn-primary">View</button>
                      </div>
                      <div class="text-center">7 Days Ago</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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

     

      return {
          init: function() { 
             $('.datepicker').datepicker({
                  format: 'yyyy-mm-dd',
              });
           }
      };

  }();

  jQuery(document).ready(function() {
      Page.init();
  });  
</script>


<style type="text/css">
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,700");
html, body {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  background: #e0e0e0;
  color: #616161;
}

.cover {
  height: 200px;
  background: #f1f1f1;
}

.btn {
  cursor: pointer;
}
.btn.btn-primary {
  background: #615a9c;
  border-color: #615a9c;
}
.btn.btn-primary:hover {
  background: #3d8b40;
  border-color: #f1f1f1;
}
.btn.btn-primary:focus {
  box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.5);
}
.btn.btn-secondary {
  background: #3d8b40;
  color: #fff;
  border-color: #3d8b40;
}
.btn.btn-secondary:hover {
  background: #f1f1f1;
  border-color: #1e441f;
}
.btn.btn-secondary:focus {
  box-shadow: 0 0 0 2px rgba(61, 139, 64, 0.5);
}

.bg-primary {
  background: #615a9c !important;
}

.navbar-nav.actions {
  flex-direction: row;
}
.navbar-nav.actions .nav-link {
  position: relative;
  font-size: 16px;
  padding: 4px 12px;
}
.navbar-nav.actions .nav-link .badge {
  position: absolute;
  right: 1px;
  top: 1px;
  background: #3d8b40;
}

.small {
  color: rgba(97, 97, 97, 0.8);
}

.card {
  border: none;
  border-radius: 0;
  margin-bottom: 30px;
}
.card .card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 700;
}
.card .row {
  width: 100%;
}

.alert {
  margin-bottom: 30px;
}

a.action {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 500;
  color: #03a9f4;
}
a.action:hover {
  color: #0288d1;
}

#left {
  margin-top: -150px;
  flex: 0 0 300px;
}

#user .fa {
  font-size: 20px;
}
#user #userImage {
  background: #615a9c;
  height: 200px;
}
#user #renew {
  display: block;
  width: 100%;
}
#user .row {
  width: auto;
}

#connections .list {
  margin: 15px 30px;
}
#connections .list .list-item {
  width: 30px;
  height: 30px;
  margin: 5px;
  background: #615a9c;
  color: #fff;
  cursor: pointer;
}
#connections .list .list-item:hover {
  background: #3d8b40;
}

.view {
  flex: 0 0 60px;
}


.icon {
  position: relative;
  flex: 0 0 40px;
  text-align: center;
  flex-shrink: 0;
  margin-right: 10px;
  font: normal normal normal 14px/1 FontAwesome;
}
.icon.warning:after {
  content: "\f071";
  color: #ff9800;
  position: absolute;
  font-size: 18px;
  top: 3px;
  left: 28px;
}
.icon .fa-stack-1x {
  color: #fff;
}

.card-block{
  padding: 10px;
}

@media (max-width: 768px) {
  .navbar-nav.actions {
    position: absolute;
    right: 70px;
  }
}

</style>
@endsection