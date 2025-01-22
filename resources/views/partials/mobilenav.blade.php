<div class="mobile-bottom-nav">
    <div class="col-4">
        <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <i class="fas fa-car"></i>
            <span>Leasing</span>
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('vehicle-insurance') }}"
            class="nav-link {{ Route::currentRouteName() === 'vehicle-insurance' ? 'active' : '' }}">
            <i class="fas fa-shield-alt"></i>
            <span>Insurance</span>
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('vehicle-import') }}"
            class="nav-link {{ Route::currentRouteName() === 'vehicle-import' ? 'active' : '' }}">
            <i class="fas fa-globe"></i>
            <span>Vehicle Import</span>
        </a>
    </div>
</div>