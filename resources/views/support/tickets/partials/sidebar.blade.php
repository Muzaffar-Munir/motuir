<div class="email-leftbar card">
    <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal"
        data-target="#composemodal">
        New Ticket
    </button>
    <div class="mail-list mt-4 ticket_sidebar">
        <a href="{{route('support.tickets.all')}}">
            <i class="mdi mdi-email-outline font-size-16 align-middle mr-2"></i> 
            All
            <span class="ml-1 float-right">(22)</span>
        </a>
        <a href="{{route('support.tickets.unread')}}">
            <i class="mdi mdi-diamond-stone font-size-16 align-middle mr-2"></i>
            Unread
            <span class="ml-1 float-right">(9)</span>
        </a>
        <a href="{{route('support.tickets.replied')}}">
            <i class="mdi mdi-file-outline font-size-16 align-middle mr-2"></i>
            Replied                        
            <span class="ml-1 float-right">(4)</span>
        </a>
        <a href="{{route('support.tickets.starred')}}">
            <i class="mdi mdi-star-outline font-size-16 align-middle mr-2"></i>
            Starred
            <span class="ml-1 float-right">(2)</span>
        </a>
        <a href="{{route('support.tickets.escalated')}}">
            <i class="mdi mdi-email-check-outline font-size-16 align-middle mr-2"></i>
            Escalated
            <span class="ml-1 float-right">(5)</span>
        </a>
        <a href="{{route('support.tickets.closed')}}">
            <i class="mdi mdi-trash-can-outline font-size-16 align-middle mr-2"></i>
            Closed
            <span class="ml-1 float-right">(1)</span>
        </a>
    </div>
</div>