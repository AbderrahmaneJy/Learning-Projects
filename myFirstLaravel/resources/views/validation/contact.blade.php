@extends('validation.template')

@section('titre')
@stop

@section('contenu')
<br>
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
        <div class="panel-heading">Contactez-moi</div>
        <div class="panel-body">
            <form action="{{ url('contact') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                    @error('nom')
                    <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Votre email">
                    @error('email')
                    <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="texte" class="form-control" placeholder="Votre message"></textarea>
                    @error('texte')
                    <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
                <input type="submit" value="Envoyer !" class="btn btn-info pull-right">
            </form>
        </div>
    </div>
</div>
@endsection
