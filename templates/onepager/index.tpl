{include file="../default/header.tpl"}
{include file="sections/parallax.tpl" block=1 id="welcome" class="hero"}
{include file="sections/multicolumn.tpl" block=2 class="features border-top border-bottom" id="benefits"}
{include file="sections/multicolumn.tpl" block=3 class="testimonials" id="testimonials"}
{include file="sections/parallax.tpl" class="parallax parallax1" id="parallax1"}
{include file="sections/multicolumn.tpl" block=4 class="work" id="work" class="work sr reveal"}
{include file="sections/gallery.tpl" block=5 class="work sr reveal"}
{include file="sections/multicolumn.tpl" block=6 class="work sr reveal"}
{include file="sections/multicolumn.tpl" block=7 class="sr reveal"}
{page_content(8)}{*map*}
{include file="../default/footer.tpl"}

{*
$block = array(
    1 => 'header',
    2 => 'benefits',
    3 => 'testimonials',
    4 => 'work',
    5 => 'gallery',
    6 => 'grid',
    7 => 'pricing',
    8 => 'map',
);
*}