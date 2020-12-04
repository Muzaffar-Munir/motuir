<!-- Left sidebar -->
<div class="email-leftbar card">
    <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-toggle="modal"
        data-target="#composemodal">
        Compose
    </button>
    <div class="mail-list mt-4">
        <a href="{{route('support.email')}}"><i class="mdi mdi-email-outline font-size-16 align-middle mr-2"></i> Inbox
            <span class="ml-1 float-right">(18)</span></a>
        <a href="{{route('support.email.starred')}}"><i class="mdi mdi-star-outline font-size-16 align-middle mr-2"></i>Starred</a>
        <a href="{{route('support.email.important')}}"><i class="mdi mdi-diamond-stone font-size-16 align-middle mr-2"></i>Important</a>
        <a href="{{route('support.email.draft')}}"><i class="mdi mdi-file-outline font-size-16 align-middle mr-2"></i>Draft</a>
        <a href="{{route('support.email.sent')}}"><i class="mdi mdi-email-check-outline font-size-16 align-middle mr-2"></i>Sent Mail</a>
        <a href="{{route('support.email.archived')}}"><i class="mdi mdi-archive font-size-16 align-middle mr-2"></i>Archived</a>
    </div>

    <h6 class="mt-4">Folders</h6>

    <div class="mail-list mt-1">
        <a href="{{route('support.email.folder')}}"><span class="mdi mdi-folder mr-2"></span>Folder 1</a>
        <a href="#"><span class="mdi mdi-folder mr-2"></span>Folder 2</a>
    </div>
</div>
<!-- End Left sidebar -->