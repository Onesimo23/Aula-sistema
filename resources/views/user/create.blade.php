@extends('main')

@section('content')
<div class="page-content-inner">



            <h2>Account</h2>

            <nav class="responsive-tab mb-4">
                <li class="uk-active"><a href="#">Account</a></li>
                <li><a href="#">Billing</a></li>
                <li><a href="user-profile-edit.html">Setting</a></li>
            </nav>

            <div uk-grid="">
                <div class="uk-width-2-5@m">

                    <div class="uk-card-default rounded text-center p-4">

                        <div class="user-profile-photo  m-auto">
                            <img src="..\assets\images\avatars\home-profile.jpeg" alt="">
                        </div>

                        <h4 class="mb-2 mt-3"> {{$user->name}} </h4>
                        <p class="m-0"> </p>

                    </div>

                    <div class="uk-card-default rounded mt-5">
                        <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                            <h5 class="mb-0"> Progress 
                                <a href="#"> more </a>
                        </h5></div>
                        <hr class="m-0">
                        <div class="p-3">

                            <div class="uk-grid-small uk-flex-middle" uk-grid="">

                                <div class="uk-width-auto">
                                    <button type="button" class="btn btn-danger btn-icon-only">
                                        <span class="d-flex justify-content-center">
                                   <i class="icon-brand-angular icon-small"></i>
                                        </span>
                                      </button>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> Angular </h5>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:100%"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="uk-grid-small uk-flex-middle" uk-grid="">

                                <div class="uk-width-auto">
                                    <button type="button" class="btn btn-warning btn-icon-only">
                                        <span class="d-flex justify-content-center">
                                            <i class="icon-brand-html5 icon-small"></i>
                                        </span>
                                      </button>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> html5 </h5>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:35%"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="uk-grid-small uk-flex-middle" uk-grid="">

                                <div class="uk-width-auto">
                                    <button type="button" class="btn btn-primary btn-icon-only">
                                        <span class="d-flex justify-content-center">
                                            <i class="icon-brand-css3-alt icon-small"></i>
                                        </span>
                                      </button>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="mb-2"> css3 </h5>
                                    <div class="course-progressbar">
                                        <div class="course-progressbar-filler" style="width:65%"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="uk-width-expand@m">

                    <div class="uk-card-default rounded">
                        <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                            <h5 class="mb-0"> Account details 
                                <a href="#" uk-tooltip="title:Edit Account; pos: left"> <i class="icon-feather-settings"></i> </a>
                        </h5></div>
                        <hr class="m-0">
                        <div class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid="">
                            <div>
                                <h6 class="uk-text-bold"> Nome 
                                    <p> {{$user->name}} </p>
                            </h6></div>
                            
                            <div>
                                <h6 class="uk-text-bold"> Email
                                    <p> {{$user->email}} </p>
                            </h6></div>
                           

                        </div>
                    </div>

                    <div class="uk-card-default rounded mt-4">
                        <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                            <h5 class="mb-0"> Billing address </h5>
                            <a href="#" uk-tooltip="title: Edit Billing address; pos: left"> <i class="icon-feather-settings"></i> </a>
                        </div>
                        <hr class="m-0">
                        <div class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid="">
                            <div>
                                <h6 class="uk-text-bold"> Number 
                                    <p> 23, Block C2 </p>
                            </h6></div>
                            <div>
                                <h6 class="uk-text-bold"> Street 
                                    <p> Church Street </p>
                            </h6></div>
                            <div>
                                <h6 class="uk-text-bold"> City 
                                    <p> Los Angeles </p>
                            </h6></div>
                            <div>
                                <h6 class="uk-text-bold"> Postal Code 
                                    <p> 100065 </p>
                            </h6></div>
                            <div>
                                <h6 class="uk-text-bold"> State 
                                    <p> CA </p>
                            </h6></div>
                            <div>
                                <h6 class="uk-text-bold"> Country </h6>
                                <p> United States </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <!-- footer
           ================================================== -->
         
@endsection
