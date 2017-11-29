<?php include('includes/header.php') ?>
	<main id="page-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-lg-11 mx-auto px-md-3 px-lg-2">
                            <h1 class="cstm-card-header text-center text-dark my-3 my-lg-4">
                                <span class="ff-uma-bold">when &amp; where</span> should we send this eCard?
                            </h1>
                            <div class="step2 mb-3 mb-lg-4">
                                <div class="card border-0 rounded-0">
                                    <div class="card-body py-0 py-sm-4">
                                        <form>
                                            <div class="form-group row">
                                                <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">From Name <span class="text-danger">*</span> </label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="mail_from" class="form-control rounded-0" id="mail_from" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">From Email <span class="text-danger">*</span> </label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="mail_from" class="form-control rounded-0" id="mail_from" placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="recipients-wrap-card">
                                    <div class="card mb-0 border-0 rounded-0 alert alert-warning alert-dismissible fade show p-0" role="alert">
                                        <div class="card-body pb-1 pb-md-4">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">To Name <span class="text-danger">*</span> </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mail_to[]" class="form-control rounded-0" id="mail_from" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">To Email <span class="text-danger">*</span> </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mail_from" class="form-control rounded-0" id="mail_to_email[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-sm-6 text-sm-right">
                                                                <label class="mb-0" for=""> eCard Delivery Date:</label>
                                                            </div>
                                                            <div class="col-sm-6 delivery-date">
                                                                <div class="row">
                                                                    <div class="col-1 d-sm-none"></div>
                                                                    <div class="col-10 col-md-12">
                                                                        Today
                                                                        <a href="javascript:void(0)" class="change-link text-decoration">change</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-sm-right">
                                                        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Canada?</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                            <button type="button" class="close btn_gradient" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"> ✗ </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card mb-0 border-0 rounded-0 alert alert-warning alert-dismissible fade show d-none" role="alert">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">To Name <span class="text-danger">*</span> </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mail_to[]" class="form-control rounded-0" id="mail_from" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mail_from" class="col-sm-4 col-form-label text-sm-right">To Email <span class="text-danger">*</span> </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mail_from" class="form-control rounded-0" id="mail_to_email[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-sm-6 text-sm-right">
                                                                <label class="mb-0" for=""> eCard Delivery Date:</label>
                                                            </div>
                                                            <div class="col-sm-6 delivery-date">
                                                                <div class="row">
                                                                    <div class="col-1 d-sm-none"></div>
                                                                    <div class="col-10 col-md-12">
                                                                        Today
                                                                        <a href="javascript:void(0)" class="change-link">change</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-sm-right">
                                                        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Canada?</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                            <button type="button" class="close btn_gradient" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"> ✗ </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 rounded-0 mb-1 mb-md-3">
                                    <div class="card-body py-2 py-md-4">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <!-- <a id="preview-giftcard" class="btn btn-keep-original btn_gradient" href="javascript:void(0);" data-toggle="modal" data-target="#gift-card-preview">preview card</a> -->
                                                <button id="btn-add-recipient" class="btn btn-keep-original btn_gradient"  data-toggle="modal" data-target=".bd-example-modal-lg">
                                                    preview card
                                                </button>
                                            </div>
                                            <div class="float-right text-right">
                                                <button id="btn-add-recipient" class="btn btn-keep-original btn_gradient">add another recipient</button>
                                                <button id="btn-add-recipient-list" data-toggle="modal" data-target="#add-receiver-modal" class="btn btn-keep-original btn_gradient">add from list</button>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <dic class="col-md-6 ml-auto">
                                                <div class="totaling-container ff-uma-bold text-right mt-1 mt-md-4">
                                                    <div class="sub-total">
                                                        Order Subtotal:
                                                        <span class="ml-4">
                                                            $0.00
                                                        </span>
                                                    </div>
                                                    <div class="sub-total">
                                                        Discount Applied:
                                                        <span class="ml-4">
                                                            $0.00
                                                        </span>
                                                    </div>
                                                    <div class="">
                                                        Order Total:
                                                        <span class="ml-4">
                                                            $0.00
                                                        </span>
                                                    </div>
                                                </div>
                                            </dic>
                                        </div>
                                    </div>
                                </div>
                                <div class="payback-section">
                                    <div class="row no-gutters align-items-center justify-content-center">
                                        <div class="col-3 col-md-2">
                                            <h2 class="title mb-0 text-right">All set</h2>
                                        </div>
                                        <div class="col-2 col-md-2 text-md-right">
                                            <img src="img/img_arrow.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-7 col-md-6 pl-0">
                                            <div class="button-cstm-img">
                                                <div class="button-cstm-img">
                                                    <button class="outer-img-btn activity" id="btn-send-now" type="submit">
                                                        <img src="img/default-btn-background.png" class="img-fluid" alt="img-btn">
                                                        <span class="custom-send-sugarwish-btn">send now</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- <span class="send-note">will be charged to your corporate account</span> -->
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-7 col-md-6 offset-5 offset-md-4">
                                            <span class="send-note">will be charged to your corporate account</span>
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
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="row">
            <div class="col-md-12 col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="modal-content preview-card-modal">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span class="text-hide" aria-hidden="true">&times;</span>
                            </button>
                            <div class="card-body p-2">
                                    
                                <div class="border">
                                    <div class="p-3">
                                        <img src="img/Sugarwish_Logo.png" class="img-fluid mx-auto d-block" alt="logo image">
                                        <h3 class="text-center">Lorem ipsum dolor sit amet.</h3>
                                        <h3 class="text-center">Lorem ipsum dolor sit amet.</h3>
                                        <img class="img-fluid col-md-10 mx-auto d-block" src="img/8711_7587_coloradostateu-default.jpg" alt="image">
                                        <hr>
                                        <div class="detail-content text-center">
                                            <h4 class="text-dark mb-3">
                                                You have been sent a Sugarwish
                                                <sup style="font-size: 14px ">TM</sup>
                                                !
                                            </h4>
                                            <h4 class="mb-3">
                                                A Sugarwish is a candy gift that allows <span style="color: #fc4b52; ">you</span> to choose the candy that you want to receive.
                                            </h4>
                                            <h4 class="mb-3">
                                                And best of all, everything, including shipping, has been covered.
                                            </h4>
                                            <h4 class="mb-3">
                                                When you click on the button below, you will be taken to the Sugarwish website to pick your favorite candies--they will arrive lickity-split!
                                            </h4>
                                            <div class="mb-3 w-50 mx-auto">
                                                <a href="javascript:void(0);" class="btn btn-block btn-danger choose-my-candy-btn">choose my candy now!</a>
                                            </div>
                                            <h4 class="mb-3">
                                                (For your reference, your gift code is "XXXX-XXXX-XXXX" but when you click on the button above, your code will transfer automatically.)
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center text-white">
                                        <p class="text-center small">
                                            If you have any questions please feel free to contact us at:
                                            <br>
                                            Sugarwish 4665 E. Warren St, Denver, CO 80222
                                            <br>
                                            via email: <span class="text-danger ">info@sugarwish.com</span>
                                            <br>
                                            or call us at <a href=" ">720-722-4071</a> Monday -Friday, 8am - 5pm MST.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add-receiver-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content add-receiver-modal">
            <div class="pt-2 pr-2">
                <button type="button" class="close btn_gradient" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"> ✗ </span>
                </button>
            </div>
            <div class="modal-body pt-1">
                <h3 class="modal-title text-center">Add Recipients From a List</h3>
                <p class="text-center">To add a list of recipients please copy and paste a list of recipients in the following format (separate lines with returns):
                    name,email,send date <br>
                    e.g: <br>
                    Jane Smith,jane.smith@gmail.com,12/31/2018 <br>
                        John Smith,john.smith@gmail.com,12/31/2018</p>
            </div>
            <div class="card bg-transparent">
                <div class="card-body">
                    <textarea id="receiver-list" name="receiver_list" class="form-control" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <div class="button-cstm-img">
                    <button class="outer-img-btn activity" type="submit" id="btn-buyer-step-one">
                        <img src="img/default-btn-background.png" class="img-fluid" alt="img-btn">
                        <span>Ok</span>
                    </button>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php include('includes/footer.php') ?>