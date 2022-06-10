@extends('layout.main')
@section('container')
    <!-- Page Content -->
    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Detail Info
    </h1>
    
        <div class="row">
          <div class="col-md-8">
            <img class="img-fluid" src="/img/{{ $item -> image }}.jpg" alt="{{ $item -> image }}">
          </div>
      
          <div class="col-md-4">
            <h3 class="my-3">{{ $item["title"] }}</h3>
            <p>{{ $item["alamat"] }}</p>
            <h3 class="my-3">Rp.{{ $item["harga"] }},00</h3>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Dolor Sit Amet</li>
              <li>Consectetur</li>
              <li>Adipiscing Elit</li>
            </ul>
            <div class="mt-4 pt-2 ">
              <form action="billing" method="post">
                <div class="col-md-4">
                  <?php echo($item["image"]); ?>
                  <input type="hidden" name="field" value="{{ $item -> "image" }}"/>
                  <input type="hidden" name="harga" value="{{ $item -> "harga" }}"/>
                  <label> Tanggal Pesan </label>
                  <input type="date" id="date" name="date" class="mb-2">
                </div>
                <input class="btn btn-primary btn-lg" type="Pesan" value="Submit" placeholder="Pesan"/>
              </form> 
              </div>
          </div>
          

    <!-- Portfolio Item Row -->
    
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Related Projects</h3>
  
    <div class="row">
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
  
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="https://via.placeholder.com/500x300" alt="">
            </a>
      </div>
      
     

    </div>
    <!-- /.row -->
  
  </div>
  <!-- /.container -->
@endsection