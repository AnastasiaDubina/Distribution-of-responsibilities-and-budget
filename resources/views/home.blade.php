
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Распределение обязанностей</div>

                <div class="panel-body">
				@if (count($errors)>0)
					<div class ="alert alert-danger">
						@foreach($errors->all() as $err)
							<div class = "errors">{{$err}}</div>
						@endforeach
					</div>
				@endif
					<form method='POST' action='home' enctype='multipart/form-data'>
						{{csrf_field()}}
						
					<div class="form-group">
						<label for='project_name'> Название проекта </label>
						<input type='text' name='project_name' id='project_name' class="form-control" />
					</div>
					
					<div class="form-group"> 
						<label for='project_description'> Описание </label>
						<textarea class="form-control" rows="5" name='project_description'></textarea>
					</div>

					<div class="form-group"> 
						<label for='department_name'> Выбор отдела </label>
						<select class="form-control" name='department_name'>
						<option>Отдел рекламы</option>
						<option>Бухгалтерский отдел</option>
						<option>Отдел тестирования</option>
						<option>Отдел разработчиков</option>
						<option>Отдел бизнес-анализа</option>
						</select>
					</div>	
					
					<div class="form-group">
						<label for='work'> Обязанность </label>
						<input type='text' name='work' id='work' class="form-control" />
					</div>
					
					<div class="form-group"> 
						<label for='budget'> Бюджет </label>
						<input type='text' name='budget' id='budget' class="form-control"  />
					</div>
					
					<div class="form-group">
						<label for='data'> Дата </label>
						<input type='date' name='data' id='data' class="form-control" />
					</div>
					
					<div class="form-group">
						<label for='e-mail'> E-mail </label>
						<input type='text' name='e-mail' id='e-mail' class="form-control" />
					</div>
					
					
					
										
					
						<button type="submit" class="btn btn-default">Отправить</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

