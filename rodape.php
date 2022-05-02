    </div>
	<!-- /.row -->
	</div>
	<!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"> Copyright &copy; Desenvolvido por Hildebrando Alves | Ano 2020 </p>
		<div style='float:right;'>
			<a href="?Topo"><img src="Template/img/seta.png" width="50" height="50" style="display:scroll; position:fixed; bottom:5px; right:5px;" title="Voltar ao Topo" /></a>
		</div>
    </div>
    <!-- /.container -->
  </footer>

	<!-- Redimensionar Modal -->
    <div class="modal fade" id="redimensionarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Alterar tamanho da imagem! </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"><p style="color: #FF0000;"> Antes de realizar o cadastro de produto, altere o tamanho da imagem original clicando em "OK". </p></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Não </button>
            <a class="btn btn-primary" href="Redimensionar-Imagem.php"> OK </a>
          </div>
        </div>
      </div>
    </div>

	<!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Tem certeza que você deseja encerrar? </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"> Selecione "Sim" para sair ou "Não" para continuar a sessão. </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Não </button>
            <a class="btn btn-primary" href="Models/Logout.php"> Sim </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Verificar Endereço -->
	<script src="Template/js/verificar-endereco.js"></script>
	<!-- Validar CPF -->
	<script src="Template/js/validar-cpf.js"></script>
	<!-- Máscara da Moeda -->
	<script src="Template/js/mascara-modeda.js"></script>
	<!-- Zoom da Imagem -->
	<script src="Template/js/zoom-imagem.js"></script>
	<!-- Efeito de Zoom -->
    <script type="text/javascript">
		imageZoom("myimage", "myresult");
    </script>
	<!-- Ocultar/Mostrar -->
    <script type="text/javascript">
	function mostra(id){
		if(document.getElementById(id).style.display == 'none'){
			document.getElementById(id).style.display = 'block';
		}else{
			document.getElementById(id).style.display = 'none';
		}
	}
	</script>
  <!-- Bootstrap core JavaScript -->
  <script src="Template/vendor/jquery/jquery.min.js"></script>
  <script src="Template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>