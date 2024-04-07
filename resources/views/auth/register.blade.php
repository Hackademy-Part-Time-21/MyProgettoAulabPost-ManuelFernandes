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

                <form class="card p-5 shadow text-center "  action="/register" method="post">
                  @csrf
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                            <span>{{$message}}</span>
                        @enderror
                      </div>
    
                    <div class="mb-3">
                      <label  class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}">
                      @error('emeil')
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      @error('password')
                            <span>{{$message}}</span>
                      @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password Confirmed</label>
                        <input type="password" name="password_confirmation"  class="form-control">
                      </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                        <p class="small mt-2">Gia registrato? <a href="{{route('login')}}">Clicca qui</a></p>
                    </div>
                    
                </form>
    


              </div>

            </div>
          
          </div>

          
</x-layout>