<form class="user-form" wire:submit.prevent='login'>
    <h3>تسجيل دخول الأدمن</h3>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="البريد الألكتروني">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة المرور">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn default-btn">سجل الأن</button>

        </div>
    </div>
</form>



