<section
class="elementor-section elementor-top-section elementor-element elementor-element-e615b68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="e615b68" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a503e51"
        data-id="a503e51" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
                data-id="46cb6f1" data-element_type="widget"
                data-widget_type="Amy_V2_Movie_Heading.default">
                <div class="elementor-widget-container">
                    <div class="amy-heading text-center has-seperator    seperator-1 ">
                        <header class="entry-header"><span class="seperator seperator-left"></span>
                            <h2 class="title-heading"><span class="title">Films</span>
                            </h2><span class="seperator seperator-right"></span>
                        </header>

                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f8ea438 elementor-widget elementor-widget-Amy_Movie_Grid"
                data-id="f8ea438" data-element_type="widget"
                data-widget_type="Amy_Movie_Grid.default">
                <div class="elementor-widget-container">
                    <div class="amy-shortcode amy-mv-grid layout1">



                        <div class="row amy-ajax-content">
                            @foreach ($film as $item)
                                    <div class="col-md-15 grid-item">
                                        <article class="entry-item" onclick="">
                                            <div class="entry-thumb">
                                                <img class=""
                                                    src="{{ asset('storage/images/' . $item->thumb) }}"
                                                    {{-- src="{{ asset("$item->thumb")}}" --}}
                                                    alt="Kubo and the Two Strings" />
                                                <div class="right-info">
                                                    @if ($item->status == 1)    
                                                    <span class="pg">
                                                         G</span>
                                                    @elseif ($item->status == 2)
                                                    <span class="pg">
                                                        Sắp ra mắt </span>
                                                    @endif
                                                </div>
                                                                
                                            </div>
                                            <div class="entry-content">
                                                <h4 class="entry-title">
                                                    {{ $item->name }}</h4>
                                                <div class="entry-date">
                                                    Thời gian chiếu:
                                                    {{ Carbon\Carbon::parse($item->premiere_date)->format('d/n/Y') }}
                                                </div>
                                                <div class="entry-button">
                                                    <a href="{{ $item->trailer }}">
                                                        <i aria-hidden="true" class="fa fa-play"></i>
                                                        Trailer </a>
                                                    <a href="{{ route('filmDetail', [$item->slug]) }}">
                                                        <i aria-hidden="true"
                                                            class="fa fa-exclamation"></i>
                                                        Chi tiết </a>
                                                </div>
                                            </div>
                                            <div class="pic-caption open-left">
                                                <h4 class="entry-title">
                                                    <a href="{{ route('filmDetail', [$item->slug]) }}">
                                                        {{ $item->name }}</a>
                                                </h4>
                                                <span class="pg">
                                                    G </span>
                                                <div class="desc-mv">
                                                    <p>
                                                        <span>Lịch chiếu: </span>
                                                        {{ Carbon\Carbon::parse($item->premiere_date)->format('d/n/Y') }}
                                                    </p>

                                                    <p>
                                                        <span>Thời lượng: </span>
                                                        {{ $item->duration }} phút
                                                    </p>

                                                    <p>
                                                        <span>Ngôn ngữ: </span>
                                                        {{ $item->country }}
                                                    </p>

                                                </div>


                                                <div class="entry-button">
                                                    <a href="{{ $item->trailer }}"
                                                        class="fancybox.iframe amy-fancybox">
                                                        <i aria-hidden="true" class="fa fa-play"></i>
                                                        Trailer </a>
                                                    <a href="{{ route('filmDetail', [$item->slug]) }}">

                                                        <i aria-hidden="true"
                                                            class="fa fa-exclamation"></i>
                                                        Chi tiết </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                            @endforeach





                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>