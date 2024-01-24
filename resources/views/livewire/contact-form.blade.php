<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form wire:submit.prevent="submitFrom" class="php-email-form">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">{{ __('Your Full Name') }}</label>
                <input type="text" wire:model="full_name" id="full_name" class="form-control" required>
                @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="name">{{ __('Your Email') }}</label>
                <input type="email" class="form-control" wire:model="email" id="email" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="name">{{ __('Subject') }}</label>
            <input type="text" class="form-control" wire:model="subject" id="subject" required>
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="name">{{ __('Message') }}</label>
            <textarea class="form-control" wire:model="message" id="message" rows="10" required></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        {{-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div> --}}
        <div class="text-center"><button type="submit">{{ __('Send Message') }}</button></div>
    </form>
</div>
