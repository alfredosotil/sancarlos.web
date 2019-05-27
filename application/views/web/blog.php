<div class="page-title parallax parallax1 ">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-title-content text-center">
            <div class="page-title-heading ">
                <h3 class="title"><a href="#">BLOG</a></h3>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li class="index.php"><a href="<?php echo base_url();?>">Inicio</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- /.page-title -->

<div class="flat-row main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-wrap fix-float-box">

                    <?php
                    if ($listar_grupo) {
                        foreach ($listar_grupo as $grupo) {
                           echo '<article class="post">';
                           echo '<div class="post-border">';
                           echo '<div class="featured-post">';
                           echo '<a href="'.base_url('Blog/Articulo/'.$grupo->idBlog.'_'.str_replace(" ", "_", $grupo->tituloBlog)).'"><img src="'.base_url('assets/img/blog/'.$grupo->fotoBlog).'" alt="image"></a>';
                           echo '</div>';
                           echo '<div class="content-post">';
                           echo '<h5 class="post-title">';
                           echo '<a href="'.base_url('Blog/Articulo/'.$grupo->idBlog.'_'.str_replace(" ", "_", $grupo->tituloBlog)).'">'.$grupo->tituloBlog.'</a>';
                           echo '</h5>';
                           echo '<div class="post-meta">';
                           echo '<ul>';
                           echo '<li class="time"><a href="#">'.$grupo->fechaBlog.'</a></li>';
                           echo '</ul>';
                           echo '</div>';
                           echo '<div class="post-content">';
                           $texto = substr(strip_tags($grupo->textoBlog), 0, 100);
                           echo '<p>'.$texto.'</p>';
                           echo '</div>';
                           echo '</div>';
                           echo '</div>';
                           echo '</article>';
                       }
                   }

                   ?>
                   



               </div>
           </div>
           <div class="pagination-wrap blog-pagination ">
            <ul class="flat-pagination">
             <?php
             if ($total_pagina>1) {
                for ($j=1; $j<=$total_pagina;$j++) { 
                  if ($pagina==$j) {
                    echo '<li class="active"><a >'.$pagina.'</a></li>';
                }else{
                    echo '<li><a href="'.base_url('Blog/Articulos').'/'.$j.'">'.$j.'</a></li>';
                }
            }
        }
        ?>

           <!--  <li><a href="#" title="" class="active">1</a></li>
            <li><a href="#" title="">2</a></li>
            <li><a href="#" title="">></a></li> -->


        </ul><!-- /.flat-pagination -->
    </div>
</div>
</div>
</div> <!-- /.main-content -->
