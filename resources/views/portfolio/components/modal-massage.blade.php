<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact <span style="color: #1f2937;">Me!</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="messageAlert" class="alert d-none" role="alert"></div>
                <form action="{{ route('portfolio.store') }}" id="contactForm" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email Address"
                                required>
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <input type="text" name="phone_number" class="form-control" placeholder="Mobile Number"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email_subject" class="form-control" placeholder="Email Subject"
                                required>
                        </div>
                    </div>

                    <div class="mt-3">
                        <textarea class="form-control" name="message" rows="6" placeholder="Your Message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: "{{ route('portfolio.store') }}",
                method: "POST",
                data: formData,
                success: function(response) {
                    $('#messageAlert')
                        .removeClass('alert-danger')
                        .addClass('alert alert-success')
                        .text(response.success)
                        .removeClass('d-none');
                    $('#contactForm')[0].reset();
                },
                error: function(xhr) {
                    let errorMessage = xhr.responseJSON?.error ||
                        'An unexpected error occurred.';
                    $('#messageAlert')
                        .removeClass('alert-success')
                        .addClass('alert alert-danger')
                        .text(errorMessage)
                        .removeClass('d-none');
                }
            });
        });
    });
</script>
