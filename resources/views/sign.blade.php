@extends('layout.main')

@section('container')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form action='/sign' method='post'>
                @csrf
                <div class="row">
                  <div class="col-md-12 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                      <label class="form-label" for="Name">Name</label>
                      @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    {{-- <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" id="birthday" name="birthday" placeholder="01/01/2001"/>
                      <label for="birthday" class="form-label">Birthday</label>
                    </div> --}}
  
                  </div>
                  {{-- <div class="col-md-6 mb-4 ">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                  </div>
                </div> --}}
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                      <label class="form-label" for="email">Email</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                      <label class="form-label" for="password">Password</label>
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
  
                  </div>
                </div>
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection