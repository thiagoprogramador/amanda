<?php

include 'includes/header.php';

?>

    <div class="am-sideleft">
      <ul class="nav am-sideleft-tab">
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
       
       <?php include 'includes/menu.php'; ?>
       
        <div id="emailMenu" class="tab-pane">
          <div class="pd-x-20 pd-y-10">
            <a href="" class="btn btn-orange btn-block btn-compose">Compose Email</a>
          </div>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Inbox</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Drafts</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-paperplane-outline"></i>
                <span>Sent</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-trash-outline"></i>
                <span>Trash</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-filing-outline"></i>
                <span>Spam</span>
              </a>
            </li><!-- nav-item -->
          </ul>

          <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">My Folder</label>
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Updates</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Social</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="page-inbox.html" class="nav-link">
                <i class="icon ion-ios-folder-outline"></i>
                <span>Promotions</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #emailMenu -->
        <div id="chatMenu" class="tab-pane">
          <div class="chat-search-bar">
            <input type="search" class="form-control wd-150" placeholder="Search chat...">
            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
          </div><!-- chat-search-bar -->

          <label class="pd-x-15 tx-uppercase tx-11 mg-t-20 tx-orange mg-b-10 tx-medium">Recent Chat History</label>
          <div class="list-group list-group-chat">
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="img/img6.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Russell M. Evans</h6>
                  <span>Tuesday, 10:33am</span>
                </div>
              </div><!-- d-flex -->
              <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="img/img7.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>James F. Sears</h6>
                  <span>Monday, 4:21pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="img/img8.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Sharon R. Rowe</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="img/img9.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Ruby M. Martin</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
            <a href="#" class="list-group-item">
              <div class="d-flex align-items-center">
                <img src="img/img10.jpg" class="wd-32 rounded-circle" alt="">
                <div class="mg-l-10">
                  <h6>Joslyn C. Mayo</h6>
                  <span>Sunday, 7:45pm</span>
                </div>
              </div><!-- d-flex -->
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising...</p>
            </a><!-- list-group-item -->
          </div><!-- list-group -->
          <span class="d-block pd-15 tx-12">Loading messages...</span>

        </div><!-- #chatMenu -->
        <div id="settingMenu" class="tab-pane">
          <div class="pd-x-15">
            <label class="tx-uppercase tx-11 mg-t-10 tx-orange mg-b-15 tx-medium">Quick Settings</label>
            <div class="bd pd-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Daily Newsletter</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Call Phones</h6>
              <p class="tx-12">Make calls to friends and family right from your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Login Notifications</h6>
              <p class="tx-12">Get notified when someone else is trying to access your account.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->

            <div class="bd pd-15 mg-t-15">
              <h6 class="tx-13 tx-normal tx-gray-800">Phone Approvals</h6>
              <p class="tx-12">Use your phone when login as an extra layer of security.</p>
              <div class="toggle toggle-light warning"></div>
            </div><!-- bd -->
          </div>
        </div><!-- #settingMenu -->
      </div><!-- tab-content -->
    </div><!-- am-sideleft -->

    <div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title">Meu dinheiro</h5>
        <form id="searchBar" class="search-bar" action="index.html">
          <div class="form-control-wrapper">
            <input type="search" class="form-control bd-0" placeholder="Search...">
          </div><!-- form-control-wrapper -->
          <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
        </form><!-- search-bar -->
      </div><!-- am-pagetitle -->




      <div class="am-pagebody">
        <div class="row row-sm">
          <div class="col-lg-4">
            <div class="card">
              <div id="rs1" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">A receber</h6>
                    <p class="tx-12" style="text-transform: capitalize;">
                      <strong><?php echo strftime('%B', strtotime('today')); ?>:</strong>
                      1 - <?php echo date('t',strtotime('today')); ?>, 
                      <?php echo date('Y');?>
                  </p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">R$12,212</h2>
                <p class="tx-12 mg-b-0">Earnings before taxes.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
            <div class="card">
              <div id="rs2" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Despesas</h6>
                    <p class="tx-12" style="text-transform: capitalize;">
                      <strong><?php echo strftime('%B', strtotime('today')); ?>:</strong>
                      1 - <?php echo date('t',strtotime('today')); ?>, 
                      <?php echo date('Y');?>
                  </p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">R$28,746</h2>
                <p class="tx-12 mg-b-0">Earnings before taxes.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
            <div class="card">
              <div id="rs3" class="wd-100p ht-200"></div>
              <div class="overlay-body pd-x-20 pd-t-20">
                <div class="d-flex justify-content-between">
                  <div>
                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Renda</h6>
                    <p class="tx-12">November 1 - 30, 2017</p>
                  </div>
                  <a href="" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                </div><!-- d-flex -->
                <h2 class="mg-b-5 tx-inverse tx-lato">R$72,118</h2>
                <p class="tx-12 mg-b-0">Earnings before taxes.</p>
              </div>
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-md-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Despesas</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="f2" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-md-6 mg-t-15 mg-sm-t-20 mg-md-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Receitas</h6>
              <p class="mg-b-20 mg-sm-b-30">The stacked charts are used when data sets have to be broken down into their constituents.</p>
              <div id="f1" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-15 mg-sm-t-20">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header bg-transparent pd-20">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">

                  Transações

                </h6>
              </div><!-- card-header -->
              <div class="table-responsive">
                <table class="table table-white mg-b-0 tx-12">
                  <tbody>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img1.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                      </td>
                      <td>Just Now</td>
                    </tr>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img2.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                      </td>
                      <td>Apr 21, 2017 8:34am</td>
                    </tr>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img3.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                      </td>
                      <td>Apr 10, 2017 4:40pm</td>
                    </tr>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img5.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                      </td>
                      <td>Apr 02, 2017 6:45pm</td>
                    </tr>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img4.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                      </td>
                      <td>Mar 30, 2017 10:30am</td>
                    </tr>
                    <tr>
                      <td class="pd-l-20 tx-center">
                        <img src="img/img5.jpg" class="wd-36 rounded-circle" alt="Image">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                        <span class="tx-11 d-block">TRANSID: 1234567890</span>
                      </td>
                      <td class="tx-12">
                        <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                      </td>
                      <td>Mar 30, 2017 10:30am</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-gray-200">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>Ver todas as transações</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-8 -->
          <div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
            <div class="card pd-20">
              <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-15">
                
                Vendas

              </h6>
              <div class="d-flex mg-b-10">
                <div class="bd-r pd-r-10">
                  <label class="tx-12">Hoje</label>
                  <p class="tx-lato tx-inverse tx-bold">1,898</p>
                </div>
                <div class="bd-r pd-x-10">
                  <label class="tx-12">Esta semana</label>
                  <p class="tx-lato tx-inverse tx-bold">32,112</p>
                </div>
                <div class="pd-l-10">
                  <label class="tx-12">Esta semana</label>
                  <p class="tx-lato tx-inverse tx-bold">72,067</p>
                </div>
              </div><!-- d-flex -->
              <div class="progress mg-b-10">
                <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
              </div>
            </div><!-- card -->

            <ul class="list-group widget-list-group bg-info mg-t-20">
              
            <?php 
              $x =0; 

                while($x < 6){ 
                  $x++;
            ?>
              <li class="list-group-item rounded-top-0">
                <p class="mg-b-0"><i class="fa fa-cube tx-white-7 mg-r-8"></i><strong class="tx-medium">Nome do projeto <?=$x;?></strong></p>
              </li>
            <?php } ?>
             
            </ul>
          </div><!-- col-4 -->
        </div><!-- row -->

<?php include 'includes/rodape.php'; ?>