<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apalabrados</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
            background-color: #A8CF45 !important;
        }

        .page-link {
            color: #A8CF45;
        }

        .page-item.active .page-link {
            background-color: #A8CF45;
            border-color: #A8CF45;
        }

        .alert {
            color: red;
        }

    </style>
</head>
<body>
<div>
    <div class="card-title">
        <div class="py-4" style="background-color: #A8CF45"></div>
        <div class="img-fluid">
            <img src="{{ asset('images/banner.png')}}" width="100%" alt="Apalabrados">
        </div>
        <div class="container">

            <div class="card-body" style="background-color: white">
                <form action="{{route('text.store')}}" method="POST">
                    <div class="col">
                        <label for="InputText1"
                               class="col-form-label">Escribe varios caracteres y luego haz clic en GO!</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control mt-2 mb-2" id="InputText1" name="texto"
                                       placeholder="Texto">
                                @error('texto')
                                <small class="alert">{{$message}}</small>
                                @enderror
                                @csrf
                                <button type="submit" class="btn-lg btn-primary float-right" style="width: 100px">GO!
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table id="Table1" class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>Número</th>
                                    <th>Acumulado</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($numbers as $number)
                                    <tr>
                                        <td>{{$number->numero}}</td>
                                        <td>{{$number->acumulado}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $texts->links()}}

                        </div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table id="Table1" class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>Texto</th>
                                    <th>Inicial</th>
                                    <th>Final</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($texts as $text)
                                    <tr>
                                        <td>{{$text->texto}}</td>
                                        <td>{{$text->inicial}}</td>
                                        <td>{{$text->final}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $texts->links()}}

                        </div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table id="Table1" class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>Caracteres</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($characters as $character)
                                    <tr>
                                        <td>{{$character->caracteres}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $texts->links()}}

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 ">

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right ">
                <a href="https://github.com/AngelaUribe">
                    <img src="{{ asset('images/github-icon.jpg')}}" width="30px" alt="Git">
                </a>
                <a href="https://wa.me/+573015678479">
                    <img src="{{ asset('images/wp.png')}}" width="28px" alt="Whatsapp">
                </a>
                Designed by Angela Uribe
            </div>
        </div>
    </div>
</div>
</body>
</html>
