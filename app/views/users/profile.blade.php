@extends('users.dashboard')


@section('main')

<div class="row">            
    
    @if(Session::has('message'))
        <div class="col-md-12">
            <div class="alert alert-success alert-block fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <h4>
                    <i class="icon-ok-sign"></i>
                    Success!
                </h4>
                <p>{{ Session::get('message') }}</p>
            </div>
        </div>
    @endif

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
                        <a data-toggle="tab" href="#contacts" class="contact-map">
                            Contacts
                        </a>
                    </li>                            
                    <li>
                        <a data-toggle="tab" href="#settings">
                            Settings
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
                                        $uName=Auth::user()->UserInfo->first_name;
                                        $uName.=" ";
                                        $uName.=Auth::user()->UserInfo->last_name;
                                        echo $uName;
                                    ?>
                                    </h1>
                                    <span class="text-muted">
                                        <?php echo Auth::user()->designation; ?>
                                    </span>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor vestibulum imperdiet. Ut auctor accumsan erat, a vulputate metus tristique non. Aliquam aliquam vel orci quis sagittis.
                                    </p>                                            
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="">
                                Age:
                                <?php echo Auth::user()->UserInfo->age; ?>
                                </h4>
                            </div>
                            <div class="col-md-12">
                                <h4>
                                <?php echo Auth::user()->UserInfo->sex; ?>
                                </h4>
                            </div>
                            <div class="col-md-12">
                                <h4>Birthdate: 
                                <?php echo Auth::user()->UserInfo->birthdate; ?>
                                </h4>
                            </div>
                        </div>

                    </div>
            <!--          end of     OVERVIEW   -->


                    <div id="job-history" class="tab-pane ">
                        <div class="row">job history</div>
                    </div>


                    <div id="contacts" class="tab-pane ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="prf-contacts">
                                    <h2> <span><i class="fa fa-map-marker"></i></span> location</h2>
                                    <div class="location-info">
                                        <?php echo Auth::user()->UserInfo->address;?>
                                    </div>
                                    <h2> <span><i class="fa fa-phone"></i></span> contacts</h2>
                                    <div class="location-info">
                                        <p>Phone    : 
                                            <?php echo Auth::user()->UserInfo->phone;?>
                                        <p>
                                            
                                        <p>Email        : 
                                            <?php echo Auth::user()->UserInfo->email; ?>
                                        <p>
                                            
                                        <p>
                                            Facebook    : 
                                            <?php echo Auth::user()->UserProfile->fb_id;?>
                                        </p>

                                        <p>
                                            Github      :
                                            <?php echo Auth::user()->UserProfile->github_id; ?>
                                        </p>

                                        <p>
                                            LinkedIn    :
                                            <?php echo Auth::user()->UserProfile->linkedin_id; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="map-canvas"></div>
                            </div>
                        </div>
                    </div>


<!-- ++++++++++++++++++++++             SETTINGS            +++++++++++++++++++++++++++++++++ -->

                    <div id="settings" class="tab-pane ">
                        <div class="position-center">
                            <div class="prf-contacts sttng">
                                <h2>  Personal Information</h2>
                            </div>

                            
                            {{ Form::open(array('url'=>'profile', 'action'=>'UserController@editProfile', 'class'=>'form-horizontal','role'=>'form')) }}
                                
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"> Avatar</label>
                                    <div class="col-lg-6">
                                        <input type="file" id="exampleInputFile" class="file-pos">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">About Me</label>
                                    <div class="col-lg-10">


                                        <textarea rows="10" cols="30" class="form-control" id="about_me" name="about_me" >
                                        </textarea>

                                        <?php $abme = Auth::user()->UserProfile->about_me; ?>
                                        {{ Form::text('about_me',$abme,array('class'=>'form-control',
                                                                            'id'=>'about-me',
                                                                            'name'=>'about_me'
                                                                            )) }}

                                    </div>
                                </div>

                            

                            <div class="prf-contacts sttng">
                                <h2> socail networks</h2>
                            </div>

                            
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Facebook</label>
                                    <div class="col-lg-6">

                                        <?php $fbid = Auth::user()->UserProfile->fb_id; ?>
                                        {{ Form::text('fb-name',$fbid,array('class'=>'form-control', 
                                                                            'id'=>'fb-name',
                                                                            'type'=>'text'
                                                                            ))}}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Github</label>
                                    <div class="col-lg-6">
                                        
                                        <?php $git=Auth::user()->UserProfile->github_id; ?>
                                        {{ Form::text('github',$git,array('class'=>'form-control', 
                                                                            'id'=>'github',
                                                                            'type'=>'text'
                                                                            ))}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">LinkedIn</label>
                                    <div class="col-lg-6">

                                        <?php $lin=Auth::user()->UserProfile->linkedin_id; ?>
                                        {{ Form::text('linkedin',$lin,array('class'=>'form-control', 
                                                                            'id'=>'linkedin',
                                                                            'type'=>'text'
                                                                            ))}}
                                    </div>
                                </div>
                            {{Form::submit('Save',array('class'=>'btn btn-primary','type'=>'submit'))}}
                            {{ Form::close() }}


                            <div class="prf-contacts sttng">
                                <h2>Contact</h2>
                            </div>
                            <form role="form" class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Address</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="addr1" class="form-control"
                                            value= <?php echo Auth::user()->UserInfo->address; ?>
                                        >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Phone</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="phone" class="form-control"
                                            value= <?php echo Auth::user()->UserInfo->phone; ?>
                                        >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder=" " id="email" class="form-control"
                                            value= <?php echo Auth::user()->UserInfo->email; ?>
                                        >
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
                                        {{-- <button class="btn btn-primary" type="submit">Save</button> --}}
                                        {{-- Form::submit('Save',array('class'=>'btn btn-primary','type'=>'submit')) --}}
                                        
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>

                            {{-- </form> --}}
                            
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

@stop