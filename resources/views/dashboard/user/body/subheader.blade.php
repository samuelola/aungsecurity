<header class="page-header row">
        @php 
            $tenant = app('tenant');
            $get_subdomain = $tenant->subdomain;
        @endphp
        <div class="logo-wrapper d-flex align-items-center col-auto">
            <a href="{{route('tenant_user_dashboard',$get_subdomain)}}">
              <img class="light-logo img-fluid" style="width:80px;height:60px;margin-left: 50px;" src="{{asset('aung_logo_white.png')}}" alt="logo"/>
              <img class="dark-logo img-fluid" src="{{asset('aung_logo_black.png')}}" alt="logo"/>
            </a>
          <a class="close-btn toggle-sidebar" href="javascript:void(0)">
              <i class="ti-layout-grid2"></i>
            </a></div>
        <div class="page-main-header col">
          <div class="header-left">
            <form class="form-inline search-full col" action="#" method="get">
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative">
                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Admiro .." name="q" title="" autofocus="autofocus"/>
                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                  </div>
                  <div class="Typeahead-menu"></div>
                </div>
              </div>
            </form>
            <div class="form-group-header d-lg-block d-none">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative d-flex align-items-center"> 
                  <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search..." name="q" title=""/><i class="ti-search"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-right">
            <ul class="header-right"> 
             
              
              
              <li class="custom-dropdown">
                <a href="javascript:void(0)">
                    <i class="ti-bell"></i>
                 </a>
              @if(auth()->user()->unreadNotifications->count() > 0)   
              <span class="badge rounded-pill badge-primary"> {{ auth()->user()->unreadNotifications->count() }}</span>

               @else
                 <span class="badge rounded-pill badge-primary"> 0 </span>
                @endif

                
                <div class="custom-menu notification-dropdown py-0 overflow-y-auto"
     style="max-height: 400px;">

                  <h3 class="title bg-primary-light dropdown-title">Notification 
                   
                    <a class="font-primary" href="{{route('notifications.index',$tenant->subdomain)}}">View All</a>
                  </h3>
                   @foreach(auth()->user()->notifications as $notification)
                       @php
                          $isUnread = is_null($notification->read_at);
                          $tenant = app('tenant');
                       @endphp
                      <a href="{{route('notifications.read',['notif'=>$notification->id,'tenant'=>$tenant->subdomain]) }}"
                       class="{{ $isUnread ? 'bg-primary-subtle fw-semibold' : '' }}"
                      >
                        
                      <ul class="activity-timeline">
                        <li class="d-flex align-items-start">
                          <div class="activity-line"></div>
                          <div class="activity-dot-primary"></div>
                          <div class="flex-grow-1">
                            <h6 class="f-w-600 font-primary">
                              {{ $notification->created_at->diffForHumans() }}  
                            <span class="{{$isUnread ? 'circle-dot-secondary' : 'circle-dot-primary'}} float-end">
                                <svg class="circle-color">
                                  <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                </svg></span></h6>
                            <h5> {{ is_array($notification->data['title'] ?? null)
                                ? implode(', ', $notification->data['title'])
                                : ($notification->data['title'] ?? 'Notification') }}</h5>
                            <p class="mb-0">
                               {{ \Illuminate\Support\Str::limit(
                                implode(', ', (array) ($notification->data['message'] ?? 'Notification')),
                                50,
                                '...'
                            ) }}
                            </p>
                          </div>
                        </li>
                                            
                      </ul>
                      </a>
                    @endforeach 
                </div>
              </li>
              
              
              
              <li class="profile-nav custom-dropdown">
                <div class="user-wrap">
                  <div class="user-img"><img src="{{asset('assets/images/profile.png')}}" alt="user"/></div>
                  <div class="user-content">
                    <h6>{{ucfirst(auth()->user()->first_name)}} {{ucfirst(auth()->user()->last_name)}}</h6>
                    <p class="mb-0">{{auth()->user()->role}}<i class="fa-solid fa-chevron-down"></i></p>
                  </div>
                </div>
                <div class="custom-menu overflow-hidden">
                  <ul class="profile-body">
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Profile"></use>
                      </svg><a class="ms-2" href="#">Account</a>
                    </li>
                    
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Login"></use>
                      </svg>
                      <a class="ms-2" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log Out
                      </a>
                      
                      <form id="logout-form" method="POST" action="{{ route('tenant.logout',$get_subdomain) }}">
                              @csrf
                             
                      </form>
                      
                    </li>

                          
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>