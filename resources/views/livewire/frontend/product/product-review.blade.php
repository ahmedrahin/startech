<div>
  <div class="row mb-4">
    <div class="col-xl-4 col-lg-5 mb-4">
      <div class="ratings-wrapper">
        <div class="avg-rating-container">
          <h4 class="avg-mark font-weight-bolder ls-50">{{ number_format($averageRating, 1) }}</h4>
          <div class="avg-rating">
            <p class="text-dark mb-1">Average Rating</p>
            <div class="ratings-container">
              <div class="ratings-full">
                @php $avgPercent = ($averageRating / 5) * 100; @endphp
                <span class="ratings" style="width: {{ $avgPercent }}%;"></span>
                <span class="tooltiptext tooltip-top">{{ number_format($averageRating, 1) }} out of 5</span>
              </div>
              <a href="#product-tab-reviews" class="rating-reviews">
                ({{ $totalReviews }} {{ Str::plural('Review', $totalReviews) }})
              </a>
            </div>
          </div>
        </div>

        <div class="ratings-list mt-4">
          @foreach(range(5, 1) as $star)
          <div class="ratings-container">
            <div class="ratings-full">
              <span class="ratings" style="width: {{ ($star / 5) * 100 }}%;"></span>
              <span class="tooltiptext tooltip-top">{{ $star }} stars</span>
            </div>
            <div class="progress-bar progress-bar-sm">
              <span style="width: {{ $ratingBreakdown[$star] }}%;"></span>
            </div>
            <div class="progress-value">
              <mark>{{ $ratingBreakdown[$star] }}%</mark>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>


    <div class="col-xl-8 col-lg-7 mb-4">
      @if(Auth::check() && $userReview)
        <div class="submited-review">
            <h4>You already submitted your review for this product</h4>
            <ul>
                <li class="d-flex gap-1">
                    <strong>Your rating: &nbsp;&nbsp;</strong>
                    <div class="ratings-container">
                        @php
                            $userRating = round($userReview->rating);
                            $ratingPercent = ($userRating / 5) * 100;
                        @endphp
                      <div class="ratings-full">
                        <span class="ratings" style="width: {{ $ratingPercent }}%;"></span>
                      </div>
                      <span class="rating-reviews">
                        ({{ $userRating }} star)
                      </span>
                    </div>
                </li>
                <li class="mt-2">
                    <strong class="mb-0">Your comment:</strong>
                    <p>{{ $userReview->comment }}</p>
                </li>
            </ul>
            <button wire:click="delete({{ $userReview->id }})" class="delete-review" title="Delete this review">
                <i class="bi bi-trash3"></i>
            </button>
        </div>
      @else
            @if( config('website_settings.allow_guest_reviews') || Auth::check() )
              <div class="review-form-wrapper">
                <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                  Review</h3>

                <form wire:submit.prevent="submit" class="review-form">
                  <div class="rating-form">
                    <label for="rating" style="font-weight: 500;">Your Rating Of This Product : &nbsp;&nbsp;</label>

                    {{-- Star Selection --}}
                    <div class="ratings-container selectrating" id="star-rating">
                      <div class="selectrating" id="star-rating">
                        <input type="radio" name="rating" id="r5" value="5" wire:model="rating">
                        <label for="r5" onclick="setRating(5)"></label>

                        <input type="radio" name="rating" id="r4" value="4" wire:model="rating">
                        <label for="r4" onclick="setRating(4)"></label>

                        <input type="radio" name="rating" id="r3" value="3" wire:model="rating">
                        <label for="r3" onclick="setRating(3)"></label>

                        <input type="radio" name="rating" id="r2" value="2" wire:model="rating">
                        <label for="r2" onclick="setRating(2)"></label>

                        <input type="radio" name="rating" id="r1" value="1" wire:model="rating">
                        <label for="r1" onclick="setRating(1)"></label>
                      </div>
                    
                    </div>

                    @error('rating')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  {{-- Guest Only: Name & Email --}}
                  @guest
                  <div class="row gutter-md">
                    <div class="col-md-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                        wire:model="name">
                      @error('name')
                      <div class="text-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email"
                        wire:model="email">
                      @error('email')
                      <div class="text-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  @endguest

                  {{-- Comment --}}
                  <div class="mt-3">
                    <textarea rows="5" placeholder="Write Your Review Here..."
                      class="form-control @error('comment') is-invalid @enderror" wire:model="comment"></textarea>
                    @error('comment')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                  </div>

                  {{-- Submit Button --}}
                  <div class="mt-3">
                    <button type="submit" class="btn btn-dark" style="width: 180px;">
                      <span wire:loading.remove wire:target="submit">Submit Review</span>
                      <span wire:loading wire:target="submit">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </span>
                    </button>
                  </div>
                </form>

              </div>
            @elseif( !Auth::check() )
              <div class="alert alert-danger mt-3">
                <a href="{{route('user.login')}}" style="text-decoration: underline;">Log in</a> at first to write a review
              </div>
            @endif
      @endif
    </div>

  </div>

  <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a href="#show-all" class="nav-link active"> All Reviews</a>
      </li>

    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="show-all">
        <ul class="comments list-style-none">
          @foreach( $reviews as $review )
          @php
          $imgUrl = !is_null($review->user_id) && !is_null($review->user->avatar) ? $review->user->avatar :
          'uploads/user.png';
          $theRating = round($review->rating);
          $ratingPercentage = ($theRating / 5) * 100;
          @endphp
          <li class="comment">
            <div class="comment-body">
              <figure class="comment-avatar">
                <img src="{{ asset($imgUrl) }}" alt="Commenter Avatar" width="90" height="90">
              </figure>
              <div class="comment-content">
                <h4 class="comment-author">
                  <a href="#">{{ !is_null($review->user_id) ? $review->user->name : $review->name }}</a>
                  <span class="comment-date">
                    {{ $review->created_at->diffForHumans() }}
                  </span>
                </h4>

                <div class="ratings-container">
                  <div class="ratings-full">
                    <span class="ratings" style="width: {{ $ratingPercentage }}%;"></span>
                  </div>
                  <span class="rating-reviews">
                    ({{ $theRating }} star)
                  </span>
                </div>

                <p>{{ $review->comment }}</p>

              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>