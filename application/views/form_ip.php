<h3>Input controls</h3>

<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Default</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body">
                <div class="row-fluid" data-toggle="source-code">
                    <input type="text" placeholder="Text input" class="span10" />
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Extended</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-prepend">
                    <span class="add-on">@</span>
                    <input id="prependedInput" class="span12" type="text" placeholder="Username" />
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Combined</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-prepend input-append">
                    <span class="add-on">$</span>
                    <input class="span12" id="appendedPrependedInput" type="text" placeholder="100,000,000" />
                    <span class="add-on">.00</span>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Checkbox</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body uniformjs">
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" />
                    Option 1 - Sexy checkbox
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" checked="checked" />
                    Option 2 - Checked
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" disabled="disabled" />
                    Option 3 - Disabled checkbox
                </label>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Buttons</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input class="span6" id="appendedInputButtons" type="text" placeholder="Placeholder .." />
                    <button class="btn btn-default" type="button"><i class="icon-search"></i></button>
                    <button class="btn btn-default" type="button">Options</button>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Dropdown / Dropup</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input class="span8" id="appendedDropdownButton" type="text" />
                    <div class="btn-group dropup">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Segmented Groups</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input type="text" class="span7" />
                    <div class="btn-group dropup">
                        <button class="btn btn-default" tabindex="-1">Action</button>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Radio</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body uniformjs">
                <label class="radio">
                    <input type="radio" class="radio" name="radio" value="1" /> Option 1 - Sexy radio
                </label><br/>
                <label class="radio">
                    <input type="radio" class="radio" name="radio" value="1" checked="checked" /> Option 2 - Checked
                </label><br/>
                <label class="radio">
                    <input type="radio" class="radio disabled" name="radio" value="1" disabled="disabled" /> Option 3 - Disabled radio
                </label>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

</div>
<!-- // Row END -->
	