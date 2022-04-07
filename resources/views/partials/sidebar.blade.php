<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a class="simple-text logo-normal">
                <h3 align="center">Dcreative</h3>
            </a>
        </div>
        
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class= "@yield('home')">
                    <a href="/admin/home">
                        <i class="fa fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class= "@yield('layanan')">
                    <a href="/admin/layanan">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <p>Layanan Kami</p>
                    </a>
                </li>

                <li class= "@yield('testimoni')">
                    <a href="/admin/testimoni">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <p>Testimoni</p>
                    </a>
                </li>
                <li class= "@yield('faq')">
                    <a href="/admin/faq">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>FAQ</p>
                    </a>
                </li>

                <li class= "@yield('competition')">
                    <a href="/admin/competition">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <p>Competition and Event</p>
                    </a>
                </li>
                <li class= "@yield('siaran')">
                    <a href="/admin/siaran">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <p>Siaran and Pers</p>
                    </a>
                </li>
                <li class= "@yield('portofolio')">
                    <a href="/admin/portofolio">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Portofolio</p>
                    </a>
                </li>
                <li class= "@yield('team')">
                    <a href="/admin/team">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Team</p>
                    </a>
                </li>
                <li class= "@yield('kebijakan')">
                    <a href="/admin/kebijakan">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Kebijakan dan Aturan</p>
                    </a>
                </li>



                <li class= "@yield('logout')">
                    <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                </li>
            </ul>
        </div>
    </div>

