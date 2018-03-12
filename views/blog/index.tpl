<!--    =====================================================================
            BARRA NEGRA DEL TEMPLATE (BLOG)
        =====================================================================-->
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--    ======================================================================= 
         ***************            ==== FIN ===                ***************
        =====================================================================-->                        

<!--    ======================================================================= 
                            COMIENZO DEL CONTENEDOR 
        =====================================================================-->                        

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <article>
                                    <div class="post-image">
                                            <div class="post-heading">
                                                    <h3><a href="#">This is an example of standard post format</a></h3>
                                            </div>
                                            <img src="{$_layoutParams.root}public/img/blog/img1.jpg" alt="" />
                                    </div>
                                    <p>
                                             Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                                    </p>
                                    <div class="bottom-article">
                                            <ul class="meta-post">
                                                    <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                                                    <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                                                    <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                                            </ul>
                                            <a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                                    </div>
                    </article>
                    <div id="pagination">
                            <span class="all">Page 1 of 3</span>
                            <span class="current">1</span>
                            <a href="#" class="inactive">2</a>
                            <a href="#" class="inactive">3</a>
                    </div>
                                    <br><br>
                                    
{* FORMULARIO DEL BLOG DE LA PAGINA *}
{if $_acl->permiso("admin_access")}
<!--    ======================================================================= 
                                   CONMIENSO DEL FORMULARIO 
        =====================================================================-->                        
<br>
<div class="row">
    <div class="col-lg-12">
        <form action="action" method="POST" enctype="multipart/form-data" class="form-horizontal text-left" >
            <fieldset>
                <legend class="text-center header">PUBLICAR</legend>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-11">
                        <input id="fname" name="tema" type="text" placeholder="Tema" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                    <div class="col-md-11">
                        <select class="form-control" name="categoria" id="categoria">
                            <option value="0">Seleccionar</option>
                            <option value="1">Sofware</option>
                            <option value="2">Redes</option>
                            <option value="3">Otros</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    
                </div>
                <div class="form-group">
                    <span class="col-md-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-11">
                        <textarea class="form-control" id="cuerpo" name="cuerpo" placeholder="INGRESE EL CUERPO DE LA PUBLICACION" rows="7"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 col-md-offset-1">
                        <label class="btn btn-primary btn-lg" for="my-file-selector">
                            <input id="my-file-selector" type="file" style="display:none;">
                             IMAGEN
                        </label>
                        <button type="submit" class="btn btn-primary btn-lg">GUARDAR</button>
                        
                    </div>
                    
                        
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!--    ======================================================================= 
                                    FIN DELFORMULARIO
        =====================================================================-->                        

 {/if}
            </div>
            <div class="col-lg-4">
                    <aside class="right-sidebar">
                    <div class="widget">
                            <form class="form-search">
                                    <input class="form-control" type="text" placeholder="Search..">
                            </form>
                    </div>
                    <div class="widget">
                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">
                                    <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
                                    <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
                                    <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
                                    <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
                                    <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
                            </ul>
                    </div>
                    <div class="widget">
                            <h5 class="widgetheading">Latest posts</h5>
                            <ul class="recent">
                                    <li>
                                    <img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                    <p>
                                             Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                    </li>
                                    <li>
                                    <a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                                    <p>
                                             Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                    </li>
                                    <li>
                                    <a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                                    <h6><a href="#">Et mei iusto dolorum</a></h6>
                                    <p>
                                             Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                    </li>
                            </ul>
                    </div>
                    <div class="widget">
                            <h5 class="widgetheading">Popular tags</h5>
                            <ul class="tags">
                                    <li><a href="#">Web design</a></li>
                                    <li><a href="#">Trends</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Internet</a></li>
                                    <li><a href="#">Tutorial</a></li>
                                    <li><a href="#">Development</a></li>
                            </ul>
                    </div>
                    </aside>
            </div>
        </div>
    
    <div class="row">
        <div class="col-lg-12">
            
        </div>        
    </div>
</section>
<!--    ======================================================================= 
                                    FIN DEL CONTENEDOR
        =====================================================================-->                        
