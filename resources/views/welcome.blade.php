@extends('default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h2>NFL League Table</h2></th>
                        </tr>
                        <tr>
                            <th>Team Name</th>
                            <th>Net Points</th>
                            <th>PF</th>
                            <th>PA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>T</th>
                            <th>TDs</th>
                            <th>Conference</th>
                            <th>Division</th>
                            <th>Edit Team</th>
                            <th>Delete Team</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jaguars</td>
                            <td>132</td>
                            <td>144</td>
                            <td>12</td>
                            <td>13</td>
                            <td>2</td>
                            <td>1</td>
                            <td>43</td>
                            <td>AFC</td>
                            <td>South</td>
                            <td><a href="" class="btn btn-primary">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection;