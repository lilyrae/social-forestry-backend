<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Forestry</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Styles -->
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

            .m-b-md {
                margin-bottom: 30px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                width: 100%;
            }

            .gallery { 
              padding: .5vw;
              font-size: 0;
              display: -ms-flexbox;
              -ms-flex-wrap: wrap;
              -ms-flex-direction: column;
              -webkit-flex-flow: row wrap; 
              flex-flow: row wrap; 
              display: -webkit-box;
              display: flex;
            }
            .gallery div { 
              -webkit-box-flex: auto;
              -ms-flex: auto;
              flex: auto; 
              width: 200px; 
              margin: .5vw; 
            }
            .gallery div img { 
              width: 100%; 
              height: auto; 
            }
            @media screen and (max-width: 400px) {
              .gallery div { margin: 0; }
              .gallery { padding: 0; }
              
            }

            .links {
                padding: 20px;
                padding-left: 100px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height">
            <div class="content">
                <div class="title m-b-md">
                    Diseased Plants
                </div>
                <div class="gallery">
                    @foreach ($plants as $plant)
                        <div>
                            <img src="{{ Storage::url($plant->image_path) }}" alt="diseased plant">
                        </div>
                    @endforeach      
                </div>
                <div class="links">
                    <div>
                    {{ $plants->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
