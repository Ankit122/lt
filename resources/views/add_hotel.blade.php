@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Hotels</div>
                <div class="panel-body">
                @if( Session::has('message') )
                    <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                    </div>
                    @endif
                     <form method="POST" action="{{url('addHotel')}}">
                     <input type="hidden" value="{{csrf_token()}}" name="_token"></input>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Add Hotels</label>
                        <input type="text" class="form-control" name="hname"  placeholder="Add Hotels">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                      <button> type="reset" class="btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
