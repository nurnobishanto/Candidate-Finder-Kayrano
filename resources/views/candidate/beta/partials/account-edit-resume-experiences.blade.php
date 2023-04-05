<div class="section-incremental-form-alpha-item">
    <div class="row section-incremental-form-alpha-relative experience-box">
        <div class="col-md-12 col-lg-12">
            <div class="section-incremental-form-alpha-remove remove-section" 
                data-type="experience"
                data-id="{{ $experience['resume_experience_id'] ? encode($experience['resume_experience_id']) : ''; }}"
                title="{{__('message.remove_section')}}">
                <i class="fas fa-trash-alt"></i>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group form-group-account">
                <label for="">{{ __('message.job_title') }} *</label>
                <input type="hidden" name="resume_id[]" 
                    value="{{ $experience['resume_id'] ? encode($experience['resume_id']) : ''; }}" />
                <input type="hidden" name="resume_experience_id[]" 
                    value="{{ $experience['resume_experience_id'] ? encode($experience['resume_experience_id']) : ''; }}" />
                <input type="text" class="form-control" name="title[]" value="{{ esc_output($experience['title']) }}">
                <small class="form-text text-muted">{{ __('message.enter_job_title') }}</small>
            </div>
            <div class="form-group form-group-account">
                <label for="">From *</label>
                <input type="date" class="form-control datepicker" placeholder="29-12-1985" name="from[]" 
                    value="{{ dateOnly($experience['from']) }}" />
                <small class="form-text text-muted">{{ __('message.start_date_of_job') }}</small>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group form-group-account">
                <label for="">Company *</label>
                <input type="text" class="form-control" name="company[]" value="{{ esc_output($experience['company']) }}" />
                <small class="form-text text-muted">{{ __('message.enter_company') }}</small>
            </div>
            <div class="form-group form-group-account">
                <label for="">To *</label>
                <input type="date" class="form-control datepicker" placeholder="29-12-1985" name="to[]" 
                    value="{{ dateOnly($experience['to']) }}" />
                <small class="form-text text-muted">{{ __('message.enter_date_of_job') }}</small>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="form-group form-group-account">
                <label for="">Job Description *</label>
                <textarea class="form-control" name="description[]">{{ $experience['description'] }}</textarea>
                <small class="form-text text-muted">{{ __('message.enter_job_description') }}.</small>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group form-group-account">
                <label for="">{{ __('message.current') }} *</label>
                <select class="form-control" name="is_current[]">
                    <option value="0" {{ sel('0', $experience['is_current']) }}>{{ __('message.no') }}</option>
                    <option value="1" {{ sel('1', $experience['is_current']) }}>{{ __('message.yes') }}</option>
                </select>
                <small class="form-text text-muted">{{ __('message.select').' '.__('message.current') }}</small>
            </div>
        </div>
    </div>
</div>
