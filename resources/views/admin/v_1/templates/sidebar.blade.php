@can('super-access')
     <li class="m-menu__item m-menu__item--submenu {{strstr(Route::current()->getName(), 'cms.oauth') ? 'm-menu__item--expanded m-menu__item--open' : ''}}" aria-haspopup="true" m-menu-submenu-toggle="hover">
        <a href="javascript:void(0)" class="m-menu__link m-menu__toggle">
            <i class="m-menu__link-icon flaticon-globe"></i>
                <span class="m-menu__link-text">OAuth</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
         </a>
        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">OAuth</span></span></li>
                <li class="m-menu__item  {{strstr(Route::current()->getName(), 'cms.oauth.client') ? 'm-menu__item--active' : ''}}" aria-haspopup="true"><a href="{{route('cms.oauth.client')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client</span></a></li>
                <li class="m-menu__item  {{strstr(Route::current()->getName(), 'cms.oauth.authorized-client') ? 'm-menu__item--active' : ''}}" aria-haspopup="true"><a href="{{route('cms.oauth.authorized-client')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Authorized Client</span></a></li>
                {{-- <li class="m-menu__item  {{strstr(Route::current()->getName(), 'cms.oauth.personal-access-token') ? 'm-menu__item--active' : ''}}" aria-haspopup="true"><a href="{{route('cms.oauth.personal-access-token')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Personal Access Token</span></a></li> --}}
            </ul>
        </div>
    </li>
@endcan