<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a>
                <strong><img src="{{asset('admin/img/logo/logosn.png')}}" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/4.jpg" alt="" /></a>
					<h2>Lakian <span class="min-dtn">Das</span></h2>
				</div>
				<div class="profile-social-dtl">
					<!-- <ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul> -->
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="">
								   <!-- <i class="icon nalika-home icon-wrap"></i> -->
								   <span class="mini-click-non">Users</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{route('users.index')}}"><span class="mini-sub-pro">All Users</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <!-- <i class="icon nalika-home icon-wrap"></i> -->
								   <span class="mini-click-non">About</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{route('about.index')}}"><span class="mini-sub-pro">All About Table</span></a></li>
                                <li><a title="Dashboard v.1" href="{{route('about.create')}}"><span class="mini-sub-pro">Create About</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>