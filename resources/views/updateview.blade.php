@extends('welcome')
@section('content')
<center>
<div class=" container border mt-3 p-2 border-danger">
    <h2 class="text-center text-warning">Update View</h2>
    <div class="modal-body">
                    <form action="updatedata" method="get" enctype="multipart/form-data">
                        @csrf

<div class="mb-2">
<input type="text" placeholder="Enter Product Name" class="form-control" value="{{$pname}}" name="name" id="">
</div>
<div class="mb-2">
<input type="text" placeholder="Enter Product price" class="form-control" value="{{$pprice}}" name="price" id="">
</div>
<input type="hidden" name="id" value="{{$id}}">
<button type="submit" class="btn btn-outline-warning fw-bold rounded-pill">
        Update Record
    </button>
                    </form>
                </div>
</div>
</center>
@endsection