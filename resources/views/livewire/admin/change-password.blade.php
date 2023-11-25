<form class="user-form" wire:submit.prevent='edit'>
    <h3>تعديل كلمة السر</h3>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='password' id="password" class="form-control" placeholder="كلمة السر">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="password" wire:model.lazy='confirm_password' id="confirm_password" class="form-control" placeholder="أعد كلمة السر">
                @error('confirm_password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">حفظ التغييرات</button>
        </div>
    </div>
</form>



