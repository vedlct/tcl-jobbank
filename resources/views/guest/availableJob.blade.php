@include('layouts/header')

@section('header')
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
@endsection
<div class="container" >
    <div class="card">

        <div class="header">
            <div class="logo">
                <img alt="logo" class="brac-logo" src="{{asset('public/App_Themes/Background/Image/TCL_logo.png')}}" />
            </div>
            <div class="banner">
                <img alt="banner" src="{{asset('public/App_Themes/Background/Image/banner.png')}}" />
            </div>
        </div>
        <div class="card-header">
            <div style="margin-bottom: 20px;" class="row">

                <div class="col-md-1">
                    <h5 >Zone</h5>
                </div>
                <div class="col-md-2">
                    <select name="zonefilter" id="zonefilter" class="form-control">
                        <option value="">Select a Zone</option>
                        @foreach($allZone as $zone)
                            <option  value="{{$zone->zoneId}}">{{$zone->zoneName}}</option>
                        @endforeach

                    </select>

                </div>

                <div class="col-md-2">
                    <h5>Job Search: </h5>
                </div>
                <div class="col-md-7">
                    <form class="navbar-form" role="search">
                        <div class="input-group add-on">
                            <input class="form-control" placeholder="Search" name="srch-term" id="search-job" type="text">
                            <div style="color: black;" class="input-group-btn">
                                <button style="background: #a3a3a4; color: white;" class="btn btn-default" onclick="getAllJob()"><i style="font-size: 18px;" class="ti-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end col -->
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
                        <div class="right">
                            <div>
                                <div class="signin-box">
                                    <div class="legendWithBorder">
                                        <fieldset class="fieldset">
                                            <legend class="legend">Log In</legend>
                                            <div class="fieldsetDiv">
                                                <table class="table">
                                                    <tr class="noscript">
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder2$txtUserID" type="text" id="ContentPlaceHolder2_txtUserID" placeholder="Type Your Email ID as User ID" />
                                                        </td>
                                                    </tr>
                                                    <tr class="noscript">
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder2$txtPassword" type="password" id="ContentPlaceHolder2_txtPassword" placeholder="Type your password" maxlength="30" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="clear">
                                                                <span id="ContentPlaceHolder2_lblWarningMessage" style="color:Red;"></span>
                                                            </label>
                                                            <input type="submit" name="ctl00$ContentPlaceHolder2$btnsignIn" value="Log In" onclick="return Validate();" id="ContentPlaceHolder2_btnsignIn" class="btn btn-primary noscript clear" />
                                                            <input name="rmShown" value="1" type="hidden" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul class="login-links ul">
                                                                <li class="li"><a id="link-forgot-passwd" href="UserAccount.html" target="_top" class="reset noscript">Create Account?</a></li>
                                                                <li class="li"><a id="linkforgotpassword" class="reset" href="eRecruitmentForgotPassword.html"
                                                                                  target="_top">Forgot Password?</a></li>
                                                                <li class="li">
                                                                    <div id="divVersion" style="text-decoration: blink; text-align: center">
                                                                        <span class="error noscript">Firefox is recommended(version 3.6+)</span>
                                                                    </div>
                                                                </li>
                                                                <br />
                                                                <li class="li">
                                                                    <div id="fb-root">
                                                                    </div>
                                                                    <script type="text/javascript" language="javascript">
                                                                        //$(document).ready(function () {
                                                                        (function (d, s, id) {
                                                                            var js, fjs = d.getElementsByTagName(s)[0];
                                                                            if (d.getElementById(id)) return;
                                                                            js = d.createElement(s); js.id = id;
                                                                            js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1";
                                                                            fjs.parentNode.insertBefore(js, fjs);
                                                                        }(document, 'script', 'facebook-jssdk'));
                                                                        //});
                                                                    </script>
                                                                    <div class="fb-like" data-href="http://careers.brac.net/Presentation/Landing.aspx"
                                                                         data-send="true" data-width="200" data-show-faces="false">
                                                                    </div>
                                                                </li>
                                                                <li class="li">
                                                                    <div>
                                                                        <noscript>
                                                                            <span class="badge-warning badge">Warning</span> <span class="error">Sorry, javascript
                                                                    is not enabled!</span><br />
                                                                            <span class="badge badge-info">Info</span> <span>Enable javascript</span>
                                                                        </noscript>
                                                                        <a href="eRecruitmentFeedback.html">To give your valuable feedback<span class="italic">
                                                                Click Here</span></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="about">
                                <fieldset class="fieldset">
                                    <legend class="legend redlegend" style="color: #E6006D">About BRAC </legend>
                                    <div class="fieldsetDiv">
                                        <!--<img align="left" src="../Images/reporting.jpg" alt="" /> -->
                                        BRAC is a development success story, spreading solutions born in Bangladesh to 10
                                        other countries around the world – a global leader in creating opportunity for the
                                        world’s poor. What started out as a limited relief operation in 1972 in a remote
                                        village of Bangladesh, has turned into the largest development organization in the
                                        world. Organizing the poor using communities’ own human and material resources,
                                        it catalyses lasting change, creating an ecosystem in which the poor have the chance
                                        to seize control of their own lives.
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end row -->

{{--    <div id="allJob">--}}

{{--    </div>--}}
</div>
@section('foot-js')
    <script>


        $(function () {

            getAllJob();

        });

        // $("#search-job").on('keyup', function (e) {
        //     if($("#search-job").val()==""){
        //         getAllJob();
        //     }
        //     if (e.keyCode == 13) {
        //         getAllJob();
        //     }
        //
        //     if (e.keyCode == 32) {
        //         getAllJob();
        //     }
        // });
        //
        // $('#zonefilter').change(function(){ //button filter event click
        //     getAllJob();
        // });

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

        function getData(page){
            var search=$("#search-job").val();

            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    data: {search:search},
                    datatype: "html",
                    // beforeSend: function()
                    // {
                    //     you can show your loader
                    // }
                })
                .done(function(data)
                {
                    $("#allJob").html(data);
                    location.hash ='?page='+page;

                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }


    </script>
@endsection

@include('layouts/footer')
