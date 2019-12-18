<!DOCTYPE html>
<html lang="en">
  	<head>
   	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
		<meta name="author" content="Joe Kotlan">
		<script defer src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
		
		<? wp_head(); ?>

		<? if(is_page_template('page-inspiration-year.php') || is_singular('work')): ?><link href="<? bloginfo('template_directory'); ?>/css/lightbox.css" rel="stylesheet" /><? endif; ?>
		<link href="<? bloginfo('template_directory'); ?>/css/svg.css" rel="stylesheet" />
		<? $stylePath = get_template_directory().'/style.css'; $styleMobilePath = get_template_directory().'/css/mobile.css'; ?>
		<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/style.css?v=<? echo filemtime($stylePath); ?>" />
		<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/mobile.css?v=<? echo filemtime($styleMobilePath); ?>" media="screen and (max-width: 1281px)" />
		<link rel="icon" href="<? bloginfo('template_directory'); ?>/assets/favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" href="<? bloginfo('template_directory'); ?>/assets/ipad-retina.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<? bloginfo('template_directory'); ?>/assets/iphone-retina.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<? bloginfo('template_directory'); ?>/assets/ipad.png" />
		<link rel="apple-touch-icon" href="<? bloginfo('template_directory'); ?>/assets/iphone.png" />
		<link href="https://fonts.googleapis.com/css?family=Muli:600,800|Noto+Sans+JP:900" rel="stylesheet">
		<script data-ad-client="ca-pub-3117114011597757" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143243332-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-143243332-1');
		</script>
  	</head>
  	<!--
	                               `/+o/.
                           .+sso+/:oydyo/:-:+shdys/    `-:.     `-/+o+/`
                       `/sdh+/::/::ss:`ymdhyso//hmMNyhNNms+ososys+/-:/shms/`
                    .+hNNy++oo+/.`.--/osyhdmNNMMMMMMMMMNdsssssoso+hhhhsoo+ymdo.
                  -smNy/+ymmmmmNNNNMNMMMMMNNNmmNMMMMMMMMMho:///:--shydNMMNdo-sNs`
                -hNd+-sNMNdmNMMMNNNMNNNMMMddNMMNNmNMMMMMMNmy+///::/:-:/++ymNNdmMN:
              `sNMs`+NMNNNMMMMNNNMMMMMMNmhyso///+ohMmoNMmoo+/::/-:oymNNmsosshdhmMM/
             +NMMy`hMMMhyNMNMMNNNMds:-.`-:syddmNMMmyo`+yMMho:..-+//++omMNNNNNNNmdNMs
           :mMMMh`yMNdodNNNMNMMMs.+sdmmmmmdhNMMMNhy/..`-syhNmdyssso+/.`:yNMMMMNMNMMMy
          :NMNh:-+MMh+mdNNNNNMd.+NNMMMMMMMMmho:-......:--::ohNMMMMMMNmNy/.oNMNmNMNMMMs
         :NMm+/dmmMNydyhNdhMMN.yMMNmhysso+:-``        ```.--:/+sdMMMMMNNNm:-mMNNNNMMMMy
        :NMy/hNMMMMmNddsh/NmMy-Mms:..`.--.`                ``..-.:yNMMMMNMNs:NMMMNNNNMMy
       :NNy/mMMMMMMmNMMshsNdMo/d-...``                       ```...-yMMMNNMd`NMMNMdmoNMM-
      /mMm+NMNNMMNMNNNNNNNNMMmom/                              ```..`+NMMMMh`NMMMMNNdhNMh
     +NMMmmMNyNMNMMMMMNmmmNMdNNyh+.                             ``````/NMMM::MMMMNMNNmNMN
    +MNNMMMNymMNNMMMNNNNNMh+:+dNmddhyoo+`                        ````.`sMMN`sMNNMNNMNNNNN
    dNNNMNNddMNNNNNNmymMN+---::/shdhyyy:                         `````..hMo.NMNMNMMMNmMMd
    dNNNMMNmNNNmmNMNdNMM+.-..----.-:::.                          ````...:mh/NMMMNMMMNNMMh
    sMNNMMNMNNmyNMNdmNMo--.....                                  ``...---:dNMNMMNMMNNNMMN.
    :NNNMMMNNNsmMNmMNMy...`.-.`                                    `.-----:odNmmNMMMMMNMMo
    .NMMMmMMMNmMNNNNMm:-.```..                                       ``-----:/o//dMMMNMMMm
    .NMMMNMMNMMNMNNNNs--.``...                                          `....---..dMNMMMMM`
    .NNMMNNNNNMMMNNNN:-...`...                                           ```.....`+MMMMMMM.
    .MNNNNNNNMMMMMNNy.......-.`                                          ``..---.`.NMMMMMM`
    `NMNMMNNNMMNMMMm-...`.-----.`                                        ``.-----.`yMMMMMd
     dMMMNNNNMMNNMMo`-....----..`          ``                      `.`` ```.------`:MMMMM-
     /MMNMNNNMMNMMN-`.`..-.--.` `--..-:-.-.``..``               ```.-......--.----..NMMMd
     `mMNMNNMMMNNMN.``...-.-../hddyysyhysyyso+--/::-..--...----:::+syyyyhhdddy+:-.-.hMMM:
      :NNNNNNMMMMMN.`....--.:dy/:-.-/+++ososss+/:+shyo/::/:+os+:+syosyoso+/://ss//.`+MMm
       +MdmNNMNMMMN+.--....:+-.-:+ooymdddmdhyo++ss+/yMo.`..oNsyhdhmdmmmmNmdo:-.--:+-:MM/
      `y/..-+dNNMMMo-shhyo++--+sso-`dsymoso.smyso+//.od+/:/ho+yyhd/ymsNhyy./yy/``.-hhmm`
      .s+md+- oMMMm``.-/sy//-.+/s.  odys+s-  /shyso+.sm+:::yd/hh+:`.hyyhy- `/y/.` `hs/s`
      -oyMNyhs:NMMo     `.-`         .---` ``.`/::+s/ms````-mo+:`````.--` ````     `sNm`
      `hsMh`.hymMM:       `-         `          .:+:hy`     od:-`                  .+sM-``
       o+o/``-/mMM-        .-                ``.```hy`       s.`.`                 -/+M+``
       .s `./NMMMM-         --            ````  `:ho`        .s`  ```             ./.+My`
        /: `+MMdMM/          -.  `       `   ..+++-           :d/.             ``:o-`oMy
         o. .sdNMMm`            `--:://+//.`-///:.           `.ohooo:-.`` `.-:+//:..`hMy
         `s```.yMMMs                  ```     .y+  `::.:----.-``o:-::/:::--:::-----..mMo
          :s` `oMNMN-                         :N+  -NNhy/:/sds./:..----------------`/MN.
           +o``-NMNMd`                      `-syyoo++/.++:so/+yN+..--....-..-....--`dM+
            +:.`oMNNN`                     .:-` `.::.` `--..---/+/---.```........-.:d:
             ./++Ny::`                   `--`          .--..-----::-..```......---.s.
               `:os.--`                  .`            `.. ``.------.`.```..-----.:o
                 `h-..`                 ``        .:syy/-/ydho-.--...`````.------.+.
                  +o`.`                        ./ymNNNNNNNmmNNNh:....``.```.-----:s
                  `h-`.                    -/+oyo/:----:---.--:+sso:........--::-+:
                   /d...                 `.++:  -:--/+:/oo+o++-.``--.....-----:-:y
                   `Md:.`                ``     `-:/+ooooo+/-........-----------yo
                    mNNs-`                     `..-/oo+://:/oo:......----------os
                    h:+md:.                  ...``.`         `------.---------++
                   `h..-+ddo.`                            ``.----------------s:
                    h` .--/ydy:`                   `...--------------------+y.
                    h`   ..--+yds+.`               `....----------------:+dN`
                   `y      `.-.-:sdhs:.`    `...````..----------------:smsdm
                   `h         .--..-+ymdy+/:----:----------------.-/shs+.`os
                   `h           `..--..:sdmmhyo/::----------::/+syhy/....`+-
                   -y              `..--..--/oosyyyhhhyyyssoooo/:.`...`.` /-
                   `.                  `..--.......................````   +`
                                          `...------..-.........``
                                              ``..-.--........``
                                                   ```..```
  	-->
  	<body>
  		<button class="menu" aria-label="Main Menu">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<div class="social-sidebar <? if(is_front_page()){echo 'front';} ?>">
			<a href="<? the_field('spotify', 'option'); ?>" target="_blank" rel="noreferrer"><img src="<? bloginfo('template_directory'); ?>/assets/social/spotify.svg" alt="spotify logo" width="20"/></a>
			<a href="<? the_field('instagram', 'option'); ?>" target="_blank" rel="noreferrer"><img src="<? bloginfo('template_directory'); ?>/assets/social/instagram.svg" alt="instagram logo" width="20"/></a>
			<a href="<? the_field('twitter', 'option'); ?>" target="_blank" rel="noreferrer"><img src="<? bloginfo('template_directory'); ?>/assets/social/twitter.svg" alt="twitter logo" width="20"/></a>
			<a href="<? the_field('dribbble', 'option'); ?>" target="_blank" rel="noreferrer"><img src="<? bloginfo('template_directory'); ?>/assets/social/dribbble.svg" alt="dribbble logo" width="20"/></a>
		</div>
  		<header id="swup" class="transition-fade">
			<nav>
				<ul>
					<?php wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => false,
						'items_wrap' 		  => '%3$s',
						'walker'            => new Christopher(),
					)); ?>
				</ul>
			</nav>
			<img src="<? bloginfo('template_directory'); ?>/assets/curve.svg" alt="" class="corner" />
		</header>