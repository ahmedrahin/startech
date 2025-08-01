<div class="icon-box icon-box-side icon-box-light">
    <span class="icon-box-icon icon-orders">
        <i class="w-icon-orders"></i>
    </span>
    <div class="icon-box-content">
        <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders ({{ $user->orders->count() }}) </h4>
    </div>
</div>

<div class="table-responsive">
    <table class="shop-table mb-6">
        <thead>
            <tr>
                <th class="order-id">Order</th>
                <th class="order-date text-center">Date</th>
                <th class="order-status text-center">Status</th>
                <th class="order-total text-center">Total</th>
                <th class="order-total text-center">Grand Total</th>
                <th class="order-actions text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($user->orders->count() > 0)
                @foreach($user->orders as $order)
                    <tr>
                        <td class="order-id">#{{ $order->order_id }}</td>
                        <td class="order-date text-center">
                            {{ \Carbon\Carbon::parse($order->order_date)->format('d M, Y') }}
                        </td>
                        <td class="order-status text-center">
                            @if($order->delivery_status == 'pending')
                                <span class="badge bg-secondary">Pending</span>
                            @elseif($order->delivery_status == 'processing')
                                <span class="badge bg-info">Processing</span>
                            @elseif($order->delivery_status == 'delivered')
                                <span class="badge bg-success">Delivered</span>
                            @elseif($order->delivery_status == 'complete')
                                <span class="badge bg-success">Completed</span>
                            @elseif($order->delivery_status == 'canceled')
                                <span class="badge bg-danger">Cancelled</span>
                            @endif
                        </td>
                        <td class="order-total text-center">
                            <span class="order-price">৳{{ $order->subtotal }}</span> for
                            <span class="order-quantity">{{ $order->orderItems->count() }}</span> item(s)
                        </td>
                        <td class="order-total text-center">
                            ৳{{ $order->grand_total }}
                        </td>
                        <td class="order-action text-end">
                            <a href="{{route('order.invoice', $order->id)}}" class="btn btn-outline btn-default btn-block btn-sm btn-rounded" target="_blank">Invoice</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">
                        <div class="alert alert-danger mb-0">No order found</div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>


<a href="{{ route('shop') }}" class="btn btn-dark btn-rounded btn-icon-right">Go
    Shop<i class="w-icon-long-arrow-right"></i></a>