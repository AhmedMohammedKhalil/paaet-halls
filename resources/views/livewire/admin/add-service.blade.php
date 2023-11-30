
<form class="user-form" wire:submit.prevent='add'>
    <h3>إضافة خدمة جديدة</h3>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="الإسم">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">إضافة</button>
        </div>
    </div>
</form>

