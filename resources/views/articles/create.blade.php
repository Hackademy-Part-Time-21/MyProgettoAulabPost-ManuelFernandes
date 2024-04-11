<x-layout>

    <div class="container-fluid p-  text-center text-black">
        <div class="row justify-content-center"> 
            <h1 class="display-1">
                Publica tu articolo
            </h1>
        </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
        
                        <form class="card p-5 shadow" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                            @csrf  
            
                            <div class="mb-3">
                                <label for="title"  class="form-label">Titolo</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                                @error('title')
                                        <span>{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="Subtitle" class="form-label">Sottotitolo</label>
                                <input type="text" name="Subtitle" class="form-control" id="Subtitle" value="{{old('subtitle')}}">
                                @error('Subtitle')
                                        <span>{{$message}}</span>
                                @enderror
                            </div>
                        @csrf  
                            <div class="mb-3">
                                <label for="image"  class="form-label">Imagine</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Categoria</label>
                                <select name="category" class="form-control text-capitalize" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Corpo del texto</label>
                                <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{old('body')}}</textarea>
                            </div>

                            <div class="mt-2 d-flex justify-content-center">
                                <button class="btn btn-info text-white">Inserici un articolo</button>
                            </div> 

                        
                        </form>
        
                </div>
        
            </div>
        
        </div>
            
    </div>


</x-layout>