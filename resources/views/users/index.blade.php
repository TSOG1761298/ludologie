 <!-- etape 6 premier view a partir du faker voir aussi user.php -->

 <!-- etape8 on rajoute extend et on le dit dans quel section il veut qu il s extent et quand areter avec section end -->
@extends('techno.index')
@section('article')
    @component('techno.post')
        @slot('titre')
            {{$user->prenom}} <em>{{$user->nom}}</em>
        @endslot
        @slot('article')
            <div>{{$user->email}}</div>
            <div>{{$user->tel}}</div>
                <address>
                    <div>{{$user->adresse}}</div>
                    <div>{{$user->ville}} {{$user->province}}</div>
                    <div>{{$user->codepostale}}</div>
                </address>
            <p>{{$user->citation}}</p>
            @endslot
        @endcomponent
 @endsection

 
 