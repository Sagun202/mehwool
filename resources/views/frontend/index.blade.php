@extends('frontend.layouts.master')

@section('content')
{{ FrontEndHandler::banner() }}
{{ FrontEndHandler::superProducts() }}
{{ FrontEndHandler::featuredProducts() }}
{{ FrontEndHandler::getHomePageCategories() }}
{{ FrontEndHandler::showHomeCategory() }}
{{ FrontEndHandler::Testimonial() }}
{{ FrontEndHandler::Blog() }}
{{ FrontEndHandler::moreProducts() }}

<div class="container-fluid gif"> 
    <div class="row" style="display:flex;">
     
       
        <div class="col">
            <div class="gif">
              {{ FrontEndHandler::getAds(1) }}
            </div>
        </div>
        <div class="col">
            <div class="gif">
         {{ FrontEndHandler::getAds(2) }}
            </div>
        </div>
       
        </div>
    
 
</div>



<div class="container-fluid gif"> 
    <div class="row" style="display:flex;">
     
       
        <div class="col">
            <div class="gif">
            
{{ FrontEndHandler::getAds(3) }}
            </div>
        </div>
        <div class="col">
            <div class="gif">
         {{ FrontEndHandler::getAds(4) }}
            </div>
        </div>
       
        </div>
    
 
</div>


<div class="container-fluid gif"> 
    <div class="row" style="display:flex;">
     
       
        <div class="col">
            <div class="gif">
            
{{ FrontEndHandler::getAds(5) }}
            </div>
        </div>
        <div class="col">
            <div class="gif">
         {{ FrontEndHandler::getAds(6) }}
            </div>
        </div>
       
        </div>
    
 
</div>


</div>


<div class="container-fluid gif"> 
    <div class="row" style="display:flex;">
     
       
        <div class="col">
            <div class="gif">
            
{{ FrontEndHandler::getAds(7) }}
            </div>
        </div>
        <div class="col">
            <div class="gif">
         {{ FrontEndHandler::getAds(8) }}
            </div>
        </div>
       
        </div>
    
 
</div>


<div class="container-fluid gif"> 
    <div class="row" style="display:flex;">
     
       
        <div class="col">
            <div class="gif">
            
{{ FrontEndHandler::getAds(9) }}
            </div>
        </div>
        <div class="col">
            <div class="gif">
         {{ FrontEndHandler::getAds(10) }}
            </div>
        </div>
       
        </div>
    
 
</div>




@endsection