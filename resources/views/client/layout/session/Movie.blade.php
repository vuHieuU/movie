<div class="amy-movie-list">
    <div class="amy-movie-items">
        @php
        $displayedNames = [];
    @endphp
        @foreach ($films as $item)
        @if (!in_array($item->film->name, $displayedNames))
        @php
            $displayedNames[] = $item->film->name;
        @endphp
            <div class="amy-movie-item entry-item">
                <div class="amy-movie-item-inner">
                    <div
                        class="amy-movie-item-front">
                        <div
                            class="amy-movie-item-poster">
                            <a  class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox"
                                href="{{ $item->film->trailer }}">
                                <img class=""
                                    src="{{ asset('storage/images/' . $item->film->thumb) }}"
                                    alt="Kubo and the Two Strings" />
                            </a>
                            <span
                                class="amy-movie-field-imdb">8.5</span>
                        </div>
                    </div>

                    <div
                        class="amy-movie-item-back">
                        <div
                            class="amy-movie-item-back-inner">
                            <div
                                class="amy-movie-item-content">
                                <h3
                                    class="amy-movie-field-title">
                                    <a
                                        href="{{ route('filmDetail', [$item->id]) }}">{{ $item->film->name }}</a>
                                </h3>

                                <div
                                    class="amy-movie-item-meta">
                                    <span
                                        class="amy-movie-field-mpaa">G</span>
                                    <span
                                        class="amy-movie-field-duration"><i
                                            class="fa fa-clock-o"></i>{{ $item->film->duration }}
                                        minutes</span>
                                </div>

                                <div
                                    class="amy-movie-field-desc">
                                    <p>{{ $item->film->description }}
                                    </p>
                                </div>
                                <div
                                    class="amy-movie-custom-field-group amy-movie-field-language">
                                    <label
                                        class="amy-movie-custom-field-label">Language:</label>
                                    <div
                                        class="amy-movie-custom-field-content">
                                        {{ $item->film->language }}
                                    </div>
                                </div>


                                <div
                                    class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                    <label
                                        class="amy-movie-custom-field-label">Actor:</label>
                                    <div
                                        class="amy-movie-custom-field-content">

                                        <a
                                            href="">
                                            {{ $item->film->actor }}</a>
                                    </div>
                                </div>
                                <div
                                    class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                    <label
                                        class="amy-movie-custom-field-label">Director:</label>
                                    <div
                                        class="amy-movie-custom-field-content">

                                        <a
                                            href="">{{ $item->film->director }}</a>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="amy-movie-item-button">
                                <a href=" {{ $item->film->trailer }}"
                                    class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                    <i
                                        class="fa fa-play"></i>Trailer</a>
                                <a class="amy-btn-icon-text link-detail"
                                    href="detail_film/{{ $item->id }}">
                                    <i
                                        class="fa fa-info"></i>Detail</a>
                                <span
                                    class="amy-btn-showtimes showtime-btn">
                                    Showtime </span>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry-showtime as">
                    <div
                        class="showtime-item single-cinema">
                        <div class="st-item">
                            <div class="st-title">
                                <label>April 6,
                                    2022</label><a
                                    href="#"
                                    class="amy-buy-ticket"
                                    target="_blank">Buy
                                    Ticket</a>
                            </div>
                            <ul>
                                <li>12h30</li>
                                <li> 15h40</li>
                                <li> 19h20</li>
                            </ul>
                        </div>
                        <div class="st-item">
                            <div class="st-title">
                                <label>April 13,
                                    2022</label><a
                                    href="#"
                                    class="amy-buy-ticket"
                                    target="_blank">Buy
                                    Ticket</a>
                            </div>
                            <ul>
                                <li>10h30</li>
                                <li> 15h20</li>
                                <li> 20h10</li>
                                <li> 23h50</li>
                            </ul>
                        </div>
                        <div class="st-item">
                            <div class="st-title">
                                <label>May 4,
                                    2022</label><a
                                    href="#"
                                    class="amy-buy-ticket"
                                    target="_blank">Buy
                                    Ticket</a>
                            </div>
                            <ul>
                                <li>09h20</li>
                                <li> 13h10</li>
                                <li> 17h20</li>
                            </ul>
                        </div>
                        <div class="st-item">
                            <div class="st-title">
                                <label>May 6,
                                    2022</label><a
                                    href="#"
                                    class="amy-buy-ticket"
                                    target="_blank">Buy
                                    Ticket</a>
                            </div>
                            <ul>
                                <li>07h20</li>
                                <li> 10h10. 15h30
                                </li>
                                <li> 21h00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        <div class="amy-pagination">
            <div class="clear"></div>
            <nav class="amy-pagination">
                <div class="amy-shadow"><span
                        aria-current="page"
                        class="page-numbers current">1</span><a
                        class="page-numbers"
                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/now-playing/page/2/">2</a><a
                        class="next page-numbers"
                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/now-playing/page/2/">Next</a>
                </div>
            </nav>
        </div>
    </div>
</div>