@extends('main')

@section('title', 'add')

@section('contents')
<div class="row">
    <div class="col s12">
        <nav class="teal lighten-2 nav-extended ">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">&nbsp;&nbsp;Wedstrijdkalender</a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="competitions/1">Eerste klasse A</a></li>
                    <li class="tab"><a href="competitions/2">Nepcompetitie</a></li>
                </ul>
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light amber darken-2" href="games/add">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>
    <form class="col s12" method="post" action="{{ url('/games/add') }}">
        @csrf
        <h2>Wedstrijd toevoegen</h2>
        <div class="row">
            <div class="col s12 red-text">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="input-field col s12 m6">
                <select name="home_club_id">
                    <option value="" disabled selected>Selecteer thuisploeg</option>
                    @foreach($clubs as $club)
                    <option value="{{ $club->id }}"
                    {{ old('home_club_id', '') == $club->id ? "selected" : "" }}
                        >{{ $club->name }}</option>
                    @endforeach
                </select>
                <label>Thuisploeg</label>
            </div>
            <div class="input-field col s12 m6">
                <select name="away_club_id">
                    <option value="" disabled selected>Selecteer uitploeg</option>
                    @foreach($clubs as $club)
                        <option value="{{ $club->id }}"
                            {{ old('away_club_id', '') == $club->id ? "selected" : "" }}
                        >{{ $club->name }}</option>
                    @endforeach
                </select>
                <label>Uitploeg</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="nog niet gespeeld" id="home_score" name="home_score" type="number" value="{{ old('home_score', '') }}">
                <label for="home_score">Score thuisploeg</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="nog niet gespeeld" id="away_score" name="away_score" type="number" value="{{ old('away_score', '') }}">
                <label for="away_score">Score uitploeg</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="starts_at" name="starts_at" type="datetime-local" value="{{ old('starts_at', '') }}">
                <label for="starts_at" class="active">Tijdstip</label>
            </div>
            <div class="input-field col s12 m6">
                <button class="waves-effect waves-light btn right">Voeg toe</button>
            </div>
        </div>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
</script>
@endsection
