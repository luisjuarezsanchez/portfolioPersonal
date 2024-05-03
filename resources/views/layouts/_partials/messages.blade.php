@if (Session::has('success_message'))
    <div class="container alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
