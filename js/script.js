var $ = jQuery;

jQuery(document).ready(function ($) {

    $('#dropdownSearchMenuButton').click(function () {
        $("#menuInput").focus();
    });

    // $(".owl-carousel").owlCarousel();
    //SEARCH FUNCTION 
    $("#myInput").on("keyup", function () {
        rs_filter_results();
    });

    // TOGGLE FILTERS
    function countSelectedElements() {
        $('.filter-item-mobile').each(function() {
            console.log($('.dropdown-item input:checkbox', $(this)).length);
            console.log($('.dropdown-item input:checkbox:checked', $(this)).length);
        });
    }

    function clearAllCheckBoxes() {
        console.log($('.dropdown-item input:checkbox', $('#filters-items')).length);
        $('.dropdown-item input:checkbox', $('#filters-items')).prop('checked', false);
    }

    $('#toggle-filter').click(function () {
        $("#filters-container").toggle("slow");
        countSelectedElements();
        $("#filters-container-mobile").toggle();
        $('body').addClass('no-scroll');
    });

    $('.filter-item-wrap').on('click', function() {
        $('.filters-buttons').hide();
        recalculateHeightOfCheckedFilters();
        let filtersSearch = $('#filters-search');
        filtersSearch.val('');
        let target = $(this).data('target');
        $('.'+target).show();
        filtersSearch.attr('data-target', target);
        $('#filters-go-back-button').show();
        $('.filters-mobile-heading #top-title').html($(this).data('title') + ' <span class="count"></span>');
        $('#filters-items').show();
    });

    function goBack() {
        $('#filters-items').hide();
        $('#filters-go-back-button').hide();
        $('.filters-checked-elements').html('');
        $('#top-title').html('FILTERS');
        $('.filter-item-mobile').hide();
        $('.filters-buttons').show();
    }

    $('#filters-go-back-button').on('click', function () {
        goBack();
    });

    $('#top-title').on('click', function () {
        goBack();
    });

    $('#close-mobile-filters').on('click', () => {
        $("#filters-container-mobile").hide();
        $('body').removeClass('no-scroll');
    });

    let typingTimer;

    $('#filters-search').on('input', function () {
        clearTimeout(typingTimer);

        typingTimer = setTimeout(() => {
            if($('#filters-search').val() !== '') {
                $('.' + $('#filters-search').data('target') + ' input').filter(function (index, obj) {
                    var myRe = new RegExp($('#filters-search').val().toLowerCase(), "g");
                    var myArray = myRe.exec($(obj).data('filter-title').toLowerCase());
                    if (myArray === null || !myArray.length) {
                        $(obj).parent().hide();
                    }
                });
            } else {
                $('.' + $('#filters-search').data('target') + ' input').parent().show();
            }
        }, 500);
    });

    function recalculateHeightOfCheckedFilters() {
        $('#filters-items').css('height', screen.height - 60 - 76 - $('.filters-mobile-footer').height() - 26 + 'px');
    }

    function updateTitlesWithCounts(listId, countElemSelected, countElemSum) {
        $('.filter-button-mobile-' + listId + ' .count').html('(' + countElemSelected + '/' + countElemSum + ')');
        $('.filters-mobile-heading #top-title .count').html('(' + countElemSelected + '/' + countElemSum + ')');
    }

    $('.filters-container-mobile .dropdown-item').on('click', function () {
        $('.filters-checked-elements').html('');
        let countElemSum = 0;
        let countElemSelected = 0;
        let listId = $(this).parents('.filter-item-mobile').data('id');

        $(this).parent().children().each(function () {
            countElemSum++;
            let elem = $(this).children(".check").children('input:checked');
            if(elem.length) {
                countElemSelected++;
                let btnClose = $("<span></span>");
                $(btnClose).addClass('btn-close');
                let uniqCounter = Math.floor(Math.random() * Math.floor(505050)) + new Date().getTime();
                $(btnClose).attr('data-list-element', uniqCounter);
                $(btnClose).attr('data-parent-id', listId);
                $(elem).addClass('el-' + uniqCounter)
                let elemChecked = $("<span></span>").text($(elem).siblings('.filter').html());
                $(elemChecked).addClass('filters-checked-elem');
                $(elemChecked).append(btnClose);
                $('.filters-checked-elements').append(elemChecked);
            }
        });

        updateTitlesWithCounts(listId, countElemSelected, countElemSum);
        recalculateHeightOfCheckedFilters();
    });

    $('body').on('click', '.filters-checked-elem .btn-close', function () {
        $('.el-' + $(this).data('list-element')).prop("checked", false);
        let parentId = $(this).data('parent-id');
        let countElemSum = $('.filter-item-mobile-2 .dropdown-list .dropdown-item').length;
        $(this).parent().remove();
        let countElemSelected = $("[data-parent-id='" + $(this).data('parent-id') + "']").length;
        updateTitlesWithCounts(parentId, countElemSelected, countElemSum);
        recalculateHeightOfCheckedFilters();
    });

    $('.filters-mobile-footer-button--clear').on('click', function() {
        clearAllCheckBoxes();
    });
    // $(".news-slider").owlCarousel({
    //     items: 2,
    //     loop: true,
    //     dots: true,
    //     mouseDrag: true,
    //     navText: '',
    //     nav: true
    // });


    // $("#myInput").on("keyup", function () {
    //     var value = $(this).val().toLowerCase();
    //     $("#medications-list li div").filter(function () {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    //     });
    //     $('#medications-list li').filter(function(){
    //         $('#medications-list li').show();
    //         var hide =  true;
    //         var children = $(this).children("div");
    //         for (var i = 0; i < children.length; i++) {
    //              if(typeof children[i].style.display === 'undefined' || children[i].style.display != 'none'){
    //                 hide =  false;
    //              }
    //           }                    
    //         return hide;    
    //     }).hide();
    // });

    //SEARCH FUNCTION on BTN
    // $('.search-toggle').click(function() {
    //     var value = $("#myInput").val().toLowerCase();
    //     $("#medications-list li div").filter(function () {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    //     });
    // });

    $('.search-toggle').click(function () {
        $("#myInput").toggle("slow");
    });



    // Filter results based on filter selection
    window.rs_filterclick = false;

    jQuery('.filters-container').find('label.check').on('click', function (e) {
        if (window.rs_filterclick == false) {
            window.rs_filterclick = true;
            setTimeout(rs_filter_results, 0);
        }
        e.stopPropagation();
    });

    jQuery('.btn-filters-container').on('click', '.btn-filter', function () {
        var rs_filterID = jQuery(this).data('filter-id');
        jQuery('.filters-container').find('input[data-filter-id="' + rs_filterID + '"]').prop("checked", false);
        rs_filter_results();
    });

    jQuery('.clear-filter').on('click', function () {
        jQuery('.filters-container').find('input').prop("checked", false);
        rs_filter_results();
    });

    function rs_filter_results() {
        window.rs_filterclick = false;

        // define the filter class for later
        var rs_filter_class = '';

        // find the filter buttons and clear them
        var $rs_filter_buttons = jQuery('.btn-filters-container');
        $rs_filter_buttons.empty();

        // loop through the checked filters and add the filter buttons. Also build the filter class.
        jQuery('.filters-container').find('.dropdown').each(function () {
            var rs_checkedFilters = 0;

            jQuery(this).find('input[type=checkbox]:checked, input[type=radio]:checked').each(function () {
                var rs_filterID = jQuery(this).data('filter-id');
                var rs_filterTitle = jQuery(this).data('filter-title');

                var $rs_new_button = jQuery('<div class="btn-filter" data-filter-id="' + rs_filterID + '">' + rs_filterTitle + ' <svg class="x-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg></div>');
                $rs_filter_buttons.append($rs_new_button);

                rs_filter_class += '.' + rs_filterID;

                rs_checkedFilters++;
            });

            if (rs_checkedFilters > 0) {
                jQuery(this).find('button span.count').html(rs_checkedFilters);
            } else {
                jQuery(this).find('button span.count').html('');
            }
        });

        // hide filter selection and reset button if filter is empty
        if (jQuery('.btn-filters-container').find('.btn-filter').length) {
            jQuery('.filters-span, .clear-filter').show();
        } else {
            jQuery('.filters-span, .clear-filter').hide();
        }

        // hide or show results based on the filters
        var $rs_providers_list = jQuery('.result-list');

        if (rs_filter_class != '') {
            $rs_providers_list.find('.provider-item').hide();
            $rs_providers_list.find('.provider-item' + rs_filter_class).show();
        } else {
            $rs_providers_list.find('.provider-item').show();
        }

        // TODO: filter based on search words
        if (jQuery("#myInput").length) {
            var value = jQuery("#myInput").val().toLowerCase();
            $rs_providers_list.find('.provider-item:visible').each(function () {
                if (jQuery(this).text().toLowerCase().indexOf(value) > -1) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            });
        }

        // hide letters if empty
        $rs_providers_list.find('li.alphabet-section').show().each(function () {
            if (!jQuery(this).find('.provider-item').is(":visible")) {
                jQuery(this).hide();
            }
        });

        // update search result count - Not needed?
        //jQuery('.search-container').find('.result').html($rs_providers_list.find('.provider-item:visible').length + ' Results');
    }

    //Run the filter ones on page load
    rs_filter_results();



    //Smooth Scrolling
    $('a[href*="#"]').on('click', function (e) {
        e.preventDefault()
        $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top,
            },
            500,
            'linear'
        )
    });

    if ( $.isFunction($.fn.owlCarousel) ) {
        // var owl = $('.owl-carousel');
        $('.provider-carousel').owlCarousel({
            margin: 0,
            loop: true,
            nav: true,
            navText: '',
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 30,
                    mouseDrag: true,
                    touchDrag: true,
                },
                768: {
                    items: 2,
                    mouseDrag: false,
                    touchDrag: false,
                },
                1200: {
                    items: 3,
                    mouseDrag: false,
                    touchDrag: false,
                }
            }
        })
    }

});

//SEARCH FUNCTION FOR FILTERS BLOCK

function filterCheckbox0() {
    var value = $(".menuInput").val().toLowerCase();
    $(".filter-list-0 li label span").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
}

function filterCheckboxOne() {
    var value = $(".menuInput1").val().toUpperCase();
    $(".filter-list-one li label span").filter(function () {
        $(this).toggle($(this).text().toUpperCase().indexOf(value) > -1);
    });
}