var trainer_filters = {};

function addFilter(_this) {
    if (_this.data('filter_type') == "array") {

        let new_array__filter_value = [ _this.data('slug') ];
        if( trainer_filters[_this.data('taxonomy_type')] ) {
            // new_array__filter_value.unshift( trainer_filters[_this.data('taxonomy_type')].filter_value );
            let old_array_filter = trainer_filters[_this.data('taxonomy_type')].filter_value;
            old_array_filter.push( new_array__filter_value[0] );
            // console.log( {old_array_filter} );
            new_array__filter_value = old_array_filter;
        }

        // let new_array__filter_value = trainer_filters[_this.data('taxonomy_type')].filter_value || [];
        // console.log( { new_array__filter_value } );
        trainer_filters[_this.data('taxonomy_type')] = {
            filter_field: _this.data('taxonomy_type'),
            filter_value: new_array__filter_value, // array  ["sdfd", "fsdfd"]
        }

    } else {
        trainer_filters[_this.data('taxonomy_type')] = {
            filter_field: _this.data('taxonomy_type'),
            filter_value: _this.data('slug') //string "fsdfdf"
        }
    }
    // console.log( {trainer_filters} );
    let trainer_filters_array = [];
    for (const single_key in trainer_filters) {
        trainer_filters_array.push(trainer_filters[single_key]);
    }

    return trainer_filters_array;
}

function deleteFilter(_this) {

    if (_this.data('filter_type') == "array") {
        // let delete__filter_value = trainer_filters[_this.data('taxonomy_type')].filter_value || [];
        // trainer_filters[_this.data('taxonomy_type')] = {
        //     filter_field: _this.data('taxonomy_type'),
        //     filter_value: delete__filter_value,
        // }

        let delete__filter_value = _this.data('slug');

        let filter_array_values = trainer_filters[_this.data('taxonomy_type')].filter_value;
        // trainer_filters[_this.data('taxonomy_type')].filter_value = filter_array_values.filter( single_filter_element => {
        let new_filters = filter_array_values.filter( single_filter_element => {
            return single_filter_element !== delete__filter_value
        });

        if ( new_filters.length > 0 ) {
            trainer_filters[_this.data('taxonomy_type')].filter_value = new_filters;
        } else {
            delete trainer_filters[_this.data('taxonomy_type')];
        }

        // console.log( {new_filters} );
    } else {
        delete trainer_filters[_this.data('taxonomy_type')]
    }

    let trainer_filters_array = [];
    for (const single_key in trainer_filters) {
        trainer_filters_array.push(trainer_filters[single_key]);
    }

    return trainer_filters_array;
}

function sendAJAXFilter(trainer_filters_array) {
    // console.log({trainer_filters_array})
    $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
            action: 'filter_projects',

            // location: $(this).data('slug'),
            filters: trainer_filters_array,

        },
        success: function (data) {
            $('.project-tiles').html(data);
        }
    })

}

$(document).ready(function ($) {
    $(".cat-list_item").on('change', function () {
        let _this = $(this);

        if (_this.is(':checked')) {
            // console.log("true")
            _this.addClass('active');

            let trainer_filters_array = addFilter(_this);

            // console.log({trainer_filters_array});

            sendAJAXFilter(trainer_filters_array);
        } else {
            // console.log("false")
            _this.removeClass('active');

            let trainer_filters_array = deleteFilter(_this);

            sendAJAXFilter(trainer_filters_array);
        }
    });


});

var ticket_filters = {};

function addFilter_ticket(_this_t) {
    if (_this_t.data('filter_type') == "array") {

        let new_array__filter_value = [ _this_t.data('slug') ];
        if( ticket_filters[_this_t.data('taxonomy_type')] ) {
            // new_array__filter_value.unshift( trainer_filters[_this.data('taxonomy_type')].filter_value );
            let old_array_filter = ticket_filters[_this_t.data('taxonomy_type')].filter_value;
            old_array_filter.push( new_array__filter_value[0] );
            // console.log( {old_array_filter} );
            new_array__filter_value = old_array_filter;
        }

        // let new_array__filter_value = trainer_filters[_this.data('taxonomy_type')].filter_value || [];
        // console.log( { new_array__filter_value } );
        ticket_filters[_this_t.data('taxonomy_type')] = {
            filter_field: _this_t.data('taxonomy_type'),
            filter_value: new_array__filter_value, // array  ["sdfd", "fsdfd"]
        }

    } else {
        ticket_filters[_this_t.data('taxonomy_type')] = {
            filter_field: _this_t.data('taxonomy_type'),
            filter_value: _this_t.data('slug') //string "fsdfdf"
        }
    }
    // console.log( {ticket_filters} );
    let ticket_filters_array = [];
    for (const single_key in ticket_filters) {
        ticket_filters_array.push(ticket_filters[single_key]);
    }

    return ticket_filters_array;
}

