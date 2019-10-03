@extends('main')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    html
    {
        font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
        font-size: 12px;
        margin-left: auto;
        margin-right: auto;
        /*width: auto;*/
        max-width: 1150px;
        height: auto;
    }
    /*.clear*/
    /*{*/
        /*clear:both;*/
        /*float:left;*/
    /*}*/
    /*.error*/
    /*{*/
        /*color: #FF0000;*/
    /*}*/
    /*.badge*/
    /*{*/
        /*border-radius: 3px;*/
        /*color: #FFFFFF;*/
        /*display: inline-block;*/
        /*font-size: 11.844px;*/
        /*font-weight: bold;*/
        /*line-height: 14px;*/
        /*padding: 2px 4px;*/
        /*margin-bottom: 5px;*/
    /*}*/
    /*.badge-warning*/
    /*{*/
        /*background-color: #F89406;*/
    /*}*/
    /*.badge-info*/
    /*{*/
        /*background-color: #3A87AD;*/
    /*}*/

    a
    {
        color: #15c;
        text-decoration: none;
    }
    a:active
    {
        color: #d14836;
    }
    .logo
    {
        float: left;
    }
    .banner
    {
        float: right;
    }
    .signin-box
    {
        margin: 18px 0 0;
    }





    .signin-box input[type=text], .signin-box input[type=password]
    {
        padding: 8px;
        border: 1px solid #DDD;
        font-size: 15px;
    }
    input[type="text"]:focus, input[type="password"]:focus
    {
        border-color: rgba(82, 168, 236, 0.8);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(82, 168, 236, 0.6);
        outline: 0 none;
    }


    .signin-box input[type=submit]
    {
        font-size: 14px;
    }

    .main.login
    {
        margin-left: auto;
        margin-right: auto; /*padding: 10px 0;*/
    }

    .AvJobs
    {
        width: 66%;
        float: left;
    }

    .main.login .right .about
    {
        line-height: 20px;
        text-align: justify;
        padding: 5px;
    }







    .main.login .right
    {
        top: 0px;
        right: 0px;
        width: 30%;
        float: right;
    }

    .signin-box ul.login-links, .signin-box ul.login-links li
    {
        margin: 0;
        padding: 0;
    }
    .signin-box ul.login-links
    {
        margin-bottom: 10px;
    }

    .signin-box ul.login-links li a
    {
        display: block;
        color: #0066cc;
        font-size: 12px;
        text-decoration: none;
    }
    .signin-box ul.login-links li a:hover
    {
        color: #006600;
    }

    /*CSS From Master Page */


    .btn
    {
        -moz-border-colors: none;
        background-color: #F5F5F5;
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #B3B3B3;
        border-image: none;
        border-radius: 4px 4px 4px 4px;
        border-style: solid;
        border-width: 1px;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
        color: #333333;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 0;
        padding: 4px 12px;
        text-align: center;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
        vertical-align: middle;
    }
    .btn-primary
    {
        background-color: #006DCC !important;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #FFFFFF;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .btn-mini
    {
        border-radius: 3px 3px 3px 3px;
        font-size: 11px;
        padding: 2px 10px;
        min-width:50px;
    }
    /*21-08-2012*/


    /*.main-content*/
    /*{*/
        /*clear: both;*/
        /*padding-bottom: 50px;*/
    /*}*/

    .li
    {
        display: block;
        margin: 0;
        padding: 4px 5px 2px 9px;
        position: relative;
    }
    .li a
    {
        text-decoration: none;
    }


    .header
    {
        clear: both;
        background-color: #FFFFFF;
        border-bottom: 1px solid #DDDDDD;
        height: 85px;
    }
    .brac-logo
    {
        padding: 10px 0 0 10px;
    }

    .italic
    {
        font-style: italic;
    }
    .TextAlignRight
    {
        text-align: right !important;
        width: 20%;
    }
    .TextAlignCenter
    {
        text-align: center !important;
        width: 25%;
    }
    .TextAlignLeft
    {
        text-align: left !important;
        width: 40%;
    }
    .fieldset
    {
        border: 0 none;
        margin: 0;
        padding: 0;
    }
    .legend
    {
        border-color: #E5E5E5;
        border-image: none;
        border-style: none none solid;
        border-width: 0 0 1px;
        color: #333333;
        display: block;
        font-size: 21px;
        line-height: 40px;
        padding: 0;
        width: 100%;
    }
    .legendWithBorder
    {
        border: 1px solid #EEEEEE;
    }
    .legendWithBorder legend
    {
        background-color: #F2F2F2;
    }
    .fieldsetDiv
    {
        margin-top: 22px;
        margin-left: 25px;
    }
    .table-bordered
    {
        -moz-border-colors: none;
        border-collapse: separate !important;
        border-color: #DDDDDD #DDDDDD #DDDDDD;
        border-image: none;
        border-radius: 4px 4px 4px 4px;
        border-style: solid solid solid none;
        border-width: 1px 1px 1px 0;
        background-color: transparent;
        border-spacing: 0;
    }

    .table-bordered th, .table-bordered td
    {
        border-left: 1px solid #DDDDDD;
        line-height: 20px;
        border-top: 1px solid #DDDDDD;

        padding: 8px;
        text-align: left;
    }
    .table-bordered th
    {
        font-weight: bold;
        border-top: 0px solid #DDDDDD;

        background-color: #F2F2F2;
    }

    .table
    {
        -moz-border-colors: none;
        border-collapse: separate;
        border-color: #DDDDDD #DDDDDD #DDDDDD -moz-use-text-color;
        border-image: none;
        border-radius: 4px 4px 4px 4px; /*border-style: solid solid solid none;*/
        background-color: transparent;
        border-spacing: 0;
    }
    .table th, .table td
    {
        line-height: 20px;
        padding: 8px;
        text-align: left;
    }
    .table th
    {
        font-weight: bold;
        border-top: 0px solid #DDDDDD;
    }
    /*[class^="icon-"], [class*=" icon-"]*/
    /*{*/
        /*background-image: url("/public/App_Themes/glyphicons-halflings.png");*/
        /*background-position: 14px 14px;*/
        /*background-repeat: no-repeat;*/
        /*display: inline-block;*/
        /*height: 14px;*/
        /*line-height: 14px;*/
        /*margin-top: 1px;*/
        /*vertical-align: text-top;*/
        /*width: 14px;*/
        /*margin-right: 2px;*/
    /*}*/
    .icon-zoom-in
    {
        background-position: -336px 0;
    }
    .icon-thumbs-up {
        background-position: -96px -144px;
    }
    /* Very large screens */
    @media only screen and (min-width: 1151px)
    {

        .signin-box input[type=text], .signin-box input[type=password]
        {
            width: 80%;
        }
    }

    /* Medium screens */
    @media only screen and (max-width: 1150px) and (min-width: 768px)
    {
        html
        {
            width: 90%;
        }
        .signin-box input[type=text], .signin-box input[type=password]
        {
            width: 80%;
        }
    }

    /* Small screens */
    @media only screen and (max-width: 767px)
    {
        html
        {
            width: 100%;
        }
        body
        {
            min-width: 300px;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }
        .right
        {
            clear: both;
            float: left !important;
            width: 100% !important;
        }

        .about
        {
            visibility: visible;
        }
        .redlegend
        {
            color:#E6006D !important;
        }
        .AvJobs
        {
            width: 100%;
        }
        .signin-box input[type="text"], .signin-box input[type="password"]
        {
            width: 80%;
        }
        .header
        {
            border-bottom: 0px;
        }
        .banner
        {
            margin-top: 20px;
            margin-bottom: 10px;
            float: right;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .brac-logo
        {
            padding: 0px;
        }



    }

    /* Landscape Orientation */
    @media screen and (orientation: landscape)
    {

    }

    /* Portrait Orientation */
    @media screen and (orientation: portrait)
    {
    }


</style>

{{--<div class="container" >--}}
    {{--<div class="card">--}}
        {{--<div class="card-header">--}}
            {{--<div style="margin-bottom: 20px;" class="row">--}}

                {{--<div class="col-md-1">--}}
                    {{--<h5 >Zone</h5>--}}
                {{--</div>--}}
                {{--<div class="col-md-2">--}}
                    {{--<select name="zonefilter" id="zonefilter" class="form-control">--}}
                        {{--<option value="">Select a Zone</option>--}}
                        {{--@foreach($allZone as $zone)--}}
                            {{--<option  value="{{$zone->zoneId}}">{{$zone->zoneName}}</option>--}}
                        {{--@endforeach--}}

                    {{--</select>--}}

                {{--</div>--}}

                {{--<div class="col-md-2">--}}
                    {{--<h5>Job Search: </h5>--}}
                {{--</div>--}}
                {{--<div class="col-md-7">--}}
                    {{--<form class="navbar-form" role="search">--}}
                    {{--<div class="input-group add-on">--}}
                        {{--<input class="form-control" placeholder="Search" name="srch-term" id="search-job" type="text">--}}
                        {{--<div style="color: black;" class="input-group-btn">--}}
                            {{--<button style="background: #a3a3a4; color: white;" class="btn btn-default" onclick="getAllJob()"><i style="font-size: 18px;" class="ti-arrow-circle-right"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<!-- end col -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<!-- end row -->--}}

     {{--<div id="allJob">--}}

     {{--</div>--}}
{{--</div>--}}


<div class="header">
    <div class="logo">
        <img alt="logo" class="brac-logo" src="{{asset('public/App_Themes/Background/Image/TCL_logo.png')}}" />
    </div>
    <div class="banner">
        <img alt="banner" src="{{asset('public/App_Themes/Background/Image/banner.png')}}" />
    </div>
</div>
<div class="main-content">
    <div class="ui-layout-center">

        <div class="main login">
            <div>
                <div id="AvailableInternationalJob" class="AvJobs">
                    <fieldset class="fieldset">
                        <legend class="legend">Available Jobs</legend>
                        <div class="fieldsetDiv" id="allJobs">

                        </div>
                    </fieldset>
                </div>
                @if(Auth::guest())
                <div class="right">
                    <div class="card-body">
                        <legend class="legend">Log In</legend>
                        <div>
                            @if(Session::has('notActive'))
                                <p class="alert alert-info">{{ Session::get('notActive') }}</p>
                            @endif
                        </div>
                        <div class="p-3">
                            <form method="POST" class="form-horizontal m-t-20" action="{{ route('login') }}">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="email" type="text" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group text-center row m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-success btn-block waves-effect waves-light" style="background-color: #006DCC;" type="submit"><strong style="color:white;">Log In</strong></button>
                                    </div>
                                </div>

                                <div class="form-group m-t-10 mb-0 row">
                                    <div class="col-sm-7 m-t-20">
                                        <a href="{{route('account.forgetPass')}}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>
                                    <div class="col-sm-5 m-t-20">
                                        <a href="{{route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                                <div align="center" class="form-group m-t-10 mb-0">
                                    <a href="{{route('account.activationResend')}}" class="text-muted"><i class="mdi mdi-email"></i> Resend activation Mail</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                    <div class="about">
                        <fieldset class="fieldset">
                            <legend class="legend redlegend" style="color: #0785CE">About TCL </legend>
                            <div class="fieldsetDiv">
                                <span>Tech Cloud Ltd. is a global Information Technology Enabled Services (ITES) – outsource service provider. We have an excellent global market experience and with well infrastructure and up to date technology in terms of software and hardware and are capable to handle any array of clients.</span>
                            </div>
                        </fieldset>
                    </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('foot-js')
    <script>
        $(function () {
            getAllJob();
        });
        function getAllJob() {
            var search=$("#search-job").val();
            var zone=$("#zonefilter").val();
            $.ajax({
                type: 'POST',
                url: "{{url('/available-job/all')}}",
                cache: false,
                data: {_token: "{{csrf_token()}}",search:search,zonefilter:zone},
                success: function (data) {
                    $('#allJobs').html(data);
                }
            });
        }
    </script>
@endsection
