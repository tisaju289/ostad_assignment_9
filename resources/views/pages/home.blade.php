@extends('layouts.app')



@section('home_content')



    
<div class="home-tab">
  <h3>Wellcome Home Page</h3><br>
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
  <h4>Summery</h4>
    <p>I am learning web development with php laravel. <br>
      I want to learn web development and become the best programmer in the country.
    </p>

    <br>

    <h4>My Skills</h4>
    <ul>
      <li>Diploma in Engineering computer science</li>
      <li>Web design and Devolopment working about 2 years</li>
      <li>basic all work of computer</li>
    </ul>












                  
             
      
    </div>
  </div>


@endsection