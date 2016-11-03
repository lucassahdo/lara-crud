<!DOCTYPE html>
<html lang="pt_br">
<head>
    <title>CRUD: PHP com Laravel 5.3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crud com Laravel 5.3">
    <meta name="author" content="Lucas Sahdo">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
<body>
    <div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <h4 class="modal-title">Editar Cliente</h4>
                </div>

                <form action="/update" method="post" id="frmEditClient">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-control-label">Nome:</label>
                            <input type="text" class="form-control" id="edit-name" name="name">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Endereço:</label>
                            <input type="text" class="form-control" id="edit-address" name="address">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Telefone:</label>
                            <input type="text" class="form-control" id="edit-phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">E-mail:</label>
                            <input type="text" class="form-control" id="edit-email" name="email">
                        </div>
                    </div>

                    <input type="hidden" id="edit-id" name="id" value="">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="submit" class="btn btn-primary" id="edit-submit">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- script tags
  	============================================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweet-alert.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script src="js/main.js"></script>
</body>
</html>
