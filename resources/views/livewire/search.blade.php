<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='search'>
    <h2>بحث عن القاعة</h2>

    <ul>
        <li>
            <label class="single-check">
                    ولاد
                    <input type="radio" checked="checked" name="radio-2" value="ولاد" wire:model.lazy='gender'>
                    <span class="checkmark"></span>
                </label>
        </li>

        <li>
            <label class="single-check">
                    بنات
                    <input type="radio" name="radio-2" value="بنات" wire:model.lazy='gender'>
                    <span class="checkmark"></span>
                </label>
        </li>
    </ul>

    <div class="row">


        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <select class="form-control">
                        <option value="1">السعة</option>
                        <option value="2">Web Design</option>
                        <option value="3">Web Developement</option>
                        <option value="4">Graphic Design</option>
                        <option value="5">App Developement</option>
                    </select>
                <i class="ri-arrow-down-s-line"></i>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <select class="form-control">
                        <option value="1">الخدمات</option>
                        <option value="2">العربيّة</option>
                        <option value="3">Deutsch</option>
                        <option value="4">Português</option>
                        <option value="5">简体中文</option>
                    </select>
                <i class="ri-arrow-down-s-line"></i>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="datetime-local" class="form-control" name="" id="" required wire:model.lazy='start_at'>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input type="datetime-local" class="form-control" name="" id="" wire:model.lazy='end_at'>
            </div>
        </div>
        <div class="offset-3 col-lg-6 col-md-6">
            <button type="submit" class="default-btn">
                    بحث
                    <i class="ri-search-line"></i>
                </button>
        </div>
    </div>
</form>
