<?php 

$text = $_POST['data']; 

if ($text == 'ear') {
	echo "
		<li id='ken00'><a href='#'>The Regional Office</a></li>
		<li id='eth01'><a href='#'>Adis Ababa Country Office</a></li>
		<li id='eth02'><a href='#'>Adis Ababa Refugee Community Center (RCC)</a></li>
		<li id='eth03'><a href='#'>Adis Ababa Emergency Needs</a></li>
		<li id='eth04'><a href='#'>Mai-Aini Ref. Camp, Health, Psychosocial & Education support</a></li>
		<li id='eth05'><a href='#'>Melkadida Camp, Youth, Education & Psicosocial support</a></li>
		<li id='ken01'><a href='#'>Nairobi Country Office</a></li>
		<li id='ken02'><a href='#'>Nairobi, Urban Emergency Programme</a></li>
		<li id='ken04'><a href='#'>Kakuma Camp: Social Services</a></li>
	"; 
}

else if ($text == 'eur') {
	echo "
		<li id='bel00'><a href='#'>Bruxelles Regional Office</a></li>
		<li id='aut01'><a href='#'>Vienna Contact Person</a></li>
		<li id='bel01'><a href='#'>Bruxelles Country Office</a></li>
		<li id='hrv01'><a href='#'>Zagreb Country Office</a></li>
		<li id='fra01'><a href='#'>Paris Country Office</a></li>
		<li id='deu01'><a href='#'>Berlin Country Office</a></li>
		<li id='ken01'><a href='#'>Nairobi Country Office</a></li>
		<li id='irl01'><a href='#'>Dublin Country Office</a></li>
		<li id='ita01'><a href='#'>Rome Country Office</a></li>
		<li id='rks01'><a href='#'>Fushe Kosove Country Office</a></li>
		<li id='lux01'><a href='#'>Luxembourg Contact person</a></li>
		<li id='mkd01'><a href='#'>Skopje Country Office</a></li>
		<li id='mlt01'><a href='#'>Birkirkara Country Office</a></li>
		<li id='prt01'><a href='#'>Lisbon Country Office</a></li>
		<li id='rou01'><a href='#'>Bucharest Country Office</a></li>
	"; 
}

else if ($text == 'gla') {
	echo "
		<li id='bdi00'><a href='#'>Bujumbura: Regional Office</a></li>
		<li id='bdi09'><a href='#'>Kibimba, Farm school</a></li>
		<li id='cod01'><a href='#'>Congo Country Office</a></li>
		<li id='cod03'><a href='#'>Masisi: Education</a></li>
		<li id='cod16'><a href='#'>Mweso: Education and Vulnerables</a></li>
		<li id='cod17'><a href='#'>Goma, Emergency</a></li>
		<li id='cod18'><a href='#'>Sake, Education</a></li>
	"; 
}

else if ($text == 'vat') {
	echo "
		<li id='vat01'><a href='#'>International Director & Secretariat</a></li>
		<li id='vat02'><a href='#'>Human Resources</a></li>
		<li id='vat04'><a href='#'>Programmes</a></li>
		<li id='vat06'><a href='#'>Finances</a></li>
		<li id='vat08'><a href='#'>Fundraising</a></li>
		<li id='vat09'><a href='#'>Communications</a></li>
		<li id='vat10'><a href='#'>Publications</a></li>
		<li id='vat11'><a href='#'>Advocacy: Rome</a></li>
		<li id='vat12'><a href='#'>Advocacy: Geneva</a></li>
		<li id='vat16'><a href='#'>Administrative Council</a></li>
		<li id='vat17'><a href='#'>Consultancies</a></li>
		<li id='vat18'><a href='#'>JC:HEM</a></li>
		<li id='vat20'><a href='#'>Rapid Response Team</a></li>
	"; 
}

else if ($text == 'mer') {
	echo "
		<li id='mer00'><a href='#'>The Regional Office</a></li>
		<li id='jor01'><a href='#'>Amman, Country Office</a></li>
		<li id='jor02'><a href='#'>Amman, Project Office</a></li>
		<li id='eth02'><a href='#'>Amman, JC:HEM/a></li>
	"; 
}

else if ($text == 'sar') {
	echo "
		<li id='sar00'><a href='#'>The Regional Office</a></li>
		<li id='ago01'><a href='#'>Luanda: Country Office</a></li>
		<li id='mwi01'><a href='#'>Lilongwe: Country Office</a></li>
		<li id='mwi02'><a href='#'>Dowa District: Dzaleka Camp</a></li>
	"; 
}

else if ($text == 'sas') {
	echo "
		<li id='ind00'><a href='#'>New Dehli: Regional Office</a></li>
		<li id='afg01'><a href='#'>Kabul: Country Office</a></li>
		<li id='afg02'><a href='#'>Herat: Education</a></li>
		<li id='afg05'><a href='#'>Bamiyan: Project Office</a></li>
		<li id='afg06'><a href='#'>Dai Kundi: Settlement Community</a></li>
		<li id='ind01'><a href='#'>India Country Office</a></li>
		<li id='ind02'><a href='#'>T.V. Malai: Educ + Capacity Bld. Srilankan Refugees</a></li>
		<li id='ind03'><a href='#'>Trichy: Educ + Capacity Bld. Srilankan Refugees</a></li>
		<li id='ind04'><a href='#'>Kovai: Educ + Capacity Bld. Srilankan Refugees</a></li>
		<li id='ind05'><a href='#'>Nellai: Educ + Capacity Bld. Srilankan Refugees</a></li>
		<li id='npl01'><a href='#'>Nepal</a></li>
	"; 
}

else if ($text == 'waf') {
	echo "
		<li id='caf01'><a href='#'>Bangui: Country Office</a></li>
		<li id='caf03'><a href='#'>Markounda Education</a></li>
		<li id='caf07'><a href='#'>Markounda, Pastoral</a></li>
		<li id='tcd01'><a href='#'>Abéché: Country Office</a></li>
		<li id='tcd02'><a href='#'>Tchad Est: Education camps réfugiés du Darfour</a></li>
		<li id='tcd04'><a href='#'>Mile and Kounoungu Ref camps: Pre-primary and Primary Edu.</a></li>
		<li id='tcd07'><a href='#'>Abéché and Guereda: Child Soldier Support+ Education</a></li>
		<li id='tcd08'><a href='#'>Goz-Beida + Koukou Camps: Displ children Primary education</a></li>
		<li id='tcd09'><a href='#'>Sila Goz-Beida, Koukou, Kerfi: Éd. préscolaire déplacés</a></li>
		<li id='tcd10'><a href='#'>Mile and Kounoungou Ref camps Guereda: Secondary Education</a></li>
		<li id='tcd12'><a href='#'>Goz Beida and Koukou Camps: Primary Ed for Refugees</a></li>
		<li id='tcd14'><a href='#'>Mile, Iridimi,Toul: Widening possibilities given to youth</a></li>
		<li id='tcd15'><a href='#'>Iriba Camps: Youth Activities</a></li>
		<li id='tcd16'><a href='#'>Iriba Camps: Pre-/Primary & Secondary education</a></li>
		<li id='tcd17'><a href='#'>Goz Beida-Koukou Camps: Pre-/Primary education</a></li>
	"; 
}