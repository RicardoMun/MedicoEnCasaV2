@if ($errors -> any())
    @foreach($errors -> all() as $error)
        <div class="alet alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

