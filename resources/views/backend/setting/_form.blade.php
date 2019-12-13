@csrf
<section>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="address">Address :</label>
                <textarea name="address" rows="5" class="form-control form-control-line @error('address') is-invalid @enderror" id="address">{{ old('address',isset($setting)?$setting->address:null) }}</textarea>
            </div>
            @error('address')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="color">Phone :</label>
                <input name="phone_1" type="text" value="{{ old('phone_1',isset($setting)?$setting->phone_1:null) }}"  class="form-control form-control-line @error('phone_1') is-invalid @enderror" id="phone_1">
            </div>
            @error('phone_1')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Phone (Secondary) :</label>
                <input name="phone_2" type="text" value="{{ old('phone_2',isset($setting)?$setting->phone_2:null) }}"  class="form-control form-control-line @error('phone_2') is-invalid @enderror" id="phone_2">
            </div>
            @error('phone_2')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="color">Email :</label>
                <input name="email_1" type="text" value="{{ old('email_1',isset($setting)?$setting->email_1:null) }}"  class="form-control form-control-line @error('email_1') is-invalid @enderror" id="email_1">
            </div>
            @error('email_1')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Email (Secondary) :</label>
                <input name="email_2" type="text" value="{{ old('email_2',isset($setting)?$setting->email_2:null) }}"  class="form-control form-control-line @error('email_2') is-invalid @enderror" id="email_2">
            </div>
            @error('email_2')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="color">Skype :</label>
                <input name="skype_1" placeholder="username" type="text" value="{{ old('skype_1',isset($setting)?$setting->skype_1:null) }}"  class="form-control form-control-line @error('skype_1') is-invalid @enderror" id="skype_1">
            </div>
            @error('skype_1')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Skype (Secondary) :</label>
                <input name="skype_2" placeholder="username" type="text" value="{{ old('skype_2',isset($setting)?$setting->skype_2:null) }}"  class="form-control form-control-line @error('skype_2') is-invalid @enderror" id="skype_2">
            </div>
            @error('skype_2')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Facebook Link :</label>
                <input name="facebook" placeholder="www.facebook.com" type="text" value="{{ old('facebook',isset($setting)?$setting->facebook:null) }}"  class="form-control form-control-line @error('facebook') is-invalid @enderror" id="facebook">
            </div>
            @error('facebook')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="size">Twitter Link :</label>
                <input name="twitter" placeholder="www.twitter.com" type="text" value="{{ old('twitter',isset($setting)?$setting->twitter:null) }}"  class="form-control form-control-line @error('twitter') is-invalid @enderror" id="twitter">
            </div>
            @error('twitter')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Linkedin Link :</label>
                <input name="linkedin" placeholder="www.linkedin.com" type="text" value="{{ old('linkedin',isset($setting)?$setting->linkedin:null) }}"  class="form-control form-control-line @error('linkedin') is-invalid @enderror" id="linkedin">
            </div>
            @error('linkedin')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">
                <label for="color">Site Title :</label>
                <input name="title" type="text" value="{{ old('title',isset($setting)?$setting->title:null) }}"  class="form-control form-control-line @error('title') is-invalid @enderror" id="email_1">
            </div>
            @error('title')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror


        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label for="size">Shipping Charge :</label>
                <input name="shipping" type="number" value="{{ old('shipping',isset($setting)?$setting->shipping:null) }}"  class="form-control form-control-line @error('shipping') is-invalid @enderror" id="shipping">
            </div>
            @error('shipping')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="color">Free Shipping On(Ammount) :</label>
                <input name="free_shipping" type="number" value="{{ old('free_shipping',isset($setting)?$setting->free_shipping:null) }}"  class="form-control form-control-line @error('free_shipping') is-invalid @enderror" id="free_shipping">
            </div>
            @error('free_shipping')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-md-12">
            <div class="form-group">
                <label for="address">History :</label>
                <textarea name="history" rows="5" class="form-control form-control-line @error('history') is-invalid @enderror" id="history">{{ old('history',isset($setting)?$setting->history:null) }}</textarea>
            </div>
            @error('history')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="address">Mission :</label>
                <textarea name="mission" rows="5" class="form-control form-control-line @error('mission') is-invalid @enderror" id="mission">{{ old('mission',isset($setting)?$setting->mission:null) }}</textarea>
            </div>
            @error('mission')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="address">Vision :</label>
                <textarea name="vision" rows="5" class="form-control form-control-line @error('vision') is-invalid @enderror" id="vision">{{ old('vision',isset($setting)?$setting->vision:null) }}</textarea>
            </div>
            @error('vision')
            <div class="pl-1 text-danger">{{ $message }}</div>
            @enderror
        </div>
        

    </div>
</section>


@push('custom-css')

@endpush
