 <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title"><a href="#">BLOG</a></h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><a href="<?php echo base_url();?>">Inicio</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->
        
        <div class="main-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-wrap blog-single" >
                            <article class="main-single">
                                <div class="feature-post">
                                    <img src="<?php echo base_url('assets/img/blog/'.$blog->fotoBlog)?>" alt="standell" >
                                </div>
                                <div class="content-post">
                                    <h2 class="post-title">
                                        <a href="#"><?php echo $blog->tituloBlog;?></a>
                                    </h2>
                                    <div class="post-meta">
                                        <ul>
                                            <li class="time"><a href="#"><?php echo $blog->fechaBlog;?></a></li>
                                      

                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <?php echo $blog->textoBlog;?>
                                    </div>
                                </div>
                               
                                <!--<div class="wrap-author">
                                    <div class="author-info">

                                        <div class="author-avatar">
                                            <img src="images/blog/author.jpg" alt="image">
                                        </div>                  
                                        <div class="author-detail">
                                            <h6>WRITTEN BY TANISA KRUSH</h6>
                                            <p class="author-body">Mauris lectus justo, tempor ac auctor at, congue id erat. Pellentesque et massa odio. Fusce vel fermentum tortor, nec gravida ligula. Vivamus at malesuada tortor, in posuere ex. Phasellus pretium turpis non ipsum vestibulum, a finibus quam rhoncus. </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                   
                                </div>-->

                            </article>
                            <div class="clearfix"></div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div> <!-- /.main-blog-details -->