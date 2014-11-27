<!-- share this bar -->
<script type="text/javascript">stLight.options({publisher: "d867afbc-bd30-4523-985c-03f2d315db1d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "d867afbc-bd30-4523-985c-03f2d315db1d", "logo": { "visible": true, "url": "http://comp4711.local", "img": "http://sd.sharethis.com/disc/images/demo_logo.png", "height": 45}, "ad": { "visible": false, "openDelay": "5", "closeDelay": "0"}, "livestream": { "domain": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#FFFFFF", "articleLinkColor": "#006fbb"}}, "ticker": { "visible": false, "domain": "", "title": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#9d9d9d", "articleLinkColor": "#00487f"}}, "facebook": { "visible": false, "profile": "sharethis"}, "fblike": { "visible": false, "url": ""}, "twitter": { "visible": false, "user": "sharethis"}, "twfollow": { "visible": false}, "custom": [{ "visible": false, "title": "Custom 1", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 2", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 3", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}], "chicklets": { "items": ["facebook", "twitter", "wordpress"]}, "shadow": "gloss", "background": "#000000", "color": "#FFFFFF", "arrowStyle": "light"};
var st_bar_widget = new sharethis.widgets.sharebar(options);
</script>

<p class="lead">
    Click on a menu item below to add it to your order, or 
    <a href="/order/checkout/{order_num}" class="btn btn-primary">Checkout</a>
    <a href="/" class="btn btn-large btn-primary">Back</a>
</p>

<div class="row text-center">
    <div class="span3">
        {meals}
        <a href="/order/add/{order_num}/{code}">
            <img src="/assets/images/{picture}" title="{description}"/>            
        </a>
        <br/>{name} ({price})<br/>
        {/meals}
    </div>
    <div class="span3 offset1">
        {drinks}
        <a href="/order/add/{order_num}/{code}">
            <img src="/assets/images/{picture}" title="{description}"/>            
        </a>
        <br/>{name} ({price})<br/>
        {/drinks}
    </div>
    <div class="span3 offset1">
        {sweets}
        <a href="/order/add/{order_num}/{code}">
            <img src="/assets/images/{picture}" title="{description}"/>            
        </a>
        <br/>{name} ({price})<br/>
        {/sweets}
    </div>
</div>

