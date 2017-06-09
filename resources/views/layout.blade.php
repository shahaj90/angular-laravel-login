<html lang="en" data-ng-app="MetronicApp">
    <!--Start Head-->
    <head>
        <title data-ng-bind="$state.current.data.pageTitle"></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN DYMANICLY LOADED CSS FILES(all plugin and page related styles must be loaded between GLOBAL and THEME css files ) -->
        <link id="ng_load_plugins_before" />
        <!-- END DYMANICLY LOADED CSS FILES -->
        <!-- BEGIN THEME STYLES -->
        <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
        <link href="{{asset('assets/global/css/components.min.css')}}" id="style_components" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout2/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <script type="text/javascript">
            var baseUrl = "{{url('/')}}/";
        </script>
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    </head>
    <!-- END HEAD -->
    <!-- Start BODY -->
    <body ng-controller="AppController" class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-on-load" ng-class="{
                'page-sidebar - closed': settings.layout.pageSidebarClosed}">
        <!--BEGIN PAGE SPINNER--> 
        <div ng-spinner-bar class="page-spinner-bar">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <div ui-view class="fade-in-up"> </div>

        <!-- END CONTAINER -->
        <!--Script-->
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE JQUERY PLUGINS -->
        <!-- BEGIN CORE ANGULARJS PLUGINS -->
        <script src="{{asset('assets/global/plugins/angularjs/angular.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/angular-cookies.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/angular-sanitize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/angular-touch.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/plugins/angular-ui-router.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js')}}" type="text/javascript"></script>
        <!--<script src="{{asset('assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>-->
        <!-- END CORE ANGULARJS PLUGINS -->
        <!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
        <script src="{{asset('app/main.js')}}" type="text/javascript"></script>
        <script src="{{asset('app/directives.js')}}" type="text/javascript"></script>
        <script src="{{asset('app/script/factory/UserModel.js')}}" type="text/javascript"></script>
        <!-- END APP LEVEL ANGULARJS SCRIPTS -->
        <!-- BEGIN APP LEVEL JQUERY SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
        <!-- END APP LEVEL JQUERY SCRIPTS -->
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>