@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Admin panel</h2>
    <div class="row">
        <div>
            <p>Привітання: {{$text}}</p>
            <form method="POST" action="{{route('admin.store')}}">
                @csrf
                <textarea class="form-control" style="width: 300px" placeholder="Змінити привітання" name="text" id="floatingTextarea"></textarea>
                <input type="submit" class="btn btn-success mt-1" value="Confirm">
            </form>
        </div>
    </div>
</div>
@endsection
