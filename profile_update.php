<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile Update</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper">

      <header id="header">
        <div class="header-top-bar">

        <?php include 'header.php'; ?>
        </div>
        <!-- end .header-top-bar -->
      </header> <!-- end #header -->
      <div class="header-page-title clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Profile Update</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Profile Update</li>
          </ol>
        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content">
        <div class="container">
          <div class="page-content">
            <div class="">

              <!--<ul class="nav nav-tabs">-->
                <!--<li class="active"><a href="#candidate-profile">Porfile</a></li>-->
                <!--<li><a href="#candidate-cv">CV</a></li>-->
                <!--<li><a href="#candidate-documents">Documents</a></li>-->
                <!--<li><a href="#candidate-protfolio">Portfolio</a></li>-->
                <!--<li><a href="#candidate-blog">Blog</a></li>-->
                <!--<li><a href="#candidate-contacts">Contacts</a></li>-->
                <!--</ul>-->

              <div class="tab-content">
                <div class="tab-pane active mt20" id="candidate-profile">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">

                        <div class="upload-img-field">

                        </div>

                        <a class="btn btn-default" href="#">Upload a Picture</a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <form action="#">
                          <div class="title clearfix">
                            <h6>General Information</h6>
                            <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a>
                          </div> <!-- end .end .title -->

                          <ul class="list-unstyled candidate-registration">
                            <li><strong>Name:</strong><input type="text" placeholder="[first name] [last name]"></li>
                            <li><strong>Gender:</strong><input type="text" placeholder="[gender]"></li>
                            <li><strong>Date of Birth:</strong><input type="text" placeholder="[date of birth]"></li>
                            <li><strong>Residence:</strong><input type="text" placeholder="[residence]"></li>
                            <li><strong>Tel:</strong><input type="text" placeholder="[telephone number]"></li>
                            <li><strong>Mob:</strong><input type="text" placeholder="[mobile number]"></li>
                            <li><strong>Email:</strong><input type="text" placeholder="[email address]"></li>
                          </ul>
                        </form>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                    </div> <!-- end .3col grid layout -->

                    <div class="col-md-8">
                      <div class="job-reg-form">
                        <form action="#">
                          <div class="form-banner-button">
                            <div class="preview-import pull-left">
                              <a class="btn btn-green" href="#">Preview</a>
                            </div> <!-- end .preview-import -->
                          </div> <!-- end .form-banner-button -->

                          <div class="candidate-single-content">
                            <div class="row">
                              <div class="col-md-4">
                                <label><span>*</span>Skills</label>
                              </div> <!-- end .4th grid-layout -->

                              <div class="col-md-8">
                                <div class="candidate-skill-single clearfix">

                                  <div class="skill-edit-button">
                                    <a href="#" class="skill-edit btn-primary">Edit</a>
                                    <a href="#" class="skill-delete btn-danger">Delete</a>
                                    <a href="#" class="skill-save btn-success">Save</a>
                                  </div> <!-- end .sill-edit-button -->

                                  <div class="skill-edit-content">
                                    <div class="skill-selectbox mb10">
                                      <select>
                                        <option value="#">Select you Skill</option>
                                        <option value="#">php</option>
                                        <option value="#">css</option>
                                        <option value="#">html</option>
                                        <option value="#">javascript</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->

                                    <div class="skill-description mb10">
                                      <textarea name="skill-description" placeholder="Description"></textarea>
                                    </div> <!-- end .skill-description -->

                                    <div class="skill-progressbar">

                                      <p>
                                        <span class="mini-amount">0%</span>
                                        <input type="text" id="amount-first">

                                      </p>

                                      <div id="slider-skill-first"></div>
                                    </div> <!-- end .skill-progressbar -->

                                  </div> <!-- end .skill-edit-content -->
                                </div> <!-- end .candidate-skills-single -->

                                <div class="candidate-skill-single clearfix">

                                  <div class="skill-edit-button">
                                    <a href="#" class="skill-edit btn-primary">Edit</a>
                                    <a href="#" class="skill-delete btn-danger">Delete</a>
                                    <a href="#" class="skill-save btn-success">Save</a>
                                  </div> <!-- end .sill-edit-button -->

                                  <div class="skill-edit-content">
                                    <div class="skill-selectbox mb10">
                                      <select>
                                        <option value="#">Select you Skill</option>
                                        <option value="#">php</option>
                                        <option value="#">css</option>
                                        <option value="#">html</option>
                                        <option value="#">javascript</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->

                                    <div class="skill-description mb10">
                                      <textarea name="skill-description" placeholder="Description"></textarea>
                                    </div> <!-- end .skill-description -->

                                    <div class="skill-progressbar">

                                      <p>
                                        <span class="mini-amount">0%</span>
                                        <input type="text" id="amount-second">

                                      </p>

                                      <div id="slider-skill-second"></div>
                                    </div> <!-- end .skill-progressbar -->

                                  </div> <!-- end .skill-edit-content -->
                                </div> <!-- end .candidate-skills-single -->

                                <div class="candidate-skill-single clearfix">

                                  <div class="skill-edit-button">
                                    <a href="#" class="skill-edit btn-primary">Edit</a>
                                    <a href="#" class="skill-delete btn-danger">Delete</a>
                                    <a href="#" class="skill-save btn-success">Save</a>
                                  </div> <!-- end .sill-edit-button -->

                                  <div class="skill-edit-content">
                                    <div class="skill-selectbox mb10">
                                      <select>
                                        <option value="#">Select you Skill</option>
                                        <option value="#">php</option>
                                        <option value="#">css</option>
                                        <option value="#">html</option>
                                        <option value="#">javascript</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->

                                    <div class="skill-description mb10">
                                      <textarea name="skill-description" placeholder="Description"></textarea>
                                    </div> <!-- end .skill-description -->

                                    <div class="skill-progressbar">

                                      <p>
                                        <span class="mini-amount">0%</span>
                                        <input type="text" id="amount-third">

                                      </p>

                                      <div id="slider-skill-third"></div>
                                    </div> <!-- end .skill-progressbar -->

                                  </div> <!-- end .skill-edit-content -->
                                </div> <!-- end .candidate-skills-single -->

                                <div class="add-skill-button">
                                  <a class="btn btn-default" href="#">Add a Skill</a>
                                </div>
                              </div> <!-- end .8th grid layout -->
                            </div> <!-- end nasted .row -->
                          </div> <!-- end .candidate-single-content -->

                          <div class="save-cancel-button ml20">
                            <a href="#" class="btn btn-default">Save</a>
                            <a href="#" class="btn btn-black">Cancel</a>
                          </div> <!-- end .save-cancel-button -->
                        </form>
                      </div> <!-- end .candidate-reg-form -->
                    </div> <!-- end .9col grid layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .tabe pane -->


                <div class="tab-pane" id="candidate-cv">
                  <h3 class="tab-title">Profile</h3>
                  <p>Here goes the content</p>
                </div> <!-- end .tab-pane -->

                <div class="tab-pane" id="candidate-documents">
                  <h3 class="tab-title">Products/Services</h3>
                  <p>Here goes the content</p>
                </div> <!-- end .tab-pane -->

                <div class="tab-pane" id="candidate-protfolio">
                  <h3 class="tab-title">Portfolio</h3>
                  <p>Here goes the content</p>
                </div> <!-- end .tab-pane -->

              </div> <!-- end .tab-content -->
            </div> <!-- end .responsive-tabs.dashboard-tabs -->

          </div> <!-- end .page-content -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <?php include 'footer.php'; ?>

    </div> <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.tagsinput.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery-ui.js"></script>

      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
      <script src="js/scripts.js"></script>


      <script type="text/javascript">
        $('#tags').tagsInput();

        bkLib.onDomLoaded(function() {
          nicEditors.editors.push(
            new nicEditor().panelInstance(
              document.getElementById('myNicEditor')
            )
          );
        });



      </script>

    </body>
  </html>
