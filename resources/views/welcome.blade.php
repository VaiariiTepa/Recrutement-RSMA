<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <form action="{{ route('import') }}" enctype="multipart/form-data" class="contact100-form validate-form" method="post">

                <div class="wrap-input100 validate-input" data-validate="importer un fichier Excel">
                    {{ csrf_field() }}
                    <div class="custom-file">
                        <input class="input100 custom-file-input" type="file" name="mon_fichier" placeholder="fichier EXCEL" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Choisir un fichier Excel</label>
                      </div>
                    {{-- <input class="input100" type="text" name="name" placeholder="Full Name"> --}}
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        <span>
                            <i class="fa fa-file-excel-o m-r-6" aria-hidden="true"></i>
                                C reva :D
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
