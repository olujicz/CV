<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
        $translate = new Translator($_GET['lang']);
        else
        $translate = new Translator('sr');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Zoran Olujić | GNU/Linux administrator </title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>




<div id="doc2" class="yui-t7">
<?php

if ($_GET["lang"] == "en"){
  echo '<a id="lang" title="Srpska verzija CV-a" href="index.php">Srpski</a>';}
else {
  echo '<a id="lang" title="English version of CV" href="index.php?lang=en">English</a>';}
?>

	<div id="inner">

		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>Zoran Olujić</h1>
					<h2>GNU/Linux administrator</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
                        <h3><a id="pdf" href="<?php $translate->__('Zoran_Olujic_CV.pdf'); ?>"><?php $translate->__('Preuzmi PDF'); ?></a></h3>
                        <h3><a href="http://olujicz.ns-linux.org">olujicz.ns-linux.org</a></h3>
						<h3><script type="text/javascript">
								<!--
								document.write("<a href='mailto:&#111;&#108;&#117;&#106;&#105;&#99;&#122;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;'> &#111;&#108;&#117;&#106;&#105;&#99;&#122;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>")
								// -->
								</script>
						</h3>
						<h3>(060) 0-896-323</h3>
                        <h3><?php $translate->__('Novi Sad'); ?></h3>
					</div><!--// .contact-info -->
				</div>

			</div><!--// .yui-gc -->
						<img style="margin: -130px 0 0;" src="head.png" width="192" height="192" alt="Zoran Olujić" align="right" />
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php $translate->__('Profil'); ?></h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?php $translate->__('Veoma istrajan, precizan i sistematičan u radu. Fleksibilan i staložen u odnosu sa ljudima i uvek spreman na konstruktivan dijalog. Odgovorno i savesno pristupa obavezama i ljudima. Zainteresovan za stalno usavršavanje i napredovanje. Timski igrač.'); ?>

							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php $translate->__('Veštine'); ?></h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Server admin</h2>
									<p><?php $translate->__('Administracija Linux servera, instalacija, održavanje, automatizacija, monitoring...'); ?></p>
								</div>

								<div class="talent">
									<h2>Web admin</h2>
									<p><?php $translate->__('Instalacija i administracija internet stranica: Wordpress, Mediawiki...'); ?></p>
								</div>

								<div class="talent">
									<h2><?php $translate->__('Menadžment'); ?></h2>
									<p><?php $translate->__('Upravljanje projektima. Diplomski rad na temu upravljanja razvojem softvera Scrum metodom.'); ?> </p>
								</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php $translate->__('Tehnička znanja'); ?></h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>Linux</li>
								<li>Windows</li>
								<li class="last">Bash, Python</li>
							</ul>

							<ul class="talent">
								<li>Git, svn</li>
								<li>Amazon AWS, VMware, VBox</li>
								<li class="last">Django, HTML, CSS</li>
							</ul>

							<ul class="talent">
								<li>Apache, Nginx, Tomcat</li>
								<li>CMS: Wordpress, Mediawiki...</li>
								<li class="last">Nagios, Zabbix</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->
					<div class="yui-gf">

						<div class="yui-u first">
							<h2><?php $translate->__('Iskustvo'); ?></h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

                            <div class="job">
                                <h2>Eton Digital Ltd.</h2>
                                <h3>System administrator</h3>
                                <h4>05-2015 <> <?php $translate->__('danas'); ?></h4>
								<p> • <?php $translate->__('Administracija servera'); ?><br /> • <?php $translate->__('Deployment automatizacija'); ?> <br /> • <?php $translate->__('Analitika servera, detekcija i prevencija problema'); ?> <br /> • Load balancing</p>
                            </div>

                            <div class="job">
                                <h2>DEVTECH</h2>
                                <h3>System administrator</h3>
                                <h4>05-2014 <> 05-2015</h4>
                                <p> • Virtualization & System Administrator<br /> •  Parallels Business Automation<br /> •  Parallels Operations Automation <br /> • Parallels Virtuozzo Containers <br /> • Flexiant Cloud Orchestrator <br /> • Maintenance and sandbox setup for developers</p>
                            </div>

							<div class="job">
								<h2>Danulabs d.o.o.</h2>
								<h3><?php $translate->__('Administrator servera'); ?></h3>
								<h4>04-2013 <> 05-2014</h4>
								<p> • <?php $translate->__('Administracija servera'); ?><br /> • <?php $translate->__('Administracija mreže'); ?><br /> • <?php $translate->__('Deployment automatizacija'); ?> <br /> • <?php $translate->__('Analitika servera, detekcija i prevencija problema'); ?> <br /> • MySQL replication, backup, disaster recovery</p>
							</div>

							<div class="job">
								<h2>Hookflash Inc.</h2>
								<h3><?php $translate->__('Administrator servera'); ?></h3>
								<h4>04-2012 <> 11-2012</h4>
								<p> • <?php $translate->__('Administracija servera'); ?><br /> • <?php $translate->__('Deployment automatizacija'); ?> <br /> • <?php $translate->__('Analitika servera, detekcija i prevencija problema'); ?> <br /> • Load balancing</p>
							</div>

							<div class="job">
								<h2>Primatron</h2>
								<h3><?php $translate->__('Instruktor'); ?></h3>
								<h4>05-2011 <> 10-2011</h4>
								<p><?php $translate->__('Obuka polazinka u korišćenju:'); ?> <br /> • <?php $translate->__('MS Office paketa ( Word, Excel, PowerPoint )'); ?> <br /> • <?php $translate->__('MS Windows operativnog sistema'); ?> <br /> • <?php $translate->__('Linux operativnog sistema'); ?> <br /> • <?php $translate->__('Interneta'); ?></p>
							</div>

							<div class="job">
								<h2><?php $translate->__('Ubuntu zajednica Srbije'); ?></h2>
								<h3><?php $translate->__('Administrator servera'); ?></h3>
								<h4>02-2010 <> <?php $translate->__('danas'); ?></h4>
								<p> • <?php $translate->__('Administracija servera'); ?> <br /> • <?php $translate->__('Administracija Web prezentacija'); ?></p>
							</div>


						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php $translate->__('Obrazovanje'); ?></h2>
						</div>
						<div class="yui-u">
							<h2><?php $translate->__('Fakultet Tehničih Nauka, Novi Sad'); ?></h2>
							<h3><?php $translate->__('Inženjerski menadžment &mdash; <strong>Ms.C. Projektni menadžment</strong>'); ?> </h3>
						<br />
						   <h2><?php $translate->__('Cisco Institut za Preduzetništvo, Novi Sad, FTN'); ?></h2>
							<h3><?php $translate->__('iExec Enterprise Essentials v.3.0'); ?> - <a href="docs/Certificate_of_Completion_iExec_Zoran_Olujic.pdf"><?php $translate->__('Preuzmi PDF'); ?></a></h3>
						<br />
							<h2><?php $translate->__('Elektrotehnička-građevinska škola "Nikola Tesla", Zrenjanin'); ?></h2>
							<h3><?php $translate->__('Elektrotehničar pogona'); ?></h3>


						</div>
					</div><!--// .yui-gf -->


					<div class="yui-gf">
						<div class="yui-u first">
							<h2><?php $translate->__('Jezici'); ?></h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li><?php $translate->__('Srpski - Maternji'); ?></li>
								<li><?php $translate->__('Engleski - Odlično poznavanje'); ?></li>
							</ul>
						</div>
					</div><!--// .yui-gf-->



					<div class="yui-gf">

						<div class="yui-u first">
							<h2><?php $translate->__('Ostale aktivnosti'); ?></h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2><?php $translate->__('Ubuntu zajednica Srbije'); ?></h2>
								<h4>2006 <> <?php $translate->__('danas'); ?></h4>
								<p> • <?php $translate->__('Aktivan član lokalne Ubuntu zajednice.'); ?> <br /> • <?php $translate->__('“Ubuntu Planeta” i Wiki administrator'); ?></p>
							</div>

							<div class="job">
								<h2><?php $translate->__('Svet Kompjutera'); ?></h2>
								<h3><?php $translate->__('Autor saradnik'); ?></h3>
								<h4>01-2012 <> <?php $translate->__('danas'); ?></h4>
								<p> • <?php $translate->__('Autor članaka najtiražnijeg kompjuterskog časopisa u Srbiji “Svet Kompjutera” u rubrici “Laki Pingvini”.'); ?></p>
							</div>

							<div class="job">
								<h2>LUGoNS</h2>
								<h4>2006 <> <?php $translate->__('danas'); ?></h4>
								<p> • <?php $translate->__('Sekretar udruženja LUGoNS (Linux User Group of Novi Sad), 2007. i 2008.'); ?> <br /> • <?php $translate->__('Aktivni učesnik u organizovanju događaja kao što su: Install Day i Barcamp.'); ?> <br /> • <?php $translate->__('Predavanje i prezentovanje novih tehnologija na raznim događajima (BlogOpen) itd.'); ?></p>
							</div>


						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php $translate->__('Napravio'); ?> Zoran Olujić &mdash; <script type="text/javascript">
								<!--
								document.write("<a href='mailto:&#111;&#108;&#117;&#106;&#105;&#99;&#122;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;'> &#111;&#108;&#117;&#106;&#105;&#99;&#122;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>")
								// -->
								</script>&mdash; <a href="https://github.com/olujicz/CV" ><?php $translate->__('Izvorni kod CV-a'); ?></a></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

