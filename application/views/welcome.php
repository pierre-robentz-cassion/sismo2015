
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div id='cssmenu'>
            <ul>
                <li class='active has-sub'><a href='#'>Connexion</a>
                   <ul>
                      <li><a href='#'>Se connecter</a> </li>
                      <li><a href='#'>Se deconnecter </a> </li>
                   </ul>
                </li>

            <li><a href='#'>Les Stations</a>
                   <ul>
                      <li><a href='#'>Les Stations LB</a> </li>
                      <li><a href='#'>Les Stations ACC </a> </li>
                      <li><a href='#'>Les Stations TEMP </a> </li>
                   </ul>
            </li>

            <li><a href='#'>Historiques</a></li>

              <li class="nav navbar-nav navbar-right">
                        <a  href="index.html"><strong>FDS-PRO-SISMO</strong></a>
              </li>
          </ul>
        </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" ng-app="myApp" ng-controller="CircleSimpleCtrl as vm">        
        <div class="row">
            <div class="col-md-2">
               <div class="row">
               <nav class="navbar navbar-default" >
                   <div class="col-lg-12">
                      <h3 class="page-header">Menu</h3>
                   </div>
                </nav>
                </div>
               <div class="row" id="bmenu">
                 <!-- bouton station-->
                <button type="button" class="btn btn-info btn-block" ng-click="vm.changeMenu()"> <span class="glyphicon glyphicon-chevron-down glyphicon-align-left" ng-if="vm.MenuState"></span> Le Reseau</button>
                <div class="list-group" ng-if="!vm.MenuState">
                    <a href="#" class="list-group-item list-group-item-info">Connecter a une station</a>
                    <a href="#" class="list-group-item list-group-item-info">Afficher les stations</a>
                </div>
                 
                 <!-- bouton utilisateur-->
                <button type="button" class="btn btn-info btn-block" ng-click="vm.changeMenu()"> <span class="glyphicon glyphicon-chevron-down glyphicon-align-left" ng-if="!vm.MenuState"></span> Les Station</button>
                <div class="list-group" ng-if="vm.MenuState">
                    <a href="#" class="list-group-item list-group-item-info" ng-click="vm.changeNetworkState('l')">Stations Large-Bande</a>
                    <a href="#"class="list-group-item list-group-item-info"ng-click="vm.changeNetworkState('a')">Stations Accelerometriques</a>
                    <a href="#" class="list-group-item list-group-item-info" ng-click="vm.changeNetworkState('g')">Reseau Global</a>
                </div>
                <hr>

                  <div class="row">
                     <div class="col-lg-12">
                        <p><?=img('ueh.png');?></p>
                     </div>
                  </div>
            </div>
          </div>
          
          <div class="col-md-8 col-md-offset-1">
              <div class="row">
               <nav class="navbar navbar-default" >
                   <div class="col-lg-12">
                      <h3 class="page-header">Shake Map</h3>
                   </div>
                </nav>
             </div>
            
             <div class="row">
                <ng-map center="19.047640,-72.864037" zoom="7" mayTypeId="TERRAIN" styles="[{stylers:[{visibility:'simplified'},{gamma:0.5},{weight:0.5}]},{elementType:'labels',stylers:[{visibility:'off'}]},{featureType:'water'}]" ng-switch="vm.NetworkState">

                    <shape ng-switch-when='l' name="circle" ng-repeat="city in vm.broadband" no-watcher="true"
                       stroke-color="#FF0000"
                      stroke-opacity="1"
                      stroke-weight="2"
                      fill-color="#4444ff"
                      fill-opacity="0.35"
                      center="{{city.position}}"
                      radius="{{vm.getRadius(city.rayon)}}">
                    </shape>

                    <shape ng-switch-when='a' name="circle" ng-repeat="city in vm.accelero" no-watcher="true"
                       stroke-color="#000000"
                      stroke-opacity="1"
                      stroke-weight="2"
                      fill-color="#111111"
                      fill-opacity="0.5"
                      center="{{city.position}}"
                      radius="{{vm.getRadius(city.rayon)}}">
                   </shape>

                    <shape ng-switch-when='g' name="circle" ng-repeat="city in vm.virtual" no-watcher="true"
                       stroke-color="#770000"
                      stroke-opacity="1"
                      stroke-weight="2"
                      fill-color="#774444"
                      fill-opacity="0.5"
                      center="{{city.position}}"
                      radius="{{vm.getRadius(city.rayon)}}">
                   </shape>

                   </shape>
               </ng-map>

               <br/>
               <p>Legend:</p>
            </div>
          </div>
      </div>
        
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">
            <hr>
            <div class="col-lg-12" >
              <nav class="navbar navbar-default" >
                   <div class="col-lg-12">
                      <h3 class="page-header">Infos Supplementaires</h3>
                   </div>
              </nav>
            </div>

            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>ACCCC</h4>
                    </div>
                    <div class="panel-body">
                        <p>Test</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>ACCC1</h4>
                    </div>
                    <div class="panel-body">
                        <p>Test1</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>

            <!--div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>ACCC2</h4>
                    </div>
                    <div class="panel-body">
                        <p>Test2</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div-->
          
        </div>
        <!-- /.row -->

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; UEH-FDS-ENIII-2015</p>
                </div>
            </div>
        </footer>

    </div>