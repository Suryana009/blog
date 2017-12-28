@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
        </div>
    </div>

    <form method="post" action="/blog">

    {{ csrf_field() }}
        
    <div class="form-group">
    <label for="exampleinputemail">Title</label>
        <input type="text" class="form-control" placeholder="Name" name="title">
    </div>

    <div class="form-group">
    <label for="exampleinputpassword">Description</label>
        <textarea name="description" class="form-control" placeholder="Description"></textarea>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-success">Submit</button>
    <a class="btn btn-info" href="{{ url('blog') }}"> Back</a>
    </div>

    </form>

@endsection