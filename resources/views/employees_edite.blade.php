
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

                 
<form method="POST" action="{{action('EmployeesController@update',$id)}}">
  {{csrf_field() }}
  <fieldset>

    <legend>Personalia:</legend>
        <label for="fname">name:</label><br>             
       <input name="name"  value=" {{$data->name}} "> </input>
       <label for="fname">Email:</label><br>             
       <input name="email"  value=" {{$data->email}} "> </input>
       <label for="fname">Phone:</label><br>             
       <input name="phone"  value=" {{$data->phone}} "> </input>

                                                         
                                                           
                                                     
                                                        {{ method_field('PUT') }}
 							 <button type="submit">add</button>

  </fieldset>
</form>




  

                 
                </div>
            </div>
        </div>
    </div>
</div>

