@push('css')
    <style>
        .sidebar-widget.categories ul li span.notifications {
            float: unset;
            margin-top: -3px;
            font-size: 16px;
            display: block;
            border: 2px solid #ec0808;
            width: 37px;
            height: 32px;
            text-align: center;
            border-radius: 50%;
            line-height: 1.8;
            color: red;
            font-weight: 900;
            font-style: normal;
        }
        span.notifications::after{
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            bottom: 0;
            left: 0;
            border-radius: 0;
            border-radius: 50%;
            -webkit-transition: var(--transition);
            transition: var(--transition);
            -webkit-animation: ripple 1.6s ease-out infinite;
            animation: ripple 1.6s ease-out infinite;
            background-color: rgba(247, 105, 105, 0.8)
        }
    </style>
@endpush
<div class="widget-sidebar mr-15">
    <div class="sidebar-widget categories">
        <h3>لوحة التحكم</h3>

        <ul>
            <li>
                <a href="{{ route('supervisor.profile') }}">
                        البروفايل
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.building.index') }}">
                        إدارة المبانى
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.hall.index') }}">
                        إدارة القاعات
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.changePassword') }}">
                        تعديل كلمة السر
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.settings') }}">
                        تعديل البروفايل
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.allnotifications') }}">
                        الإشعارات
                        <i class="">
                            @livewire('supervisor.notifications-count')
                        </i>
                    </a>
            </li>
            <li>
                <a href="{{ route('supervisor.logout') }}">
                        خروج
                        <i class="ri-logout-box-r-line"></i>
                    </a>
            </li>
        </ul>
    </div>
</div>


