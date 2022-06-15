@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Media - Pengumuman</title>
@endpush

@push('additional_css')
<style>
    ul li {
        margin-right: 10px;
    }

    input[type="radio"] {
        display: none;
    }

    .projects-filter label {
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        line-height: 1;
    }

    .projects-filter input[type="radio"]:checked+label {
        color: #32c36c;
    }

    .project-content {
        height: 380px;
    }

    .project-title {
        max-height: 70px;
    }

    .project-title h4 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .project-desc p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }

    .project-img {
        height: 236px;
    }

    #isotope-pager {
        list-style: none;
        display: inline-block;
        padding: 0;
    }

    #isotope-pager li {
        display: inline;
        text-align: center;
    }

    #isotope-pager a {
        float: left;
        display: block;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        padding: 5px 12px;
        color: #fff;
        margin-left: -1px;
        border: 1px solid transparent;
        line-height: 1.5;
        cursor: pointer;

        margin: 0 5px;
        padding: 4px 10px 4px 10px;
        min-width: 30px;
        min-height: 10px;
        line-height: 30px;
        background-color: #2b3e4b;
        transform: translateY(0);
        transition: all .3s ease-out;
    }

    #isotope-pager a:hover {
        background-color: #FFA100;
        color: #fff;
        font-weight: 1000;
        transition: all .3s ease-out;
    }

    #isotope-pager li.active a {
        outline: none;
        background-color: #32c36c !important;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #1 Section
      ============================
      -->
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Pengumuman</h1>
                            <p class="title-desc"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="projects projects-gallery projects-modern projects-modern-3" id="projects-modern-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start .projects-filter-->
                    <div class="projects-filter">
                        <ul class="list-inline mb-0 d-flex justify-content-center">
                            <li>
                                <a id="clear-filters" class="active-filter filter-item" href="javascript:void(0)" data-filter="*">All</a>
                            </li>
                            <li>
                                <input id="radio-1" name="news_radio" type="radio" value="filter-simpanan" class="filter-item" />
                                <label for="radio-1">Layanan Simpanan</label>
                            </li>
                            <li>
                                <input id="radio-2" name="news_radio" type="radio" value="filter-pinjaman" class="filter-item" />
                                <label for="radio-2">Layanan Pinjaman</label>
                            </li>
                            <li>
                                <input id="radio-3" name="news_radio" type="radio" value="filter-bisnis" class="filter-item" />
                                <label for="radio-3">Layanan Bisnis</label>
                            </li>
                            <li>
                                <input id="radio-4" name="news_radio" type="radio" value="filter-komersial" class="filter-item" />
                                <label for="radio-4"> Layanan Komersial</label>
                            </li>
                        </ul>
                    </div>
                    <!-- End .projects-filter-->
                </div>
            </div>
            <!-- End .row-->
            <div id="projects-all_display" class="row">
                @foreach($data as $datum)
                <div class="col-12 col-md-6 col-lg-4 project-item filter-{{ $datum->category }}">
                    <div class="project-panel">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="announcement/{{ $datum->id }}"></a><img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="announcement/{{ $datum->id }}">{{ $datum->category }}</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="announcement/{{ $datum->id }}">{{ $datum->title_indo }}</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>
                                        {{ $datum->description_indo }}
                                    </p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="announcement/{{ $datum->id }}">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row d-flex justify-content-center">
                <div style="width: auto;">
                    <ul id="isotope-pager">
                    </ul>
                </div>
            </div>
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

