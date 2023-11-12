    <div style="padding: 40px 0 ">
        <div class="login-form">
            <form wire:submit.prevent='edit'>
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <div class="form-group">
                        <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="الإسم">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <input type="email" wire:model.lazy='email' id="email" class="form-control" placeholder="الإيميل">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <input type="text" wire:model.lazy='phone' id="phone" class="form-control" placeholder="الموبايل">
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <input type="file" wire:model='photo' id="photo" class="form-control" placeholder="">
                        @error('photo') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <textarea name="address" class="form-control"  wire:model.lazy='address' id="address" rows="6" placeholder="العنوان"></textarea>
                        @error('address') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
            </form>
        </div>
    </div>

