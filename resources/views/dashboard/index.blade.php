<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="">
        <h4 class="text-center my-3 font-arial" style="color: #916dfd">
            <span class="font-EmojiOneColor">👋</span> Hi there,
            {{ ucwords(Auth::user()->first_name) . ' ' . ucwords(Auth::user()->last_name) }}!
            See your Statistics<span class="font-EmojiOneColor">👇</span>
        </h4>
        <div class="row my-2 justify-content-center">
            <div class="col-md-3 me-2">
                <div class="total-details-card">
                    <div class="d-flex justify-content-center align-items-end">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="4rem" height="58px">
                            <image x="0px" y="0px" width="2.3rem" height="2rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                        <div>
                            <p class="text-center">Your Total Orders</p>
                            <h3 class="text-center">
                                0
                            </h3>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-md-3 me-2">
                <div class="total-details-card">
                    <div class="d-flex justify-content-center align-items-end">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="4rem" height="58px" viewBox="0 0 54 52">
                            <image id="_03hwg6qforaartph" data-name="03hwg6qforaartph" width="2.3rem" height="2rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>

                        <div>
                            <p class="text-center">You Have Spent</p>
                            <h3 class="text-center">
                                PKR 0.00
                            </h3>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-md-3 me-2">
                <div class="total-details-card">
                    <div class="d-flex justify-content-center align-items-end">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="4rem" height="58px">
                            <image x="0px" y="0px" width="2.3rem" height="2rem"
                                xlink:href="data:img/png;base64,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" />
                        </svg>
                        <div>
                            <p class="text-center">Account status</p>
                            <h3 class="text-center">
                                New
                            </h3>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <h3 class="text-center text-white font-arial py-2 font-weight-bold d-flex justify-content-center align-items-center"
            style="background: #916dfd;border-radius:5px;">
            <img src="{{ asset('images/svg/History Icon.svg') }}" alt="Order History Icon" class="d-inline-block me-2"
                height="1.5rem" style="height: 1.5rem">
            Orders History
        </h3>
        <div class="d-flex my-3 justify-content-center">
            <div class="" style="background: #916dfd" style="padding: 5px">
                <img src="{{ asset('images/svg/Search.svg') }}" alt="Search" style="2rem">
            </div>
            <input type="text" class="form-control w-100">
            <button type="submit" class="btn text-white" style="background: #fdc877;">X</button>
        </div>
        <div class="d-flex history">
            <a href="" class="active">
                All
            </a>
            <a href="">
                Pending
            </a>
            <a href="">
                In Progress
            </a>
            <a href="">
                Completed
            </a>
            <a href="">
                Canceled
            </a>
        </div class="table-responsive">
        <table class="table table-striped mt-3 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Service</th>
                    <th scope="col">Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Charge</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Info</th>
                    <th scope="col">Re Order</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{ $srNo++ }}
                        </td>
                        <td>
                            Youtube
                        </td>
                        <td>
                            Link
                        </td>
                        <td>
                            <p style="background: #916dfd;color:#fff;border-radius:5px;padding:0 2px" class="d-inline">
                                {{ $order->status }}
                            </p>
                        </td>
                        <td>
                            Pkr {{ $order->TXNAMT }}
                        </td>
                        <td>
                            {{ $order->quantity }}
                        </td>
                        <td>
                            <div class="d-inline-block"
                                style="background: #916dfd; color:#fff;max-width: fit-content;border-radius:10px;padding:0 5px"
                                class="d-inline-block">
                                <img src="{{ asset('images/svg/detail Info.svg') }}" alt=""
                                    class="d-inline-block">
                                Details
                            </div>
                        </td>
                        <td>
                            <div class="d-inline-block"
                                style="background: #916dfd; color:#fff;max-width: fit-content;border-radius:10px;padding:0 5px"
                                class="d-inline-block">
                                <img src="{{ asset('images/svg/Order Again.svg') }}" alt=""
                                    class="d-inline-block">
                                Order Again
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <x-slot name="footer">
    </x-slot>
</x-app-layout>
