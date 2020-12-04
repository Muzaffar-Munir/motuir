<!-- Modal -->
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    
                    <div class="form-group">
                        <label>Autoresponder</label>
                        <br>
                        <input type="checkbox" id="switch1" class="responder_button" switch="none" />
                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                        <textarea class="form-control responder_textarea" placeholder="Autoresponder" disabled></textarea>
                    </div>

                    <div class="form-group">
                        <label>Signature</label>
                        <textarea class="form-control" placeholder="Signature"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>