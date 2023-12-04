<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm Project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <link rel="stylesheet" href="/resources/css/app.css">
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 570px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .custom-product {
        height: 600px;
    }

    .slider-text {
        color: black;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .indicator {
        color: black !important;
    }

    .trending-image {
        height: 100px;
        width: auto;
        margin: 30px;
    }

    .trending-item {
        float: left;
        width: 30%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 250px;
        margin-left: 20%;
        margin-top: 10%;
    }

    .footer {
        margin-bottom: 0px;
    }

    .search-box {
        width: 850px !important;
    }

    .cart-list-divider {
        border-bottom: 1px solid black !important;
        margin-bottom: 10px;
        padding-bottom: 10px;
        margin-left: 20px;

    }

    .button {
        margin-left: 48% !important;
        margin-bottom: 20px;
    }



    .text {
        margin-left: 625px;
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .Border-below {
        margin-top: 50px;
        margin-left: 30px;
        /* border: 2px solid black; */
        display: flex;
        justify-content: center;
        align-self: center;
        padding: 20px;
        background-color: white;
        box-shadow: 10px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }

    .text-1 {
        margin-left: 680px;
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .center {
        margin-left: 200px;
        mix-blend-mode: multiply;
    }

    .display {
        box-shadow: 10px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: white;
        background-blend-mode: multiply;
    }

    .navigation {
        background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        box-shadow: 10px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .h3,
    h3 {
        font-size: 20px;
        font-family: sans-serif;
        text-decoration: none;
        color: black;
    }


    .h3,
    h3:hover {
        text-decoration: none;
        color: black;
        transform: scale(1.1);
    }

    .card {
        border: 1px solid black;
        box-shadow: 10px 10px;
        box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .img {
        width: 10px;
        height: 10px;
    }

    .card-1 {

        padding: 10px;

        box-shadow: 10px 10px;
        box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: flex;
        text-align: center;
        justify-content: center;
        align-self: center;
        color: black;
    }

    .center-1 {
        margin: 10px 10px 20px 50px;
    }

    .card-2 {
        padding: 10px;
        border-radius: 5px;
        box-shadow: 10px 10px;
        box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: flex;
        justify-content: center;
        align-self: center;
        color: black;
    }

    .footer-1 {
        margin-top: 230px;
        bottom: 0;
        text-align: center;
        font-family: sans-serif;
        font-size: 15px;
    }

    .footer-2 {
        padding: 20px;

    }
</style>

</html>