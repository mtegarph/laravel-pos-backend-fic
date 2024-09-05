@if ($message = Session::get('success'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <div class="body">
            <button class="close" data-dismiss="alert">
                <span></span>

            </button>
            <p>{{ $message }}</p>
        </div>
    </div>
@endif
