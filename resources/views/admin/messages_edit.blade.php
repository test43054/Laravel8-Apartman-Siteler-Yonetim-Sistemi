<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< Updated upstream
    <title>Message editleme sayfası</title>
=======
    <title>Mesaj Güncelleme Sayfası</title>
>>>>>>> Stashed changes
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/assets/images/logo.png">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/logo2.png">

    <!--sumnmernote -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    @yield('css')
    @yield('javascript')
    <style>
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>
<body>
<!--BURASI!!!!!!!!!!! -->
<<<<<<< Updated upstream
<h4>Messages</h4>
=======
<button type="button" class="btn btn-warning btn-lg btn-block">Mesajları Güncelle/Kaldır</button>
>>>>>>> Stashed changes
@include('home.message')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body card-block">
            <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" class="" enctype="multipart/form-data">
            @csrf
                <!--
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>i</th><td>{{$data->id}}</td>
                        <th>name</th><td>{{$data->name}}</td>
                        <th>email</th><td>{{$data->email}}</td>
                        <th>phone</th><td>{{$data->phone}}</td>
                        <th>subject</th><td>{{$data->subject}}</td>
                        <th>messages</th><td>{{$data->messages}}</td>
                        <th>Admin note</th><td>{{$data->note}}</td>
                        <th>status</th><td>{{$data->status}}</td>
                    </tr>
                    </thead>
                </table>-->

                <div class="form-group">
                    <div class="input-group">
                        id={{$data->id}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        name={{$data->name}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        email={{$data->email}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        phone={{$data->phone}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        subject={{$data->subject}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        messages={{$data->messages}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
<<<<<<< Updated upstream
                        <div class="input-group-addon">Admin Note</div>
=======
                        <div class="input-group-addon">Admin Notu</div>
>>>>>>> Stashed changes
                    <!--  <input type="text"  id="detail" name="detail" class="form-control" value="{{$data->detail}}">-->
                        <textarea id="summernote" name="note">{{$data->note}}</textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        status={{$data->status}}
                    </div>
                </div>

                <div class="form-actions form-group">
<<<<<<< Updated upstream
                    <button type="submit" class="btn btn-primary btn-sm">editle</button>
=======
                    <button type="submit" class="btn btn-primary btn-sm">Güncelle</button>
>>>>>>> Stashed changes
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
