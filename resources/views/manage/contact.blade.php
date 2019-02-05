@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="contact.css" rel="stylesheet" type="text/css">
<section id="contact" class="content-section text-center">
  @if(count($errors)>0)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error }}</li>
      @endforeach
    </ul>
  @endif 

  <form action="{{url('sendemail/send')}}" method= "post">
    {{csrf_field()}}
        <div class="contact-section">
            <div class="container">
              <h2>Contact Us</h2>
              <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" action="send" class="btn btn-default">Send Message</button>
                  </form>
                   <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </form>
      </section>
  }
@endsection