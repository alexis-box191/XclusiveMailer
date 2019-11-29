@extends('welcome')

@section('content')
   
   <div class="container">
       <div class="row text-center" style="height: 500px; margin-top: 4em; box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.4); ">
              <div class="col-sm-12" style="margin-top: 50px; font-family:fantasy; text-shadow: 1px 1px 5px grey;">
                  <h1>Xclusive Mailer App</h1>
              </div>
              <div class="col-sm-12" style="margin-top: 100px;">
                   <div class="col-sm-4 ">
                       <a href="action('MailController@sendmail')" class="btn btn-info btn-block btn-large" style="box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.4); font-weight: bold;">Send Mail</a>
                   </div>
                   <div class="col-sm-4">
                    <a href="action('MailController@sendmail')" class="btn btn-primary btn-block btn-large" style="box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.4); font-weight: bold;">Receive Mail</a>
                </div>
                <div class="col-sm-4">
                    <a href="action('MailController@sendmail')" class="btn btn-danger btn-block" style="box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.4); font-weight: bold;">Queue Mail</a>
                </div>
              </div>
       </div>
   </div>

@endsection