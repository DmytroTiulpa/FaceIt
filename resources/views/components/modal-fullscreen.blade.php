{{-- fullscrenn modal window with navigation --}}
<div id="modal-fullscreen" class="uk-modal-full" data-uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
        <div class="uk-width-1-1 uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport>
            <ul class="uk-nav uk-nav-primary uk-nav-center {{--uk-nav-parent-icon uk-margin-auto-vertical--}}" data-uk-nav>
                <li class="uk-active">
                    <a href="/">Home</a>
                </li>
                <li class="uk-active">
                    <a href="javascript:void(0)">Active</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Item</a>
                </li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="javascript:void(0)">Sub item</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="javascript:void(0)">Sub item</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
