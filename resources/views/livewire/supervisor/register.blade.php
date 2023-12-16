

<form class="user-form" wire:submit.prevent='register'>
    <h3>إنشاء حساب المسئول</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='civil_number' id="civil_number" class="form-control" placeholder="الرقم المدنى">
                @error('civil_number') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="الإسم">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="البريد الألكتروني">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='phone' id="phone" class="form-control" placeholder="الموبايل">
                @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='password' id="password" class="form-control"
                    placeholder="كلمة المرور">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control"
                    placeholder="أعد كلمة السر">
                @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">

            <div class="form-group">
                <textarea name="address" class="form-control" wire:model.lazy='address' id="address" rows="6"
                    placeholder="العنوان"></textarea>
                @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <h3>إنشئ حساب أو <a href="{{ route('supervisor.login') }}" class="text-decoration-underline"> سجل الان </a>
            </h3>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">إشئ حساب الأن</button>
        </div>
    </div>
</form>
