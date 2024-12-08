@extends('layout')
@section('content')



<div class="container-fluid mt-4 px-4">
    <div class="row mt-4">
      <form class=" justify-content-center d-flex" role="search">
        <input style="width:45%" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>

    </div>

    <div class="row mt-4 align-items-center">
        <h5 class="col-11">Popular</h5>       
        <a class="col-1 btn">
            View More>
        </a>
    </div>
    
    <div class="row mt-4">
        <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
  
        <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
   
    </div>
</div>









@endsection