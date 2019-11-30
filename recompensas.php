<?php include 'includes/header.php';?>
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

    <div class="am-pagetitle">
      <h5 class="am-title">Recompensas</h5>
      <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
          <input type="search" class="form-control bd-0" placeholder="Search...">
        </div><!-- form-control-wrapper -->
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
      </form><!-- search-bar -->
    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

          <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Quadros de recompensas</h6>
          <p class="mg-b-20 mg-sm-b-30">Todos os cadastros de recopmensas para o usuário.</p>
          
          <div class="col-md-4">
              <button class="btn btn-outline-primary btn-block mg-b-10" data-toggle="modal" data-target="#modaldemo1">ADICIONAR NOVO OBJETIVO</button>
          </div>
          <!-- modal -->
            <div id="modaldemo1" class="modal fade" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                  <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                      <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Bitch ass nigga! You diserve!!</h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body pd-25">
                        <h1>Qual o seu objetivo?</h1>
                        <form>
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                            <input class="form-control" placeholder="Input box" type="text">
                        </form>
                        
                        
                        
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info pd-x-20">fuck world</button>
                      <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div><!-- modal-dialog -->
            </div>
          <!-- modal -->
          
          
          
          
          
          <div class="row">
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/fernandodenoronha.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">Viagem Fernando de Noronha</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">
                      Fernando de Noronha é um arquipélago vulcânico situado a cerca de 350 quilómetros ao largo da costa nordeste do Brasil. Tem o nome da sua maior ilha, um parque marinho e santuário ecológico protegido com uma linha costeira recortada e vários ecossistemas.
                  </p>
                  <p class="mg-b-0">
                      <span style="color: white; font-weight: bolder;text-shadow:1px 1px 1px #000;">R$ 25.000,00</span><br>
                      85%<br> 
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star-outline"></i>
                      <i class="icon ion-ios-star-outline"></i>
                   
                   
                  </p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/cb1000r.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">CB 1000R</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">A Honda CB1000R é uma motocicleta CB padrão ou de quatro cilindros da série CB de 1.000 cc, fabricada pela Honda de 2008 a 2016 e retomada a partir de 2018.</p>
                  <p class="mg-b-0">
                      <span style="color: white; font-weight: bolder;text-shadow:1px 1px 1px #000;">R$ 25.000,00</span><br>
                      85%<br> 
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star-outline"></i>
                      <i class="icon ion-ios-star-outline"></i>
                   
                   
                  </p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/soanta.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">Hyundai Sonatata 2012</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">O Sonata é um sedan médio-grande da Hyundai, lançado em 1985, atualmente em sua 6ª geração.</p>
                  <p class="mg-b-0" style="color: white; font-weight: bolder;text-shadow:1px 1px 1px #000;">
                      R$ <span class="count">1025000</span>,00 <br>
                      85%<br> 
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star-outline"></i>
                      <i class="icon ion-ios-star-outline"></i>
                   
                   
                  </p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/margot.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">Margot Robbie</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">O Sonata é um sedan médio-grande da Hyundai, lançado em 1985, atualmente em sua 6ª geração.</p>
                  <p class="mg-b-0" style="color: white; font-weight: bolder;text-shadow:1px 1px 1px #000;">
                      R$ <span class="count">12000</span>,00<br>
                      85%<br> 
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star-outline"></i>
                      <i class="icon ion-ios-star-outline"></i>
                   
                   
                  </p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/disney.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">Hyundai Sonatata 2012</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">O Sonata é um sedan médio-grande da Hyundai, lançado em 1985, atualmente em sua 6ª geração.</p>
                  <p class="mg-b-0"  style="color: white; font-weight: bolder;text-shadow:1px 1px 1px #000;">
                      <span >R$ 25.000,00</span><br>
                      85%<br> 
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star"></i>
                      <i class="icon ion-ios-star-outline"></i>
                      <i class="icon ion-ios-star-outline"></i>
                  </p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                  <img class="card-img img-fluid" src="img/recompensas/pular-paraquedas.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">Hyundai Sonatata 2012</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">O Sonata é um sedan médio-grande da Hyundai, lançado em 1985, atualmente em sua 6ª geração.</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            
          </div><!-- row -->
          
          
        </div><!-- card -->


        

      <?php include 'includes/rodape.php'; ?>