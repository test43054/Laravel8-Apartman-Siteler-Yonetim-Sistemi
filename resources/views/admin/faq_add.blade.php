<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< Updated upstream
    <title>FAQ ekleme sayfası</title>
=======
    <title>FAQ Ekleme Sayfası</title>
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
@include('admin._sidebar')
@include('admin._header')
<<<<<<< Updated upstream
<h3>Faq Ekleme</h3>
=======
<button type="button" class="btn btn-warning btn-lg btn-block">SSS Ekleme</button>
>>>>>>> Stashed changes
<div class="col-lg-6">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body card-block">
            <form action="{{route('admin_faq_store')}}" method="post" class="" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <div class="input-group">
<<<<<<< Updated upstream
                        <div class="input-group-addon">Position</div>
=======
                        <div class="input-group-addon">Sıralama</div>
>>>>>>> Stashed changes
                        <input type="text"  id="position" name="position" value="0" class="form-control">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
<<<<<<< Updated upstream
                        <div class="input-group-addon">Question</div>
=======
                        <div class="input-group-addon">Soru</div>
>>>>>>> Stashed changes
                        <input type="text" id="question" name="question" class="form-control">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
<<<<<<< Updated upstream
                        <div class="input-group-addon">Answer</div>
=======
                        <div class="input-group-addon">Cevap</div>
>>>>>>> Stashed changes
                        <!--<input type="text" id="detail" name="detail" class="form-control">-->
                        <textarea id="summernote" name="answer"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                        <div class="input-group-addon"></div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Status</label></div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="status" class="form-control-sm form-control">
                            <option value="False">False</option>
                            <option value="True">True</option>

                        </select>
                    </div>
                </div>
                <div class="form-actions form-group">
<<<<<<< Updated upstream
                    <button type="submit" class="btn btn-primary btn-sm">faq ekle</button>
=======
                    <button type="submit" class="btn btn-primary btn-sm">SSS Ekle</button>
>>>>>>> Stashed changes
                </div>
            </form>
        </div>
    </div>
</div>




@include('admin._footer')
@yield('footer')



</body>
</html>
