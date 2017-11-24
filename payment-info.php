<?php include('includes/header2.php') ?>
	<main id="page-content">
        <div class="container">
            <div class="row no-gutters my-3 my-md-4">
                <div class="col-md-12 col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-lg-11 mx-auto px-md-3 px-lg-2">
                            <div class="">
                                <div class="">
                                    <h3 class="cstm-card-header text-center ff-uma-bold mt-4 mb-4 mb-md-4">
                                        Please enter your payment info
                                    </h3>
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <form>
                                                <div class="form-group">
                                                    <label class="d-block" for="">
                                                        creadit card number
                                                        <i class="fa fa-2x fa-cc-visa float-right" aria-hidden="true"></i>
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">expiration date</label>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <select class="form-control">
                                                              <option>Month</option>
                                                              <option>abc</option>
                                                              <option>abc</option>
                                                              <option>abc</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select class="form-control">
                                                              <option>Year</option>
                                                              <option>abc</option>
                                                              <option>abc</option>
                                                              <option>abc</option>
                                                            </select>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">CVC</label>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" name="">
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">
                                                        Zip code
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" name="">
                                                        </div>
                                                      </div>
                                                </div>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">store this card for future orders</span>
                                                </label>
                                                <div class="button-cstm-img mt-2">
                                                    <button class="outer-img-btn activity" type="submit" id="btn-buyer-step-one">
                                                        <img src="img/default-btn-background.png" class="img-fluid" alt="img-btn">
                                                        <span>Continue Checkout</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('includes/footer.php') ?>