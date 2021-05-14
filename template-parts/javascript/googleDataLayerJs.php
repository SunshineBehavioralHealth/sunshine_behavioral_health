<?php
$AuthorUser = get_field("editor_user");
?>

<script>
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    let googleCID = getCookie('_ga');
    let pageURL = window.location.href;

    let testVariable;

    var dataLayer = window.dataLayer = window.dataLayer || [];

    dataLayer.push({
        'event': 'trackerReady',
        'client_id': googleCID,
        'pagePostAuthor': "<?php echo $AuthorUser['display_name']; ?>",
        'pageURL': pageURL
    });
</script>


<!-- 
Data Layer values being grabbed by invoca:

pageURL
shortcode_type


 -->