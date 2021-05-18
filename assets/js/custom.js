$("body").on('click', 'a', function(event){

  if($(this).attr('href') == '#' || $(this).attr('target') == '_blank' || $(this).data('ajax') == false){
    return true;
  }
  if ($(this).attr('href') == 'appUsuario/logout.php')
  {
    location.href='appUsuario/logout.php';
    return false;
  }
  if ($(this).attr('href') == 'principal.php')
  { 
    location.href='principal.php';
    return false;
  }

  /*if ($(this).attr('href').startsWith('paciente.php'))
  {
    var url = new URL($(this).attr('href').val());
    var id_paciente = url.searchParams.get("id_paciente");
    var ds_nome = url.searchParams.get("id_paciente");
    location.href='paciente.php?id_paciente='+id_paciente+'&ds_nome='+ds_nome;
    return false;
  }*/

  if ($(this).attr('href').startsWith('#kt_portlet_base_demo') )
  {
    return true;
  }


  event.preventDefault();
  redirectTo($(this).attr('href'));
});



function redirectTo(url, successCallback){
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'html',
  })
  .done(function(data) {
    $('#conteudo').html(data);
    /*if(!$("#kt_subheader").length)
    {
      $('#conteudo').css("margin-top", "-55px");  
    }
    $('#conteudo').css("margin-top", "-55px");*/


    
      if (typeof(successCallback) === "function") {
        successCallback();
      }
  })
  .fail(function(data) {
    
    if (data.status ==401)
    {
      window.location.href = "/index.php"; 
    }

    if (data.status ==500)
    {
      swal.fire("Erro", data.responseText, "error");
    }       
   
  });
  
}
var slide_wrp 		= ".side-menu-wrapper"; //Menu Wrapper
var open_button 	= ".menu-open"; //Menu Open Button
var close_button 	= ".menu-close"; //Menu Close Button
var overlay 		= ".menu-overlay"; //Overlay

//Initial menu position
$(slide_wrp).hide().css( {"right": -$(slide_wrp).outerWidth()+'px'}).delay(50).queue(function(){$(slide_wrp).show()}); 

$(open_button).click(function(e){ //On menu open button click
	e.preventDefault();
	$(slide_wrp).css( {"right": "0px"}); //move menu right position to 0
	setTimeout(function(){
		$(slide_wrp).addClass('active'); //add active class
	},50);
	$(overlay).css({"opacity":"1", "width":"100%"});
});

$(close_button).click(function(e){ //on menu close button click
	e.preventDefault();
	$(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}); //hide menu by setting right position 
	setTimeout(function(){
		$(slide_wrp).removeClass('active'); // remove active class
	},50);
	$(overlay).css({"opacity":"0", "width":"0"});
});

$(document).on('click', function(e) { //Hide menu when clicked outside menu area
	if (!e.target.closest(slide_wrp) && $(slide_wrp).hasClass("active")){ // check menu condition
		$(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}).removeClass('active');
		$(overlay).css({"opacity":"0", "width":"0"});
	}
});

$('.botao-menu').click(function (e)
	{
		$('.botao-menu').removeClass('botao-menu-active');
		$(this).addClass('botao-menu-active');

	});


  $('.botao-menu-painel').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-painel').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-painel').addClass('texto-menu-active');

	});

  $('.botao-menu-alugar').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-alugar').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-alugar').addClass('texto-menu-active');

	});

  $('.botao-menu-alugadas').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-alugadas').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-alugadas').addClass('texto-menu-active');


	});

  $('.botao-menu-financeiro').click(function (e) 
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-financeiro').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-financeiro').addClass('texto-menu-active');
    


	});

  $('.botao-menu-usuario').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-usuario').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-usuario').addClass('texto-menu-active');

	});

  $('.botao-menu-categoria').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-categoria').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-categoria').addClass('texto-menu-active');


	});

  $('.botao-menu-ponto').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-ponto').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-ponto').addClass('texto-menu-active');
    

	});

  
  $('.botao-menu-relatorio').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-relatorio').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-relatorio').addClass('texto-menu-active');
    

	});

  
  $('.botao-menu-parceiro').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-parceiro').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-parceiro').addClass('texto-menu-active');
    

	});

  $('.botao-menu-material').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-material').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-material').addClass('texto-menu-active');
    

	});

  
  $('.botao-menu-bisemana').click(function (e)
	{
    $('.svg-hover').removeClass('svg-active');
    $('.svg-bisemana').addClass('svg-active');
    $('.texto-menu').removeClass('texto-menu-active');
    $('.texto-menu-bisemana').addClass('texto-menu-active');
    

	});


  $('#nav_toggle').click(function(e){
    $(this).addClass("d-none")
    $("#nav_toggle_open").removeClass('d-none')
    $('.texto-menu').addClass("d-none")
    $('#navbar').css({"width": "120px"})
    $("#kt_wrapper").css({"margin-left" : "120px"})


  });

  $('#nav_toggle_open').click(function(e){
    $(this).addClass("d-none")
    $("#nav_toggle").removeClass('d-none')
    $('.texto-menu').removeClass('d-none')
    $('#navbar').css({"width": "265px"})
    $("#kt_wrapper").css({"margin-left" : "265px"})


  });





