<div class="row">            

    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs nav-justified ">
                    <li class="active">
                        <a data-toggle="tab" href="#overview">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#job-history">
                            Job History
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            Skills
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#contacts" class="contact-map">
                            Contacts
                        </a>
                    </li>                            
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content tasi-tab">
                    <div id="overview" class="tab-pane active">

                        <div class="row">
                            <div class="col-md-4">
                               <div class="profile-pic text-center">
                                    <img src="images/lock_thumb.jpg" alt="pro_pic"/>
                               </div>
                            </div>

                            <div class="col-md-8">
                                <div class="profile-desk">
                                    <h1>
                                    <?php 
                                        $name = Auth::user()->first_name; 
                                        $name.= " ";
                                        $name.= Auth::user()->last_name;

                                        echo $name;
                                    ?>
                                    </h1>
                                    <span class="text-muted">Product Manager</span>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                                    </p>                                            
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center">Age: 21</h2>
                            </div>
                        </div>

                    </div>
            <!--          end of     OVERVIEW   -->


                    <div id="job-history" class="tab-pane ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-messages">
                                    <h3>Take a Tour</h3>
                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    13 January 2013
                                                </div>
                                                <div class="second bg-terques ">
                                                    Join as Product Asst. Manager
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->

                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    10 February 2012
                                                </div>
                                                <div class="second bg-red">
                                                    Completed Provition period and Appointed as a permanent Employee
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->

                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    2 January 2011
                                                </div>
                                                <div class="second bg-purple">
                                                    Selected Employee of the Month
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->

                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    4 March 2010
                                                </div>
                                                <div class="second bg-green">
                                                    Got Promotion and become area manager of California
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->
                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    3 April 2009
                                                </div>
                                                <div class="second bg-yellow">
                                                    Selected the Best Employee of the Year 2013 and was awarded
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->

                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    23 May 2008
                                                </div>
                                                <div class="second bg-terques">
                                                    Got Promotion and become Product Manager and was transper from Branch to Head Office. Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->
                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    14 June 2007
                                                </div>
                                                <div class="second bg-blue">
                                                    Height Sales scored and break all of the previous sales record ever in the company. Awarded
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->
                                    <!-- Comment -->
                                    <div class="msg-time-chat">
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <div class="first">
                                                    1 January 2006
                                                </div>
                                                <div class="second bg-green">
                                                    Take 15 days leave for his wedding and Honeymoon & Christmas
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /comment -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contacts" class="tab-pane ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="prf-contacts">
                                    <h2> <span><i class="fa fa-map-marker"></i></span> location</h2>
                                    <div class="location-info">
                                        <p>Postal Address<br>
                                            PO Box 16122 Collins Street West<br>
                                            Victoria 8007 Australia</p>
                                        <p>Headquarters<br>
                                            121 King Street, Melbourne<br>
                                            Victoria 3000 Australia</p>
                                    </div>
                                    <h2> <span><i class="fa fa-phone"></i></span> contacts</h2>
                                    <div class="location-info">
                                        <p>Phone	: +61 3 8376 6284 <br>
                                            Cell		: +61 3 8376 6284</p>
                                        <p>Email		: david@themebucket.net<br>
                                            Skype		: david.rojormillan</p>
                                        <p>
                                            Facebook	: https://www.facebook.com/themebuckets <br>
                                            Twitter	: https://twitter.com/theme_bucket
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="map-canvas"></div>
                            </div>
                        </div>
                    </div>
                    <div id="settings" class="tab-pane ">
                        <div class="position-center">
                            <div class="prf-contacts sttng">
                                <h2>  Personal Information</h2>
                            </div>
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"> Avatar</label>
                                    <div class="col-lg-6">
                                        <input type="file" id="exampleInputFile" class="file-pos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Company</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="c-name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Lives In</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="lives-in" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Country</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="country" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="prf-contacts sttng">
                                <h2> socail networks</h2>
                            </div>
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Facebook</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="fb-name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Twitter</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="twitter" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Google plus</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="g-plus" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Flicr</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="flicr" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Youtube</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="youtube" class="form-control">
                                    </div>
                                </div>

                            </form>
                            <div class="prf-contacts sttng">
                                <h2>Contact</h2>
                            </div>
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Address 1</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="addr1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Address 2</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="addr2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Phone</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Cell</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="cell" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Skype</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="skype" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>