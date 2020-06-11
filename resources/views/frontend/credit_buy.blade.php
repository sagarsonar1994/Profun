@extends('frontend.layouts.master')

@section('content')
<div class="ads-row">
      <div class="container">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#buy-credit">Buy Credit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cr-history">Credit History</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="buy-credit" class="tab-pane active">
            <div class="credits-row">
              <div class="credit-heading">
                <h2><i class="fa fa-credit-card" aria-hidden="true"></i> Credit Packages</h2>
              </div>
              <div class="credit-form">
                <form>
                  <div class="credit-bx">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">16 Credits
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="text-center">
                          <p>16+0 Credit</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="text-right">
                          <h4><span class="discount">No Discounnt</span>Rs. 640.00</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="credit-bx">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">30 Credits
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="text-center">
                          <p>25+5 Credit</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="text-right">
                          <h4><span class="discount">5% Discounnt</span>Rs. 1010.00</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sbm-sec">
                    <button type="button">Buy Credits</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div id="cr-history" class="tab-pane fade">
            <div class="history-row">
              <div class="history-heading">
                <h2><i class="fa fa-list" aria-hidden="true"></i> My Credit History</h2>
              </div>
              <div class="history-dtl">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th style="text-align: center;" >Credits</th>
                      <th style="text-align: center;" >Amount</th>
                      <th style="text-align: right;" >Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>06/05/2020</td>
                      <td style="text-align: center;">16</td>
                      <td style="text-align: center;"><strong>Rs. 640.00</strong></td>
                      <td style="text-align: right;"><span class="success">Success</strong>
                    </tr>
                    <tr>
                      <td>06/05/2020</td>
                      <td style="text-align: center;">16</td>
                      <td style="text-align: center;"><strong>Rs. 640.00</strong></td>
                      <td style="text-align: right;"><span class="pending">Pending</strong>
                    </tr>
                    <tr>
                      <td>06/05/2020</td>
                      <td style="text-align: center;">16</td>
                      <td style="text-align: center;"><strong>Rs. 640.00</strong></td>
                      <td style="text-align: right;"><span class="success">Success</strong>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('script')
@endsection