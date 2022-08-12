<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>বিল ভাউচার</title>


    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">

    <style>
        body {
            font-family: 'solaimanlipi', Arial, sans-serif !important;
            width: 100%;

        }
        .copy {
            background: #0e9f6e;
        }
        .lokkirpur-table td{
            padding: 40px;
        }


        .receipt .container{
            width: 90% !important;
            margin: auto !important;
            height: 100vh !important;
            display: block !important;
            position: relative !important;
        }
        .janina::before {
            font-family: 'solaimanlipi', Arial, sans-serif !important;
            content: '' !important;
            background-image: url("{{asset('/img/vs_logo.png')}}") !important;
            position: absolute !important;
            top: 0px !important;
            right: 0px !important;
            bottom: 0px !important;
            left: 0px !important;
            background-position: center !important;
            background-size: 500px !important;
            background-repeat: no-repeat !important;
            opacity: 0.19 !important;
        }

    </style>



</head>
<body>

<section class="receipt">
    <div class="container">

        <div class="row copy">
            <p >ব্যাংক কপি</p>
        </div>

        <div class="row header-row">
            <table class="lokkirpur-table" align="center">
                <tr>
                    <td width="130" >
                        <img class="bn_govt_logo " src="{{asset('/')}}img/vs_logo.png" width="120px"/>
                    <td class='text-center'>
                        <h2><b>লক্ষ্মীপুর পৌরসভা</b></h2>
                        <p><b>LAKSHMIPUR MUNICIPALITY</b>&nbsp;</p>
                    </td>
                    <td class='text-center' width="150">
                        <img class="" src="data:image/png;base64, {{  base64_encode( QrCode::format('png')->size(100)->generate(url('').'/eblms/qr-code/') ) }}" alt="">
                    </td>
                </tr>
            </table>
        </div>

        <div class="row bgl" id="bgl"></div>

        <div class="row janina">
            <table class="type" align="center">
                <tr>
                    <td><h3>ইজিবাইক/অটোবাইক লাইসেন্স</h3></td>
                    <td><h3>ইজিবাইক/অটোবাইক লাইসেন্স</h3></td>
                    <td><h3>ইজিবাইক/অটোবাইক লাইসেন্স</h3></td>

                </tr>

            </table>
        </div>

        <div class="row">
            <div class="col-md-3">sdfsdfsdfsd</div>
            <div class="col-md-3">sdfsdf</div>
            <div class="col-md-3">sadfsdf</div>
            <div class="col-md-3">sadfsdf</div>
        </div>









    </div>
</section>


<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/jquery.js')}}"></script>
</body>
</html>
































