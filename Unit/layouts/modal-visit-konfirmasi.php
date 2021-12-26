<div class="modal fade" id="modal-visit-konfirmasi<?= $id_visit ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="window.location.reload();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center  ">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $id_visit ?>">
                    <input type="hidden" name="tanggal" value="<?= date('Y-m-d') ?>">
                    <div class="row justify-content-center">
                        <div class="col">
                            <input type="submit" name="audit-tolak" class="btn btn-danger" value="Tolak">
                        </div>
                        <div class="col">
                            <input type="submit" name="audit-terima" class="btn btn-success" value="Terima">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>