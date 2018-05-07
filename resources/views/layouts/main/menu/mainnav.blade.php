<nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;">MENU</li>

                        @include('layouts.patrahotel.menu.mainnav.home')
                        
                        {{-- @include('layouts.patrahotel.menu.mainnav.rooms') --}}
                        
                        @include('layouts.patrahotel.menu.mainnav.ourhotels')
                        
                        {{-- @include('layouts.patrahotel.menu.mainnav.elements') --}}
                        
                        
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">News & Promo</a></li>
                        <li class="menu_button">
                            <a href="booking-form.html" class="button  btn_yellow"><i class="fa fa-calendar"></i>BOOK ONLINE</a>
                        </li>
                    </ul>
                </nav>