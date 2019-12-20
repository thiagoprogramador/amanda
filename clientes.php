<?php
include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topo.php';

if ($_POST['enviar']) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];

    $sql_cadastro = "INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `empresa`) VALUES (NULL, '$nome', '$sobrenome', '$email', '$empresa');";

    if (mysqli_query($mysqli, $sql_cadastro)) {
        ?>
 <div class="am-pagebody">
                <div class="card pd-20  mg-t-15 pd-sm-40">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong class="d-block d-sm-inline-block-force">Well done!</strong> Cadastrado com sucesso.
            </div><!-- alert -->
        </div>
        <?php
    } else {
        ?>
 <div class="am-pagebody">
                 <div class="card pd-20  mg-t-15 pd-sm-40">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong class="d-block d-sm-inline-block-force">Falha</strong> no cadastro.
            </div><!-- alert -->
 </div>
<?php
    }
} else {
    ?>
    <div class="am-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Cadastro de cliente</h6>
            <p class="mg-b-20 mg-sm-b-30">Cadastre aqui o seu cliente.</p>
            <form method="post">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Nome: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="nome"  placeholder="Enter firstname" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Sobrenome: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sobrenome"  placeholder="Enter lastname" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email"  placeholder="Enter email address" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Empresa: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="empresa"  placeholder="Enter address" required>
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->
                    <div class="form-layout-footer">
                        <input class="btn btn-info mg-r-5" type="submit" name="enviar" value="Cadastrar">
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>

        <?php
    }
    ?>








    <div class="row row-sm mg-t-15 mg-sm-t-20">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent pd-20">
                    <h6 class="card-title tx-uppercase tx-12 mg-b-0">Projetos</h6>
                </div><!-- card-header -->
                <div class="table-responsive">
                    <table class="table table-white mg-b-0 tx-12">
                        <tbody>
                           
                            
                            
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="img/img1.jpg" class="wd-36 rounded-circle" alt="Image">
                                </td>
                                <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">Nome da empresa</a>
                                    <span class="tx-11 d-block">IDEMPRESA: 1234567890</span>
                                </td>
                                <td class="tx-12">
                                    <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Status do projeto
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
                    <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
                </div><!-- card-footer -->
            </div><!-- card -->
        </div><!-- col-8 -->

    </div><!-- row -->

    <?php include 'includes/rodape.php'; ?>