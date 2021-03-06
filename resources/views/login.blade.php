@extends('layout.main')

@section('container')
<section class="vh-100" style="">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <form action="login" method="post">
            @csrf
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in</h3>
  
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" autofocus required/>
                <label class="form-label" for="email">Email</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                <label class="form-label" for="password">Password</label>
              </div>
  
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <label class="form-check-label" for="form1Example3"> Belum Punya Akun? <a href="sign">Daftar Sekarang</a> </label>
              </div>
  
              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
  
              <hr class="my-4">
  
              <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
              <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
  
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>
@endsection