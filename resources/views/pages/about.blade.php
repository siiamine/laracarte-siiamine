@extends('layouts.default',['title'=> 'About'])

@section('content')
    <div class="container">
        <h2>What is {{config('app.name')}}</h2>
        <p> {{config('app.name')}} is a clone app of <a href="https://laramap.com">Laramap.com </a> </p>

   <div class="row">
       <div class="col-md-6">
           <p class="alert alert-warning">
               <strong>
                   <i class="fas fa-exclamation-triangle"></i>
                   this app has been built by <a href="https://twitter.com/estmo">@estmo</a> for learning purpose
               </strong>
           </p>
       </div>
   </div>
        <p>feel free to help to improve the <a href="https://github.com/siiamine/{{config('app.name')}}-siiamine">source code</a></p>
        <hr>
        <h2>What is Laramap?</h2>
        <p>Laramap is the website by wish {{config('app.name')}} was inspired</p>
        <p>more info <a href="https://">here</a> </p>
        <hr>
        <h2> wich tools and services are used in {{config('app.name')}}?</h2>
        <p>
            <ul>
                <li>laravel</li>
                <li>bootstrap</li>
                <li>amazon s3</li>
                <li>Mandrill</li>
                <li>Google Maps</li>
                <li> Gravatar</li>
                <li> Antony Martins Geolocation Package</li>
                <li> Michel Fortins Markdown Parser package</li>
                <li> Heroku</li>

            </ul>
        </p>
    </div>
@stop