 <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="home.php" class="nav-link active">
                <i class="icon ion-ios-home-outline"></i>
                <span>Principal</span>
              </a>
            </li><!-- nav-item -->
            
            <!-- menu exemplo -->
            <?php 
             if(array_search('meu-dinheiro.php', $pagina)){
              $mostrar = 'active show-sub';
              $ativar = 'active';
             }
            ?>

            <li class="nav-item">
              <a href="" class="nav-link <?=$mostrar; ?> with-sub">
                <i class="icon ion-cash"></i>
                <span>Finanças</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="meu-dinheiro.php" class="nav-link <?=$ativar; ?>">Meu dinheiro</a></li>
                <li class="nav-item">
                  <a href="entradas.php" class="nav-link"> 
                    <i class="icon ion-plus"></i> Entradas
                  </a>
                </li>
                <li class="nav-item">
                  <a href="meu-dinheiro.php" class="nav-link"> 
                    <i class="icon ion-minus"></i> Despesas
                  </a>
                </li>
                <li class="nav-item">
                  <a href="meu-dinheiro.php" class="nav-link"> 
                    <i class="icon ion-card"></i> Receitas
                  </a>
                </li>
                <li class="nav-item"><a href="investimentos.php" class="nav-link">Investimentos</a></li>
              </ul>
            </li><!-- nav-item -->
            <!-- menu exemplo -->

            <!-- menu exemplo --> 
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-gear-outline"></i>
                <span>Forms</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
                <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
                <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
                <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
                <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
              </ul>
            </li><!-- nav-item -->
            <!-- menu exemplo -->



            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-filing-outline"></i>
                <span>UI Elements</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
                <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
                <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
                <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
                <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
                <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
                <li class="nav-item"><a href="navigation.html" class="nav-link">Navigation</a></li>
                <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
                <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
                <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
                <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                
                  
                    <div id="changeText"><i class="icon ion-ios-heart-outline"></i></div>
                    <script>
                    var text = ['<i class="icon ion-ios-heart"></i>', '<i class="icon ion-ios-heart-outline"></i>'];
                    var counter = 0;
                    var elem = document.getElementById("changeText");
                    var inst = setInterval(change, 1000);

                    function change() {
                      elem.innerHTML = text[counter];
                      counter++;
                      if (counter >= text.length) {
                        counter = 0;
                        // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
                      }
                    }
                      
                  </script>
                  
                  
                
                
                <span>OBJETIVOS</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="recompensas.php" class="nav-link">Recompensas</a></li>
                <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
                <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
                <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
                <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-navigate-outline"></i>
                <span>Maps</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
                <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-list-outline"></i>
                <span>Tables</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
                <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="" class="nav-link with-sub">
                <i class="icon ion-ios-bookmarks-outline"></i>
                <span>Pages</span>
              </a>
              <ul class="nav-sub">
                <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
                <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
                <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
                <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="widgets.html" class="nav-link">
                <i class="icon ion-ios-briefcase-outline"></i>
                <span>Widgets</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #mainMenu -->