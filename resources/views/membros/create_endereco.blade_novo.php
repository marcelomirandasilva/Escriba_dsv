
@if(isset($edita))

   @foreach($membro->enderecos as $endereco)

      @include('membros.create_endereco_box')

   @endforeach

@else

   <?php $tipo = 0;  ?>

   @include('membros.create_endereco_box')
<?php $tipo = 1;  ?>
   @include('membros.create_endereco_box')

@endif

<!-- ----------------------------------------------------------------------------------------------------- -->
