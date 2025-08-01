 <div class="page-content">
     <div class="container">


         <div class="mb-2">
             Have a coupon? <a href="#" class="show-coupon font-weight-bold text-uppercase text-dark">Enter your
                 code</a>
         </div>
         <div class="coupon-content mb-4" style="display: block;">
             <p>If you have a coupon code, please apply it below.</p>
             @if (empty($appliedCoupon))
                 <div class="input-wrapper-inline">
                     <input type="text" name="coupon_code" class="form-control form-control-md mr-1 mb-2"
                         placeholder="Coupon code" id="coupon_code" wire:model="couponCode">
                     <button type="button" class="btn button btn-rounded btn-coupon mb-2" name="apply_coupon"
                         wire:click="applyCoupon" style="background: #336699;border-color:#336699;width: 100px;">
                         <span wire:loading.remove wire:target="applyCoupon">Apply</span>
                         <span wire:loading wire:target="applyCoupon">
                             <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                         </span>
                     </button>
                 </div>
             @else
                 <div class="input-wrapper-inline">
                     <input type="text" class="form-control form-control-md mr-1 mb-2"
                         value="{{ $appliedCoupon['code'] }}" readonly>
                     <button type="button" class="btn button btn-rounded btn-coupon mb-2" name="apply_coupon"
                         wire:click="removeCoupon"
                         style="background: #336699;border-color:#336699;width: 120px;padding:0;">
                         <span wire:loading.remove wire:target="removeCoupon">Cancel</span>
                         <span wire:loading wire:target="removeCoupon">
                             <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                         </span>
                     </button>
                 </div>
             @endif
         </div>

         <form class="form " wire:submit.prevent="order">
             <div class="row mb-9">
                 <div class="col-lg-7 pr-lg-4 mb-4">
                     <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                         Billing Details
                     </h3>
                     <div class="row gutter-sm">
                         <div class="col-12">
                             <div class="form-group">
                                 <label>Full name *</label>
                                 <input type="text"
                                     class="form-control form-control-md @error('name') error-border @enderror"
                                     name="name" placeholder="Full Name" wire:model="name">
                                 @error('name')
                                     <div class="text-danger mt-2">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>E-mail Adddress </label>
                                 <input type="text"
                                     class="form-control form-control-md @error('email') error-border @enderror"
                                     name="email" placeholder="E-mail Adddress" wire:model="email">
                                 @error('email')
                                     <div class="text-danger mt-2">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Phone no. *</label>
                                 <input type="text"
                                     class="form-control form-control-md @error('phone') error-border @enderror"
                                     name="phone" placeholder="Phone Number" wire:model="phone">
                                 @error('phone')
                                     <div class="text-danger mt-2">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group">
                             <label>Shipping Address *</label>
                             <input type="text"
                                 class="form-control form-control-md @error('shipping_address') error-border @enderror"
                                 name="shipping_address" placeholder="Shipping Address" wire:model="shipping_address">
                             @error('shipping_address')
                                 <div class="text-danger mt-2">{{ $message }}</div>
                             @enderror
                         </div>
                     </div>

                     <div class="col-12">
                         <div class="form-group">
                             <label>City/State *</label>
                             <select class="form-control" wire:model="district_id">
                                 <option value="">Select City</option>
                                 @foreach ($districts as $district)
                                     <option value="{{ $district->id }}">{{ $district->name }} -
                                         {{ $district->bn_name }}</option>
                                 @endforeach
                             </select>
                             @error('district_id')
                                 <div class="text-danger mt-2">{{ $message }}</div>
                             @enderror
                         </div>
                     </div>


                     <div class="form-group mt-3">
                         <label for="order-notes">Order notes (optional)</label>
                         <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30" rows="4"
                             placeholder="Notes about your order..." wire:model="note"></textarea>
                     </div>
                 </div>

                 <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                     <div class="order-summary-wrapper sticky-sidebar">
                         <h3 class="title text-uppercase ls-10">Your Order</h3>
                         <div class="order-summary">
                             <table class="order-table">
                                 <thead>
                                     <tr>
                                         <th colspan="2">
                                             <b>Product</b>
                                         </th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($cart as $cartKey => $item)
                                         <tr class="bb-no">
                                             <td class="product-name"><a
                                                     href="{{ route('product-details', $item['slug']) }}"
                                                     style="color: #F4442C;">{{ $item['name'] }}</a> <i
                                                     class="fas fa-times"></i>
                                                 <span class="product-quantity">{{ $item['quantity'] }}</span>
                                             </td>
                                             <td class="product-total">
                                                 ৳{{ $item['quantity'] * $item['offer_price'] }}</td>
                                         </tr>
                                     @endforeach
                                     <tr class="cart-subtotal bb-no">
                                         <td>
                                             <b>Subtotal</b>
                                         </td>
                                         <td>
                                             <b>৳ {{ number_format($this->getTotalAmount(), 2) }}</b>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tfoot>
                                     <tr class="shipping-methods">
                                         <td colspan="2" class="text-left">
                                             <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping</h4>
                                             <ul id="shipping-method" class="mb-4">
                                                 @foreach ($shippingMethods as $shippingMethod)
                                                     <li>
                                                         <div class="custom-radio">
                                                             <input type="radio"
                                                                 id="shipping-method-{{ $shippingMethod->id }}"
                                                                 class="custom-control-input" name="shipping"
                                                                 wire:model="selectedShippingMethodId"
                                                                 value="{{ $shippingMethod->id }}">
                                                             <label for="shipping-method-{{ $shippingMethod->id }}"
                                                                 class="custom-control-label color-dark">
                                                                 {{ $shippingMethod->provider_name }} -
                                                                 ৳{{ $shippingMethod->provider_charge }}
                                                             </label>
                                                         </div>
                                                     </li>
                                                 @endforeach
                                                 @if ($selectedShippingCharge)
                                                     <li>
                                                         <span><strong>Shipping (+):
                                                                 ৳{{ $selectedShippingCharge }}</strong></span>
                                                     </li>
                                                 @elseif($shippingMethods->count() === 1)
                                                     @php $singleMethod = $shippingMethods->first(); @endphp
                                                     <li>
                                                         <span><strong>Shipping (+):
                                                                 ৳{{ $singleMethod->provider_charge }}</strong></span>
                                                     </li>
                                                 @endif
                                             </ul>
                                         </td>
                                     </tr>

                                     @if (!empty($appliedCoupon))
                                         <tr class="cart-subtotal bb-no coupon-discount">
                                             <td>
                                                 <b>Coupon Discount</b>
                                             </td>
                                             <td>
                                                 <b class="text-danger">-৳{{ $appliedCoupon['discount'] }}</b>
                                             </td>
                                         </tr>
                                     @endif

                                     <tr class="order-total">
                                         <th>
                                             <b>Total</b>
                                         </th>
                                         <td>
                                             <b>৳{{ number_format($this->grandTotal(), 2) }}</b>
                                         </td>
                                     </tr>
                                 </tfoot>
                             </table>


                             <div class="payment-methods">
                                 <h4>Payment Methods</h4>

                                 <div class="payment-option">
                                     <input type="radio" id="payment_cod" name="payment_type" value="cod"
                                         wire:model="payment_type">
                                     <label class="method-details" for="payment_cod">
                                         <strong>Cash on Delivery</strong>
                                     </label>
                                 </div>

                                 {{-- <div class="payment-option">
                                     <input type="radio" id="payment_ssl" name="payment_type" value="sslcommerz"
                                         wire:model="payment_type">
                                     <label class="method-details" for="payment_ssl">
                                         <strong>Pay with Sslcommerz</strong>
                                     </label>
                                 </div> --}}

                             </div>


                             <div class="form-group place-order pt-6">
                                 <button class="btn btn-dark btn-block btn-rounded" type="submit">
                                     <span wire:loading.remove wire:target="order">Place
                                         Order</span>
                                     <span wire:loading wire:target="order">
                                         <span class="spinner-border spinner-border-sm" role="status"
                                             aria-hidden="true"></span>
                                     </span>
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>