function deleteFilter_ticket(_this_t) {

    if (_this_t.data('filter_type') == "array") {
        // let delete__filter_value = trainer_filters[_this.data('taxonomy_type')].filter_value || [];
        // trainer_filters[_this.data('taxonomy_type')] = {
        //     filter_field: _this.data('taxonomy_type'),
        //     filter_value: delete__filter_value,
        // }

        let delete__filter_value = _this_t.data('slug');

        let filter_array_values = ticket_filters[_this_t.data('taxonomy_type')].filter_value;
        // trainer_filters[_this.data('taxonomy_type')].filter_value = filter_array_values.filter( single_filter_element => {
        let new_filters = filter_array_values.filter( single_filter_element => {
            return single_filter_element !== delete__filter_value
        });

        if ( new_filters.length > 0 ) {
            ticket_filters[_this_t.data('taxonomy_type')].filter_value = new_filters;
        } else {
            delete ticket_filters[_this_t.data('taxonomy_type')];
        }

        // console.log( {new_filters} );
    } else {
        delete ticket_filters[_this_t.data('taxonomy_type')]
    }

    let ticket_filters_array = [];
    for (const single_key in ticket_filters) {
        ticket_filters_array.push(ticket_filters[single_key]);
    }

    return ticket_filters_array;
}

function sendAJAXFilter_ticket(ticket_filters_array) {
    // console.log({ticket_filters_array})
    $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
            action: 'filter_tickets',
            // location: $(this).data('slug'),
            filters_ticket: ticket_filters_array,
        },
        success: function (res) {
            $('.ticket-tiles').html(res);
            // $('.ticket-tiles2').append(res);
            // $('.tickets_filter').html(res);
            // console.log("success");
        }
    })
}
function slick_slider(){
    $('.slider_ticket').slick({
        infinite: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        responsive:[
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            },
        ]
    });
}
function json(){

    let gen_json = $('.json_gen_terms').html();
    let obj = JSON.parse(gen_json);
    let generate_term = $('.generate_term');
        for( let key in obj){

            generate_term.append('<div class="term_item">'+key+'</div>');
    }
}
function sendAJAXFilter_ticket_tab2(ticket_filters_array, tabType = "tickets", includedTerms) {


    $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
            action: 'filter_tickets',
            // location: $(this).data('slug'),
            filters_ticket: ticket_filters_array,
            tabType: tabType,
            includedTerms: includedTerms,
        },
        beforeSend: function(){
            $(".ajax-loader").show();
            $('.generate_term').html('');

        },
        success: function (res) {
            // $('.tickets').html(res);
            // $('.ticket-tiles2').append(res);
            // $('.tickets_filter').html(res);
            // console.log("tab2");
            let $_this= $('.filter_tab');
            if ($_this.hasClass('slick-initialized')) {
                $('.filter_tab .slider_ticket').slick('destroy');
                $_this.removeClass('slick-initialized');
                $_this.removeClass('slick-slider');
                // console.log("destroy");
                $( '.tickets' ).html(res);
                slick_slider();

                // console.log("new_slick");

            }
            $(".ajax-loader").hide();
            json();


            // else{
            //     $( '.tickets' ).html( res );
            // }
        }
    })
}
// function destroyCarousel() {
//     if ($(".filter_tab").hasClass('slider')) {
//         $(this).slick('destroy');
//
//     }
// }
$(document).ready(function ($) {



    $(".cat-list_it").on('change', function () {
        let _this_t = $(this);
        let tabType = $(".tab-link.is-active").attr('data-link');
        if (_this_t.is(':checked')) {
            // console.log("true");
            // console.log("tabtype=" + tabType);
            _this_t.addClass('active');
            let ticket_filters_array = addFilter_ticket(_this_t);
            asd = ticket_filters_array;
            // console.log({ticket_filters_array});
            tabClick(tabType);
        } else {
            // console.log("false");
            // console.log("tabtype=" + tabType);
            _this_t.removeClass('active');
            let ticket_filters_array = deleteFilter_ticket(_this_t);
            tabClick(tabType);
        }
    });
    slick_slider();
    $_this = $('.tab_ticket .tab-link');
    $get_attr = $_this.attr('data-link');
    let tabType = $_this.attr('data-link');
    if( $get_attr!=='tickets'){
        tabClick(tabType);
    }
    $_this.on('click', function(){
        if ($(this).attr('data-link')){
            let _this = $(this);
            let $link_id = _this.attr('data-link');
            $('.tab_ticket .tab-link').removeClass('is-active');
            $('.ticket_section .tab-content').hide();
            _this.addClass('is-active');
            $('.ticket_section').find("." + $link_id).show();
            let tabType = _this.attr('data-link'); //_this.data()
            tabClick(tabType);
            // console.log(_this.attr('data-link'));

        }
        else{
            tabClick(tabType);
            // console.log(_this.attr('data-link'));
        }
    });
    function tabClick(tabType) {
        let ticket_filters_array = [];
        for (const single_key in ticket_filters) {
            ticket_filters_array.push(ticket_filters[single_key]);
        }
        // console.log(tabType +" tabClick(tabType)");
        sendAJAXFilter_ticket_tab2(ticket_filters_array, tabType);
        sendAJAXFilter_ticket(ticket_filters_array);
    }


});



