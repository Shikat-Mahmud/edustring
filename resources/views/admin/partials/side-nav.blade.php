<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.index') }}" class="b-brand text-primary">

                @php
                    $settings = generalSettings();
                @endphp
                @if ($settings->logo_light)
                    <img src="{{ asset('storage/' . $settings->logo) }}" class="logo-lg" alt="Logo image"
                        style="max-height: 40px; width: auto; max-width: 100%;">
                @else
                    <img src="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/assets/images/logo-dark.svg"
                        alt="logo image" class="logo-lg">
                @endif
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('admin.index') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-gauge"></i></span><span class="pc-mtext">Dashboard</span></a>
                </li>

                @if (auth()->check() &&
                        auth()->user()->hasAnyPermission(['create-application', 'edit-application', 'show-application', 'delete-application']))
                    <li class="pc-item pc-hasmenu">
                        <a href="{{ route('applications.index') }}" class="pc-link"><span class="pc-micon">
                                <i class="ph ph-file"></i></span><span class="pc-mtext">Applications</span></a>
                    </li>
                @endif

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('contacts.index') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-phone"></i></span><span class="pc-mtext">Contacts</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('gallery.list') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-image"></i></span><span class="pc-mtext">Gallery Photos</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('subcribers.index') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-users"></i></span><span class="pc-mtext">Subscribers</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('reviews.index') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-chat"></i></span><span class="pc-mtext">Reviews</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('mentors.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph ph-users-three"></i>
                        </span>
                        <span class="pc-mtext">Mentors</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('partners.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph ph-handshake"></i>
                        </span>
                        <span class="pc-mtext">Partners</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('blogs.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ph ph-article"></i>
                        </span>
                        <span class="pc-mtext">Blogs</span>
                    </a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('invests.index') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-coin"></i></span><span class="pc-mtext">Invests</span></a>
                </li>

                @if (auth()->check() &&
                        auth()->user()->hasAnyPermission(['update-general-setting', 'update-email-setting', 'cache-clear']))
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon">
                                <i class="ph ph-gear"></i></span><span class="pc-mtext">Application Settings</span><span
                                class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            @if (auth()->check() && auth()->user()->hasPermissionTo('update-general-setting'))
                                <li class="pc-item"><a class="pc-link" href="{{ route('general.setting') }}">General
                                        Settings</a></li>
                            @endif
                            @if (auth()->check() && auth()->user()->hasPermissionTo('update-email-setting'))
                                <li class="pc-item"><a class="pc-link" href="{{ route('email.setting') }}">Email
                                        Settings</a>
                                </li>
                            @endif
                            @if (auth()->check() && auth()->user()->hasPermissionTo('cache-clear'))
                                <li class="pc-item"><a class="pc-link"
                                        href="{{ route('application.cache.clear') }}">Cache
                                        Clear</a></li>
                            @endif
                        </ul>
                    </li>
                @endif

                <!-- Roles & Permissions Menu -->
                @if (auth()->check() &&
                        auth()->user()->hasAnyPermission(['set-userRole', 'show-user', 'delete-user', 'create-role', 'edit-role', 'delete-role']))
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon">
                                <i class="ph ph-shield"></i></span><span class="pc-mtext">Roles &
                                Permissions</span><span class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            @if (auth()->check() &&
                                    auth()->user()->hasAnyPermission(['set-userRole', 'show-user', 'delete-user']))
                                <li class="pc-item">
                                    <a class="pc-link" href="{{ route('admin.users.index') }}">CMS Users</a>
                                </li>
                            @endif
                            @if (auth()->check() &&
                                    auth()->user()->hasAnyPermission(['create-role', 'edit-role', 'delete-role']))
                                <li class="pc-item">
                                    <a class="pc-link" href="{{ route('admin.roles.index') }}">Roles</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
