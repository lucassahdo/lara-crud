<div class="modal fade" id="newClientModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <h4 class="modal-title">New Client</h4>
            </div>

            <form action="/new" method="post" id="frmNewClient">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">E-mail:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>

                <input type="hidden" id="id" name="id" value "">

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="submit" class="btn btn-primary" id="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>