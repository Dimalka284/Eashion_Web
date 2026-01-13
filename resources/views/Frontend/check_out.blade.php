@extends('layouts.app1')

@section('title', 'Checkout | EASHION')

@section('content')
<div class="grid gap-12 px-4 py-12 mx-auto max-w-7xl lg:grid-cols-12">

    <!-- Billing Details -->
    <div class="lg:col-span-7">
        <h2 class="mb-6 text-lg font-bold">Billing Details</h2>

        <form action="{{ route('checkout.place') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4 mb-4">
                <input name="first_name" placeholder="First Name" required class="input">
                <input name="last_name" placeholder="Last Name" required class="input">
            </div>

            <input name="street_address" placeholder="Street Address" required class="mb-4 input">

            <div class="grid grid-cols-2 gap-4 mb-4">
                <select name="province" required class="input">
                    <option value="">Select Province</option>
                    <option>Western</option>
                    <option>Central</option>
                    <option>Southern</option>
                </select>

                <select name="district" required class="input">
                    <option value="">Select District</option>
                    <option>Colombo</option>
                    <option>Gampaha</option>
                    <option>Kandy</option>
                </select>
            </div>

            <input name="phone" placeholder="Phone Number" required class="mb-6 input">

            <button class="w-full font-bold tracking-widest text-white uppercase bg-black h-14">
                Place Order & Pay
            </button>
        </form>
    </div>

    <!-- Order Summary -->
    <div class="lg:col-span-5">
        <div class="p-6 bg-white border">
            <h3 class="mb-4 text-sm font-bold uppercase">Order Summary</h3>

            @foreach($cartItems as $item)
                <div class="flex justify-between mb-2 text-sm">
                    <span>{{ $item->product->name }} × {{ $item->quantity }}</span>
                    <span>
                        LKR {{ number_format(($item->product->price * (1 - ($item->product->discount / 100))) * $item->quantity, 2) }}
                    </span>
                </div>
            @endforeach

            <hr class="my-4">

            <div class="flex justify-between mb-2 text-sm">
                <span>Subtotal</span>
                <span>LKR {{ number_format($subtotal, 2) }}</span>
            </div>

            <div class="flex justify-between mb-2 text-sm">
                <span>Shipping</span>
                <span>LKR 250.00</span>
            </div>

            <div class="flex justify-between mt-4 text-lg font-bold">
                <span>Total</span>
                <span>LKR {{ number_format($subtotal + 250, 2) }}</span>
            </div>
        </div>
    </div>
</div>

<style>
.input{
    width:100%;
    border:1px solid #ddd;
    padding:12px;
}
</style>
@endsection
