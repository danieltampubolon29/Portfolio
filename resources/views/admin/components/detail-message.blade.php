<div class="modal fade" id="contactModal{{ $data->id }}"
    tabindex="-1" aria-labelledby="contactModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Detail
                    Message
                </h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <input readonly type="text" value="{{ $data->name }}"
                            class="form-control" placeholder="Full Name"
                            required>
                    </div>
                    <div class="col-md-12">
                        <input readonly type="email" value="{{ $data->email }}"
                            class="form-control"
                            placeholder="Email Address" required>
                    </div>
                </div>
                <div class="row g-3 mt-1">
                    <div class="col-md-12">
                        <input readonly type="text"
                            value="{{ $data->phone_number }}"
                            class="form-control"
                            placeholder="Mobile Number" required>
                    </div>
                    <div class="col-md-12">
                        <input readonly type="text"
                            value="{{ $data->email_subject }}"
                            class="form-control"
                            placeholder="Email Subject" required>
                    </div>
                </div>

                <div class="mt-3">
                    <textarea readonly class="form-control" rows="6" placeholder="Your Message" required>{{ $data->message }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>