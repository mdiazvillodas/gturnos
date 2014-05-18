<html>
    <head>
        <title>Gestión de Turnos</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="stylesheet" type="text/css" href="./css/ionicons.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>	
	<link rel="shortcut icon" href="favicon.ico">	      
	<script type="text/javascript" src="./js/mootools.js"></script>
	<script type="text/javascript" src="./js/mootools-more.js"></script>
 	<script type="text/javascript" src="./js/funciones.js"></script> 
        <script type="text/javascript">
		function openLinkSimple(href, div){
			var request = new Request.HTML({
                        url: href,
                        method: 'get',
                        update: $(div),
                        onFailure: function(xhr){
                                $(div).setProperty('html', xhr.responseText);
                                }
                        });
			request.send();
			}
	</script>
    </head>
    <body>
	   <div class="nav-bar"></div>
	   <div class="l-bar">
			<ul class="nav-list">
				<li class="item">
				    <div class="a">
						<i class="ion-clock"></i>
						<span class="menu-item">Operacion diaria</span>
				    </div>
				</li>
				<li class="item">
				    <div class="a">
						<i class="ion-clock"></i>
						<span class="menu-item">Operacion diaria</span>
				    </div>
				</li>
			</ul>
	   </div>
	   <div class="main-content">
			<div class="calendar">
				    <div class="controles">
						text
				    </div>
				    <div class="header">
						<div class="col first">
							    <div class="dia">
									<span>Horario</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia">
									<span>Lunes</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia">
									<span>Martes</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia">
									<span>Miercoles</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia">
									<span>Jueves</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia">
									<span>Viernes</span>
							    </div>
						</div>
				    </div>
				    <div class="body">
						<div class="col first">
							    <div class="dia">
									<span class="hora">08:00</span>
							    </div>
							    <div class="dia">
									<span class="hora">08:20</span>
							    </div>
							    <div class="dia">
									<span class="hora">08:40</span>
							    </div>
							    <div class="dia">
									<span class="hora">09:00</span>
							    </div>
							    <div class="dia">
									<span class="hora">09:20</span>
							    </div>
							    <div class="dia">
									<span class="hora">09:40</span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span>Maria Fernandez</span>
							    </div>
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia blocked">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span>Maria Fernandez</span>
							    </div>
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia blocked">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span>Maria Fernandez</span>
							    </div>
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia blocked">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span>Maria Fernandez</span>
							    </div>
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia blocked">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
						</div>
						<div class="col">
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span>Maria Fernandez</span>
							    </div>
							    <div class="dia taken">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia free">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
							    <div class="dia blocked">
									<div class="dia-top">
										    <div class="bloq">
												<i class="ion-close-round"></i>
										    </div>
										    <div class="cancel">
												<i class="ion-minus-round"></i>
										    </div>
									</div>
									 <span></span>
							    </div>
						</div>

				    </div>
			</div>
	   </div>
    </body>
</html>