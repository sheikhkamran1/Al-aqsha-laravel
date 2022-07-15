@extends('backend.app')
 
@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <a href="/category" class="btn btn-primary m-1">Back</a>
                  </div>
                  <div class="card-body">
                      @if (session('message'))
                          <div>
                              <p class="text-success"> {{ session('message') }} </p>
                          </div>
                      @endif
                    <form action="/category" method="post" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="eg.Science,Math" value="{{ old('name') }}">
                        </div>
                
                        <div class="form-group">
                            <label for="image">Upload Company Logo (Optional)</label>
                            <input id="image" class="form-control" type="file" name="image" value="{{ old('image') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection