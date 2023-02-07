@extends('layouts.checkout')
@section('title')
    Checkout
@endsection

@section('content')
    <main>
        <section class="section-details-header">
        </section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket travel
                                </li>
                                <li class="breadcrumb-item ">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>
                                Who is going?
                            </h1>
                            <p>
                                Trip to ubud, Bali, Indonesia
                            </p>
                            <div class="attendee">
                                <table class="table table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationalty</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="frontend/images/avatar-2.png" height="60"></td>
                                            <td class="align-middle">Angga Risky</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="frontend/images/ic_bahasa.png">
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><img src="frontend/images/avatar-2.png" height="60"></td>
                                            <td class="align-middle">Angga Risky</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="frontend/images/ic_bahasa.png">
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">
                                        Name
                                    </label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                        placeholder="Username" name="inputUsername">

                                    <label for="inputVisa" class="sr-only">
                                        Visa
                                    </label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="Visa" selected>Visa</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">Doe Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="Doe Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 mr-sm-2">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">
                                    NOTE
                                </h3>
                                <p class="disclaimer mb-0">You are only able to invite member that has registered in
                                    nomands</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Member</th>
                                    <td width="50%" class="text-right">
                                        2 person
                                </tr>
                                <tr>
                                    </td>
                                    <th width="50%">Aditional Visa</th>
                                    <td width="50%" class="text-right">
                                        $190,00
                                    </td>

                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        $280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">$ 279,</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instruction</h2>
                            <p class="payment-intruction">
                                Please completed your payment before to continue the wonderful trip
                            </p>
                            <div class="bank">
                                <div class="bank-item mb-3">
                                    <img src="frontend/images/ic_foods.png" class="bank-image">
                                    <div class="description">
                                        <h3>
                                            PT NOMANDS ID
                                        </h3>
                                        <p>
                                            0812 3233 2323
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item mb-3">
                                    <img src="frontend/images/ic_foods.png" class="bank-image">
                                    <div class="description">
                                        <h3>
                                            PT NOMANDS ID
                                        </h3>
                                        <p>
                                            0812 3233 2323
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have My Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="text-muted ">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush


@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_doe.png"/>'
                }
            });
        });
    </script>
@endpush
