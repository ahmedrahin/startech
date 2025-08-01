<div class="allReview">
    @foreach($reviews as $review)
        <ul>
            <li>
                @if(!is_null($review->user_id) && !is_null($review->user->avatar))
                    <img src="{{ asset($review->user->avatar) }}" alt="User Avatar">
                @else
                    <img src="{{ asset('uploads/user/user.jpg') }}" alt="Default Avatar">
                @endif
            </li>
            <li class="messageItem">
                <span>
                    {{ $review->user->name ?? $review->name }}
                    @if(is_null($review->user_id))
                        <span style="display: inline;font-size: 11px;opacity: .7;font-weight: 400;">(guest)</span>
                    @endif
                </span>
                
                <p>{{ $review->comment }}</p>
                <div class="rating">
                    @php
                        $fullStars = floor($review->rating);
                        $halfStar = ($review->rating - $fullStars) >= 0.5 ? 1 : 0;
                        $emptyStars = 5 - $fullStars - $halfStar;
                    @endphp

                    @for($i = 0; $i < $fullStars; $i++)
                        <div class="rating-label checked">
                            <i class="ki-duotone ki-star fs-6"></i>
                        </div>
                    @endfor

                    @if($halfStar)
                        <div class="rating-label checked">
                            <i class="ki-duotone ki-star-half fs-6"></i>
                        </div>
                    @endif

                    @for($i = 0; $i < $emptyStars; $i++)
                        <div class="rating-label">
                            <i class="ki-duotone ki-star fs-6"></i>
                        </div>
                    @endfor
                </div>
                <div class="date">
                    {{ \Carbon\Carbon::parse($review->created_at)->format('M-d, Y') }}
                </div>
            </li>
        </ul>
    @endforeach
</div>
