
<html>

<head></head>


<body>Ticket

<?php

@foreach($ticket as $ticket_list)
<div style="background-color:gray">
 {{$ticket_list->ticket_title}}
 {{$ticket_list->ticket_country}}
 {{$ticket_list->ticket_detail}}
 {{$ticket_list->ticket_importance}}
</div>
@endforeach

?>

</body>


</html>


