<form id="admin_language_create_form">
    <input type="hidden" name="language_id" value="" />
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>{{ __('message.title') }}</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ __('message.close') }}</button>
        <button type="submit" class="btn btn-primary btn-blue" id="admin_language_create_form_button">
        {{ __('message.save') }}
        </button>
    </div>
</form>