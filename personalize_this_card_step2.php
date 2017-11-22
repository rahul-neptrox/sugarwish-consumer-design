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
                                                <a id="preview-giftcard" class="btn btn-keep-original btn_gradient" href="javascript:void(0);" data-toggle="modal" data-target="#gift-card-preview">preview card</a>
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
<?php include('includes/footer.php') ?>