
<form class="form account-details-form mt-4" wire:submit.prevent="ChnagePassword">

    <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>

    <div class="col-12">
        <div class="from-group mb-3">
            <label class="form-label">Current Password</label>
            <input class="form-control mb-0  @error('current_password') error-border  @enderror" type="password"
                placeholder="******" name="current_password" autocomplete="off" wire:model="current_password" />
            @error('current_password')
            <div class="text-danger pt-2">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="from-group mb-3">
            <label class="form-label">New password</label>
            <input class="form-control mb-0 @error('new_password') error-border  @enderror" type="password"
                placeholder="enter a new password" name="new_password" autocomplete="off" wire:model="new_password" />
            @error('new_password')
            <div class="text-danger pt-2">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="from-group mb-3">
            <label class="form-label">Confirm password</label>
            <input class="form-control mb-0 @error('new_password_confirmation') error-border  @enderror" type="password"
                placeholder="enter a confirm password" name="new_password_confirmation" autocomplete="off"
                wire:model="new_password_confirmation" />
            @error('new_password_confirmation')
            <div class="text-danger pt-2">{{$message}}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-dark btn-rounded btn-sm " style="width: 180px;">
        <span wire:loading.remove wire:target="ChnagePassword">Save Password</span>
        <span wire:loading wire:target="ChnagePassword">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </span>
    </button>
</form>