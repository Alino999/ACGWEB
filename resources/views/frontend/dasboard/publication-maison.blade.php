@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3>Inserer vos informations dans ce formulaire </h3>
                <form action="{{url('publication')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Titre</label>
                            <input type="text" name="titre" class="form-control" id="formGroupExampleInput" aria-describedby="textHelp" placeholder="Mettez un titre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Quartier</label>
                            <input type="text" name="quartier" class="form-control" id="formGroupExampleInput" aria-describedby="nameHelp" placeholder="Nom du quartier">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Ville</label>
                            <select name="ville" id="inputState" class="form-control">
                            <option selected >Ouagadougou</option>
                            <option>Bobo Dioulasso</option>
                            <option>Manga</option>
                            <option>Kaya</option>
                            <option>Pô</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="formGroupExampleInput">Société</label>
                            <input type="text" name="societe"  class="form-control" id="formGroupExampleInput" aria-describedby="inputHelp" placeholder="Nom de la société">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Une petite description de la maison"></textarea> 
                        </div>
                        <div class="form-group col-md-4">
                            <label class="text-center " for="file-upload" name="image" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer; height: 120px; width:280px;"> <input style="display: none;" type="file" 
                             id="file-upload"> <br> <i class="bi bi-upload lg-Heading"></i> <br> Inserer une image</label>
                        </div>
                    </div>
                    
                    
                    
                    
                    

                    <button type="submit" class="btn btn-success">Envoyer</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection