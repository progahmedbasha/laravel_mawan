@extends('home')

@section('content')
  <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                <br>
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Add</button>
                  <br><br>




                  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add</h4>
        </div>
        <div class="modal-body">
                                    <form  method="POST" action="{{action('CategoriesController@store')}}"  class="parsley-style-1"  name="selectForm2" novalidate="">
                                        @csrf

                                        <div class="row">

                                                {{-- title   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Name :</label>
                                                         <input type="text" name="title" class="form-control" placeholder="insert name ..">


 <p onclick="myFunction()"><i class="fa fa-plus-circle"></i> click to add subcategory</p>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "hidden");
  document.body.appendChild(x);


  document.getElementById("demo").innerHTML = "<select  name='parent_id' class='form-control' placeholder='insert name ..'>@foreach($data as $cat)<option value='{{$cat->id}}'>{{$cat->title}}</option>@endforeach</select>";
}
</script>

                                           <span class="text-danger" id="supplier_id_error"></span>
                                                    </div>
                                                </div>






                                        </div>



                                        <div class="mg-t-30">
                                            <button class="btn btn-dark pd-x-20"  type="submit"> Submit </button>
                                        </div>
                                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
	  </div>






<!-- ////// -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

                                              @foreach($data as $item)

                                              @if($item->parent !=null)
                                              <td>{{$item->parent->title}}\{{$item->title}}</td>
                                                @else
                                             <td>{{$item->title}}</td>
                                             @endif
                                                    <td>
                                                        <div class="btn-icon-list" >
                                                            <a href="categories/{{$item->id}}/edit">
                                                                <button class="btn btn-indigo btn-icon"><i class="fa fa-edit"></i></button>
                                                            </a>&nbsp;
                                                            <a href="" class="makeDeleteCity" city_id=" ">
                                                                <button class="btn btn-primary btn-icon"><i class="fa fa-trash"></i></button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach


                                        </tbody>
                                    </table>
                                @if($data->count() == 0)

                                    <h1 class="text-center">لايوجد أصناف</h1>

                                @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@stop
