<ul class="metismenu" id="menu">
    <li class="{{ request()->routeIs('admin.dashboard') ? 'active-bar' : '' }}">
        <a href="{{route('admin.dashboard')}}" >
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
        
    </li>
    <li class="{{ request()->routeIs('admin.user', 'admin.user.edit') ? 'active-bar' : '' }}">
        <a href="{{route('admin.user')}}" >
            <div class="parent-icon"><i class='bx bx-user'></i>
            </div>
            <div class="menu-title">Users</div>
        </a>
        
    </li>
    <li class="{{ request()->routeIs('admin.category', 'admin.category.edit', 'admin.category.add') ? 'active-bar' : '' }}">
        <a href="{{route('admin.category')}}" >
            <div class="parent-icon"><i class='bx bx-category'></i>
            </div>
            <div class="menu-title">Category</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.speciality', 'admin.speciality.edit', 'admin.speciality.add') ? 'active-bar' : '' }}">
        <a href="{{route('admin.speciality')}}" >
            <div class="parent-icon"><i class='bx bx-cookie'></i>
            </div>
            <div class="menu-title">Speciality</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.skills', 'admin.skills.edit', 'admin.skills.add') ? 'active-bar' : '' }}">
        <a href="{{route('admin.skills')}}" >
            <div class="parent-icon"><i class='bx bx-cookie'></i>
            </div>
            <div class="menu-title">Skills</div>
        </a>
    </li>
    {{-- <li class="{{ request()->routeIs('admin.popularSkills', 'admin.popularSkills.edit', 'admin.popularSkills.add') ? 'active-bar' : '' }}">
        <a href="{{route('admin.popularSkills')}}" >
            <div class="parent-icon"><i class='bx bx-cookie'></i>
            </div>
            <div class="menu-title">Popular Skills</div>
        </a>
    </li> --}}
    {{-- contact us --}}
    <li class="{{ request()->routeIs('admin.contactUs', 'admin.contactUs.edit') ? 'active-bar' : '' }}">
        <a href="{{route('admin.contactUs')}}">
            <div class="parent-icon"><i class='bx bx-message'></i>
            </div>
            <div class="menu-title">Contact Us</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.jobs', 'admin.jobs.edit') ? 'active-bar' : '' }}">
        <a href="{{route('admin.jobs')}}" >
            <div class="parent-icon"><i class='bx bx-category'></i>
            </div>
            <div class="menu-title">Jobs</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.certification', 'admin.certification.edit', 'admin.certification.add') ? 'active-bar' : '' }}">
        <a href="{{route('admin.certification')}}" >
            <div class="parent-icon"><i class='bx bx-certification'></i>
            </div>
            <div class="menu-title">Certification</div>
        </a>
    </li>
    <li class="{{ request()->routeIs('admin.portfolio', 'admin.portfolio.edit') ? 'active-bar' : '' }}">
        <a href="{{route('admin.portfolio')}}" >
            <div class="parent-icon"><i class='bx bx-briefcase'></i>
            </div>
            <div class="menu-title">Portfolio</div>
        </a>
    </li>
    
</ul>