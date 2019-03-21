<!-- sidebar right starts -->
<div class="sidebar border-left right scroll-y">
    <div class="title">
        <i class="fa fa-U=user text-success"></i> Welcome {{ Auth::user()->name }}</div>
    <!-- <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item">
            <a class="nav-link active  border-success" id="tab1-tab" data-toggle="tab" href="#rightside" role="tab"
                aria-controls="rightside" aria-selected="true">
                <i class="fa fa-rocket"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-success" id="tab2-tab" data-toggle="tab" href="#chatlist" role="tab"
                aria-controls="chatlist" aria-selected="false">
                <i class="fa fa-comments"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-success" id="tab3-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting"
                aria-selected="false">
                <i class="fa fa-cog"></i>
            </a>
        </li>
    </ul> -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="rightside" role="tabpanel">
            <div class="userlist_large ">
                <div class="progress_profile " data-value="0.65" data-size="140" data-thickness="4"
                    data-animation-start-value="0" data-reverse="false"></div>
                    <div class="media">
                            <figure class="avatar120 rounded-circle m-auto">
                                <img src="../assets/img/user1.png" alt="user">
                            </figure>

                        <div class="media-body">
                            <h4 class="my-3">
                                <span class="text-secondary">
                                    @if(Auth::user()->is_supper)
                                        Super Admin
                                    @else
                                        Ordinary Admin
                                    @endif
                                </span>
                            </h4>
                            <a href="{{ route('users.show', ['id' => Auth::user()->slug]) }}" class="btn btn-success">
                                <p>Click here to view your profile</p>
                            </a>

                            <br>
                            <br>

                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Logout Now
                                    <i class="fa fa-sign-out"></i>
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
            <br>
            <hr>
        </div>
    </div>


    <br>
    <br>
</div>
<!-- sidebar right ends -->
