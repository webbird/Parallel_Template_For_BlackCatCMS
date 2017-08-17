<!doctype html>
<html>
<head>
	{get_page_headers}
</head>
<body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 top-navbar">
                    <header id="masthead" class="site-header" role="banner">
                        <div class="navbar-header">
                            <button type="button" class="menu-toggle navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 class="site-title"><a href="{$CAT_URL}" title="// {page_header()}" rel="home">// {page_header()}</a></h1>
                        </div>
                        <div class="navigation-top">
                            <div class="wrap">
                                    <div id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                                        <div class="menu-top-menu-container">
{cat_fullmenu(1, top_ul_class: "menu", ul_class: "sub-menu", current_li_class: "current-menu-item active", trail_li_class: "current-menu-item active", has_child_li_class: "menu-item-has-children")}
                                        </div>
                                    </div><!-- #site-navigation -->
                                </div><!-- .wrap -->
                        </div><!-- .navigation-top -->
                    </header>
                </div>
           </div>
        </div>
    </nav>