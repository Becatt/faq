			

			<div class="form-group row">
				{!! Form::label('login', 'Логин: *', ['class' => 'col-sm-2 col-form-label']) !!}
				<div class="col-sm-3">
					{!! Form::text('login', null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group row">
				{!! Form::label('password', 'Пароль: *', ['class' => 'col-sm-2 col-form-label']) !!}
				<div class="col-sm-3">
					{!! Form::text('password', null, ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
			</div>		