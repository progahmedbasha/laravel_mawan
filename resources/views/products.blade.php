@extends('home')

@section('content')
  <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>

                                               @if(count($errors))
                                                <ul>
                                                  @foreach($errors->all() as $error)
                                                  <li>{{$error}}</li>
                                                  @endforeach

                                                </ul>

                                                @endif
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
                                    <form  class="parsley-style-1"  method="POST" action="{{action('ProductsController@store')}}" name="selectForm2" novalidate="">
                                        @csrf

                                        <div class="row">
                                            
                                                {{--  SUPPLIER ID   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">رقم المنتج</label>
                                                         <input type="text" name="barcode" value="{{ old('barcode') }}" class="form-control" placeholder="ادخل رقم المنتج">

                                                    
                                                        <span class="text-danger" id="supplier_id_error"></span>
                                                    </div>
                                                </div>

                                                

                                                {{--  RESEVER NAME   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">اسم المنتج</label>
                                                        <input type="text" name="name" class="form-control" placeholder="ادخل اسم المنتج">
                                                    
                                                            <span class="text-danger" id="resever_name_error"></span>
                                                    </div>
                                                </div>
                                                
                                                {{--  RESEVER PHONE   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">سعر الشراء</label>
                                                        <input type="text" name="buy_price" class="form-control" placeholder="ادخل سعر الشراء">
                                                    
                                                            <span class="text-danger" id="resver_phone_error"></span>
                                                    </div>
                                                </div>

                                                {{--  GOVERNORATE_ID   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">سعر البيع</label>
                                                        
                                                        <input type="text" name="sell_price" class="form-control" placeholder="ادخل سعر البيع">

                                                    </div>
                                                </div>
                                            

                                                {{-- CITY ID  --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">الكمية</label>
                                                        <input type="text" name="qty" class="form-control" placeholder="ادخل الكمية">

                                                        <span class="text-danger" id="city_id_error"></span>
                                                    </div> 
                                                </div>




                                                {{--  PRODUCT PRICE   --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">الصنف</label>
                                                    
                                                           
                                                       <select name="category_id" class="form-control">
                                                        <option>اختار الصنف</option>
                                                        @foreach($categories as $item)
                                                          @if($item->parent !=null)
                                                           <option value="{{$item->id}}">{{$item->parent->title}}\{{$item->title}}</option>
                                                         
                                                          @endif

                                                         @endforeach       
                                                           
                                                        </select>                                                     
                                                        <span class="text-danger" id="product_price_error"></span>
                                                    </div>
                                                </div>


                                     

                                            
                                        </div>

                                        
                                    
                                        <div class="mg-t-30">
                                            <button class="btn btn-dark pd-x-20" id="makeCreateProduct" type="submit">اضافة شحنة جديدة للمخزن</button>
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
                                                <th>barcode</th>
                                                <th>name</th>
                                                <th>buy price</th>
                                                <th>sell price</th>
                                                <th>qty</th>
                                                <th>total buy price</th>
                                                <th>total sell price</th>
                                                <th>category</th>
                                                <th>Action</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>barcode</th>
                                                <th>name</th>
                                                <th>buy price</th>
                                                <th>sell price</th>
                                                <th>qty</th>
                                                <th>total buy price</th>
                                                <th>total sell price</th>
                                                <th>category</th>
                                                <th>Action</th>
                                                <th>Action</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

                                               @foreach($data as $item)
                                              <td>{{$item->barcode  }}</td>
                                              <td>{{$item->name}}</td>
                                              <td>{{$item->buy_price }}</td>
                                              <td>{{$item->sell_price   }}</td>
                                              <td>{{$item->qty}}</td>
                                              <td>{{$item->total_buy_price}}</td>
                                              <td>{{$item-> total_sell_price}}</td>

                                              @if($item->Category->parent_id !=null)
                                               <td>{{$item->Category->parent->title}}\{{$item->Category->title}}</td>
                                               @else
                                             <td>{{$item->Category->title}}</td>
                                               @endif

                                              <td>{{$item->created_at}}</td>

                                                    <td>
                                                        <div class="btn-icon-list">
                                                            <a href="products/{{$item->id}}/edit">
                                                                <button class="btn btn-indigo btn-icon"><i class="fa fa-edit"></i></button>
                                                            </a>&nbsp;
                                                            <a class="makeDeleteCity" href="" city_id=" ">
                                                                <button class="btn btn-primary btn-icon" ><i class="fa fa-trash"></i></button>
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
