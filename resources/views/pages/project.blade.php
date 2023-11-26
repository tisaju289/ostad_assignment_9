@extends('layouts.app')



@section('project_content')



    
<div class="home-tab">
  <h3>Wellcome project Page</h3><br>
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
      <ul class="nav nav-tabs" role="tablist">
        {{-- <li class="nav-item" role="presentation">
          <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
        </li> --}}
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false" tabindex="-1">Summery</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false" tabindex="-1">Skills</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false" tabindex="-1">More</a>
        </li>
      </ul>
      <div>
        <div class="btn-wrapper">
          <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
          <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
          <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
        </div>
      </div>
    </div>
   
            
  <br>
  <h4>My Project</h4>
<br>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Web Design Project</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card" style="max-width: 10rem;">
          <img src={{ asset("assets/images/laravel_image.png") }} class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h6 class="card-title">ostad laravel project-6</h6>
            <p class="card-text">Watch for click my project</p>
            <a href={{ asset("https://github.com/tisaju289/ostad_assign") }} class="btn btn-primary btn-sm">Go</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="card" style="max-width: 10rem;">
          <img src={{ asset("assets/images/laravel_image.png") }} class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h6 class="card-title">ostad laravel project-7</h6>
            <p class="card-text">Watch for click my project</p>
            <a href={{ asset("https://github.com/tisaju289/Project_1") }} class="btn btn-primary btn-sm">Go</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="card" style="max-width: 10rem;">
          <img src={{ asset("assets/images/laravel_image.png") }} class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h6 class="card-title">ostad laravel project-8</h6>
            <p class="card-text">Watch for click my project</p>
            <a href={{ asset("https://github.com/tisaju289/ostad_assign") }} class="btn btn-primary btn-sm">Go</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="card" style="max-width: 10rem;">
          <img src={{ asset("assets/images/laravel_image.png") }} class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h6 class="card-title">ostad laravel project-9</h6>
            <p class="card-text">Watch for click my project</p>
            <a href={{ asset("https://github.com/tisaju289/ostad_assign") }} class="btn btn-primary btn-sm">Go</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for certain components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


























                  
             
      
    </div>
  </div>


@endsection