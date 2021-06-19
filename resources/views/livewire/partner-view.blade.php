
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Excitel</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Partner</a></li>
                                <li class="breadcrumb-item active">Partner Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mt-1 mb-2 font-20">{{ $partner->partnercode }} | {{ $partner->windowname }}</h4>
                                <p class="mb-1"><b>Address:</b> {{ $partner->address }}</p>
                                <p class="mb-1"><b>Zone:</b> {{ $partner->zone }}</p>
                                <p class="mb-0"><b>Region:</b> {{ $partner->region }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center button-list">
                            <a href="javascript: void(0);" class="btn btn-lg btn-primary waves-effect waves-light">ASSIGN</a>
                            <a href="javascript: void(0);" class="btn btn-lg btn-primary waves-effect waves-light">CALL</a>
                            <a href="javascript: void(0);" class="btn btn-lg btn-primary waves-effect waves-light">LOCATE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            Hub Details
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Infra Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Messages
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="home1">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane show active" id="profile1">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                    <div class="tab-pane" id="messages1">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- container -->

    </div> <!-- content -->

</div>
