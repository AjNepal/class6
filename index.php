<?php include_once("includes/settings.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>STUTSMAN RURAL WATER</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="js/jb_fws.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    JBFWS = new JBFWS();
    JBFWS.init({
      width            : "100%",
      height           : "425px",
      showBigButtons   : 1, 
      showSmallButtons : 1, 
      slideSpeed       : 1000, 
      slideEffect      : "easeInOutExpo",
      slideDelay       : 600, 
      slideSpeed2      : 1000,
      slideEffect2     : "easeOutExpo",
      dragSlide        : 1,
      autoSlide        : 1,  
      autoSlideDelay   : 5000 
    });
  });
</script>
</head>

<body>
  <!--========================start-header===========================-->
  <div id="header">
    <div class="wrap">
      <div class="header_content">
        <?php include_once("templates/logo.php"); ?>
        <div class="top_nav f_rt">
          <ul>
            <li class="active"><a href="index.html">Home </a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="service_map.html">Service Map</a></li>
            <li><a href="board_of_directors.html">Board of Directors</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div class="cl"></div>
        </div>
        <div class="cl"></div>
      </div>
    </div>
  </div>
  <!--========================end-header=============================-->
  <!--========================start-banner===========================-->
  <div id="banner">
    <div class="wrap">
      <div class="banner_icon">
        <div class="banner_icon_here"><img src="images/baner_img.png" alt="" /></div>
      </div>
    </div>
    <div class="JB_FWS">
      <div class="JB_Container">
        <div class="JB_Slide">
          <div class="JB_Slide_Content">
            <div class="sider_info">
              <h2>Providing water throughout Stutsman County, Lamoure &amp; Kidder rural residents &amp; rural communities.</h2>
              <h6><a href="#"><img src="images/icon_servicemap_1.jpg" alt="View Our Service Map" />View Our Service Map</a></h6>
            </div>
          </div>
        </div>
        <div class="JB_Slide">
          <div class="JB_Slide_Content">
            <div class="sider_info">
              <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit pellentesque.</h2>
              <h6><a href="#"><img src="images/icon_servicemap_1.jpg" alt="View Our Service Map" />View Our Service Map</a></h6>
            </div>
          </div>
        </div>
        <div class="JB_Slide">
          <div class="JB_Slide_Content">
            <div class="sider_info">
              <h2>Curabitur vitae erat non enim porttitor euismod non sodales arcu. Curabitur orci turpis.</h2>
              <h6><a href="#"><img src="images/icon_servicemap_1.jpg" alt="View Our Service Map" />View Our Service Map</a></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="JB_Button_Left"></div>
      <div class="JB_Button_Right"></div>
      <div class="JB_Pagination">
        <div class="JB_Pages"></div>
      </div>
    </div>
  </div>
  <!--========================end-banner=============================-->
  <!--========================start-content==========================-->
  <div id="content">
    <div class="wrap">
      <div class="home_content">
        <?php include_once("templates/content.php"); ?>
        <div class="home_rt f_rt">
          <ul>
            <li><a href="service_map.html"><img src="images/icon_servicemap.jpg" alt="Service Areas/Map" />Service Areas/Map</a></li>
            <li><a href="about.html"><img src="images/icon_quality.jpg" alt="Water Quality Repor" />Water Quality Report</a></li>
            <li><a href="news.html"><img src="images/icon_news.jpg" alt="News Announcements" />News Announcements</a></li>
            <li><a href="contact.html"><img src="images/icon_contact.jpg" alt="Contact us" />Contact us</a></li>
          </ul>
        </div>
        <div class="cl"></div>
      </div>
    </div>
  </div>
  <!--========================end-content============================-->
  <!--========================start-footer===========================-->
  <div id="footer">
    <div class="footer_top">
      <div class="wrap">
        <div class="footer_top_lt f_lt">
          <h3>Signup for Our  Water Quality &amp; Status Updates</h3>
        </div>
        <div class="footer_top_rt f_rt">
          <form>
            <ul>
              <li><input type="text" onfocus="if(this.value=='enter email address') this.value='';" onblur="if(this.value=='') this.value='enter email address';" value="enter email address" class="signup_email_add" name="email" /></li>
              <li><input type="submit" value="Sign me up!" class="signup_smt" name="submit" /></li>
            </ul>
          </form>
          <div class="cl"></div>
        </div>
        <div class="cl"></div>
      </div>
    </div>
    <div class="footer_mid">
      <div class="wrap">
        <div class="footer_mid_content">
          <div class="footer_mid_lt f_lt">
            <div class="footer_mid_lt_top">
              <div class="footer_logo f_lt"><img src="images/footer_logo.jpg" alt="" /></div>
              <div class="footer_social_links f_rt">
                <h6>Follow us:</h6>
                <ul>
                  <li><a href="#"><img src="images/icon_fb.jpg" alt="facebook" /></a></li>
                  <li><a href="#"><img src="images/icon_tw.jpg" alt="twitter" /></a></li>
                </ul>
                <div class="cl"></div>
              </div>
              <div class="cl"></div>
            </div>
            <div class="footer_mid_lt_btm">
              <h3>Stutsman Rural Water</h3> 
              <h4>1234 Any Street SW</h4>
              <h4>City Name, ND 58701 <a href="#">(map)</a></h4>
              <h4>555-555-5555</h4>
              <h4><a href="mailto:info@stutsmanruralwater.com">info@stutsmanruralwater.com</a></h4>
            </div>
          </div>
          <div class="footer_mid_rt f_rt">
            <div class="footer_latest_news f_lt">
              <h2>Stutsman Latest News:</h2>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit pellentesque malesuada... <a href="#">Read More &raquo;</a>
<span>Feb 26, 2014</span></li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit pellentesque malesuada... <a href="#">Read More &raquo;</a>
<span>Feb 26, 2014</span></li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit pellentesque malesuada... <a href="#">Read More &raquo;</a>
<span>Feb 26, 2014</span></li>
              </ul>
            </div>
            <div class="footer_related_resources f_rt">
              <h2>Related Resources:</h2>
              <h3><a href="#">North Dakota Rural Water Systems Association</a></h3>
              <h3><a href="#">Garrison Diversion Conservancy District</a></h3>
              <h3><a href="#">North Dakota Department of Health</a></h3>
              <h3><a href="#">North Dakota State Water Commission</a></h3>
              <h3><a href="#">Minot Area Chamber of Commerce</a></h3>
              <h3><a href="#">Water Conservation Tips</a></h3>
              <h3><a href="#">Environmental Protection Agency</a></h3>
              <h3><a href="#">Affordable Water Utility Websites</a></h3>
            </div>
            <div class="cl"></div>
          </div>
          <div class="cl"></div>
        </div>
      </div>
    </div>
    <div class="footer_btm">
      <div class="wrap">
        <h2>Copyright &copy; 2013 Stutsman Rural Water. All Rights Reserved.</h2>
      </div>
    </div>
  </div>
  <!--========================end-footer=============================-->
</body>
</html>
