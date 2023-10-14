@extends('welcome')
@section('content')
<center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger fw-bold rounded-pill mt-5" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Add Record
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">crud</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insertData" method="POST" enctype="multipart/form-data">
                        @csrf
<div class="mb-2">
<input type="text" placeholder="Enter Product Name" class="form-control" name="pname" id="">
</div>
<div class="mb-2">
<input type="text" placeholder="Enter Product price" class="form-control" name="pprice" id="">
</div>
<div class="mb-2">
  <input type="text" placeholder="Enter Product description" class="form-control" name="pmore" id="">
  </div>
<div class="mb-2">
<input type="file"class="form-control" name="image" id="">
</div>
<button type="submit" class="btn btn-outline-danger fw-bold rounded-pill">
        Add Record
    </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
</center>

 <!-- table view -->
 <div class="container mt-3">
 <table class="table">
  <thead class="bg-danger text-white fw-bold">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">More Details</th>
    </tr>
  </thead>
  <tbody class="text-danger bg-light fs-4">
    @foreach($data as $item)
    <tr>
      <!-- <th scope="row">{{$item['id']}}</th> -->
      <form action="updatedelete" method="get">
      <td class="pt-5"> <input type="hidden" name="id" value="{{$item['id']}}">  {{$item['id']}}</td>
      <td class="pt-5"><input type="hidden" name="name" value="{{$item['PName']}}"> {{$item['PName']}}</td>
      <td class="pt-5"><input type="hidden" name="price" value="{{$item['PPrice']}}"> {{$item['PPrice']}}</td>
      <td class="pt-5"><img src="images/{{$item['PImage']}}" width="80px" height="80px"></td>
      <td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" name="update" value="Update"></td>
      <td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" name="delete" value="Delete"></td>
      </form>
      <form action="moredata" method="get">
        <td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" name="more" value="show more"></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection