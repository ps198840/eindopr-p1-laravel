@extends('layouts.app')
@section('content')
    <table>
    @foreach ($teams as $team)
        <tr>
            <td><li>{{ $team }}</li></td>
        </tr>
    @endforeach
    </table>
@endsection
