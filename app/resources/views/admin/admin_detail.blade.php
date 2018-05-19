<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Project Manager|User Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      
        
    </head>
    <body>

           @include('partials.header')

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Admin
                            </p>
                            <p class="subtitle">
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                  
                            </div>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li>
                              <a href="/admin">Aprovals</a>
                            </li>
                            <li class="is-active">
                                <a href="/assign">User Management</a>
                              </li>
                              <li>
                                <a href="/program">Program Management</a>
                              </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                    
                      <h1 class="title"><b> {{$user->name . ' ' . $user->lastname}} </b></h1>                  
                      <hr style="margin-bottom: 0;">
                        
                      <div class="box">
                        <article class="media">
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <div class="columns">
                                  <div class="column">
                                    <div class="media-left">
                                      <figure class="image is-120x120">
                                        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                      </figure>
                                    </div>
                                  </div>
                                  <div class="column">
                                    <ul>
                                      <li><strong>Company: </strong><small> {{$user->company->name}} </small></li>
                                      <li><strong>E-mail: </strong> <small>{{$user->email}}</small> </li> 
                                      <li><strong>Member Since: </strong> <small>{{$user->created_at}}</small> </li>
                                      {{-- <li><strong>Active Projects:</strong> <small>{{$user}}</small></li> --}}
                                    </ul>
                                    
                                  </div>
                                  <div class="column">
                                    
                                  </div>
                                </div>
                              </p>
                            </div>
                            
                          </div>
                        </article>
                      </div>

                    </div>
                  </section>

    {{-- BEGIN CREATE MODAL --}}
    </body>


    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
  

</html>
