
<form class="user-form" wire:submit.prevent='add'>
    <h3>إضافة رد</h3>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <label for="type">نوع الرد</label>
            <div class="form-group">
                    <select class="form-control" wire:model.lazy='type'>
                        <option value="1" selected>تم تصليح العطل</option>
                        <option value="2">تغيير القاعة</option>
                    </select>
                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <textarea name="content" class="form-control" wire:model.lazy='content' id="content" rows="6"
                    placeholder="محتوى الرد"></textarea>
                @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn default-btn">إضافة</button>
        </div>
    </div>
</form>

