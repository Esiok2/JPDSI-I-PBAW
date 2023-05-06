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

   

   <script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="{$conf->app_url}/css/pure/pure-min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
  </head>
  <body>
    <div>
      <div class="header">
        <div class="pure-menu pure-menu-horizontal">
          <a class="pure-menu-heading" href="">{$page_header|default:"Header domyślny"}</a>

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
            <h1 class="text-box-head">{$page_title|default:"Tytuł domyślny"}</h1>
            <p class="text-box-subhead">
            {$page_description|default:"Opis domyślny"}
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

          {block name=content} Domyślna treść zawartości .... {/block}
          </div>
          
        </div>

        <div class="pure-u-1">
          <div class="l-box">
            <h2>{$page_dul|default:"Tytuł dołu"}</h2>

            <p>
              Robiłem to do pierwszej nocy
            </p>

            
          </div>
        </div>
      </div>

      <div class="footer">
    {block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}
      <p> Tamplate by: PureCSS | Prace Wykonał:Krystian Śliski </p>
      </div>
    </div>
  </body>
</html>