@push('additional_js')
<script>
    var itemSelector = ".project-item";
    var $checkboxes = $('.filter-item');
    var $container = $('#projects-all_display').isotope({
        itemSelector: itemSelector
    });

    //Ascending order
    var responsiveIsotope = [
        [480, 4],
        [720, 6]
    ];
    var itemsPerPageDefault = 6;
    var itemsPerPage = defineItemsPerPage();
    var currentNumberPages = 1;
    var currentPage = 1;
    var currentFilter = '*';
    var filterAttribute = 'data-filter';
    var filterValue = "";
    var pageAttribute = 'data-page';
    var pagerClass = 'isotope-pager';

    // update items based on current filters
    function changeFilter(selector) {
        $container.isotope({
            filter: selector
        });
    }

    //grab all checked filters and goto page on fresh isotope output
    function goToPage(n) {
        currentPage = n;
        var selector = itemSelector;
        var exclusives = [];
        // for each box checked, add its value and push to array
        $checkboxes.each(function(i, elem) {
            if (elem.checked) {
                selector += (currentFilter != '*') ? '.' + elem.value : '';
                exclusives.push(selector);
            }
        });
        // smash all values back together for 'and' filtering
        filterValue = exclusives.length ? exclusives.join('') : '*';

        // add page number to the string of filters
        var wordPage = currentPage.toString();
        filterValue += ('.' + wordPage);

        changeFilter(filterValue);
        createPagers();
    }

    // determine page breaks based on window width and preset values
    function defineItemsPerPage() {
        var pages = itemsPerPageDefault;

        for (var i = 0; i < responsiveIsotope.length; i++) {
            if ($(window).width() <= responsiveIsotope[i][0]) {
                pages = responsiveIsotope[i][1];
                break;
            }
        }
        return pages;
    }

    function setPagination() {

        var SettingsPagesOnItems = function() {
            var itemsLength = $container.children(itemSelector).length;
            var pages = Math.ceil(itemsLength / itemsPerPage);
            var item = 1;
            var page = 1;
            var selector = itemSelector;
            var exclusives = [];
            // for each box checked, add its value and push to array
            $checkboxes.each(function(i, elem) {
                if (elem.checked) {
                    selector += (currentFilter != '*') ? '.' + elem.value : '';
                    exclusives.push(selector);
                }
            });
            // smash all values back together for 'and' filtering
            filterValue = exclusives.length ? exclusives.join('') : '*';
            // find each child element with current filter values
            $container.children(filterValue).each(function() {
                // increment page if a new one is needed
                if (item > itemsPerPage) {
                    page++;
                    item = 1;
                }
                // add page number to element as a class
                wordPage = page.toString();

                var classes = $(this).attr('class').split(' ');
                var lastClass = classes[classes.length - 1];
                // last class shorter than 4 will be a page number, if so, grab and replace
                if (lastClass.length < 4) {
                    $(this).removeClass();
                    classes.pop();
                    classes.push(wordPage);
                    classes = classes.join(' ');
                    $(this).addClass(classes);
                } else {
                    // if there was no page number, add it
                    $(this).addClass(wordPage);
                }
                item++;
            });
            currentNumberPages = page;
        }();
    }

    // create page number navigation
    function createPagers() {
        var unorderedList = document.getElementById('isotope-pager');
        content = '';

        if (currentNumberPages > 1) {

            if (currentPage != 1) {
                content = content +
                    '<li class="prev">' +
                    '   <a onClick="goToPage(' + (currentPage - 1) + ')">' +
                    '       Sebelumnya' +
                    '   </a>' +
                    '</li>';
            }

            let pagingRange = getPagingRange(currentPage, {
                total: currentNumberPages
            });

            if (pagingRange[0] != 1) {
                content = content +
                    '<li>' +
                    '   <a onClick="goToPage(' + 1 + ')">' + 1 + '</a>' +
                    '</li>';

                if (pagingRange[0] != 2) {
                    content = content +
                        '<li>' +
                        '   <a href="#"> ... </a>' +
                        '</li>';
                }
            }

            for (let i = 0; i < pagingRange.length; i++) {
                if (pagingRange[i] == currentPage) {
                    content = content +
                        '<li class="active">';
                } else {
                    content = content +
                        '<li>';
                }

                content = content +
                    '       <a onClick="goToPage(' + pagingRange[i] + ')">' + pagingRange[i] + '</a>' +
                    '   </li>';
            }

            if (pagingRange[pagingRange.length - 1] != currentNumberPages) {
                if (pagingRange[pagingRange.length - 1] != currentNumberPages - 1) {
                    content = content +
                        '<li>' +
                        '   <a href="#"> ... </a>' +
                        '</li>';
                }

                content = content +
                    '<li>' +
                    '   <a onClick="goToPage(' + currentNumberPages + ')">' + currentNumberPages + '</a>' +
                    '</li>';
            }


            if (currentPage != currentNumberPages) {
                content = content +
                    '<li class="next">' +
                    '   <a onClick="goToPage(' + (currentPage + 1) + ')">' +
                    '       Berikutnya' +
                    '   </a>' +
                    '</li>';
            }

        }

        content = content;

        unorderedList.innerHTML = content;
    };

    function getPagingRange(current, {
        min = 1,
        total = 20,
        length = defineItemsPerPage()
    } = {}) {
        if (length > total) length = total;

        let start = current - Math.floor(length / 2);
        start = Math.max(start, min);
        start = Math.min(start, min + total - length);

        return Array.from({
            length: length
        }, (el, i) => start + i);
    }

    // remove checks from all boxes and refilter
    function clearAll() {
        $checkboxes.each(function(i, elem) {
            if (elem.checked) {
                elem.checked = null;
            }
        });
        currentFilter = '*';
        setPagination();
        goToPage(1);
    }

    setPagination();
    goToPage(1);

    //event handlers
    $checkboxes.change(function() {
        var filter = $(this).attr(filterAttribute);
        currentFilter = filter;
        setPagination();
        goToPage(1);
    });

    $('#clear-filters').click(function() {
        clearAll()
    });

    $(window).resize(function() {
        itemsPerPage = defineItemsPerPage();
        setPagination();
        goToPage(1);
    });
</script>
@endpush
