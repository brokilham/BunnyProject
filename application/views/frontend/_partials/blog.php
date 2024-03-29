<div id="blog" class="box">
    <div class="header">
    <nav>
        <h2>
        <a href="#">
            <video loop autoplay muted playsinline class="nav-video">
            <source src='<?php echo base_url('assets/frontend/images/@stock/blog-8.optimized..faststart.mp4')?>' type='video/mp4' >
            </video>

            <svg width="600" height="338" viewBox="0 0 600 338" class="svg-graphic" id="svg-graphic-blog">
            <defs>
                <mask id="blog-mask" x="0" y="0" width="600" height="338" >
                <rect x="0" y="0" width="600" height="338" fill="#fff" />
                <path d="M396.2,186.5c-10.3-11.9-24.1-19.7-41.4-23.4c4.8-2.1,8.1-3.7,10-4.6c1.9-0.9,5.2-3.3,10-7c14.1-10.7,21.2-26.9,21.2-48.8
        c0-18.1-6.3-34.4-18.8-48.8c-6.9-7.7-17.3-13.9-31-18.4c-13.7-4.5-30.1-6.8-49-6.8H188.4v279.6h122.4c38.4,0,65.3-8.7,80.8-26
        c13.3-14.9,20-32.1,20-51.6C411.6,213.1,406.5,198.4,396.2,186.5z" />
                </mask>
            </defs>
            <!-- rect should be bigger than 337.5, vector shape should be smaller than 337.5 -->
            <!-- the 337.5 is calcutated by 600 / 16 * 9 -->
            <rect x="0" y="0" width="600" height="338" />
            </svg>              

            <span>Blog</span>
        </a>
        </h2>
    </nav>
    <div class="header-title invisible">
        <div class="row">
        <div class="large-8 columns">
            <h2>Blog</h2>
            <p>We build brands people trust. Our values and ideas bring people and brands together.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="content invisible">
        <div class="spacing"></div>
        <div class="posts" id="txt_posts">                      
        </div>
    </div>
    <div class="large-12 columns">
        <div class="four spacing"></div>
        <div class="four spacing"></div>
        <a href="" class="load-more">Load More</a>
        <div class="four spacing"></div>
    </div>
    </div>
</div>    
        </div>
    </div>
</div>
<script>
      $.ajax({
        url:'<?=base_url()?>index.php/blog/getall',
        method: 'GET',
        success: function(response){    
                //console.log(response);      
                var arr_data = JSON.parse(response);  
                var html = "";
                for (i = 0; i <  arr_data.listBlogPost.length; i++)
                {           

                     html += " <div class='large-6 columns'>"+
                                    "<div class='post'>"+
                                        "<div class='post-desc'>"+
                                            "<p class='info-author'>"+
                                                "<span>"+
                                                    "Posted by "+
                                                    "<a href='#'>"+arr_data.listBlogPost[i].CreatedBy+"</a>"+
                                                "</span>"+
                                            "</p>"+
                                            "<h2><a href='single.html'>"+arr_data.listBlogPost[i].Title+"</a></h2>"+
                                            "<p class='info-others'>"+
                                                "<span>"+arr_data.listBlogPost[i].CreatedDate+"</span>"+
                                                "<span>"+
                                                    "In <a href='#' rel='category tag'>"+arr_data.listBlogPost[i].Category+"</a>"+
                                                "</span>"+
                                                "<span>"+
                                                    "<a href='#'>0 Comments</a>"+
                                                "</span>"+
                                            "</p>"+
                                            "<div class='two spacing'></div>"+
                                        "</div>"+
                                        "<div class='post-image-wrap'>"+
                                            "<div class='post-image post-image-1'></div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>";    
                }   
            
                $("#txt_posts").html(html);
                //console.log(html)
        },
        error: function(response)
        {
            console.log(response);
        } 
    });
</script>