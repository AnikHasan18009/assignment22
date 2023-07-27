@extends('masterLayout.app')
@section('title')
Login    
@endsection

@section('content')

<div class="form-background vh-100">
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="bg-light col-12 col-md-6 col-lg-4 rounded-3 p-3 fs-5">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
 
    <button type="submit" class="form-button d-block mx-auto"><span>login</span></button>
  </div>
</div>
</div>
</div>
@endsection