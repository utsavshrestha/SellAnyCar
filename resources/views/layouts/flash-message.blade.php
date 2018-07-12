@if(session()->has('success_message'))
    <div class="alert alert-success">
        {{session()->get('success_message')}}
        <br />
    </div>

@endif
