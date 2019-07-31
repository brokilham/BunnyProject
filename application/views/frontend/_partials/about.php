<div id="about" class="box">
    <div class="header">
        <nav>
            <h2>
            <a href="#" onclick="">
                <video loop autoplay muted playsinline class="nav-video"  preload>
                <source src='<?php echo base_url('assets/frontend/images/@stock/about-19.optimized..faststart.mp4')?>' type='video/mp4'>
                </video>
                <svg width="600" height="338" viewBox="0 0 600 338" class="svg-graphic" id="svg-graphic-about">
                <defs>
                    <mask id="about-mask" x="0" y="0" width="600" height="338" >
                    <rect x="0" y="0" width="600" height="338" fill="#fff" />
                    <polygon points="330.2,28.7 269.8,28.7 149,308.3 215.4,308.3 241.4,247.9 358.6,247.9 384.6,308.3 451,308.3  " />            
                    </mask>
                </defs>
                <!-- rect should be bigger than 337.5, vector shape should be smaller than 337.5 -->
                <!-- the 337.5 is calcutated by 600 / 16 * 9 -->
                <rect x="0" y="0" width="600" height="338" />
                </svg>
                <span>About</span>
            </a>
            </h2>
        </nav>
        <div class="header-title invisible">
            <div class="row">
            <div class="large-8 columns">
                <h2>About</h2>
                <p>We build brands people trust. Our values and ideas bring people and brands together.</p>
            </div>
            </div>

        </div>
        </div>
        <div class="content invisible">
        <div class="two spacing"></div>
        <div class="full full-screen">
            <div class="large-12 columns">
            <h2 class="colored-title">Culture.</h2>
            <div id="txt_about"></div>
            <!--
            <p class="big-text" id="txt_about">
            We are professional, but we are informal and open. <br>
            We create the most powerful values. <br>
            We know what's worth working for, even the smalllest details. <br>
            We know what our clients need and do best for them. <br>
            We’re thinkers and problem solvers. <br>
            We like and enjoy what we do. <br>
            We are in a creative and collaborative environment.<br>
            We always love the unknow, love the new ideas.<br>
            We are here to welcome you, work with us.
            </p>-->
            <div class="spacing"></div>
            <p class="action-hint">
                <span class="scroll-down">
                Scroll down to know more about us.
                <i class="icon-arrows-slim-down"></i>
                </span>
            </p>
            <div class="circle-1">
            </div>
            <div class="circle-2">
            </div>
            <div class="circle-3">
            </div>
            <div class="triangle-1">
            </div>
            </div>
        </div>
    </div>
</div>
<script>
 $(document).ready(function(){
    $.ajax({
        url:'<?=base_url()?>index.php/about/getall',
        method: 'GET',
        success: function(response){          
                var arr_data = JSON.parse(response);  
                var html = " <p class='big-text'>";    
                for (i = 0; i <  arr_data.listAbout.length; i++)
                {
                    html += arr_data.listAbout[i].Description + "<br>";
                    //console.log(arr_data.listAbout[i].Description);
                }  
                html += " </p>"; 
                $("#txt_about").html(html);
            
        },
        error: function(response)
        {
            console.log(response);
        } 
    });
 });
</script>