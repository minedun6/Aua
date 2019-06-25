<div class="row" id="profil-spinner">
    <div class="col-md-12" style="text-align: center">
        <img src="{{ asset('assets/global/img/loading-spinner-grey.gif') }}" >
    </div>
</div>
<div class="row" id="profil-wrapper">
    <div class="col-md-12 project-details">
        <div class="invoice-content-2 bordered" style="padding: 10px 28px;">
            <div class="row invoice-cust-add" style="margin-bottom: 0px">
                <div class="col-xs-2" style="padding-top: 23px">
                    <img src="{{ asset('assets/frontend/pic/members/0.jpg') }}" style="width: 100%;margin: 0 auto;">
                </div>
                <div class="col-xs-3">
                    <h2 class="invoice-title uppercase">Name</h2>
                    <p class="invoice-desc">{{ $member->name }}</p>
                </div>
                <div class="col-xs-3">
                    <h2 class="invoice-title uppercase">President</h2>
                    <p class="invoice-desc">{{ $president->name }}</p>
                </div>
                <div class="col-xs-4">
                    <h2 class="invoice-title uppercase">Address</h2>
                    <p class="invoice-desc inv-address">{{ $member->address }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span class="counter" data-count="{{ $member->stat ? $member->stat->total_members : '0' }}">0</span>
                        </div>
                        <div class="desc"> Total Number of Members </div>
                    </div>
                </a>

            </div>
            <div class="col-md-6">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-institution"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span class="counter" data-count="{{ $member->stat ? $member->stat->total_schools : '0' }}">0</span></div>
                        <div class="desc"> Number of Architecture schools </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            @if($member->members)
                @foreach($member->members as $item)
                    <div class="col-md-4" style="padding: 5px 30px;">
                        <div style="padding: 3px 8px">
                            <h4 class="profile-desc-title">{{ $item->name }}</h4>
                            <span class="profile-desc-text" style="text-transform: capitalize"> {{ $item->role }} </span>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-mail-forward"></i>
                                <a href="#">{{ $item->email1 }}</a>
                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-phone"></i>
                                <a href="#">{{ $item->phone1 }}</a>
                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-fax"></i>
                                <a href="#">{{ $item->fax }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>

    </div>
</div>

<script>
    $(function () {
        is_count = true;
        if($(".counter").length) {
            console.log('in')
            var winScr = $(window).scrollTop();
            var winHeight = $(window).height();
            var ofs = $('.counter').offset().top;



                if ( is_count) {
                    $(".counter").each(function () {
                        var atr = $(this).attr('data-count');
                        var item = $(this);
                        var n = atr;
                        var d = 0;
                        var c;

                        $(item).text(d);
                        var interval = setInterval(function() {
                            c = atr/70;
                            d+=c;
                            if ( (atr-d)<c) {
                                d=atr;
                            }
                            $(item).text(Math.floor(d) );

                            if (d==atr) {
                                clearInterval(interval);
                            }
                        },50);
                    });
                    is_count = false;
                }

        }
    })

</script>