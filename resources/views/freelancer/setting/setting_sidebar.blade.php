<div class="col-md-3">
    <h2 class="font_26 mb-4 title_mobile_hide font_weight_600">Settings</h2>
    <div class="up_setting_container">
        <h1 class="mb-3 font_18">User Settings</h1>
        <ul class="list-unstyled">
            <li>
                <a href="{{route('contact.info.settings')}}" class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3">
                    <span>Contact Info</span>
                </a>
            </li>
            <li>
                <a href="{{route('myprofile')}}" class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3">
                    <span>My Profile</span>
                </a>
            </li>
            <li>
                <a href="{{route('settings')}}" class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3">
                    <span>Profile Setting</span>
                </a>
            </li>
            <li>
                <a class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3"
                href="{{ route('setting.change-user-password') }}"><span>Change Password</span></a>
            </li>
            <li>
                <a class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3"
                href="{{ route('setting.buy-tokens') }}"><span>Buy Tokens</span></a>
            </li>
            <li>
                <a class="position-relative text-decoration-none font_14 color_grey d-inline-block py-2 ps-3"
                href="{{ route('setting.wallet') }}"><span>Wallet</span></a>
            </li>
        </ul>
    </div>
</div>