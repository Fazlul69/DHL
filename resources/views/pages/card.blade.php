<div class="rtYhf">
    <div class="pdIue">
        <div class="container">
            <div class="kQwli">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="row">
                            <div class="col">
                            <h4 class="card-head">{{  trans('Address') }}</h4>
                            </div>
                            <div class="col"><h4 class="card-head">{{  trans('Payment Information') }}</h4></div>
                        </div>
                        
                        <form class="row g-3"  action="javascript:void(0)" id="card_info"  method="post" enctype="multipart/form-data">
                        @csrf    
                            <div class="row">
                                <div class="col wfJui">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="first_name" class="form-label">{{  trans('First Name') }}</label>
                                            <input type="text" class="form-control" id="first_name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_name" class="form-label">{{  trans('Last Name') }}</label>
                                            <input type="text" class="form-control" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="line_1" class="form-label">{{  trans('Address Line 1') }}</label>
                                        <input type="text" class="form-control" id="line_1">
                                    </div>
                                    <div class="col-12">
                                        <label for="line_2" class="form-label">{{  trans('Address Line 2') }}</label>
                                        <input type="text" class="form-control" id="line_2">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="city" class="form-label">{{  trans('City') }}</label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="state" class="form-label">{{  trans('State') }}</label>
                                            <input type="text" class="form-control" id="state">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="postal_code" class="form-label">{{  trans('Postal Code') }}</label>
                                            <input type="text" class="form-control" id="postal_code">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="country" class="form-label">{{  trans('Country') }}</label>
                                            <input type="text" class="form-control" id="country">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone_number" class="form-label">{{  trans('Phone Number') }}</label>
                                            <input type="text" class="form-control" id="phone_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="card_type" value="option1" checked>
                                            <label class="form-check-label" for="card_type">
                                                {{  trans('Credit or Debit Card') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="card_number" class="form-label">{{  trans('Card Number') }}</label>
                                        <input type="text" class="form-control" id="card_number" autocomplete="card_number" placeholder="•••• •••• •••• ••••" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="expiry" class="form-label">{{  trans('Expiry') }}</label>
                                            <input type="text" onkeyup="$cc.expiry.call(this,event)" class="form-control" id="expiry" maxlength="7" placeholder="mm/yyyy">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cvv" class="form-label">{{  trans('CVV') }}</label>
                                            <input type="text" class="form-control" id="cvv" autocomplete="off" placeholder="••••" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-8">
                                        <button type="submit" class="btn btn-success" id="send_form" data-bs-toggle="modal" data-bs-target="#cardModal">{{  trans('Submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bank attributes modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cardModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="cardModalLabel"></h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">OTP</label>
                <input type="text" class="form-control" id="name" placeholder="22443">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="col-md-6 offset-md-8">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
