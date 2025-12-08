<div class="class-name container mt-5">
    <div class="row justify-content-center">
           <h2 class="text-center mb-3">Have anything to ask?</h2>
                    <h3 class="text-center text-muted">Email us below.</h3>
        <div class="col-md-10">

            <div class="card shadow card-hover border-info bg-light">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Message</label>
                            <textarea name="message" rows="4" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
