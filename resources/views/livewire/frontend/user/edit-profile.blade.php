<form class="form account-details-form" wire:submit.prevent="submit">
    <div class="row">
        <div class="from-group mb-3">
            <label class="form-label mb-3">Name</label>
            <input class="form-control mb-0 @error('name') error-border @enderror" type="text" name="name"
                placeholder="Enter your name." wire:model="name">
            @error('name')
            <div class="text-danger mt-2">{{$message}}</div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="from-group mb-3">
                <label class="form-label">Email address</label>
                <input class="form-control mb-0 @error('email') error-border @enderror" type="email"
                    placeholder="Enter your email" wire:model="email">
                @error('email')
                <div class="text-danger mt-2">{{$message}}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="from-group mb-3">
                <label class="form-label">Phone</label>
                <input class="form-control mb-0 @error('phone') error-border @enderror" type="number" name="phone"
                    placeholder="Enter your Number" wire:model="phone">
                @error('phone')
                <div class="text-danger mt-2">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="from-group">
            <label class="form-label">Address</label>
            <textarea class="form-control" cols="30" rows="3" placeholder="Write your Address..."
                wire:model="address_line1"></textarea>
        </div>
    </div>

    {{-- <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
    <div class="form-group">
        <label class="text-dark" for="cur-password">Current Password leave blank to leave
            unchanged</label>
        <input type="password" class="form-control form-control-md" id="cur-password" name="cur_password">
    </div>
    <div class="form-group">
        <label class="text-dark" for="new-password">New Password leave blank to leave
            unchanged</label>
        <input type="password" class="form-control form-control-md" id="new-password" name="new_password">
    </div>
    <div class="form-group mb-10">
        <label class="text-dark" for="conf-password">Confirm Password</label>
        <input type="password" class="form-control form-control-md" id="conf-password" name="conf_password">
    </div> --}}

    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4" style="width: 150px;">
        <span wire:loading.remove wire:target="submit">Save Changes</span>
        <span wire:loading wire:target="submit">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </span>
    </button>
</form>