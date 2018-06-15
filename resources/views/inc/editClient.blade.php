
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
