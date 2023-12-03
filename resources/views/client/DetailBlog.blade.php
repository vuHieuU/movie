 @extends('client.layout.main.main')
 @section('contact')
     <div id="main">
     <div id="content" class="site-content">


     <section id="amy-page-header" class="amy-page-header">
     <div class="amy-page-title amy-center">
     <div class="amy-inner container">
     {{-- <h1 class="page-title">
     {{ $detailblog->title }} </h1> --}}
     </div>
     </div>
     <span class="amy-section-overlay"></span>
     </section>

     <section class="amy-main-content single-post">
     <div class="container">
     <div class="row">

     <div class="col-md-12">
     <div class="page-content">

     <article id="post-55"
     class="post-55 post type-post status-publish format-standard has-post-thumbnail category-news">
     <div class="entry-top ">
     <div class="entry-thumb">
     </div>
     <div class="entry-bottom ">
     <!-- Post Meta -->
     <div class="entry-meta">
     </div>
     <div class="entry-left">
     <h1 class="entry-title p-name" itemprop="name headline">
     {{ $detailblog->title }}</h1>
     <div>
     <span>Ngày đăng: {{ $detailblog->created_at->format('d/m/Y') }}</span>
     </div>
     <!-- Content -->
     <div class="entry-content e-content" itemprop="description articleBody">



     <p id="block-e77a294d-d103-4d17-9c56-05deca63c918">
     {!! $detailblog->content !!} </p>
     </div>
     </div>
     <div class="clearfix"></div>
     </div>
     {{-- <!-- Post Tag -->
	<div class="entry-info">
		<div class="tag-box">
			<span class="top-corner"></span>
					</div>
		<div class="entry-share">
			<label>Share:</label>
					</div>
		<div class="clearfix"></div>
	</div> --}}

     <!-- Related Post -->
     <div class="entry-related">
     <h3>Related Article</h3>
     <div class="amy-related">
     <div class="row">
     <article class="col-md-4">
     <div class="entry-thumb"><img width="360" height="240"
     src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
     class="attachment-360x240 size-360x240 wp-post-image"
     alt="" loading="lazy"
     srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-300x200.jpg 300w"
     sizes="(max-width: 360px) 100vw, 360px" /></div>
     <h3 class="entry-title p-name" itemprop="name headline"><a
     href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/six-book-to-film-adaptations-to-get-excited-about-this-autumn/"
     rel="bookmark" class="u-url url" itemprop="url">Six
     book-to-film adaptations to get excited about this
     autumn</a></h3>
     <div class="entry-info">
     <span class="entry-date">April 28, 2022</span>
     <span>/</span>
     <span class="entry-comment">0 Comment</span>
     </div>
     </article>

     <article class="col-md-4">
     <div class="entry-thumb"><img width="360" height="240"
     src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
     class="attachment-360x240 size-360x240 wp-post-image"
     alt="" loading="lazy"
     srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-300x200.jpg 300w"
     sizes="(max-width: 360px) 100vw, 360px" /></div>
     <h3 class="entry-title p-name" itemprop="name headline"><a
     href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/the-beatles-eight-days-a-week-the-touring/"
     rel="bookmark" class="u-url url" itemprop="url">The
     Beatles: Eight Days a Week – The Touring</a></h3>
     <div class="entry-info">
     <span class="entry-date">April 28, 2022</span>
     <span>/</span>
     <span class="entry-comment">0 Comment</span>
     </div>
     </article>

     <article class="col-md-4">
     <div class="entry-thumb"><img width="360" height="240"
     src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
     class="attachment-360x240 size-360x240 wp-post-image"
     alt="" loading="lazy"
     srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-300x200.jpg 300w"
     sizes="(max-width: 360px) 100vw, 360px" /></div>
     <h3 class="entry-title p-name" itemprop="name headline"><a
     href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/doctor-strange-assembles-with-the-avengers/"
     rel="bookmark" class="u-url url" itemprop="url">Doctor
     Strange assembles with the Avengers</a></h3>
     <div class="entry-info">
     <span class="entry-date">April 28, 2022</span>
     <span>/</span>
     <span class="entry-comment">0 Comment</span>
     </div>
     </article>

     </div>
     </div>
     <div class="clearfix"></div>
     </div>

     </article>
     </div>
     </div>

     </div>
     </div>
     </section>

     </div>
     </div>
 @endsection
