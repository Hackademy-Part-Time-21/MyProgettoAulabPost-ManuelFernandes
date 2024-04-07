<x-layout>
    <div class="container-fluid p-2  text-center ">
        <div class="row justify-content-center"> 
            <h1 class="display-1">
                Registrate
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">

            <form class="card p-5 shadow" action="{{Route('login')}}" method="post">
                @csrf  

                <div class="mb-3">
                  <label  class="form-label">Email address</label>
                  <input type="email" name="emeil" class="form-control" id="emeil" value="{{old('emeil')}}">
                  @error('emeil')
                        <span>{{$message}}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                  @error('password')
                        <span>{{$message}}</span>
                  @enderror
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <p class="small mt-2">Non sei registrato? <a href="{{route('register')}}">Clicca qui</a></p>
                </div>
                
            </form>

        </div>

     </div>

</div>
    

</x-layout>