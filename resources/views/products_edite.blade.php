
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
<form method="POST" action="{{action('ProductsController@update',$id)}}">
  {{csrf_field() }}
 
  <fieldset>

    <legend>Personalia:</legend>
        <label for="fname">barcode:</label><br>
    <input type="text" id="fname" value="{{$data->barcode}}" name="barcode" ><br>
    <label for="fname">product name:</label><br>
    <input type="text" id="fname" value="{{$data->name}}" name="name" ><br>
    <label for="fname">buy price:</label><br>
    <input type="text" id="fname" value="{{$data->buy_price}}" name="buy_price" ><br>
    <label for="fname">sell price:</label><br>
    <input type="text" id="fname" value="{{$data->sell_price}}" name="sell_price" ><br>

    <label for="lname">qty:</label><br>
   <input type="text" id="fname"  value="{{$data->qty}}" name="qty" ><br>

                                                       <label for="">الصنف</label>
                                                    
                                                           
                                                       <select name="category_id" class="form-control" >
                                                        

                                                        @foreach($categories as $item)
                                                          @if($item->parent !=null)
                                                           <option value="{{$item->id}}" {{($item->id == $data->category_id )? 'selected' : '' }}>{{$item->parent->title}}\{{$item->title}}</option>
                                                          @endif

                                                         @endforeach       
                                                           
                                                        </select>                                                     
                                                        <span class="text-danger" id="product_price_error"></span>
                                          

 {{ method_field('PUT') }}
  <button type="submit">add</button>

  </fieldset>
</form>




  

                 
                </div>
            </div>
        </div>
    </div>
</div>

