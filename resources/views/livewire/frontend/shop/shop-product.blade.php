 <div class="actions">
   @if( $product->productStock->count() > 0 )
        <a class="st-btn btn-add-cart" type="button" href="{{ route('product-details', $product->slug) }}"><i
            class="material-icons">shopping_cart</i> Buy Now</a>
        <span class="st-btn btn-compare"><i class="material-icons">library_add</i>Add to
            Compare</span>
   @else
         <span class="st-btn btn-add-cart" type="button" wire:click="addToCart"><i
            class="material-icons">shopping_cart</i> Add to Cart</span>
        <span class="st-btn btn-compare"><i class="material-icons">library_add</i>Add to
            Compare</span>
   @endif
</div>