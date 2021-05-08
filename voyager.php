<!DOCTYPE html>
<!--[if IE 9]> <html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie ie8" lang="en"> <![endif]-->
<html lang="en">
  <!-- START HEADER: "DEFAULT" -->
  <head>
    <meta charset='utf-8'>
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <!-- / DYNAMIC: title = 'page_title' -->
    <title>Voyager - Interactive 3-D Model</title>
    <link href="../../assets-v2/stylesheets/manifest.css?1504218674589" rel="stylesheet" type="text/css" media="all" />
    <link href="../../assets-v2/stylesheets/print.css?1504218674589" rel="stylesheet" type="text/css" media="print" />
    <link href="../../assets/stylesheets/screen.css?1504218674589" rel="stylesheet" type="text/css" media="all" />
    <script src="../../assets-v2/javascripts/public_manifest.js?1504218674589" type="text/javascript"></script>
    <script src="../../assets-v2/javascripts/vendor/jquery.fancybox.js" type="text/javascript"></script>
    <script src="../../assets-v2/javascripts/vendor/jquery.fancybox-thumbs.js" type="text/javascript"></script>

    <style type="text/css">

        /* Overwrite style to always show menu */
        @media (min-width: 1200px) {
          .site_header_area .nav_area, .no-touch .site_header_area.fixed .nav_area, .touch .site_header_area.fixed .nav_area {
            display: block;
          }
        }

    </style>
    
  </head>
  <!-- / DYNAMIC: id = 'page_id' and class = 'theme' -->
  <body class='dark_background logged_out mobile_menu' id='voyager_spacecraft'>
    <!--[if lte IE 9]>
      <div class='browsehappy' style='font-size: 30px; color: white; position:absolute; top: 0; margin: 0; height: 3000px; width: 100%; background: #000; z-index: 10000; padding: 5%;'>
        You are using an
        <strong>outdated</strong>
        browser. Please
        <a href='http://browsehappy.com/'>click here</a>
        to upgrade or change your browser.
      </div>
    <![endif]-->
    <div id='main_container'>
      <div id='site_body'>
        <div class='site_header_area'>
            <header class='site_header'>
              <div class='brand_area'>
                <div class='brand1'>
                  <a class='nasa_logo' href='http://www.nasa.gov' title='visit nasa.gov'>NASA</a>
                </div>
                <div class='brand2'>
                  <div class='jpl_logo'>
                    <a href='http://www.jpl.nasa.gov/' id='jpl_logo' title='Jet Propulsion Laboratory'>Jet Propulsion Laboratory</a>
                  </div>
                  <div class='caltech_logo'>
                    <a href='http://www.caltech.edu/' id='caltech_logo' title='California Institute of Technology' target='_blank'>California Institute of Technology</a>
                  </div>
                </div>
                <img alt='NASA, California Institute of Technology, and Jet Propulsion Laboratory Page Header Title' class='print_only print_logo' src='/assets/images/logo_nasa_trio_black@2x.png'>
              </div>
              <div class='separator'></div>
              <div class='other_brand'>
                <div><a href="../../">Voyager</a></div>
              </div>
              <a class='visuallyhidden focusable' href='#main'>Skip Navigation</a>
              <div class='nav_area'>
                <a class='menu_button' href='javascript:void(0);' id='menu_button' title='menu button'>
                  <span class='menu_icon'>menu and search</span>
                </a>
              </div>
            </header>
          </div>
                  <div class='main_nav_overlay'>
            <div class='modal_menu'>
              <header class='site_header clearfix'>
                <div class='brand_area'>
                  <div class='brand1'>
                    <a class='nasa_logo' href='http://www.nasa.gov' title='NASA Website'></a>
                  </div>
                  <div class='brand2'>
                    <div class='jpl_logo'>
                      <a class='' href='http://www.jpl.nasa.gov/' id='jpl_logo_for_mobile_nav' title='Jet Propulsion Laboratory Website'>Jet Propulsion Laboratory</a>
                    </div>
                    <div class='caltech_logo'>
                      <a class='' href='http://www.caltech.edu/' id='caltech_logo' title='California Institute of Technology Website'>California Institute of Technology</a>
                    </div>
                  </div>
                  <img alt='NASA, California Institute of Technology, and Jet Propulsion Laboratory Page Header Title' class='print_only print_logo' src='/assets/images/logo_nasa_trio_black@2x.png'>
                </div>
                <div class='separator'></div>
                <div class='other_brand'>
                  <div><a href="../../" title="Return to Voyager home page">Voyager</a></div>
                </div>        
                <a class='modal_close' id='modal_close' title='close menu'>close menu</a>
                <div class='nav_area'>
                  <a class='menu_button modal_close' href='javascript:void(0);' id='menu_button' title='menu icon'>
                    <span class='menu_icon'>menu</span>
                  </a>
                </div>
              </header>

              <section class='navigation_area'>
                <div class='grid_layout'>
                  <div class='directory'>

                  <div class='nav_item'>
                      <a href="../../" title="Return to Voyager home page">
                        <h3 class='nav_title' >
                          home
                        </h3>
                      </a>
                    </div>

                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <a href="../../news/" title="Read news articles about the Voyager Mission by visiting this page.">
                        <h3 class='nav_title'>
                          news
                        </h3>
                      </a>
                    </div>
                    
                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <div class='arrow_box'>
                        <span class='arrow_down'></span>
                      </div>
                      <h3 class='nav_title'>
                        <a href="../../mission/" title="Learn more about the Voyager Mission by visiting this page.">mission</a>
                      </h3>
                      <ul class='subnav'>
                        <li>
                          <a href="../../mission/" title="Learn more about the Voyager Mission by visiting this page.">Overview</a>
                        </li>
                        <li>
                          <a href="../../mission/status/" title="Learn more about the Voyager Mission status by visiting this page.">Status</a>
                        </li>                        
                        <li>
                          <a href="../../mission/science/" title="Learn more about the science data the Voyagers' were collecting by visiting this page.">Science</a>
                        </li>
                        <li>
                          <a href="../../mission/timeline/" title="Learn more about the Voyager's mission timeline by visiting this page.">Timeline</a>
                        </li>
                        <li>
                          <a href="../../mission/spacecraft/" title="Learn more about the Voyager spacecraft by visiting this page">Spacecraft</a>
                        </li>                        
                      </ul>
                    </div>

                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <div class='arrow_box'>
                        <span class='arrow_down'></span>
                      </div>
                      <h3 class='nav_title'>
                        <a href="../../golden-record/" title="Learn more about Voyager's Golden Record by visiting this page.">golden record</a>
                      </h3>
                      <ul class="subnav">
                        <li>
                          <a href="../../golden-record/" title="Learn more about Voyager's Golden Record by visiting this page.">Overview</a>
                        </li>
                        <li>
                          <a href="../../golden-record/golden-record-cover/" title="Learn more about the Golden Record's cover by visiting this page.">The Cover</a>
                        </li>
                        <li>
                          <a href="../../golden-record/whats-on-the-record/" title="Learn more about the contents of Voyager's Golden Record by visiting this page.">The Contents</a>
                        </li>
                        <li>
                          <a href="../../golden-record/making-of-the-golden-record/" title="Learn more about the making of Voyager's Golden Record by visiting this page.">The Making of</a>
                        </li>
                      </ul>
                    </div>

                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <div class='arrow_box'>
                        <span class='arrow_down'></span>
                      </div>
                      <h3 class='nav_title'>
                        <a href="../../galleries/" title="Learn more about Voyager's Golden Record by visiting this page.">galleries</a>
                      </h3>
                      <ul class="subnav">
                        <li>
                          <a href="../../downloads/" title="In celebration of Voyagers' Interstellar voyage, we've added these Posters and Infographics for you to download, print, and share.">Downloads</a>
                        </li>
                      </ul>
                    </div>

                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <a href="../../mission/status/#where_are_they_now" title="Find out where the Voyager's spacecrafts are currently located in our solar system.">
                        <h3 class='nav_title'>
                          where are they now
                        </h3>
                      </a>
                    </div>

                    <div class='gradient_line'></div>
                    <div class='nav_item'>
                      <div class='arrow_box'>
                        <span class='arrow_down'></span>
                      </div>
                      <h3 class='nav_title'>
                        <a href="../../frequently-asked-questions/" title="Read through some of the most frequently asked questions about the Voyager spacecraft.">FAQs</a>
                      </h3>
                      <ul class='subnav'>
                        <li>
                          <a href="../../frequently-asked-questions/" title="Read through some of the most frequently asked questions about the Voyager spacecraft.">frequently asked questions</a>
                        </li>
                        <li>
                          <a href="../../frequently-asked-questions/fact-sheet/" title="Read about some of the facts about the Voyager spacecrafts.">fact sheet</a>
                        </li>
                        <li>
                          <a href="../../frequently-asked-questions/fast-facts/" title="Read about some quick facts about the Voyager spacecrafts.">Fast Facts</a>
                        </li>
                        <li>
                          <a href="../../frequently-asked-questions/ed-stone/" title="Q & A with Ed Stone">Q&A with Ed Stone</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </section>
            </div>
          </div>        <div id='page'>
          <!-- END HEADER: "DEFAULT" -->
          <!-- START CONTENT -->
          <link href="../../assets-v2/stylesheets/vendor/masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
          <script src="../../assets-v2/javascripts/webgl_manifest.js?1504218674589" type="text/javascript"></script>
          <script>
            $(window).on('load', function() {
              $.getJSON("../../assets-v2/json/scenes_voyager_spacecraft.json?v=1.2", {}, function(data) {
                if (!Detector.webgl) { // check to see if webgl context is available
                  Fallback["voyager"].init(data);
                  $('body').addClass('fallback_mode')
                  // Detector.addGetWebGLMessage();
                } else {
                  Scenes["voyager"].init(data);
                }
              });
            });
          </script>
          <div class='header_mask'></div>
          <div id='scene_container'>
            <div id='gl_layer'></div>
            <div id='gl_fallback_layer'></div>
            <div class='webgl_nav_container'>
              <nav class='webgl_nav webgl_nav_desktop'>
                <ul>
                  <li>
                    <span>BLANKET</span>
                    <img alt="image of voyager's thermal blanket" src='../../assets-v2/images/webgl/component_thumb_blanket.png'>
                  </li>
                  <li>
                    <span>CRS</span>
                    <img alt="image of voyager's cosmic ray subsystem" src='../../assets-v2/images/webgl/component_thumb_crs.png'>
                  </li>
                  <li>
                    <span>GOLDEN RECORD</span>
                    <img alt="image of voyager's golden record" src='../../assets-v2/images/webgl/component_thumb_golden_record.png'>
                  </li>
                  <li>
                    <span>HGA</span>
                    <img alt="image of voyager's high gain antenna" src='../../assets-v2/images/webgl/component_thumb_dish.png'>
                  </li>
                  <li>
                    <span>IRIS</span>
                    <img alt="image of voyager's infrared interferometer spectrometer and radiometer" src='../../assets-v2/images/webgl/component_thumb_miris.png'>
                  </li>
                  <li>
                    <span>ISS</span>
                    <img alt="image of voyager's imaging science subsystem" src='../../assets-v2/images/webgl/component_thumb_iss.png'>
                  </li>
                  <li>
                    <span>LECP</span>
                    <img alt="image of voyager's low energy charged particle" src='../../assets-v2/images/webgl/component_thumb_lecp.png'>
                  </li>
                  <li>
                    <span>MAG</span>
                    <img alt="image of voyager's magnetometer boom" src='../../assets-v2/images/webgl/component_thumb_mag.png'>
                  </li>
                  <li>
                    <span>PLS</span>
                    <img alt="image of voyager's plasma subsystem " src='../../assets-v2/images/webgl/component_thumb_pls.png'>
                  </li>
                  <li>
                    <span>PPS</span>
                    <img alt="image of voyager's photopolarimeter" src='../../assets-v2/images/webgl/component_thumb_pps.png'>
                  </li>
                  <li>
                    <span>PRA & PWA</span>
                    <img alt="image of voyager's planetary radio astronomy and plasma wave antenna" src='../../assets-v2/images/webgl/component_thumb_pra.png'>
                  </li>
                  <li>
                    <span>RTG</span>
                    <img alt="image of voyager's radioisotope thermal genereator" src='../../assets-v2/images/webgl/component_thumb_rtg.png'>
                  </li>
                  <li>
                    <span>SHUNT RADIATOR</span>
                    <img alt="image of voyager's shunt radiator and science calibration target" src='../../assets-v2/images/webgl/component_thumb_shunt_radiator.png'>
                  </li>
                  <li>
                    <span>UVS</span>
                    <img alt="image of voyager's ultraviolet specrometer" src='../../assets-v2/images/webgl/component_thumb_uvs.png'>
                  </li>
                </ul>
              </nav>
              <nav class='webgl_nav webgl_nav_mobile'>
                <select>
                  <option disabled selected>
                    Select an instrument
                  </option>
                  <option value='0'>
                    BLANKET
                  </option>
                  <option value='1'>
                    CRS
                  </option>
                  <option value='2'>
                    GOLDEN RECORD
                  </option>
                  <option value='3'>
                    HGA
                  </option>
                  <option value='4'>
                    IRIS
                  </option>
                  <option value='5'>
                    ISS
                  </option>
                  <option value='6'>
                    LECP
                  </option>
                  <option value='7'>
                    MAG
                  </option>
                  <option value='8'>
                    PLS
                  </option>
                  <option value='9'>
                    PPS
                  </option>
                  <option value='10'>
                    PRA & PWA
                  </option>
                  <option value='11'>
                    RTG
                  </option>
                  <option value='12'>
                    SHUNT RADIATOR
                  </option>
                  <option value='13'>
                    UVS
                  </option>
                </select>
              </nav>
            </div>
          </div>
          <!-- END CONTENT -->
                    <!-- START FOOTER: "DEFAULT" -->
        </div>
        <footer class='clearfix' id='site_footer'>
          <section class='upper_footer'>
            <div class='grid_layout'>
              <div class='footer_newsletter'>
                <h2>Get the JPL Newsletter</h2>
                <form action='//www.jpl.nasa.gov/signup/index.php' class='submit_newsletter' method="post">
                  <input class='email_field' name='email_field' onblur="this.placeholder = 'enter email address'" onfocus="this.placeholder = ''" placeholder='enter email address' type='email' value=''>
                  <input class='email_submit' type='submit' value=''>
                </form>
              </div>
              <div class='gradient_line_divider'></div>
              <div class='share'>
                <h2>Follow JPL</h2>
                <div class='social_icons'>
                  <!-- AddThis Button BEGIN -->
                  <div class='addthis_toolbox addthis_default_style addthis_32x32_style'>
                    <a addthis:userid='NASAJPL' class='addthis_button_facebook_follow icon'></a>
                    <a addthis:userid='NASAJPL' class='addthis_button_twitter_follow icon'></a>
                    <a addthis:userid='JPLnews' class='addthis_button_youtube_follow icon'></a>
                    <a addthis:userid='nasajpl' class='addthis_button_instagram_follow icon'></a>
                    <a class='icon all_icon' href='//www.jpl.nasa.gov/social'>
                      <span>All</span>
                    </a>
                  </div>
                  <script>
                    addthis_loader.init("//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5429eeee4e460927", {follow: true})
                  </script>
                </div>
              </div>
            </div>
            <div class='gradient_line'></div>
          </section>
          <section class='sitemap'>
            <div class='grid_layout'>
              <div class='sitemap_directory'>
                <div class='sitemap_block'>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      <a href="/">home</a>
                    </h3>
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      <a href="/news/">news</a>
                    </h3>
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      mission
                    </h3>
                    <ul class='subnav'>
                      <li>
                        <a href="/mission/">Overview</a>
                      </li>
                      <li>
                        <a href="/mission/status/">Status</a>
                      </li>
                      <li>
                        <a href="/mission/science/">Science</a>
                      </li>
                      <li>
                        <a href="/mission/timeline/">Timeline</a>
                      </li>
                      <li>
                        <a href="/mission/spacecraft/">Spacecraft</a>
                      </li>
                    </ul>
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      <a href="/downloads/">downloads</a>
                    </h3>
                  </div>
                </div>
                <div class='sitemap_block'>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      golden record
                    </h3>
                    <ul class='subnav'>
                      <li>
                        <a href="/golden-record/">Overview</a>
                      </li>
                      <li>
                        <a href="/golden-record/golden-record-cover/">The Cover</a>
                      </li>
                      <li>
                        <a href="/golden-record/whats-on-the-record/">The Contents</a>
                      </li>
                      <li>
                        <a href="/golden-record/making-of-the-golden-record/">The Making of</a>
                      </li>
                    </ul>
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      <a href="/galleries/">Galleries</a>
                    </h3>
                    <ul class='subnav'>
                      <li>
                        <a href="/galleries/videos/">Videos</a>
                      </li>
                      <li>
                        <a href="/galleries/making-of-the-golden-record/">Making of the Golden Record</a>
                      </li>
                      <li>
                        <a href="/galleries/images-on-the-golden-record/">Images on the Golden Record</a>
                      </li>
                      <li>
                        <a href="/galleries/images-voyager-took/">Galleries of Images Voyager Took</a>
                      </li>
                      <li>
                        <a href="/galleries/images-of-voyager/">Images of Voyager</a>
                      </li>
                      <li>
                        <a href="/galleries/illustrations/">Illustrations</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class='sitemap_block'>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      <a href="/mission/status/#where_are_they_now">Where Are They Now</a>
                    </h3>
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      FAQs
                    </h3>
                    <ul class='subnav'>
                      <li>
                        <a href="/frequently-asked-questions/">Frequently Asked Questions</a>
                      </li>
                      <li>
                        <a href="/frequently-asked-questions/fact-sheet/">Fact Sheet</a>
                      </li>
                      <li>
                        <a href="/frequently-asked-questions/fast-facts/">Fast Facts</a>
                      </li>
                      <li>
                        <a href="/frequently-asked-questions/ed-stone/">Q&A with Ed Stone</a>
                      </li>
                    </ul>                    
                  </div>
                  <div class='footer_sitemap_item'>
                    <h3 class='sitemap_title'>
                      Social
                    </h3>
                    <ul class='subnav'>
                      <li>
                        <a href="/share/">Personal Stories from the Mission</a>
                      </li>
                      <li>
                        <a href="/message/">Message to Voyager</a>
                      </li>
                    </ul>                    
                  </div>                  
                </div>
              </div>
            </div>
            <div class='gradient_line'></div>
          </section>
          <section class='lower_footer'>
            <div class='nav_container'>
              <nav>
                <ul>
                  <li>
                    <a href='http://www.nasa.gov/' target='_blank'>NASA</a>
                  </li>
                  |
                  <li>
                    <a href='http://www.caltech.edu/' target='_blank'>Caltech</a>
                  </li>
                  |
                  <li>
                    <a href='//www.jpl.nasa.gov/copyrights.php'>Privacy</a>
                  </li>
                  |
                  <li>
                    <a href='//www.jpl.nasa.gov/imagepolicy'>Image Policy</a>
                  </li>
                  |
                  <li>
                    <a href='//www.jpl.nasa.gov/faq.php'>FAQ</a>
                  </li>
                  |
                  <li>
                    <a href='//www.jpl.nasa.gov/contact_JPL.php'>Feedback</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class='credits'>
              <span class='credits_manager'>Site Manager: Jon Nelson</span>
              <span class='credits_webmaster'>Webmasters: Anil Natha, Luis Espinoza</span>
            </div>
          </section>		      
        </footer>
      </div>
    </div>
    <!-- Google Analytics -->
    <script id="_fed_an_ua_tag" type="text/javascript" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=NASA&subagency=JPL-Voyager&dclink=true&sp=search,s,q&sdor=false&exts=wav,au,tif,tiff,pdf"></script>
  </body>
  <!-- END FOOTER: "DEFAULT" --></html>