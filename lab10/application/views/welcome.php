<p class="lead">
    <a href="/order/neworder" class="btn btn-large btn-primary">Start a new order</a>    
    <a href="/admin" class="btn btn-large btn-danger">Secret Admin Stuff</a>
    <a href="/planner" class="btn btn-large btn-warning">Travel Planner</a>
</p>
<p>Order summary:</p>
<table class="table">
    <tr>
        <th>Order #</th>
        <th>Date/Time</th>
        <th>Amount</th>
    </tr>
    {orders}
    <tr>
        <td>{num}</td>
        <td>{datetime}</td>
        <td>{amount}</td>
    </tr>
    {/orders}
</table>



<br>
<br>

<div class="fb-like" data-href="http://comp4711.local" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-follow" data-href="https://www.facebook.com/Clee1029?fref=ts" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>