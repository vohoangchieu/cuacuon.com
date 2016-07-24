
<header class="header-style-1">
    <div id="alterna-header" style="padding: 0!important">
        <div class="container" style="padding: 0">
            <div class="logo">
                <a href="/" title="CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI XÂY DỰNG NỘI THẤT Á CHÂU">						
                    <img class="logo-default" src="/static/mobile/Header-THP.png" alt="logo">
                    <img class="logo-retina" src="/static/mobile/Header-THP.png"  alt="logo">
                </a>
            </div>
            <div class="header-social-container">
                <ul class="inline alterna-social header-social">
                </ul>
            </div>
        </div>
    </div>
    <!-- mobile show drop select menu -->
    <div id="alterna-drop-nav" class="navbar">
        
        <div id="alterna-nav-menu-select" class="navbar-inverse">
            
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                DANH MỤC<span class="fa fa-bars"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
                </ul>
            </div>
            <!--<input type="text"/><input type="button" value="search"/>-->
        </div>
    </div>
    <!-- menu & search form -->
    <nav id="alterna-nav">
        <div class="container">
            <div class="alterna-nav-menu-container">
                <ul id="menu-menu" class="alterna-nav-menu">
                    <?php
                     foreach ($list_category as $category) {
                         $active="";
        if (isset($category_id) && ($category_id == $category['id'])) {
            $active="active";
           // echo "<div class=\"f s\"><a href=\"{$category['url']}\">{$category['name']}</a></div>";
        } 
            //echo "<div class=\"f\"><a href=\"{$category['url']}\">{$category['name']}</a></div>";
            echo "<li id=\"menu-item-49\" class=\" $active menu-item menu-item-type-post_type menu-item-object-page menu-item-49\"><a href=\"{$category['url']}\">{$category['name']}</a></li>";
        
    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

