<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/assets/images/logo.png">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/logo2.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet"/>

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

    </style>
</head>
<body>
<!--BURASI!!!!!!!!!!! -->
@include('admin._sidebar')
@include('admin._header')

<<<<<<< Updated upstream
<h3>Users Listesi</h3>
=======
<button type="button" class="btn btn-warning btn-lg btn-block">Kullanıcı Listesi</button>
>>>>>>> Stashed changes
<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"></strong><br>

                    </div>

                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
<<<<<<< Updated upstream
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>Ad Soyad</th>
                                <th>Roles</th>
                                <th>edit</th>
=======
                                <th>ID</th>
                                <th>Fotograf</th>
                                <th>İsim</th>
                                <th>E-mail</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                                <th>Ad-Soyad</th>
                                <th>Rolü</th>
                                <th>Güncelle</th>
>>>>>>> Stashed changes
                                <th>Sil</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        @if($rs->profile_photo_path)
                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="50"
                                                 style="border-radius: 10px" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin_user_show',['id'=>$rs->id])}}"
                                           target="_blank"> {{$rs->name}}</a>

                                    </td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>
                                        @foreach($rs->roles as $row)
                                            {{$row->name}},
                                        @endforeach
                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600')">
                                           <strong>+</strong></a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/assets/images')}}/edit.png" height="25"></a> </td>
                                    <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}"onclick="return confirm('Are you sure you want to delete this item?')"><img src="{{asset('assets/admin/assets/images')}}/delete.png" height="25"> </a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated onclick="return confirm('Are you sure you want to delete this item?')"-->
</div><!-- .content -->
<!-- Scripts -->

<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/datatables.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/jszip.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/init/datatables-init.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>

@include('admin._footer')
@yield('footer')


</body>
</html>
