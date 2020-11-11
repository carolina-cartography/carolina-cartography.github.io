<html>

	<head>

		<title>Carolina Cartography Collective</title>
		<meta charset="UTF-8">
		<!-- Testing deployment -->

		<!-- Fonts & Libraries -->
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.4.0.min.js"
			integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
			integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
			crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
			integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
			crossorigin=""></script>

		<!-- Site CSS-->
		<link rel="stylesheet" href="main.css" />

		<!-- Site JS -->
		<script src="main.js"></script>

	</head>

	<body>

		<!-- Header -->
		<header class="text-section">
			<h1>Carolina Cartography Collective</h1>
			<div class="navigation lang-en">
				<a href="#about">About</a>
				<a href="#team">Team</a>
				<a href="#" class="switch-language" id="show-es">En Español</a>
			</div>
			<div class="navigation lang-es">
				<a href="#sobre">Sobre</a>
				<a href="#equipo">Equipo</a>
				<a href="#" class="switch-language" id="show-en">In English</a>
			</div>
		</header>

		<!-- Projects -->
		<div class="projects">
			<div class="project section">
				<div class="project-heading text-section lang-en">
					<h2>Visualizing Vieques</h2>
					<p><i>Visualizing Vieques</i> is the first project of the Collective. Our projects integrate the insights and methodologies from our various backgrounds, which include creative writing, geography, history, environmental science, art history, and urban planning. The interdisciplinary nature of this project is reflected in the variety of visualizations and projects that we are working on. Our maps incorporate themes of health, transportation, environmental change, land dispossession, and gentrification. Our next steps are to install a physical exhibit in Vieques and incorporate community feedback into our continued work.</p>
					<p>This visualization shows Vieques in 1937, 1977, and 1983. We created each map using smaller aerial images that we processed using GIS to make into a full visualization of the island. Then, we ‘georectified’ each image by aligning them with the coordinates of a world map. We chose to create these historic maps as the first step in this larger project because we did not encounter any complete aerial maps of the island in our research. We wanted to see what the island looked like as a whole before the Navy occupation, which led us to the 1937 images. In order to see how the landscape has changed, we decided to also create the 1977 and 1983 maps. We hope that these maps illustrate the changes and part of the history of Vieques in a geographic and interesting way.</p>
					<p><i>Hover over the years to view layers.</i> <a href="vieques.html">Click here</a> to view map in full screen.</p>
				</div>
				<div class="project-heading text-section lang-es">
					<h2>Visualizando Vieques</h2>
					<p><i>Visualizando Vieques</i> es el primero proyecto del Colectivo. Nuestros proyectos integran los conocimientos y las metodologías de nuestros fondos diferente, que incluyen la escritura creativa, historia, geografía, historia del arte, las ciencias ambientales, y el planeamiento urbano. El carácter interdisciplinario de este proyecto se refleja en la variedad de visualizaciones y proyectos en los que estamos trabajando. Nuestras mapas incorporan temas de la salud, la transportación, los cambios ambientales, el despojo de tierras, y la gentrificación. Nuestros próximos pasos son instalar una exhibición física en Vieques y incorporar comentarios de la comunidad en nuestro trabajo continuo.</p>
					<p>Este visualización ilustra Vieques en 1937, 1977, y 1983. Creímos cada mapa usando imágenes más pequeñas que tratamos usando una sistema de información geográfica para crear un visualización completa de la isla. Luego, nosotros georectificamos cada imágen alineándolas con coordenadas de el mapa mundial. Elegimos crear estas mapas históricos como un primer paso en el proyecto más grande porque no nos encontramos ningún mapa aéreo completo de la isla en nuestros investigaciones. Queríamos ver cómo se veía la isla completa antes de la ocupación del Marino, lo que nos llevó a las imágenes de 1937. Para ver cómo ha cambiado el paisaje, decidimos crear también los mapas de 1977 y 1983. Esperamos que estos mapas ilustran los cambios y parte de la historia de Vieques en una manera interesante y geográfica.</p>
					<p><i>Pose el mouse sobre los años para ver las capas diferentes.</i> <a href="vieques.html">Haga clic aquí</a> para ver la mapa en pantalla completa.</p>
				</div>
				<div class="project-body">
					<div class="years">
						<div class="year" id="showLayer1937">1937</div>
						<div class="year" id="showLayer1977">1977</div>
						<div class="year" id="showLayer1983">1983</div>
						<div class="year" id="showLayer2009">2009</div>
					</div>
					<div id="primary-map" class="map"></div>
				</div>
			</div>
		</div>

		<!-- About -->
		<div class="text-section section lang-en" id="about">
			<h2>About</h2>
			<p>Working at the intersections of mapping, narrative, and human geography, the Carolina Cartography Collective draws from across disciplines to present new perspectives on spaces, places, and geographic difference. We welcome inquiries from students, scholars, artists, and activists across disciplines at <a href="mailto:jarce@live.unc.edu">jarce@live.unc.edu</a></p>
		</div>
		<div class="text-section section lang-es" id="sobre">
			<h2>Sobre</h2>
			<p>Trabajando en las intersecciones de la cartografía, narrativa, y geografía humana, el Colectivo Cartografía de Carolina se basa en diferentes disciplinas para presentar perspectivos nuevos sobre el espacio, los lugares, y las diferencias geográficas. Damos la bienvenida a estudiantes, escolares, artistas, y activistas entre todas las disciplinas a <a href="mailto:jarce@live.unc.edu">jarce@live.unc.edu</a></p>
		</div>

		<!-- Team -->
		<div class="text-section section team lang-en" id="team">
			<h2>Team</h2>
			<p><b>Javier Arce Nazario</b> is an Associate Professor of Geography at UNC-Chapel Hill. His research has focused on the biophysical and social components of the Puerto Rican landscapes and how they affect water quality and adaptability to extreme precipitation events. He is interested in how historical orthophotography can be used as an outreach tool for education and community involvement in water quality and environmental concerns. Dr. Arce Nazario studied Ecology, Evolution and Environmental Biology at Columbia University, writing his dissertation on how humans and rivers shape the Peruvian Amazon landscape. Before joining the Geography department at UNC-Chapel Hill, he held a University of California President's Postdoctoral Fellow position at UC Berkeley and professorships at the University of Puerto Rico campuses at Utuado and Cayey.</p>
			<p><b>Isabelle Smith</b> is a graduate of Geography at UNC-Chapel Hill. Isabelle comes from the mountains of western North Carolina and the farmlands of  upstate New York. She is interested in agriculture, political ecology, feminist geographies, and going swimming in North Carolina's lakes and rivers as much as possible.</p>
			<p><b>Nicolas Scheffer</b> is a Ph.D. student in the department of Geography at UNC-Chapel Hill. His interests are broadly related to the political ecology of land tenure and degradation. His master's thesis research examines debates over land ownership and road development in Haiti in the context of the infrastructural legacies of the U.S. Occupation (1915-34). He conducts archival research on road construction during this period as part of a larger ethnographic work on everyday life and mobility in Port-au-Prince. </p>
			<p><b>Aisling Henihan</b> is a graduating senior studying Art History, Geography, and Creative Writing at UNC-Chapel Hill. She is interested in landscapes of memory -- why, what, and how we remember.</p>
			<p><b>Klaus Mayer</b> is a senior undergraduate student of Geography and History at UNC-Chapel Hill. He enjoys sitting on his porch and is interested in alternative economies in Colombia and using oral history for studying spatial history.</p>
			<p><b>Ezra Rawitsch</b> is a senior undergraduate in Geography at UNC-Chapel Hill. He is interested in transitional urban political economies with a focus on post-Socialism, architecture and urban design, and geovisualization.</p>
			<p><b>Tomas Roy</b> is a web developer from Waxhaw, NC who's curious about materialist philosophy, urban homelessness and radical forms of travel.</p>
		</div>
		<div class="text-section section team lang-es" id="equipo">
			<h2>Equipo</h2>
			<p><b>Javier Arce Nazario</b> es un profesor asociado de geografía a UNC-Chapel Hill. Su investigación ha enfocado en los componentes biofísicos y sociales de los paisajes puertorriqueños y cómo han afectado la calidad del agua y la adaptabilidad a los eventos de precipitación extrema. Está interesado en cómo se puede usar la ortografía histórica como una herramienta para la educación y la participación de la comunidad en la calidad del agua y las preocupaciones ambientales. Dr. Arce Nazario estudió ecología, evolución, y biología ambiental en la Universidad de Columbia, escribiendo su tesis sobre cómo los humanos y los ríos dan forma al paisaje de la Amazonía peruana. Antes de su posición en UNC-Chapel Hill, tuvo el puesto de miembro postdoctoral de la Universidad de California a la Universidad de Berkeley y fue profesor en la Universidad de Puerto Rico en Utuado y Cayey.</p>
			<p><b>Isabelle Smith</b> es un estudiante de grado en Geografía y escritura creativa en UNC-Chapel Hill. Isabelle viene de las montañas de Carolina del Norte y la tierra agrícola de Nueva York. Ella está interesada en la agricultura, ecología política, las geografías feministas y nadar lo más posible en los lagos y ríos de Carolina del Norte.</p>
			<p><b>Nicolas Scheffer</b>) es un Ph.D estudiante en el departamento de Geografía a UNC-Chapel Hill. Sus intereses son ampliamente relacionados a la ecología política de la tenencia de tierra y la degradación. Su investigación de tesis examina a los debates sobre la posesión de tierra y el desarrollo de calles en Haití en el contexto de los legados infraestructurales de la ocupación de los Estados Unidos (1915-34). Él realiza investigaciones de archivo sobre la construcción de carreteras durante este periodo como parte de un proyecto etnográfico más grande sobre la vida cotidiana y la movilidad en Port-eu-Prince.</p>
 			<p><b>Aisling Henihan</b> acaba de graduarse de UNC-Chapel Hill con estudios en la geografía, la historia del arte, y la escritura creativa. Está interesada en los paisajes de memoria—porque, que, y como nos recordamos.
 			Klaus Mayer es un estudiante en su año tercero a UNC-Chapel Hill en la geografía y historia. Él disfruta sentándose en el porche y está interesado en las economías alternativas en Colombia y en usar historias orales para estudiar historia espacial.</p>
 			<p><b>Ezra Rawitsch</b> acaba de graduarse de UNC-Chapel Hill con estudio en geografía. Está interesado en las economías políticas, urbanas, y transicionales con un enfoque en el post-socialismo, la arquitectura, el diseño urbano, y geo-visualización.<p>
 			<p><b>Tomas Roy</b> es un desarrollador de web de Waxhaw, NC. Está interesado en la filosofía materialista, los que están sin hogar en los ciudades, y formas radicales de viaje.</p>
		</div>

		<!-- Footer -->
		<footer></footer>

	</body>
</html>