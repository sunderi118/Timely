<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
        <!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluid">
        <div class="content " id = "app">
            <div class="row">
                <div class="col-1 sidebar">
                    <div class="row">
                        <div class="col-12 logo">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 hours">
                            
                        </div>
                    </div>
                   
                </div>
                <div class="col-11 main"> 
                    <div class="row">
                        <div class="col-3 unit">
                        <ul class="list-group list-group-horizontal">
                        <li class="list-group-item unit_d">Day</li>
                        <li class="list-group-item unit_w">Week</li>
                        <li class="list-group-item unit_m">Month</li>
                        </ul>
                        </div>
                        <div class="col-3">
                            <div class="change_month">
                                <div class="left"></div>
                                <div class="month"></div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="today"></div>
                        </div>    
                    </div>
                    
                    
                    <calender-component></s-component>
                </div>
            </div>
        </div>   
    </div>
       
        <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>
