<!-- Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="<?php echo $api_action; ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="composemodalTitle">New Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" required class="form-control" name="user_name" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="text" required class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="description" name="description" required>
                        <div class="summernote" required name="description">

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create <i class="fab fa-telegram-plane ml-1"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>
