<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <a href="{{ route('profile') }}">
                    <img src="{{asset('dashboard-asset/images/user.png')}}" width="48" height="48" alt="User" />
                </a>
            </div>
            <div class="info-container">
                <a href="{{ route('profile') }}">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->firstname." ".auth()->user()->lastname }}</div>
                    <div class="email">{{ auth()->user()->email }}</div>
                </a>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('home')}}">
                        <i class="material-icons">account_box</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('paintings') }}">
                        <i class="material-icons">leaderboard</i>
                        <span>Auctions</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('add.painting')}}">
                        <i class="material-icons">playlist_add</i>
                        <span>Add Auction</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('activities') }}">
                        <i class="material-icons">history</i>
                        <span>Activity</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}">
                        <i class="material-icons">settings_applications</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <form action="/logout" method="post" id="logout-form">
                        @csrf
                        <a href="javascript:$('#logout-form').submit();" class="logout" type="submit">
                            <i class="material-icons">power_settings_new</i>
                            <span>logout</span>
                        </a>
                    </form>
                </li>



                <!-- <li>
                      <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/widgets/cards/basic.html">Basic</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/cards/colored.html">Colored</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/cards/no-header.html">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                </li>
                                <li>
                                    <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>-->
                <!--<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/ui/alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="pages/ui/animations.html">Animations</a>
                        </li>
                        <li>
                            <a href="pages/ui/badges.html">Badges</a>
                        </li>

                        <li>
                            <a href="pages/ui/breadcrumbs.html">Breadcrumbs</a>
                        </li>
                        <li>
                            <a href="pages/ui/buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="pages/ui/collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="pages/ui/colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="pages/ui/dialogs.html">Dialogs</a>
                        </li>
                        <li>
                            <a href="pages/ui/icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="pages/ui/labels.html">Labels</a>
                        </li>
                        <li>
                            <a href="pages/ui/list-group.html">List Group</a>
                        </li>
                        <li>
                            <a href="pages/ui/media-object.html">Media Object</a>
                        </li>
                        <li>
                            <a href="pages/ui/modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="pages/ui/notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="pages/ui/pagination.html">Pagination</a>
                        </li>
                        <li>
                            <a href="pages/ui/preloaders.html">Preloaders</a>
                        </li>
                        <li>
                            <a href="pages/ui/progressbars.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="pages/ui/range-sliders.html">Range Sliders</a>
                        </li>
                        <li>
                            <a href="pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                        </li>
                        <li>
                            <a href="pages/ui/tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="pages/ui/thumbnails.html">Thumbnails</a>
                        </li>
                        <li>
                            <a href="pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                        </li>
                        <li>
                            <a href="pages/ui/waves.html">Waves</a>
                        </li>
                    </ul>
                </li>-->
                <!--<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-examples.html">Form Examples</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="pages/forms/form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="pages/forms/editors.html">Editors</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/tables/normal-tables.html">Normal Tables</a>
                        </li>
                        <li>
                            <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                        </li>
                        <li>
                            <a href="pages/tables/editable-table.html">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/medias/image-gallery.html">Image Gallery</a>
                        </li>
                        <li>
                            <a href="pages/medias/carousel.html">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/charts/morris.html">Morris</a>
                        </li>
                        <li>
                            <a href="pages/charts/flot.html">Flot</a>
                        </li>
                        <li>
                            <a href="pages/charts/chartjs.html">ChartJS</a>
                        </li>
                        <li>
                            <a href="pages/charts/sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="pages/examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="pages/examples/blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="pages/examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="pages/examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/maps/google.html">Google Map</a>
                        </li>
                        <li>
                            <a href="pages/maps/yandex.html">YandexMap</a>
                        </li>
                        <li>
                            <a href="pages/maps/jvectormap.html">jVectorMap</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">update</i>
                        <span>Changelogs</span>
                    </a>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>-->
            </ul>
        </div>
        #Menu
        <!-- Footer -->
        </ul>
        </div>
        <div class="legal">
            <div class="copyright">
                &copy; 2019 - 2020 <a href="javascript:void(0);">Rangrezz | All rights reserved</a>.
            </div>
            <div class="version">
                <b>Version: </b> 2.1.0 | Made By <b>Neel Thakkar</b>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>