@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Comment</div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        
                        @foreach($comment as $key=>$val)
                        
                        <tbody>
                            <tr>
                                <td>{{$comment[$key]->comments}}</td>
                                
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
