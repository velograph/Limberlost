<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Limberlost
 */
?>


	<section class="mailing-list section">

		<div class="section-portal">
			<?php $mobile = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'portal-mobile'); ?>
			<?php $tablet = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'portal-tablet'); ?>
			<?php $desktop = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'banner-desktop'); ?>
			<?php $retina = wp_get_attachment_image_src(get_field('mailing_list_background_image', 2153), 'banner-retina'); ?>

			<picture>
				<!--[if IE 9]><video style="display: none"><![endif]-->
				<source
					srcset="<?php echo $mobile[0]; ?>"
					media="(max-width: 500px)" />
				<source
					srcset="<?php echo $tablet[0]; ?>"
					media="(max-width: 860px)" />
				<source
					srcset="<?php echo $desktop[0]; ?>"
					media="(max-width: 1180px)" />
				<source
					srcset="<?php echo $retina[0]; ?>"
					media="(min-width: 1181px)" />
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo $image[0]; ?>">
			</picture>

		</div>

		<div class="section-supporting">

			<div class="section-content">

				<h4>Want to stay updated?</h4>
				<?php echo do_shortcode('[epm_mailchimp]'); ?>

			</div>

		</div>

	</section>

	<section class="section instagram">

		<?php echo do_shortcode('[instagram-feed]'); ?>

	</section>

	<section class="footer-container">

		<footer class="section footer">

			<div class="footer-section site-logo">
				<svg viewBox="0 0 520 200">
				    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <path d="M261.572244,91.0755985 C264.795244,79.7935985 256.361244,71.0985985 251.140244,97.7245985 C248.724244,110.023598 251.588244,115.562598 262.929244,107.722598 C263.359244,109.613598 264.019244,112.512598 264.019244,112.512598 C264.019244,112.512598 260.623244,118.804598 249.371244,119.984598 C249.371244,119.984598 233.471244,123.070598 236.693244,99.9285985 C239.914244,76.7855985 254.326244,75.5555985 260.285244,75.4885985 C266.244244,75.4205985 275.461244,77.7735985 272.502244,89.0895985 C269.545244,100.404598 258.890244,102.637598 252.922244,103.465598 C252.869244,100.918598 253.490244,99.3985985 253.490244,99.3985985 C253.490244,99.3985985 259.709244,97.6015985 261.572244,91.0755985 L261.572244,91.0755985 Z M318.506244,85.6745985 C311.992244,86.8515985 306.533244,84.7595985 307.359244,79.2325985 C303.193244,79.1365985 298.658244,82.3115985 298.658244,82.3115985 L292.892244,116.190598 L278.492244,117.197598 L283.974244,85.7405985 C281.613244,88.1275985 277.381244,89.1065985 274.201244,89.5095985 C274.883244,86.8925985 274.988244,84.5615985 274.554244,82.5185985 C281.390244,80.1165985 286.117244,73.4435985 286.117244,73.4435985 L300.511244,72.4365985 L299.773244,76.6865985 C299.773244,76.6865985 305.701244,71.7595985 312.500244,72.1715985 C319.617244,72.6035985 322.619244,78.8825985 318.506244,85.6745985 L318.506244,85.6745985 Z M474.177244,38.8335985 C468.814244,41.1305985 461.568244,41.0585985 453.533244,40.1965985 C454.256244,36.0425985 454.756244,33.1715985 454.873244,32.5005985 C455.486244,28.9775985 453.879244,26.2335985 448.347244,26.6205985 C445.722244,26.8045985 441.590244,27.0925985 441.590244,27.0925985 C441.590244,27.0925985 440.804244,31.5975985 439.629244,38.3305985 C423.343244,36.0895985 409.947244,35.0325985 402.953244,37.7995985 C393.252244,41.6405985 389.924244,49.0315985 389.449244,52.5155985 C388.945244,56.2475985 389.779244,55.8205985 391.970244,53.6865985 C396.529244,49.2495985 406.107244,45.2045985 425.103244,45.7605985 C427.888244,45.8425985 432.672244,46.2775985 438.160244,46.7595985 C434.650244,66.8835985 429.654244,95.5435985 429.238244,97.9315985 C428.592244,101.642598 429.619244,107.139598 435.287244,106.743598 C439.088244,106.477598 443.412244,105.198598 448.410244,98.8905985 C448.099244,97.2585985 447.908244,96.2795985 447.619244,94.7565985 C445.775244,96.4785985 443.556244,97.4155985 444.228244,93.6175985 C444.828244,90.2335985 449.242244,64.8705985 452.201244,47.8565985 C460.144244,48.3435985 467.447244,48.4495985 470.760244,47.3755985 C474.685244,46.1025985 476.076244,42.6035985 476.613244,39.6575985 C477.146244,36.7125985 475.605244,38.2215985 474.177244,38.8335985 L474.177244,38.8335985 Z M213.880244,79.8595985 L213.042244,84.6085985 C213.999244,84.3555985 215.134244,84.2715985 216.136244,84.6915985 C218.379244,85.6305985 220.317244,89.0665985 218.572244,99.3535985 C215.238244,119.002598 204.207244,121.385598 205.838244,111.955598 C206.703244,106.957598 217.861244,42.9545985 217.861244,42.9545985 L203.463244,43.9615985 C203.463244,43.9615985 200.264244,50.3555985 191.460244,53.0955985 C187.986244,54.1755985 185.468244,56.4745985 184.871244,57.6075985 C184.275244,58.7425985 184.040244,60.2515985 185.779244,59.7745985 C190.226244,58.5545985 196.134244,59.3035985 201.432244,55.6145985 C200.381244,61.6475985 196.527244,83.7465985 193.676244,100.119598 C190.824244,116.492598 196.558244,123.701598 208.532244,122.863598 C220.506244,122.027598 229.252244,114.633598 231.819244,99.9025985 C235.221244,80.3635985 222.967244,73.3625985 213.880244,79.8595985 L213.880244,79.8595985 Z M415.984244,81.3045985 C415.984244,81.3045985 422.545244,79.7995985 430.717244,78.9745985 C431.224244,76.2455985 431.363244,75.3615985 431.562244,74.2205985 C419.929244,74.9305985 411.699244,76.7625985 411.699244,76.7625985 L415.984244,81.3045985 Z M509.763244,72.4255985 C506.111244,72.6945985 507.154244,69.6205985 510.761244,69.3995985 C522.156244,68.6995985 524.099244,71.3665985 509.763244,72.4255985 L509.763244,72.4255985 Z M498.312244,73.7215985 C502.797244,73.4105985 503.888244,69.7655985 499.513244,70.0755985 C495.138244,70.3855985 449.566244,73.4245985 449.566244,73.4245985 L448.781244,77.9215985 C448.781244,77.9215985 493.828244,74.0335985 498.312244,73.7215985 L498.312244,73.7215985 Z M10.0822443,107.150598 C13.6882443,106.928598 14.7312443,103.854598 11.0792443,104.124598 C-3.25675567,105.182598 -1.31375567,107.849598 10.0822443,107.150598 L10.0822443,107.150598 Z M72.8842443,97.8555985 C72.8842443,97.8555985 72.8712443,97.8565985 72.8632443,97.8575985 C72.4752443,100.072598 72.0932443,102.250598 71.7222443,104.373598 C71.7442443,104.371598 71.7552443,104.371598 71.7552443,104.371598 L72.8842443,97.8555985 Z M22.5302443,102.827598 C18.0452443,103.138598 16.9542443,106.783598 21.3292443,106.473598 C25.6352443,106.169598 70.3402443,104.426598 71.7222443,104.373598 C72.0932443,102.250598 72.4752443,100.072598 72.8632443,97.8575985 C71.9672443,97.9495985 26.9702443,102.518598 22.5302443,102.827598 L22.5302443,102.827598 Z M357.215244,94.4895985 C357.215244,94.4895985 356.902244,96.3695985 357.076244,98.0075985 C384.502244,89.1185985 376.052244,117.390598 360.019244,126.965598 C338.328244,139.918598 320.271244,146.293598 237.771244,146.793598 C155.273244,147.293598 107.536244,134.486598 61.7732443,137.543598 C19.2662443,140.383598 7.05924433,157.855598 1.84024433,171.046598 C-3.10475567,183.541598 0.778244325,200.241598 27.6222443,199.339598 C56.1892443,198.380598 74.9222443,179.140598 79.7492443,150.317598 C79.7832443,150.116598 79.9812443,148.994598 80.1422443,148.112598 C80.1422443,148.112598 77.7982443,147.887598 73.1812443,147.659598 C68.5642443,147.431598 65.8672443,147.430598 65.8672443,147.430598 C65.8672443,147.430598 64.6552443,154.221598 63.9802443,158.054598 C63.3042443,161.888598 60.1752443,178.244598 41.9602443,187.540598 C16.2422443,200.664598 -3.60975567,187.284598 13.2622443,164.457598 C33.1252443,137.586598 80.4842443,145.359598 129.023244,152.293598 C178.023244,159.293598 249.953244,166.196598 295.953244,162.193598 C341.953244,158.193598 373.736244,135.175598 380.359244,116.043598 C387.121244,96.5165985 375.715244,83.5605985 357.215244,94.4895985 L357.215244,94.4895985 Z M114.933244,116.888598 C115.817244,111.890598 120.340244,85.7595985 120.340244,85.7595985 L105.941244,86.7665985 C105.941244,86.7665985 99.6372443,95.6985985 91.0282443,96.6035985 C90.6122443,99.1185985 89.9012443,103.091598 89.9012443,103.091598 C89.9012443,103.091598 99.7102443,103.202598 103.825244,99.0395985 C102.774244,105.071598 100.589244,117.490598 99.9432443,121.201598 C99.2962443,124.912598 100.323244,130.409598 105.991244,130.013598 C109.791244,129.747598 114.116244,128.469598 119.114244,122.160598 C118.804244,120.527598 118.613244,119.549598 118.323244,118.025598 C116.480244,119.748598 114.261244,120.684598 114.933244,116.888598 L114.933244,116.888598 Z M113.897244,69.9005985 C111.173244,70.0185985 108.072244,71.1315985 107.400244,75.9405985 C106.992244,78.8575985 109.627244,82.6235985 121.213244,81.0735985 C125.793244,73.3935985 121.046244,69.5965985 113.897244,69.9005985 L113.897244,69.9005985 Z M110.345244,3.17859849 C99.5522443,9.65459849 87.8732443,22.5475985 83.4192443,47.8125985 C79.3342443,70.9815985 69.6522443,126.428598 68.0722443,135.474598 C70.8222443,135.375598 73.6272443,135.320598 76.5492443,135.320598 C78.5182443,135.321598 80.4972443,135.351598 82.4842443,135.394598 C84.0792443,126.247598 92.8772443,75.8205985 96.0942443,57.5755985 C99.6382443,37.4765985 102.718244,18.0015985 113.031244,8.79159849 C123.344244,-0.418401513 128.477244,7.20859849 123.584244,20.3045985 C118.691244,33.3995985 100.559244,42.8975985 100.559244,42.8975985 C99.1992443,49.9955985 99.2972443,49.8575985 98.0402443,56.2805985 C118.763244,43.4725985 129.485244,28.2185985 130.204244,14.1155985 C130.923244,0.0125984873 121.138244,-3.29740151 110.345244,3.17859849 L110.345244,3.17859849 Z M399.863244,86.3885985 C399.863244,86.3885985 397.633244,83.9025985 396.959244,83.0755985 C396.396244,82.3865985 395.390244,80.8875985 395.390244,80.8875985 C395.390244,80.8875985 383.373244,83.4695985 384.453244,96.4155985 C385.252244,105.992598 391.515244,111.547598 407.117244,108.541598 C425.203244,105.054598 423.156244,91.5825985 417.363244,85.3865985 C411.566244,79.1905985 411.875244,79.5195985 409.906244,77.4165985 C401.820244,68.7705985 408.828244,65.6115985 411.435244,66.7395985 C410.078244,71.1685985 414.051244,74.1885985 421.750244,72.7975985 C426.332244,63.7195985 418.689244,60.3625985 405.599244,62.8855985 C393.705244,65.1775985 392.064244,75.9755985 400.203244,84.2555985 C403.922244,88.0365985 402.508244,86.7675985 407.498244,92.0815985 C414.738244,99.7955985 407.359244,105.619598 401.828244,103.674598 C399.203244,102.752598 396.593244,101.358598 395.506244,95.9845985 C394.047244,88.7625985 399.863244,86.3885985 399.863244,86.3885985 L399.863244,86.3885985 Z M366.125244,67.3075985 C359.933244,67.8475985 345.842244,69.4405985 342.564244,91.6125985 C339.556244,111.952598 353.529244,112.601598 358.760244,112.144598 C362.002244,111.861598 368.283244,110.824598 373.308244,105.128598 C373.426244,103.929598 373.377244,102.830598 373.119244,101.894598 C372.396244,99.2775985 370.248244,98.0065985 366.552244,98.0065985 C366.111244,98.0065985 365.642244,98.0345985 365.164244,98.0725985 C363.240244,103.220598 361.164244,104.774598 359.386244,104.929598 C356.482244,105.183598 354.217244,102.191598 355.892244,90.7815985 C357.629244,78.9465985 360.951244,73.2695985 364.107244,72.3075985 C367.424244,71.2985985 369.652244,75.7385985 368.529244,83.3985985 C368.232244,85.4185985 367.920244,87.2355985 367.593244,88.9065985 C368.345244,88.8155985 369.090244,88.7625985 369.816244,88.7625985 C373.607244,88.7625985 376.920244,90.0735985 379.394244,92.4655985 C379.683244,91.2305985 379.933244,89.9235985 380.136244,88.5285985 C382.842244,69.9505985 372.316244,66.7655985 366.125244,67.3075985 L366.125244,67.3075985 Z M35.0772443,45.1375985 C33.7822443,43.8425985 31.6232443,42.2605985 32.1982443,48.8795985 C32.7742443,55.4995985 40.5452443,69.7465985 53.6412443,69.7465985 C66.3152443,69.7465985 77.9102443,65.1635985 78.6432443,64.8685985 C79.6382443,59.2005985 80.5512443,54.0065985 81.3122443,49.6855985 C46.9212443,58.4695985 36.3672443,46.4295985 35.0772443,45.1375985 L35.0772443,45.1375985 Z M187.416244,113.449598 C185.572244,115.172598 183.353244,116.107598 184.025244,112.310598 C184.909244,107.313598 187.814244,90.6055985 187.814244,90.6055985 C189.243244,82.3935985 183.885244,81.1965985 181.247244,81.3805985 C178.609244,81.5655985 176.755244,83.1145985 173.974244,85.3715985 C171.409244,87.4525985 169.352244,88.2945985 167.157244,88.9015985 C166.892244,83.4715985 162.640244,82.5985985 160.378244,82.7575985 C157.739244,82.9415985 155.886244,84.4915985 153.105244,86.7485985 C150.602244,88.7795985 148.583244,89.6295985 146.447244,90.2345985 L147.685244,83.1275985 L133.280244,84.1375985 C133.280244,84.1375985 128.128244,91.4085985 120.786244,93.4835985 L119.573244,100.365598 C122.735244,100.125598 128.315244,99.2935985 131.165244,96.4095985 L125.659244,127.918598 L140.060244,126.910598 L145.300244,96.8215985 C146.626244,96.4805985 149.663244,95.5865985 152.374244,93.9665985 L146.771244,126.357598 L161.105244,125.439598 C161.105244,125.439598 164.566244,105.627598 166.349244,95.3965985 C167.753244,95.0265985 170.645244,94.1425985 173.243244,92.5905985 C173.243244,92.5905985 169.753244,112.908598 169.107244,116.619598 C168.460244,120.330598 169.416244,125.832598 175.084244,125.435598 C178.884244,125.170598 183.209244,123.890598 188.207244,117.584598 C187.896244,115.950598 187.705244,114.972598 187.416244,113.449598 L187.416244,113.449598 Z M341.060244,102.610598 C341.351244,103.804598 341.734244,104.922598 342.228244,105.940598 C340.834244,107.217598 332.722244,114.296598 323.890244,114.775598 C318.217244,115.084598 317.812244,109.221598 318.459244,105.510598 C319.105244,101.803598 328.767244,46.4125985 328.791244,46.2785985 C323.494244,49.9625985 317.588244,49.2155985 313.142244,50.4345985 C311.404244,50.9115985 311.638244,49.4025985 312.236244,48.2675985 C312.832244,47.1345985 315.351244,44.8355985 318.824244,43.7555985 C327.629244,41.0155985 330.828244,34.6215985 330.828244,34.6215985 L345.226244,33.6155985 L345.218244,33.6255985 L345.232244,33.6155985 C345.232244,33.6155985 334.478244,95.6965985 333.593244,100.693598 C332.937244,104.406598 335.898244,106.087598 341.060244,102.610598 L341.060244,102.610598 Z" fill="#373A39"></path>
				    </g>
				</svg>
			</div>
			<div class="footer-section primary-menu">
				<?php wp_nav_menu( array('theme_location' => 'mobile')); ?>
			</div>
			<div class="footer-section supporting-menu">
				<?php wp_nav_menu( array('theme_location' => 'supporting')); ?>
			</div>
			<div class="footer-section social-media">
				<div class="social-account facebook">
					<svg viewBox="0 0 20 20">
					<path d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h7v-7H8V9.525h2V7.475c0-2.164,1.212-3.684,3.766-3.684l1.803,0.002v2.605
						h-1.197C13.378,6.398,13,7.144,13,7.836v1.69h2.568L15,12h-2v7h4c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z"/>
					</svg>
				</div>
				<div class="social-account twitter">
					<svg viewBox="0 0 20 20">
					<path d="M17.316,6.246c0.008,0.162,0.011,0.326,0.011,0.488c0,4.99-3.797,10.742-10.74,10.742c-2.133,0-4.116-0.625-5.787-1.697
						c0.296,0.035,0.596,0.053,0.9,0.053c1.77,0,3.397-0.604,4.688-1.615c-1.651-0.031-3.046-1.121-3.526-2.621
						c0.23,0.043,0.467,0.066,0.71,0.066c0.345,0,0.679-0.045,0.995-0.131c-1.727-0.348-3.028-1.873-3.028-3.703c0-0.016,0-0.031,0-0.047
						c0.509,0.283,1.092,0.453,1.71,0.473c-1.013-0.678-1.68-1.832-1.68-3.143c0-0.691,0.186-1.34,0.512-1.898
						C3.942,5.498,6.725,7,9.862,7.158C9.798,6.881,9.765,6.594,9.765,6.297c0-2.084,1.689-3.773,3.774-3.773
						c1.086,0,2.067,0.457,2.756,1.191c0.859-0.17,1.667-0.484,2.397-0.916c-0.282,0.881-0.881,1.621-1.66,2.088
						c0.764-0.092,1.49-0.293,2.168-0.594C18.694,5.051,18.054,5.715,17.316,6.246z"/>
					</svg>
				</div>
				<div class="social-account instagram">
					<svg viewBox="0 0 20 20">
					<path d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h14c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z M9.984,15.523
						c3.059,0,5.538-2.481,5.538-5.539c0-0.338-0.043-0.664-0.103-0.984H17v7.216c0,0.382-0.31,0.69-0.693,0.69H3.693
						C3.31,16.906,3,16.598,3,16.216V9h1.549C4.488,9.32,4.445,9.646,4.445,9.984C4.445,13.043,6.926,15.523,9.984,15.523z M6.523,9.984
						c0-1.912,1.55-3.461,3.462-3.461c1.911,0,3.462,1.549,3.462,3.461s-1.551,3.462-3.462,3.462C8.072,13.446,6.523,11.896,6.523,9.984z
						 M16.307,6h-1.615C14.31,6,14,5.688,14,5.308V3.691C14,3.309,14.31,3,14.691,3h1.615C16.69,3,17,3.309,17,3.691v1.616
						C17,5.688,16.69,6,16.307,6z"/>
					</svg>
				</div>
			</div>

		</footer>

	</section>

	<div class="copyright">
		Limberlost &copy; <?php the_time('Y'); ?>. Explore the 33rd.
	</div>

<?php wp_footer(); ?>

</body>
</html>
