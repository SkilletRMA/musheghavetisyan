$(document).ready(function(){

    //Get page title
    var title = $(document).find('title').text();
    var url = window.location.href; 
    var referrer =  document.referrer;
    //On page load
     if( window.location.href.indexOf("/ask-tony/") > -1){
        analytics.track('Viewed Core Concept',{
           core_concept_title:  title,
           core_concept_url: url,
        });
    }else if($('body').hasClass( "single-stories" )){
        var title = $('h1').text();
        analytics.track('Viewed Story', {
            story_title: title
            });
    }else if($('body').hasClass( "category" ) && $('a[rel="category tag"]').first().text() ==  'News'){
        var category = $('h1').text();
        analytics.track('Viewed News Category', {
            news_article_category: category
            });
    }else if($('a[rel="category tag"]').first().text() ==  'News'){
        console.log('test');
        var author = $('.article-author').text();
        var category = $('a[rel="category tag"]').first().text();
        analytics.track('Viewed News Article', {
            blog_post_title:  title,
            blog_post_url: url,
            blog_post_author: author,
            blog_post_category: category
            });
    }else if($('body').hasClass( "category" )){
        var category = $('h1').text();
        analytics.track('Viewed Blog Category', {
            blog_post_category: category
            });
    }else if($('body').hasClass( "single-post" )){
        
        var author = $('.article-author').text();
        var category = $('a[rel="category tag"]').first().text();
        analytics.track('Viewed Blog Post', {
            blog_post_title:  title,
            blog_post_url: url,
            blog_post_author: author,
            blog_post_category: category
            });
    }else {
        analytics.track('Viewed Marketing Page',{
           page_title:  title,
           page_url: url,
           page_referrer: referrer
        });
    };
    
    //On CTA click
    $('.btn-blue').click(function(){
        var dest = $(this).attr('href');
        var text = $(this).text();
        analytics.track('Clicked Marketing CTA', {
            type: 'button',
            text: text,
            page_url: url,
            destination: dest
        });
    });
    //On CTA click
    $('.btn').click(function(){
        var dest = $(this).attr('href');
        var text = $(this).text();
        analytics.track('Clicked Marketing CTA', {
            type: 'button',
            text: text,
            page_url: url,
            destination: dest
        });
    });
    //On inline ad click
    $('.shortcode-ad').click(function(){
        var dest = $(this).attr('href');
        var text = $(this).text();
        analytics.track('Clicked Marketing CTA', {
            type: 'Inline Ad',
            text: text,
            page_url: url,
            destination: dest
        });
    });
    
    //On sidebar ad click
    $('.tr-sidebar-ad').click(function(){
        var dest = $(this).attr('href');
        var text = $(this).text();
        analytics.track('Clicked Marketing CTA', {
            type: 'Sidebar Ad',
            text: text,
            page_url: url,
            destination: dest
        });
    });
    
    
    
    //Request a coaching session

    //Subscribe to blog newsletter 

    
    //submited search form
    $('.proinput > form').submit(function(){
         var term = $('.proinput > form > input[type="search"]').val();
        analytics.track('Searched', {
            search_term: term
        });
        
    })
    //Selected search result
    $('.search-result > .col-md-9 > a').click(function(){
        var result = $(this).attr('href');;
        analytics.track('Selected Search Result', {
            selected_result: result
        });
    })
    //Submitted events specialists form

    //Submited coaching workshop form

    //submitted disc assessment


    //submited BM application form

    //Podcast opened in itunes
    if($('body').hasClass( "single-podcasts" )){
    $('a[href*="https://itunes.apple.com/us/podcast/"]').click(function(){
        var dest = $(this).attr('href');
        var title = $('h1.post-title').text();
        analytics.track('Opened Podcast in iTunes', {
            title: title,
            podcast_link: dest
        });
    });
    }; //end if
    
    //submited plat partnership form

    //Completed Trial billing info
    $('#orderForm').submit(function(){
        var bAddress = $('#Contact0AddressStreet1').val();
        var bCity = $('#Contact0City').val();
        var bState = $('#Contact0State').val();
        var bZip = $('#Contact0PostalCode').val();
        var bCountry = $('#Contact0Country').val();
        var sAddress = $('#Contact0Street2Address1').val();
        var sCity = $('#Contact0City2').val();
        var sState = $('#Contact0State2').val();
        var sZip = $('#Contact0PostalCode2').val();
        var sCountry = $('#Contact0Country2').val();
        analytics.track('Completed Trial billing Info', {
            billing_street_address: bAddress,
            billing_city: bCity,
            billing_state: bState,
            billing_postal_code: bZip,
            billing_country: bCountry,
            shipping_street_address: sAddress,
            shipping_city: sCity,
            shpping_state: sState,
            shipping_postal_code: sZip,
            shipping_country: sCountry        
        });
    });
    //Friend referered

 
});