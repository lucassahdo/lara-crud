<!DOCTYPE html>
<html lang="pt_br">
<head>
    <title>CRUD: PHP com Laravel 5.3</title>
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crud com Laravel 5.3">
    <meta name="author" content="Lucas Sahdo">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link href="css/main.css" rel="stylesheet">
<body>

    <!--
    =====================================================
    === header
    =====================================================
    -->
    <header id="navigation" class="navbar navbar-inverse">
        <div id="page-banner">
            <div class="banner-wrapper parallax-section">
                <div class="content-box">
                    <h1 class="animated fadeInLeftBig">
                        CRUD
                    </h1>

                    <p class="animated fadeInRightBig">
                        Com Laravel 5.3
                    </p>

                </div>
            </div>
        </div>
    </header>


    <!--
    =====================================================
    === crud section
    =====================================================
    -->
    <section id="crud-section">
       <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Tabela de Clientes</h2>
                <p class="section-subtitle text-center wow fadeInDown">
                    Crie - Veja - Edite - Apague
                </p>
            </div>

            <!-- table -->
            <div class="container">

                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <button type="button" class="btn btn-primary" id="btn-add">Adicionar</button>
                    </div>

                    <div class="panel-body">
                        <!-- <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Clients" /> -->

                        <table class="table table-hover" id="dev-table">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($clients as $key => $client):
                                <tr id="client{{$client->id}}" data-id="{{$client->id}}">
                                    <!-- <td>{{$client->id}}</td> -->
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>
                                        <button type="button " class="btn btn-success btn-edit" style="margin-right:10px; width:100%;">Editar</button>
                                    </td>
                                    <td>
                                        <button type="button " class="btn btn-danger btn-delete" style="width:100%">Apagar</button>
                                    </td>
                                </tr>
                                @endforeach;
                            </tbody>

                        </table>
                    </div>
                </div>
            </div><!--/.container-->
    </section><!--/#who-we-are-->


	<!--
    =====================================================
    === footer
    =====================================================
    -->
    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="content-area container text-center">
                <h1 class="animated fadeInLeftBig">
                    Get Source Code
                </h1>
                <div class="footer-logo">
                    <a href="https://github.com/lucassahdo/lara-crud" target="_blanck"><img class="img-responsive" src="img/logo.png" alt=""></a>
                </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2016. Developed by <a href="http://sahdo.me">Lucas Sahdo</a>.</p>
            </div>
        </div>
    </footer>


  	<!-- script tags
  	============================================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweet-alert.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script src="js/main.js"></script>

    @include('newClient')
    @include('editClient')

</body>
</html>
