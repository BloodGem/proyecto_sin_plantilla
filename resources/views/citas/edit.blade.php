<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
               
                        <form action="" method="POST">
                            {!! csrf_field() !!}
    
                            <div class="row mb-3">
                                <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $citas->id }}" required autocomplete="id">
    
                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="paciente" class="col-md-4 col-form-label text-md-end">{{ __('Paciente') }}</label>
    
                                <div class="col-md-6">
                                    <input id="paciente" type="text" class="form-control @error('paciente') is-invalid @enderror" name="paciente" value="{{ $citas->paciente }}" required autocomplete="paciente" autofocus>
    
                                    @error('paciente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="comentario" class="col-md-4 col-form-label text-md-end">{{ __('Comentario') }}</label>
    
                                <div class="col-md-6">
                                    <input id="comentario" type="text" class="form-control @error('comentario') is-invalid @enderror" name="comentario" value="{{ $citas->comentario }}" required autocomplete="comentario">
    
                                    @error('comentario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="start" class="col-md-4 col-form-label text-md-end">{{ __('Start') }}</label>
    
                                <div class="col-md-6">
                                    <input id="start" type="date" class="form-control @error('start') is-invalid @enderror" name="start" value="{{ $citas->start }}" required autocomplete="start">
    
                                    @error('start')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('End') }}</label>
    
                                <div class="col-md-6">
                                    <input id="end" type="date" class="form-control @error('end') is-invalid @enderror" name="end" value="{{ $citas->end }}" required autocomplete="end">
    
                                    @error('end')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                
        </div>
    </div>
</body>
</html>

