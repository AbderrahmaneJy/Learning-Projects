@extends('template')
@section('contenu')
<form> <method="POST" action="http://localhost/users" accept-charset="UTF-8">
<input name="_token" type="hidden"
value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI">
 <label for="nom">Entrez votre nom : </label>
 <input name="nom" type="text" id="nom">
 <input type="submit" value="Envoyer !">
 </form>
@endsection