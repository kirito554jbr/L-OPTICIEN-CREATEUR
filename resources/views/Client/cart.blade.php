@extends('Client.layout')
@section('content')

    <table id="cart" class="table table-hover table-condensed">

        <thead>

            <tr>

                <th style="width:50%">Product</th>

                <th style="width:10%">Price</th>

                <th style="width:8%">Quantity</th>

                <th style="width:22%" class="text-center">Subtotal</th>

                <th style="width:10%"></th>

            </tr>

        </thead>

        <tbody>

            @php $total = 0 @endphp

            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp

                    <tr data-id="{{ $id }}">

                        <td data-th="Product">

                            <div class="row">

                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100"
                                        height="100" class="img-responsive" /></div>

                                <div class="col-sm-9">

                                    <h4 class="nomargin">{{ $details['name'] }}</h4>

                                </div>

                            </div>

                        </td>

                        <td data-th="Price">${{ $details['price'] }}</td>

                        <td data-th="Quantity">
                            <form action="{{ route('update.cart.quantiter', $id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                class="form-control quantity update-cart" />
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>

                        </td>

                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>

                        <td class="actions" data-th="">

                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>

                        </td>

                    </tr>
                @endforeach
            @endif

        </tbody>

        <tfoot>

            <tr>

                <td colspan="5" class="text-right">
                    <h3><strong>Total ${{ $total }}</strong></h3>
                </td>

            </tr>

            <tr>

                <td colspan="5" class="text-right">

                    <form action="/session" method="POST">
                        <a href="{{ url('/ProduitClient') }}" class="btn btn-primary"><i class="fa fa-angle-left">Continue
                                Shopping</i></a>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type='hidden' name="total" value={{ $total }}>
                        @foreach (session('cart') as $id => $details)
                            <input type='hidden'id="productname" name="productname" value={{ $details['name'] }}>
                        @endforeach
                        <button type="submit" class="btn btn-success-emphasis">Checkout</button>
                    </form>
                </td>

            </tr>

        </tfoot>

    </table>

@endsection
