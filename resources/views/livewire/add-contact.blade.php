  <form id="contactForm user-form" wire:submit.prevent='add'>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>الأسم</label>
                            <input type="text" wire:model.lazy='name' name="name" id="name" class="form-control">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>البريد الألكتروني</label>
                            <input type="email" wire:model.lazy='email' name="email" id="email" class="form-control">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>الرسالة</label>
                            <textarea name="message" wire:model.lazy='message' class="form-control" id="message" cols="30" rows="6"></textarea>
                                @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class= "btn default-btn default-btn" style="width:fit-content;display:block;margin: auto; width:200px;margin-top:20px;}">
                                <span>ارسال</span>
                            </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form> 


