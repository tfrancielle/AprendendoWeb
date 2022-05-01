<html>
   <head>
	   <title>SobreMim!!!Thais</title>
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
		
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" href="css/gallery.theme.css">
      <link rel="stylesheet" href="css/gallery.min.css">
		
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

      <style>
         #feedback { font-size: 1.4em; }
         #selectable .ui-selecting { background: #FECA40; }
         #selectable .ui-selected { background: #F39814; color: white; }
         #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
         #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
      </style>
	</head>
	
	<body>
      <div style="max-width: 350px" id="accordion">
         <h3>Interesses</h3>
        <div>
          <ul>
            <li><b>Vida (Hobbies) :</b> Animais de estimação | Esportes individuais | Gastronomia | Lazer e Turismo | Teatro | Filmes</li>
				<li><b>Carreira :</b> Análise e Desenvolvimento de Sistemas | Engenharia da Computação</li>
          </ul>		  	 
        </div>
        <h3>Personalidade</h3>
        <div>
          <p>
          <b>Executor:</b> seu perfil Executor prefere: atuar focado no resultado e na superação de obstáculos. 
          Pessoas com esse perfil tendem a ser: autoconfiantes, competitivas, ousadas, determinadas, 
          proativas e gostam de desafios.
          </p>
			 <p>
			 <b>Analítico:</b> seu perfil Analítico prefere atuar: focado na qualidade e precisão. Pessoas com esse 
          perfil tendem a ser: curiosas, investigativas, observadoras, cuidadosas, organizadas e atentas 
          aos detalhes.
			 </p>
        </div>
        <h3>Comportamental</h3>
        <div>
          <p>
          <b>Execução:</b> definir e executar ações direcionadas para resultados
          </p>
          <p>
          <b>Visão Analítica:</b> analisar diferentes argumentos e pontos de vista para se posicionar criticamente
          </p>
          <p>
          <b>Trabalho Em Equipe:</b> trabalhar com pessoas de diferentes perfis e construir relações colaborativas
          </p>
          <p>
          <b>Negociação:</b> integrar diferentes pontos de vista e gerar soluções conciliadoras
          </p>			 
        </div>
        <h3>Valores</h3>
        <div>
          <p>
          <b>Crescimento:</b> oportunidades de promoção e de receber novos desafios e responsabilidades.
          </p>
          <p>
          <b>Colaboração:</b> atuação em equipe, compartilhamento e desenvolvimento cooperativo.
          </p>
          <p>
          <b>Aprendizado:</b> incentivo constante para diferenciação de perfil e de competências.
          </p>			 
        </div>
      </div>	
		<div style="width: 850px;height: 420px;top: -1%;position: absolute;float: right; right: 90;" class="gallery autoplay items-3">
         <div id="item-1" class="control-operator"></div>
         <div id="item-2" class="control-operator"></div>
         <div id="item-3" class="control-operator"></div>
		   
         <figure class="item">
             <h1><img src="imagens/1.jpg" width="100%"></h1>
         </figure>
		   
         <figure class="item">
                 <h1><img src="imagens/2.jpg" width="100%"></h1>
         </figure>
		   
         <figure class="item">
             <h1><img src="imagens/3.jpg" width="100%"></h1>
         </figure>
		   
         <div class="controls">
             <a href="#item-1" class="control-button">.</a>
             <a href="#item-2" class="control-button">.</a>
             <a href="#item-3" class="control-button">.</a>
         </div>
		</div>
		
   </body>
	
   <script type="text/javascript">
      $( function() {
        $( "#accordion" ).accordion();
      } );
   </script>	
	
</html>