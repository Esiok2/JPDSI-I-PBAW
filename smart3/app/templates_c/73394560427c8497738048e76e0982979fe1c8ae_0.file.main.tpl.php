<?php
/* Smarty version 4.3.1, created on 2023-04-24 00:51:09
  from 'E:\xampp\htdocs\smart3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6445b65d53dd30_76789270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73394560427c8497738048e76e0982979fe1c8ae' => 
    array (
      0 => 'E:\\xampp\\htdocs\\smart3\\templates\\main.tpl',
      1 => 1682290266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445b65d53dd30_76789270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="A layout example that shows off a responsive photo gallery."
    />
    <title>Photo Gallery &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/pure/pure-min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/styles.css" />
  </head>
  <body>
    <div>
      <div class="header">
        <div class="pure-menu pure-menu-horizontal">
          <a class="pure-menu-heading" href=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Header domyślny" ?? null : $tmp);?>
</a>

          <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected">
              <a href="#" class="pure-menu-link">Home</a>
            </li>
            <li class="pure-menu-item">
              <a href="#" class="pure-menu-link">Blog</a>
            </li>
            <li class="pure-menu-item">
              <a href="#" class="pure-menu-link">About</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="pure-g">
        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <a href="http://www.dillonmcintosh.tumblr.com/">
            <img
              src="https://24.media.tumblr.com/d6b9403c704c3e5aa1725c106e8a9430/tumblr_mvyxd9PUpZ1st5lhmo1_1280.jpg"
              alt="Beach"
            />
          </a>

          <aside class="photo-box-caption">
            <span
              >by
              <a href="http://www.dillonmcintosh.tumblr.com/"
                >Dillon McIntosh</a
              ></span
            >
          </aside>
        </div>

        <div class="text-box pure-u-1 pure-u-md-1-2 pure-u-lg-2-3">
          <div class="l-box">
            <h1 class="text-box-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
            <p class="text-box-subhead">
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

            </p>
          </div>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <a
            href="https://www.flickr.com/photos/leshaines123/9199788659/in/photolist-f1XjDR-oqUsF4-eGN3fd-uLvGyn-nsUXqP-6tKPeq-h2Bwtz-6oVtec-3vzcD-nhKUBn-eGN7RY-atDkE4-6qpKgh-5qhbkM-eXSJSR-8YGjfD-eXSK7n-c3hvqo-ddvqc2-h1FgsH-4W6bip-dcnDYJ-ejny6W-bEnete-qoSUSt-nyApt1-cs1Paf-oanrNv-dmE5c9-c4Sgiq-nLYPa4-eHQbYp-fn8csk-uq4gKy-fp186j-7ZcaSx-6wMKEA-kERNCe-veHJHy-eGNaj5-4VddEM-rXUqrU-9X8YXf-87nMXX-tKCh7h-u88G4h-nHuLus-9WPUyn-8fjvkU-nKyT33"
          >
            <img
              src="https://c2.staticflickr.com/6/5515/9199788659_818383d0b8_k.jpg"
              alt="Meadow"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by
              <a
                href="https://www.flickr.com/photos/leshaines123/9199788659/in/photolist-f1XjDR-oqUsF4-eGN3fd-uLvGyn-nsUXqP-6tKPeq-h2Bwtz-6oVtec-3vzcD-nhKUBn-eGN7RY-atDkE4-6qpKgh-5qhbkM-eXSJSR-8YGjfD-eXSK7n-c3hvqo-ddvqc2-h1FgsH-4W6bip-dcnDYJ-ejny6W-bEnete-qoSUSt-nyApt1-cs1Paf-oanrNv-dmE5c9-c4Sgiq-nLYPa4-eHQbYp-fn8csk-uq4gKy-fp186j-7ZcaSx-6wMKEA-kERNCe-veHJHy-eGNaj5-4VddEM-rXUqrU-9X8YXf-87nMXX-tKCh7h-u88G4h-nHuLus-9WPUyn-8fjvkU-nKyT33"
                >Les Haines</a
              >
            </span>
          </aside>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <a href="http://www.nilssonlee.se/">
            <img
              src="https://24.media.tumblr.com/23e3f4bb271b8bdc415275fb7061f204/tumblr_mve3rvxwaP1st5lhmo1_1280.jpg"
              alt="City"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by <a href="http://www.nilssonlee.se/">Jonas Nilsson Lee</a>
            </span>
          </aside>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <a href="http://www.flickr.com/photos/rulasibai/">
            <img
              src="https://24.media.tumblr.com/ac840897b5f73fa6bc43f73996f02572/tumblr_mrraat0H431st5lhmo1_1280.jpg"
              alt="Flowers"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by
              <a href="http://www.flickr.com/photos/rulasibai/">Rula Sibai</a>
            </span>
          </aside>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <a href="http://www.flickr.com/photos/charliefoster/">
            <img
              src="https://24.media.tumblr.com/e100564a3e73c9456acddb9f62f96c79/tumblr_mufs8mix841st5lhmo1_1280.jpg"
              alt="Bridge"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by
              <a href="http://www.flickr.com/photos/charliefoster/"
                >Charlie Foster</a
              >
            </span>
          </aside>
        </div>

        <div class="photo-box photo-box-thin pure-u-1 pure-u-lg-2-3">
          <a
            href="https://www.flickr.com/photos/82955120@N05/12024271573/in/photolist-jjxx28-f2vns5-jjw3rg-phetyV-djcGV4-7TBwup-7DxDnn-d4c1eC-aYoN8H-dBd8UG-ayQR7Z-8yhyLk-4nTgvd-dGtHuM-6WHtpP-9Dz8tA-gtnVfQ-rkCwz9-aYCE1B-hnK3Xs-axv6P4-pFPBdL-9vFwzg-afJk9N-dd3EJJ-oF1Nc2-aYoMCx-xojot-4Ypyo9-6BxaC2-6ybPn5-HSvt5-asaoZL-dd3CtM-9RJXk3-HSuZp-fe9yXi-7irigF-pgqPwH-9QQ2SU-dd3C2T-ccB6t5-fhtH3c-odGZC3-a4ppMF-ohvnyp-uiUswa-uYhWFR-6Cb4M6-5GoD9y"
          >
            <img
              src="https://c2.staticflickr.com/4/3676/12024271573_d266422362_h.jpg"
              alt="Balloons"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by
              <a
                href="https://www.flickr.com/photos/82955120@N05/12024271573/in/photolist-jjxx28-f2vns5-jjw3rg-phetyV-djcGV4-7TBwup-7DxDnn-d4c1eC-aYoN8H-dBd8UG-ayQR7Z-8yhyLk-4nTgvd-dGtHuM-6WHtpP-9Dz8tA-gtnVfQ-rkCwz9-aYCE1B-hnK3Xs-axv6P4-pFPBdL-9vFwzg-afJk9N-dd3EJJ-oF1Nc2-aYoMCx-xojot-4Ypyo9-6BxaC2-6ybPn5-HSvt5-asaoZL-dd3CtM-9RJXk3-HSuZp-fe9yXi-7irigF-pgqPwH-9QQ2SU-dd3C2T-ccB6t5-fhtH3c-odGZC3-a4ppMF-ohvnyp-uiUswa-uYhWFR-6Cb4M6-5GoD9y"
                >Nicolas Raymond</a
              >
            </span>
          </aside>
        </div>

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-2-3">
          <a href="http://twitter.com/iBoZR">
            <img
              src="https://25.media.tumblr.com/95c842c76d60b7bc982d92c76216d037/tumblr_mx3tnm96k81st5lhmo1_1280.jpg"
              alt="Rain Drops"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by <a href="http://twitter.com/iBoZR">Thanun Buranapong</a>
            </span>
          </aside>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-3">
          <a href="http://www.goodfreephotos.com/">
            <img
              src="https://25.media.tumblr.com/88b812f5f9c3d7b83560fd635435d538/tumblr_mx3tlblmY21st5lhmo1_1280.jpg"
              alt="Port"
            />
          </a>

          <aside class="photo-box-caption">
            <span>
              by <a href="http://www.goodfreephotos.com/">Yinan Chen</a>
            </span>
          </aside>
        </div>

        <div class="pure-u-1 form-box">
          <div class="l-box">
            <h2></h2>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14668790326445b65d53abb5_72255734', 'content');
?>

          </div>
        </div>

        <div class="pure-u-1">
          <div class="l-box">
            <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_dul']->value ?? null)===null||$tmp==='' ? "Tytuł dołu" ?? null : $tmp);?>
</h2>

            <p>
              Robiłem to do pierwszej nocy
            </p>

            
          </div>
        </div>
      </div>

      <div class="footer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4094253416445b65d53d533_78427617', 'footer');
?>

      <p> Tamplate by: PureCSS | Prace Wykonał:Krystian Śliski </p>
      </div>
    </div>
  </body>
</html>
<?php }
/* {block 'content'} */
class Block_14668790326445b65d53abb5_72255734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14668790326445b65d53abb5_72255734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_4094253416445b65d53d533_78427617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4094253416445b65d53d533_78427617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
}