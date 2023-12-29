<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('backend/assets/images/logo.svg') }}" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class='sidebar-title'>Menu Principal</li>
                <li class="sidebar-item active ">
                    <a href="{{ asset('dashboard') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Posts</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ asset('/ajouter_post') }}">Ajouter un post</a>
                        </li>
                        <li>
                            <a href="{{ asset('/posts') }}">Liste des posts</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ asset('/ajouter_categorie') }}">Ajouter categorie</a>
                        </li>
                        <li>
                            <a href="{{ asset('/categories') }}">Liste des categories</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ asset('/messages') }}">Liste des messages</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
