<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>PYRE</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-primary nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="index.php" class="navbar-brand text-lt">
          
          <img src="images/logo.png" alt=".">
          <span class="hidden-nav-xs m-l-sm">PYRE</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
            <!--<a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">2</span>
            </a>-->
            <section class="dropdown-menu aside-xl animated fadeInUp">
              <section class="panel bg-white">
                <!--<div class="panel-heading b-light bg-light">
                  <strong>You have <span class="count">2</span> notifications</strong>
                </div>-->
                <div class="list-group list-group-alt">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="images/a0.png" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="images/a0.png" alt="...">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">            
              <li>
                <span class="arrow top"></span>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <!--<li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>-->
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black dk nav-xs aside hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Discover
                    </li>
                    <li>
                      <a href="index.php">
                        <i class="icon-disc icon text-danger-dk"></i>
                        <span class="font-bold">What's new</span>
                      </a>
                    </li>
                    <li>
                      <a href="genres.php">
                        <i class="icon-music-tone-alt icon text-danger-dk"></i>
                        <span class="font-bold">Genres</span>
                      </a>
                    </li>
                    
                    <li>
                      <a href="video.php" data-target="#content" data-el="#bjax-el" data-replace="true">
                        <i class="icon-social-youtube icon  text-danger-dk"></i>
                        <span class="font-bold">Video</span>
                      </a>
                    </li>
                    <li class="m-b hidden-nav-xs"></li>
                  </ul>
                  
                  
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt">John.Smith</strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">                      
                      <li>
                        <span class="arrow bottom hidden-nav-xs"></span>
                        <a href="#">Settings</a>
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <!--<li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>-->
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>            
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
                  <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-danger dker"></span>
                    <span class="bar2 a2 bg-danger dker"></span>
                    <span class="bar3 a3 bg-danger dker"></span>
                    <span class="bar4 a4 bg-danger dker"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                  <div class="row row-sm">
                    <!-- Music title -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">


                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-danger dr m-l-sm m-b-sm">03:Reflexion</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-danger dker padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <audio style="width:94%; padding-left:0.7em" controls>
                                    <source src="binaural_beats_audio/Higher Self.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="images/p1.jpg" alt="" class="r r-2x img-full"></a>
                        </div>

                        


                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Thom</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                        </div>
                      </div>
                    </div>
                    <!-- /Music Title -->

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">


                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-danger dr m-l-sm m-b-sm">02:Emphasis</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-danger dker padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <audio style="width:94%; padding-left:0.7em" controls>
                                    <source src="binaural_beats_audio/Energizer.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="images/p7.jpg" alt="" class="r r-2x img-full"></a>
                        </div>

                        


                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Inverted</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Luis</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">


                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-danger dr m-l-sm m-b-sm">03:Moody</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-danger dker padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <audio style="width:94%; padding-left:0.7em" controls>
                                <source src="binaural_beats_audio/Creative Thought.mp3" type="audio/mpeg">
                              </audio>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="images/m32.jpg" alt="" class="r r-2x img-full"></a>
                        </div>

                        


                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Foie Bump</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Joji</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">


                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-danger dr m-l-sm m-b-sm">05:Trance</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-danger dker padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                                <audio style="width:94%; padding-left:0.7em" controls>
                                    <source src="binaural_beats_audio/Energizer.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="images/m18.jpg" alt="" class="r r-2x img-full"></a>
                        </div>

                        


                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Medicine</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">l o o</a>
                        </div>
                      </div>
                    </div>




                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">


                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-danger dr m-l-sm m-b-sm">06:Flight</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-danger dker padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <audio style="width:94%; padding-left:0.7em" controls>
                                <source src="binaural_beats_audio/Creative Thought.mp3" type="audio/mpeg">
                              </audio>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="images/p8.jpg" alt="" class="r r-2x img-full"></a>
                        </div>

                        


                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Believe </a>
                          <a href="#" class="text-ellipsis text-xs text-muted">matt</a>
                        </div>
                      </div>
                    </div>
                   

                </section>
                <footer class="footer bg-dark.dkerc">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
            
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>  
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/app.plugin.js"></script>
  <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>