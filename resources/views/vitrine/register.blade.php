@extends('vitrine.layouts.master')



 @section('beforefiles')

 <meta charset="utf-8" />
      <title>register</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
      <link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
      <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
      <!-- END THEME LAYOUT STYLES -->

@endsection

 @section('content')
    <div style="margin: 0 auto; padding: 0">

    </div>
    <!-- page section-->
    <section class="pb-0" id="register-form">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                      <!-- BEGIN VALIDATION STATES-->
                      <div class="portlet light portlet-fit portlet-form ">
                          {{--<div class="portlet-title">--}}
                              {{--<div class="caption">--}}
                                  {{--<i class="icon-registered"></i>--}}
                                  {{--<span class="caption-subject font-red sbold uppercase">Subscription request</span>--}}
                              {{--</div>--}}

                          {{--</div>--}}
                          <div class="portlet-body">
                              <div>
                                  <video loop autoplay controls src="{{ asset('videos/test.mp4') }}"  height="400" style="margin: 0 auto"></video>
                              </div>
                              <!-- BEGIN FORM-->
                              <div class="row">
                                  <div class="col-md-6">

                                  </div>
                                  <div class="col-md-6">
                                      <form class="form-horizontal">
                                          <div class="form-body">
                                              {{ csrf_field() }}
                                              <div class="alert" v-bind:class="{ 'alert-danger': !result.success, 'alert-success': result.success }" v-show="result.show">
                                                  <button type="button" class="close" data-close="alert"></button> @{{ result.msg  }} </div>

                                              <div class="form-group"  v-bind:class="{'has-error' : errors.name}">
                                                  <label class="control-label col-md-4">Name
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <input type="text" name="name" data-required="1" class="form-control" v-model="form.name"/>
                                                      <span v-show="errors['name']" class="help-block"> field is required </span>
                                                  </div>
                                              </div>



                                              <div class="form-group" v-bind:class="{'has-error' : errors.surname}">
                                                  <label class="control-label col-md-4">Last Name
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <input type="text" name="surname" data-required="1" class="form-control"  v-model="form.surname" />
                                                      <span v-show="errors['surname']" class="help-block"> field is required </span>
                                                  </div>
                                              </div>


                                              <div class="form-group" v-bind:class="{'has-error' : errors.email}">
                                                  <label class="control-label col-md-4">Email
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <input name="email" type="email" class="form-control" v-model="form.email" />
                                                      <span v-show="errors['email']" class="help-block"> email is not valid  </span>
                                                  </div>
                                              </div>


                                              <div class="form-group" v-bind:class="{'has-error' : errors.country_id}">
                                                  <label class="control-label col-md-4">Country
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <select class="form-control" name="country_id" v-model="form.country_id">
                                                          @foreach ($countries as $country)
                                                              <option value="{{$country->id}}">{{$country->nameEn}}</option>
                                                          @endforeach
                                                      </select>
                                                      <span v-show="errors['surname']" class="help-block"> field is required </span>
                                                  </div>
                                              </div>


                                              <div class="form-group" v-bind:class="{'has-error' : errors.member_section_id}">
                                                  <label class="control-label col-md-4">Member section
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <select class="form-control" name="member_section_id" v-model="form.member_section_id">
                                                          @foreach ($membersections as $membersection)
                                                              <option value="{{$membersection->id}}">{{$membersection->name}}</option>
                                                          @endforeach

                                                      </select>
                                                      <span v-show="errors['member_section_id']" class="help-block"> field is required </span>
                                                  </div>
                                              </div>



                                              <div class="form-group" v-bind:class="{'has-error' : errors.architect_code}">
                                                  <label class="control-label col-md-4">Architect code
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-8">
                                                      <input name="architect_code" type="text" class="form-control" v-model="form.architect_code"/>
                                                      <span v-show="errors['architect_code']" class="help-block"> field is required </span>
                                                  </div>
                                              </div>



                                          </div>


                                          <div class="form-actions">
                                              <div class="row">
                                                  <div class="col-md-offset-3 col-md-9">
                                                      <button type="button" class="btn green" v-on:click="submit">Submit</button>
                                                      <button type="button" class="btn grey-salsa btn-outline" v-on:click="reset">Cancel</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                              <!-- END FORM-->
                          </div>
                      </div>
                      <!-- END VALIDATION STATES-->
                  </div>



            </div>
            <div class="cws_divider with-plus long color-line-1 mt-80"></div>
        </div>
    </section>
    <!-- ! page section -->
    <!-- page section services-->


    <!-- ! section news-->
    <!-- section parallax counter-->

    <!-- ! section parallax counter-->
    <!---->

@endsection

@section('script')
    <script>
        $(function () {
            $('.map-full-width.map-wrapper.mt-60.border-t')
                    .on('click',function(){
                        console.log('in')
                        $(this).find('iframe').addClass('clicked')})
                    .mouseleave(function(){
                        $(this).find('iframe').removeClass('clicked')});
        })
    </script>
@endsection


@section('afterfiles')


        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>

        <script src="{{ asset('assets/profile-assets/js/vue.js') }}" type="text/javascript"></script>

        <script>
            var registerForm = new Vue({
                el: '#register-form',
                data(){
                    return{
                        form: {
                            name: '',
                            surname: '',
                            email: '',
                            country_id: '',
                            member_section_id: '',
                            architect_code: ''
                        },
                        errors: {
                            name: false,
                            surname: false,
                            email: false,
                            country_id: false,
                            member_section_id: false,
                            architect_code: false
                        },
                        result: {
                            msg: '',
                            success : false,
                            show: false
                        }

                    }
                },
                methods: {
                    submit(){
                        var self = this;
                        if(self.validate()){
                            $.ajax({
                            url:'api/registeraction',
                            method:'post',
                            data: self.form
                        }).done(function (response) {
                            console.log(response)
                            if(response.success){
                                self.reset();
                                self.result.success = true;
                                self.result.msg = response.msg;
                                self.result.show = true
                            }else{
                                self.result.success = false;
                                self.result.msg = response.msg;
                                self.result.show = true
                            }
                        })
                        }

                    },
                    reset(){
                        var self = this;
                        self.form = {
                            name: '',
                            surname: '',
                            email: '',
                            country_id: '',
                            member_section_id: '',
                            architect_code: ''
                        }
                    },
                    validate(){
                        var self = this;
                        var valid = true;
                        /*check if empty*/
                        for(var key in self.form){
                            if (self.form[key] == ''){
                                self.errors[key] = true
                                valid = false;
                            }else{
                                self.errors[key] = false
                            }
                        }
                        /* check email */
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if(!re.test(self.form.email)){
                            self.errors['email'] = true
                            valid = false
                        }else{
                            self.errors['email'] = false
                            valid = true
                        }

                        return valid
                    }
                }
            })
        </script>

@endsection
