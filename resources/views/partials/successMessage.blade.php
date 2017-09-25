{{--success message--}}
@if(session()->has('message'))
    <div class="alert">
        <h3 class="alert-success">{{session()->get('message')}}</h3>
    </div>
@endif