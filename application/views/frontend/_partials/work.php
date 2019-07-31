<div id="works" class="box">
    <div class="header">
    <nav>
        <h2>
        <a href="#">
            <video loop autoplay muted playsinline class="nav-video">
            <source src='<?php echo base_url('assets/frontend/images/@stock/works-2.optimized..faststart.mp4')?>' type='video/mp4'>
            </video>

            <svg width="600" height="338" viewBox="0 0 600 338" class="svg-graphic" id="svg-graphic-works">
            <defs>
                <mask id="works-mask" x="0" y="0" width="600" height="338" >
                <rect x="0" y="0" width="600" height="338" fill="#fff" />
                <polygon points="440.9,33.8 432.4,33.8 331.4,33.8 329.1,33.8 268.6,33.8 268.5,34.1 167.7,34.1 167.6,33.8 
        102.5,33.8 196.5,303.2 241.2,303.2 299.8,115.9 358.8,303.2 403.5,303.2 497.5,33.8   "></polygon>
                </mask>
            </defs>
            <!-- rect should be bigger than 337.5, vector shape should be smaller than 337.5 -->
            <!-- the 337.5 is calcutated by 600 / 16 * 9 -->
            <rect x="0" y="0" width="600" height="338" />
            </svg>       

            <span>Works</span>
        </a>
        </h2>
    </nav>
    <div class="header-title invisible">
        <div class="row">
        <div class="large-8 columns">
            <h2>Works</h2>
            <p>We build brands people trust. Our values and ideas bring people and brands together.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="content invisible">
        <div class="works" id="txt_work">
            <!-- 
            <div class="large-4 medium-6 columns">
                <div class="item">
                    <a href="case-study.html">
                    <div class="circle-wrap">
                        <div class="media work-13"></div>
                    </div>
                    <div class="client-name">
                        <h2>Client</h2>
                        <h3>Twitter</h3>
                    </div>
                    <div class="project">
                        <h2>Project</h2>
                        <h3>New season</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="large-4 medium-6 columns">
                <div class="item">
                    <a href="case-study.html">
                    <div class="circle-wrap">
                        <div class="media work-14"></div>
                    </div>
                    <div class="client-name">
                        <h2>Client</h2>
                        <h3>Twitter</h3>
                    </div>
                    <div class="project">
                        <h2>Project</h2>
                        <h3>New season</h3>
                    </div>
                    </a>
                </div>
            </div>
            <div class="large-4 medium-6 columns">
                <div class="item">
                    <a href="case-study.html">
                    <div class="circle-wrap">
                        <div class="media work-15"></div>
                    </div>
                    <div class="client-name">
                        <h2>Client</h2>
                        <h3>Twitter</h3>
                    </div>
                    <div class="project">
                        <h2>Project</h2>
                        <h3>New season</h3>
                    </div>
                    </a>
                </div>
            </div>
            -->
          
        </div>
    </div>
</div>
<script>
      $.ajax({
        url:'<?=base_url()?>index.php/work/getall',
        method: 'GET',
        success: function(response){    
            console.log(response);      
                var arr_data = JSON.parse(response);  
                var html = "";
                for (i = 0; i <  arr_data.listWork.length; i++)
                {               
                    html += "   <div class='large-4 medium-6 columns'>"+
                                    "<div class='item'>"+
                                        "<a href='<?php echo site_url('/index.php/work_detail')?>'>"+
                                            "<div class='circle-wrap'>"+
                                                "<div class='media work-15'></div>"+
                                            "</div>"+
                                            "<div class='client-name'>"+
                                                "<h2>Client</h2>"+
                                                "<h3>"+arr_data.listWork[i].Client+"</h3>"+
                                            "</div>"+
                                            "<div class='project'>"+
                                                "<h2>Project</h2>"+
                                                "<h3>"+arr_data.listWork[i].Title+"</h3>"+
                                            "</div>"+
                                        "</a>"+
                                    "</div>"+
                                "</div>";
                }            
                $("#txt_work").html(html);
            
        },
        error: function(response)
        {
            console.log(response);
        } 
    });
</script>