
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="FusionBlog - Personal Blog Theme">
        
        <!-- Title -->
        <title>{{ env('APP_NAME') }}</title>
        <!-- Favicon -->
        <link rel="icon" href="{{asset('blog_assets/images/icon.png')}}">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="{{asset('blog_assets/google_fonts/css2d4c7.css?family=Noto+Sans+JP:wght@400;500;700;900&display=swap') }}">
        <link rel="stylesheet" href="{{asset('blog_assets/google_fonts/css2ffc0.css?family=Dancing+Script:wght@700&display=swap') }}">     
                
        <!-- Font Awesome Css -->
        <link rel="stylesheet" href="{{asset('blog_assets/css/font-awesome.min.css')}}">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{asset('blog_assets/css/bootstrap.min.css')}}">
        <!-- Slick Css -->
        <link rel="stylesheet" href="{{asset('blog_assets/css/slick.min.css')}}">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="{{asset('blog_assets/css/main.css')}}">
        
        <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif] -->
       
    </head>
    <body>
		
		<!-- ========== Start Loading ========== -->
		
        <div class="loading">
            <div class="loading-content">
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
                <div class="inner-item"></div>
            </div>
        </div>
		
		<!-- ========== End Loading ========== -->
		
		<!-- ========== Start Header ========== -->
		
		<header>
		    <div class="site-brand text-center">
				<div class="container">
				    <a href="#">
						<h2>{{ env('APP_NAME') }}</h2>
					</a>
                    <p class="site-description">A Captivating Personal Blog Theme</p>
				</div>
			</div>
            <div class="header-inner">
			    <div class="container">
				    <div class="row">
					    <div class="col-md-9 col-sm-8 col-xs-3 pos-s">
						    <button class="menu-toggle">
							    <span class="bar"></span>
							    <span class="bar"></span>
							    <span class="bar"></span>
						    </button>
					        <nav class="navbar navbar-default">
							    <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
										<li class="menu-item active">
											<a href="index.html">Home</a>
										</li>
										<li class="menu-item">
											<a href="category.html">Lifestyle</a>
										</li>
										<li class="menu-item">
											<a href="category.html">Travel</a>
										</li>
										<li class="menu-item">
											<a href="category.html">Fashion</a>
										</li>
                                        <li class="menu-item dropdown">
	                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Pages <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
	                                                <li class="menu-item"><a href="archive.html">Archive</a></li>
	                                                <li class="menu-item"><a href="author.html">Author</a></li>
	                                                <li class="menu-item"><a href="category.html">Category</a></li>
	                                                <li class="menu-item"><a href="tag.html">Tag</a></li>
	                                                <li class="menu-item"><a href="404.html">404</a></li>
                                                </ul>
                                         </li>
                                         <li class="menu-item">
											 <a href="about.html">About</a>
										 </li>
										<li class="menu-item">
											 <a href="contact.html">Contact</a>
										 </li>
                                      </ul>
							     </div>
					         </nav>
					    </div>
                        <div class="col-md-3 col-sm-4 col-xs-9 text-md-center">
							<div class="search-toggle">
							    <i class="fa fa-search"></i>
							</div>
							<ul class="social-icons-menu list-unstyled"><li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
					    </div>
				    </div>	
                </div>
            </div>
			<div class="search-area">
				<span class="close-search">
                    <i class="fa fa-close"></i>
				</span>
				<div class="display-table">
					<div class="display-table-cell">
					    <form role="search" method="get" class="search-form" action="#">
                            <input type="search" class="search-field" placeholder="Search..." name="s" required="required" />
	                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                        </form>
					</div>
				</div>
			</div>
        </header>
		
		<!-- ========== End Header ========== -->
		
		<!-- ========== Start Main Content ========== -->

        <section class="main-content">
			
			<!-- ========== Start Random Posts ========== -->
            <div class="random-posts">
                <div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/7.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Travel</a>
										</li>
									</ul>        
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">Traveling solo is awesome</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 20, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/8.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Culture</a>
										</li>
										<li>
											<a href="category.html">Lifestyle</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">The 100 Most Influential Books</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 20, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/9.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Food</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">10 Best Way to Styling Your Food</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 20, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/2.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Travel</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">Awesome Breathtaking Places</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 21, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/10.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Stories</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">5 ways to live your dreams</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 20, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/11.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Stories</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">Top 5 Winter Outfits</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 20, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">1</a>
                            </span>
                        </div>
                    </div>
                </div>
				<div class="item-box">
                    <div class="overlay">
                        <div class="post-thumbnail">
                            <a href="single.html">
                                <img class="img-responsive" src="{{asset('blog_assets/images/blog/3.jpg')}}" alt="" >
                            </a>
                        </div>
                        <div class="item-box-content">
                            <div class="categories">
								<div class="post-category">
                                    <ul class="post-categories">
	                                    <li>
											<a href="category.html">Food</a>
										</li>
									</ul>
								</div>
							</div>
                            <h3 class="post-title">
                                <a href="single.html">Easy Party Dessert Recipes</a>
                            </h3>
                            <div class="author-info">
                                <span class="author-avatar">
                                    <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                </span>
                                <span class="author-name">
									<a href="author.html">Leila Smith</a>
                                </span>
                            </div>
                            <span class="post-date">
                                <i class="fa fa-calendar"></i>
								<a href="archive.html">October 21, 2020</a>
                            </span>
                            <span class="post-comments">
                                <i class="fa fa-comments-o"></i>
								<a href="single.html#respond" class="comment-url">2</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
			<!-- ========== End Random Posts ========== -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/1.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Fashion</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">How To Dress in Red Style</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 21, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">3</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/2.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Travel</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">Awesome Breathtaking Places</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 21, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">2</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/3.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Food</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">5 Easy Party Dessert Recipes</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 21, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">2</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/4.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Fashion</a>
										    </li>
											<li>
											    <a href="category.html">Lifestyle</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">Five Awesome Fashion Trend</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 21, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">2</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/5.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Food</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">Sweet Breakfast in Bed</a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 21, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">2</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-sm-12">
                                <div class="post-item">
                                    <div class="post-thumbnail">
                                        <a href="single.html">
                                            <img class="img-responsive" src="{{asset('blog_assets/images/blog/6.jpg')}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <ul class="post-categories">
	                                        <li>
											    <a href="category.html">Culture</a>
										    </li>
											<li>
											    <a href="category.html">Stories</a>
										    </li>
									    </ul>
                                    </div>
                                    <div class="post-header">
                                        <h3 class="post-title">
                                            <a href="single.html">Things That Make You Feel Happy </a>
                                        </h3>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
											<a href="archive.html">October 20, 2020</a>
                                        </span>
                                        <span class="post-comments">
                                            <i class="fa fa-comments-o"></i>
											<a href="single.html#respond" class="comment-url">0</a>
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Sed maximus orci ac condi mentum efficitur. Suspendi potenti. Fusce diam felis, ullamcor aca felis sed, volutpat varius tortor. Ut eleifend justo sed quam blandit, vehicula ante hendrerit. Sed condimentum libero vel eros porta, eu malesuada …</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="author-info pull-left">
                                            <span class="author-avatar">
                                                <img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" >
                                            </span>
                                            <span class="author-name">
                                                <a href="author.html">Leila Smith</a>
                                            </span>
                                        </div>
                                        <div class="read-more pull-right">
                                            <a href="single.html">Continue Reading<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pagination-numbers">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="next page-numbers" href="#">
				                <span class="fa fa-angle-right"></span>
							</a>
						</div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="sidebar">
                            <div class="widget about-widget">
                                <h3 class="widget-title">About Me</h3>
                                <div class="author-image">
									<img class="img-responsive" src="{{asset('blog_assets/images/author.jpg')}}" alt="" height="107" width="107">
                                </div>
                                <div class="author-info">
                                    <h3 class="author-name">Hi I'm <span>Leila Smith</span></h3>
                                    <p class="author-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maxi mus orci ac condiorci mentum efficitur suspendi potentio fuscestas ut eleifend.</p>
                                </div>
                            </div>
                            <div class="widget categories-widget">
                                <h3 class="widget-title">Categories</h3>
                                <div class="category-item">
                                    <a href="category.html">Culture</a>
                                    <span class="count">(4)</span>
                                </div>
								<div class="category-item">
                                    <a href="category.html">Fashion</a>
                                    <span class="count">(4)</span>
                                </div>
								<div class="category-item">
                                    <a href="category.html">Food</a>
                                    <span class="count">(4)</span>
                                </div>
								<div class="category-item">
                                    <a href="category.html">Lifestyle</a>
                                    <span class="count">(6)</span>
                                </div>
								<div class="category-item">
                                    <a href="category.html">Stories</a>
                                    <span class="count">(4)</span>
                                </div>
								<div class="category-item">
                                    <a href="category.html">Travel</a>
                                    <span class="count">(6)</span>
                                </div>
                            </div>
							<div class="widget recent-posts-widget">
							    <h3 class="widget-title">Recent Posts</h3>
							    <div class="recent-post-item">
								    <div class="recent-post-widget-thumbnail">
									    <a href="single.html">
										     <img class="img-responsive" src="{{asset('blog_assets/images/blog/1.jpg')}}" alt="" >
									    </a>
								     </div>
								     <div class="recent-post-widget-content">
									     <h4 class="recent-post-widget-title">
										     <a href="single.html">How To Dress in Red Style</a>
									     </h4>
									     <div class="recent-post-widget-info">
										     <span class="author">
											     <a href="author.html">Leila Smith</a>
										     </span>
										     <span class="date">
											     <a href="archive.html">October 21, 2020</a>
										     </span>
									     </div>
								     </div>
							     </div>
							     <div class="recent-post-item">
								     <div class="recent-post-widget-thumbnail">
									     <a href="single.html">
										     <img class="img-responsive" src="{{asset('blog_assets/images/blog/2.jpg')}}" alt="" >
									     </a>
								     </div>
								     <div class="recent-post-widget-content">
									     <h4 class="recent-post-widget-title">
										     <a href="single.html">Awesome Breathtaking Places</a>
									     </h4>
									     <div class="recent-post-widget-info">
										     <span class="author">
											     <a href="author.html">Leila Smith</a>
										     </span>
										     <span class="date">
											     <a href="archive.html">October 21, 2020</a>
										     </span>
									     </div>
								     </div>
							   </div>
							   <div class="recent-post-item">
								   <div class="recent-post-widget-thumbnail">
									   <a href="single.html">
										   <img class="img-responsive" src="{{asset('blog_assets/images/blog/3.jpg')}}" alt="" >
									   </a>
								   </div>
								   <div class="recent-post-widget-content">
									   <h4 class="recent-post-widget-title">
										   <a href="single.html">5 Easy Party Dessert Recipes</a>
									   </h4>
									   <div class="recent-post-widget-info">
										   <span class="author">
											   <a href="author.html">Leila Smith</a>
										   </span>
										   <span class="date">
											   <a href="archive.html">October 21, 2020</a>
										   </span>
									   </div>
									</div>
							   </div>
							</div>
							<div class="widget newsletter">
							   <div class="widget widget_mc4wp_form_widget">
								   <h3 class="widget-title">Subscribe</h3>
								   <form class="mc4wp-form mc4wp-form-101" method="post" action="#">
									   <div class="mc4wp-form-fields">
										   <label>Fill your email below to subscribe to my newsletter</label>
										   <input type="email" name="EMAIL" placeholder="Your email address" required="">
										   <input type="submit" value="Subscribe">
									   </div>
								   </form>
								</div>
							</div>
							<div class="widget tags-widget">
								<h3 class="widget-title">Tags</h3>
								<ul class="tags-list list-unstyled">
									<li><a href="tag.html">Culture</a></li>
									<li><a href="tag.html">Explortion</a></li>
									<li><a href="tag.html">Fashion</a></li>
									<li><a href="tag.html">Food</a></li>
									<li><a href="tag.html">Lifestyle</a></li>
									<li><a href="tag.html">Mode</a></li>
									<li><a href="tag.html">Self-confidence</a></li>
									<li><a href="tag.html">Stories</a></li>
									<li><a href="tag.html">Travel</a></li>
									<li><a href="tag.html">Trends</a></li>
									<li><a href="tag.html">Trip</a></li>
								</ul>
							</div>
							<div class="widget follow-widget">
								<h3 class="widget-title">Follow Us</h3>
								<ul class="social-icons-menu list-unstyled">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								   <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								   <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								   <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								   <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
								 </ul>
							</div>
						</div>
					</div>
                </div>
				<div class="category-owl">
			        <div class="category-item">
				        <div class="category-bg" style="background-image: url('images/blog/4.jpg');"></div>
					    <div class="category-info">
						    <a href="category.html">Lifestyle</a>
						    <span class="count">6 Posts</span>
					    </div>
					    <div class="overlay">
						    <a href="category.html"><i class="fa fa-plus"></i></a>
					    </div>
					</div>
					<div class="category-item">
				        <div class="category-bg" style="background-image: url('images/blog/12.jpg');"></div>
						    <div class="category-info">
							    <a href="category.html">Stories</a>
							    <span class="count">4 Posts</span>
						    </div>
						    <div class="overlay">
							    <a href="category.html"><i class="fa fa-plus"></i></a>
						    </div>
					    </div>
					    <div class="category-item">
						    <div class="category-bg" style="background-image: url('images/blog/2.jpg');"></div>
						    <div class="category-info">
							    <a href="category.html">Travel</a>
							    <span class="count">6 Posts</span>
						    </div>
						    <div class="overlay">
							    <a href="category.html"><i class="fa fa-plus"></i></a>
						    </div>
					    </div>
					    <div class="category-item">
						    <div class="category-bg" style="background-image: url('images/blog/13.jpg');"></div>
						    <div class="category-info">
							    <a href="category.html">Culture</a>
							    <span class="count">4 Posts</span>
						    </div>
						    <div class="overlay">
							    <a href="category.html"><i class="fa fa-plus"></i></a>
						    </div>
					     </div>
					     <div class="category-item">
						     <div class="category-bg" style="background-image: url('images/blog/1.jpg');"></div>
						     <div class="category-info">
							    <a href="category.html">Fashion</a>
							    <span class="count">4 Posts</span>
						     </div>
						     <div class="overlay">
							     <a href="category.html"><i class="fa fa-plus"></i></a>
						     </div>
					     </div>
					     <div class="category-item">
						     <div class="category-bg" style="background-image: url{{asset('blog_assets/images/blog/3.jpg')}};"></div>
						     <div class="category-info">
							     <a href="category.html">Food</a>
							     <span class="count">4 Posts</span>
						     </div>
						     <div class="overlay">
							     <a href="category.html"><i class="fa fa-plus"></i></a>
						     </div>
					     </div>
				     </div>
			     </div>
		     </section>
		
		     <!-- ========== End Main Content ========== -->
		
		     <!-- ========== Start Scroll To Top ========== -->
		
		     <a href="#" class="scroll-top">
                 <span><i class="fa fa-arrow-up"></i></span>
             </a>
		
		     <!-- ========== End Scroll To Top ========== -->
		
		     <!-- ========== Start Footer ========== -->
		
			 <div class="footer text-center">
				 <div class="footer-info">
					 <div class="container">
						 <p class="copyright">
							 copyright &copy; 2020 {{ env('APP_NAME') }}, All Right Reserved
						 </p>
						 <div class="textwidget custom-html-widget">
							 <ul class="social-icons-menu list-unstyled">
								 <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								 <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								 <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								 <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								 <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							  </ul>
						 </div>
					 </div>
				 </div>
			 </div>

			 <!-- ========== End Footer ========== -->

			 <!-- ========== Js ========== -->

			 <!-- jQuery -->
			 <script src="{{asset('blog_assets/js/jquery-3.2.1.min.js')}}"></script>
			 <!-- Bootstrap Js -->
			 <script src="{{asset('blog_assets/js/bootstrap.min.js')}}"></script>
			 <!-- Slick Js -->
			 <script src="{{asset('blog_assets/js/slick.min.js')}}"></script>
			 <!-- Main Js -->
			 <script src="{{asset('blog_assets/js/main.js')}}"></script>
    </body>

</html>