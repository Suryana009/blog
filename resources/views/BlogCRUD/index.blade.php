@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('blog/create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($blog as $blogs)
    <tr>
        <td>{{ $blogs->id }}</td>
        <td>{{ $blogs->title }}</td>
        <td>{{ $blogs->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ url('blog/show',$blogs->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ url('blog/edit',$blogs->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ url('blog/hapus',$blogs->id) }}" onclick="return confirm('Anda yakin ingin menghapus data {{ $blogs->title }} ?')">Hapus</a>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    </div>

@endsection