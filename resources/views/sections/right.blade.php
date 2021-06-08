<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <!-- Tab panes -->
        <div class="tab-content pt-0">

            <div class="tab-pane active" id="settings-tab" role="tabpanel">
                <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                    <span class="d-block py-1">Theme Settings</span>
                </h6>

                <div class="p-3">

                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Topbar -->
                    <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="topbar-color" value="dark" id="darktopbar-check"
                            checked />
                        <label class="custom-control-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="custom-control-label" for="lighttopbar-check">Light</label>
                    </div>

                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->