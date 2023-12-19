 @extends('client.layout.main.main')
 @section('contact')
     <div id="main">
         <div id="content" class="site-content">


             {{-- <section id="amy-page-header" class="amy-page-header">
                 <div class="amy-page-title amy-center">
                     <div class="amy-inner container">

                     </div>
                 </div>
                 <span class="amy-section-overlay"></span>
             </section> --}}

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
                                                     <span>Ngày đăng: {{ $detailblog->created_at}}</span>
                                                 </div>
                                                 <!-- Content -->
                                                 <div class="entry-content e-content" itemprop="description articleBody">



                                                     <p id="block-e77a294d-d103-4d17-9c56-05deca63c918">
                                                         {!! $detailblog->content !!} </p>
                                                 </div>
                                             </div>
                                             <div class="clearfix"></div>
                                         </div>

                                         <div class="entry-related" style="margin-top: 200px; margin-bottom: 50px">
                                             <div class="amy-related">
                                                 <div class="row">
                                                     @foreach ($blogs as $blog)
                                                         <article class="col-md-4">
                                                             <div class="entry-thumb"><img width="360" height="240"
                                                                     src="{{ asset('storage/images/' . $blog->thumbnail) }}"
                                                                     class="attachment-360x240 size-360x240 wp-post-image"
                                                                     alt="" loading="lazy"
                                                                     sizes="(max-width: 360px) 100vw, 360px" /></div>
                                                             <h3 class="entry-title p-name" itemprop="name headline"><a
                                                                     href="{{ route('detailblog', [$blog->slug]) }}"
                                                                     rel="bookmark" class="u-url url"
                                                                     itemprop="url">{{ $blog->title }}</a></h3>
                                                             <div class="entry-info">
                                                                 <span class="entry-date"
                                                                     style="color: grey">{{ $blog->created_at }}</span>
                                                                 {{-- <span>/</span> --}}
                                                                 {{-- <span class="entry-comment">0 Comment</span> --}}
                                                             </div>
                                                         </article>
                                                     @endforeach
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
