@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Departments</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('department.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($depts as $dept)
        <tr>
            <td>{{ $dept->id }}</td>
            <td>{{ $dept->name }}</td>
            <td>{{ $dept->description }}</td>
            <td>
                <form action="{{ route('department.destroy',$dept->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('department.show',$dept->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('department.edit',$dept->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $depts->links() !!}
</div>      
@endsection