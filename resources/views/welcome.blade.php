<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Banking System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 70px;
        text-align: center;
    }

    .row {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    button {
        background:none!important;
        color:inherit;
        border:none;
        padding:0!important;
        font: inherit;
        border-bottom:1px solid #444;
        cursor: pointer;
        font-size: 18px;
    }
</style>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Banking</br>System
        </div>

        <div class="row">
            <form method="POST" action="/save-user">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"> Name: </label> </br>
                    <input type="text" name="name" id="name"> </br></br>
                </div>

                <div class="form-group">
                    <label for="email"> Email: </label> </br>
                    <input type="text" name="email" id="email"> </br></br>
                </div>

                <div class="form-group">
                    <label for="name"> Password: </label> </br>
                    <input type="password" name="password" id="password"></br></br>
                </div>

                <div class="form-group">
                    <label for="name"> Balance: </label> </br>
                    <input type="text" name="balance" id="balance"> </br></br></br>
                </div>

                <button id="btn_save" type="submit" class="btn btn-light"> Save </button>
            </form>
        </div>
    </div>
</div>


<script src='js/jquery.min.js'></script>
<script src='js/master.js'></script>

<script>
    var URL = {
        save: '{{ route('save-user') }}'
    }
</script>

</body>
</html>
