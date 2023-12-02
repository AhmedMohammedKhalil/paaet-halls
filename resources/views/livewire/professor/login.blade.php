
<form class="user-form" wire:submit.prevent='login'>
    <h3>تسجيل دخول عضو الهيئة التدريسية</h3>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="الإيميل">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة السر">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <h3> سجل دخول او <a href="{{ route('professor.login') }}" class="text-decoration-underline"> انشئ حساب الان </a>
            </h3>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">سجل الأن</button>

        </div>
    </div>
</form>



