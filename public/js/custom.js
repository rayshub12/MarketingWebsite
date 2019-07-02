// Creating Page URL
$('#page_title').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var post_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#page_url').val(post_url.toLowerCase());
});

$('#page_url').keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str);
    var post_url = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $('#page_url').val(post_url.toLowerCase());
});
