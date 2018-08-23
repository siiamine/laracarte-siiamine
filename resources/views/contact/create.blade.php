@extends('layouts.default',['title'=> 'About'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get in touch</h2>
                <p class="text-muted">if you having trouble with this service.please <a href="mailto:thelastmino@gmail.com">ask for help</a></p>

            <form action="#" method="POST">
               <div class="form-group">
                   <label for="name" class="custom-control-label">Name</label>
                   <input type="text" name="name" id="name" class="form-control" required="required">

               </div>

                <div class="form-group">
                    <label for="email" class="custom-control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="required" placeholder="enter your email here">

                </div>

                <div class="form-group">
                    <label for="message" class="custom-control-label sr-only" >Message</label>
                    <textarea class="form-control" rows="10" cols="10"  name="message" id=" message" required="required" placeholder="tape your message here" ></textarea>
                </div>

                <div class="form-group">
                   <button class="btn btn-primary btn-block">submit Enquiry &raquo;</button>
                </div>
            </form>




            </div>

        </div>

    </div>
@stop