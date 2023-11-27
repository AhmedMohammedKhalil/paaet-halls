<form class="find-courses-from-bg find-courses-from-bg-three mt-0" wire:submit.prevent='search'>
    <h2>بحث عن المبانى</h2>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="بحث" wire:model.lazy='search'>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <button type="submit" class="default-btn">
                    بحث
                    <i class="ri-search-line"></i>
                </button>
        </div>
    </div>
</form>
