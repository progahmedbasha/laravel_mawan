@extends('home')

@section('content')
  <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Employees</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employees</li>
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

 <form method="POST" action="{{action('EmployeesController@store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('user_type') }}</label>

                            <div class="col-md-6">
<!--                                 <input id="user_type" type="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" value="{{ old('user_type') }}" required autocomplete="user_type">
 -->
                                                  <select name="user_type_id" class="form-control">
                                                        <option>choose permission</option>
                                                      
                                                           @foreach($usertype as $item)
                                                           <option value="{{$item->id}}">{{$item->name}}</option>

                                                           @endforeach
                                 
                                                           
                                                        </select>   
                                @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
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
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>User type</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>User type</th>
                                                <th>Action</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            @foreach($user as $item)
                                            @if($item->user_type_id !=1)

                                              <td>{{$item->name}}</td> 
                                              <td>{{$item->email}}</td>
                                              <td>{{$item->phone}}</td> 
                                             <td>{{$item->usertype->name}}</td>
                                            
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
                                                 @endif

                                                @endforeach

                                        </tbody>
                                    </table>
                             

                                   

                           
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@stop
