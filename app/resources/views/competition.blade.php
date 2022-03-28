@extends('main')

@section('title', $selectedCompetition)

@section('contents')
<div class="row">
    <div class="col s12">
        <nav class="teal lighten-2 nav-extended ">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">&nbsp;&nbsp;Wedstrijdkalender</a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    @foreach($competitions as $competition)
                    <li class="tab"><a @if($competition->name === $selectedCompetition) class="active" @endif href="{{ url('competitions/' . $competition->id) }}">{{ $competition->name }}</a></li>
                    @endforeach
                </ul>
                <a class="btn-floating btn-large halfway-fab waves-effect waves-light amber darken-2" href="{{ url('games/add') }}">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>
    <div class="col s12">
        <h2>{{ $selectedCompetition }}</h2>
        <hr/>

        <h3>Wedstrijden</h3>
        <a @if($filter != 'scored') class="waves-effect waves-light btn-small" @else class="waves-effect waves-light btn-small disabled"  @endif href="?score=yes">Met score</a>
        <a @if($filter != 'unscored') class="waves-effect waves-light btn-small" @else class="waves-effect waves-light btn-small disabled"  @endif href="?score=no">Zonder score</a>
        <a @if($filter != 'all') class="waves-effect waves-light btn-small" @else class="waves-effect waves-light btn-small disabled"  @endif href="?">Allemaal</a>
        <table class="striped bordered">
            <thead>
            <tr>
                <th>Tijdstip</th>
                <th>Thuisploeg</th>
                <th>Score</th>
                <th>Uitploeg</th>
                <th>Locatie</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $games as $game)
                <tr>
                    <td class="purple-text text-lighten-1">{{ $game->starts_at }}</td>
                    <td>{{ $game->homeClub->name }}</td>
                    <td>{{ $game->home_score }} - {{ $game->away_score }}</td>
                    <td>{{ $game->awayClub->name }}</td>
                    <td class="teal-text text-darken-2">{{ $game->homeClub->clubGround->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr/>
    </div>
</div>
@endsection
