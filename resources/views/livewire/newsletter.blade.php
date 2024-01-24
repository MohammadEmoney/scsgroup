<div class="footer-newsletter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h4>{{ __('Join Our Newsletter') }}</h4>
                <p>{{ $settings['newsletter']['text'] }}</p>
                <form wire:submit.prevent="saveEmail">
                    <input type="email" wire:model="email" placeholder="{{ __('Enter your email') }}">
                    <button type="submit" id="submit">{{ __('Subscribe') }}</button>
                    <div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts')

@endpush --}}
