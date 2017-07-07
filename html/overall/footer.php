
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="footer1-4" style="background-image: url(views/images/bg3.jpg);">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(68, 68, 68);"></div>
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"><?php echo APP_COPY ?> <a class="mbr-footer__link text-gray" href="#/">Terminos de Uso</a>  | <a class="mbr-footer__link text-gray" href="#/">Política de Privacidad</a></p>
            </div>
        </div>
    </div>
</footer>



<script>
    $(function() {
    	// Botón para subir la firma
		var btn_firma = $('#addImage'), interval;
			new AjaxUpload('#addImage', {
				action: 'core/bin/ajax/uploadFile.php',
				onSubmit : function(file , ext){
					if (! (ext && /^(jpg|png)$/.test(ext))){
						// extensiones permitidas
						alert('Sólo se permiten Imagenes .jpg o .png');
						// cancela upload
						return false;
					} else {
						$('#loaderAjax').show();
						btn_firma.text('Espere por favor');
						this.disable();
					}
				},
				onComplete: function(file, response){

					// alert(response);

					btn_firma.text('Cambiar Imagen');

					respuesta = $.parseJSON(response);

					if(respuesta.respuesta == 'done'){
						$('#fotografia').removeAttr('scr');
						$('#fotografia').attr('src','views/app/images/productos/' + respuesta.fileName);
						$('#loaderAjax').show();
						// alert(respuesta.mensaje);
					}
					else{
						alert(respuesta.mensaje);
					}

					$('#loaderAjax').hide();
					this.enable();
				}
		});
    });
</script>
  <script src="views/web/assets/jquery/jquery.min.js"></script>
  <script src="views/bootstrap/js/bootstrap.min.js"></script>
  <script src="views/smooth-scroll/SmoothScroll.js"></script>
  <script src="views/jarallax/jarallax.js"></script>
  <script src="views/mobirise/js/script.js"></script>
</html>
