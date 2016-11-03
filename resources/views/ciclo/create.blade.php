@extends('template.main')

@section('title', 'Crear ciclo')

@section('content')


 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ciclo
            <small> nuevo</small>
          </h1>
          <ol class="breadcrumb">
            
            <li class="active">Nuevo</li>
          </ol>

        </section>

        <!--     -->

        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">

          <div class="box box-primary">

            <div class="box-body">

              <div class="col-xs-12">
                <div class="panel panel-info">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Formulario Nuevo Ciclo</div>
                  </div>

                  <!-- Aqui se mostrara el mensaje -->
                  @include('template.partials.mensaje')
	

              </div>

          </div>

          <div class="panel-body">
          	{!! Form::open(['action' => 'CicloController@store']) !!}
   				
	   			<div class="form-group">
		            {!! Form::label('codigo','Código') !!}
		            {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'C0I2016','pattern'=>'[A-Za-z]{3}-[0-9]{5}','title'=>'QUR-115','required'])!!}
	          	</div>

	            <div class="form-group">
            		{!! Form::label('ciclo','Ciclo') !!}
            		{!! Form::text('ciclo',null,['class'=>'form-control','placeholder'=>' Ciclo I','required'])!!}  
          		</div>

          		<div class="form-group">
            		{!! Form::label('anio','Año') !!}
            		{!! Form::number('anio',null,['class'=>'form-control','placeholder'=>' 2016','required', 'min'=>'2000', 'required'  ])!!}  
          		</div>


          		<div>
	          		{!! form::label('fechaInicio', 'Fecha de inicio') !!}<br>
		              <form id="fechaInicio" name="fechaInicio">
		              	<input class="form-control" name="fechaInicio" data-provide="datepicker" placeholder="mes/dia/año" required="true"><br>
		              </form>		
          		</div>
              
      			<div>              	
              {!! form::label('fechaFin', 'Fecha de fin') !!}<br>
	              <form id="fechaFin" name="fechaFin">
	              	<input class="form-control" name="fechaFin" data-provide="datepicker" placeholder="mes/dia/año" required="true"><br>
	              </form>
              </div>


              <div class="panel-body">

               {!! Form::submit('Guardar', ['class'=> 'btn-primary' ]) !!}  
         	</div>



          {!! Form::close()!!}
      </div>

         </div>
       </section>




@endsection


@section('js')

	<script>
		$('.datepicker').datepicker({
        startDate: '-3d'
    	});
	</script>
	
      
@endsection('js')
