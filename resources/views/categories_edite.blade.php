
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

                 
<form method="POST" action="{{action('CategoriesController@update',$id)}}">
  {{csrf_field() }}
  <fieldset>

    <legend>Personalia:</legend>
        <label for="fname">Category:</label><br>
 
                                                        @if($data->parent_id !=null)
                                                     <input name="title"  value="{{$data->title}} "></input>
                                                            @else
                                                         <input name="title"  value=" {{$data->title}} "> </input>
                                                          @endif
                                                           
                                                        </input>
                                                        {{ method_field('PUT') }}
 							 <button type="submit">add</button>

  </fieldset>
</form>




  

                 
                </div>
            </div>
        </div>
    </div>
</div>

