<div class="product-link-wrapper d-flex">
    @if($isInWishlist)
        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist  w-icon-heart-full added" style="color:#F4442C;" wire:click="$emit('removeFromWishlist', {{ $productId }})"><span></span></a>
    @else
        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist w-icon-heart " wire:click="$emit('get_id', {{ $productId }})"><span></span></a>
    @endif
</div>

