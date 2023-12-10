<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="mt-5 heading">
        <h1 style="color: #916dfd">
            👋 Hi there, xyz! We are happy to assist you! Any questions or help needed, feel free to reach out.
        </h1>
    </div>
    <img src="{{ asset('images/svg/Support.svg') }}" alt="Support" class="m-auto d-block">
    <div class="d-flex justify-content-center support_buttons mt-3 pb-3">
        <div class="">
            <a href="">
                <img src="{{ asset('images/svg/MAIN ORDER.svg') }}" alt="Main Order">
                Ask Question
            </a>
        </div>
        <div class=" justify-content-center">
            <a href="">
                <img src="{{ asset('images/svg/Recieved.svg') }}" alt="Recieved">
                Recived Answer
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset('images/svg/electic brown.svg') }}" alt="electric">
                Feedback
            </a>
        </div>
    </div>
    <div class="mt-5 d-flex justify-content-center support-sub-button">
        <a href="">
            <img src="{{ asset('images/svg/Order.svg') }}" alt="Order">
            Order
        </a>
        <a href="">
            <img src="{{ asset('images/svg/Payment.svg') }}" alt="Payment">
            Payment
        </a>
        <a href="">
            <img src="{{ asset('images/svg/Request.svg') }}" alt="Request">
            Request
        </a>
        <a href="">
            <img src="{{ asset('images/svg/Bugs.svg') }}" alt="Bugs">
            Bugs
        </a>
        <a href="">
            <img src="{{ asset('images/svg/Other.svg') }}" alt="Other">
            Others
        </a>
    </div>
    <label for="subject" class="form-label">Subject</label>
    <select name="subject" id="subject" class="form-control w-100">
        <option value="" selected disabled>Select</option>
    </select>
</x-app-layout>
