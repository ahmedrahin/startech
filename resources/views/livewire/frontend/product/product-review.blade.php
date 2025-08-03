<section class="review  q-n-r-section bg-white m-tb-15" id="write-review">
    <div class="section-head">
        <div class="title-n-action">
            <h2 >Reviews ({{ $totalReviews }})</h2>
            <p class="section-blurb">Get specific details about this product from customers who
                own it.</p>
             @if($totalReviews > 0)   
              <div class="average-rating">
                  
              </div>
            @endif
        </div>
        <div class="q-action">
          @if(Auth::check() && $userReview)
          @else
            @if( config('website_settings.allow_guest_reviews') || Auth::check() )
              <a href="" class="btn st-outline">Write a Review</a>
            @elseif( !Auth::check() )
              <button class="btn st-outline" onclick="message('info', 'Login at first to write a review')">Write a Review</button>
            @endif
          @endif
        </div>
    </div>
    <div id="review">
        <div class="empty-content">
            <span class="icon material-icons">assignment</span>
            <div class="empty-text">This product has no reviews yet. Be the first one to write a
                review.</div>
        </div>
    </div>
</section>