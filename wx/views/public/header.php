<header id="header">
    <!--logo start-->
    <div class="brand">
        <a href="index.php?r=index/index" class="logo">
            <span>Er</span>Gou</a>
    </div>
    <!--logo end-->
    <div class="toggle-navigation toggle-left">
        <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="user-nav">
        <ul>
            <li class="dropdown messages">
                <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                </button>
                <ul class="dropdown-menu alert animated fadeInDown">
                    <li>
                        <h1>You have
                            <strong>5</strong>new messages</h1>
                    </li>
                    <li>
                        <a href="#">
                            <div class="profile-photo">
                                <img src="../assets/img/avatar.gif" alt="" class="img-circle">
                            </div>
                            <div class="message-info">
                                <span class="sender">James Bagian</span>
                                <span class="time">30 mins</span>
                                <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="profile-photo">
                                <img src="../assets/img/avatar1.gif" alt="" class="img-circle">
                            </div>
                            <div class="message-info">
                                <span class="sender">Jeffrey Ashby</span>
                                <span class="time">2 hour</span>
                                <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="profile-photo">
                                <img src="../assets/img/avatar2.gif" alt="" class="img-circle">
                            </div>
                            <div class="message-info">
                                <span class="sender">John Douey</span>
                                <span class="time">3 hours</span>
                                <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="profile-photo">
                                <img src="../assets/img/avatar3.gif" alt="" class="img-circle">
                            </div>
                            <div class="message-info">
                                <span class="sender">Ellen Baker</span>
                                <span class="time">7 hours</span>
                                <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="profile-photo">
                                <img src="../assets/img/avatar4.gif" alt="" class="img-circle">
                            </div>
                            <div class="message-info">
                                <span class="sender">Ivan Bella</span>
                                <span class="time">6 hours</span>
                                <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                            </div>
                        </a>
                    </li>
                    <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>

            </li>
            <li class="profile-photo">
                <img src="../assets/img/avatar.png" alt="" class="img-circle">
            </li>
            <li class="dropdown settings">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php $session = Yii::$app->session; echo $session['language'];?>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-danager" id="user-inbox">5</span></a>
                    </li>
                    <li>
                        <a href="index.php?r=index/logout"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="toggle-navigation toggle-right">
                    <button type="button" class="btn btn-default" id="toggle-right">
                        <i class="fa fa-comment"></i>
                    </button>
                </div>
            </li>

        </ul>
    </div>
</header>
<!--sidebar left start-->
<aside class="sidebar">
    <div id="leftside-navigation" class="nano">
        <ul class="nano-content">
            <li class="active">
                <a href="index.php?r=index/index"><i class="fa fa-dashboard"></i><span>菜单</span></a>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>公众号管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="index.php?r=index/form_comp">添加公众号</a>
                    </li>
                    <li><a href="index.php?r=index/tables">公众号列表</a>
                    </li>
                    <li><a href="forms-mask.html">Mask</a>
                    </li>
                    <li><a href="forms-wizard.html">Wizard</a>
                    </li>
                    <li><a href="forms-multiple-file.html">Multiple File Upload</a>
                    </li>
                    <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>

                    <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                    </li>
                    <li><a href="ui-panels.html">Panels</a>
                    </li>
                    <li><a href="ui-buttons.html">Buttons</a>
                    </li>
                    <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
                    </li>
                    <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
                    </li>
                    <li><a href="ui-icons.html">Icons</a>
                    </li>
                    <li><a href="ui-grid.html">Grid</a>
                    </li>
                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                    </li>
                    <li><a href="ui-nestable-list.html">Nestable Lists</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li><a href="tables-data.html">Data Tables</a>
                    </li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Mail</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="mail-inbox.html">Inbox</a>
                    </li>
                    <li><a href="mail-compose.html">Compose Mail</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="charts-chartjs.html">Chartjs</a>
                    </li>
                    <li><a href="charts-morris.html">Morris</a>
                    </li>
                    <li><a href="charts-c3.html">C3 Charts</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="map-google.html">Google Map</a>
                    </li>
                    <li><a href="map-vector.html">Vector Map</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
            </li>
            <li class="sub-menu">
                <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="pages-blank.html">Blank Page</a>
                    </li>
                    <li><a href="pages-login.html">Login</a>
                    </li>
                    <li><a href="pages-sign-up.html">Sign Up</a>
                    </li>
                    <li><a href="pages-calendar.html">Calendar</a>
                    </li>
                    <li><a href="pages-timeline.html">Timeline</a>
                    </li>
                    <li><a href="pages-404.html">404</a>
                    </li>
                    <li><a href="pages-500.html">500</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</aside>
<!--sidebar left end-->