<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin | Pending users</title>

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
                              <a href="/admin">Approvals</a>
                            </li>
                            <li >
                              <a href="/assign">User Management</a>
                            </li>
                            <li class="is-active">
                              <a href="/program">Program Management</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>



                  <section style="margin-top: 200px;" class="section">
                    <div id="grid" class="columns">
                      <div class="column">
                        <div class="notification is-grey-light has-text-centered">
                          <p class="title">1</p>
                        </div>
                      </div>
                      <div class="column">
                        <div class="notification is-grey-light has-text-centered">
                          <p class="title">2</p>
                        </div>
                      </div>
                      <div class="column">
                        <div class="notification is-grey-light has-text-centered">
                          <p class="title">3</p>
                        </div>
                      </div>
                      <div class="column">
                        <div class="notification is-grey-light has-text-centered">
                          <p class="title">4</p>
                        </div>
                      </div>
                    </div>
                  </section>


    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <script>
        
        $(document).ready( function () {
            $('#pendings').DataTable();
        } );
        
    </script>


</html>
