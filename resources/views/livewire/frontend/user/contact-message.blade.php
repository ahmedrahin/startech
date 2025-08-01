<div class="col-md-6 offset-md-3 mb-10">
    <h4 class="title mb-3">Send Us a Message</h4>
    <form wire:submit.prevent="submit" class="form contact-us-form">
        <div class="form-group mb-3">
            <label for="username">Your Name</label>
            <input type="text" id="username" name="name" class="form-control @error('name') is-invalid @enderror"
                wire:model="name">
            @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email_1">Your Email</label>
            <input type="email" id="email_1" name="email" class="form-control @error('email') is-invalid @enderror"
                wire:model="email">
            @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="phone_1">Your Phone</label>
            <input type="text" id="phone_1" name="phone" class="form-control @error('phone') is-invalid @enderror"
                wire:model="phone">
            @error('phone')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="subject_1">Subject</label>
            <input type="text" id="subject_1" name="subject" class="form-control" wire:model="subject">
        </div>

        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" class="form-control mb-0 @error('message') is-invalid @enderror"
                wire:model="message"></textarea>
            @error('message')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark btn-rounded mt-4">
            <span wire:loading.remove wire:target="submit">Send Now</span>
            <span wire:loading wire:target="submit">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Sending...
            </span>
        </button>
    </form>

</div>