<script src="{{ mix('/js/app.js')}}"></script>
<script src="{{ mix('/js/components.js')}}"></script>

{{-- <script src="{{ asset('js/sweetalert2.js') }}"></script> --}}

<script>

	$().ready(function() {
   
     /*  @if ($errors->any())
			@foreach ($errors->all() as $erro)
			
         @endforeach
			@endif */
			
		@if ($errors->any())
         @foreach ($errors->all() as $error)
			
				console.log("{{ $error }}");
				//funcoes.notificationRight("top", "right", "rose", "Senha não confere");     				

				new PNotify({
					title: 'Oh No!',
					text: "{{ $error }}",
					type: "error",
					styling: 'fontawesome',
					desktop: {
						desktop: true,
			
					}
				});
				
            
         @endforeach
      @endif
   
      
	});
	
</script>

