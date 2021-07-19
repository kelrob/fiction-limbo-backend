<nav id="sidebar" class="overflow-auto vh-100">
    <ul class="list-unstyled side-ul components vh-100">
        <li class="">
            <a href="#" class={{ Route::is('dashboard') ? 'active' : '' }} data-toggle="" aria-expanded="true">
                <span onclick="location.href='dashboard';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                        <path
                            d="M28,25.933a1.363,1.363,0,0,1-1.389,1.335H4.389A1.363,1.363,0,0,1,3,25.933V11.906a1.317,1.317,0,0,1,.536-1.054l11.111-8.3a1.434,1.434,0,0,1,1.706,0l11.111,8.3A1.317,1.317,0,0,1,28,11.906V25.933ZM8.556,19.26v2.669H22.444V19.26Z"
                            transform="translate(-3 -2.267)" fill="#cecece" />
                    </svg>
                    Homepage
                </span>

                <span class="pull-right" id="toggle-submenu" onclick="showSubMenu()"><i
                        class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="list-unstyled submenu" id="subMenuItem" style="display: none">
                <li class="">
                    <a href={{ url('featured-posts') }}
                        class={{ Route::is('featured-posts') || Route::is('featured-post-draft') || Route::is('featured-post-deleted') ? 'active' : '' }}>Featured
                        Post</a>
                </li>
                <li>
                    <a href={{ url('genres') }}
                        class={{ Route::is('genres') || Route::is('genres-archived') || Route::is('genres-deleted') ? 'active' : '' }}>Genres</a>
                </li>
                <li>
                    <a href={{ url('series') }}
                        class={{ Route::is('series') || Route::is('series-archived') || Route::is('series-deleted') ? 'active' : '' }}>Series</a>
                </li>
            </ul>
        </li>

        <li><a href={{ url('story') }}
                class={{ Route::is('story') || Route::is('story-archived') || Route::is('story-deleted') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="25" height="22.5" viewBox="0 0 25 22.5">
                    <path
                        d="M2,4.241A1.25,1.25,0,0,1,3.24,3H25.76A1.241,1.241,0,0,1,27,4.241V24.259A1.25,1.25,0,0,1,25.76,25.5H3.24A1.241,1.241,0,0,1,2,24.259ZM14.5,5.5V23h10V5.5ZM15.75,8h7.5v2.5h-7.5Zm0,3.75h7.5v2.5h-7.5Z"
                        transform="translate(-2 -3)" fill="#cecece" />
                </svg>Post page</a></li>

        <li><a href={{ url('gallery') }}
                class={{ Route::is('gallery') || Route::is('gallery2') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                    <path
                        d="M21.261,23.5c-.97-3-2.846-4.856-5.332-7a13.692,13.692,0,0,1,8.571-3V3.5h1.26A1.241,1.241,0,0,1,27,4.741V24.759A1.25,1.25,0,0,1,25.76,26H3.24A1.241,1.241,0,0,1,2,24.759V4.741A1.25,1.25,0,0,1,3.24,3.5H7V1H9.5V6h-5v8.75c6.525,0,12.078,3.077,14.141,8.75ZM22,1V6H12V3.5h7.5V1ZM20.125,12.25A1.875,1.875,0,1,1,22,10.375,1.875,1.875,0,0,1,20.125,12.25Z"
                        transform="translate(-2 -1)" fill="#cecece" />
                </svg>Media</a></li>

        <li><a href={{ url('backgrounds') }} class={{ Route::is('backgrounds') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="25" height="22.5" viewBox="0 0 25 22.5">
                    <path
                        d="M3.25,3h22.5A1.25,1.25,0,0,1,27,4.25v20a1.25,1.25,0,0,1-1.25,1.25H3.25A1.25,1.25,0,0,1,2,24.25v-20A1.25,1.25,0,0,1,3.25,3ZM24.5,11.75H4.5V23h20Zm-18.75-5v2.5h2.5V6.75Zm5,0v2.5h2.5V6.75Z"
                        transform="translate(-2 -3)" fill="#cecece" />
                </svg>Backgrounds</a></li>

        <li><a href={{ url('users') }}
                class={{ Route::is('users') || Route::is('user-details') || Route::is('users-restricted') || Route::is('users-verified') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="20.315" height="26.663" viewBox="0 0 20.315 26.663">
                    <path
                        d="M4,27.663a10.157,10.157,0,1,1,20.315,0ZM14.157,16.236a7.618,7.618,0,1,1,7.618-7.618A7.616,7.616,0,0,1,14.157,16.236Z"
                        transform="translate(-4 -1)" fill="#cecece" />
                </svg>Users</a></li>

        <li><a href={{ url('ads') }} class={{ Route::is('ads') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="24.5" height="22.05" viewBox="0 0 24.5 22.05">
                    <path
                        d="M25.275,3A1.225,1.225,0,0,1,26.5,4.225v19.6a1.225,1.225,0,0,1-1.225,1.225H3.225A1.225,1.225,0,0,1,2,23.825V4.225A1.225,1.225,0,0,1,3.225,3ZM11.064,9.125H8.614l-3.92,9.8H7.332l.49-1.225h4.03l.49,1.225h2.64Zm11.761,0h-2.45v2.45H19.15a3.675,3.675,0,0,0-.216,7.344l.216.006h3.675Zm-2.45,4.9v2.45H19.15l-.143-.009a1.225,1.225,0,0,1,0-2.433l.143-.009ZM9.839,12.659l1.035,2.591H8.8Z"
                        transform="translate(-2 -3)" fill="#cecece" />
                </svg>ADS</a></li>

        <li><a href={{ url('settings') }} class={{ Route::is('settings') ? 'active' : '' }}><svg
                    xmlns="http://www.w3.org/2000/svg" width="25" height="23.752" viewBox="0 0 25 23.752">
                    <path
                        d="M6.167,5.057A12.485,12.485,0,0,1,10.594,2.5a4.99,4.99,0,0,0,3.9,1.877A4.99,4.99,0,0,0,18.4,2.5a12.485,12.485,0,0,1,4.427,2.56,5,5,0,0,0,3.906,6.76,12.552,12.552,0,0,1,0,5.112,5,5,0,0,0-3.906,6.761A12.485,12.485,0,0,1,18.4,26.248a5,5,0,0,0-7.809,0,12.486,12.486,0,0,1-4.427-2.558,5,5,0,0,0-3.906-6.76,12.552,12.552,0,0,1,0-5.113,5,5,0,0,0,3.906-6.76ZM16.373,17.62a3.749,3.749,0,1,0-5.122-1.372,3.749,3.749,0,0,0,5.122,1.372Z"
                        transform="translate(-1.998 -2.497)" fill="#cecece" />
                </svg>Settings</a></li>

        <li><a href={{ url('/') }}><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <path d="M12,22A10,10,0,1,1,22,12,10,10,0,0,1,12,22ZM7,11V8L2,12l5,4V13h8V11Z"
                        transform="translate(-2 -2)" fill="#cecece" />
                </svg>Logout</a></li>
    </ul>
</nav>
