@extends('admin.layouts.layout')
@section('content')

<div class="content">

    <!-- User profile -->
    <div class="row">
        <div class="col-lg-9">
            <div class="tabbable">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="activity">

                        <!-- Timeline -->
                        <div class="timeline timeline-left content-group">
                            <div class="timeline-container">

                                <!-- Video posts -->
                                <div class="timeline-row">
                                    <div class="timeline-icon">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="panel panel-flat timeline-content">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">Woodturner master</h6>
                                                    <div class="heading-elements">
                                                        <span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> Yesterday, 7:52 am</span>
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-arrow-down12"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                                <div class="panel-body">
                                                    <div class="video-container content-group">
                                                        <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                                    </div>

                                                    Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.
                                                </div>

                                                <div class="panel-footer">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-eye4 position-left"></i> 285</a></li>
                                                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> 12</a></li>
                                                    </ul>

                                                    <ul class="pull-right">
                                                        <li><a href="#">Read post <i class="icon-arrow-right14 position-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="panel panel-flat timeline-content">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title"><i class="icon-comment-discussion position-left"></i> <a href="#">Jason</a> commented:</h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-arrow-down12"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                                <div class="panel-body">
                                                    <div class="video-container content-group">
                                                        <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/133217402?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                                                    </div>

                                                    <blockquote>
                                                        <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                                                        <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /video posts -->

                            </div>
                        </div>
                        <!-- /timeline -->

                    </div>


                    <div class="tab-pane fade" id="schedule">

                        <!-- Available hours -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Available hours</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="plans" _echarts_instance_="1686429433942" style="-webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;"><div style="position: relative; overflow: hidden; width: 100px; height: 400px;"><div data-zr-dom-id="bg" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none;"></div><canvas width="100" height="400" data-zr-dom-id="0" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="400" data-zr-dom-id="1" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="100" height="400" data-zr-dom-id="_zrender_hover_" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><div class="echarts-tooltip" style="position: absolute; display: none; border-style: solid; white-space: nowrap; transition: left 0.4s ease 0s, top 0.4s ease 0s; background-color: rgba(0, 0, 0, 0.8); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font-family: Roboto, sans-serif; padding: 8px 12px; left: 267.5px; top: 122px;">Wednesday<br>Booked hours : 6<br>Available hours : 4</div></div></div>
                                </div>
                            </div>
                        </div>
                        <!-- /available hours -->


                        <!-- Calendar -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">My schedule</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <div class="schedule fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>November 2014</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-day-grid-container fc-scroller" style="height: 436px;"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2014-10-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-10-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-10-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-10-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-10-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-10-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2014-10-26">26</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2014-10-27">27</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2014-10-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2014-10-29">29</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2014-10-30">30</td><td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2014-10-31">31</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-01">1</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#EF5350;border-color:#EF5350"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-02">2</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-03">3</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-04">4</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-05">5</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-06">6</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-07">7</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-08">8</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-09">9</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-10">10</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-11">11</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-12">12</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-13">13</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-14">14</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-15">15</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="6"></td><td rowspan="6"></td></tr><tr><td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td rowspan="5"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-16"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-17"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-18"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-19"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-20"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-21"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-16">16</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-17">17</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-18">18</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-19">19</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-20">20</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-21">21</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-22">22</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#5C6BC0;border-color:#5C6BC0"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-23"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-24"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-25"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-26"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-27"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-28"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-23">23</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-24">24</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-25">25</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-26">26</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-27">27</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-28">28</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-29">29</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/" style="background-color:#FF7043;border-color:#FF7043"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-12-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-12-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-12-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-12-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-12-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2014-12-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-30">30</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2014-12-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2014-12-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2014-12-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2014-12-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2014-12-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-past" data-date="2014-12-06">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                            </div>
                        </div>
                        <!-- /calendar -->

                    </div>


                    <div class="tab-pane fade" id="settings">

                        <!-- Profile info -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Profile information</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <input type="text" value="Eugene" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Full name</label>
                                                <input type="text" value="Kopyov" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address line 1</label>
                                                <input type="text" value="Ring street 12" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address line 2</label>
                                                <input type="text" value="building D, flat #67" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>City</label>
                                                <input type="text" value="Munich" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>State/Province</label>
                                                <input type="text" value="Bayern" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>ZIP code</label>
                                                <input type="text" value="1031" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                                <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your country</label>
                                                <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                    <option value="germany" selected="selected">Germany</option> 
                                                    <option value="france">France</option> 
                                                    <option value="spain">Spain</option> 
                                                    <option value="netherlands">Netherlands</option> 
                                                    <option value="other">...</option> 
                                                    <option value="uk">United Kingdom</option> 
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-1fqr-container"><span class="select2-selection__rendered" id="select2-1fqr-container" title="Germany">Germany</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone #</label>
                                                <input type="text" value="+99-99-9999-9999" class="form-control">
                                                <span class="help-block">+99-99-9999-9999</span>
                                            </div>

                                            <div class="col-md-6">
                                                <label>Upload profile image</label>
                                                <div class="uploader bg-warning"><input type="file" class="file-styled"><span class="filename" style="user-select: none;">No file selected</span><span class="action" style="user-select: none;"><i class="icon-googleplus5"></i></span></div>
                                                <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /profile info -->


                        <!-- Account settings -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Account settings</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label>Current password</label>
                                                <input type="password" value="password" readonly="readonly" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>New password</label>
                                                <input type="password" placeholder="Enter new password" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <label>Repeat password</label>
                                                <input type="password" placeholder="Repeat new password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profile visibility</label>

                                                <div class="radio">
                                                    <label>
                                                        <div class="choice"><span class="checked"><input type="radio" name="visibility" class="styled" checked="checked"></span></div>
                                                        Visible to everyone
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
                                                        Visible to friends only
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
                                                        Visible to my connections only
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
                                                        Visible to my colleagues only
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label>Notifications</label>

                                                <div class="checkbox">
                                                    <label>
                                                        <div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
                                                        Password expiration notification
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
                                                        New message notification
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
                                                        New task notification
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <div class="checker"><span><input type="checkbox" class="styled"></span></div>
                                                        New contact request notification
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /account settings -->

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">

            <!-- User thumbnail -->
            <div class="thumbnail">
                <div class="caption text-center">
                    <h5 class="text-semibold no-margin">{{ $user->name }}<small class="display-block">{{ $user->role }}</small></h5>
                    <ul class="icons-list mt-15">
                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                        <li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /user thumbnail -->


            <!-- Navigation -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Navigation</h6>
                    <div class="heading-elements">
                        <a href="#" class="heading-text">See all →</a>
                    </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div class="list-group list-group-borderless no-padding-top">
                    <a href="#" class="list-group-item"><i class="icon-user"></i> My profile</a>
                    <a href="#" class="list-group-item"><i class="icon-cash3"></i> Balance</a>
                    <a href="#" class="list-group-item"><i class="icon-tree7"></i> Connections <span class="badge bg-danger pull-right">29</span></a>
                    <a href="#" class="list-group-item"><i class="icon-users"></i> Friends</a>
                    <div class="list-group-divider"></div>
                    <a href="#" class="list-group-item"><i class="icon-calendar3"></i> Events <span class="badge bg-teal-400 pull-right">48</span></a>
                    <a href="#" class="list-group-item"><i class="icon-cog3"></i> Account settings</a>
                </div>
            </div>
            <!-- /navigation -->

        </div>
    </div>
    <!-- /user profile -->


    <!-- Footer -->
    <div class="footer text-muted">
        © 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
    </div>
    <!-- /footer -->

</div>

@endsection